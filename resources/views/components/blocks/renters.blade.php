<section class="renters" id="renters">
  <h2 class="sr-only">@lang('renters.title')</h2>

  <section class="renters-business" data-trigger-header>
    <div class="relative z-10 container">
      <h3 class="renters-business__title title title--reverse">@lang('renters.business.title')</h3>

      <p class="renters-business__subtitle">@lang('renters.business.subtitle')</p>

      <a class="renters-business__site-link" href="blank" target="_blank">
        <svg width="280" height="277">
          <use href="#safina-tower" />
        </svg>
      </a>
    </div>

    <ul class="list" data-shrinked onclick="window.toggleList(this)">
      <li class="list__item">
        <div class="list__item-inner">
          <svg class="list__item-icon" width="32" height="32">
            <use href="#idea" />
          </svg>
          <div>
            <h4 class="list__item-title">@lang('renters.business.item1.title')</h4>
            <p class="list__item-desc">@lang('renters.business.item1.description')</p>
          </div>
        </div>
      </li>
      <li class="list__item">
        <div class="list__item-inner">
          <svg class="list__item-icon" width="32" height="32">
            <use href="#logistics" />
          </svg>
          <div>
            <h4 class="list__item-title">@lang('renters.business.item2.title')</h4>
            <p class="list__item-desc">@lang('renters.business.item2.description')</p>
          </div>
        </div>
      </li>
      <li class="list__item">
        <div class="list__item-inner">
          <svg class="list__item-icon" width="32" height="32">
            <use href="#scheduling" />
          </svg>
          <div>
            <h4 class="list__item-title">@lang('renters.business.item3.title')</h4>
            <p class="list__item-desc">@lang('renters.business.item3.description')</p>
          </div>
        </div>
      </li>
      <li class="list__item">
        <div class="list__item-inner">
          <svg class="list__item-icon" width="30" height="30">
            <use href="#global-user" />
          </svg>
          <div>
            <h4 class="list__item-title">@lang('renters.business.item4.title')</h4>
            <p class="list__item-desc">@lang('renters.business.item4.description')</p>
          </div>
        </div>
      </li>
    </ul>

    <ul class="renters-business__buttons container">
      <li>
        <a class="button" href="blank" target="_blank">
          <svg class="button__icon" width="16" height="16">
            <use href="#globe" />
          </svg>
          @lang('renters.business.learnMore')
        </a>
      </li>
      <li>
        @php
          $text = (object) [
              'title' => __('form.calc.title'),
              'description' => __('form.calc.description'),
              'field.name.label' => __('form.calc.field.name.label'),
              'field.surname.label' => __('form.calc.field.surname.label'),
              'field.tel.label' => __('form.calc.field.tel.label'),
              'field.email.label' => __('form.calc.field.email.label'),
              'field.name.required' => __('form.calc.field.name.required'),
              'field.surname.required' => __('form.calc.field.surname.required'),
              'field.tel.required' => __('form.calc.field.tel.required'),
              'field.email.required' => __('form.calc.field.email.required'),
              'field.email.email' => __('form.calc.field.email.email'),
              'field.employees.label' => __('form.calc.field.employees.label'),
              'field.areaPerEmployee.label' => __('form.calc.field.areaPerEmployee.label'),
              'options' => (array) [__('form.calc.field.areaPerEmployee.option1'), __('form.calc.field.areaPerEmployee.option2'), __('form.calc.field.areaPerEmployee.option3')],
              'field.rooms.label' => __('form.calc.field.rooms.label'),
              'openspace' => __('form.calc.openspace'),
              'recommended' => __('form.calc.recommend'),
              'apply' => __('form.calc.apply'),
              'apply.title' => __('form.calc.apply.title'),
              'apply.description' => __('form.calc.apply.description'),
              'submit' => __('form.calc.submit'),
              'warning' => __('form.contact.warning'),
              'noCabinets' => __('form.calc.noCabinets'),
          ];
        @endphp
        <a class="button" href="#calculation-form" data-calculation="{{ json_encode($text) }}">
          <svg class="button__icon" width="16" height="16">
            <use href="#calculation" />
          </svg>
          @lang('renters.business.calculation')
        </a>
      </li>
    </ul>
  </section>

  <section class="renters-services">
    <h3 class="renters-services__title title title--reverse container">@lang('renters.services.title')</h3>

    <div class="swiper" data-swiper>
      <ul class="swiper-wrapper">
        <li class="swiper-slide odd">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item1') }}">@lang('renters.services.item1')</a>
        </li>
        <li class="swiper-slide">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item2') }}">@lang('renters.services.item2')</a>
        </li>
        <li class="swiper-slide odd">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item3') }}">@lang('renters.services.item3')</a>
        </li>
        <li class="swiper-slide">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item4') }}">@lang('renters.services.item4')</a>
        </li>
        <li class="swiper-slide odd">
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item5') }}">@lang('renters.services.item5')</a>
        </li>

        <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item1') }}">@lang('renters.services.item1')</a>
        </li>
        <li class="swiper-slide odd xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item2') }}">@lang('renters.services.item2')</a>
        </li>
        <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item3') }}">@lang('renters.services.item3')</a>
        </li>
        <li class="swiper-slide odd xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item4') }}">@lang('renters.services.item4')</a>
        </li>
        <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form" data-contact-form data-me="{{ collect(__('form.contact.meOptions'))[0] }}" data-service="{{ __('renters.services.item5') }}">@lang('renters.services.item5')</a>
        </li>
      </ul>
    </div>
  </section>
</section>
