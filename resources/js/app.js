document.querySelector('[data-app-title]')?.addEventListener('click', () => window.scrollTo({
  top: 0,
  behavior: 'smooth',
}));

lottie.loadAnimation({
  container: document.querySelector('[data-lottie-container]'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  loop: false,
  path: '/lotties/logo.json'
});

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
    if (window.innerWidth < 768) {
      document.body.classList.add('overflow-hidden');
      document.addEventListener('click', handleClick);
    }
    navEl.setAttribute('data-nav', 'shown');
    document.addEventListener('keydown', handleKeydown);
  } else {
    cleanup();
  }
};

window.toggleList = (listEl) => {
  if (window.innerWidth < 768) {
    const itemEls = listEl.querySelectorAll('li');

    if (listEl.hasAttribute('data-shrinked')) {
      listEl.removeAttribute('data-shrinked');

      itemEls?.forEach((itemEl, index) => {
        if (index !== 0) {
          itemEl.style.marginTop = `-${itemEl.offsetHeight + 4}px`;
          itemEl.style.color = 'transparent';
        }
      });
    } else {
      listEl.setAttribute('data-shrinked', '');

      itemEls?.forEach((itemEl, index) => {
        if (index !== 0) {
          itemEl.removeAttribute('style');
        }
      });
    }
  }
}

const sliderEls = document.querySelectorAll('[data-swiper]');

sliderEls?.forEach((sliderEl) => {
  new Swiper(sliderEl, {
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
});

window.addEventListener('scroll', () => {
  const scrollFollow = document.querySelector('[data-trigger-scrollbar]');
  const percentView = document.querySelector('[data-scrolled]');
  const toTopButton = document.querySelector('[data-to-top]');
  const mailButton = document.querySelector('[data-email]');
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  const percent = (scrollTop / scrollHeight) * 100;

  const rect = scrollFollow.getBoundingClientRect();
  if (rect.top <= 0) {
    toTopButton.setAttribute('style', 'opacity:100;visibility:visible;')
    mailButton.setAttribute('style', 'opacity:100;visibility:visible;')
  } else {
    toTopButton.removeAttribute('style')
    mailButton.removeAttribute('style')
  }

  percentView.setAttribute('style', `width:${percent.toFixed(2)}%`);
});

const headerEl = document.querySelector('[data-header]');
const triggerHeaderStickyEl = document.querySelector('[data-trigger-header]');
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
