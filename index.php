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
                    <div class="glass-card hover-glass rounded-2xl p-6 md:p-8 ml-0 md:ml-12 relative group">
                        <div
                            class="hidden md:block absolute w-4 h-4 rounded-full bg-darker border-2 border-<?= $colorClass ?> -left-[57px] top-8 group-hover:bg-<?= $colorClass ?> transition-colors focus-within:bg-<?= $colorClass ?> shadow-[0_0_10px_<?= $shadowColor ?>]">
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-white mb-1"><?= htmlspecialchars($role) ?> <span
                                class="text-<?= $colorClass ?>">@ <?= htmlspecialchars($exp['company']) ?></span></h3>
                        <p class="text-sm font-mono text-slate-400 mb-4"><?= htmlspecialchars($exp['duration']) ?></p>
                        <?php if (isset($exp['details']) && is_array($exp['details'])): ?>
                        <ul class="space-y-3 text-slate-300">
                            <?php foreach ($exp['details'] as $detail): ?>
                            <li class="flex items-start">
                                <span class="text-<?= $colorClass ?> mr-2">▹</span>
                                <div><?= htmlspecialchars($detail) ?></div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
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

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 sm:gap-6">
                <!-- Skill Item -->
                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="PHP" class="w-10 h-10" />
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">PHP</span>
                </div>

                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" class="w-10 h-10" />
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">Laravel</span>
                </div>

                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL" class="w-10 h-10" />
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">MySQL</span>
                </div>

                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-10 h-10" />
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">JavaScript</span>
                </div>

                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind CSS" class="w-10 h-10" />
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">Tailwind CSS</span>
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
                <a href="mailto:<?= htmlspecialchars($content['contact']['email']) ?>"
                    class="flex items-center gap-2 px-6 py-3 rounded-full glass-card hover-glass text-slate-300 hover:text-white transition-all duration-300 hover:-translate-y-1">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <?= htmlspecialchars($content['contact']['email']) ?>
                </a>
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
</body>

</html>