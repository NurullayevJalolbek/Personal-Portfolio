document.addEventListener("DOMContentLoaded", function () {
  // Initialize AOS library
  AOS.init();

  function menuOnScroll(mySection, myMenu, myClass) {
    window.addEventListener("scroll", function () {
      var elScroll = window.scrollY || window.pageYOffset;
      document.querySelectorAll(mySection).forEach(function (element, i) {
        if (element.offsetTop <= elScroll) {
          document.querySelectorAll(myMenu).forEach(function (menuElement) {
            menuElement.classList.remove(myClass);
          });
          document.querySelectorAll(myMenu)[i].classList.add(myClass);
        }
      });
    });
  }

  // Settings for activating dropdowns
  class Dropdown {
    constructor(obj) {
      this.opener = document.querySelector(obj.opener);
      this.dropdown = document.querySelector(obj.dropdown);

      if (this.opener) {
        this.opener.addEventListener("click", (e) => {
          e.stopPropagation();
          this.dropdown.classList.toggle("active");
        });
        document.addEventListener("click", (e) => {
          if (!this.dropdown.contains(e.target) && e.target !== this.opener) {
            this.dropdown.classList.remove("active");
          }
        });
      }
    }
  }

  const headerDropdown = new Dropdown({
    opener: "#main-header-lang",
    dropdown: "#main-header-dropdown",
  });

  const resumeDropdown = new Dropdown({
    opener: "#student-resume-btn",
    dropdown: "#student-resume-dropdown",
  });

  // Settings for activating mobile menu
  class Modal {
    constructor(obj) {
      this.menu = document.querySelector(obj.menu);
      this.content = document.querySelector(obj.content);
      this.opener = document.querySelector(obj.opener);
      this.openers = [...document.querySelectorAll(obj.openers)];
      this.closer = document.querySelector(obj.closer);

      if (this.menu) {
        document.addEventListener("click", (event) => {
          if (
            this.menu.contains(event.target) &&
            !this.content.contains(event.target)
          ) {
            this.menu.classList.remove("active");
          }
        });
      }

      if (this.opener) {
        this.opener.addEventListener("click", () => {
          this.menu.classList.add("active");
        });
      }
      if (this.closer) {
        this.closer.addEventListener("click", () => {
          this.menu.classList.remove("active");
        });
      }

      // Additional settings for gallery modal
      if (this.openers) {
        this.openers.forEach((opener) => {
          opener.addEventListener("click", () => {
            const openerSrc = opener.getAttribute("src");
            const imgEl = document.createElement("img");
            imgEl.className = "wrapper-img";
            imgEl.setAttribute("src", openerSrc);
            this.content.innerHTML = "";
            this.content.append(imgEl);
            this.menu.classList.add("active");
          });
        });
      }
    }
  }

  const mobileMenu = new Modal({
    menu: "#mobile-menu",
    content: "#mobile-menu-wrapper",
    opener: "#main-header-menu",
    closer: "#mobile-menu-svg",
  });

  const galleryModal = new Modal({
    menu: "#gallery-modal",
    content: "#gallery-modal-wrapper",
    openers: "#gallery img[data-image-id]",
  });

  const studentModal = new Modal({
    menu: "#job-offer",
    content: "#job-offer-wrapper",
    opener: "#student-resume-offer",
    closer: "#job-offer-close",
  });

  const resumeModal = new Modal({
    menu: "#resume-share",
    content: "#resume-share-wrapper",
    opener: "#student-resume-share",
    closer: "#resume-share-close",
  });

  // Settings for activating search bar
  class SearchBar {
    constructor(obj) {
      this.toggler = document.querySelector(obj.toggler);
      this.closer = document.querySelector(obj.closer);
      this.input = document.querySelector(obj.input);
      this.hideEl = document.querySelector(obj.hideEl);

      if (this.toggler) {
        this.toggler.addEventListener("click", () => {
          this.hideEl.classList.toggle("none");
          this.input.classList.toggle("active");
          this.closer.classList.toggle("active");
        });
      }

      if (this.closer) {
        this.closer.addEventListener("click", () => {
          this.input.value = "";
        });
      }
    }
  }

  const headerSearchBar = new SearchBar({
    toggler: "#main-header-img",
    closer: "#main-header-svg",
    input: "#main-header-search",
    hideEl: "#main-header-navbar",
  });

  // Settings for animating items infinitely
  class AnimationOrder {
    constructor(obj) {
      this.items = [...document.querySelectorAll(obj.items)];
      this.index = 0;

      if (this.items.length) {
        this.showNextItem();
      }
    }

    showNextItem() {
      this.items[this.index].style.animationName = "zoomUp";

      setTimeout(() => {
        this.items[this.index].style.animationName = "";
        if (this.index === this.items.length - 1) {
          this.index = 0;
        } else {
          this.index++;
        }
        this.showNextItem();
      }, 4000);
    }
  }

  const cardsAnimationOrder = new AnimationOrder({
    items: "#main-hero-cards .item",
  });

  const cardsSecondAnimationOrder = new AnimationOrder({
    items: "#main-hero-cards-second .item",
  });

  // Settings for swipers
  const projectsCards = new Swiper("#swiper-projects-cards", {
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: "#swiper-projects-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + "</span>";
      },
    },
    loop: true,
    breakpoints: {
      1365: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 1,
      },
    },
  });

  const studentsMain = new Swiper("#swiper-students-main", {
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: "#swiper-students-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + "</span>";
      },
    },
    loop: true,
    breakpoints: {
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 1,
      },
    },
  });

  const resourcesCards = new Swiper("#swiper-resources-cards", {
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: "#swiper-resources-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + "</span>";
      },
    },
    loop: true,
    breakpoints: {
      1365: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 1,
      },
    },
  });

  const eventsCards = new Swiper("#swiper-events-cards", {
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: "#swiper-events-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + "</span>";
      },
    },
    loop: true,
    breakpoints: {
      1365: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 1,
      },
    },
  });

  const projectCards = new Swiper("#swiper-project-cards", {
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: "#project-about-btn-next",
      prevEl: "#project-about-btn-prev",
    },
    loop: true,
    breakpoints: {
      1365: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 1,
      },
    },
  });

  const resourceCards = new Swiper("#swiper-resource-cards", {
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: "#resource-about-btn-next",
      prevEl: "#resource-about-btn-prev",
    },
    loop: true,
    breakpoints: {
      1365: {
        slidesPerView: 2.95,
      },
      992: {
        slidesPerView: 1.95,
      },
      768: {
        slidesPerView: 0.95,
      },
    },
  });

  const eventCards = new Swiper("#swiper-event-cards", {
    observer: true,
    observeParents: true,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: "#event-about-btn-next",
      prevEl: "#event-about-btn-prev",
    },
    loop: true,
    breakpoints: {
      1365: {
        slidesPerView: 2.95,
      },
      992: {
        slidesPerView: 1.95,
      },
      768: {
        slidesPerView: 0.95,
      },
    },
  });

  // Settings for observing sections when scrolling to activate links
  class SectionsObserver {
    constructor(obj) {
      this.sections = [...document.querySelectorAll(obj.sections)];

      this.checkScreenSize();
      window.addEventListener("resize", this.checkScreenSize());
    }

    handleIntersection(entries) {
      entries.forEach((entry) => {
        const targetId = entry.target.id;
        const link = document.querySelector(
          `#student-resume-navbar .link[href="#${targetId}"]`
        );
        if (entry.isIntersecting) {
          if (link) {
            link.classList.add("active");
          }
        } else {
          if (link) {
            link.classList.remove("active");
          }
        }
      });
    }

    createObserver(threshold, rootMargin) {
      const observer = new IntersectionObserver(this.handleIntersection, {
        threshold: threshold,
        rootMargin: rootMargin,
      });
      this.sections.forEach((section) => {
        observer.observe(section);
      });
      this.handleIntersection(observer.takeRecords());
    }

    checkScreenSize() {
      if (window.innerWidth > 1200) {
        this.createObserver(0.8, "0px 0px");
      } else if (window.innerWidth > 992) {
        this.createObserver(0.5, "50px 0px");
      } else if (window.innerWidth > 768) {
        this.createObserver(0.3, "50px 0px");
      } else {
        this.createObserver(0.1, "20px 0px");
      }
    }
  }

  const studentPageSectionsObserver = new SectionsObserver({
    sections: [
      "#student-resume",
      "#student-education",
      "#student-work",
      "#student-achievements",
      "#student-journals",
      "#student-blogs",
      "#student-gallery",
    ],
  });
});

// Settings for sharing URL
class URLShare {
  constructor(obj) {
    this.input = document.querySelector(obj.input);
    this.activator = document.querySelector(obj.activator);
    this.message = document.querySelector(obj.message);

    if (this.input) {
      let currentURL = window.location.href;
      this.input.value = currentURL;
    }
    if (this.activator && this.message) {
      this.activator.addEventListener("click", () => {
        this.input.select();
        this.input.setSelectionRange(0, 99999);
        document.execCommand("copy");
        this.message.classList.add("active");
        setTimeout(() => {
          this.message.classList.remove("active");
        }, 2000);
      });
    }
  }
}

const exampleURLShare = new URLShare({
  input: "#resume-share-input",
  activator: "#resume-share-btn",
  message: "#resume-share-message",
});

// Settings for downloading HTML content
class PDFDownload {
  constructor(obj) {
    this.activator = document.querySelector(obj.activator);
    this.content = document.querySelector(obj.content);

    if (this.activator && this.content) {
      this.activator.addEventListener("click", () => {
        const formatScreenSize =
          window.innerWidth > 1600
            ? "a2"
            : window.innerWidth > 1130
            ? "a3"
            : window.innerWidth > 992
            ? "a4"
            : "letter";
        const orientationScreenSize =
          window.innerWidth > 768 ? "landscape" : "portrait";
        this.content.classList.add("active");
        const options = {
          filename: "resume.pdf",
          html2canvas: { scrollY: 0, scrollX: 0 },
          jsPDF: {
            unit: "in",
            format: formatScreenSize,
            orientation: orientationScreenSize,
          },
        };
        html2pdf(this.content, options);
        setTimeout(() => {
          this.content.classList.remove("active");
        }, 1000);
      });
    }
  }
}

const studentPDFDownload = new PDFDownload({
  activator: "#student-resume-download",
  content: "#resume-file-print",
});
