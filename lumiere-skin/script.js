/* ============================================================
   LUMIÈRE SKIN  ·  script.js
   ============================================================ */

/* ---- 1. Scroll fade-in via IntersectionObserver -------------- */
(function initFadeIn() {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        // Stagger siblings inside the same direct parent
        const siblings = entry.target.parentElement
          ? [...entry.target.parentElement.querySelectorAll('.fade-in:not(.is-visible)')]
          : [];
        const idx = siblings.indexOf(entry.target);
        const delay = Math.max(0, idx) * 90; // 90 ms between cards

        setTimeout(() => {
          entry.target.classList.add('is-visible');
        }, delay);

        observer.unobserve(entry.target);
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -36px 0px' }
  );

  document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
})();


/* ---- 2. Draggable review scroll ------------------------------ */
(function initReviewDrag() {
  const outer = document.querySelector('.review__outer');
  if (!outer) return;

  let isDown = false;
  let startX = 0;
  let scrollStart = 0;

  outer.addEventListener('mousedown', (e) => {
    isDown = true;
    outer.classList.add('is-dragging');
    startX = e.pageX - outer.offsetLeft;
    scrollStart = outer.scrollLeft;
    e.preventDefault(); // prevent text selection while dragging
  });

  const endDrag = () => {
    isDown = false;
    outer.classList.remove('is-dragging');
  };

  outer.addEventListener('mouseleave', endDrag);
  outer.addEventListener('mouseup', endDrag);

  outer.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    const x = e.pageX - outer.offsetLeft;
    outer.scrollLeft = scrollStart - (x - startX) * 1.4;
  });

  // Touch devices scroll natively — no extra handling needed
})();


/* ---- 3. Hide floating LINE button when final CTA is in view -- */
(function initFloatVisibility() {
  const floatBtn = document.querySelector('.float-line');
  const ctaSection = document.querySelector('.cta-final');
  if (!floatBtn || !ctaSection) return;

  const onScroll = () => {
    const rect = ctaSection.getBoundingClientRect();
    // Hide when the top of the CTA reaches 80% down the viewport
    const isOverlapping = rect.top < window.innerHeight * 0.82;
    floatBtn.classList.toggle('is-hidden', isOverlapping);
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // run on load in case already scrolled
})();


/* ---- 4. Smooth active-section highlight (optional nav) ------- */
(function initNavHighlight() {
  const navCta = document.querySelector('.hero__nav-cta');
  if (!navCta) return;

  const onScroll = () => {
    // Give the nav CTA a slightly more prominent style once user scrolls
    const scrolled = window.scrollY > 80;
    navCta.style.backgroundColor = scrolled ? 'var(--gold)' : '';
    navCta.style.color = scrolled ? 'var(--white)' : '';
  };

  window.addEventListener('scroll', onScroll, { passive: true });
})();
