document.addEventListener('DOMContentLoaded', () => {
  const animatedElements = document.querySelectorAll('.animated');

  const options = {
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const delay = el.dataset.delay || 0;

        setTimeout(() => {
          el.classList.add('visible');
        }, delay);

        observer.unobserve(el); 
      }
    });
  }, options);

  animatedElements.forEach(el => observer.observe(el));
});
