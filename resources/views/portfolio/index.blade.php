<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Muliadi is a Full Stack Web Developer based in Medan, Indonesia, focused on Laravel, PHP, JavaScript, MySQL, responsive web development, and production-ready business websites.">
    <meta name="theme-color" content="#07090d">
    <title>Muliadi | Full Stack Web Developer</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#07090d] text-[#f5f7fb] antialiased selection:bg-cyan-300 selection:text-slate-950">
    <div class="page-noise" aria-hidden="true"></div>

    <header class="fixed inset-x-0 top-0 z-50">
        <div class="mx-auto max-w-7xl px-5 pt-5 sm:px-8 lg:px-10">
            <nav class="glass-nav flex items-center justify-between rounded-2xl px-4 py-3 sm:px-5" aria-label="Main navigation">
                <a href="#home" class="group flex items-center gap-3">
                    <span class="grid size-10 place-items-center rounded-xl border border-white/10 bg-white/[0.05] font-black tracking-[-0.08em] text-white transition group-hover:border-cyan-300/50 group-hover:text-cyan-300">M.</span>
                    <span class="hidden text-sm font-semibold tracking-[0.18em] text-white/80 sm:block">MULIADI</span>
                </a>

                <button id="menuToggle" class="grid size-10 place-items-center rounded-xl border border-white/10 bg-white/[0.04] text-white md:hidden" aria-label="Open navigation" aria-expanded="false">
                    <span class="menu-icon block h-3.5 w-5"></span>
                </button>

                <div class="hidden items-center gap-7 text-sm text-white/65 md:flex">
                    <a class="nav-link" href="#work">Work</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#stack">Stack</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>

                <a href="mailto:muliadi.tech@gmail.com" class="hidden items-center gap-2 rounded-xl border border-white/10 bg-white/[0.05] px-4 py-2 text-sm font-semibold text-white transition hover:border-cyan-300/40 hover:bg-cyan-300 hover:text-slate-950 md:inline-flex">
                    Let's Talk
                    <span aria-hidden="true">↗</span>
                </a>
            </nav>

            <div id="mobileMenu" class="mobile-menu glass-nav mt-2 hidden rounded-2xl p-3 md:hidden">
                <a href="#work">Work</a>
                <a href="#about">About</a>
                <a href="#stack">Stack</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="relative isolate min-h-screen overflow-hidden px-5 pb-20 pt-32 sm:px-8 lg:px-10 lg:pt-36">
            <div class="hero-grid absolute inset-0 -z-20"></div>
            <div class="hero-glow hero-glow-one absolute -z-10"></div>
            <div class="hero-glow hero-glow-two absolute -z-10"></div>

            <div class="mx-auto grid min-h-[calc(100vh-9rem)] max-w-7xl items-center gap-14 lg:grid-cols-[1.05fr_.95fr]">
                <div class="hero-copy max-w-4xl">
                    <div class="reveal inline-flex items-center gap-2 rounded-full border border-emerald-300/20 bg-emerald-300/[0.06] px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.16em] text-emerald-300">
                        <span class="status-dot"></span>
                        Available for work
                    </div>

                    <p class="reveal mt-7 text-sm font-semibold uppercase tracking-[0.26em] text-cyan-300/85">Full Stack Web Developer · Medan, Indonesia</p>

                    <h1 class="reveal mt-4 text-[clamp(3.25rem,9vw,7.9rem)] font-black leading-[0.84] tracking-[-0.075em] text-white">
                        I build
                        <span class="text-gradient block">useful web</span>
                        experiences.
                    </h1>

                    <p class="reveal mt-7 max-w-2xl text-base leading-7 text-white/58 sm:text-lg sm:leading-8">
                        I'm Muliadi, an Information Systems graduate focused on building responsive, maintainable, and business-ready applications with Laravel, PHP, JavaScript, and MySQL.
                    </p>

                    <div class="reveal mt-9 flex flex-wrap gap-3">
                        <a href="#work" class="primary-btn">
                            View selected work
                            <span aria-hidden="true">↓</span>
                        </a>
                        <a href="mailto:muliadi.tech@gmail.com" class="secondary-btn">
                            muliadi.tech@gmail.com
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>

                    <div class="reveal mt-12 flex flex-wrap gap-x-7 gap-y-3 text-sm text-white/45">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>JavaScript</span>
                        <span>MySQL</span>
                        <span>Git</span>
                        <span>Technical SEO</span>
                    </div>
                </div>

                <div class="reveal relative mx-auto w-full max-w-xl lg:mx-0 lg:ml-auto">
                    <div class="profile-shell">
                        <div class="profile-toolbar">
                            <div class="flex items-center gap-1.5">
                                <span class="size-2.5 rounded-full bg-red-400/80"></span>
                                <span class="size-2.5 rounded-full bg-amber-300/80"></span>
                                <span class="size-2.5 rounded-full bg-emerald-300/80"></span>
                            </div>
                            <span class="font-mono text-[11px] uppercase tracking-[0.18em] text-white/35">muliadi.profile</span>
                        </div>

                        <div class="grid gap-5 p-5 sm:p-6">
                            <div class="relative overflow-hidden rounded-[1.7rem] border border-white/10 bg-[#0b0f16]">
                                <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_20%,rgba(34,211,238,.16),transparent_45%)]"></div>
                                <img src="https://avatars.githubusercontent.com/u/312813187?v=4" alt="Muliadi" class="relative mx-auto aspect-[4/4.3] w-full max-w-sm object-cover object-center grayscale-[10%]" />
                                <div class="absolute inset-x-4 bottom-4 rounded-2xl border border-white/10 bg-black/45 p-4 backdrop-blur-xl">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <p class="text-xs uppercase tracking-[0.18em] text-white/45">Current focus</p>
                                            <p class="mt-1 font-semibold text-white">Laravel applications & modern UI</p>
                                        </div>
                                        <div class="grid size-10 shrink-0 place-items-center rounded-xl bg-cyan-300 font-black text-slate-950">M</div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-3">
                                <div class="stat-card">
                                    <strong>01</strong>
                                    <span>Production project</span>
                                </div>
                                <div class="stat-card">
                                    <strong>Full Stack</strong>
                                    <span>Web development</span>
                                </div>
                                <div class="stat-card">
                                    <strong>Open</strong>
                                    <span>To opportunities</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="code-chip code-chip-one">route → controller → view</div>
                    <div class="code-chip code-chip-two">git push origin main</div>
                </div>
            </div>

            <div class="mx-auto mt-8 flex max-w-7xl items-center gap-4 text-[11px] font-semibold uppercase tracking-[0.22em] text-white/30">
                <span>Scroll to explore</span>
                <span class="h-px flex-1 bg-gradient-to-r from-white/15 to-transparent"></span>
            </div>
        </section>

        <section id="work" class="section-shell">
            <div class="section-heading reveal">
                <p>01 · Selected Work</p>
                <h2>Real work. Clear impact.</h2>
                <span>Projects that show how I turn requirements into working digital products.</span>
            </div>

            <article class="project-card reveal">
                <div class="project-preview">
                    <div class="browser-bar">
                        <div class="flex items-center gap-1.5">
                            <span></span><span></span><span></span>
                        </div>
                        <div class="browser-address">kingcocoprime.com</div>
                    </div>
                    <div class="project-visual">
                        <div class="project-orbit"></div>
                        <div class="relative z-10 max-w-lg">
                            <p class="text-xs font-semibold uppercase tracking-[0.22em] text-cyan-300">Production Website</p>
                            <h3 class="mt-3 text-4xl font-black tracking-[-0.055em] text-white sm:text-5xl">KING COCOPRIME</h3>
                            <p class="mt-4 max-w-md leading-7 text-white/55">Corporate export website with custom CMS, multilingual content, SEO architecture, product management, news publishing, and production deployment.</p>
                        </div>
                    </div>
                </div>

                <div class="project-info">
                    <div>
                        <p class="eyebrow">Featured Project</p>
                        <h3>KING COCOPRIME</h3>
                    </div>

                    <p>Built and maintained across frontend, backend, CMS, database, content architecture, technical SEO, Git workflow, and production hosting.</p>

                    <div class="project-tags">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                        <span>SEO</span>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a href="https://kingcocoprime.com" target="_blank" rel="noreferrer" class="primary-btn">Live website ↗</a>
                        <span class="secondary-btn cursor-default">Source private 🔒</span>
                    </div>
                </div>
            </article>
        </section>

        <section id="about" class="section-shell">
            <div class="grid gap-10 lg:grid-cols-[.72fr_1.28fr]">
                <div class="section-heading reveal lg:sticky lg:top-32 lg:self-start">
                    <p>02 · About</p>
                    <h2>Developer mindset. Business context.</h2>
                </div>

                <div class="reveal">
                    <p class="about-lead">I enjoy the point where technology meets a real operational need.</p>
                    <p class="mt-6 max-w-3xl text-base leading-8 text-white/55 sm:text-lg">
                        As an Information Systems graduate, I approach development from both technical and business perspectives. I work across interface implementation, backend logic, database structure, CMS workflows, SEO, Git, deployment, and ongoing website maintenance.
                    </p>

                    <div class="mt-10 grid gap-3 sm:grid-cols-2">
                        <div class="info-card">
                            <span>Education</span>
                            <strong>Bachelor of Information Systems</strong>
                            <p>Universitas Katolik Santo Thomas</p>
                        </div>
                        <div class="info-card">
                            <span>Location</span>
                            <strong>Medan, North Sumatra</strong>
                            <p>Indonesia</p>
                        </div>
                        <div class="info-card">
                            <span>Strength</span>
                            <strong>End-to-end web workflow</strong>
                            <p>Build · improve · deploy · maintain</p>
                        </div>
                        <div class="info-card">
                            <span>Goal</span>
                            <strong>Build useful software</strong>
                            <p>Clean, practical, and easy to manage</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="stack" class="section-shell">
            <div class="section-heading reveal">
                <p>03 · Stack</p>
                <h2>Tools I use to build.</h2>
            </div>

            <div class="stack-grid reveal">
                <div class="stack-card stack-card-featured">
                    <span class="stack-number">01</span>
                    <p>Backend</p>
                    <h3>Laravel + PHP</h3>
                    <span>Application logic, routing, controllers, Blade, CMS features, and backend workflows.</span>
                </div>
                <div class="stack-card">
                    <span class="stack-number">02</span>
                    <p>Database</p>
                    <h3>MySQL</h3>
                    <span>Relational data, migrations, queries, application data structure.</span>
                </div>
                <div class="stack-card">
                    <span class="stack-number">03</span>
                    <p>Frontend</p>
                    <h3>JavaScript</h3>
                    <span>Responsive interactions, UI behavior, and modern frontend fundamentals.</span>
                </div>
                <div class="stack-card">
                    <span class="stack-number">04</span>
                    <p>Workflow</p>
                    <h3>Git + GitHub</h3>
                    <span>Version control, commits, branches, remote repositories, and deployment workflow.</span>
                </div>
            </div>
        </section>

        <section id="contact" class="section-shell pb-28">
            <div class="contact-card reveal">
                <div>
                    <p class="eyebrow">04 · Contact</p>
                    <h2>Have a role or project in mind?</h2>
                    <p>I'm open to web development, full stack development, and IT opportunities.</p>
                </div>
                <a href="mailto:muliadi.tech@gmail.com" class="contact-arrow" aria-label="Email Muliadi">↗</a>
            </div>
        </section>
    </main>

    <footer class="border-t border-white/[0.08] px-5 py-8 sm:px-8 lg:px-10">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 text-sm text-white/35 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ date('Y') }} Muliadi. Built with Laravel.</p>
            <div class="flex gap-5">
                <a class="hover:text-white" href="https://github.com/Muly-Adi" target="_blank" rel="noreferrer">GitHub ↗</a>
                <a class="hover:text-white" href="mailto:muliadi.tech@gmail.com">Email ↗</a>
            </div>
        </div>
    </footer>
</body>
</html>
