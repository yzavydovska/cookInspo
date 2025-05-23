let lastScroll = 0;
const header = document.querySelector('.site-header');

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll <= 0) {
    header.style.top = '0';
    return;
  }

  if (currentScroll > lastScroll) {
    header.style.top = '-100px';
  } else {
    header.style.top = '0';
  }

  lastScroll = currentScroll;
});

