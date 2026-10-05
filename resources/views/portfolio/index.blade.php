<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Muliadi is a Full Stack Web Developer in Medan, Indonesia, building practical Laravel, PHP, MySQL, and JavaScript applications.">
    <meta name="theme-color" content="#080b10">
    <title>Muliadi | Full Stack Web Developer</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#080b10] text-[#f7f8fb] antialiased selection:bg-cyan-300 selection:text-slate-950">
    <header class="site-header">
        <div class="shell">
            <nav class="nav-wrap" aria-label="Main navigation">
                <a href="#home" class="brand" aria-label="Muliadi home">Muliadi<span>.</span></a>

                <div class="hidden items-center gap-7 md:flex">
                    <a class="nav-link" href="#work">Work</a>
                    <a class="nav-link" href="#experience">Experience</a>
                    <a class="nav-link" href="#about">About</a>
                    <a class="nav-link" href="#contact">Contact</a>
                </div>

                <a href="mailto:muliadi.tech@gmail.com" class="nav-cta hidden md:inline-flex">Let's talk ↗</a>

                <button id="menuToggle" class="menu-button md:hidden" type="button" aria-label="Open navigation" aria-expanded="false">
                    <span></span><span></span>
                </button>
            </nav>

            <div id="mobileMenu" class="mobile-menu hidden md:hidden">
                <a href="#work">Work</a>
                <a href="#experience">Experience</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="hero-section">
            <div class="hero-grid" aria-hidden="true"></div>
            <div class="shell hero-layout">
                <div class="reveal hero-copy">
                    <p class="kicker">Full Stack Web Developer · Medan, Indonesia</p>
                    <h1>Muliadi</h1>
                    <p class="hero-title">I build practical web applications that are clean, reliable, and easy to manage.</p>
                    <p class="hero-summary">Focused on Laravel, PHP, MySQL, and JavaScript for business websites and web applications.</p>

                    <div class="hero-actions">
                        <a href="#work" class="btn-primary">View projects ↓</a>
                        <a href="mailto:muliadi.tech@gmail.com" class="btn-secondary">Contact me ↗</a>
                    </div>

                    <div class="hero-stack" aria-label="Core skills">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                        <span>Git</span>
                    </div>
                </div>

                <div class="reveal portrait-wrap">
                    <div class="portrait-card">
                        <img src="https://avatars.githubusercontent.com/u/312813187?v=4" alt="Muliadi, Full Stack Web Developer">
                    </div>
                    <div class="portrait-note">
                        <span>Currently</span>
                        <strong>Building and maintaining Laravel projects</strong>
                    </div>
                </div>
            </div>
        </section>

        <section id="work" class="section">
            <div class="shell">
                <div class="section-head reveal">
                    <div>
                        <p class="section-kicker">Selected work</p>
                        <h2>Projects that show the work.</h2>
                    </div>
                    <p>Two projects that best represent my current experience in production web development and application development.</p>
                </div>

                <div class="projects-grid">
                    <article class="project-card reveal">
                        <a href="https://kingcocoprime.com" target="_blank" rel="noreferrer" class="project-media project-media-dark">
                            <img src="https://kingcocoprime.com/assets/images/coconut-shell-charcoal-premium.jpeg" alt="KING COCOPRIME charcoal website project" loading="lazy">
                            <div class="media-overlay"></div>
                            <div class="media-label">
                                <span>Production website</span>
                                <strong>KING COCOPRIME</strong>
                            </div>
                        </a>

                        <div class="project-body">
                            <div class="project-topline">
                                <span>01</span>
                                <a href="https://kingcocoprime.com" target="_blank" rel="noreferrer">Live website ↗</a>
                            </div>
                            <h3>KING COCOPRIME</h3>
                            <p>Corporate export website with custom CMS, multilingual content, technical SEO, product management, news publishing, and production deployment.</p>
                            <div class="tags">
                                <span>Laravel</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>JavaScript</span>
                                <span>SEO</span>
                            </div>
                        </div>
                    </article>

                    <article class="project-card reveal">
                        <a href="https://github.com/Muly-Adi/rumah-jahit-lina-sales-system" target="_blank" rel="noreferrer" class="project-media">
                            <img src="https://raw.githubusercontent.com/Muly-Adi/rumah-jahit-lina-sales-system/main/docs/screenshots/halaman_produk_rj_lina_minimalis.png" alt="Rumah Jahit Lina sales information system" loading="lazy">
                        </a>

                        <div class="project-body">
                            <div class="project-topline">
                                <span>02</span>
                                <a href="https://github.com/Muly-Adi/rumah-jahit-lina-sales-system" target="_blank" rel="noreferrer">GitHub ↗</a>
                            </div>
                            <h3>Rumah Jahit Lina</h3>
                            <p>Sales and inventory information system with role-based access, products, stock, checkout, transactions, payments, shipping, invoices, reports, ratings, and reviews.</p>
                            <div class="tags">
                                <span>Laravel</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="experience" class="section section-tight">
            <div class="shell">
                <div class="section-head reveal">
                    <div>
                        <p class="section-kicker">Experience</p>
                        <h2>Work that shaped how I build.</h2>
                    </div>
                </div>

                <div class="experience-list reveal">
                    <article class="experience-row">
                        <div class="experience-period">Jun 2026 - Present</div>
                        <div>
                            <h3>Full Stack Web Developer</h3>
                            <p class="experience-company">PT Infinity Komoditas Indo · Freelance</p>
                            <p>Develop and maintain the KING COCOPRIME website across frontend, backend, CMS, multilingual content, SEO, Git workflow, deployment, and ongoing improvements.</p>
                        </div>
                        <div class="experience-tech">Laravel · PHP · MySQL · JavaScript</div>
                    </article>

                    <article class="experience-row">
                        <div class="experience-period">Aug 2025 - Sep 2025</div>
                        <div>
                            <h3>IT Support Intern</h3>
                            <p class="experience-company">Nusantara Enterprise</p>
                            <p>Supported RJ45 network installation, laptop setup and troubleshooting, device servicing, and CCTV installation for operational needs.</p>
                        </div>
                        <div class="experience-tech">Networking · Troubleshooting · CCTV</div>
                    </article>
                </div>
            </div>
        </section>

        <section id="about" class="section section-tight">
            <div class="shell about-layout">
                <div class="reveal">
                    <p class="section-kicker">About</p>
                    <h2 class="about-title">Developer mindset with business context.</h2>
                </div>

                <div class="reveal about-copy">
                    <p>I am an Information Systems graduate who enjoys turning real requirements into working web applications. I work across application logic, database structure, responsive interfaces, CMS workflows, deployment, and maintenance.</p>

                    <div class="skills-row">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                        <span>HTML/CSS</span>
                        <span>Git/GitHub</span>
                        <span>Responsive Web</span>
                        <span>Technical SEO</span>
                    </div>

                    <div class="about-links">
                        <a href="https://github.com/Muly-Adi" target="_blank" rel="noreferrer">GitHub ↗</a>
                        <a href="https://www.linkedin.com/in/muliadi-tech" target="_blank" rel="noreferrer">LinkedIn ↗</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <div class="shell">
                <div class="contact-box reveal">
                    <p class="section-kicker">Contact</p>
                    <h2>Have a role or project in mind?</h2>
                    <p>I am open to full stack, Laravel, PHP, backend, web development, and relevant IT opportunities.</p>
                    <a href="mailto:muliadi.tech@gmail.com">muliadi.tech@gmail.com ↗</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="shell footer-inner">
            <p>© {{ date('Y') }} Muliadi</p>
            <p>Built with Laravel</p>
        </div>
    </footer>
</body>
</html>
