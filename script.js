// Initialize AOS animation
AOS.init({
  once: false,
  duration: 800,
  easing: "ease-in-out-quad",
});

// Mobile menu toggle
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");

menuBtn.addEventListener("click", () => {
  const expanded = menuBtn.getAttribute("aria-expanded") === "true" || false;
  menuBtn.setAttribute("aria-expanded", !expanded);
  menuBtn.classList.toggle("open");
  mobileMenu.classList.toggle("open");
});

// Close mobile menu when clicking a link
document.querySelectorAll("#mobile-menu a").forEach((link) => {
  link.addEventListener("click", () => {
    mobileMenu.classList.remove("open");
    menuBtn.classList.remove("open");
    menuBtn.setAttribute("aria-expanded", "false");
  });
});

// Scroll header shadow
const header = document.querySelector("header");
window.addEventListener("scroll", () => {
  if (window.scrollY > 20) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
});

// Particle background
const canvas = document.getElementById("particle-canvas");
const ctx = canvas.getContext("2d");
let width, height;
let particles = [];

class Particle {
  constructor(x, y, radius, speedX, speedY, opacity) {
    this.x = x;
    this.y = y;
    this.radius = radius;
    this.speedX = speedX;
    this.speedY = speedY;
    this.opacity = opacity;
  }
  update() {
    this.x += this.speedX;
    this.y += this.speedY;
    if (this.x < 0) this.x = width;
    else if (this.x > width) this.x = 0;
    if (this.y < 0) this.y = height;
    else if (this.y > height) this.y = 0;
  }
  draw() {
    ctx.beginPath();
    ctx.fillStyle = `rgba(99, 102, 241, ${this.opacity})`;
    ctx.shadowColor = "rgba(99, 102, 241, 0.8)";
    ctx.shadowBlur = 15;
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
    ctx.fill();
  }
}

function initParticles() {
  particles = [];
  for (let i = 0; i < 120; i++) {
    let radius = Math.random() * 1.3 + 1;
    let x = Math.random() * width;
    let y = Math.random() * height;
    let speedX = (Math.random() - 0.5) * 0.2;
    let speedY = (Math.random() - 0.5) * 0.2;
    let opacity = Math.random() * 0.15 + 0.05;
    particles.push(new Particle(x, y, radius, speedX, speedY, opacity));
  }
}

function resize() {
  width = window.innerWidth;
  height = window.innerHeight;
  canvas.width = width;
  canvas.height = height;
  initParticles();
}
window.addEventListener("resize", resize);
resize();

function animateParticles() {
  ctx.clearRect(0, 0, width, height);
  for (let p of particles) {
    p.update();
    p.draw();
  }
  requestAnimationFrame(animateParticles);
}
animateParticles();

// Typing animation for hero section
const typingText = "Solusi Profesional untuk Topup Game & Host to Host H2H";
const typingElement = document.getElementById("typing-title");
typingElement.textContent = ""; // Ensure empty at start

let typingIndex = 0;
let typingSpeed = 80;

function typeHeroText() {
  if (typingIndex <= typingText.length) {
    const currentText = typingText.slice(0, typingIndex);
    typingElement.textContent = currentText;
    typingIndex++;
    setTimeout(typeHeroText, typingSpeed);
  } else {
    typingElement.style.borderRight = "2px solid #4f46e5";
  }
}

// Lazy loading images
const lazyImages = document.querySelectorAll(".lazy-img");
const imageObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.getAttribute("data-src") || img.src;
        img.classList.add("loaded");
        observer.unobserve(img);
      }
    });
  },
  {
    rootMargin: "0px 0px 100px 0px",
  }
);

lazyImages.forEach((img) => {
  imageObserver.observe(img);
});

// Welcome screen animation
const welcomeScreen = document.getElementById("welcome-screen");
const welcomeText = document.querySelector(".welcome-typing");

// Set current year in footer
document.getElementById("current-year").textContent = new Date().getFullYear();

// After welcome typing animation completes
setTimeout(() => {
  welcomeText.classList.add("finished");
  setTimeout(() => {
    welcomeScreen.classList.add("loading-hidden");
    setTimeout(() => {
      welcomeScreen.style.display = "none";
      // Start hero typing animation after welcome screen is hidden
      typeHeroText();
    }, 500);
  }, 1500);
}, 3500); // Match this with the typing animation duration

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const targetId = this.getAttribute("href");
    if (targetId === "#") return;

    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      const headerHeight = document.querySelector("header").offsetHeight;
      const targetPosition =
        targetElement.getBoundingClientRect().top +
        window.pageYOffset -
        headerHeight;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    }
  });
});

// Active link highlighting
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav a");

window.addEventListener("scroll", () => {
  let current = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;

    if (window.pageYOffset >= sectionTop - 150) {
      current = section.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");
    if (link.getAttribute("href")) {
      if (link.getAttribute("href").includes(current)) {
        link.classList.add("active");
      }
    }
  });
});

// FAQ Toggle functionality
document.querySelectorAll(".faq-toggle").forEach((button) => {
  button.addEventListener("click", () => {
    const content = button.nextElementSibling;
    const icon = button.querySelector("i");

    content.classList.toggle("hidden");
    icon.classList.toggle("fa-chevron-down");
    icon.classList.toggle("fa-chevron-up");
  });
});

// Back to top button
const backToTopButton = document.getElementById("back-to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 300) {
    backToTopButton.classList.remove("hidden");
  } else {
    backToTopButton.classList.add("hidden");
  }
});

backToTopButton.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Form submission handling
const contactForm = document.querySelector("form");
if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // Get form values
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const message = document.getElementById("message").value;

    // Here you would typically send the data to a server
    console.log("Form submitted:", { name, email, phone, message });

    // Show success message
    alert(
      "Terima kasih! Pesan Anda telah terkirim. Kami akan segera menghubungi Anda."
    );

    // Reset form
    contactForm.reset();
  });
}
