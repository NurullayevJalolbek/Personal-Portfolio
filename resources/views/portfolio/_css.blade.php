 <style>
     :root {
         --primary: #7c3aed;
         --primary-dark: #5b21b6;
         --secondary: #1e293b;
         --dark: #0f172a;
         --darker: #020617;
         --light: #f8fafc;
         --accent: #10b981;
         --accent-dark: #059669;
         --text-primary: #e2e8f0;
         --text-secondary: #94a3b8;
         --card-bg: rgba(30, 41, 59, 0.5);
         --card-border: rgba(255, 255, 255, 0.1);
         --glass-bg: rgba(15, 23, 42, 0.8);
     }

     body {
         background-color: var(--darker);
         color: var(--text-primary);
         font-family: "Space Grotesk", sans-serif;
         overflow-x: hidden;
         line-height: 1.6;
     }

     h1,
     h2,
     h3,
     h4,
     h5,
     h6 {
         font-family: "JetBrains Mono", monospace;
         font-weight: 600;
         letter-spacing: -0.05em;
     }

     .code-style {
         font-family: "JetBrains Mono", monospace;
         background: rgba(124, 58, 237, 0.1);
         padding: 0.2em 0.4em;
         border-radius: 4px;
         color: var(--primary);
     }

     /* Navbar */
     .navbar {
         background-color: rgba(2, 6, 23, 0.95) !important;
         backdrop-filter: blur(16px);
         -webkit-backdrop-filter: blur(16px);
         padding: 1.5rem 0;
         border-bottom: 1px solid rgba(255, 255, 255, 0.05);
         transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
     }

     .navbar.scrolled {
         padding: 0.75rem 0;
         box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
     }

     .navbar-brand {
         font-weight: 700;
         color: var(--primary) !important;
         display: flex;
         align-items: center;
         gap: 0.5rem;
     }

     .navbar-brand i {
         font-size: 1.25rem;
     }

     .nav-link {
         position: relative;
         padding: 0.5rem 1rem;
         font-weight: 500;
         color: var(--text-primary) !important;
         transition: all 0.3s ease;
     }

     .nav-link::after {
         content: "";
         position: absolute;
         bottom: 0;
         left: 1rem;
         width: 0;
         height: 2px;
         background: var(--primary);
         transition: width 0.3s ease;
     }

     .nav-link:hover::after,
     .nav-link.active::after {
         width: calc(100% - 2rem);
     }

     .language-switcher {
         margin-left: 1rem;
         position: relative;
     }

     .language-btn {
         background: rgba(124, 58, 237, 0.2);
         border: 1px solid var(--card-border);
         color: var(--text-primary);
         border-radius: 8px;
         padding: 0.5rem 1rem;
         display: flex;
         align-items: center;
         gap: 0.5rem;
         transition: all 0.3s ease;
     }

     .language-btn:hover {
         background: rgba(124, 58, 237, 0.3);
         border-color: var(--primary);
     }

     .language-dropdown {
         position: absolute;
         right: 0;
         top: 100%;
         background: var(--dark);
         border: 1px solid var(--card-border);
         border-radius: 8px;
         padding: 0.5rem 0;
         min-width: 120px;
         display: none;
         z-index: 1000;
     }

     .language-dropdown.show {
         display: block;
     }

     .language-option {
         padding: 0.5rem 1rem;
         color: var(--text-primary);
         cursor: pointer;
         transition: all 0.2s ease;
     }

     .language-option:hover {
         background: rgba(124, 58, 237, 0.2);
         color: var(--primary);
     }

     /* Hero Section */
     .hero-section {
         min-height: 100vh;
         background: radial-gradient(circle at 70% 30%,
                 rgba(28, 25, 53, 0.8) 0%,
                 var(--darker) 70%),
             url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fjessup.edu%2Fblog%2Fengineering-technology%2Fdifferences-between-software-developers-and-software-engineers%2F&psig=AOvVaw3AWy7a1L5wEI-iaInO_FmK&ust=1753962119503000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCJjb9J3A5I4DFQAAAAAdAAAAABAL") no-repeat center center;
         background-size: cover;
         display: flex;
         align-items: center;
         position: relative;
         overflow: hidden;
     }

     .hero-section::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background:
             linear-gradient(rgba(2, 6, 23, 0.479), rgba(2, 6, 23, 0.95)),
             url({{ $home_section?->background_image ? asset('assets/img/portfolio/'. $home_section->background_image) : 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80' }});
         background-size: cover;
         background-position: center;
         z-index: 1;
     }

     .hero-section::after {
         content: "";
         position: absolute;
         top: -50%;
         left: -50%;
         width: 200%;
         height: 200%;
         background: radial-gradient(circle,
                 rgba(124, 58, 237, 0.1) 0%,
                 transparent 70%);
         animation: pulse 15s infinite alternate;
         z-index: 0;
     }

     @keyframes pulse {
         0% {
             transform: translate(0, 0);
         }

         50% {
             transform: translate(5%, 5%);
         }

         100% {
             transform: translate(-5%, -5%);
         }
     }

     .hero-content {
         position: relative;
         z-index: 2;
     }

     .hero-title {
         font-size: clamp(2.5rem, 8vw, 5rem);
         font-weight: 700;
         margin-bottom: 1.5rem;
         line-height: 1.1;
         background: linear-gradient(to right, var(--primary), var(--accent));
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         text-shadow: 0 0 20px rgba(124, 58, 237, 0.3);
     }

     .typing-text {
         font-size: clamp(1.5rem, 4vw, 2.5rem);
         font-weight: 500;
         color: var(--text-secondary);
         position: relative;
         display: inline-block;
     }

     .typing-text::after {
         content: "|";
         position: absolute;
         right: -10px;
         color: var(--primary);
         animation: blink 0.8s infinite;
     }

     @keyframes blink {

         0%,
         100% {
             opacity: 1;
         }

         50% {
             opacity: 0;
         }
     }

     .hero-description {
         font-size: clamp(1rem, 2vw, 1.25rem);
         max-width: 600px;
         margin: 0 auto 2rem;
         color: var(--text-secondary);
     }

     .btn-primary {
         background-color: var(--primary);
         border-color: var(--primary);
         padding: 0.75rem 2rem;
         font-weight: 600;
         letter-spacing: 0.05em;
         text-transform: uppercase;
         font-size: 0.875rem;
         transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
         position: relative;
         overflow: hidden;
         z-index: 1;
     }

     .btn-primary::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 0;
         height: 100%;
         background-color: var(--primary-dark);
         transition: width 0.3s ease;
         z-index: -1;
     }

     .btn-primary:hover::before {
         width: 100%;
     }

     .btn-outline-light {
         border-color: var(--text-secondary);
         color: var(--text-secondary);
         transition: all 0.3s ease;
     }

     .btn-outline-light:hover {
         border-color: var(--primary);
         background-color: transparent;
         color: var(--primary);
     }

     /* Floating elements */
     .floating {
         animation: floating 6s ease-in-out infinite;
     }

     @keyframes floating {
         0% {
             transform: translateY(0px);
         }

         50% {
             transform: translateY(-20px);
         }

         100% {
             transform: translateY(0px);
         }
     }

     /* About Section */
     .about-section {
         background: linear-gradient(to bottom,
                 var(--darker) 0%,
                 var(--dark) 100%);
         position: relative;
         overflow: hidden;
     }

     .about-section::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%237c3aed' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
         opacity: 0.3;
         z-index: 0;
     }

     .profile-image {
         width: 280px;
         height: 280px;
         border-radius: 20px;
         object-fit: cover;
         border: 4px solid var(--primary);
         box-shadow: 0 20px 40px rgba(124, 58, 237, 0.3);
         transition: all 0.3s ease;
     }

     .profile-image:hover {
         transform: scale(1.03);
         box-shadow: 0 30px 60px rgba(124, 58, 237, 0.4);
     }

     .about-content {
         position: relative;
         z-index: 1;
     }

     /* Projects Section */
     .projects-section {
         background: linear-gradient(to bottom,
                 var(--dark) 0%,
                 var(--secondary) 100%);
         position: relative;
         overflow: hidden;
     }

     .project-card {
         background: var(--card-bg);
         backdrop-filter: blur(10px);
         -webkit-backdrop-filter: blur(10px);
         border: 1px solid var(--card-border);
         border-radius: 16px;
         overflow: hidden;
         transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
         height: 100%;
         cursor: pointer;
     }

     .project-card:hover {
         transform: translateY(-10px);
         box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
         border-color: var(--primary);
     }

     .project-card img {
         height: 200px;
         object-fit: cover;
         border-bottom: 1px solid var(--card-border);
     }

     .project-card .card-body {
         padding: 1.5rem;
     }

     .project-card .card-title {
         color: var(--primary);
         font-weight: 600;
     }

     .project-card .card-text {
         color: var(--text-secondary);
         font-size: 0.9rem;
     }

     .project-card .card-footer {
         background: transparent;
         border-top: 1px solid var(--card-border);
         padding: 1rem 1.5rem;
     }

     .tech-badge {
         display: inline-block;
         background: rgba(124, 58, 237, 0.2);
         color: var(--primary);
         padding: 0.25rem 0.75rem;
         border-radius: 50px;
         font-size: 0.75rem;
         font-weight: 500;
         margin-right: 0.5rem;
         margin-bottom: 0.5rem;
     }

     /* Project Modal */
     .project-modal .modal-content {
         background: var(--dark);
         border: 1px solid var(--card-border);
         border-radius: 16px;
         color: var(--text-primary);
     }

     .project-modal .modal-header {
         border-bottom: 1px solid var(--card-border);
     }

     .project-modal .modal-title {
         color: var(--primary);
     }

     .project-modal .btn-close {
         filter: invert(1);
     }

     .project-modal-img {
         width: 100%;
         border-radius: 12px;
         margin-bottom: 1.5rem;
         border: 1px solid var(--card-border);
     }

     .project-modal-tech {
         display: flex;
         flex-wrap: wrap;
         gap: 0.5rem;
         margin-bottom: 1.5rem;
     }

     .project-modal-tech .tech-badge {
         font-size: 0.8rem;
         padding: 0.4rem 0.8rem;
     }

     .project-modal-features {
         margin-bottom: 1.5rem;
     }

     .project-modal-features h5 {
         color: var(--primary);
         margin-bottom: 1rem;
     }

     .project-modal-features ul {
         padding-left: 1.5rem;
     }

     .project-modal-features li {
         margin-bottom: 0.5rem;
     }

     .project-modal-footer {
         border-top: 1px solid var(--card-border);
         padding-top: 1.5rem;
     }

     /* Modal body scroll */
     .project-modal .modal-body {
         max-height: 60vh;
         overflow-y: auto;
         padding-right: 10px;
     }

     /* Skills Section */
     .skills-section {
         background: linear-gradient(to bottom,
                 var(--secondary) 0%,
                 var(--dark) 100%);
         position: relative;
         overflow: hidden;
     }

     .skills-section::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%237c3aed' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
         opacity: 0.3;
         z-index: 0;
     }

     .skill-card {
         background: var(--glass-bg);
         backdrop-filter: blur(10px);
         -webkit-backdrop-filter: blur(10px);
         border: 1px solid var(--card-border);
         border-radius: 12px;
         padding: 1.5rem;
         transition: all 0.3s ease;
         height: 100%;
     }

     .skill-card:hover {
         transform: translateY(-5px);
         box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
         border-color: var(--primary);
     }

     .skill-title {
         font-size: 1.25rem;
         margin-bottom: 1rem;
         color: var(--primary);
         display: flex;
         align-items: center;
     }

     .skill-title i {
         margin-right: 0.75rem;
         font-size: 1.5rem;
     }

     .skill-description {
         color: var(--text-secondary);
         margin-bottom: 1.5rem;
         font-size: 0.9rem;
     }

     .skill-level {
         height: 6px;
         background: rgba(255, 255, 255, 0.1);
         border-radius: 3px;
         overflow: hidden;
         margin-bottom: 0.5rem;
     }

     .skill-level-bar {
         height: 100%;
         background: linear-gradient(90deg, var(--primary), var(--accent));
         border-radius: 3px;
         transition: width 1s ease-in-out;
         position: relative;
         overflow: hidden;
     }

     .skill-level-bar::after {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background: linear-gradient(90deg,
                 rgba(255, 255, 255, 0) 0%,
                 rgba(255, 255, 255, 0.3) 50%,
                 rgba(255, 255, 255, 0) 100%);
         animation: shine 2s infinite;
     }

     @keyframes shine {
         0% {
             transform: translateX(-100%);
         }

         100% {
             transform: translateX(100%);
         }
     }

     .skill-percentage {
         text-align: right;
         font-size: 0.75rem;
         color: var(--text-secondary);
     }

     /* Experience Timeline */
     .timeline {
         position: relative;
         padding-left: 3rem;
     }

     .timeline::before {
         content: "";
         position: absolute;
         top: 0;
         left: 1.5rem;
         height: 100%;
         width: 2px;
         background: var(--primary);
     }

     .timeline-item {
         position: relative;
         padding-bottom: 2.5rem;
     }

     .timeline-item:last-child {
         padding-bottom: 0;
     }

     .timeline-dot {
         position: absolute;
         left: -3rem;
         top: 0;
         width: 2rem;
         height: 2rem;
         border-radius: 50%;
         background: var(--primary);
         display: flex;
         align-items: center;
         justify-content: center;
         color: white;
         font-size: 0.75rem;
     }

     .timeline-content {
         background: var(--card-bg);
         backdrop-filter: blur(10px);
         -webkit-backdrop-filter: blur(10px);
         border: 1px solid var(--card-border);
         border-radius: 12px;
         padding: 1.5rem;
     }

     .timeline-date {
         color: var(--text-secondary);
         font-size: 0.875rem;
         margin-bottom: 0.5rem;
     }

     .timeline-title {
         font-weight: 600;
         margin-bottom: 0.5rem;
         color: var(--primary);
     }

     .timeline-company {
         font-weight: 500;
         margin-bottom: 0.5rem;
         color: var(--text-primary);
     }

     .timeline-description {
         color: var(--text-secondary);
         font-size: 0.9rem;
     }

     /* Contact Section */
     .contact-section {
         background: linear-gradient(to bottom,
                 var(--dark) 0%,
                 var(--darker) 100%);
         position: relative;
         overflow: hidden;
     }

     .contact-section::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%237c3aed' fill-opacity='0.1'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
         opacity: 0.3;
         z-index: 0;
     }

     .contact-form {
         background: var(--glass-bg);
         backdrop-filter: blur(10px);
         -webkit-backdrop-filter: blur(10px);
         border: 1px solid var(--card-border);
         border-radius: 16px;
         padding: 2rem;
         transition: all 0.3s ease;
     }

     .contact-form:hover {
         border-color: var(--primary);
         box-shadow: 0 10px 30px rgba(124, 58, 237, 0.2);
     }

     .form-control {
         background: rgba(15, 23, 42, 0.7);
         border: 1px solid var(--card-border);
         color: var(--text-primary);
         padding: 0.75rem 1rem;
         transition: all 0.3s ease;
     }

     .form-control:focus {
         background: rgba(15, 23, 42, 0.9);
         border-color: var(--primary);
         color: var(--text-primary);
         box-shadow: 0 0 0 0.25rem rgba(124, 58, 237, 0.25);
     }

     .form-control::placeholder {
         color: var(--text-secondary);
     }

     .social-icons {
         display: flex;
         flex-wrap: wrap;
         gap: 1rem;
     }

     .social-icon {
         width: 50px;
         height: 50px;
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
         transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
         background: rgba(124, 58, 237, 0.1);
         border: 1px solid var(--card-border);
         color: var(--text-primary);
         font-size: 1.25rem;
     }

     .social-icon:hover {
         transform: translateY(-5px) scale(1.1);
         background: var(--primary);
         color: white;
         box-shadow: 0 10px 20px rgba(124, 58, 237, 0.3);
         border-color: transparent;
     }

     .contact-info {
         background: var(--glass-bg);
         backdrop-filter: blur(10px);
         -webkit-backdrop-filter: blur(10px);
         border: 1px solid var(--card-border);
         border-radius: 16px;
         padding: 2rem;
         height: 100%;
     }

     .contact-info-item {
         display: flex;
         align-items: center;
         margin-bottom: 1.5rem;
     }

     .contact-info-icon {
         width: 50px;
         height: 50px;
         border-radius: 12px;
         background: rgba(124, 58, 237, 0.1);
         display: flex;
         align-items: center;
         justify-content: center;
         margin-right: 1rem;
         color: var(--primary);
         font-size: 1.25rem;
     }

     .contact-info-text {
         flex: 1;
     }

     .contact-info-title {
         font-weight: 600;
         margin-bottom: 0.25rem;
         color: var(--primary);
     }

     .contact-info-value {
         color: var(--text-secondary);
         font-size: 0.9rem;
     }

     /* Footer */
     .footer {
         background: var(--darker);
         border-top: 1px solid rgba(255, 255, 255, 0.05);
         padding: 2rem 0;
     }

     .footer-logo {
         font-weight: 700;
         color: var(--primary);
         display: flex;
         align-items: center;
         gap: 0.5rem;
         margin-bottom: 1rem;
     }

     .footer-logo i {
         font-size: 1.25rem;
     }

     .footer-text {
         color: var(--text-secondary);
         font-size: 0.9rem;
         margin-bottom: 1.5rem;
     }

     .footer-social {
         display: flex;
         gap: 1rem;
     }

     .footer-social a {
         color: var(--text-secondary);
         transition: all 0.3s ease;
     }

     .footer-social a:hover {
         color: var(--primary);
         transform: translateY(-3px);
     }

     .footer-links h5 {
         color: var(--primary);
         margin-bottom: 1rem;
         font-weight: 600;
     }

     .footer-links ul {
         list-style: none;
         padding: 0;
     }

     .footer-links li {
         margin-bottom: 0.5rem;
     }

     .footer-links a {
         color: var(--text-secondary);
         text-decoration: none;
         transition: all 0.3s ease;
     }

     .footer-links a:hover {
         color: var(--primary);
         padding-left: 5px;
     }

     .footer-bottom {
         border-top: 1px solid rgba(255, 255, 255, 0.05);
         padding-top: 1.5rem;
         margin-top: 2rem;
         text-align: center;
         color: var(--text-secondary);
         font-size: 0.8rem;
     }

     /* Back to top button */
     .back-to-top {
         position: fixed;
         bottom: 2rem;
         right: 2rem;
         width: 50px;
         height: 50px;
         border-radius: 12px;
         background: var(--primary);
         color: white;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 1.25rem;
         opacity: 0;
         visibility: hidden;
         transition: all 0.3s ease;
         z-index: 999;
     }

     .back-to-top.active {
         opacity: 1;
         visibility: visible;
     }

     .back-to-top:hover {
         background: var(--primary-dark);
         transform: translateY(-5px);
     }

     /* Section titles */
     .section-title {
         position: relative;
         display: inline-block;
         margin-bottom: 3rem;
     }

     .section-title::after {
         content: "";
         position: absolute;
         bottom: -10px;
         left: 0;
         width: 50px;
         height: 3px;
         background: var(--primary);
         border-radius: 3px;
     }

     .section-title.center::after {
         left: 50%;
         transform: translateX(-50%);
     }

     /* Responsive adjustments */
     @media (max-width: 992px) {
         .hero-title {
             font-size: 3.5rem;
         }

         .typing-text {
             font-size: 2rem;
         }

         .navbar-collapse {
             background: var(--darker);
             padding: 1rem;
             border-radius: 8px;
             margin-top: 10px;
             border: 1px solid var(--card-border);
         }

         .language-switcher {
             margin-left: 0;
             margin-top: 1rem;
             width: 100%;
         }

         .language-dropdown {
             width: 100%;
         }

         .language-btn {
             width: 100%;
             justify-content: center;
         }
     }

     @media (max-width: 768px) {
         .hero-title {
             font-size: 2.75rem;
         }

         .typing-text {
             font-size: 1.75rem;
         }

         .profile-image {
             width: 220px;
             height: 220px;
             margin-bottom: 2rem;
         }

         .social-icon {
             width: 45px;
             height: 45px;
             font-size: 1.1rem;
         }

         /* Modal adjustments for mobile */
         .project-modal .modal-dialog {
             margin: 10px;
         }

         .project-modal .modal-body {
             max-height: 50vh;
         }
     }

     @media (max-width: 576px) {
         .hero-title {
             font-size: 2rem;
         }

         .typing-text {
             font-size: 1.25rem;
         }

         .section-title {
             font-size: 1.75rem;
         }

         .profile-image {
             width: 180px;
             height: 180px;
         }

         .social-icons {
             gap: 0.75rem;
         }

         .social-icon {
             width: 40px;
             height: 40px;
             font-size: 1rem;
         }

         .contact-info-icon {
             width: 40px;
             height: 40px;
             font-size: 1rem;
         }
     }
 </style>
