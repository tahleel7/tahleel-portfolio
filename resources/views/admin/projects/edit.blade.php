<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Edit Project - {{ $project->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 p-6 md:p-12 text-left">
    <div class="max-w-2xl mx-auto">
        <a href="{{ route('admin.projects.index') }}" class="text-slate-400 hover:text-white text-xs block mb-4">← Back to Dashboard</a>
        <h1 class="text-2xl font-bold text-white mb-6">Edit Project</h1>

        <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 shadow-xl">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-2">Project Title *</label>
                    <input type="text" name="title" value="{{ old('title', $project->title) }}" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-2">Main Thumbnail Image</label>
                    <div class="flex items-center gap-4 mb-3 bg-slate-950 p-3 rounded-xl border border-slate-800/60">
                        <img src="{{ asset('storage/' . $project->image) }}" class="w-20 h-12 object-cover rounded-lg border border-slate-800" alt="Current Image">
                        <span class="text-[11px] text-slate-500">Current active thumbnail. Uploading a new one will replace it.</span>
                    </div>
                    <input type="file" name="image" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2 text-xs text-slate-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-2">Tech Stack *</label>
                    <input type="text" name="tech_stack" value="{{ old('tech_stack', $project->tech_stack) }}" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-blue-500">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 border-t border-b border-slate-800/60 py-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Add Gallery Images (Optional)</label>
                        <p class="text-[10px] text-slate-500 mb-2">Upload new images to add to the gallery</p>
                        <input type="file" name="gallery[]" multiple class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2 text-xs text-slate-400 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Replace Video Demo (Optional)</label>
                        <p class="text-[10px] text-slate-500 mb-2">Supported formats: MP4, MOV</p>
                        <input type="file" name="video" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2 text-xs text-slate-400 focus:outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-300 mb-2">Description & Solution Details *</label>
                    <textarea name="description" rows="5" required class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-2.5 text-sm text-slate-100 focus:outline-none focus:border-blue-500 resize-none">{{ old('description', $project->description) }}</textarea>
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t border-slate-800">
                    <a href="{{ route('admin.projects.index') }}" class="bg-slate-800 hover:bg-slate-700 text-slate-300 font-semibold px-6 py-2 rounded-xl text-sm transition-all">Cancel</a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold px-6 py-2 rounded-xl text-sm transition-all shadow-lg shadow-blue-600/20">Update Changes</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>