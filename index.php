<?php
// Handle simple contact form submission logic (simulated)
$formSubmitted = false;
$formError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Simulate sending an email or saving to DB
        $formSubmitted = true;
    }
    else {
        $formError = true;
    }
}
$content = [
    'about' => [
        'Hello! My name is Marcus and I enjoy creating things that live on the internet. Technology has been a huge passion of mine especially
						being able to learn and use tech in different ways
						imaginable. I am able to multi task as well as highly
						open to learning new things even if its not related to
						my field. I strongly believe in work culture and team
						work. I always believe that in tech it is a never ending
						journey of growth and progress.',
        'Fast-forward to today, and I\'ve had the privilege of working at an advertising agency, a start-up, and a huge corporation. My main focus these days is building accessible, inclusive products and digital experiences for a variety of clients using robust backend technologies like PHP.',
        'When I\'m not at the computer, I\'m usually hanging out with my friends, reading, or trying out a new hobby.'
    ],
    'experiences' => [
        'Project Lead & Senior Full Stack Engineer' => [
            'company' => 'Tess Sdn Bhd',
            'duration' => 'August 2025 - Present',
            'details' => [
                'Lead the technical planning and execution of internal and external software projects.',
                'Provide technical leadership in project proposals, assessing feasibility, estimating complexity, and recommending architectural approaches.',
                'Design and implement scalable full-stack solutions, including backend services, APIs, and frontend interfaces.',
                'Work closely with stakeholders to refine requirements and optimize system design before development begins.',
                'Identify opportunities to improve system performance, maintainability, and development workflows.',
                'Deliver technical support and ongoing improvements for deployed systems.'
            ],
        ],
        'System Engineer ' => [
            'company' => 'Accea Malaysia',
            'duration' => 'February 2024 - August 2025',
            'details' => [
                'Developed and maintained a web order system used internally by staff, ensuring seamless integration with back-end processes to improve efficiency. ',
                'Designed and implemented features for an express order system, allowing customers to quickly place urgent orders with a smooth user experience.',
                'Collaborated with cross-functional teams to troubleshoot and resolve issues, ensuring system reliability and meeting business needs.',
                'Assisted other developers working on other systems by providing technical support and integrating enhancements to optimize sales processes.',
            ],
        ],
        'Software Developer' => [
            'company' => 'Hitower IT',
            'duration' => 'October 2020 - August 2023',
            'details' => [
                'Contributed to the development and maintenance of a payroll system, employing Test-Driven Development (TDD) to ensure high-quality code and system reliability.',
                'Authored a comprehensive, modular user manual integrated within the system to guide customers on efficient usage, improving user adoption and reducing support queries.',
                'Actively participated in standups and team meetings, providing valuable suggestions to enhance system functionality and improve workflows.',
                'Evaluated project requirements and provided constructive feedback to stakeholders, highlighting potential feasibility issues and proposing alternative solutions.',
            ],
        ],
        'Full Stack Developer' => [
            'company' => 'VE Capital Pte. Ltd.',
            'duration' => 'October 2020 - August 2023',
            'details' => [
                'manage and maintain code while implementing new features and developing new software using laravel and vue.js',
                'perform frequent code reviews for team',
                'perform UI/UX reviews for upcoming projects',
                'manage and plan sprint timeline of projects',
                'involve in deployment of projects to staging and production with',
                'manage and interview potential candidates',
                'lead and manage a group of developers for internal product development',
            ],
        ],
        'Intern Mobile App Developer' => [
            'company' => 'WOBB (currently known as Hiredly)',
            'duration' => 'March 2020 - June 2020',
            'details' => [
                'Maintenance of WOBB mobile app on Android and IOS',
                'Implementation of new features for mobile app',
                'Creating and deploying mobile app APK for internal Alpha testing',
                'Managing and integrating of Google/Facebook analytics',
                'Manage and review resumes/cv for QC'
            ]
        ],
    ],
    'projects' => [
        [
            'title'       => 'Laravel Base - Development Toolkit',
            'description' => 'Internal library to accelerate custom software development by eliminating repetitive CRUD and boilerplate.',
            'key_points'  => ['70–80% faster development', 'Plug-and-play features (CRUD, search, roles, file handling)', 'Model-driven architecture'],
            'tech'        => ['PHP', 'Laravel', 'MySQL'],
            'github'      => '',
            'live'        => '',
            'url'         => '/projects/laravel-base',
        ],
    ],
    'contact' => [
        'email' => 'marcuslooek@gmail.com',
        'linkedin' => 'https://www.linkedin.com/in/marcus-loo',
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">

<head>
    <script>(function(){const t=localStorage.getItem('theme');if(t==='light')document.documentElement.classList.remove('dark');else document.documentElement.classList.add('dark');})()</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Primary Meta Tags -->
    <title>Marcus Loo | Senior Full Stack Engineer</title>
    <meta name="title" content="Marcus Loo | Senior Full Stack Engineer">
    <meta name="description" content="Senior Full Stack Engineer & Project Lead based in Malaysia. Specialising in PHP, Laravel, and Vue.js.">
    <meta name="keywords" content="Marcus Loo, Senior Full Stack Engineer, Project Lead, PHP Developer, Laravel Developer, Vue.js, Web Development, Malaysia, Software Engineer, Backend Developer">
    <meta name="author" content="Marcus Loo">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0f172a">
    <link rel="canonical" href="https://marcusloo.com">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://marcusloo.com">
    <meta property="og:site_name" content="Marcus Loo">
    <meta property="og:title" content="Marcus Loo | Senior Full Stack Engineer">
    <meta property="og:description" content="Senior Full Stack Engineer & Project Lead based in Malaysia. Specialising in PHP, Laravel, and Vue.js.">
    <meta property="og:locale" content="en_MY">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://marcusloo.com">
    <meta name="twitter:title" content="Marcus Loo | Senior Full Stack Engineer">
    <meta name="twitter:description" content="Senior Full Stack Engineer & Project Lead based in Malaysia. Specialising in PHP, Laravel, and Vue.js.">
    <meta name="twitter:creator" content="@marcusloo">

    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Marcus Loo",
        "url": "https://marcusloo.com",
        "email": "marcuslooek@gmail.com",
        "jobTitle": "Senior Full Stack Engineer",
        "description": "Senior Full Stack Engineer and Project Lead specialising in PHP, Laravel, and Vue.js with experience building scalable full-stack web applications.",
        "sameAs": [
            "https://www.linkedin.com/in/marcus-loo"
        ],
        "knowsAbout": ["PHP", "Laravel", "Vue.js", "Full Stack Development", "Software Architecture", "JavaScript", "Tailwind CSS"],
        "worksFor": {
            "@type": "Organization",
            "name": "Tess Sdn Bhd"
        }
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Website",
        "name": "Marcus Loo Portfolio",
        "url": "https://marcusloo.com",
        "description": "Personal portfolio of Marcus Loo, a Senior Full Stack Engineer based in Malaysia."
    }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS (CDN for simplicity as approved) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        dark: '#0f172a', // Slate 900
                        darker: '#020617', // Slate 950
                        primary: '#3b82f6', // Blue 500
                        secondary: '#8b5cf6', // Violet 500
                        accent: '#10b981', // Emerald 500
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <style>
        /* Custom Styles that go beyond Tailwind Utilities */

        /* Glassmorphism Classes */
        .glass-card {
            background: rgba(30, 41, 59, 0.4);
            /* Slate 800 with opacity */
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .hover-glass {
            transition: all 0.3s ease;
        }

        .hover-glass:hover {
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid rgba(59, 130, 246, 0.3);
            /* Primary border on hover */
            box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.2);
        }

        /* Animations classes for Javascript to toggle */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Style for navbar on scroll */
        nav.scrolled {
            background: rgba(2, 6, 23, 0.8) !important;
            /* Darker with opacity */
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #020617;
        }

        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #334155;
        }

        /* Base resets to clear anything if Tailwind isn't active yet */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
            /* Offset for fixed header */
        }

        /* Smooth theme transitions */
        body, .glass-card, nav, footer, #mobile-menu {
            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
        }

        /* ===== LIGHT MODE ===== */
        html:not(.dark) body {
            background-color: #f0f4f8 !important;
            color: #334155;
        }
        html:not(.dark) .text-white {
            color: #0f172a !important;
        }
        html:not(.dark) .text-slate-300 {
            color: #475569 !important;
        }
        html:not(.dark) .text-slate-400 {
            color: #64748b !important;
        }
        html:not(.dark) .text-slate-500,
        html:not(.dark) .text-slate-600 {
            color: #94a3b8 !important;
        }
        html:not(.dark) .bg-darker {
            background-color: #f0f4f8 !important;
        }
        html:not(.dark) #skills-carousel .from-darker {
            --tw-gradient-from: #f0f4f8;
        }
        html:not(.dark) .bg-dark {
            background-color: #e2e8f0 !important;
        }
        html:not(.dark) .border-white\/10 {
            border-color: rgba(15, 23, 42, 0.1) !important;
        }
        html:not(.dark) .glass-card {
            background: rgba(255, 255, 255, 0.75);
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }
        html:not(.dark) .hover-glass:hover {
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(59, 130, 246, 0.3);
            box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.15);
        }
        html:not(.dark) nav.scrolled {
            background: rgba(240, 244, 248, 0.9) !important;
            border-bottom: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
        }
        html:not(.dark) #mobile-menu {
            background-color: rgba(240, 244, 248, 0.98) !important;
            border-bottom-color: rgba(15, 23, 42, 0.1);
        }
        html:not(.dark) footer {
            background-color: rgba(226, 232, 240, 0.5) !important;
            border-top-color: rgba(15, 23, 42, 0.1);
        }
        html:not(.dark) .mix-blend-screen {
            mix-blend-mode: multiply;
            opacity: 0.08;
        }
        html:not(.dark) ::-webkit-scrollbar-track {
            background: #f0f4f8;
        }
        html:not(.dark) ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
        }
        html:not(.dark) ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        /* AI/simple-icon theme adaptation */
        .dark .si-icon { filter: invert(1) brightness(1.8); }

        /* Skills marquee */
        @keyframes marquee-right {
            0%   { transform: translateX(-50%); }
            100% { transform: translateX(0%); }
        }
        .skills-track {
            animation: marquee-right 18s linear infinite;
        }

        /* Skill card text in light mode */
        html:not(.dark) .glass-card span.font-mono {
            color: #475569;
        }
        html:not(.dark) .glass-card:hover span.font-mono {
            color: #0f172a;
        }
        /* Toggle button hover in light mode */
        html:not(.dark) #theme-toggle:hover,
        html:not(.dark) #theme-toggle-mobile:hover {
            color: #0f172a !important;
            background-color: rgba(15, 23, 42, 0.06) !important;
        }
        html:not(.dark) #theme-toggle,
        html:not(.dark) #theme-toggle-mobile {
            color: #64748b;
        }
        /* About section image placeholder */
        html:not(.dark) .bg-dark.rounded-lg {
            background-color: #e2e8f0 !important;
        }
    </style>
</head>

<body class="bg-darker text-slate-300 font-sans antialiased selection:bg-primary selection:text-white">

    <!-- Background Effects -->
    <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
        <div
            class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-primary/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob">
        </div>
        <div
            class="absolute top-[20%] right-[-10%] w-96 h-96 bg-secondary/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob animation-delay-2000">
        </div>
        <div
            class="absolute bottom-[-20%] left-[20%] w-96 h-96 bg-accent/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob animation-delay-4000">
        </div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold text-white tracking-tighter">
                        <span class="text-primary">&lt;</span>Marcus-Loo<span class="text-primary">/&gt;</span>
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#about"
                            class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <a href="#experiences"
                            class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Experiences</a>
                        <a href="#skills"
                            class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Skills</a>
                        <a href="#projects"
                            class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                        <a href="#contact"
                            class="bg-primary/10 text-primary hover:bg-primary hover:text-white border border-primary/50 transition-all px-4 py-2 rounded-full text-sm font-medium">Contact
                            Me</a>
                        <button id="theme-toggle" aria-label="Toggle light/dark mode"
                            class="mt-auto p-2 rounded-full text-slate-400 hover:text-white hover:bg-white/10 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/50">
                            <!-- Sun: visible in dark mode (click to go light) -->
                            <svg class="theme-sun w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            <!-- Moon: visible in light mode (click to go dark) -->
                            <svg class="theme-moon w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="-mr-2 flex md:hidden">
                    <button type="button" id="mobile-menu-btn"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon when menu is closed -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden hidden bg-dark/95 backdrop-blur-md border-b border-white/10" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#about"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="#experiences"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Experiences</a>
                <a href="#skills"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Skills</a>
                <a href="#projects"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Projects</a>
                <a href="#contact"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Contact
                    Me</a>
                <button id="theme-toggle-mobile" aria-label="Toggle light/dark mode"
                    class="flex items-center gap-2 w-full px-3 py-2 rounded-md text-base font-medium text-slate-400 hover:text-primary hover:bg-white/5 transition-all">
                    <svg class="theme-sun w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <svg class="theme-moon w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                    <span class="theme-label">Switch to Light Mode</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center justify-center pt-20 px-4 sm:px-6 lg:px-8 relative">
            <canvas id="particle-canvas" class="absolute inset-0 w-full h-full pointer-events-none z-0"></canvas>
            <div class="max-w-4xl mx-auto text-center z-10">
                <p class="text-primary font-mono mb-4 tracking-wide">Hi, my name is</p>
                <h1 class="text-5xl sm:text-7xl font-bold text-white mb-6 tracking-tight">
                    Marcus Loo.
                </h1>
                <h2 class="text-3xl sm:text-5xl font-bold text-slate-400 mb-8 h-16 sm:h-20">
                    I build <span id="typewriter" class="text-secondary border-r-2 border-secondary pr-1"></span>
                </h2>
                <p class="max-w-2xl mx-auto text-lg sm:text-xl text-slate-400 mb-10 leading-relaxed">
                    I'm a Senior Full Stack Engineer specializing in building (and occasionally designing) exceptional digital
                    experiences. Currently, I'm focused on architecting scalable, full-stack solutions and robust backends using PHP and Laravel.
                </p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="#contact"
                        class="px-8 py-3 rounded-full bg-primary text-white font-medium hover:bg-blue-600 transition-colors w-full sm:w-auto text-center transform hover:-translate-y-1 duration-300 shadow-[0_0_15px_rgba(59,130,246,0.5)]">
                        Get In Touch
                    </a>
                    <a href="#experiences"
                        class="px-8 py-3 rounded-full bg-white/5 text-white font-medium hover:bg-white/10 border border-white/10 transition-colors w-full sm:w-auto text-center transform hover:-translate-y-1 duration-300">
                        View Experiences
                    </a>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <a href="#about" class="text-slate-400 hover:text-white transition-colors" aria-label="Scroll down to About section">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </a>
            </div>
        </section>

        <!-- About Me Section -->
        <section id="about" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto reveal">
            <div class="flex items-center gap-4 mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-white whitespace-nowrap"><span
                        class="text-primary font-mono text-xl sm:text-2xl mr-2">01.</span>About Me</h2>
                <div class="h-px bg-white/10 w-full md:w-64"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 text-lg text-slate-400 leading-relaxed">
                    <?php foreach ($content['about'] as $paragraph): ?>
                    <p>
                        <?= htmlspecialchars($paragraph) ?>
                    </p>
                    <?php endforeach; ?>
                </div>
                <div class="relative group mx-auto w-3/4 max-w-md">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-primary to-secondary rounded-xl blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200">
                    </div>
                    <div class="relative rounded-xl overflow-hidden aspect-square glass-card p-2">
                        <!-- Placeholder for user's image, using a geometric CSS pattern instead of an external image to ensure it works -->
                        <div
                            class="w-full h-full bg-dark rounded-lg flex items-center justify-center border border-white/10 relative overflow-hidden group-hover:scale-[1.02] transition-transform duration-300">
                            <div
                                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiMzYjgyZjYiIGZpbGwtb3BhY2l0eT0iMC4xIi8+PC9zdmc+')] [mask-image:linear-gradient(to_bottom,white,transparent)]">
                            </div>
                            <span class="text-6xl font-mono text-primary/50">&lt;/&gt;</span>
                            <div
                                class="absolute inset-0 bg-primary/20 mix-blend-overlay group-hover:bg-transparent transition-colors duration-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experiences Section -->
        <section id="experiences" class="py-24 px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto reveal">
            <div class="flex items-center justify-end gap-4 mb-16">
                <div class="h-px bg-white/10 w-full md:w-64"></div>
                <h2 class="text-3xl sm:text-4xl font-bold text-white whitespace-nowrap">Where I've Worked<span
                        class="text-secondary font-mono text-xl sm:text-2xl ml-2">.02</span></h2>
            </div>

            <div class="relative border-l border-white/10 ml-3 md:ml-6 space-y-12 pb-4">

                <?php
                $styles = [
                    ['color' => 'primary', 'shadow' => 'rgba(59,130,246,0.5)'],
                    ['color' => 'secondary', 'shadow' => 'rgba(139,92,246,0.5)'],
                    ['color' => 'accent', 'shadow' => 'rgba(16,185,129,0.5)'],
                ];
                $i = 0;
                foreach ($content['experiences'] as $role => $exp):
                    $style = $styles[$i % count($styles)];
                    $colorClass = $style['color'];
                    $shadowColor = $style['shadow'];
                ?>
                <div class="relative pl-8 md:pl-0">
                    <div
                        class="md:hidden absolute w-4 h-4 rounded-full bg-darker border-2 border-<?= $colorClass ?> -left-[9px] top-1">
                    </div>
                    <div class="glass-card hover-glass rounded-2xl ml-0 md:ml-12 relative group">
                        <div
                            class="hidden md:block absolute w-4 h-4 rounded-full bg-darker border-2 border-<?= $colorClass ?> -left-[57px] top-8 group-hover:bg-<?= $colorClass ?> transition-colors focus-within:bg-<?= $colorClass ?> shadow-[0_0_10px_<?= $shadowColor ?>]">
                        </div>
                        <button
                            class="exp-toggle w-full text-left p-6 md:p-8 flex items-start justify-between gap-4 focus:outline-none"
                            aria-expanded="false">
                            <div>
                                <h3 class="text-xl md:text-2xl font-bold text-white mb-1"><?= htmlspecialchars($role) ?> <span
                                        class="text-<?= $colorClass ?>">@ <?= htmlspecialchars($exp['company']) ?></span></h3>
                                <p class="text-sm font-mono text-slate-400"><?= htmlspecialchars($exp['duration']) ?></p>
                            </div>
                            <svg class="exp-chevron w-5 h-5 text-slate-400 shrink-0 mt-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <?php if (isset($exp['details']) && is_array($exp['details'])): ?>
                        <div class="exp-details hidden px-6 md:px-8 pb-6 md:pb-8">
                            <ul class="space-y-3 text-slate-300 border-t border-white/10 pt-4">
                                <?php foreach ($exp['details'] as $detail): ?>
                                <li class="flex items-start">
                                    <span class="text-<?= $colorClass ?> mr-2">▹</span>
                                    <div><?= htmlspecialchars($detail) ?></div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                $i++;
                endforeach;
                ?>

            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto reveal">
            <div class="flex items-center gap-4 mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white whitespace-nowrap"><span
                        class="text-primary font-mono text-xl sm:text-2xl mr-2">03.</span>Skills & Tools</h2>
                <div class="h-px bg-white/10 w-full md:w-64"></div>
            </div>

            <?php
            $skills = [
                ['icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg',              'label' => 'PHP'],
                ['icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg',       'label' => 'Laravel'],
                ['icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg',           'label' => 'MySQL'],
                ['icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg', 'label' => 'JavaScript'],
                ['icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg','label' => 'Tailwind CSS'],
                ['icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg',           'label' => 'Vue.js'],
                ['icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/linux/linux-original.svg',           'label' => 'Linux'],
                ['icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bash/bash-original.svg',             'label' => 'Bash',       'si' => true],
                ['icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path fill="#CC785C" d="M164.4 404.5L265.1 348L266.8 343.1L265.1 340.4L260.2 340.4L243.4 339.4L185.9 337.8L136 335.7L87.7 333.1L75.5 330.5L64.1 315.5L65.3 308L75.5 301.1L90.2 302.4C109.1 303.7 136.1 305.5 171.2 308L206.4 310.1L258.6 315.5L266.9 315.5L268.1 312.1L265.3 310L263.1 307.9L212.8 273.8L158.4 237.8L129.9 217.1L114.5 206.6L106.7 196.8L103.3 175.3L117.3 159.9L136.1 161.2L140.9 162.5L159.9 177.2L200.6 208.7L253.7 247.8L261.5 254.3L264.6 252.1L265 250.5L261.5 244.7L232.6 192.5L201.8 139.4L188.1 117.4L184.5 104.2C183.2 98.8 182.3 94.2 182.3 88.7L198.2 67.1L207 64.3L228.2 67.1L237.1 74.9L250.3 105.1L271.7 152.6L304.9 217.2L314.6 236.4L319.8 254.2L321.7 259.6L325.1 259.6L325.1 256.5L327.8 220.1L332.8 175.4L337.7 117.9L339.4 101.7L347.4 82.3L363.3 71.8L375.7 77.7L385.9 92.4L384.5 101.9L378.4 141.4L366.5 203.3L358.7 244.8L363.2 244.8L368.4 239.6L389.4 211.8L424.6 167.7L440.1 150.2L458.2 130.9L469.8 121.7L491.8 121.7L508 145.8L500.7 170.7L478 199.4L459.2 223.8L432.2 260.1L415.4 289.1L417 291.4L421 291L481.9 278L514.8 272.1L554.1 265.4L571.9 273.7L573.8 282.1L566.8 299.3L524.8 309.7L475.6 319.5L402.3 336.8L401.4 337.5L402.4 338.8L435.4 341.9L449.5 342.7L484.1 342.7L548.5 347.5L565.3 358.6L575.4 372.2L573.7 382.6L547.8 395.8C532.3 392.1 493.4 382.9 431.2 368.1L403.2 361.1L399.3 361.1L399.3 363.4L422.6 386.2L465.3 424.8L518.8 474.6L521.5 486.9L514.6 496.6L507.3 495.6L460.3 460.2L442.2 444.3L401.1 409.7L398.4 409.7L398.4 413.3L407.9 427.2L457.9 502.4L460.5 525.4L456.9 532.9L443.9 537.4L429.7 534.8L400.4 493.7L370.2 447.4L345.8 405.9L342.8 407.6L328.4 562.4L321.7 570.3L306.2 576.2L293.2 566.4L286.3 550.5L293.2 519L301.5 477.9L308.2 445.2L314.3 404.6L317.9 391.1L317.7 390.2L314.7 390.6L284.1 432.6L237.6 495.5L200.8 534.9L192 538.4L176.7 530.5L178.1 516.4L186.6 503.8L237.5 439L268.2 398.8L288 375.6L287.9 372.2L286.7 372.2L151.4 460L127.3 463.1L116.9 453.4L118.2 437.5L123.1 432.3L163.8 404.3L163.7 404.4L163.7 404.5z"/></svg>'), 'label' => 'Claude'],
                ['icon' => 'https://cdn.simpleicons.org/googlegemini',                                                     'label' => 'Gemini',     'si' => true],
                ['icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M260.4 249.8L260.4 201.2C260.4 197.1 261.9 194 265.5 192L363.3 135.7C376.6 128 392.5 124.4 408.9 124.4C470.3 124.4 509.3 172 509.3 222.7C509.3 226.3 509.3 230.4 508.8 234.5L407.3 175.1C401.2 171.5 395 171.5 388.9 175.1L260.4 249.8zM488.7 439.2L488.7 323C488.7 315.8 485.6 310.7 479.5 307.1L351 232.4L393 208.3C396.6 206.3 399.7 206.3 403.2 208.3L501 264.7C529.2 281.1 548.1 315.9 548.1 349.7C548.1 388.6 525.1 424.5 488.7 439.3L488.7 439.3zM230.2 336.8L188.2 312.2C184.6 310.2 183.1 307.1 183.1 303L183.1 190.4C183.1 135.6 225.1 94.1 281.9 94.1C303.4 94.1 323.4 101.3 340.3 114.1L239.4 172.5C233.3 176.1 230.2 181.2 230.2 188.4L230.2 336.9L230.2 336.9zM320.6 389L260.4 355.2L260.4 283.5L320.6 249.7L380.8 283.5L380.8 355.2L320.6 389zM359.3 544.7C337.8 544.7 317.8 537.5 300.9 524.7L401.8 466.3C407.9 462.7 411 457.6 411 450.4L411 301.9L453.5 326.5C457.1 328.5 458.6 331.6 458.6 335.7L458.6 448.3C458.6 503.1 416.1 544.6 359.3 544.6L359.3 544.6zM237.8 430.5L140.1 374.2C111.9 357.8 93 323 93 289.2C93 249.8 116.6 214.4 152.9 199.6L152.9 316.3C152.9 323.5 156 328.6 162.1 332.2L290.1 406.4L248.1 430.5C244.5 432.5 241.4 432.5 237.9 430.5zM232.2 514.5C174.3 514.5 131.8 471 131.8 417.2C131.8 413.1 132.3 409 132.8 404.9L233.7 463.3C239.8 466.9 246 466.9 252.1 463.3L380.6 389.1L380.6 437.7C380.6 441.8 379.1 444.9 375.5 446.9L277.7 503.2C264.4 510.9 248.5 514.5 232.1 514.5L232.1 514.5zM359.2 575.4C421.2 575.4 472.9 531.4 484.6 473C541.9 458.1 578.8 404.4 578.8 349.6C578.8 313.8 563.4 278.9 535.8 253.9C538.4 243.1 539.9 232.4 539.9 221.6C539.9 148.4 480.5 93.6 411.9 93.6C398.1 93.6 384.8 95.6 371.5 100.3C348.5 77.8 316.7 63.4 281.9 63.4C219.9 63.4 168.2 107.4 156.5 165.8C99.2 180.6 62.3 234.4 62.3 289.2C62.3 325 77.7 359.9 105.3 384.9C102.7 395.7 101.2 406.4 101.2 417.2C101.2 490.4 160.6 545.2 229.2 545.2C243 545.2 256.3 543.2 269.6 538.5C292.6 561 324.4 575.4 359.2 575.4z"/></svg>'), 'label' => 'OpenAI',     'si' => true],
            ];

            $skillCard = function($skill) {
                $imgClass = 'w-10 h-10' . (!empty($skill['si']) ? ' si-icon' : '');
                return '<div class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 shrink-0 w-36">'
                    . '<div class="w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-transform">'
                    . '<img src="' . htmlspecialchars($skill['icon']) . '" alt="' . htmlspecialchars($skill['label']) . '" class="' . $imgClass . '" />'
                    . '</div>'
                    . '<span class="font-mono text-sm text-slate-300 group-hover:text-white">' . htmlspecialchars($skill['label']) . '</span>'
                    . '</div>';
            };
            ?>

            <div class="overflow-hidden relative" id="skills-carousel">
                <!-- fade edges -->
                <div class="pointer-events-none absolute inset-y-0 left-0 w-16 z-10 bg-gradient-to-r from-darker to-transparent"></div>
                <div class="pointer-events-none absolute inset-y-0 right-0 w-16 z-10 bg-gradient-to-l from-darker to-transparent"></div>

                <div class="skills-track flex gap-6 w-max" id="skills-track">
                    <?php foreach ($skills as $skill) echo $skillCard($skill); ?>
                    <?php foreach ($skills as $skill) echo $skillCard($skill); ?>
                </div>
            </div>
        </section>

        <!-- Featured Projects Section -->
        <section id="projects" class="py-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto reveal">
            <div class="flex items-center justify-end gap-4 mb-16">
                <div class="h-px bg-white/10 w-full md:w-64"></div>
                <h2 class="text-3xl sm:text-4xl font-bold text-white whitespace-nowrap">Featured Projects<span
                        class="text-accent font-mono text-xl sm:text-2xl ml-2">.04</span></h2>
            </div>

            <?php
            $projectCount = count($content['projects']);
            if ($projectCount === 1) {
                $gridClass = 'flex justify-center';
                $cardClass = 'glass-card hover-glass rounded-2xl p-6 flex flex-col gap-4 group transition-all duration-300 hover:-translate-y-2 relative overflow-hidden w-full max-w-sm';
            } elseif ($projectCount === 2) {
                $gridClass = 'grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto';
                $cardClass = 'glass-card hover-glass rounded-2xl p-6 flex flex-col gap-4 group transition-all duration-300 hover:-translate-y-2 relative overflow-hidden';
            } else {
                $gridClass = 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6';
                $cardClass = 'glass-card hover-glass rounded-2xl p-6 flex flex-col gap-4 group transition-all duration-300 hover:-translate-y-2 relative overflow-hidden';
            }
            ?>
            <div class="<?= $gridClass ?>">
                <?php foreach ($content['projects'] as $project): ?>
                <div class="<?= $cardClass ?>">
                    <!-- Top accent bar -->
                    <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-primary via-secondary to-accent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <div class="flex items-start justify-between mb-4">
                        <!-- Folder icon -->
                        <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"/>
                        </svg>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-lg font-bold text-white mb-2 group-hover:text-primary transition-colors duration-300">
                            <?= htmlspecialchars($project['title']) ?>
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-3">
                            <?= htmlspecialchars($project['description']) ?>
                        </p>
                        <?php if (!empty($project['key_points'])): ?>
                        <ul class="space-y-1.5">
                            <?php foreach ($project['key_points'] as $point): ?>
                            <li class="flex items-start gap-2 text-sm text-slate-300">
                                <span class="text-accent shrink-0">▹</span>
                                <span><?= htmlspecialchars($point) ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <!-- Action buttons -->
                    <?php if (!empty($project['url']) || !empty($project['github']) || !empty($project['live'])): ?>
                    <div class="flex flex-wrap gap-2 pt-4">
                        <?php if (!empty($project['url'])): ?>
                        <a href="<?= htmlspecialchars($project['url']) ?>"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-medium bg-primary/10 text-primary border border-primary/20 hover:bg-primary hover:text-white transition-all duration-200">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            Learn More
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($project['live'])): ?>
                        <a href="<?= htmlspecialchars($project['live']) ?>" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20 hover:bg-accent hover:text-white transition-all duration-200">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Live Demo
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($project['github'])): ?>
                        <a href="<?= htmlspecialchars($project['github']) ?>" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-medium bg-white/5 text-slate-300 border border-white/10 hover:bg-white/10 hover:text-white transition-all duration-200">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.385-1.335-1.755-1.335-1.755-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.298 24 12c0-6.63-5.37-12-12-12z"/>
                            </svg>
                            GitHub
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <div class="flex flex-wrap gap-2 pt-3 mt-1 border-t border-white/5">
                        <?php foreach ($project['tech'] as $tag): ?>
                        <span class="font-mono text-xs text-primary/80 bg-primary/10 px-2 py-1 rounded">
                            <?= htmlspecialchars($tag) ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-12">
                <a href="/projects"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-full glass-card hover-glass text-slate-300 hover:text-white text-sm font-medium transition-all duration-300 hover:-translate-y-1">
                    View All Projects
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto text-center reveal">
            <h2 class="text-4xl sm:text-5xl font-bold text-white mb-6">Get In Touch</h2>
            <p class="text-lg text-slate-400 mb-8 max-w-2xl mx-auto">
                Although I'm not currently looking for any new opportunities, my inbox is always open. Whether you have
                a question or just want to say hi, I'll try my best to get back to you!
            </p>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mb-12">
                <button onclick="copyEmail(this, '<?= htmlspecialchars($content['contact']['email']) ?>')"
                    class="flex items-center gap-2 px-6 py-3 rounded-full glass-card hover-glass text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1 cursor-pointer">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <?= htmlspecialchars($content['contact']['email']) ?>
                </button>
                <a href="<?= htmlspecialchars($content['contact']['linkedin']) ?>" target="_blank" rel="noopener noreferrer"
                    class="flex items-center gap-2 px-6 py-3 rounded-full glass-card hover-glass text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1">
                    <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    LinkedIn
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-8 text-center text-slate-500 text-sm font-mono border-t border-white/10 mt-12 bg-dark/50">
        <p>Designed & Built by Marcus</p>
        <p class="mt-2 text-xs">Built with PHP & Tailwind CSS</p>
    </footer>

    <!-- Custom Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // --- Theme Toggle ---
            const html = document.documentElement;

            function updateThemeUI() {
                const isDark = html.classList.contains('dark');
                document.querySelectorAll('.theme-sun').forEach(el => el.classList.toggle('hidden', !isDark));
                document.querySelectorAll('.theme-moon').forEach(el => el.classList.toggle('hidden', isDark));
                document.querySelectorAll('.theme-label').forEach(el => {
                    el.textContent = isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode';
                });
            }

            function toggleTheme() {
                html.classList.toggle('dark');
                localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
                updateThemeUI();
            }

            updateThemeUI();

            document.getElementById('theme-toggle')?.addEventListener('click', toggleTheme);
            document.getElementById('theme-toggle-mobile')?.addEventListener('click', toggleTheme);

            // --- Experience Card Collapse ---
            document.querySelectorAll('.exp-toggle').forEach(btn => {
                btn.addEventListener('click', () => {
                    const details = btn.nextElementSibling;
                    const chevron = btn.querySelector('.exp-chevron');
                    const expanded = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', String(!expanded));
                    details.classList.toggle('hidden', expanded);
                    chevron.classList.toggle('rotate-180', !expanded);
                });
            });

            // --- Mobile Menu Toggle ---
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });

                // Close menu when a link is clicked
                const menuLinks = menu.querySelectorAll('a');
                menuLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        menu.classList.add('hidden');
                    });
                });
            }

            // --- Navbar Scroll Effect ---
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // --- Scroll Reveal Animation ---
            const reveals = document.querySelectorAll('.reveal');

            const revealOnScroll = () => {
                const windowHeight = window.innerHeight;
                const elementVisible = 100; // when to trigger the reveal

                reveals.forEach(reveal => {
                    const elementTop = reveal.getBoundingClientRect().top;
                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add('active');
                    }
                });
            };

            // Initial check and event listener
            revealOnScroll();
            window.addEventListener('scroll', revealOnScroll);


            // --- Typing Effect ---
            const phrases = [
                "secure backends.",
                "dynamic web apps.",
                "RESTful APIs.",
                "scalable solutions."
            ];
            let currentPhraseIndex = 0;
            let currentCharIndex = 0;
            let isDeleting = false;
            let typingSpeed = 100;

            const typewriterElement = document.getElementById('typewriter');

            function type() {
                if (!typewriterElement) return;

                const currentPhrase = phrases[currentPhraseIndex];

                if (isDeleting) {
                    // Remove a character
                    typewriterElement.textContent = currentPhrase.substring(0, currentCharIndex - 1);
                    currentCharIndex--;
                    typingSpeed = 50; // Faster when deleting
                } else {
                    // Add a character
                    typewriterElement.textContent = currentPhrase.substring(0, currentCharIndex + 1);
                    currentCharIndex++;
                    typingSpeed = 100;
                }

                // Logic to determine when to pause, delete, or move slightly to the next word
                let timeout = typingSpeed;

                if (!isDeleting && currentCharIndex === currentPhrase.length) {
                    // Finished typing the word, pause before deleting
                    timeout = 2000;
                    isDeleting = true;
                } else if (isDeleting && currentCharIndex === 0) {
                    // Finished deleting, move to next phrase
                    isDeleting = false;
                    currentPhraseIndex = (currentPhraseIndex + 1) % phrases.length;
                    timeout = 500; // Pause before typing next word
                }

                // Blinking cursor effect handled in CSS with border-right
                setTimeout(type, timeout);
            }

            // Start typing effect slightly after load
            setTimeout(type, 1000);

            // --- Particle Network ---
            const canvas = document.getElementById('particle-canvas');
            if (canvas) {
                const ctx = canvas.getContext('2d');
                const heroSection = document.getElementById('home');
                let particles = [];
                let mouse = { x: null, y: null };
                const PARTICLE_COUNT = 80;
                const CONNECTION_DISTANCE = 140;
                const MOUSE_REPEL_DISTANCE = 100;
                const COLORS = ['#3b82f6', '#8b5cf6', '#10b981'];

                function resizeCanvas() {
                    canvas.width = heroSection.offsetWidth;
                    canvas.height = heroSection.offsetHeight;
                }

                class Particle {
                    constructor() {
                        this.reset(true);
                    }
                    reset(initial) {
                        this.x = Math.random() * canvas.width;
                        this.y = initial ? Math.random() * canvas.height : (Math.random() > 0.5 ? -5 : canvas.height + 5);
                        this.vx = (Math.random() - 0.5) * 0.6;
                        this.vy = (Math.random() - 0.5) * 0.6;
                        this.radius = Math.random() * 2 + 1;
                        this.color = COLORS[Math.floor(Math.random() * COLORS.length)];
                        this.alpha = Math.random() * 0.5 + 0.3;
                    }
                    update() {
                        // Mouse repulsion
                        if (mouse.x !== null) {
                            const dx = this.x - mouse.x;
                            const dy = this.y - mouse.y;
                            const dist = Math.sqrt(dx * dx + dy * dy);
                            if (dist < MOUSE_REPEL_DISTANCE && dist > 0) {
                                const force = (MOUSE_REPEL_DISTANCE - dist) / MOUSE_REPEL_DISTANCE;
                                this.vx += (dx / dist) * force * 0.8;
                                this.vy += (dy / dist) * force * 0.8;
                            }
                        }
                        // Speed cap
                        const speed = Math.sqrt(this.vx * this.vx + this.vy * this.vy);
                        if (speed > 2.5) {
                            this.vx = (this.vx / speed) * 2.5;
                            this.vy = (this.vy / speed) * 2.5;
                        }
                        // Damping
                        this.vx *= 0.99;
                        this.vy *= 0.99;
                        this.x += this.vx;
                        this.y += this.vy;
                        // Wrap around
                        if (this.x < -10) this.x = canvas.width + 10;
                        if (this.x > canvas.width + 10) this.x = -10;
                        if (this.y < -10) this.y = canvas.height + 10;
                        if (this.y > canvas.height + 10) this.y = -10;
                    }
                    draw() {
                        ctx.beginPath();
                        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                        ctx.fillStyle = this.color;
                        ctx.globalAlpha = this.alpha;
                        ctx.fill();
                        ctx.globalAlpha = 1;
                    }
                }

                function initParticles() {
                    particles = [];
                    for (let i = 0; i < PARTICLE_COUNT; i++) {
                        particles.push(new Particle());
                    }
                }

                function drawConnections() {
                    for (let i = 0; i < particles.length; i++) {
                        for (let j = i + 1; j < particles.length; j++) {
                            const dx = particles[i].x - particles[j].x;
                            const dy = particles[i].y - particles[j].y;
                            const dist = Math.sqrt(dx * dx + dy * dy);
                            if (dist < CONNECTION_DISTANCE) {
                                const opacity = (1 - dist / CONNECTION_DISTANCE) * 0.35;
                                ctx.beginPath();
                                ctx.moveTo(particles[i].x, particles[i].y);
                                ctx.lineTo(particles[j].x, particles[j].y);
                                // Gradient line colour blending both particle colours
                                const grad = ctx.createLinearGradient(particles[i].x, particles[i].y, particles[j].x, particles[j].y);
                                grad.addColorStop(0, particles[i].color);
                                grad.addColorStop(1, particles[j].color);
                                ctx.strokeStyle = grad;
                                ctx.globalAlpha = opacity;
                                ctx.lineWidth = 0.8;
                                ctx.stroke();
                                ctx.globalAlpha = 1;
                            }
                        }
                    }
                }

                function animate() {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                    particles.forEach(p => { p.update(); p.draw(); });
                    drawConnections();
                    requestAnimationFrame(animate);
                }

                resizeCanvas();
                initParticles();
                animate();

                window.addEventListener('resize', () => {
                    resizeCanvas();
                    initParticles();
                });

                heroSection.addEventListener('mousemove', (e) => {
                    const rect = heroSection.getBoundingClientRect();
                    mouse.x = e.clientX - rect.left;
                    mouse.y = e.clientY - rect.top;
                });

                heroSection.addEventListener('mouseleave', () => {
                    mouse.x = null;
                    mouse.y = null;
                });
            }
        });
    </script>

    <!-- Email copy toast -->
    <div id="copy-toast" class="fixed bottom-6 left-1/2 -translate-x-1/2 px-5 py-3 rounded-full text-sm font-mono text-white flex items-center gap-2 shadow-lg pointer-events-none opacity-0 transition-all duration-300 z-50"
        style="background: rgba(100,255,218,0.15); backdrop-filter: blur(12px); border: 1px solid rgba(100,255,218,0.3);">
        <svg class="w-4 h-4 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span style="color: #64ffda;">Email copied to clipboard!</span>
    </div>

    <script>
        function copyEmail(btn, email) {
            function showToast() {
                const toast = document.getElementById('copy-toast');
                toast.classList.remove('opacity-0');
                toast.classList.add('opacity-100');
                clearTimeout(toast._hideTimer);
                toast._hideTimer = setTimeout(() => {
                    toast.classList.remove('opacity-100');
                    toast.classList.add('opacity-0');
                }, 2500);
            }

            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(email).then(showToast);
            } else {
                const ta = document.createElement('textarea');
                ta.value = email;
                ta.style.cssText = 'position:fixed;top:0;left:0;opacity:0';
                document.body.appendChild(ta);
                ta.focus();
                ta.select();
                document.execCommand('copy');
                document.body.removeChild(ta);
                showToast();
            }
        }
    </script>
</body>

</html>