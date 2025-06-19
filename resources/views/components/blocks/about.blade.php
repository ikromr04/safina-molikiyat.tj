    <section class="mt-[-137px] pt-[137px]" id="about">
      <h2 class="sr-only">@lang('about.title')</h2>

      <div class="flex flex-col min-h-[calc(100vh-230px)] md:min-h-[calc(100vh-300px)]">
        <div class="relative container z-10 flex mt-auto min-h-40 aspect-[320/240] overflow-hidden md:aspect-[1440/652]">
          <svg width="320" height="278">
            <use href="#logo-symbol" />
          </svg>
          <p>@lang('about.slogan')</p>
          <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 h-full w-auto aspect-[1440/652]" data-lottie-container></div>
        </div>

        <div class="relative flex justify-center pt-14 pb-16 mb-auto md:p-0 md:h-[370px] md:items-center md:-mt-24">
          <a class="relative z-10 flex items-center uppercase border-none rounded-[5px] duration-150 text-onyx cursor-pointer group/parent hover:bg-khaki active:bg-khaki leading-none text-[calc(12px+3*((100vw-375px)/(768-375)))] p-[calc(8px+2*((100vw-375px)/(768-375)))] md:rounded-[6px] md:text-[15px] md:p-[10px] xl:text-[clamp(15px,calc(15px+3*((100vw-1280px)/(1536-1280))),18px)] xl:p-[clamp(10px,calc(10px+2*((100vw-1280px)/(1536-1280))),12px)] xl:rounded-[clamp(6px,calc(6px+2*((100vw-1280px)/(1536-1280))),8px)]" href="#contact-form">
            @lang('learnMore')
          </a>

          <div class="absolute left-0 top-1/2 -z-10 -translate-y-1/2 w-full h-[160%] overflow-hidden bg-center bg-[url('/public/images/pattern.svg')] pattern md:bg-[length:34px_auto] xl:bg-[length:42px_auto] 2xl:bg-[length:52px_auto] after:absolute after:top-0 after:left-0 after:z-10 after:w-full after:h-full after:bg-[linear-gradient(to_bottom,#1f2937_0,transparent_50%,#1f2937_100%)]"></div>
        </div>
      </div>

      <section class="container z-10 -mt-8 mb-[calc(32px+32*((100vw-375px)/(768-375)))] md:-mt-12 md:mb-16 xl:mb-[calc(64px+16*((100vw-1280px)/(1536-1280)))] 2xl:mb-20">
        <h3 class="title flex flex-col mt-0 mb-[calc(32px+24*((100vw-375px)/(768-375)))] md:mb-[56px] xl:mb-[calc(56px+8*((100vw-1280px)/(1536-1280)))] 2xl:mb-16">@lang('about.statistics.title')</h3>

        <dl class="my-0 grid grid-cols-2 gap-6 sm:gap-y-0 md:flex md:gap-0">
          <div class="relative flex flex-col justify-end items-center order-1 aspect-[162/52] bg-center bg-no-repeat bg-[length:100%_100%] bg-[url('/public/images/trapezoid-outlined.svg')] sm:justify-center md:order-none md:flex-1">
            <dt class="text-[clamp(12px,calc(12px+4*((100vw-375px)/(768-375))),16px)] xl:text-[clamp(16px,calc(16px+2*((100vw-1280px)/(1536-1280))),18px)] font-light ml-0">
              <strong>@lang('about.statistics.dt1')</strong>
            </dt>
            <dd class="text-[calc(14px+10*((100vw-375px)/(768-375)))] md:text-[calc(24px+10*((100vw-768px)/(1280-768)))] xl:text-[clamp(34px,calc(34px+6*((100vw-1280px)/(1536-1280))),40px)]">
              @lang('about.statistics.dd1')
            </dd>
          </div>
          <div class="relative flex flex-col justify-start items-center order-3 col-span-2 w-[calc(50%-12px)] mx-auto aspect-[162/52] before:bg-center before:bg-no-repeat before:absolute before:-z-10 before:w-full before:h-full before:rotate-180 before:bg-[length:100%_100%] before:bg-[url('/public/images/trapezoid-outlined.svg')]  sm:justify-center md:col-span-1 md:before:bg-[url('/public/images/trapezoid.svg')] md:order-none md:w-auto md:mx-[calc(-7%+4px)] md:flex-1 xl:mx-[calc(-7%+8px)]">
            <dt class="text-[clamp(12px,calc(12px+4*((100vw-375px)/(768-375))),16px)] xl:text-[clamp(16px,calc(16px+2*((100vw-1280px)/(1536-1280))),18px)] font-light ml-0">
              <strong>@lang('about.statistics.dt2')</strong>
            </dt>
            <dd class="text-[calc(14px+10*((100vw-375px)/(768-375)))] md:text-[calc(24px+10*((100vw-768px)/(1280-768)))] xl:text-[clamp(34px,calc(34px+6*((100vw-1280px)/(1536-1280))),40px)]">
              @lang('about.statistics.dd2')
            </dd>
          </div>
          <div class="flex flex-col justify-end items-center order-2 aspect-[162/52] bg-center bg-no-repeat bg-[length:100%_100%] bg-[url('/public/images/trapezoid-outlined.svg')] sm:justify-center md:order-none md:flex-1">
            <dt class="text-[clamp(12px,calc(12px+4*((100vw-375px)/(768-375))),16px)] xl:text-[clamp(16px,calc(16px+2*((100vw-1280px)/(1536-1280))),18px)] font-light ml-0">
              <strong>@lang('about.statistics.dt3')</strong>
            </dt>
            <dd class="text-[calc(14px+10*((100vw-375px)/(768-375)))] md:text-[calc(24px+10*((100vw-768px)/(1280-768)))] xl:text-[clamp(34px,calc(34px+6*((100vw-1280px)/(1536-1280))),40px)]">
              @lang('about.statistics.dd3')
            </dd>
          </div>
        </dl>
      </section>

      <section class="relative z-10 container md:mb-16">
        <h3 class="title mt-0 mb-9 md:mb-0">@lang('about.services.title')</h3>

        <ul class="relative z-0 flex flex-col gap-y-3 p-0 -mx-3 m-0 list-none group collapsed overflow-y-hidden md:mx-0 md:grid md:grid-cols-2 md:gap-[1px] md:bg-[url(/public/images/logo.svg)] md:bg-center md:bg-no-repeat md:bg-[length:min(calc(123px+81*((100vw-768px)/512)),239px)_auto] xl:overflow-visible xl:gap-0" data-list="services">
          <li class="relative z-40 flex items-start px-[6%] pt-1 pb-3 min-h-12 duration-300 group/parent md:p-0 md:justify-end md:z-0 xl:mr-[1px]">
            <div class="flex items-center duration-150 gap-x-3 md:absolute md:right-[calc(80px+20*((100vw-768px)/512))] md:bottom-[calc(53px+33*((100vw-768px)/512))] md:flex-row-reverse md:text-right md:gap-[calc(24px+14*((100vw-768px)/512))] md:items-end xl:gap-[min(calc(38px+6*((100vw-1280px)/256)),44px)] xl:group-hover/parent:gap-[min(calc(45px+8*((100vw-1280px)/256)),53px)] xl:bottom-[min(calc(86px+14*((100vw-1280px)/256)),100px)] xl:right-[min(calc(100px+20*((100vw-1280px)/256)),120px)]">
              <svg class="min-w-[30px] duration-150 md:min-w-[calc(36px+11*((100vw-768px)/512))] md:h-auto xl:min-w-[min(calc(47px+8*((100vw-1280px)/256)),55px)] xl:group-hover/parent:min-w-[min(calc(56px+10*((100vw-1280px)/256)),66px)]" width="32" height="32">
                <use href="#legal" />
              </svg>
              <div>
                <h4 class="mt-0 mb-1 font-normal duration-150 leading-[1.2] text-[calc(14px+2*((100vw-375px)/393))] md:text-[calc(16px+2*((100vw-768px)/512))] md:mb-2 xl:text-[clamp(18px,calc(18px+2*((100vw-1280px)/256)),20px)] xl:group-hover/parent:text-[min(calc(20px+4*((100vw-1280px)/256)),24px)]">@lang('about.services.item1.title')</h4>
                <p class="leading-none my-0 font-light duration-150 text-[calc(12px+2*((100vw-375px)/393))] md:whitespace-pre-line md:ml-auto md:text-[calc(14px+2*((100vw-768px)/512))] xl:text-[clamp(16px,calc(16px+2*((100vw-1280px)/256)),18px)] xl:group-hover/parent:text-[min(calc(18px+3*((100vw-1280px)/256)),21px)]">@lang('about.services.item1.description')</p>
              </div>
            </div>
            {{-- <svg class="absolute left-0 top-0 -z-10 w-full h-full md:hidden">
              <use href="#platform" />
            </svg> --}}

            {{-- <svg class="hidden md:block md:w-[calc(203px+135*((100vw-768px)/512))] md:h-auto xl:w-[min(calc(338px+56*((100vw-1280px)/256)),394px)] xl:duration-150 xl:[stroke-opacity:0] xl:group-hover/parent:[stroke-opacity:100]" width="203" height="179" viewBox="0 0 203 179" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.9539 164.908C0.316937 163.223 -3.21074 149.676 5.25353 143.017L182.683 3.43621C190.784 -2.93686 202.666 2.84057 202.656 13.1481L202.577 96.904C202.574 100.851 200.683 104.558 197.49 106.877L150.549 140.982L102.663 175.773C100.015 177.697 96.7108 178.49 93.4777 177.978L10.9539 164.908Z" fill="url(#paint0_linear_2279_6407)" stroke="url(#paint1_linear_2279_6407)" stroke-width="0.4" stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_2279_6407" x1="103.18" y1="73.2053" x2="151.868" y2="140.219" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#1F2937" stop-opacity="0" />
                  <stop offset="1" stop-color="#D9D9D9" stop-opacity="0.05" />
                </linearGradient>
                <linearGradient id="paint1_linear_2279_6407" x1="152.697" y1="140.43" x2="95.6999" y2="70.5765" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#D0BD96" />
                  <stop offset="1" stop-color="#1F2937" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg> --}}
          </li>

          <li class="relative z-30 flex items-start px-[6%] pt-1 pb-3 min-h-12 duration-300 group/parent md:p-0 md:z-0 md:!mt-0 xl:ml-[1px]">
            <div class="flex items-center duration-150 gap-x-3 md:absolute md:left-[calc(64px+20*((100vw-768px)/512))] md:bottom-[calc(53px+33*((100vw-768px)/512))] md:gap-[calc(24px+14*((100vw-768px)/512))] md:items-end xl:gap-[min(calc(38px+6*((100vw-1280px)/256)),44px)] xl:group-hover/parent:gap-[min(calc(45px+8*((100vw-1280px)/256)),53px)] xl:left-[min(calc(84px+20*((100vw-1280px)/256)),104px)] xl:bottom-[min(calc(86px+14*((100vw-1280px)/256)),100px)]">
              <svg class="min-w-[30px] duration-150 md:min-w-[calc(36px+16*((100vw-768px)/512))] md:h-auto xl:min-w-[min(calc(52px+9*((100vw-1280px)/256)),61px)] xl:group-hover/parent:min-w-[min(calc(63px+10*((100vw-1280px)/256)),73px)]" width="32" height="32">
                <use href="#idea" />
              </svg>
              <div>
                <h4 class="duration-150 mt-0 mb-1 font-normal leading-[1.2] text-[calc(14px+2*((100vw-375px)/393))] md:text-[calc(16px+2*((100vw-768px)/512))] md:mb-2 xl:text-[clamp(18px,calc(18px+2*((100vw-1280px)/256)),20px)] xl:group-hover/parent:text-[min(calc(20px+4*((100vw-1280px)/256)),24px)]">@lang('about.services.item2.title')</h4>
                <p class="duration-150 leading-none my-0 font-light text-[calc(12px+2*((100vw-375px)/393))] md:whitespace-pre-line md:ml-auto md:text-[calc(14px+2*((100vw-768px)/512))] xl:text-[clamp(16px,calc(16px+2*((100vw-1280px)/256)),18px)] xl:group-hover/parent:text-[min(calc(18px+3*((100vw-1280px)/256)),21px)]">@lang('about.services.item2.description')</p>
              </div>
            </div>
            {{-- <svg class="absolute left-0 top-0 -z-10 w-full h-full md:hidden">
              <use href="#platform" />
            </svg> --}}

            {{-- <svg class="hidden md:block md:w-[calc(203px+135*((100vw-768px)/512))] md:h-auto xl:w-[min(calc(338px+56*((100vw-1280px)/256)),394px)] xl:duration-150 xl:[stroke-opacity:0] xl:group-hover/parent:[stroke-opacity:100]" width="204" height="179" viewBox="0 0 204 179" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M192.566 164.908C203.203 163.223 206.73 149.676 198.266 143.017L20.8368 3.43621C12.7357 -2.93687 0.853895 2.84056 0.863559 13.1481L0.942072 96.904C0.945772 100.851 2.83674 104.558 6.0297 106.877L52.9702 140.982L100.857 175.773C103.505 177.697 106.809 178.49 110.042 177.978L192.566 164.908Z" fill="url(#paint0_linear_2279_6422)" stroke="url(#paint1_linear_2279_6422)" stroke-width="0.4" stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_2279_6422" x1="100.34" y1="73.2053" x2="51.6516" y2="140.219" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#1F2937" stop-opacity="0" />
                  <stop offset="1" stop-color="#D9D9D9" stop-opacity="0.05" />
                </linearGradient>
                <linearGradient id="paint1_linear_2279_6422" x1="50.8228" y1="140.43" x2="107.82" y2="70.5765" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#D0BD96" />
                  <stop offset="1" stop-color="#1F2937" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg> --}}
          </li>

          <li class="relative z-20 flex items-start px-[6%] pt-1 pb-3 min-h-12 duration-300 group/parent md:p-0 md:ml-[calc(67px+45*((100vw-768px)/512))] md:!-mt-[calc(14px+10*((100vw-768px)/512))] xl:!-mt-[min(calc(22px+4*((100vw-1280px)/256)),26px)] xl:ml-[min(calc(114px+18*((100vw-1280px)/256)),132px)]">
            <div class="flex items-center duration-150 gap-x-3 md:absolute md:left-[min(calc(40px+24*((100vw-768px)/512)),76px)] md:pb-[calc(32*((100vw-768px)/512))] md:top-1/2 md:gap-[calc(24px+14*((100vw-768px)/512))] md:translate-y-[-78%] xl:gap-[min(calc(38px+6*((100vw-1280px)/256)),44px)] xl:group-hover/parent:gap-[min(calc(45px+8*((100vw-1280px)/256)),53px)] xl:pb-0 xl:-translate-y-[120%] xl:group-hover/parent:-translate-y-[110%]">
              <svg class="min-w-[30px] duration-150 md:min-w-[calc(36px+15*((100vw-768px)/512))] md:h-auto xl:min-w-[min(calc(51px+8*((100vw-1280px)/256)),59px)] xl:group-hover/parent:min-w-[min(calc(61px+10*((100vw-1280px)/256)),71px)]" width="32" height="32">
                <use href="#community" />
              </svg>
              <div>
                <h4 class="duration-150 mt-0 mb-1 font-normal leading-[1.2] text-[calc(14px+2*((100vw-375px)/393))] md:text-[calc(16px+2*((100vw-768px)/512))] md:mb-2 xl:text-[clamp(18px,calc(18px+2*((100vw-1280px)/256)),20px)] xl:group-hover/parent:text-[min(calc(20px+4*((100vw-1280px)/256)),24px)]">@lang('about.services.item3.title')</h4>
                <p class="duration-150 leading-none my-0 font-light text-[calc(12px+2*((100vw-375px)/393))] xl:whitespace-pre-line md:ml-auto md:text-[calc(14px+2*((100vw-768px)/512))] xl:text-[clamp(16px,calc(16px+2*((100vw-1280px)/256)),18px)] xl:group-hover/parent:text-[min(calc(18px+3*((100vw-1280px)/256)),21px)]">@lang('about.services.item3.description')</p>
              </div>
            </div>
            {{-- <svg class="absolute left-0 top-0 -z-10 w-full h-full md:hidden">
              <use href="#platform" />
            </svg> --}}

            {{-- <svg class="hidden md:block md:w-[calc(143px+94*((100vw-768px)/512))] md:h-auto xl:w-[min(calc(237px+39*((100vw-1280px)/256)),276px)] xl:duration-150 xl:[stroke-opacity:0] xl:group-hover/parent:[stroke-opacity:100]" width="142" height="224" viewBox="0 0 142 224" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M39.8958 216.433C44.7203 225.901 58.4594 225.252 62.3692 215.37L140.814 17.111C144.329 8.22856 136.854 -1.10782 127.418 0.37815L46.4486 13.129C41.8601 13.8516 38.0658 17.0892 36.6304 21.507L19.0992 75.4625L0.808237 131.756C-0.203286 134.869 0.0633121 138.257 1.54938 141.173L39.8958 216.433Z" fill="url(#paint0_linear_2279_6397)" stroke="url(#paint1_linear_2279_6397)" stroke-width="0.4" stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_2279_6397" x1="98.1963" y1="99.5696" x2="19.4173" y2="73.9728" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#1F2937" stop-opacity="0" />
                  <stop offset="1" stop-color="#D9D9D9" stop-opacity="0.05" />
                </linearGradient>
                <linearGradient id="paint1_linear_2279_6397" x1="19.4717" y1="73.7491" x2="103.467" y2="109.104" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#D0BD96" />
                  <stop offset="1" stop-color="#1F2937" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg> --}}
          </li>

          <li class="relative z-10 flex items-start px-[6%] pt-1 pb-3 min-h-12 duration-300 group/parent md:p-0 md:z-10 md:col-start-1 md:row-start-2 md:justify-end md:mr-[calc(66px+44*((100vw-768px)/512))] md:!-mt-[calc(14px+9*((100vw-768px)/512))] xl:!-mt-[min(calc(21px+3*((100vw-1280px)/256)),24px)] xl:mr-[min(calc(113px+17*((100vw-1280px)/256)),130px)]">
            <div class="flex items-center duration-150 gap-x-3 md:absolute md:right-[min(calc(40px+24*((100vw-768px)/512)),76px)] md:top-1/2 md:pb-[calc(32*((100vw-768px)/512))] md:gap-[calc(24px+14*((100vw-768px)/512))] md:translate-y-[-78%] md:flex-row-reverse md:text-right xl:gap-[min(calc(38px+6*((100vw-1280px)/256)),44px)] xl:group-hover/parent:gap-[min(calc(45px+8*((100vw-1280px)/256)),53px)] xl:pb-0 xl:-translate-y-[120%] xl:group-hover/parent:-translate-y-[110%]">
              <svg class="min-w-[30px] duration-150 md:min-w-[calc(36px+14*((100vw-768px)/512))] md:h-auto xl:min-w-[min(calc(50px+9*((100vw-1280px)/256)),59px)] xl:group-hover/parent:min-w-[min(calc(60px+10*((100vw-1280px)/256)),70px)]" width="32" height="32">
                <use href="#finance" />
              </svg>
              <div>
                <h4 class="duration-150 mt-0 mb-1 font-normal leading-[1.2] text-[calc(14px+2*((100vw-375px)/393))] md:text-[calc(16px+2*((100vw-768px)/512))] md:mb-2 xl:text-[clamp(18px,calc(18px+2*((100vw-1280px)/256)),20px)] xl:group-hover/parent:text-[min(calc(20px+4*((100vw-1280px)/256)),24px)]">@lang('about.services.item4.title')</h4>
                <p class="duration-150 leading-none my-0 font-light text-[calc(12px+2*((100vw-375px)/393))] md:whitespace-pre-line md:ml-auto md:text-[calc(14px+2*((100vw-768px)/512))] xl:text-[clamp(16px,calc(16px+2*((100vw-1280px)/256)),18px)] xl:group-hover/parent:text-[min(calc(18px+3*((100vw-1280px)/256)),21px)]">@lang('about.services.item4.description')</p>
              </div>
            </div>
            {{-- <svg class="absolute left-0 top-0 -z-10 w-full h-full md:hidden">
              <use href="#platform" />
            </svg> --}}

            {{-- <svg class="hidden md:block md:w-[calc(143px+94*((100vw-768px)/512))] md:h-auto xl:w-[min(calc(237px+39*((100vw-1280px)/256)),276px)] xl:duration-150 xl:[stroke-opacity:0] xl:group-hover/parent:[stroke-opacity:100]" width="143" height="224" viewBox="0 0 143 224" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M102.218 216.433C97.3939 225.901 83.6549 225.252 79.745 215.37L1.29992 17.111C-2.21458 8.22856 5.2602 -1.10782 14.6963 0.37815L95.6657 13.129C100.254 13.8516 104.048 17.0892 105.484 21.507L123.015 75.4625L141.306 131.756C142.318 134.869 142.051 138.257 140.565 141.173L102.218 216.433Z" fill="url(#paint0_linear_2279_6380)" stroke="url(#paint1_linear_2279_6380)" stroke-width="0.4" stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_2279_6380" x1="43.918" y1="99.5696" x2="122.697" y2="73.9728" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#1F2937" stop-opacity="0" />
                  <stop offset="1" stop-color="#D9D9D9" stop-opacity="0.05" />
                </linearGradient>
                <linearGradient id="paint1_linear_2279_6380" x1="122.643" y1="73.7491" x2="38.6472" y2="109.104" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#D0BD96" />
                  <stop offset="1" stop-color="#1F2937" stop-opacity="0" />
                </linearGradient>
              </defs>
            </svg> --}}
          </li>

          <li class="relative z-0 flex items-start px-[6%] pt-1 pb-3 min-h-12 duration-300 group/parent md:w-[calc(220px+80*((100vw-768px)/512))] md:mx-auto md:p-0 md:col-span-2 md:justify-center md:!-mt-[calc(88px+56*((100vw-768px)/512))] xl:!-mt-[min(calc(144px+20*((100vw-1280px)/256)),164px)] xl:h-[min(calc(172px+28*((100vw-1280px)/256)),200px)]">
            <div class="flex items-center gap-x-3 md:flex-col md:text-center">
              <svg class="min-w-[30px] duration-150 md:min-w-[calc(36px+12*((100vw-768px)/512))] md:h-auto md:mt-[calc(28px+6*((100vw-768px)/512))] md:mb-[calc(20px+10*((100vw-768px)/512))] xl:min-w-[min(calc(48px+8*((100vw-1280px)/256)),56px)] xl:mt-[min(calc(34px+6*((100vw-1280px)/256)),40px)] xl:mb-[min(calc(30px+6*((100vw-1280px)/256)),36px)] xl:group-hover/parent:min-w-[min(calc(58px+10*((100vw-1280px)/256)),68px)]" width="32" height="32">
                <use href="#partnership" />
              </svg>
              <div>
                <h4 class="duration-150 mt-0 mb-1 font-normal leading-[1.2] text-[calc(14px+2*((100vw-375px)/393))] md:text-[calc(16px+2*((100vw-768px)/512))] md:mb-2 xl:text-[clamp(18px,calc(18px+2*((100vw-1280px)/256)),20px)] xl:group-hover/parent:text-[min(calc(20px+4*((100vw-1280px)/256)),24px)]">@lang('about.services.item5.title')</h4>
                <p class="duration-150 leading-none my-0 font-light text-[calc(12px+2*((100vw-375px)/393))] md:whitespace-pre-line md:mx-auto md:text-[calc(14px+2*((100vw-768px)/512))] xl:text-[clamp(16px,calc(16px+2*((100vw-1280px)/256)),18px)] xl:group-hover/parent:text-[min(calc(18px+3*((100vw-1280px)/256)),21px)]">@lang('about.services.item5.description')</p>
              </div>
            </div>
            {{-- <svg class="absolute left-0 top-0 -z-10 w-full h-full md:hidden">
              <use href="#platform" />
            </svg> --}}

            {{-- <svg class="hidden md:block md:absolute md:w-[calc(204px+136*((100vw-768px)/512))] md:h-auto xl:w-[min(calc(340px+56*((100vw-1280px)/256)),396px)] xl:duration-150 xl:[stroke-opacity:0] xl:group-hover/parent:[stroke-opacity:100]" width="198" height="84" viewBox="0 0 198 84" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M195.613 65.6314C199.723 73.8382 193.756 83.5 184.577 83.5H13.4132C4.25202 83.5 -1.71609 73.8708 2.36001 65.6664L32.5 5V5C33.4023 2.59393 35.7024 0.999924 38.2721 0.999924H159.341C161.739 0.999924 163.93 2.35519 165 4.5V4.5L195.613 65.6314Z" fill="url(#paint0_linear_4149_9651)" stroke="url(#paint1_linear_4149_9651)" stroke-width="0.4" stroke-linejoin="round" />
              <defs>
                <linearGradient id="paint0_linear_4149_9651" x1="99.9453" y1="83.6699" x2="99.9453" y2="0.84208" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#1F2937" stop-opacity="0" />
                  <stop offset="1" stop-color="#D9D9D9" stop-opacity="0.05" />
                </linearGradient>
                <linearGradient id="paint1_linear_4149_9651" x1="98.895" y1="83.6699" x2="98.895" y2="0.999925" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#1F2937" stop-opacity="0" />
                  <stop offset="1" stop-color="#D0BD96" />
                </linearGradient>
              </defs>
            </svg> --}}
          </li>
        </ul>
      </section>
    </section>
