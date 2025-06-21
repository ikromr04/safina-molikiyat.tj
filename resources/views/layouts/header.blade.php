<header class="header" data-header>
  <nav class="nav" data-nav>
    <div class="nav__container container">
      <div class="nav__locale locale" data-locale>
        <button class="locale__toggler" type="button" onclick="window.toggleLocale()">
          {{ app()->getLocale() }}
          <svg class="locale__icon" width="7" height="5">
            <use href="#caret-down" />
          </svg>
        </button>

        <ul class="locale__list">
          @foreach (config('app.available_locales') as $locale)
            @if ($locale !== app()->getLocale())
              <li>
                <a class="locale__link" href="/{{ $locale !== config('app.fallback_locale') ? $locale : '' }}">
                  {{ $locale }}
                </a>
              </li>
            @endif
          @endforeach
        </ul>
      </div>

      <h1 class="nav__logo logo" data-app-title>
        <img class="logo__image" src="{{ asset('/images/logo.svg') }}" width="152" height="18" alt="@lang('app.name')">
      </h1>

      <button class="nav__toggler" type="button" hidden data-nav-toggler onclick="window.toggleNav()">
        <span class="nav__toggler-icon"><span></span><span></span></span>
        <span class="sr-only">@lang('nav.toggle')</span>
      </button>

      <ul class="nav__list">
        <li class="nav__item">
          <a class="nav__link" href="#about" data-current>@lang('nav.about')</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#renters">@lang('nav.renters')</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#owners">@lang('nav.owners')</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#brokers">@lang('nav.brokers')</a>
        </li>
      </ul>

      <ul class="nav__contacts">
        <li>
          <a class="nav__contact-link nav__contact-link--tel" href="tel:@lang('nav.telCode'){{ str_replace(' ', '', __('nav.telNumbers')) }}">
            <svg class="nav__contact-icon nav__contact-icon--tel" width="16" height="16">
              <use href="#tel" />
            </svg>
            <span class="sr-only md:not-sr-only">@lang('nav.telNumbers')</span>
          </a>
        </li>
        <li>
          <a class="nav__contact-link nav__contact-link--mail" href="#contact-form">
            <svg class="nav__contact-icon nav__contact-icon--mail" width="16" height="10">
              <use href="#mail" />
            </svg>
            <span class="sr-only">@lang('nav.learnMore')</span>
            <span class="nav__mail-dot"></span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>
