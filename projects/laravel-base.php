<?php
$project = [
    'title'       => 'Laravel Rapid Development Toolkit',
    'subtitle'    => 'Internal Library',
    'tagline'     => 'Eliminate boilerplate. Ship faster. Stay consistent.',
    'tech'        => ['PHP', 'Laravel', 'MySQL'],
    'github'      => '',
    'live'        => '',

    'what'        => 'A reusable internal toolkit built on top of Laravel to accelerate the development of custom business applications by eliminating repetitive CRUD implementation and enforcing a consistent architecture across all projects.',

    'problems'    => [
        'CRUD interfaces rebuilt from scratch for every module',
        'Manually re-implementing validation, search, and REST APIs',
        'Repeated setup for roles, permissions, and file handling',
        'Slower delivery timelines due to boilerplate overhead',
        'Inconsistent implementations drifting across projects',
        'Reduced focus on actual business logic',
    ],

    'solution'    => 'Developed a base model-driven system where extending a single core class automatically enables a full suite of built-in features. By simply extending the base model, each entity instantly supports CRUD operations, configurable features, and a consistent structure across the entire application.',

    'capabilities' => [
        ['icon' => '⚙️', 'title' => 'Auto CRUD Generation',    'desc' => 'Prebuilt create / read / update / delete flows with override support for custom business logic.'],
        ['icon' => '📁', 'title' => 'File Management',          'desc' => 'Built-in file upload and storage handling, abstracted away from each module.'],
        ['icon' => '📊', 'title' => 'Import / Export System',   'desc' => 'Standardised data import and export functionality available out of the box.'],
        ['icon' => '🔍', 'title' => 'Search & Filtering',       'desc' => 'Configurable searchable columns defined directly on the model — no query boilerplate.'],
        ['icon' => '📋', 'title' => 'Dynamic Index Views',      'desc' => 'Define which fields appear in listing pages via model configuration, not view files.'],
        ['icon' => '🔐', 'title' => 'Roles & Permissions',      'desc' => 'Access control system available out of the box, integrated into every generated route.'],
    ],

    'code_example' => "class Product extends BaseModel\n{\n    // columns that are searchable\n    protected \$searchable  = ['name', 'sku'];\n\n    // columns that will be shown on the index\n    protected \$indexFields = ['name', 'price', 'stock'];\n\n    // columns that are files, will automatically store in the set storage\n    protected \$files = ['image'];\n\n    // boolean to indicate if this model should have API routes registered\n    protected \$hasApiResource = true;\n\n    // boolean to indicate if this model should have Admin routes registered\n    protected \$hasAdminResource = true;\n}",
    'code_note'    => 'Minimal configuration enables a fully functional CRUD module with search, API endpoints, and UI support. Not all features are displayed in this example as this is a private project.',

    'before' => [
        'Build CRUD logic for every module individually',
        'Manually implement validation, search, and APIs',
        'Repeated setup for roles, permissions, and file handling',
    ],
    'after' => [
        'Only implement business-specific logic',
        'Core features available instantly via model extension',
        'Consistent structure enforced across all modules',
    ],

    'impact' => [
        ['icon' => '⏱️', 'stat' => '70–80%',   'label' => 'Reduction in development time'],
        ['icon' => '🚀', 'stat' => '~1 week',   'label' => 'To deliver a customised system'],
        ['icon' => '🧩', 'stat' => '100%',      'label' => 'Consistent architecture across projects'],
        ['icon' => '📉', 'stat' => 'Near zero', 'label' => 'Repetitive boilerplate per module'],
    ],
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">

<head>
    <script>(function(){const t=localStorage.getItem('theme');if(t==='light')document.documentElement.classList.remove('dark');else document.documentElement.classList.add('dark');})()</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= htmlspecialchars($project['title']) ?> | Marcus Loo</title>
    <meta name="description" content="<?= htmlspecialchars($project['tagline']) ?>">
    <meta name="author" content="Marcus Loo">
    <meta name="robots" content="noindex">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
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
                        dark:    '#0f172a',
                        darker:  '#020617',
                        primary:   '#3b82f6',
                        secondary: '#8b5cf6',
                        accent:    '#10b981',
                    },
                    animation: {
                        blob: 'blob 7s infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%':   { transform: 'translate(0px, 0px) scale(1)' },
                            '33%':  { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%':  { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .glass-card {
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .hover-glass { transition: all 0.3s ease; }
        .hover-glass:hover {
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid rgba(59, 130, 246, 0.3);
            box-shadow: 0 10px 30px -10px rgba(59, 130, 246, 0.2);
        }
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        nav.scrolled {
            background: rgba(2, 6, 23, 0.8) !important;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #020617; }
        ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #334155; }
        html { scroll-behavior: smooth; scroll-padding-top: 80px; }
        body, .glass-card, nav, footer { transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease; }

        /* Light mode */
        html:not(.dark) body { background-color: #f0f4f8 !important; color: #334155; }
        html:not(.dark) .text-white { color: #0f172a !important; }
        html:not(.dark) .text-slate-300 { color: #475569 !important; }
        html:not(.dark) .text-slate-400 { color: #64748b !important; }
        html:not(.dark) .text-slate-500,
        html:not(.dark) .text-slate-600 { color: #94a3b8 !important; }
        html:not(.dark) .bg-darker { background-color: #f0f4f8 !important; }
        html:not(.dark) .bg-dark   { background-color: #e2e8f0 !important; }
        html:not(.dark) .border-white\/10 { border-color: rgba(15, 23, 42, 0.1) !important; }
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
        html:not(.dark) footer {
            background-color: rgba(226, 232, 240, 0.5) !important;
            border-top-color: rgba(15, 23, 42, 0.1);
        }
        html:not(.dark) ::-webkit-scrollbar-track { background: #f0f4f8; }
        html:not(.dark) ::-webkit-scrollbar-thumb { background: #cbd5e1; }
        html:not(.dark) ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        html:not(.dark) #mobile-menu {
            background-color: rgba(240, 244, 248, 0.98) !important;
            border-bottom-color: rgba(15, 23, 42, 0.1);
        }
        html:not(.dark) #theme-toggle,
        html:not(.dark) #theme-toggle-mobile { color: #64748b; }
        html:not(.dark) #theme-toggle:hover,
        html:not(.dark) #theme-toggle-mobile:hover {
            color: #0f172a !important;
            background-color: rgba(15, 23, 42, 0.06) !important;
        }
        html:not(.dark) .code-block {
            background: #e2e8f0 !important;
            border-color: rgba(15, 23, 42, 0.1) !important;
        }
        html:not(.dark) .code-block code { color: #1e293b !important; }

        /* Code block */
        .code-block {
            background: rgba(2, 6, 23, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 0.75rem;
            overflow-x: auto;
        }
        .code-block code {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.875rem;
            line-height: 1.7;
            color: #e2e8f0;
            white-space: pre;
        }
    </style>
</head>

<body class="bg-darker text-slate-300 font-sans antialiased">

    <!-- Background blobs -->
    <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-primary/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob"></div>
        <div class="absolute top-[20%] right-[-10%] w-96 h-96 bg-secondary/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob" style="animation-delay:2s"></div>
        <div class="absolute bottom-[-20%] left-[20%] w-96 h-96 bg-accent/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob" style="animation-delay:4s"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-bold text-white tracking-tighter">
                        <span class="text-primary">&lt;</span>Marcus-Loo<span class="text-primary">/&gt;</span>
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="/#about"
                            class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <a href="/#experiences"
                            class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Experiences</a>
                        <a href="/#skills"
                            class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Skills</a>
                        <a href="/#projects"
                            class="hover:text-primary transition-colors px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                        <a href="/#contact"
                            class="bg-primary/10 text-primary hover:bg-primary hover:text-white border border-primary/50 transition-all px-4 py-2 rounded-full text-sm font-medium">Contact Me</a>
                        <button id="theme-toggle" aria-label="Toggle light/dark mode"
                            class="mt-auto p-2 rounded-full text-slate-400 hover:text-white hover:bg-white/10 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-primary/50">
                            <svg class="theme-sun w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
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
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden hidden bg-dark/95 backdrop-blur-md border-b border-white/10" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/#about"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="/#experiences"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Experiences</a>
                <a href="/#skills"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Skills</a>
                <a href="/#projects"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Projects</a>
                <a href="/#contact"
                    class="hover:bg-white/5 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Contact Me</a>
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

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-24">

        <!-- Hero -->
        <section class="mb-20 reveal">
            <p class="font-mono text-accent text-sm mb-3 tracking-wide"><?= htmlspecialchars($project['subtitle']) ?></p>
            <h1 class="text-4xl sm:text-6xl font-bold text-white mb-4 tracking-tight leading-tight">
                <?= htmlspecialchars($project['title']) ?>
            </h1>
            <p class="text-xl text-slate-400 mb-8 max-w-2xl">
                <?= htmlspecialchars($project['tagline']) ?>
            </p>

            <!-- Tech badges -->
            <div class="flex flex-wrap gap-2 mb-8">
                <?php foreach ($project['tech'] as $tag): ?>
                <span class="font-mono text-sm text-primary/90 bg-primary/10 border border-primary/20 px-3 py-1 rounded-full">
                    <?= htmlspecialchars($tag) ?>
                </span>
                <?php endforeach; ?>
            </div>

            <!-- Links -->
            <div class="flex gap-4">
                <?php if (!empty($project['github'])): ?>
                <a href="<?= htmlspecialchars($project['github']) ?>" target="_blank" rel="noopener noreferrer"
                    class="flex items-center gap-2 px-5 py-2.5 rounded-full glass-card hover-glass text-slate-300 hover:text-white text-sm font-medium transition-all duration-300">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.385-1.335-1.755-1.335-1.755-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 21.795 24 17.298 24 12c0-6.63-5.37-12-12-12z"/>
                    </svg>
                    GitHub
                </a>
                <?php endif; ?>
                <?php if (!empty($project['live'])): ?>
                <a href="<?= htmlspecialchars($project['live']) ?>" target="_blank" rel="noopener noreferrer"
                    class="flex items-center gap-2 px-5 py-2.5 rounded-full bg-primary text-white text-sm font-medium hover:bg-blue-600 transition-colors duration-300 shadow-[0_0_15px_rgba(59,130,246,0.4)]">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                    Live Demo
                </a>
                <?php endif; ?>
            </div>

            <!-- Divider -->
            <div class="mt-12 h-px bg-gradient-to-r from-primary/50 via-secondary/30 to-transparent"></div>
        </section>

        <!-- What it is -->
        <section class="mb-16 reveal">
            <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                <span class="text-primary font-mono text-base">01.</span> What it is
            </h2>
            <p class="text-slate-400 leading-relaxed text-lg">
                <?= htmlspecialchars($project['what']) ?>
            </p>
        </section>

        <!-- Problem -->
        <section class="mb-16 reveal">
            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                <span class="text-secondary font-mono text-base">02.</span> The Problem
            </h2>
            <p class="text-slate-400 mb-6">In custom software development, significant time is repeatedly spent rebuilding the same foundational features:</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <?php foreach ($project['problems'] as $problem): ?>
                <div class="glass-card rounded-xl px-5 py-4 flex items-start gap-3">
                    <span class="text-red-400 shrink-0">✕</span>
                    <span class="text-slate-300 text-sm my-auto"><?= htmlspecialchars($problem) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Solution -->
        <section class="mb-16 reveal">
            <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                <span class="text-accent font-mono text-base">03.</span> The Solution
            </h2>
            <p class="text-slate-400 leading-relaxed text-lg mb-8">
                <?= htmlspecialchars($project['solution']) ?>
            </p>

            <!-- Code example -->
            <div class="code-block p-6">
                <div class="flex items-center gap-1.5 mb-4">
                    <div class="w-3 h-3 rounded-full bg-red-500/70"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500/70"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500/70"></div>
                    <span class="ml-3 font-mono text-xs text-slate-500">Product.php</span>
                </div>
                <code><?= htmlspecialchars($project['code_example']) ?></code>
            </div>
            <p class="mt-4 text-sm text-slate-500 font-mono"><?= htmlspecialchars($project['code_note']) ?></p>
        </section>

        <!-- Core Capabilities -->
        <section class="mb-16 reveal">
            <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
                <span class="text-primary font-mono text-base">04.</span> Core Capabilities
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php foreach ($project['capabilities'] as $cap): ?>
                <div class="glass-card hover-glass rounded-2xl p-6 group transition-all duration-300 hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-0.5 bg-gradient-to-r from-primary via-secondary to-accent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="text-3xl mb-3"><?= $cap['icon'] ?></div>
                    <h3 class="font-semibold text-white mb-2"><?= htmlspecialchars($cap['title']) ?></h3>
                    <p class="text-slate-400 text-sm leading-relaxed"><?= htmlspecialchars($cap['desc']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Before vs After -->
        <section class="mb-16 reveal">
            <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
                <span class="text-secondary font-mono text-base">05.</span> Before vs After
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Before -->
                <div class="glass-card rounded-2xl p-6">
                    <div class="flex items-center gap-2 mb-5">
                        <div class="w-2.5 h-2.5 rounded-full bg-red-400"></div>
                        <h3 class="font-semibold text-white">Before</h3>
                    </div>
                    <ul class="space-y-3">
                        <?php foreach ($project['before'] as $item): ?>
                        <li class="flex items-start gap-2.5 text-sm text-slate-400">
                            <span class="text-red-400 shrink-0">✕</span>
                            <span class="my-auto"><?= htmlspecialchars($item) ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- After -->
                <div class="glass-card rounded-2xl p-6 border-accent/20">
                    <div class="flex items-center gap-2 mb-5">
                        <div class="w-2.5 h-2.5 rounded-full bg-accent"></div>
                        <h3 class="font-semibold text-white">After</h3>
                    </div>
                    <ul class="space-y-3">
                        <?php foreach ($project['after'] as $item): ?>
                        <li class="flex items-start gap-2.5 text-sm text-slate-400">
                            <span class="text-accent shrink-0">▹</span>
                            <span class="my-auto"><?= htmlspecialchars($item) ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Impact -->
        <section class="reveal">
            <h2 class="text-2xl font-bold text-white mb-8 flex items-center gap-3">
                <span class="text-accent font-mono text-base">06.</span> Impact
            </h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                <?php foreach ($project['impact'] as $item): ?>
                <div class="glass-card hover-glass rounded-2xl p-6 text-center group transition-all duration-300 hover:-translate-y-1">
                    <div class="text-3xl mb-3"><?= $item['icon'] ?></div>
                    <div class="text-2xl font-bold text-white mb-1 group-hover:text-primary transition-colors duration-300">
                        <?= htmlspecialchars($item['stat']) ?>
                    </div>
                    <div class="text-xs text-slate-500 leading-snug"><?= htmlspecialchars($item['label']) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="py-8 text-center text-slate-500 text-sm font-mono border-t border-white/10 bg-dark/50">
        <p>Designed & Built by Marcus</p>
        <p class="mt-2 text-xs">Built with PHP & Tailwind CSS</p>
    </footer>

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

            // --- Mobile menu ---
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', () => menu.classList.toggle('hidden'));
                menu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', () => menu.classList.add('hidden'));
                });
            }

            // --- Navbar scroll ---
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                navbar.classList.toggle('scrolled', window.scrollY > 50);
            });

            // --- Scroll reveal ---
            const revealEls = document.querySelectorAll('.reveal');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            revealEls.forEach(el => observer.observe(el));
        });
    </script>

</body>
</html>
