 <!-- Bootstrap 5 JS Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Typing effect
            document.addEventListener('DOMContentLoaded', function() {
                const phrases = ["PHP Backend Developer", "Laravel Expert", "API Specialist", "Problem Solver"];
                let currentPhrase = 0;
                const typingElement = document.querySelector('.typing-text');

                function typeNextPhrase() {
                    const text = phrases[currentPhrase];
                    typingElement.textContent = text;
                    typingElement.style.animation = 'none';
                    void typingElement.offsetWidth; // Trigger reflow
                    typingElement.style.animation = '';

                    currentPhrase = (currentPhrase + 1) % phrases.length;
                    setTimeout(typeNextPhrase, 3000);
                }

                setTimeout(typeNextPhrase, 1000);

                // Smooth scrolling for anchor links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        document.querySelector(this.getAttribute('href')).scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                });

                // Navbar background change on scroll
                const navbar = document.querySelector('.navbar');
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                });

                // Animate skill bars on scroll
                const skillBars = document.querySelectorAll('.skill-level-bar');
                const skillsSection = document.querySelector('.skills-section');

                function animateSkillBars() {
                    skillBars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 100);
                    });
                }

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            animateSkillBars();
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.2
                });

                observer.observe(skillsSection);
            });
        </script>