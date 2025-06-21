document.querySelector('[data-app-title]')?.addEventListener('click', () => window.scrollTo({
  top: 0,
  behavior: 'smooth',
}));

window.toggleLocale = () => {
  const localeEl = document.querySelector('[data-locale]');
  const isShown = localeEl.dataset.locale === 'shown';

  const cleanup = () => {
    localeEl.setAttribute('data-locale', '');
    document.removeEventListener('click', handleClick);
    document.removeEventListener('keydown', handleKeydown);
    window.removeEventListener('scroll', cleanup);
  };

  const handleClick = (evt) => {
    if (!evt.target.closest('[data-locale="shown"]')) cleanup();
  };

  const handleKeydown = (evt) => {
    if (evt.key === 'Escape') cleanup();
  };

  if (!isShown) {
    localeEl.setAttribute('data-locale', 'shown');
    document.addEventListener('click', handleClick);
    document.addEventListener('keydown', handleKeydown);
    window.addEventListener('scroll', cleanup);
  } else {
    cleanup();
  }
};

window.toggleNav = () => {
  const navEl = document.querySelector('[data-nav]');
  const isShown = navEl.dataset.nav === 'shown';

  const cleanup = () => {
    document.body.classList.remove('overflow-hidden');
    navEl.setAttribute('data-nav', '');
    document.removeEventListener('click', handleClick);
    document.removeEventListener('keydown', handleKeydown);
  };

  const handleClick = (evt) => {
    if (!evt.target.closest('[data-nav-toggler]')) cleanup();
  };

  const handleKeydown = (evt) => {
    if (evt.key === 'Escape') cleanup();
  };

  if (!isShown) {
    if (window.screen.width < 768) {
      document.body.classList.add('overflow-hidden');
      document.addEventListener('click', handleClick);
    }
    navEl.setAttribute('data-nav', 'shown');
    document.addEventListener('keydown', handleKeydown);
  } else {
    cleanup();
  }
};

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

// window.addEventListener('scroll', () => {
//   const scrollFollow = document.querySelector('#scroll-follow');
//   const percentView = document.querySelector('.scrolled-percent');
//   const scrollTop = window.scrollY || document.documentElement.scrollTop;
//   const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
//   const percent = (scrollTop / scrollHeight) * 100;

//   const rect = scrollFollow.getBoundingClientRect();
//   if (rect.top <= 0) {
//     toTopButton.closest('ul').setAttribute('style', 'opacity:100;visibility:visible;')
//   } else {
//     toTopButton.closest('ul').removeAttribute('style')
//   }

//   percentView.setAttribute('style', `width:${percent.toFixed(2)}%`);
// });

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
      navAboutEl.setAttribute('data-current', '');
    } else {
      navAboutEl.removeAttribute('data-current');
    }
  });
  observerAbout.observe(blockAboutEl);

  const observerRenters = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting && isCovering50PercentViewport(blockRentersEl)) {
      navRentersEl.setAttribute('data-current', '');
    } else {
      navRentersEl.removeAttribute('data-current');
    }
  });
  observerRenters.observe(blockRentersEl);

  const observerOwners = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting && isCovering50PercentViewport(blockOwnersEl)) {
      navOwnersEl.setAttribute('data-current', '');
    } else {
      navOwnersEl.removeAttribute('data-current');
    }
  });
  observerOwners.observe(blockOwnersEl);

  const observerBrokers = new IntersectionObserver(([entry]) => {
    if (entry.isIntersecting && isCovering50PercentViewport(blockBrokersEl)) {
      navBrokersEl.setAttribute('data-current', '');
    } else {
      navBrokersEl.removeAttribute('data-current');
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

const animEls = document.querySelectorAll('.smart-anim');

animEls.forEach((element) => {
  setInterval(() => {
    if (element.classList.contains('smart-left')) {
      element.classList.remove('smart-left')
      element.classList.add('smart-right')
    } else {
      element.classList.add('smart-left')
      element.classList.remove('smart-right')
    }
  }, 5000)
});
