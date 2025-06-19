<section class="mt-[-137px] pt-[137px] md:-mt-[97px] md:pt-[97px]" id="owners">
  <h2 class="sr-only">@lang('owners.title')</h2>

  <section class="container">
    <h3 class="title mt-0 mb-6 md:mb-8 xl:mb-6 2xl:mb-7">@lang('owners.business.title')</h3>

    <div class="pl-[10px] md:pl-[calc(10px+4*((100vw-768px)/512))] xl:pl-[calc(14px+2*((100vw-1280px)/(1536-1280)))] 2xl:pl-[15px]">
      <p class="block font-normal mb-4 md:leading-none md:text-[calc(16px+8*((100vw-768px)/512))] md:mb-[calc(16px+24*((100vw-768px)/512))] xl:text-[min(calc(24px+6*((100vw-1280px)/256)),30px)] xl:mb-[min(calc(40px+8*((100vw-1280px)/256)),48px)]">@lang('owners.business.p1')</p>
      <p>@lang('owners.business.p2')</p>
      <p>@lang('owners.business.p3')</p>

      {{-- <ul class="font-light list-none p-0 m-0 flex flex-col gap-4 mb-6 text-sm md:grid md:grid-cols-2 md:gap-x-[70px] md:mb-[calc(24px+24*((100vw-768px)/512))] md:text-[calc(14px+4*((100vw-768px)/512))] md:px-[calc(100*((100vw-768px)/512))] xl:text-[min(calc(18px+2*((100vw-1280px)/256)),20px)] xl:gap-x-[min(calc(70px+40*((100vw-1280px)/256)),110px)] xl:px-[min(calc(100px+16*((100vw-1280px)/256)),116px)]">
        <li>
        </li>
        <li>
        </li>
      </ul> --}}

      <section>
        <h4 class="block font-normal mb-4 md:leading-none md:text-[calc(16px+8*((100vw-768px)/512))] md:mb-[calc(16px+24*((100vw-768px)/512))] xl:text-[min(calc(24px+6*((100vw-1280px)/256)),30px)] xl:mb-[min(calc(40px+8*((100vw-1280px)/256)),48px)]">@lang('owners.quality.title')</h4>

        <ol class="font-light pl-5 m-0 flex flex-col gap-4 mb-8 text-sm md:grid md:grid-cols-3 md:gap-x-12 md:mb-[calc(24px+24*((100vw-768px)/512))] md:text-[calc(14px+4*((100vw-768px)/512))] md:px-[calc(16px+100*((100vw-768px)/512))] xl:text-[min(calc(18px+2*((100vw-1280px)/256)),20px)] xl:gap-x-[min(calc(48px+62*((100vw-1280px)/256)),110px)] xl:px-[min(calc(100px+16*((100vw-1280px)/256)),116px)]">
          <li>
            {{-- Комплексное управление объектом и взаимоотношений со стейкхолдерами. <span class="block mt-4 text-[10px] xl:text-[calc(10px+2*((100vw-1280px)/256))]">*от подрядных услуг до поддержки функциональности объекта*</span> --}}
            @lang('owners.quality.item1')
          </li>
          <li>
            @lang('owners.quality.item2')
          </li>
          <li>
            @lang('owners.quality.item3')
          </li>
        </ol>
      </section>
    </div>

    <ul class="flex justify-between gap-1 mb-8 md:justify-end md:mb-10 xl:mt-12 xl:mb-14 xl:gap-2 2xl:mt-[72px] 2xl:mb-20">
      <li>
        <a class="button" href="blank" target="_blank">@lang('owners.business.learnMore')</a>
      </li>
      <li>
        <a class="button" href="#contact-form">@lang('owners.business.contact')</a>
      </li>
    </ul>
  </section>

  <section class="md:mb-12 xl:mb-16">
    <h3 class="title container mt-0 mb-6 md:mb-12 xl:mb-16">@lang('owners.services.title')</h3>

    <div class="swiper owner-services-swiper">
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
      </ul>
    </div>
  </section>
</section>
