<header class="sticky z-40 top-0 pt-[60px] pb-10 bg-[linear-gradient(to_top,transparent_0,#1f2937_40px)] md:static group-[.menu-shown]:bg-onyx xl:text-xl">
  <nav class="container grid grid-cols-[56px_1fr_56px] items-center justify-between gap-y-2 md:flex md:flex-wrap md:gap-y-2 md:gap-x-2 xl:gap-x-1">
    <div class="md:hidden">
      <button class="flex justify-center items-center rounded bg-transparent cursor-pointer border-none p-[0_10px] h-7 app-nav-toggler" type="button">
        <span class="relative flex w-4 h-2 before:content-[''] after:content-[''] duration-150 group-[.menu-shown]:w-3 group-[.menu-shown]:h-[10px]">
          <span class="absolute left-0 top-0 w-full h-[1px] rounded-full bg-platinum duration-150 group-[.menu-shown]:bg-khaki group-[.menu-shown]:rotate-[38deg] group-[.menu-shown]:w-[15px] group-[.menu-shown]:origin-left"></span>
          <span class="absolute left-0 bottom-0 w-1/2 h-[1px] rounded-full bg-platinum duration-150 group-[.menu-shown]:bg-khaki group-[.menu-shown]:-rotate-[38deg] group-[.menu-shown]:w-[15px] group-[.menu-shown]:origin-left"></span>
        </span>
        <span class="sr-only">Скрыть/Показать меню</span>
      </button>
    </div>

    <ul class="fixed left-0 top-[153px] z-20 overflow-auto backdrop-blur-[120px] w-screen h-[calc(100%-153px-128px)] text-inherit flex flex-col list-none m-0 p-0 invisible opacity-0 duration-150 bg-khaki/5 group-[.menu-shown]:visible group-[.menu-shown]:opacity-100 py-4 items-center md:opacity-100 md:visible md:static md:w-auto md:h-auto md:flex-row md:bg-transparent md:py-0 md:gap-x-1 font-light xl:font-normal">
      <li class="md:hidden">
        <a class="flex h-7 items-center mb-2 text-inherit no-underline rounded px-2 md:mb-0 xl:h-9 xl:px-3" href="#about">
          О нас
        </a>
      </li>
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

    <a class="flex w-max h-max mx-auto md:hidden" href="">
      <img src="{{ asset('/images/safina-molikiyat.svg') }}" width="127" height="16" alt="Сафина моликият">
    </a>

    <a class="hidden ml-auto text-inherit no-underline items-center h-7 rounded px-2 font-light md:flex md:text-[clamp(16px,calc(16px+4*((100vw-768px)/(1280-768))),20px)] xl:font-normal xl:h-9 xl:px-3" href="tel:+992999999999">
      <svg class="flex mr-[6px] xl:mr-2 xl:w-4 xl:h-4" width="13" height="13">
        <use xlink:href="#call" />
      </svg>
      999 99 99 99
    </a>

    <div class="lang ml-auto md:ml-0">
      <button class="lang__button" type="button">
        RU
        <svg class="lang__icon" width="7" height="5">
          <use xlink:href="#dropdown-icon" />
        </svg>
      </button>

      <ul class="lang__list">
        <li>
          <button class="lang__button !px-[10px] !justify-start lg:!font-normal" type="button">
            EN
          </button>
        </li>
        <li>
          <button class="lang__button !px-[10px] !justify-start lg:!font-normal" type="button">
            TJ
          </button>
        </li>
      </ul>
    </div>

    <hr class="border-none my-0 h-[1px] bg-khaki rounded-full w-full col-span-3">
  </nav>
</header>
