<form class="fixed left-0 top-0 z-50 w-screen h-screen bg-platinum/5 backdrop-blur-lg py-20 text-platinum overflow-y-auto duration-150 invisible opacity-0 no-scrollbar" data-form="universal">
  <div class="container bg-platinum/10 backdrop-blur-lg rounded-xl px-2 py-6 !max-w-[580px]">
    <h2 class="text-[24px] leading-none font-normal mt-0 mb-12">Заполнить форму</h2>

    <div class="flex flex-col gap-2 mb-6">
      <label class="flex">
        <span class="sr-only">Имя</span>
        <input class="flex items-center px-4 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" name="name" type="text" placeholder="Имя *" required>
      </label>

      <label class="flex">
        <span class="sr-only">Фамилия</span>
        <input class="flex items-center px-4 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" name="surname" type="text" placeholder="Фамилия *" required>
      </label>

      <label class="flex">
        <span class="sr-only">Телефон</span>
        <input class="flex items-center px-4 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" name="tel" type="tel" placeholder="Телефон *" required>
      </label>

      <label class="flex">
        <span class="sr-only">Электронная почта</span>
        <input class="flex items-center px-4 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" name="email" type="email" placeholder="Электронная почта *" required>
      </label>

      <div class="bg-platinum/20 border-platinum border-[0.5px] rounded-lg group">
        <label class="flex relative z-0">
          <span class="sr-only">Кто вы</span>
          <input class="flex items-center px-4 cursor-pointer w-full h-12 text-[#333333] bg-transparent border-none text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" name="me" type="text" placeholder="Я... *" readonly required onclick="this.closest('div').classList.toggle('dropdown-shown')">
          <svg class="absolute right-5 top-1/2 -translate-y-1/2 duration-150 group-[.dropdown-shown]:scale-y-[-1]" width="12" height="7">
            <use xlink:href="#caret-down" />
          </svg>
        </label>

        <ul class="list-none p-0 m-0 flex flex-col overflow-hidden max-h-0 duration-150 group-[.dropdown-shown]:max-h-[147px]" onclick="this.closest('div').classList.toggle('dropdown-shown')">
          <li class="flex border-t">
            <button class="flex w-full duration-150 transition-colors items-center px-5 bg-transparent py-0 border-none h-12 text-[16px] font-light text-inherit hover:!bg-platinum/50 hover:font-normal" type="button" onclick="this.closest('div').querySelector('input').setAttribute('value', 'Арендатор')">
              Арендатор
            </button>
          </li>
          <li class="flex border-t">
            <button class="flex w-full duration-150 transition-colors items-center px-5 bg-transparent py-0 border-none h-12 text-[16px] font-light text-inherit hover:!bg-platinum/50 hover:font-normal" type="button" onclick="this.closest('div').querySelector('input').setAttribute('value', 'Арендодатель')">
              Арендодатель
            </button>
          </li>
          <li class="flex border-t">
            <button class="flex w-full duration-150 transition-colors items-center px-5 bg-transparent py-0 border-none h-12 text-[16px] font-light text-inherit hover:!bg-platinum/50 hover:font-normal" type="button" onclick="this.closest('div').querySelector('input').setAttribute('value', 'Брокер')">
              Брокер
            </button>
          </li>
        </ul>
      </div>

       <div class="bg-platinum/20 border-platinum border-[0.5px] rounded-lg group">
        <label class="flex relative z-0">
          <span class="sr-only">Услуга или проект</span>
          <input class="flex items-center px-4 cursor-pointer w-full h-12 text-[#333333] bg-transparent border-none text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" name="service" type="text" placeholder="Услуга или проект... *" readonly required onclick="this.closest('div').classList.toggle('dropdown-shown')">
          <svg class="absolute right-5 top-1/2 -translate-y-1/2 duration-150 group-[.dropdown-shown]:scale-y-[-1]" width="12" height="7">
            <use xlink:href="#caret-down" />
          </svg>
        </label>

        <ul class="list-none p-0 m-0 flex flex-col overflow-hidden max-h-0 duration-150 group-[.dropdown-shown]:max-h-[147px]" onclick="this.closest('div').classList.toggle('dropdown-shown')">
          <li class="flex border-t">
            <button class="flex w-full duration-150 transition-colors items-center px-5 bg-transparent py-0 border-none h-12 text-[16px] font-light text-inherit hover:!bg-platinum/50 hover:font-normal" type="button" onclick="this.closest('div').querySelector('input').setAttribute('value', 'Услуга')">
              Услуга
            </button>
          </li>
          <li class="flex border-t">
            <button class="flex w-full duration-150 transition-colors items-center px-5 bg-transparent py-0 border-none h-12 text-[16px] font-light text-inherit hover:!bg-platinum/50 hover:font-normal" type="button" onclick="this.closest('div').querySelector('input').setAttribute('value', 'Проект')">
              Проект
            </button>
          </li>
          <li class="flex border-t">
            <button class="flex w-full duration-150 transition-colors items-center px-5 bg-transparent py-0 border-none h-12 text-[16px] font-light text-inherit hover:!bg-platinum/50 hover:font-normal" type="button" onclick="this.closest('div').querySelector('input').setAttribute('value', 'Услуга + проект')">
              Услуга + проект
            </button>
          </li>
        </ul>
      </div>

      <label class="flex">
        <span class="sr-only">Комментарий</span>
        <textarea class="flex items-center px-4 py-3 resize-y min-h-12 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:min-h-14 md:h-14 md:text-[18px] md:py-[15px]" name="comment" placeholder="Комментарий"></textarea>
      </label>
    </div>

    <button class="flex relative z-0 overflow-hidden items-center px-4 w-full bg-platinum/20 uppercase justify-center mb-6 border-platinum text-inherit border-[0.5px] rounded-lg h-12 text-[16px] cursor-pointer duration-150 hover:border-khaki hover:bg-khaki hover:text-[#333] md:h-14 md:text-[18px]" type="submit">
      Отправить
      <span class="smart-anim smart-left"></span>
    </button>

    <p class="text-xs leading-none m-0 font-light">
      Нажимая на кнопку «Отправить», вы даете <a class="text-inherit" href="#" target="_blank">согласие на обработку</a> персональных данных и соглашаетесь c <a class="text-inherit" href="#" target="_blank">политикой конфиденциальности</a>
    </p>

    <button class="absolute right-6 top-6 cursor-pointer flex border-none bg-transparent p-0" type="button" data-close-form>
      <span class="sr-only">Скрыть</span>
      <svg width="26" height="24">
        <use xlink:href="#modal-close" />
      </svg>
    </button>
  </div>
</form>
