<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 — Page Not Found | Marcus Loo</title>
    <meta name="robots" content="noindex">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;700&display=swap"
        rel="stylesheet">

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
                        dark: '#0f172a',
                        darker: '#020617',
                        primary: '#3b82f6',
                        secondary: '#8b5cf6',
                        accent: '#10b981',
                    },
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #0f172a;
            font-family: 'Inter', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            animation: blob 7s infinite;
        }

        @keyframes blob {
            0%   { transform: translate(0px, 0px) scale(1); }
            33%  { transform: translate(30px, -50px) scale(1.1); }
            66%  { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
    </style>
</head>

<body class="dark text-white min-h-screen flex flex-col items-center justify-center px-4 relative overflow-hidden">

    <!-- Background blobs -->
    <div class="blob w-96 h-96 bg-primary top-1/4 -left-32"></div>
    <div class="blob w-80 h-80 bg-secondary bottom-1/4 -right-24" style="animation-delay: 2s;"></div>

    <div class="glass-card rounded-2xl p-12 max-w-lg w-full text-center relative z-10 shadow-2xl">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-secondary to-accent rounded-t-2xl"></div>

        <p class="font-mono text-primary text-6xl font-bold mb-4">404</p>
        <h1 class="text-2xl sm:text-3xl font-bold text-white mb-4">Page Not Found</h1>
        <p class="text-slate-400 mb-8">
            Looks like this page doesn't exist or has been moved. Head back home and let's start fresh.
        </p>

        <a href="/"
            class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-primary text-white font-medium hover:bg-blue-600 transition-colors transform hover:-translate-y-1 duration-300 shadow-[0_0_15px_rgba(59,130,246,0.4)]">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Home
        </a>
    </div>

    <p class="mt-8 text-slate-600 text-sm font-mono">Marcus Loo &mdash; Senior Full Stack Engineer</p>

</body>

</html>
