/* Marcus Loo — site behaviour */
(function () {
    'use strict';

    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    document.addEventListener('DOMContentLoaded', function () {
        theme();
        nav();
        reveal();
        accordion();
        typewriter();
        terminal();
        statusbar();
        copyEmail();
    });

    /* ---- Theme ---------------------------------------------- */

    function theme() {
        var root = document.documentElement;

        function sync() {
            var dark = root.dataset.theme !== 'light';
            // These icons are <svg>, and `hidden` is an HTMLElement property that
            // SVGElement does not have — assigning it silently does nothing.
            // toggleAttribute drives the real content attribute on any element.
            document.querySelectorAll('.theme-sun').forEach(function (el) {
                el.toggleAttribute('hidden', !dark);
            });
            document.querySelectorAll('.theme-moon').forEach(function (el) {
                el.toggleAttribute('hidden', dark);
            });
            document.querySelectorAll('.theme-label').forEach(function (el) {
                el.textContent = dark ? 'Light mode' : 'Dark mode';
            });
        }

        sync();

        document.querySelectorAll('[data-theme-toggle]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var next = root.dataset.theme === 'light' ? 'dark' : 'light';
                root.dataset.theme = next;
                try {
                    localStorage.setItem('theme', next);
                } catch (e) { /* private mode */ }
                sync();
            });
        });
    }

    /* ---- Nav ------------------------------------------------ */

    function nav() {
        var bar = document.querySelector('.nav');
        var burger = document.querySelector('.nav-burger');
        var drawer = document.querySelector('.nav-drawer');

        if (bar) {
            var stick = function () {
                bar.classList.toggle('is-stuck', window.scrollY > 8);
            };
            stick();
            window.addEventListener('scroll', stick, { passive: true });
        }

        if (burger && drawer) {
            burger.addEventListener('click', function () {
                var open = drawer.classList.toggle('is-open');
                burger.setAttribute('aria-expanded', String(open));
            });
            drawer.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    drawer.classList.remove('is-open');
                    burger.setAttribute('aria-expanded', 'false');
                });
            });
        }
    }

    /* ---- Scroll reveal -------------------------------------- */

    function reveal() {
        var items = document.querySelectorAll('.reveal');
        if (!items.length) return;

        if (reduced || !('IntersectionObserver' in window)) {
            items.forEach(function (el) {
                el.classList.add('is-in');
            });
            return;
        }

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-in');
                io.unobserve(entry.target);
            });
        }, { rootMargin: '0px 0px -8% 0px' });

        items.forEach(function (el) {
            io.observe(el);
        });
    }

    /* ---- Experience accordion ------------------------------- */

    function accordion() {
        document.querySelectorAll('.exp-toggle').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var body = document.getElementById(btn.getAttribute('aria-controls'));
                if (!body) return;
                var open = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', String(!open));
                body.dataset.open = String(!open);
            });
        });
    }

    /* ---- Hero typewriter ------------------------------------ */

    function typewriter() {
        var el = document.getElementById('typewriter');
        if (!el) return;

        var phrases;
        try {
            phrases = JSON.parse(el.dataset.phrases || '[]');
        } catch (e) {
            return;
        }
        if (!phrases.length) return;

        if (reduced) {
            el.textContent = phrases[0];
            return;
        }

        var phrase = 0;
        var chars = 0;
        var deleting = false;

        (function tick() {
            var current = phrases[phrase];
            chars += deleting ? -1 : 1;
            el.textContent = current.slice(0, chars);

            var wait = deleting ? 45 : 85;

            if (!deleting && chars === current.length) {
                wait = 1800;
                deleting = true;
            } else if (deleting && chars === 0) {
                deleting = false;
                phrase = (phrase + 1) % phrases.length;
                wait = 350;
            }

            setTimeout(tick, wait);
        })();
    }

    /* ---- Terminal playback ---------------------------------- */

    function terminal() {
        var term = document.querySelector('.term');
        if (!term) return;

        var rows = Array.prototype.slice.call(term.querySelectorAll('.term-line, .term-out'));

        var showAll = function () {
            rows.forEach(function (row) {
                row.classList.add('is-shown');
            });
        };

        if (reduced) {
            showAll();
            return;
        }

        // Only play once the terminal is actually on screen.
        var start = function () {
            var i = 0;

            var next = function () {
                if (i >= rows.length) return;

                var row = rows[i++];
                row.classList.add('is-shown');

                var cmd = row.querySelector('.term-cmd');
                if (!cmd) {
                    setTimeout(next, 260);
                    return;
                }

                var text = cmd.dataset.cmd || cmd.textContent;
                cmd.textContent = '';
                var c = 0;

                (function type() {
                    cmd.textContent = text.slice(0, ++c);
                    if (c < text.length) {
                        setTimeout(type, 45);
                    } else {
                        setTimeout(next, 420);
                    }
                })();
            };

            setTimeout(next, 400);
        };

        if (!('IntersectionObserver' in window)) {
            start();
            return;
        }

        var io = new IntersectionObserver(function (entries) {
            if (!entries[0].isIntersecting) return;
            io.disconnect();
            start();
        }, { threshold: 0.25 });

        io.observe(term);
    }

    /* ---- Status bar: active section + scroll progress ------- */

    function statusbar() {
        var sections = Array.prototype.slice.call(document.querySelectorAll('main section[id]'));
        var links = Array.prototype.slice.call(document.querySelectorAll('[data-nav-link]'));
        var label = document.getElementById('sb-section');
        var pct = document.getElementById('sb-pct');

        var update = function () {
            var max = document.documentElement.scrollHeight - window.innerHeight;
            if (pct) {
                pct.textContent = (max <= 0 ? 100 : Math.round((window.scrollY / max) * 100)) + '%';
            }

            if (!sections.length) return;

            var line = window.scrollY + window.innerHeight * 0.35;
            var active = sections[0];

            sections.forEach(function (section) {
                if (section.offsetTop <= line) active = section;
            });

            if (label) label.textContent = active.dataset.file || active.id;

            links.forEach(function (link) {
                link.classList.toggle('is-active', link.dataset.navLink === active.id);
            });
        };

        update();
        window.addEventListener('scroll', update, { passive: true });
        window.addEventListener('resize', update);
    }

    /* ---- Copy email ----------------------------------------- */

    function copyEmail() {
        var toast = document.getElementById('toast');

        var ping = function () {
            if (!toast) return;
            toast.classList.add('is-shown');
            clearTimeout(toast._t);
            toast._t = setTimeout(function () {
                toast.classList.remove('is-shown');
            }, 2200);
        };

        document.querySelectorAll('[data-copy]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var value = btn.dataset.copy;

                if (navigator.clipboard && window.isSecureContext) {
                    navigator.clipboard.writeText(value).then(ping, fallback);
                } else {
                    fallback();
                }

                function fallback() {
                    var ta = document.createElement('textarea');
                    ta.value = value;
                    ta.setAttribute('readonly', '');
                    ta.style.cssText = 'position:fixed;top:0;left:0;opacity:0';
                    document.body.appendChild(ta);
                    ta.select();
                    try {
                        document.execCommand('copy');
                        ping();
                    } catch (e) { /* nothing we can do */ }
                    document.body.removeChild(ta);
                }
            });
        });
    }
})();
