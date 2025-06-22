<section class="about" id="about">
  <h2 class="sr-only">@lang('about.title')</h2>

  <div class="about__container">
    <div class="about__top container">
      <svg class="sr-only" width="320" height="278">
        <use href="#safina-molikiyat" />
      </svg>
      <p class="sr-only">@lang('about.slogan')</p>
      <div class="about__animation" data-lottie-container></div>
    </div>

    <div class="about__bottom">
      <a class="about__more" href="#contact-form">
        @lang('learnMore')
      </a>

      <div class="about__pattern"></div>
    </div>
  </div>

  <section class="statistic container">
    <h3 class="statistic__title title">@lang('about.statistics.title')</h3>

    <dl class="statistic__details details">
      <div class="details__item">
        <dt class="details__term">
          <strong>@lang('about.statistics.dt1')</strong>
        </dt>
        <dd class="details__def">
          @lang('about.statistics.dd1')
        </dd>
      </div>
      <div class="details__item">
        <dt class="details__term">
          <strong>@lang('about.statistics.dt2')</strong>
        </dt>
        <dd class="details__def">
          @lang('about.statistics.dd2')
        </dd>
      </div>
      <div class="details__item">
        <dt class="details__term">
          <strong>@lang('about.statistics.dt3')</strong>
        </dt>
        <dd class="details__def">
          @lang('about.statistics.dd3')
        </dd>
      </div>
    </dl>
  </section>

  <section class="services">
    <h3 class="services__title title container">@lang('about.services.title')</h3>

    <ul class="services__list" data-shrinked onclick="window.toggleList(this)">
      <li class="services__item">
        <div class="services__item-inner">
          <svg class="services__item-icon" width="32" height="32">
            <use href="#legal" />
          </svg>
          <div>
            <h4 class="services__item-title">@lang('about.services.item1.title')</h4>
            <p class="services__item-desc">@lang('about.services.item1.description')</p>
          </div>
        </div>
      </li>
      <li class="services__item">
        <div class="services__item-inner">
          <svg class="services__item-icon" width="32" height="32">
            <use href="#idea" />
          </svg>
          <div>
            <h4 class="services__item-title">@lang('about.services.item2.title')</h4>
            <p class="services__item-desc">@lang('about.services.item2.description')</p>
          </div>
        </div>
      </li>
      <li class="services__item">
        <div class="services__item-inner">
          <svg class="services__item-icon" width="32" height="32">
            <use href="#community" />
          </svg>
          <div>
            <h4 class="services__item-title">@lang('about.services.item3.title')</h4>
            <p class="services__item-desc md:!whitespace-normal xl:!whitespace-pre-line">@lang('about.services.item3.description')</p>
          </div>
        </div>
      </li>
      <li class="services__item">
        <div class="services__item-inner">
          <svg class="services__item-icon" width="32" height="32">
            <use href="#finance" />
          </svg>
          <div>
            <h4 class="services__item-title">@lang('about.services.item4.title')</h4>
            <p class="services__item-desc">@lang('about.services.item4.description')</p>
          </div>
        </div>
      </li>
      <li class="services__item">
        <div class="services__item-inner">
          <svg class="services__item-icon" width="32" height="32">
            <use href="#partnership" />
          </svg>
          <div>
            <h4 class="services__item-title">@lang('about.services.item5.title')</h4>
            <p class="services__item-desc">@lang('about.services.item5.description')</p>
          </div>
        </div>
      </li>
    </ul>
  </section>
</section>
