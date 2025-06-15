const lang = document.querySelector('.lang');

document.addEventListener('click', (evt) => {
  if (!evt.target.closest('.app-nav-toggler')) {
    if (window.screen.width < 1280) {
      document.body.classList.remove('menu-shown');
    }
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
        }
      });
    } else {
      evt.currentTarget.classList.add('collapsed');

      servicesItems?.forEach((child, index) => {
        if (index !== 0) {
          child.style.marginTop = 0;
        }
      });
    }
  }
});

const businessCenterList = document.querySelector('[data-list="business-centers"]');
const businessCenterItems = businessCenterList.querySelectorAll('li');

businessCenterList?.addEventListener('click', (evt) => {
  if (window.innerWidth < 768) {
    if (evt.currentTarget.classList.contains('collapsed')) {
      evt.currentTarget.classList.remove('collapsed');

      businessCenterItems?.forEach((child, index) => {
        if (index !== 0) {
          child.style.marginTop = `-${child.offsetHeight + 4}px`;
        }
      });
    } else {
      evt.currentTarget.classList.add('collapsed');

      businessCenterItems?.forEach((child, index) => {
        if (index !== 0) {
          child.style.marginTop = 0;
        }
      });
    }
  }
});

new Swiper('.tenant-services-swiper', {
  initialSlide: 1,
  loop: true,
  slidesPerView: 'auto',
  centeredSlides: true,
  breakpoints: {
    480: {
      initialSlide: 2,
    },
    768: {
      initialSlide: 2,
    },
    1280: {
      enabled: false,
      loop: false,
      initialSlide: 2,
    },
  },
});

new Swiper('.owner-services-swiper', {
  initialSlide: 1,
  loop: true,
  slidesPerView: 'auto',
  centeredSlides: true,
  breakpoints: {
    480: {
      initialSlide: 2,
    },
    768: {
      initialSlide: 2,
    },
    1280: {
      enabled: false,
      loop: false,
      initialSlide: 2,
    },
  },
});

const advantagesCenterList = document.querySelector('[data-list="advantages"]');
const advantagesCenterItems = advantagesCenterList.querySelectorAll('li');

advantagesCenterList?.addEventListener('click', (evt) => {
  if (window.innerWidth < 768) {
    if (evt.currentTarget.classList.contains('collapsed')) {
      evt.currentTarget.classList.remove('collapsed');

      advantagesCenterItems?.forEach((child, index) => {
        if (index !== 0) {
          child.style.marginTop = `-${child.offsetHeight + 4}px`;
        }
      });
    } else {
      evt.currentTarget.classList.add('collapsed');

      advantagesCenterItems?.forEach((child, index) => {
        if (index !== 0) {
          child.style.marginTop = 0;
        }
      });
    }
  }
});

new Swiper('.projects-swiper', {
  initialSlide: 1,
  loop: true,
  slidesPerView: 'auto',
  centeredSlides: true,
  breakpoints: {
    480: {
      initialSlide: 2,
    },
    768: {
      initialSlide: 2,
    },
    1280: {
      enabled: false,
      loop: false,
      initialSlide: 2,
    },
  },
});

const toTopButton = document.querySelector('#to-top');

toTopButton.addEventListener('click', () => window.scrollTo({
  top: 0,
  behavior: 'smooth',
}));

window.addEventListener('scroll', () => {
  const scrollFollow = document.querySelector('#scroll-follow');
  const percentView = document.querySelector('.scrolled-percent');
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const percent = (scrollTop / scrollHeight) * 100;

  const rect = scrollFollow.getBoundingClientRect();
  if (rect.top <= 0) {
    toTopButton.closest('ul').setAttribute('style', 'opacity:100;visibility:visible;')
  } else {
    toTopButton.closest('ul').removeAttribute('style')
  }

  percentView.setAttribute('style', `width:${percent.toFixed(2)}%`);
});

const headerEl = document.querySelector('[data-header]');
const triggerHeaderStickyEl = document.querySelector('[data-trigger-header-sticky]');
const footerEl = document.querySelector('[data-footer]');

const navAboutEl = document.querySelector('[href="#about"]');
const blockAboutEl = document.querySelector('#about');

const navRentersEl = document.querySelector('[href="#renters"]');
const blockRentersEl = document.querySelector('#renters');

const navOwnersEl = document.querySelector('[href="#owners"]');
const blockOwnersEl = document.querySelector('#owners');

const navBrokersEl = document.querySelector('[href="#brokers"]');
const blockBrokersEl = document.querySelector('#brokers');

window.addEventListener('scroll', () => {
  const rect = triggerHeaderStickyEl.getBoundingClientRect();

  if (rect.top <= 0) {
    headerEl.dataset.header = 'sticky';
  } else {
    headerEl.dataset.header = '';
  }

  const observerFooter = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting) {
      headerEl.dataset.header = '';
    }
  });
  observerFooter.observe(footerEl);

  const observerAbout = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting && isCovering50PercentViewport(blockAboutEl)) {
      navAboutEl.classList.add('active');
    } else {
      navAboutEl.classList.remove('active');
    }
  });
  observerAbout.observe(blockAboutEl);

  const observerRenters = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting && isCovering50PercentViewport(blockRentersEl)) {
      navRentersEl.classList.add('active');
    } else {
      navRentersEl.classList.remove('active');
    }
  });
  observerRenters.observe(blockRentersEl);

  const observerOwners = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting && isCovering50PercentViewport(blockOwnersEl)) {
      navOwnersEl.classList.add('active');
    } else {
      navOwnersEl.classList.remove('active');
    }
  });
  observerOwners.observe(blockOwnersEl);

  const observerBrokers = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting && isCovering50PercentViewport(blockBrokersEl)) {
      navBrokersEl.classList.add('active');
    } else {
      navBrokersEl.classList.remove('active');
    }
  });
  observerBrokers.observe(blockBrokersEl);
});

function isCovering50PercentViewport(el) {
  const rect = el.getBoundingClientRect();
  const viewportHeight = window.innerHeight;

  const visibleTop = Math.max(rect.top, 0);
  const visibleBottom = Math.min(rect.bottom, viewportHeight);

  const visibleHeight = visibleBottom - visibleTop;

  return visibleHeight >= viewportHeight * 0.5;
}
