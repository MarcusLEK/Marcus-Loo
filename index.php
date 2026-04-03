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
        'When I\'m not at the computer, I\'m usually hanging out with my friends, reading, or playing video games.'
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
    'contact' => [
        'email' => 'marcuslooek@gmail.com',
        'linkedin' => 'https://www.linkedin.com/in/marcus-loo',
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
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
        "@type": "WebSite",
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
                        <a href="#contact"
                            class="bg-primary/10 text-primary hover:bg-primary hover:text-white border border-primary/50 transition-all px-4 py-2 rounded-full text-sm font-medium">Contact
                            Me</a>
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
                <a href="#contact"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Contact
                    Me</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center justify-center pt-20 px-4 sm:px-6 lg:px-8 relative">
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
                                <span class="text-<?= $colorClass ?> mr-2 mt-1">▹</span>
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
                        class="w-12 h-12 flex items-center justify-center text-4xl group-hover:scale-110 transition-transform text-[#777BB4]">
                        <svg viewBox="0 0 128 128" width="1em" height="1em">
                            <path fill="currentColor"
                                d="M64 4.542l55.82 28.5L88.948 108.411 64 123.458l-24.948-15.047L8.18 33.042z" />
                            <path fill="#FFF"
                                d="M64 15.688v98.85l19.5-11.751 25.106-61.914zm0 0L39.394 40.873 64 61.942v15.39l-24.606-21.069L24.894 72.82 64 105.51z" />
                        </svg>
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">PHP</span>
                </div>

                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center text-4xl group-hover:scale-110 transition-transform text-[#FF2D20]">
                        <svg viewBox="0 0 128 128" width="1em" height="1em">
                            <path fill="currentColor"
                                d="M120.301 27.202H67.24a4.348 4.348 0 0 1-4.008-2.65L55.975 7.15A11.724 11.724 0 0 0 45.166 0h-5.918a11.72 11.72 0 0 0-10.81 7.15l-7.257 17.402a4.348 4.348 0 0 1-4.009 2.65H7.699c-3.111 0-5.787 2.05-6.522 5.093l-1.077 4.16c-.352 1.348-.125 2.766.621 3.93A6.878 6.878 0 0 0 6.556 43.19h106.33a5.539 5.539 0 0 0 5.408-4.502l1.6-8.995c.5-2.78-1.577-5.321-4.305-5.321h4.712z" />
                            <path fill="currentColor"
                                d="M107.025 50.485c-1.42 0-2.618.995-2.852 2.378l-7.234 42.664a2.915 2.915 0 0 1-2.852 2.381H25.321a2.924 2.924 0 0 1-2.859-2.4l-7.05-42.645c-.24-1.385-1.442-2.378-2.862-2.378s-2.622.993-2.862 2.378l-7.052 42.645A17.518 17.518 0 0 0 19.805 118a17.478 17.478 0 0 0 13.91 10h52.012a17.479 17.479 0 0 0 13.914-10 17.512 17.512 0 0 0 1.259-1.92l5.97-39.73 3.016-23.475a2.895 2.895 0 0 0-2.861-2.39z" />
                        </svg>
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">Laravel</span>
                </div>

                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center text-4xl group-hover:scale-110 transition-transform text-[#4479A1]">
                        <svg viewBox="0 0 128 128" width="1em" height="1em">
                            <path fill="currentColor"
                                d="M112.924 43.915c-3.15-2.903-8.083-4.482-14.71-4.721v-4.596c6.64-.176 11.025-1.8 13.064-4.832 2.677-3.951-1.493-9.52-12.433-16.591L78.694 0v35.39c-2.482 1.353-5.26 2.062-8.293 2.062h-11.83v20.449C65.347 57.9 71.9 57.9 77.106 57.9c13.042 0 24.322 1.956 31.745 5.514 8.783 4.223 13.829 10.155 13.829 16.273 0 14.73-24.623 26.697-55.006 26.697C37.288 106.384 12.668 94.416 12.668 79.687c0-6.19 5.17-12.217 14.126-16.483 8.356-3.955 20.37-5.748 33.914-5.748v24.122c-7.901-.585-15.012-3.125-19.957-7.143-6.126-5.01-6.126-13.111-6.126-17.653 1.836-1.921 7.21-3.613 15.65-4.93V32.48c-12.724 1.341-21.6 3.731-25.545 7.151C3.152 40.959-.513 42.668.058 48.01c.717 6.643 6.94 10.982 16.326 14.331 1.766-.605 3.593-1.159 5.518-1.631v.606h1.232v-.194c2.812-.662 5.759-1.229 8.847-1.684v19.462C11.391 79.488-.13 89.26-.13 100.916 -.13 115.823 30.638 128 67.675 128c37.035 0 60.455-12.176 60.455-27.086 0-11.536-11.233-21.236-31.547-21.236v-6.52c8.89 2.593 14.499 6.273 14.499 10.151 0 5.432-10.74 9.873-24.086 9.873v24.643c22.115-3.376 36.32-9.757 36.32-17.155 0-7.794-15.823-14.437-39.695-17.502h-4.83v-19.98c5.44.025 8.956.025 10.517.025 8.352 0 15.111-1.096 19.349-3.136 5.86-2.825 8.165-6.155 8.165-8.868.01-4.706-5.717-8.086-13.798-10.21z" />
                        </svg>
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">MySQL</span>
                </div>

                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center text-4xl group-hover:scale-110 transition-transform text-[#F7DF1E]">
                        <svg viewBox="0 0 128 128" width="1em" height="1em">
                            <path fill="currentColor" d="M11.583 14.423h104.83v104.82H11.583z" />
                            <path fill="#020617"
                                d="M85.068 95.829c-3.116-2.812-5.064-5.46-5.064-9.617 0-4.004 2.894-6.815 7.185-6.815 4.301 0 6.6 2.016 8.303 5.378l6.8-4.23c-2.616-5.83-8.115-9.143-15.183-9.143-9.973 0-16.793 6.326-16.793 15.939 0 13.923 18.067 11.542 18.067 20.323 0 4.103-3.114 6.915-7.9 6.915-5.228 0-8.917-2.903-11.233-7.514l-7.382 4.103c3.415 6.924 9.4 11.166 18.513 11.166 10.372 0 17.587-5.917 17.587-16.223.003-14.929-18.067-12.046-18.067-20.31M69.043 121.258h-9.59V72.296h9.59z" />
                        </svg>
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">JavaScript</span>
                </div>

                <div
                    class="glass-card hover-glass rounded-xl p-6 flex flex-col items-center justify-center gap-3 group transition-all duration-300 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 flex items-center justify-center text-4xl group-hover:scale-110 transition-transform text-[#38B2AC]">
                        <svg viewBox="0 0 128 128" width="1em" height="1em">
                            <path fill="currentColor"
                                d="M54.55 1.544c-22.396 0-38.309 6.136-38.309 37.643 0 52.479 66.862 39.066 66.862 87.27H66.604c0-22.316-11.838-23.753-27.425-34.195-2.023-1.353-3.799-2.628-5.322-3.868v18.73A125 125 0 0 0 46.402 128h9.871l-.106-.856s-.11.666-.021-.497a85.2 85.2 0 0 1 20.525-46.733 46 46 0 0 0 12.026-6.42A46.2 46.2 0 0 0 102.756 62.06a44.6 44.6 0 0 0 .584-36.874A45.2 45.2 0 0 0 88.08 6.463 46.1 46.1 0 0 0 69.851.642C64.673.12 59.508 1.565 54.55 1.544M69.57 20.25a25.8 25.8 0 0 1 10.155 3.321A25.4 25.4 0 0 1 88.3 33.155a25 25 0 0 1-.32 20.575 25.6 25.6 0 0 1-7.859 10.231c-3.551 2.651-7.794 4.148-12.091 5.378-4.908 1.4-15.013 1.258-15.013 1.258a43.1 43.1 0 0 1 2.973-19.499c5-11.365 7-19.897 4.125-24.81-2.908-5.015-11.546-5.834-11.546-5.834a50.9 50.9 0 0 1 20.912-.136" />
                        </svg>
                    </div>
                    <span class="font-mono text-sm text-slate-300 group-hover:text-white">Tailwind CSS</span>
                </div>
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
        });
    </script>
</body>

</html>