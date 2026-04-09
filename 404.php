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

    <canvas id="particle-canvas" class="absolute inset-0 w-full h-full pointer-events-none z-0"></canvas>

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

    <script>
        const canvas = document.getElementById('particle-canvas');
        const ctx = canvas.getContext('2d');
        let particles = [];
        let mouse = { x: null, y: null };
        const PARTICLE_COUNT = 80;
        const CONNECTION_DISTANCE = 140;
        const MOUSE_REPEL_DISTANCE = 100;
        const COLORS = ['#3b82f6', '#8b5cf6', '#10b981'];

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        class Particle {
            constructor() { this.reset(true); }
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
                const speed = Math.sqrt(this.vx * this.vx + this.vy * this.vy);
                if (speed > 2.5) { this.vx = (this.vx / speed) * 2.5; this.vy = (this.vy / speed) * 2.5; }
                this.vx *= 0.99; this.vy *= 0.99;
                this.x += this.vx; this.y += this.vy;
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
            for (let i = 0; i < PARTICLE_COUNT; i++) particles.push(new Particle());
        }

        function drawConnections() {
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < CONNECTION_DISTANCE) {
                        const grad = ctx.createLinearGradient(particles[i].x, particles[i].y, particles[j].x, particles[j].y);
                        grad.addColorStop(0, particles[i].color);
                        grad.addColorStop(1, particles[j].color);
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.strokeStyle = grad;
                        ctx.globalAlpha = (1 - dist / CONNECTION_DISTANCE) * 0.35;
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

        window.addEventListener('resize', () => { resizeCanvas(); initParticles(); });
        document.addEventListener('mousemove', (e) => { mouse.x = e.clientX; mouse.y = e.clientY; });
        document.addEventListener('mouseleave', () => { mouse.x = null; mouse.y = null; });
    </script>

</body>

</html>
