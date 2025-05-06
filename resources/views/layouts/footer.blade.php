<footer>
  <div class="relative z-0 h-[120px] overflow-hidden bg-center" style="background-image: url('/images/pattern.svg');">
    <div class="absolute top-0 left-0 z-10 w-full h-full bg-[linear-gradient(to_bottom,#1f2937_0,transparent_50%,#1f2937_100%)]"></div>
  </div>

  <div class="container">
    <a class="flex items-center font-light justify-center h-8 px-4 rounded bg-platinum/20 text-inherit no-underline gap-2 duration-150 hover:text-khaki" href="https://yandex.tj/maps/10318/dushanbe/house/YkEYcQ5hSEIHQF1ifXl2eHtgZw==/?ll=68.791454%2C38.579576&z=18" target="_blank">
      <svg width="14" height="19">
        <use xlink:href="#gps" />
      </svg>
      ул. Пушкина 40/1
    </a>

    <hr class="mt-2 border-none h-[1px] bg-khaki rounded-full mb-6">

    <ul class="flex justify-center list-none pl-0 gap-x-4 m-0">
      <li>
        <a class="flex w-5 h-5 text-inherit duration-150 hover:text-khaki" href="#" target="_blank">
          <svg width="20" height="20">
            <use xlink:href="#telegram" />
          </svg>
          <span class="sr-only">Телеграм</span>
        </a>
      </li>
      <li>
        <a class="flex w-5 h-5 text-inherit duration-150 hover:text-khaki" href="#" target="_blank">
          <svg width="20" height="20">
            <use xlink:href="#instagram" />
          </svg>
          <span class="sr-only">Инстаграм</span>
        </a>
      </li>
    </ul>

    <p class="text-center mt-4 mb-40 text-[10px] font-montserrat">
      © {{ date('Y') }} Safina Molikiyat.
    </p>
  </div>

  <div class="fixed bottom-0 left-0 z-40 flex items-center w-screen h-32 bg-[linear-gradient(to_bottom,transparent_0,#1f2937_24%)] group-[.menu-shown]:bg-onyx md:hidden">
    <ul class="flex container justify-between list-none p-0 m-0">
      <li>
        <a class="flex w-max h-max text-inherit p-[10px] duration-150 hover:text-khaki" href="tel:+992999999999">
          <svg width="16" height="16">
            <use xlink:href="#call" />
          </svg>
          <span class="sr-only">
            999 99 99 99
          </span>
        </a>
      </li>
      <li>
        <a class="email" href="mailto:noreply@safina-molikiyat.tj">
          <svg class="email__icon" width="21" height="14">
            <use xlink:href="#mail" />
          </svg>
          <span class="sr-only">
            noreply@safina-molikiyat.tj
          </span>
          <span class="email__dot"></span>
        </a>
      </li>
    </ul>
  </div>
</footer>
