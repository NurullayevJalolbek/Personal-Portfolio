<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Typing effect
        const phrases = [
          "PHP Backend Developer",
          "Laravel Expert",
          "API Specialist",
          "Database Architect",
          "Problem Solver",
        ];
        let currentPhrase = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typingElement = document.querySelector(".typing-text");
        const cursorElement = document.createElement("span");
        cursorElement.className = "typing-cursor";
        cursorElement.textContent = "|";
        typingElement.appendChild(cursorElement);

        function type() {
          const currentText = phrases[currentPhrase];

          if (isDeleting) {
            charIndex--;
            typingElement.textContent = currentText.substring(0, charIndex);
          } else {
            charIndex++;
            typingElement.textContent = currentText.substring(0, charIndex);
          }

          typingElement.appendChild(cursorElement);

          if (!isDeleting && charIndex === currentText.length) {
            isDeleting = true;
            setTimeout(type, 1500);
          } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            currentPhrase = (currentPhrase + 1) % phrases.length;
            setTimeout(type, 500);
          } else {
            const typingSpeed = isDeleting ? 50 : 100;
            setTimeout(type, typingSpeed);
          }
        }

        setTimeout(type, 1000);

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
          anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
              window.scrollTo({
                top: target.offsetTop - 80,
                behavior: "smooth",
              });
            }
          });
        });

        // Navbar background change on scroll
        const navbar = document.querySelector(".navbar");
        window.addEventListener("scroll", function () {
          if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
          } else {
            navbar.classList.remove("scrolled");
          }
        });

        // Back to top button
        const backToTopButton = document.querySelector(".back-to-top");
        window.addEventListener("scroll", function () {
          if (window.scrollY > 300) {
            backToTopButton.classList.add("active");
          } else {
            backToTopButton.classList.remove("active");
          }
        });

        // Animate elements on scroll
        const animateOnScroll = function () {
          const elements = document.querySelectorAll(".animate__animated");

          elements.forEach((element) => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (elementPosition < windowHeight - 100) {
              const animationClass = element.classList[1];
              element.classList.add(animationClass);
            }
          });
        };

        window.addEventListener("scroll", animateOnScroll);
        animateOnScroll(); // Run once on page load

        // Animate skill bars on scroll
        const skillBars = document.querySelectorAll(".skill-level-bar");
        const skillsSection = document.querySelector(".skills-section");

        function animateSkillBars() {
          skillBars.forEach((bar) => {
            const width = bar.style.width;
            bar.style.width = "0";
            setTimeout(() => {
              bar.style.width = width;
            }, 100);
          });
        }

        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                animateSkillBars();
                observer.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.2 }
        );

        if (skillsSection) {
          observer.observe(skillsSection);
        }

        // Add active class to current section in navbar
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");

        window.addEventListener("scroll", function () {
          let current = "";

          sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (pageYOffset >= sectionTop - 100) {
              current = section.getAttribute("id");
            }
          });

          navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href") === `#${current}`) {
              link.classList.add("active");
            }
          });
        });

        // Language switcher
        const languageBtn = document.getElementById("languageBtn");
        const languageDropdown = document.getElementById("languageDropdown");

        if (languageBtn && languageDropdown) {
          languageBtn.addEventListener("click", function (e) {
            e.stopPropagation();
            languageDropdown.classList.toggle("show");
          });

          document.querySelectorAll(".language-option").forEach((option) => {
            option.addEventListener("click", function () {
              const lang = this.getAttribute("data-lang");
              document.querySelector(".language-btn span").textContent =
                this.textContent;
              languageDropdown.classList.remove("show");
              // Here you would add language switching logic
              console.log("Switching to language:", lang);
            });
          });

          // Close dropdown when clicking outside
          document.addEventListener("click", function () {
            languageDropdown.classList.remove("show");
          });
        }

        // Initialize all tooltips
        var tooltipTriggerList = [].slice.call(
          document.querySelectorAll('[data-bs-toggle="tooltip"]')
        );
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl);
        });
      });
    </script>