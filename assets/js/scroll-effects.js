// Back to top button functionality
const backToTop = document.createElement("button");
backToTop.innerHTML = `
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
  </svg>
`;
backToTop.className =
  "fixed bottom-8 right-8 bg-brand-primary-500 text-white p-4 rounded-full shadow-lg cursor-pointer transform transition-all duration-300 translate-y-20 opacity-0 hover:bg-brand-primary-600";
document.body.appendChild(backToTop);

// Show/hide back to top button
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 300) {
    backToTop.classList.remove("translate-y-20", "opacity-0");
  } else {
    backToTop.classList.add("translate-y-20", "opacity-0");
  }
});

backToTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Sticky header
const header = document.querySelector("nav");
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll > lastScroll && currentScroll > 100) {
    header.classList.add("-translate-y-full");
  } else {
    header.classList.remove("-translate-y-full");
  }
  lastScroll = currentScroll;
});

// Reveal animations
const revealElements = document.querySelectorAll(".reveal");
const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("revealed");
      }
    });
  },
  {
    threshold: 0.1,
  }
);

revealElements.forEach((el) => revealObserver.observe(el));
