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
