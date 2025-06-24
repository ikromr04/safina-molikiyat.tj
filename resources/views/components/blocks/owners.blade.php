<section class="owners" id="owners">
  <h2 class="sr-only">@lang('owners.title')</h2>

  <section class="owners-business container">
    <h3 class="owners-business__title title title--reverse">@lang('owners.business.title')</h3>

    <div class="owners-business__inner">
      <p>@lang('owners.business.p1')</p>

      <div>
        <p>@lang('owners.business.p2')</p>
        <p>@lang('owners.business.p3')</p>
      </div>

      <section>
        <h4 class="owners-business__quality-title">@lang('owners.quality.title')</h4>

        <ol class="owners-business__quality-list">
          <li>@lang('owners.quality.item1')</li>
          <li>@lang('owners.quality.item2')</li>
          <li>@lang('owners.quality.item3')</li>
        </ol>
      </section>
    </div>

    <ul class="owners-business__buttons">
      <li>
        <a class="button" href="blank" target="_blank">@lang('owners.business.learnMore')</a>
      </li>
      <li>
        <a class="button" href="#contact-form">@lang('owners.business.contact')</a>
      </li>
    </ul>
  </section>

  <section class="owners-business__services">
    <h3 class="owners-business__services-title title title--reverse container">@lang('owners.services.title')</h3>

    <div class="swiper" data-swiper>
      <ul class="swiper-wrapper">
        <li class="swiper-slide odd">
          <a href="#contact-form">@lang('owners.services.item1')</a>
        </li>
        <li class="swiper-slide">
          <a href="#contact-form">@lang('owners.services.item2')</a>
        </li>
        <li class="swiper-slide odd">
          <a href="#contact-form">@lang('owners.services.item3')</a>
        </li>
        <li class="swiper-slide">
          <a href="#contact-form">@lang('owners.services.item4')</a>
        </li>
        <li class="swiper-slide odd">
          <a href="#contact-form">@lang('owners.services.item5')</a>
        </li>

         <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form">@lang('owners.services.item1')</a>
        </li>
        <li class="swiper-slide odd xl:!hidden" hidden>
          <a href="#contact-form">@lang('owners.services.item2')</a>
        </li>
        <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form">@lang('owners.services.item3')</a>
        </li>
        <li class="swiper-slide odd xl:!hidden" hidden>
          <a href="#contact-form">@lang('owners.services.item4')</a>
        </li>
        <li class="swiper-slide xl:!hidden" hidden>
          <a href="#contact-form">@lang('owners.services.item5')</a>
        </li>
      </ul>
    </div>
  </section>
</section>
