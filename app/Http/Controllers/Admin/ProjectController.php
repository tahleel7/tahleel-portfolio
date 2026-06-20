<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        // جلب المشاريع مع الميديا المرتبطة بها لتجنب مشكلة الـ N+1 Query
        $projects = Project::with('media')->latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048', 
            'tech_stack' => 'required|string|max:255',
            'description' => 'required|string',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', 
            'video' => 'nullable|file|mimetypes:video/mp4,video/quicktime,video/ogg,video/x-matroska|max:204800', 
        ]);

        $mainImagePath = $request->file('image')->store('projects', 'public');

        $project = Project::create([
            'title' => $request->title,
            'image' => $mainImagePath,
            'tech_stack' => $request->tech_stack,
            'description' => $request->description,
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $galleryFile) {
                $path = $galleryFile->store('projects/media', 'public');
                ProjectMedia::create([
                    'project_id' => $project->id,
                    'file_path' => $path,
                    'type' => 'image',
                ]);
            }
        }

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('projects/media', 'public');
            ProjectMedia::create([
                'project_id' => $project->id,
                'file_path' => $videoPath,
                'type' => 'video',
            ]);
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully with its media items!');
    }

    // 4. دالة عرض صفحة التعديل المضافة حديثاً
    public function edit(Project $project)
    {
        // نمرر المشروع الحالي، ويمكنك الوصول للميديا في الـ blade عبر $project->media
        return view('admin.projects.edit', compact('project'));
    }

    // 5. دالة معالجة التحديث المضافة حديثاً
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // اختياري عند التعديل
            'tech_stack' => 'required|string|max:255',
            'description' => 'required|string',
            'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', 
            'video' => 'nullable|file|mimetypes:video/mp4,video/quicktime,video/ogg,video/x-matroska|max:204800', 
        ]);

        // تحديث البيانات الأساسية للمشروع
        $projectData = [
            'title' => $request->title,
            'tech_stack' => $request->tech_stack,
            'description' => $request->description,
        ];

        // إذا قام المسؤول برفع غلاف جديد، احذف القديم وخزّن الجديد
        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $projectData['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($projectData);

        // إذا تم رفع صور جديدة للمعرض، أضفها للمشروع دون مساس الصور القديمة
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $galleryFile) {
                $path = $galleryFile->store('projects/media', 'public');
                ProjectMedia::create([
                    'project_id' => $project->id,
                    'file_path' => $path,
                    'type' => 'image',
                ]);
            }
        }

        // إذا تم رفع فيديو جديد، احذف الفيديو القديم من السيرفر والجدول أولاً، ثم ارفع الجديد
        if ($request->hasFile('video')) {
            $oldVideo = $project->media()->where('type', 'video')->first();
            if ($oldVideo) {
                Storage::disk('public')->delete($oldVideo->file_path);
                $oldVideo->delete();
            }

            $videoPath = $request->file('video')->store('projects/media', 'public');
            ProjectMedia::create([
                'project_id' => $project->id,
                'file_path' => $videoPath,
                'type' => 'video',
            ]);
        }

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        foreach ($project->media as $mediaItem) {
            Storage::disk('public')->delete($mediaItem->file_path);
        }
        
        $project->delete(); 
        
        return redirect()->route('admin.projects.index')->with('success', 'Project and all associated media deleted.');
    }
}