<!-- Back to Top Button -->
<button id="backToTop" class="fixed bottom-8 right-8 bg-brand-primary-500 text-white p-4 rounded-full shadow-lg cursor-pointer hidden hover:bg-brand-primary-600 transition-all z-50">
  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
  </svg>
</button>

<script>
  // Back to top functionality
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
      backToTop.classList.remove('hidden');
      backToTop.classList.add('flex');
    } else {
      backToTop.classList.add('hidden');
      backToTop.classList.remove('flex');
    }
  });

  backToTop.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
</script>