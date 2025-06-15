<footer data-footer>
  <div class="container">
    <div class="md:flex md:justify-between md:items-center xl:grid xl:grid-cols-[1fr_153px_1fr]">
      <ul class="fixed left-0 top-[153px] z-20 overflow-auto backdrop-blur-[120px] w-screen h-[calc(100%-153px-128px)] text-inherit flex flex-col list-none m-0 p-0 invisible opacity-0 duration-150 bg-khaki/5 group-[.menu-shown]:visible group-[.menu-shown]:opacity-100 py-4 items-center md:opacity-100 md:visible md:static md:w-auto md:h-auto md:flex-row md:bg-transparent md:py-0 md:gap-x-1 font-light xl:font-normal">
        <li>
          <a class="flex h-7 items-center mb-2 text-inherit no-underline rounded px-[calc(10px+4*((100vw-768px)/512))] md:text-[clamp(16px,calc(16px+4*((100vw-768px)/(1280-768))),20px)] md:mb-0 xl:h-9 xl:px-[calc(14px+2*((100vw-1280px)/(1536-1280)))] 2xl:px-4" href="#renters">
            Арендаторам
          </a>
        </li>
        <li>
          <a class="flex h-7 items-center mb-2 text-inherit no-underline rounded px-[calc(10px+4*((100vw-768px)/512))] md:text-[clamp(16px,calc(16px+4*((100vw-768px)/(1280-768))),20px)] md:mb-0 xl:h-9 xl:px-[calc(14px+2*((100vw-1280px)/(1536-1280)))] 2xl:px-4" href="#owners">
            Арендодателям
          </a>
        </li>
        <li>
          <a class="flex h-7 items-center mb-2 text-inherit no-underline rounded px-[calc(10px+4*((100vw-768px)/512))] md:text-[clamp(16px,calc(16px+4*((100vw-768px)/(1280-768))),20px)] md:mb-0 xl:h-9 xl:px-[calc(14px+2*((100vw-1280px)/(1536-1280)))] 2xl:px-4" href="#brokers">
            Брокерам
          </a>
        </li>
      </ul>

      <a class="hidden w-[153px] h-max xl:flex" href="">
        <img src="{{ asset('/images/safina-molikiyat.svg') }}" width="127" height="16" alt="Сафина моликият">
      </a>

      <ul class="p-0 m-0 list-none md:flex md:items-center md:gap-x-1 xl:justify-end">
        <li>
          <a class="hidden ml-auto text-inherit no-underline items-center h-7 rounded px-2 font-light md:flex md:text-[clamp(16px,calc(16px+4*((100vw-768px)/(1280-768))),20px)] xl:font-normal xl:h-9 xl:px-3" href="tel:+992999999999">
            <svg class="flex mr-[6px] xl:mr-2 xl:w-4 xl:h-4" width="13" height="13">
              <use xlink:href="#call" />
            </svg>
            999 99 99 99
          </a>
        </li>
        <li>
          <a class="flex items-center font-light justify-center h-8 px-4 rounded bg-platinum/20 text-inherit no-underline gap-2 duration-150 hover:text-khaki md:text-[clamp(16px,calc(16px+4*((100vw-768px)/(1280-768))),20px)] xl:font-normal" href="https://yandex.tj/maps/10318/dushanbe/house/YkEYcQ5hSEIHQF1ifXl2eHtgZw==/?ll=68.791454%2C38.579576&z=18" target="_blank">
            <svg width="14" height="19">
              <use xlink:href="#gps" />
            </svg>
            ул. Пушкина 40/1
          </a>
        </li>
      </ul>
    </div>

    <hr class="mt-2 border-none h-[1px] bg-khaki rounded-full mb-[calc(24px+8*((100vw-375px)/393))] md:mb-[min(calc(32px+32*((100vw-768px)/512)),64px)]">

    <ul class="flex justify-center list-none pl-0 gap-x-4 m-0 md:gap-x-2">
      <li>
        <a class="flex w-5 h-5 text-inherit duration-150 hover:text-khaki md:w-max md:h-max" href="#" target="_blank">
          <svg class="md:flex md:min-w-[min(calc(20px+12*((100vw-768px)/512)),32px)] md:h-[min(calc(20px+12*((100vw-768px)/512)),32px)]" width="20" height="20">
            <use xlink:href="#telegram" />
          </svg>
          <span class="sr-only">Телеграм</span>
        </a>
      </li>
      <li>
        <a class="flex w-5 h-5 text-inherit duration-150 hover:text-khaki md:w-max md:h-max" href="#" target="_blank">
          <svg class="md:flex md:min-w-[min(calc(20px+12*((100vw-768px)/512)),32px)] md:h-[min(calc(20px+12*((100vw-768px)/512)),32px)]" width="20" height="20">
            <use xlink:href="#instagram" />
          </svg>
          <span class="sr-only">Инстаграм</span>
        </a>
      </li>
    </ul>

    <p class="text-center mt-4 mb-40 text-[calc(10px+2*((100vw-375px)/393))] font-montserrat md:mb-6 md:text-[min(calc(12px+2*((100vw-768px)/512)),14px)] xl:mb-10">
      © {{ date('Y') }} Safina Molikiyat.
    </p>
  </div>

  <div class="fixed bottom-0 left-0 z-40 flex items-center w-screen h-32 bg-[linear-gradient(to_bottom,transparent_0,#1f2937_24%)] group-[.menu-shown]:bg-onyx md:hidden xl:flex xl:h-0">
    <ul class="flex container justify-between list-none p-0 m-0 duration-300 xl:relative xl:opacity-0 xl:invisible">
      <li class="xl:hidden">
        <a class="flex w-max h-max text-inherit p-[10px] duration-150 hover:text-khaki" href="tel:+992999999999">
          <svg width="16" height="16">
            <use xlink:href="#call" />
          </svg>
          <span class="sr-only">
            999 99 99 99
          </span>
        </a>
      </li>
      <li class="xl:absolute xl:bottom-[40vh] xl:translate-x-1/2 xl:translate-y-1/2 xl:-right-[min(calc(32*((100vw-1280px)/256)),32px)]">
        <a class="email" href="mailto:noreply@safina-molikiyat.tj">
          <svg class="email__icon xl:flex xl:min-w-[min(calc(26px+4*((100vw-1280px)/256)),30px)] xl:h-auto" width="21" height="14">
            <use xlink:href="#mail" />
          </svg>
          <span class="sr-only">
            noreply@safina-molikiyat.tj
          </span>
          <span class="email__dot xl:!w-2 xl:!h-2 2xl:!w-[10px] 2xl:!h-[10px]"></span>
        </a>
      </li>
      <li class="hidden xl:flex xl:absolute xl:right-full xl:bottom-[40vh] xl:translate-y-1/2 xl:w-5 xl:h-[173px] xl:mr-[min(calc(32*((100vw-1280px)/256)),32px)]">
        <button class="absolute left-full bottom-0 origin-bottom-left -rotate-90 cursor-pointer flex items-center gap-x-[10px] border-none bg-transparent p-0 text-inherit font-light text-[min(calc(16px+4*((100vw-1280px)/256)),20px)] leading-none justify-center w-[173px] h-5" id="to-top" type="button">
          <span class="relative z-0 flex p-px">
            <span class="flex w-[min(calc(86px+14*((100vw-1280px)/256)),100px)] h-px rounded-full bg-khaki"></span>
            <span class="scrolled-percent absolute top-0 right-0 min-w-1 h-full rounded-full bg-khaki duration-150"></span>
          </span>
          Наверх
        </button>
      </li>
    </ul>
  </div>
</footer>
