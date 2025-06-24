<footer class="footer" data-footer>
  <div class="container">
    <div class="footer__nav">
      <a class="hidden w-[153px] h-max xl:flex" href="#top">
        <img src="{{ asset('/images/logo.svg') }}" width="152" height="18" alt="@lang('app.name')">
      </a>

      <ul class="footer__navlist">
        <li>
          <a class="footer__navlink" href="#renters">
            @lang('nav.renters')
          </a>
        </li>
        <li>
          <a class="footer__navlink" href="#owners">
            @lang('nav.owners')
          </a>
        </li>
        <li>
          <a class="footer__navlink" href="#brokers">
            @lang('nav.brokers')
          </a>
        </li>
      </ul>

      <ul class="footer__contact-list">
        <li>
          <a class="footer__contact-link" href="tel:@lang('nav.telCode'){{ str_replace(' ', '', __('nav.telNumbers')) }}">
            <svg class="flex mr-[6px] xl:mr-2 xl:w-4 xl:h-4" width="16" height="16">
              <use href="#tel" />
            </svg>
            @lang('nav.telNumbers')
          </a>
        </li>
        <li>
          <a class="footer__contact-address" href="https://yandex.tj/maps/10318/dushanbe/house/YkEYcQ5hSEIHQF1ifXl2eHtgZw==/?ll=68.791454%2C38.579576&z=18" target="_blank">
            <svg width="16" height="16">
              <use href="#gps" />
            </svg>
            @lang('nav.address')
          </a>
        </li>
      </ul>
    </div>

    <ul class="footer__social-list social-list">
      <li>
        <a class="social-link" href="blank" target="_blank">
          <svg class="social-link__icon" width="16" height="16">
            <use href="#telegram" />
          </svg>
          <span class="sr-only">Telegram</span>
        </a>
      </li>
      <li>
        <a class="social-link" href="blank" target="_blank">
          <svg class="social-link__icon" width="16" height="16">
            <use href="#instagram" />
          </svg>
          <span class="sr-only">Instagram</span>
        </a>
      </li>
    </ul>

    <p class="text-center mt-4 mb-40 text-[calc(10px+2*((100vw-375px)/393))] font-montserrat md:mb-6 md:text-[min(calc(12px+2*((100vw-768px)/512)),14px)] xl:mb-10">
      © {{ date('Y') }} Safina Molikiyat.
    </p>

    <a class="totop-button" href="#top" data-to-top>
      <span class="relative z-0 flex p-px">
        <span class="flex w-[min(calc(86px+14*((100vw-1280px)/256)),100px)] h-px rounded-full bg-khaki"></span>
        <span class="scrolled-percent absolute top-0 right-0 min-w-1 h-full rounded-full bg-khaki duration-150" data-scrolled></span>
      </span>
      @lang('toTop')
    </a>
  </div>
</footer>
