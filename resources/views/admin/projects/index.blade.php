<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Manage Projects</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 p-6 md:p-12 text-left">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-10 pb-6 border-b border-slate-800">
            <div>
                <h1 class="text-2xl font-bold text-white">Admin Dashboard</h1>
                <p class="text-slate-400 text-xs mt-1">Dynamically manage portfolio items</p>
            </div>
            <a href="{{ route('admin.projects.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold px-4 py-2.5 rounded-xl text-sm transition-all shadow-lg shadow-blue-600/20">➕ Add New Project</a>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-950/40 border border-emerald-500/20 text-emerald-400 rounded-xl text-xs">✨ {{ session('success') }}</div>
        @endif

        <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden shadow-2xl">
            <table class="w-full text-left border-collapse text-sm">
                <thead>
                    <tr class="bg-slate-950 border-b border-slate-800 text-slate-400 text-xs font-mono uppercase">
                        <th class="p-4">Image</th>
                        <th class="p-4">Title</th>
                        <th class="p-4">Description</th>
                        <th class="p-4">Tech Stack</th>
                        <th class="p-4 text-center">Media / Demo</th>
                        <th class="p-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-800/40">
                    @forelse($projects as $project)
                        <tr class="hover:bg-slate-800/20 transition-colors">
                            <td class="p-4">
                                <img src="{{ asset('storage/' . $project->image) }}" class="w-16 h-10 object-cover rounded-md border border-slate-700 shadow-md">
                            </td>
                            
                            <td class="p-4 font-bold text-white whitespace-nowrap">{{ $project->title }}</td>
                            
                            <td class="p-4 text-xs text-slate-400 max-w-xs truncate" title="{{ $project->description }}">
                                {{ $project->description }}
                            </td>
                            
                            <td class="p-4 text-xs text-indigo-400 font-mono">{{ $project->tech_stack }}</td>
                            
                            <td class="p-4 text-center text-xs text-slate-500">
                                <div class="flex items-center justify-center gap-2">
                                    @if($project->media->where('type', 'video')->count() > 0)
                                        <span class="bg-slate-950 border border-slate-800 text-blue-400 px-2 py-0.5 rounded text-[10px]" title="Has Video Demo">📹 Video</span>
                                    @endif

                                    @if($project->media->where('type', 'image')->count() > 0)
                                        <span class="bg-slate-950 border border-slate-800 text-purple-400 px-2 py-0.5 rounded text-[10px]" title="Gallery Images">
                                            🖼️ Gallery ({{ $project->media->where('type', 'image')->count() }})
                                        </span>
                                    @endif

                                    @if($project->media->count() == 0)
                                        <span class="text-slate-600">-</span>
                                    @endif
                                </div>
                            </td>
                            
                            <td class="p-4">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('admin.projects.edit', $project->id) }}" class="bg-blue-500/10 hover:bg-blue-600 text-blue-400 hover:text-white px-3 py-1.5 rounded-lg text-xs transition-all border border-blue-500/20 font-medium">
                                        ✏️ Edit
                                    </a>

                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Delete this project permanently?');" class="inline">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500/10 hover:bg-red-600 text-red-400 hover:text-white px-3 py-1.5 rounded-lg text-xs transition-all border border-red-500/20 font-medium">
                                            🗑 Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-8 text-center text-slate-500 text-xs">No projects found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>