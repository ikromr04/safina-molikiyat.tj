const lang = document.querySelector('.lang');

document.addEventListener('click', (evt) => {
  if (!evt.target.closest('.app-nav-toggler')) {
    document.body.classList.remove('menu-shown');
  } else {
    document.body.classList.toggle('menu-shown');
  }

  if (!evt.target.closest('.lang__button')) {
    lang.classList.remove('lang--shown');
  } else {
    lang.classList.toggle('lang--shown');
  }
});

document.addEventListener('scroll', () => {
  lang.classList.remove('lang--shown');
});

lottie.loadAnimation({
  container: document.getElementById('lottie-container'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  loop: false,
  path: '/lotties/logo.json'
});

const servicesList = document.querySelector('[data-list="services"]');
const servicesItems = servicesList.querySelectorAll('li');

servicesList?.addEventListener('click', (evt) => {
  if (window.innerWidth < 768) {
    if (evt.currentTarget.classList.contains('collapsed')) {
      evt.currentTarget.classList.remove('collapsed');

      servicesItems?.forEach((child, index) => {
        if (index !== 0) {
          child.style.marginTop = `-${child.offsetHeight + 4}px`;
          // child.style.color = 'transparent';
        }
      });
    } else {
      evt.currentTarget.classList.add('collapsed');

      servicesItems?.forEach((child, index) => {
        if (index !== 0) {
          child.style.marginTop = 0;
          // child.style.color = 'inherit';
        }
      });
    }
  }
});

window.expandResponsiveGroups = (input) => {
  return input.replace(/(\w+):\(([^)]+)\)/g, (_, prefix, group) => {
    return group
      .trim()
      .split(/\s+/)
      .map(cls => `${prefix}:${cls}`)
      .join(' ');
  });
}
