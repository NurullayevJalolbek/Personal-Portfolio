<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Nurullayev Jalolbek - Senior PHP Backend Engineer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    @include('portfolio._css')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-code"></i>
                <span>Jalolbek</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="#contact" class="btn btn-primary btn-sm">
                            <i class="fas fa-paper-plane me-1"></i> Hire Me
                        </a>
                    </li>
                    <li class="nav-item language-switcher">
                        <div class="language-btn" id="languageBtn">
                            <i class="fas fa-globe"></i>
                            <span>English</span>
                            <i class="fas fa-chevron-down ms-1"></i>
                        </div>
                        <div class="language-dropdown" id="languageDropdown">
                            <div class="language-option" data-lang="en">English</div>
                            <div class="language-option" data-lang="uz">O'zbekcha</div>
                            <div class="language-option" data-lang="ru">Русский</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">

        <div class="container text-center hero-content">
            {{-- <div class="mb-4 floating">
                <img src="{{ $home_section?->icon ? asset('assets/img/portfolio/' . $home_section->icon) : 'https://cdn-icons-png.flaticon.com/512/201/201623.png' }}"
                    alt="Rocket"
                    style="
              height: 120px;
              filter: drop-shadow(0 0 20px rgba(124, 58, 237, 0.5));
            " />
            </div> --}}
            <h1 class="hero-title animate__animated animate__fadeInDown">
                {{ $home_section?->fullname_title }}
            </h1>
            {{-- <h2 class="typing-text animate__animated animate__fadeIn animate__delay-1s"></h2> --}}
            <p class="hero-description animate__animated animate__fadeIn animate__delay-1s">
                {{ $home_section?->description }}
            </p>
            <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeIn animate__delay-2s">
                <a href="#projects" class="btn btn-primary btn-lg px-4">
                    <i class="fas fa-eye me-2"></i> View Projects
                </a>
                <a href="#contact" class="btn btn-outline-light btn-lg px-4">
                    <i class="fas fa-envelope me-2"></i> Get In Touch
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title center display-5 fw-bold mb-5">
                        About <span class="text-primary">Me</span>
                    </h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <img src="{{ $about_section?->image ? asset('assets/img/portfolio/' . $about_section->image) : 'https://cdn-icons-png.flaticon.com/512/201/201623.png' }}"
                        alt="Jalolbek Nurullayev" class="profile-image rounded-circle" />
                </div>
                <div class="col-lg-8 about-content">
                    <h3 class="mb-4">{{ $about_section?->title }}</h3>
                    <p class="lead">
                        {{ $about_section?->description }}
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <strong class="text-primary">Name:</strong> Jalolbek
                                    Nurullayev
                                </li>
                                <li class="mb-2">
                                    <strong class="text-primary">Email:</strong>
                                    nurullayevjalolbek28@gmail.com
                                </li>
                                <li class="mb-2">
                                    <strong class="text-primary">Experience:</strong> 1+ Years
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <strong class="text-primary">Phone:</strong> +998 937381028
                                    67
                                </li>
                                <li class="mb-2">
                                    <strong class="text-primary">Location:</strong> Tashkent,
                                    Uzbekistan
                                </li>
                                {{-- <li class="mb-2">
                                    <strong class="text-primary">Freelance:</strong> Available
                                </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="#contact" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-paper-plane me-2"></i> Contact Me
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-download me-2"></i> Download CV
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-5"
        style="
        background: linear-gradient(
          to bottom,
          var(--secondary) 0%,
          var(--dark) 100%
        );
      ">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title center display-5 fw-bold mb-5">
                        Work <span class="text-primary">Experience</span>
                    </h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="timeline">
                        <!-- Experience 1 -->
                        <div class="timeline-item">
                            <div class="timeline-dot">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="timeline-content animate__animated animate__fadeIn">
                                <div class="timeline-date">2021 - Present</div>
                                <h4 class="timeline-title">Senior Backend Developer</h4>
                                <div class="timeline-company">TechSolutions Inc.</div>
                                <p class="timeline-description">
                                    Lead backend development for enterprise SaaS platform.
                                    Architected microservices, optimized database performance,
                                    and implemented CI/CD pipelines. Mentored junior developers
                                    and conducted code reviews.
                                </p>
                            </div>
                        </div>

                        <!-- Experience 2 -->
                        <div class="timeline-item">
                            <div class="timeline-dot">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="timeline-content animate__animated animate__fadeIn">
                                <div class="timeline-date">2019 - 2021</div>
                                <h4 class="timeline-title">PHP Developer</h4>
                                <div class="timeline-company">Digital Agency XYZ</div>
                                <p class="timeline-description">
                                    Developed custom CMS solutions and e-commerce platforms for
                                    clients. Implemented RESTful APIs, payment integrations, and
                                    complex business logic. Collaborated with frontend
                                    developers to deliver full-stack solutions.
                                </p>
                            </div>
                        </div>

                        <!-- Experience 3 -->
                        <div class="timeline-item">
                            <div class="timeline-dot">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div class="timeline-content animate__animated animate__fadeIn">
                                <div class="timeline-date">2017 - 2019</div>
                                <h4 class="timeline-title">Junior Web Developer</h4>
                                <div class="timeline-company">StartUp Ventures</div>
                                <p class="timeline-description">
                                    Built and maintained web applications using PHP and Laravel.
                                    Assisted in database design and API development.
                                    Participated in agile development processes and learned best
                                    practices from senior team members.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title center display-5 fw-bold mb-5">
                        Featured <span class="text-primary">Projects</span>
                    </h2>
                    <p class="lead mb-5">
                        Here are some of my recent projects showcasing my backend
                        development expertise.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card animate__animated animate__fadeInUp" data-bs-toggle="modal"
                        data-bs-target="#projectModal1">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            class="card-img-top" alt="E-commerce Platform" />
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Platform</h5>
                            <p class="card-text">
                                High-performance online store with custom CMS, payment
                                integrations, and inventory management.
                            </p>
                            <div class="mb-3">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Redis</span>
                                <span class="tech-badge">Vue.js</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="https://github.com/NurullayevJalolbek/ecommerce-platform" target="_blank"
                                class="btn btn-outline-light btn-sm me-2">
                                <i class="fab fa-github me-1"></i> Code
                            </a>
                            <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fas fa-external-link-alt me-1"></i> Live
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card animate__animated animate__fadeInUp animate__delay-1s"
                        data-bs-toggle="modal" data-bs-target="#projectModal2">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            class="card-img-top" alt="CRM System" />
                        <div class="card-body">
                            <h5 class="card-title">Enterprise CRM</h5>
                            <p class="card-text">
                                Custom CRM solution with sales automation, analytics
                                dashboard, and team collaboration.
                            </p>
                            <div class="mb-3">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">Livewire</span>
                                <span class="tech-badge">PostgreSQL</span>
                                <span class="tech-badge">Alpine.js</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="https://github.com/NurullayevJalolbek/crm-system" target="_blank"
                                class="btn btn-outline-light btn-sm me-2">
                                <i class="fab fa-github me-1"></i> Code
                            </a>
                            <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fas fa-external-link-alt me-1"></i> Live
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="project-card animate__animated animate__fadeInUp animate__delay-2s"
                        data-bs-toggle="modal" data-bs-target="#projectModal3">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            class="card-img-top" alt="API Service" />
                        <div class="card-body">
                            <h5 class="card-title">RESTful API Service</h5>
                            <p class="card-text">
                                Scalable API backend for mobile applications with JWT
                                authentication and rate limiting.
                            </p>
                            <div class="mb-3">
                                <span class="tech-badge">Lumen</span>
                                <span class="tech-badge">MongoDB</span>
                                <span class="tech-badge">JWT</span>
                                <span class="tech-badge">Swagger</span>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="https://github.com/NurullayevJalolbek/api-service" target="_blank"
                                class="btn btn-outline-light btn-sm me-2">
                                <i class="fab fa-github me-1"></i> Code
                            </a>
                            <a href="#" target="_blank" class="btn btn-primary btn-sm">
                                <i class="fas fa-external-link-alt me-1"></i> Live
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-folder-open me-2"></i> View All Projects
                </a>
            </div>
        </div>
    </section>

    <!-- Project Modals -->
    <!-- Modal 1 -->
    <div class="modal fade project-modal" id="projectModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">E-commerce Platform</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        class="project-modal-img" alt="E-commerce Platform" />

                    <div class="project-modal-tech">
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">Redis</span>
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Stripe API</span>
                        <span class="tech-badge">Docker</span>
                    </div>

                    <p class="mb-4">
                        A full-featured e-commerce platform developed with Laravel backend
                        and Vue.js frontend. The system includes product management with
                        categories and filters, user authentication and authorization,
                        shopping cart and checkout process, payment gateway integration,
                        order tracking system, and admin dashboard for management.
                    </p>

                    <div class="project-modal-features">
                        <h5>Key Features</h5>
                        <ul>
                            <li>Product catalog with advanced filtering</li>
                            <li>User authentication with JWT</li>
                            <li>Shopping cart functionality</li>
                            <li>Secure payment processing</li>
                            <li>Order management system</li>
                            <li>Admin dashboard with analytics</li>
                            <li>Responsive design for all devices</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer project-modal-footer">
                    <a href="https://github.com/NurullayevJalolbek/ecommerce-platform" target="_blank"
                        class="btn btn-outline-light">
                        <i class="fab fa-github me-2"></i> View Code
                    </a>
                    <a href="#" target="_blank" class="btn btn-primary">
                        <i class="fas fa-external-link-alt me-2"></i> Live Demo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade project-modal" id="projectModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enterprise CRM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        class="project-modal-img" alt="CRM System" />

                    <div class="project-modal-tech">
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">Livewire</span>
                        <span class="tech-badge">PostgreSQL</span>
                        <span class="tech-badge">Alpine.js</span>
                        <span class="tech-badge">Tailwind CSS</span>
                        <span class="tech-badge">Docker</span>
                    </div>

                    <p class="mb-4">
                        Custom CRM solution developed for a medium-sized business to
                        manage their customer relationships, sales pipeline, and support
                        tickets. The system includes customer database with segmentation,
                        sales pipeline management, task and activity tracking, reporting
                        and analytics dashboard, and email integration.
                    </p>

                    <div class="project-modal-features">
                        <h5>Key Features</h5>
                        <ul>
                            <li>Customer relationship management</li>
                            <li>Sales pipeline visualization</li>
                            <li>Task and activity tracking</li>
                            <li>Reporting and analytics</li>
                            <li>Email integration</li>
                            <li>Team collaboration tools</li>
                            <li>Customizable dashboard</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer project-modal-footer">
                    <a href="https://github.com/NurullayevJalolbek/crm-system" target="_blank"
                        class="btn btn-outline-light">
                        <i class="fab fa-github me-2"></i> View Code
                    </a>
                    <a href="#" target="_blank" class="btn btn-primary">
                        <i class="fas fa-external-link-alt me-2"></i> Live Demo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade project-modal" id="projectModal3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">RESTful API Service</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        class="project-modal-img" alt="API Service" />

                    <div class="project-modal-tech">
                        <span class="tech-badge">Lumen</span>
                        <span class="tech-badge">MongoDB</span>
                        <span class="tech-badge">JWT</span>
                        <span class="tech-badge">Swagger</span>
                        <span class="tech-badge">Redis</span>
                        <span class="tech-badge">Docker</span>
                    </div>

                    <p class="mb-4">
                        RESTful API backend providing endpoints for third-party and mobile
                        apps. The API includes JWT-based authentication, CRUD endpoints
                        for resources, rate limiting and security, comprehensive
                        documentation (Swagger), and unit and integration tests.
                    </p>

                    <div class="project-modal-features">
                        <h5>Key Features</h5>
                        <ul>
                            <li>JWT authentication</li>
                            <li>Rate limiting</li>
                            <li>Comprehensive documentation</li>
                            <li>Unit and integration tests</li>
                            <li>Caching with Redis</li>
                            <li>Error handling</li>
                            <li>Versioning support</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer project-modal-footer">
                    <a href="https://github.com/NurullayevJalolbek/api-service" target="_blank"
                        class="btn btn-outline-light">
                        <i class="fab fa-github me-2"></i> View Code
                    </a>
                    <a href="#" target="_blank" class="btn btn-primary">
                        <i class="fas fa-external-link-alt me-2"></i> Live Demo
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <section id="skills" class="skills-section py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title center display-5 fw-bold mb-5">
                        Technical <span class="text-primary">Skills</span>
                    </h2>
                    <p class="lead mb-5">
                        My expertise spans across various technologies and methodologies
                        in backend development.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- PHP -->
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card animate__animated animate__fadeIn">
                        <h3 class="skill-title"><i class="fab fa-php"></i> PHP</h3>
                        <p class="skill-description">
                            Expert in modern PHP (8.0+) with deep understanding of OOP,
                            design patterns, and performance optimization.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 95%"></div>
                        </div>
                        <div class="skill-percentage">95%</div>
                    </div>
                </div>

                <!-- Laravel -->
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card animate__animated animate__fadeIn animate__delay-1s">
                        <h3 class="skill-title">
                            <i class="fab fa-laravel"></i> Laravel
                        </h3>
                        <p class="skill-description">
                            Extensive experience with Laravel ecosystem including Eloquent,
                            Blade, Queues, and package development.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 90%"></div>
                        </div>
                        <div class="skill-percentage">90%</div>
                    </div>
                </div>

                <!-- Database -->
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card animate__animated animate__fadeIn animate__delay-2s">
                        <h3 class="skill-title">
                            <i class="fas fa-database"></i> Databases
                        </h3>
                        <p class="skill-description">
                            MySQL optimization, indexing, query tuning. Experience with
                            PostgreSQL, MongoDB, and Redis.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 85%"></div>
                        </div>
                        <div class="skill-percentage">85%</div>
                    </div>
                </div>

                <!-- API -->
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card animate__animated animate__fadeIn animate__delay-3s">
                        <h3 class="skill-title">
                            <i class="fas fa-code"></i> API Development
                        </h3>
                        <p class="skill-description">
                            Building RESTful and GraphQL APIs with authentication, rate
                            limiting, and comprehensive documentation.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 88%"></div>
                        </div>
                        <div class="skill-percentage">88%</div>
                    </div>
                </div>

                <!-- Testing -->
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card animate__animated animate__fadeIn">
                        <h3 class="skill-title"><i class="fas fa-vial"></i> Testing</h3>
                        <p class="skill-description">
                            Unit testing, feature testing, and TDD with PHPUnit and Pest.
                            Integration with CI/CD pipelines.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 80%"></div>
                        </div>
                        <div class="skill-percentage">80%</div>
                    </div>
                </div>

                <!-- DevOps -->
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card animate__animated animate__fadeIn animate__delay-1s">
                        <h3 class="skill-title"><i class="fas fa-server"></i> DevOps</h3>
                        <p class="skill-description">
                            Docker, CI/CD setup, server configuration (Nginx, Apache), and
                            deployment automation.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 75%"></div>
                        </div>
                        <div class="skill-percentage">75%</div>
                    </div>
                </div>

                <!-- JavaScript -->
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card animate__animated animate__fadeIn animate__delay-2s">
                        <h3 class="skill-title"><i class="fab fa-js"></i> JavaScript</h3>
                        <p class="skill-description">
                            Modern JavaScript (ES6+), jQuery, and working with frontend
                            frameworks like Vue.js and React.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 70%"></div>
                        </div>
                        <div class="skill-percentage">70%</div>
                    </div>
                </div>

                <!-- Problem Solving -->
                <div class="col-md-6 col-lg-3">
                    <div class="skill-card animate__animated animate__fadeIn animate__delay-3s">
                        <h3 class="skill-title">
                            <i class="fas fa-lightbulb"></i> Problem Solving
                        </h3>
                        <p class="skill-description">
                            Analytical thinking, debugging complex issues, and designing
                            efficient solutions.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 90%"></div>
                        </div>
                        <div class="skill-percentage">90%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="section-title center display-5 fw-bold mb-5">
                        Get In <span class="text-primary">Touch</span>
                    </h2>
                    <p class="lead mb-5">
                        Have a project in mind or want to discuss potential opportunities?
                        Feel free to reach out!
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-form animate__animated animate__fadeInLeft">
                        <h4 class="mb-4">Send me a message</h4>
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" required />
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" required />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Subject" />
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-paper-plane me-2"></i> Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-info animate__animated animate__fadeInRight">
                        <h4 class="mb-4">Contact Information</h4>
                        <p class="mb-4">
                            I'm available for freelance work and full-time positions.
                            Contact me and I'll get back to you as soon as possible.
                        </p>

                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <div class="contact-info-title">Location</div>
                                <div class="contact-info-value">Tashkent, Uzbekistan</div>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <div class="contact-info-title">Email</div>
                                <div class="contact-info-value">jalolbek@example.com</div>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-info-text">
                                <div class="contact-info-title">Phone</div>
                                <div class="contact-info-value">+998 90 123 45 67</div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="mb-3">Connect with me</h5>
                            <div class="social-icons">
                                <a href="#" class="social-icon" title="Telegram">
                                    <i class="fab fa-telegram"></i>
                                </a>
                                <a href="#" class="social-icon" title="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="social-icon" title="GitHub">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="social-icon" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon" title="Stack Overflow">
                                    <i class="fab fa-stack-overflow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="footer-logo">
                        <i class="fas fa-code"></i>
                        <span>Jalolbek Nurullayev</span>
                    </div>
                    <p class="footer-text">
                        Senior PHP Backend Developer specializing in Laravel and API
                        development. Building robust, scalable web applications with clean
                        code and modern practices.
                    </p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-telegram fs-4"></i></a>
                        <a href="#"><i class="fab fa-linkedin fs-4"></i></a>
                        <a href="#"><i class="fab fa-github fs-4"></i></a>
                        <a href="#"><i class="fab fa-twitter fs-4"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#experience">Experience</a></li>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="footer-links">
                        <h5>Services</h5>
                        <ul>
                            <li><a href="#">Backend Development</a></li>
                            <li><a href="#">API Development</a></li>
                            <li><a href="#">Database Design</a></li>
                            <li><a href="#">System Architecture</a></li>
                            <li><a href="#">Code Review</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="footer-links">
                        <h5>Newsletter</h5>
                        <p class="footer-text">
                            Subscribe to my newsletter for the latest updates and articles.
                        </p>
                        <form class="mt-3">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" />
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="mb-0">
                    &copy; 2023 Jalolbek Nurullayev. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    @include('portfolio._script')
</body>

</html>
