@extends('portfolio.layout')

@section('content')

    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-slate-950 pt-20">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/haloola.jpg') }}" class="w-full h-full object-cover opacity-20" alt="Background">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-150 via-slate-900/80 to-transparent"></div>
        </div>
        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full grid grid-cols-1 lg:grid-cols-2 gap-12 items-center py-16">
            <div class="text-left order-2 lg:order-1">
                <div data-aos="fade-down" class="relative inline-flex items-center gap-2 bg-slate-900/80 border border-indigo-500/30 px-5 py-2 rounded-full text-xs text-indigo-300 mb-6 group overflow-hidden shadow-lg shadow-indigo-500/5">
                    <span class="absolute inset-0 rounded-full bg-indigo-500/10 animate-ping opacity-75 pointer-events-none"></span>
                    <span class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-indigo-400/10 opacity-40 group-hover:animate-shine"></span>
                    <span class="relative z-10 flex items-center justify-center animate-bounce duration-1000">🚀</span> 
                    <span class="relative z-10 font-mono tracking-widest font-bold bg-gradient-to-r from-indigo-200 via-indigo-400 to-indigo-200 bg-clip-text text-transparent uppercase">
                        FULL STACK DEVELOPER
                    </span>
                </div>
                <h1 data-aos="fade-up" data-aos-delay="100" class="text-4xl md:text-6xl font-black text-white leading-tight mb-2">TAHLEEL NAZAR</h1>
                <h2 data-aos="fade-up" data-aos-delay="200" class="text-2xl md:text-4xl font-bold text-indigo-400 mb-6">SOFTWARE ENGINEER</h2>
                <p data-aos="fade-up" data-aos-delay="300" class="text-slate-300 text-sm md:text-base leading-relaxed mb-10 max-w-xl">
                    Full-Stack Software Engineer specializing in building intelligent systems and integrated web solutions. I bridge the gap between robust backend architectures and clean, responsive user interfaces.
                </p>
                <div data-aos="fade-up" data-aos-delay="400" class="flex flex-wrap gap-4">
                    <a href="#projects" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 shadow-lg shadow-indigo-600/20 text-sm">View Projects 🚀 </a>
                    <a href="#contact" class="bg-slate-900 hover:bg-slate-800 border border-slate-800 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300 text-sm">Contact Me</a>
                </div>
            </div>
            <div class="flex justify-center order-1 lg:order-2" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-3xl bg-gradient-to-br from-indigo-500/20 to-blue-500/10 border border-slate-800 flex items-center justify-center backdrop-blur-sm overflow-hidden">
                    <div class="absolute inset-4 rounded-2xl border border-dashed border-slate-700/60 animate-spin-slow z-10"></div>
                    <img src="{{ asset('images/haloo_pic.jpg') }}" class="w-full h-full object-cover" alt="Tahleel Nazar">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-24 bg-slate-900/40 border-y border-slate-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl" data-aos="fade-up">
                <h3 class="text-indigo-400 text-xs font-bold tracking-widest uppercase mb-2"> 01 . About Me</h3>
                <h2 class="text-2xl md:text-3xl font-extrabold text-white mb-6">Academic & Professional Background</h2>
                <p class="text-slate-300 text-sm md:text-base leading-relaxed">
                    I am a Computer Science graduate with First Class Honours—ranking 1st in the department at Sudan University of Science and Technology—and currently serving as a University Teaching Assistant. 
                    Notably, my graduation project (Developing a Pharmacy System for Ordering and Delivering Medicines using Drone) was honored with the Scientific Innovation Award for its cutting-edge integration of software and hardware.
                    With over 5 years of professional experience spanning freelance full-stack development, web solutions, and standalone desktop environments, I bridge the gap between heavy-duty backends and modern interfaces.
                    My expertise extends into Data Science, Deep Learning, and Data Mining, allowing me to build intelligent, data-driven Models.
                </p>
            </div>
        </div>
    </section>

    <section id="tech-stack" class="py-24 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16" data-aos="fade-up">
                <h3 class="text-indigo-400 text-xs font-bold tracking-widest uppercase mb-2"> 02 . Tech Stack</h3>
                <h2 class="text-2xl md:text-3xl font-black text-white">Core Technologies I Use</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800/80" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-indigo-400 text-lg font-bold mb-4">🎨 Frontend Development</div>
                    <ul class="space-y-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ HTML5</li>
                        <li>✔ CSS3</li>
                        <li>✔ JavaScript</li>
                        <li>✔ Tailwind CSS</li>
                        <li>✔ Bootstrap</li>
                        <li>✔ Flutter</li>
                    </ul>
                </div> 
                <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800/80" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-indigo-400 text-lg font-bold mb-4">⚙️ Backend Development</div>
                    <ul class="space-y-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ Laravel Framework</li>
                        <li>✔ PHP Core & OOP</li>
                        <li>✔ MySQL</li>
                        <li>✔ SQLite</li>
                        <li>✔ Firebase</li>
                    </ul>
                </div>
                <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800/80" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-indigo-400 text-lg font-bold mb-4">📊 Data Science & ML</div>
                    <ul class="space-y-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ Python & Machine Learning techniques</li>
                        <li>✔ Data Mining</li>
                    </ul>
                </div>
                <div class="bg-slate-900/50 p-6 rounded-2xl border border-slate-800/80" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-indigo-400 text-lg font-bold mb-4">📊 Tools</div>
                    <ul class="space-y-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ Git & GitHub</li>
                        <li>✔ NativePHP / Electron.js</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 bg-slate-900/20 border-t border-t-slate-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16" data-aos="fade-up">
                <h3 class="text-indigo-400 text-xs font-bold tracking-widest uppercase mb-2"> 03 . Portfolio</h3>
                <h2 class="text-2xl md:text-3xl font-black text-white">Recent Systems & Applications</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <div data-aos="zoom-in-up" class="group bg-slate-900 border border-slate-800/80 rounded-2xl overflow-hidden transition-all duration-300 hover:-translate-y-2 shadow-xl flex flex-col justify-between">
                        <div>
                            <div class="relative overflow-hidden aspect-video bg-slate-950">
                                <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="">
                            </div>
                            
                            <div class="p-5 text-left">
                                <h4 class="text-lg font-bold text-white mb-2">{{ $project->title }}</h4>
                                <p class="text-slate-400 text-xs md:text-sm leading-relaxed mb-4 line-clamp-3">{{ $project->description }}</p>
                                
                                <div class="flex flex-wrap gap-1.5 mb-4">
                                    @foreach(explode(',', $project->tech_stack) as $tech)
                                        <span class="text-[10px] bg-slate-950 text-indigo-400 border border-slate-800 px-2 py-0.5 rounded font-mono">{{ trim($tech) }}</span>
                                    @endforeach
                                </div>

                                <div class="space-y-4 mt-4 pt-4 border-t border-slate-800/60">
                                    
                                    @if($project->media->where('type', 'image')->count() > 0)
                                        <div>
                                            <p class="text-xs text-slate-400 mb-2 font-semibold flex items-center gap-1"><span>🖼️</span> Project Gallery:</p>
                                            <div class="relative w-full aspect-video bg-slate-950 rounded-xl border border-slate-800 overflow-hidden group/carousel" id="carousel-{{ $project->id }}">
                                                
                                                <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out slider-track" style="transform: translateX(0px);">
                                                    @foreach($project->media->where('type', 'image') as $index => $mediaItem)
                                                        <div class="w-full h-full shrink-0 select-none slide">
                                                            <img src="{{ asset('storage/' . $mediaItem->file_path) }}" class="w-full h-full object-cover" alt="Project Image {{ $index + 1 }}">
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <button type="button" onclick="moveSlide('{{ $project->id }}', -1)" class="absolute left-3 top-1/2 -translate-y-1/2 z-20 bg-slate-900/90 hover:bg-indigo-600 border border-slate-800 text-white p-2 rounded-lg opacity-0 group-hover/carousel:opacity-100 transition-all duration-300 focus:outline-none">
                                                    &larr;
                                                </button>

                                                <button type="button" onclick="moveSlide('{{ $project->id }}', 1)" class="absolute right-3 top-1/2 -translate-y-1/2 z-20 bg-slate-900/90 hover:bg-indigo-600 border border-slate-800 text-white p-2 rounded-lg opacity-0 group-hover/carousel:opacity-100 transition-all duration-300 focus:outline-none">
                                                    &rarr;
                                                </button>
                                                
                                                <div class="absolute bottom-3 inset-x-0 flex justify-center gap-1.5 z-20 dots-container">
                                                    @foreach($project->media->where('type', 'image') as $index => $mediaItem)
                                                        <span class="w-2 h-2 rounded-full bg-slate-700 transition-all duration-300 @if($index == 0) !bg-indigo-400 w-4 @endif"></span>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($project->media->where('type', 'video')->count() > 0)
                                        <div>
                                            <p class="text-xs text-slate-400 mb-2 font-semibold flex items-center gap-1"><span>📹</span> Video Demo:</p>
                                            @foreach($project->media->where('type', 'video') as $videoItem)
                                                <div class="rounded-xl overflow-hidden border border-slate-800 bg-slate-950">
                                                    <video controls preload="metadata" class="w-full aspect-video">
                                                        <source src="{{ asset('storage/' . $videoItem->file_path) }}" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                </div> </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12 text-slate-500 text-sm">Projects are being uploaded soon...</div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="experience" class="py-24 bg-slate-950">
        <div class="max-w-3xl mx-auto px-6">
            <div class="mb-16 text-center" data-aos="fade-up">
                <h3 class="text-indigo-400 text-xs font-bold tracking-widest uppercase mb-2"> 04 . Experience</h3>
                <h2 class="text-2xl font-black text-white">WORK EXPERIENCE & VOLUNTEERING </h2>
            </div>
            <div class="relative border-l border-slate-800 ml-4 space-y-10 text-left">
                <div class="relative pl-8" data-aos="fade-up">
                    <div class="absolute -left-2 top-1.5 w-4 h-4 rounded-full bg-indigo-500 border-4 border-slate-950"></div>
                    <span class="text-xs font-mono text-indigo-400 bg-indigo-500/10 px-2 py-0.5 rounded">2023 - Present</span>
                    <h4 class="text-base font-bold text-white mt-2">Full-Stack Web Developer (Freelance)</h4>
                    <ul class="space-y-3 mt-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ Developed and deployed custom web applications using Laravel, MySQL, and Tailwind CSS, managing the full SDLC from client requirements to production.</li>
                        <li>✔ Converted Laravel web applications into cross-platform desktop applications using Electron.js and NativePHP, delivering standalone (.exe) executables optimized for 100% offline functionality.</li>
                        <li>✔ Led the end-to-end project lifecycle ensuring on-time delivery.</li>
                    </ul>
                </div>
                <div class="relative pl-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute -left-2 top-1.5 w-4 h-4 rounded-full bg-slate-700 border-4 border-slate-950"></div>
                    <span class="text-xs font-mono text-indigo-400 bg-indigo-500/10 px-2 py-0.5 rounded"> 2025 – present</span>
                    <h4 class="text-base font-bold text-white mt-2">Teacher Assistant – Computer Science and Information Technology College </h4>
                    <ul class="space-y-3 mt-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ Instruct and supervise computer science lab sessions and evaluating undergraduate coursework.</li>
                        <li>✔ Mentor students through hands-on projects and continuous technical follow-ups, enhancing their practical programming and skills.</li>
                    </ul>
                </div>
                <div class="relative pl-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute -left-2 top-1.5 w-4 h-4 rounded-full bg-slate-700 border-4 border-slate-950"></div>
                    <span class="text-xs font-mono text-indigo-400 bg-indigo-500/10 px-2 py-0.5 rounded"> 2025 – present</span>
                    <h4 class="text-base font-bold text-white mt-2">Educational Content Creator | YouTube </h4>
                    <ul class="space-y-3 mt-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ Produced a comprehensive, hands-on Data Mining tutorial playlist, explained theoretical Data Mining concepts and their practical implementation (Python-based).</li>
                        <li>✔ Foster active engagement within the online student community, addressing technical queries and clarifying core data mining concepts, achieving 100% positive feedback from students.</li>
                    </ul> 
                </div>
                <div class="relative pl-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute -left-2 top-1.5 w-4 h-4 rounded-full bg-slate-700 border-4 border-slate-950"></div>
                    <span class="text-xs font-mono text-slate-400 bg-slate-800 px-2 py-0.5 rounded"> 2023 – 2024 </span>
                    <h4 class="text-base font-bold text-white mt-2">Core Team Member | Google Developer Student Clubs (GDSC - OIU) </h4>
                    <ul class="space-y-3 mt-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ Led content strategy and planned for 10+ tech events, courses & conferences.</li>
                    </ul>
                </div>
                <div class="relative pl-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="absolute -left-2 top-1.5 w-4 h-4 rounded-full bg-slate-700 border-4 border-slate-950"></div>
                    <span class="text-xs font-mono text-slate-400 bg-slate-800 px-2 py-0.5 rounded"> 2019 – 2023  </span>
                    <h4 class="text-base font-bold text-white mt-2">Student Academic Coordinator | Computer Science Department | SUST  </h4>
                    <ul class="space-y-3 mt-2 text-slate-400 text-xs md:text-sm">
                        <li>✔ Appointed Head of Department to coordinate academic operations for 50+ CS undergraduates across 8 core courses per semester, serving as official liaison between faculty and student body.</li>
                        <li>✔ Centralized and digitized lecture material distribution via (WhatsApp / Telegram channels), establishing a structured repository that improved resource accessibility by 90% and reduced faculty workload.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 bg-slate-900/30 border-t border-slate-900">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h3 class="text-indigo-400 text-xs font-bold tracking-widest uppercase mb-2" data-aos="fade-up">05 . Contact</h3>
            <h2 class="text-2xl md:text-3xl font-black text-white mb-10" data-aos="fade-up">Let's Build Something Great Together</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto" data-aos="fade-up">
                <a href="mailto:tahleelnazar168@gmail.com" class="group p-6 bg-slate-900 border border-slate-800 rounded-2xl hover:border-indigo-500/40 transition-all duration-300 flex flex-col items-center justify-center text-center w-full">
                    <div class="mb-3 transform transition-transform duration-300 group-hover:scale-110 flex items-center justify-center">
                        <svg class="w-9 h-9 text-indigo-400 group-hover:text-indigo-300 transition-colors" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0l-7.5-4.615a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                        </svg>
                    </div>
                    <div class="text-sm font-medium text-slate-300 group-hover:text-white transition-colors duration-300">Email Me</div>
                </a>

                <a href="https://www.facebook.com/share/1Ck3ByTs1k/" target="_blank" class="group p-6 bg-slate-900 border border-slate-800 rounded-2xl hover:border-indigo-500/40 transition-all duration-300 flex flex-col items-center justify-center text-center w-full">
                    <div class="mb-3 transform transition-transform duration-300 group-hover:scale-110 flex items-center justify-center">
                        <svg class="w-9 h-9" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="20" fill="#1877F2"/>
                            <path d="M24.848 21.122L25.485 16.967H21.503V14.271C21.503 13.125 22.064 12.008 23.864 12.008H25.676V8.471C25.676 8.471 24.032 8.191 22.457 8.191C19.167 8.191 17.016 10.183 17.016 13.791V16.967H13.357V21.122H17.016V31.171C17.751 31.286 18.503 31.346 19.26 31.346C20.016 31.346 20.768 31.286 21.503 31.171V21.122H24.848Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="text-sm font-medium text-slate-300 group-hover:text-white transition-colors duration-300">Facebook</div>
                </a>

                <a href="https://www.linkedin.com/in/tahleel-nazar-882972247" target="_blank" class="group p-6 bg-slate-900 border border-slate-800 rounded-2xl hover:border-indigo-500/40 transition-all duration-300 flex flex-col items-center justify-center text-center w-full">
                    <div class="mb-3 transform transition-transform duration-300 group-hover:scale-110 flex items-center justify-center">
                        <svg class="w-9 h-9" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="40" height="40" rx="8" fill="#0A66C2"/>
                            <path d="M13.22 15.11h3.33V25.8h-3.33V15.11zM14.89 10c1.06 0 1.92.86 1.92 1.93c0 1.06-.86 1.93-1.92 1.93c-1.06 0-1.93-.87-1.93-1.93C12.96 10.86 13.83 10 14.89 10zM18.56 15.11h3.19v1.46h.04c.44-.84 1.53-1.73 3.15-1.73c3.37 0 3.99 2.22 3.99 5.11V25.8h-3.33v-5.22c0-1.25-.02-2.85-1.74-2.85c-1.74 0-2.01 1.36-2.01 2.76V25.8h-3.33V15.11z" fill="white"/>
                        </svg>
                    </div>
                    <div class="text-sm font-medium text-slate-300 group-hover:text-white transition-colors duration-300">LinkedIn</div>
                </a>
            </div>
        </div>
    </section>

<script>
    const carouselStates = {};

    function moveSlide(projectId, direction) {
        const carousel = document.getElementById(`carousel-${projectId}`);
        if (!carousel) return;

        const track = carousel.querySelector('.slider-track');
        const slides = carousel.querySelectorAll('.slide');
        const dots = carousel.querySelectorAll('.dots-container span');
        const totalSlides = slides.length;

        if (totalSlides <= 1) return;

        if (!carouselStates[projectId]) {
            carouselStates[projectId] = { currentIndex: 0 };
        }

        let state = carouselStates[projectId];
        state.currentIndex += direction;

        if (state.currentIndex >= totalSlides) {
            state.currentIndex = 0;
        } else if (state.currentIndex < 0) {
            state.currentIndex = totalSlides - 1;
        }

        track.style.transform = `translateX(-${state.currentIndex * 100}%)`;

        dots.forEach((dot, index) => {
            if (index === state.currentIndex) {
                dot.classList.add('!bg-indigo-400', 'w-4');
                dot.classList.remove('bg-slate-700');
            } else {
                dot.classList.remove('!bg-indigo-400', 'w-4');
                dot.classList.add('bg-slate-700');
            }
        });
    }
</script>

@endsection