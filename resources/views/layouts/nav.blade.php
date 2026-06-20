 <nav class="h-16 w-full bg-white border-b border-slate-100 shadow-sm flex items-center shrink-0 z-40 px-4 md:px-8 justify-between">
            
            <div class="flex items-center gap-3">
                <button @click="sidebarOpen = !sidebarOpen" class="md:hidden p-2 text-slate-600 hover:bg-slate-100 rounded-xl transition-colors cursor-pointer focus:outline-none">
                    <span class="text-xl">☰</span>
                </button>
                
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 md:h-10">
                    <span class="hidden sm:inline-block text-xs text-slate-400 border-r border-slate-200 pr-2 mr-1"> نظام إدارة  مكتبة أبوي الشيخ      </span>
                </div>
            </div>

            <div class="flex items-center gap-4">
                
                <!-- <div class="w-48 sm:w-64 md:w-72 hidden sm:block">
                    <input type="search" placeholder="بحث سريع برقم الكود أو العنوان..." class="w-full text-xs md:text-sm bg-slate-50 border border-slate-200 rounded-xl px-4 py-2 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 focus:bg-white transition-all outline-none">
                </div> -->

               
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" id="doctorMenuBtn" type="button" class="flex items-center focus:outline-none cursor-pointer" aria-expanded="false">
                            <img src=" {{ asset('images/admin_pic.jpg') }}" alt="Profile Picture" class="w-9 h-9 md:w-10 md:h-10 rounded-full object-cover border border-slate-200 shadow-sm">
                        </button>

                        <div x-show="open" 
                             x-cloak
                             @click.outside="open = false" 
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             id="doctorMenu" 
                             class="absolute left-0 top-12 z-50 w-56 flex flex-col space-y-1 rounded-xl bg-white p-2 shadow-xl border border-slate-100 text-xs">

                            <div class="font-bold px-3 py-2 text-slate-900 border-b border-slate-50">
                                الشيخ
                             </div>
                            
                            <ul aria-labelledby="avatarButton" class="py-1 space-y-0.5 text-slate-600 font-medium">
                                     
                                     <li>
                                        <a href=" " class="block px-3 py-2 hover:bg-slate-50 hover:text-blue-600 rounded-lg transition-colors">لوحة التحكم</a>
                                    </li>
                                </ul>
                                 <li>
                                    <a href=" " class="block px-3 py-2 hover:bg-slate-50 hover:text-blue-600 rounded-lg transition-colors">الإعدادات</a>
                                </li>
                            </ul>

                            <div class="pt-1 border-t border-slate-50 px-1">
                                <form action=" " method="post">
                                    @csrf
                                    <button type="submit" class="w-full text-right text-rose-600 font-bold px-2 py-1.5 hover:bg-rose-50 rounded-lg transition-colors cursor-pointer">تسجيل الخروج</button>
                                </form>
                            </div>
                        </div>
                    </div>
                

                 
            </div>
        </nav>