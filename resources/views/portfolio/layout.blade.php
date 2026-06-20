<!DOCTYPE html>
<html lang="en" dir="ltr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
</head>
<body class="portfolio-body">

    <header class="portfolio-header">
        <nav class="nav-container">

            <a href="#" class="nav-logo-link" aria-label="Homepage">
                <img src="{{ asset('images/logo.png') }}" class="nav-logo-img" alt="Tahleel Nazar Logo">
            </a>

            <ul class="nav-menu">
                <li class="nav-item"><a href="#hero">Home</a></li>
                <li class="nav-item"><a href="#about">About</a></li>
                <li class="nav-item"><a href="#tech-stack">Skills</a></li>
                <li class="nav-item"><a href="#projects">Projects</a></li>
                <li class="nav-item"><a href="#experience">Experience</a></li>
                <li class="nav-item">
                    <a href="#contact" class="btn-contact">Contact</a>
                </li>
            </ul>

        </nav>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="portfolio-footer">
        <p>Tahleel Nazar Tagelsir Abbas, &copy; {{ date('Y') }}. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true, offset: 100, easing: 'ease-out-cubic' });
    </script>
</body>
</html>