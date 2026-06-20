<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة مكتبة أبوي الشيخ</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght=300;400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style> 
        body { font-family: 'Cairo', sans-serif; } 
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans" x-data="{ sidebarOpen: false }">

    <div class="h-screen flex flex-col overflow-hidden">
        
       @include('layouts.nav')

        <div class="flex flex-1 relative overflow-hidden">

            <aside :class="sidebarOpen ? 'translate-x-0' : 'translate-x-full md:translate-x-0'" 
                   class="fixed md:sticky top-0 right-0 z-30 w-64 bg-slate-950 text-slate-200 flex flex-col justify-between p-4 shadow-xl shrink-0 h-[calc(100vh-4rem)] transition-transform duration-300 ease-in-out overflow-y-auto">
                <div>
                    <div class="flex items-center gap-3 px-2 py-4 border-b border-slate-900">
                        <div class="bg-blue-600 text-white p-2.5 rounded-xl font-bold shadow-lg shadow-blue-600/30">📚</div>
                        <div>
                            <h1 class="text-md font-bold text-white tracking-wide">مكتبة أبوي الشيخ</h1>
                            <p class="text-xs text-slate-500">برنامج إدارة المكتبة المنزلية</p>
                        </div>
                    </div>

                    <nav class="mt-6 space-y-1">
                        <a href=" " class="flex items-center gap-3 px-4 py-3 text-sm font-semibold rounded-xl {{ request()->routeIs('admin.books.index') ? 'bg-blue-600 text-white shadow-md shadow-blue-600/10' : 'text-slate-400 hover:bg-slate-900 hover:text-white transition-colors' }}">
                            <span>📊</span> لوحة تحكم الكتب
                        </a>

                        <div class="block" x-data="{ open: {{ request()->routeIs('admin.structure.*') ? 'true' : 'false' }} }">
                            <button type="button" @click="open = !open" class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium rounded-xl text-slate-400 hover:bg-slate-900 hover:text-white transition-colors cursor-pointer outline-none group">
                                <div class="flex items-center gap-3">
                                    <span>🗺️</span> 
                                    <span>إدارة الهيكل الفعلي</span>
                                </div>
                                <div :class="open ? 'rotate-180' : 'rotate-0'" class="transition-transform duration-200">
                                    @include('svg.dropDown')
                                </div>
                            </button>

                            <ul x-show="open" x-cloak class="pr-7 mt-1 space-y-1">
                                <li>
                                    <a href="{{ route('admin.structure.index', ['tab' => 'manage-directions-tab']) }}" 
                                       class="sidebar-sub-link block py-2 px-3 text-xs font-medium {{ request('tab') == 'manage-directions-tab' ? 'text-blue-400 font-bold' : 'text-slate-400 hover:text-blue-400' }} rounded-lg transition-colors">
                                        🏢 إدارة الجهات
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.structure.index', ['tab' => 'manage-cabinets-tab']) }}" 
                                       class="sidebar-sub-link block py-2 px-3 text-xs font-medium {{ request('tab') == 'manage-cabinets-tab' ? 'text-blue-400 font-bold' : 'text-slate-400 hover:text-blue-400' }} rounded-lg transition-colors">
                                        🗄️ إدارة الخزائن
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.structure.index', ['tab' => 'manage-shelves-tab']) }}" 
                                       class="sidebar-sub-link block py-2 px-3 text-xs font-medium {{ request('tab') == 'manage-shelves-tab' ? 'text-blue-400 font-bold' : 'text-slate-400 hover:text-blue-400' }} rounded-lg transition-colors">
                                        📏 إدارة الأرفف
                                    </a>
                                </li>
                            </ul>
                        </div>
                                                                     
                        <div class="block" x-data="{ open: {{ request()->routeIs('admin.books.*') ? 'true' : 'false' }} }">
                            <button type="button" @click="open = !open" class="w-full flex items-center justify-between px-4 py-3 text-sm font-medium rounded-xl text-slate-400 hover:bg-slate-900 hover:text-white transition-colors cursor-pointer outline-none group">
                                <div class="flex items-center gap-3">
                                    <span>📚</span> 
                                    <span>إدارة الكتب</span>
                                </div>
                                <div :class="open ? 'rotate-180' : 'rotate-0'" class="transition-transform duration-200">
                                    @include('svg.dropDown')
                                </div>
                            </button>

                            <ul x-show="open" x-cloak class="pr-7 mt-1 space-y-1">
                                <li>
                                    <a href="{{ route('admin.books.check') }}" class="block py-2 px-3 text-xs font-medium {{ request()->routeIs('admin.books.create') ? 'text-blue-400 font-bold' : 'text-slate-400 hover:text-blue-400' }} rounded-lg transition-colors">
                                        ➕ إضافة كتاب (التسكين الذكي)
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.books.check') }}" class="block py-2 px-3 text-xs font-medium {{ request()->routeIs('admin.books.index') && !request()->has('sort') ? 'text-blue-400 font-bold' : 'text-slate-400 hover:text-blue-400' }} rounded-lg transition-colors">
                                        🔄 عرض وترتيب الكتب أبجدياً
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-3 px-4 py-3 text-sm font-medium rounded-xl {{ request()->routeIs('admin.categories.index') ? 'bg-blue-600 text-white font-bold' : 'text-slate-400 hover:bg-slate-900 hover:text-white transition-colors' }}">
                            <span>🗂️</span> التصنيفات العلمية
                        </a>
                    </nav>
                </div>

                <div class="bg-slate-900/60 p-4 rounded-2xl border border-slate-900/80 space-y-2.5 mt-4">
                    <p class="text-xs text-slate-500 font-bold uppercase tracking-wider pb-1 border-b border-slate-900">إحصائيات المكتبة</p>
                    <div class="flex justify-between items-center text-xs">
                        <span class="text-slate-400">إجمالي الكتب:</span>
                        <span class="font-bold text-blue-400 text-sm">{{ $totalBooksCount ?? 2075 }}</span>
                    </div>
                    <div class="flex justify-between items-center text-xs">
                        <span class="text-slate-400">التصنيفات المتاحة:</span>
                        <span class="font-bold text-blue-400 text-sm">{{ $totalCategoriesCount ?? 24 }}</span>
                    </div>
                </div>
            </aside>

            <div x-show="sidebarOpen" 
                 x-cloak
                 @click="sidebarOpen = false" 
                 class="fixed inset-0 bg-slate-900/40 z-20 md:hidden backdrop-blur-xs transition-opacity">
            </div>

            <main class="flex-1 p-4 md:p-8 overflow-y-auto bg-slate-50">
                <div class="max-w-7xl w-full mx-auto">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>

</body>
</html>