<section class="brokers" id="brokers">
  <h2 class="sr-only">@lang('brokers.title')</h2>

  <section class="advantages">
    <div class="container">
      <h3 class="advantages__title title title--reverse">@lang('brokers.advantages.title')</h3>

      <p class="advantages__subtitle">@lang('brokers.advantages.subtitle')</p>
    </div>

    <svg class="brokers__logo" width="320" height="278">
      <use href="#safina-molikiyat" />
    </svg>

    <ul class="list" data-shrinked onclick="window.toggleList(this)">
      <li class="list__item">
        <div class="list__item-inner">
          <svg class="list__item-icon" width="32" height="32">
            <use href="#marketing" />
          </svg>
          <div>
            <h4 class="list__item-title">@lang('brokers.advantages.item1.title')</h4>
            <p class="list__item-desc">@lang('brokers.advantages.item1.description')</p>
          </div>
        </div>
      </li>
      <li class="list__item">
        <div class="list__item-inner">
          <svg class="list__item-icon" width="32" height="32">
            <use href="#exclusive" />
          </svg>
          <div>
            <h4 class="list__item-title">@lang('brokers.advantages.item2.title')</h4>
            <p class="list__item-desc">@lang('brokers.advantages.item2.description')</p>
          </div>
        </div>
      </li>
      <li class="list__item">
        <div class="list__item-inner">
          <svg class="list__item-icon" width="32" height="32">
            <use href="#lease-agreement" />
          </svg>
          <div>
            <h4 class="list__item-title">@lang('brokers.advantages.item3.title')</h4>
            <p class="list__item-desc">@lang('brokers.advantages.item3.description')</p>
          </div>
        </div>
      </li>
      <li class="list__item">
        <div class="list__item-inner">
          <svg class="list__item-icon" width="32" height="32">
            <use href="#legal" />
          </svg>
          <div>
            <h4 class="list__item-title">@lang('brokers.advantages.item4.title')</h4>
            <p class="list__item-desc">@lang('brokers.advantages.item4.description')</p>
          </div>
        </div>
      </li>
    </ul>

    <ul class="advantages__buttons container">
      <li>
        <a class="button" href="blank" target="_blank">@lang('brokers.advantages.learnMore')</a>
      </li>
      <li>
        <a class="button" href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}">@lang('brokers.advantages.contact')</a>
      </li>
    </ul>
  </section>

  <section class="projects">
    <h3 class="projects__title title title--reverse container">@lang('brokers.projects.title')</h3>

    <div class="swiper" data-swiper>
      <ul class="swiper-wrapper">
        <li class="swiper-slide odd">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item1.title') }}">@lang('brokers.projects.item1.title')</a>
          <p>@lang('brokers.projects.item1.description')</p>
        </li>
        <li class="swiper-slide">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item2.title') }}">@lang('brokers.projects.item2.title')</a>
          <p>@lang('brokers.projects.item2.description')</p>
        </li>
        <li class="swiper-slide odd">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item3.title') }}">@lang('brokers.projects.item3.title')</a>
          <p>@lang('brokers.projects.item3.description')</p>
        </li>
        <li class="swiper-slide">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item4.title') }}">@lang('brokers.projects.item4.title')</a>
          <p>@lang('brokers.projects.item4.description')</p>
        </li>
        <li class="swiper-slide odd">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item5.title') }}">@lang('brokers.projects.item5.title')</a>
          <p>@lang('brokers.projects.item5.description')</p>
        </li>

        <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item1.title') }}">@lang('brokers.projects.item1.title')</a>
          <p>@lang('brokers.projects.item1.description')</p>
        </li>
        <li class="swiper-slide odd xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item2.title') }}">@lang('brokers.projects.item2.title')</a>
          <p>@lang('brokers.projects.item2.description')</p>
        </li>
        <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item3.title') }}">@lang('brokers.projects.item3.title')</a>
          <p>@lang('brokers.projects.item3.description')</p>
        </li>
        <li class="swiper-slide odd xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item4.title') }}">@lang('brokers.projects.item4.title')</a>
          <p>@lang('brokers.projects.item4.description')</p>
        </li>
        <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[2] }}" data-service="{{ __('brokers.projects.item5.title') }}">@lang('brokers.projects.item5.title')</a>
          <p>@lang('brokers.projects.item5.description')</p>
        </li>
      </ul>
    </div>
  </section>
</section>
