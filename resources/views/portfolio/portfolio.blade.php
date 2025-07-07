<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurullayev Jalolbek - PHP Backend Developer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    @include('portfolio._css')


</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <body data-bs-spy="scroll" data-bs-target=".navbar">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">Nurullayev Jalolbek</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-globe"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">O'zbekcha</a></li>
                                <li><a class="dropdown-item" href="#">Русский</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Home Section -->
        <section id="home" class="hero-section">
            <div class="container text-center hero-content">
                <div class="mb-4 floating">
                    <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" alt="Rocket"
                        style="height: 120px; opacity: 0.8;">

                </div>
                <h1 class="hero-title">Nurullayev Jalolbek</h1>
                <h2 class="typing-text">PHP Backend Developer</h2>
                <p class="hero-description">Building robust, scalable web applications with Laravel and modern PHP
                    technologies. Focused on clean code, performance, and security.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#projects" class="btn btn-primary btn-lg px-4">View My Work</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg px-4">Contact Me</a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-5" style="background-color: #111;">
            <div class="container py-5">
                <h2 class="text-center mb-5 display-4 fw-bold">About <span class="text-primary">Me</span></h2>
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center mb-4 mb-lg-0">
                        <img src="https://via.placeholder.com/300x300" alt="Jalolbek Nurullayev"
                            class="img-fluid rounded-circle border border-4 border-primary"
                            style="width: 250px; height: 250px; object-fit: cover;">
                    </div>
                    <div class="col-lg-8">
                        <p class="lead">I'm a passionate PHP backend developer with 5 years of experience in building
                            robust web applications. Specialized in Laravel framework and API development.</p>
                        <p>My journey in web development started when I was in university, and since then I've worked on
                            various projects from small business websites to large enterprise applications.</p>
                        <div class="mt-4">
                            <a href="#skills" class="btn btn-primary btn-lg me-3">My Skills</a>
                            <a href="#contact" class="btn btn-outline-light btn-lg">Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-5 bg-black">
            <div class="container py-5">
                <h2 class="text-center mb-5 display-4 fw-bold">My <span class="text-primary">Projects</span></h2>
                <div class="row g-4">
                    <!-- Project 1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 bg-dark border-secondary project-card" data-bs-toggle="modal"
                            data-bs-target="#projectModal1">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/illustrations/rocket-white.png"
                                class="card-img-top" alt="E-commerce Platform">
                            <div class="card-body">
                                <h5 class="card-title text-primary">E-commerce Platform</h5>
                                <p class="card-text small text-white-50">Full-featured online store built with Laravel
                                    and Vue.js</p>
                            </div>
                            <div class="card-footer bg-transparent border-top border-secondary">
                                <a href="https://github.com/NurullayevJalolbek/ecommerce-platform" target="_blank"
                                    class="btn btn-outline-light btn-sm w-100"><i
                                        class="fab fa-github me-2"></i>GitHub</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 bg-dark border-secondary project-card" data-bs-toggle="modal"
                            data-bs-target="#projectModal2">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/illustrations/team-white.png"
                                class="card-img-top" alt="CRM System">
                            <div class="card-body">
                                <h5 class="card-title text-primary">CRM System</h5>
                                <p class="card-text small text-white-50">Custom CRM solution for business management
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-top border-secondary">
                                <a href="https://github.com/NurullayevJalolbek/crm-system" target="_blank"
                                    class="btn btn-outline-light btn-sm w-100"><i
                                        class="fab fa-github me-2"></i>GitHub</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 bg-dark border-secondary project-card" data-bs-toggle="modal"
                            data-bs-target="#projectModal3">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/illustrations/document-white.png"
                                class="card-img-top" alt="API Service">
                            <div class="card-body">
                                <h5 class="card-title text-primary">API Service</h5>
                                <p class="card-text small text-white-50">RESTful API for mobile applications</p>
                            </div>
                            <div class="card-footer bg-transparent border-top border-secondary">
                                <a href="https://github.com/NurullayevJalolbek/api-service" target="_blank"
                                    class="btn btn-outline-light btn-sm w-100"><i
                                        class="fab fa-github me-2"></i>GitHub</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 bg-dark border-secondary project-card" data-bs-toggle="modal"
                            data-bs-target="#projectModal4">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/illustrations/credit-card-white.png"
                                class="card-img-top" alt="Payment Gateway">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Payment Gateway</h5>
                                <p class="card-text small text-white-50">Custom payment integration solution</p>
                            </div>
                            <div class="card-footer bg-transparent border-top border-secondary">
                                <a href="https://github.com/NurullayevJalolbek/payment-gateway" target="_blank"
                                    class="btn btn-outline-light btn-sm w-100"><i
                                        class="fab fa-github me-2"></i>GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Modals -->
            <!-- Modal 1 -->
            <div class="modal fade" id="projectModal1" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header border-secondary">
                            <h5 class="modal-title">E-commerce Platform</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/illustrations/rocket-white.png"
                                class="project-modal-img mb-4" alt="E-commerce Platform">
                            <p class="mb-3">This is a full-featured e-commerce platform developed with Laravel
                                backend and Vue.js frontend. The system includes:</p>
                            <ul>
                                <li>Product management with categories and filters</li>
                                <li>User authentication and authorization</li>
                                <li>Shopping cart and checkout process</li>
                                <li>Payment gateway integration</li>
                                <li>Order tracking system</li>
                                <li>Admin dashboard for management</li>
                            </ul>
                            <p><strong>Technologies used:</strong> Laravel, Vue.js, MySQL, Redis, Stripe API</p>
                        </div>
                        <div class="modal-footer border-secondary">
                            <a href="https://github.com/NurullayevJalolbek/ecommerce-platform" target="_blank"
                                class="btn btn-outline-light"><i class="fab fa-github me-2"></i>GitHub</a>
                            <a href="#" target="_blank" class="btn btn-primary"><i
                                    class="fas fa-external-link-alt me-2"></i>Live Demo</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 2 -->
            <div class="modal fade" id="projectModal2" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header border-secondary">
                            <h5 class="modal-title">CRM System</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/illustrations/team-white.png"
                                class="project-modal-img mb-4" alt="CRM System">
                            <p class="mb-3">Custom CRM solution developed for a medium-sized business to manage their
                                customer relationships, sales pipeline, and support tickets.</p>
                            <ul>
                                <li>Customer database with segmentation</li>
                                <li>Sales pipeline management</li>
                                <li>Task and activity tracking</li>
                                <li>Reporting and analytics dashboard</li>
                                <li>Email integration</li>
                                <li>Mobile responsive interface</li>
                            </ul>
                            <p><strong>Technologies used:</strong> Laravel, Livewire, MySQL, Bootstrap 5</p>
                        </div>
                        <div class="modal-footer border-secondary">
                            <a href="https://github.com/NurullayevJalolbek/crm-system" target="_blank"
                                class="btn btn-outline-light"><i class="fab fa-github me-2"></i>GitHub</a>
                            <a href="#" target="_blank" class="btn btn-primary"><i
                                    class="fas fa-external-link-alt me-2"></i>Live Demo</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 3 -->
            <div class="modal fade" id="projectModal3" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header border-secondary">
                            <h5 class="modal-title">API Service</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/illustrations/document-white.png"
                                class="project-modal-img mb-4" alt="API Service">
                            <p class="mb-3">RESTful API backend providing endpoints for third-party and mobile apps.
                            </p>
                            <ul>
                                <li>JWT-based authentication</li>
                                <li>CRUD endpoints for resources</li>
                                <li>Rate limiting and security</li>
                                <li>Comprehensive documentation (Swagger)</li>
                                <li>Unit and integration tests</li>
                            </ul>
                            <p><strong>Technologies used:</strong> Laravel, MySQL, Redis, Swagger</p>
                        </div>
                        <div class="modal-footer border-secondary">
                            <a href="https://github.com/NurullayevJalolbek/api-service" target="_blank"
                                class="btn btn-outline-light"><i class="fab fa-github me-2"></i>GitHub</a>
                            <a href="#" target="_blank" class="btn btn-primary"><i
                                    class="fas fa-external-link-alt me-2"></i>Live Demo</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 4 -->
            <div class="modal fade" id="projectModal4" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header border-secondary">
                            <h5 class="modal-title">Payment Gateway</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/illustrations/credit-card-white.png"
                                class="project-modal-img mb-4" alt="Payment Gateway">
                            <p class="mb-3">Custom payment integration system supporting multiple banks and security
                                protocols.</p>
                            <ul>
                                <li>PCI DSS compliant integration</li>
                                <li>Supports multiple payment providers</li>
                                <li>Transaction logs and reporting</li>
                                <li>Webhook support</li>
                                <li>Admin dashboard for monitoring</li>
                            </ul>
                            <p><strong>Technologies used:</strong> Laravel, MySQL, Stripe/Payme APIs</p>
                        </div>
                        <div class="modal-footer border-secondary">
                            <a href="https://github.com/NurullayevJalolbek/payment-gateway" target="_blank"
                                class="btn btn-outline-light"><i class="fab fa-github me-2"></i>GitHub</a>
                            <a href="#" target="_blank" class="btn btn-primary"><i
                                    class="fas fa-external-link-alt me-2"></i>Live Demo</a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resume Section -->
        <section id="resume" class="py-5" style="background-color: #111;">
            <div class="container py-5">
                <h2 class="text-center mb-5 display-4 fw-bold">My <span class="text-primary">Resume</span></h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <p class="lead mb-5">Download my full resume to learn more about my professional experience and
                            education.</p>
                        <a href="#" class="btn btn-primary btn-lg px-5">
                            <i class="fas fa-download me-2"></i> Download Resume
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="skills-section">
            <div class="skills-bg"></div>
            <div class="skills-overlay"></div>
            <div class="container skills-content">
                <h2 class="text-center mb-5 display-4 fw-bold">My <span class="text-primary">Skills</span></h2>
                <p class="text-center mb-5 lead" style="max-width: 700px; margin: 0 auto;">
                    I've honed my skills over 5+ years of professional development. Here's a breakdown of my core
                    competencies.
                </p>

                <div class="skills-container">
                    <!-- PHP Skill -->
                    <div class="skill-card">
                        <h3 class="skill-title"><i class="fab fa-php"></i> PHP Development</h3>
                        <p class="skill-description">
                            Extensive experience with modern PHP (8.0+), object-oriented programming, design patterns,
                            and performance optimization.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 95%"></div>
                        </div>
                        <div class="skill-percentage">95%</div>
                    </div>

                    <!-- Laravel Skill -->
                    <div class="skill-card">
                        <h3 class="skill-title"><i class="fab fa-laravel"></i> Laravel Framework</h3>
                        <p class="skill-description">
                            Deep expertise in Laravel ecosystem including Eloquent, Blade, Artisan, Queues, and package
                            development.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 90%"></div>
                        </div>
                        <div class="skill-percentage">90%</div>
                    </div>

                    <!-- API Development -->
                    <div class="skill-card">
                        <h3 class="skill-title"><i class="fas fa-code"></i> API Development</h3>
                        <p class="skill-description">
                            Building RESTful and GraphQL APIs with authentication, rate limiting, documentation, and
                            versioning.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 88%"></div>
                        </div>
                        <div class="skill-percentage">88%</div>
                    </div>

                    <!-- Database -->
                    <div class="skill-card">
                        <h3 class="skill-title"><i class="fas fa-database"></i> Database Design</h3>
                        <p class="skill-description">
                            MySQL optimization, indexing, query tuning, and working with large datasets. Experience with
                            NoSQL alternatives.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 85%"></div>
                        </div>
                        <div class="skill-percentage">85%</div>
                    </div>

                    <!-- Testing -->
                    <div class="skill-card">
                        <h3 class="skill-title"><i class="fas fa-vial"></i> Testing</h3>
                        <p class="skill-description">
                            Unit testing, feature testing, and TDD with PHPUnit and Pest. Integration with CI/CD
                            pipelines.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 80%"></div>
                        </div>
                        <div class="skill-percentage">80%</div>
                    </div>

                    <!-- DevOps -->
                    <div class="skill-card">
                        <h3 class="skill-title"><i class="fas fa-server"></i> DevOps</h3>
                        <p class="skill-description">
                            Docker, CI/CD setup, server configuration (Nginx, Apache), and deployment automation.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 75%"></div>
                        </div>
                        <div class="skill-percentage">75%</div>
                    </div>

                    <!-- JavaScript -->
                    <div class="skill-card">
                        <h3 class="skill-title"><i class="fab fa-js"></i> JavaScript</h3>
                        <p class="skill-description">
                            Modern JavaScript (ES6+), jQuery, and working with frontend frameworks like Vue.js and
                            React.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 70%"></div>
                        </div>
                        <div class="skill-percentage">70%</div>
                    </div>

                    <!-- Problem Solving -->
                    <div class="skill-card">
                        <h3 class="skill-title"><i class="fas fa-lightbulb"></i> Problem Solving</h3>
                        <p class="skill-description">
                            Analytical thinking, debugging complex issues, and designing efficient solutions.
                        </p>
                        <div class="skill-level">
                            <div class="skill-level-bar" style="width: 90%"></div>
                        </div>
                        <div class="skill-percentage">90%</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="display-4 fw-bold mb-4">Contact <span class="text-primary">Me</span></h2>
                        <form class="bg-black p-4 rounded">
                            <div class="mb-3">
                                <input type="text" class="form-control bg-dark text-white border-secondary"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control bg-dark text-white border-secondary"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control bg-dark text-white border-secondary" rows="5" placeholder="Your Message"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                        </form>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="bg-black p-4 rounded h-100">
                            <h4 class="mb-4">Connect with me</h4>
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
                                <a href="#" class="social-icon" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-icon" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon" title="Stack Overflow">
                                    <i class="fab fa-stack-overflow"></i>
                                </a>
                                <a href="#" class="social-icon" title="Medium">
                                    <i class="fab fa-medium-m"></i>
                                </a>
                                <a href="#" class="social-icon" title="YouTube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#" class="social-icon" title="WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                            <hr class="my-4 border-secondary">
                            <h4 class="mb-3">Contact Info</h4>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-envelope me-2 text-primary"></i>
                                    jalolbek@example.com</li>
                                <li class="mb-2"><i class="fas fa-phone me-2 text-primary"></i> +998 90 123 45 67
                                </li>
                                <li><i class="fas fa-map-marker-alt me-2 text-primary"></i> Tashkent, Uzbekistan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-black py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="mb-0">© 2023 Nurullayev Jalolbek. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" class="text-primary me-3"><i class="fab fa-telegram fs-4"></i></a>
                        <a href="#" class="text-primary me-3"><i class="fab fa-linkedin fs-4"></i></a>
                        <a href="#" class="text-primary me-3"><i class="fab fa-github fs-4"></i></a>
                        <a href="#" class="text-primary"><i class="fab fa-instagram fs-4"></i></a>
                    </div>
                </div>
            </div>
        </footer>

       @include('portfolio._script')
    </body>

</html>
