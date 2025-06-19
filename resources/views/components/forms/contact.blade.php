<form class="fixed left-0 top-0 z-50 w-screen h-screen bg-platinum/5 backdrop-blur-lg py-20 text-platinum overflow-y-auto duration-150 invisible opacity-0 no-scrollbar" id="contact-form">
  <div class="container bg-platinum/10 backdrop-blur-lg rounded-xl px-2 py-6 !max-w-[580px]">
    <h2 class="text-[24px] leading-none font-normal mt-0 mb-12">@lang('form.contact.title')</h2>

    <div class="flex flex-col gap-2 mb-6">
      <p>
        <label class="sr-only" for="contact-form-name">@lang('form.contact.name')</label>
        <input class="flex items-center px-4 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" id="contact-form-name" name="name" type="text" placeholder="@lang('form.contact.name') *" required>
      </p>

      <p>
        <label class="sr-only" for="contact-form-surname">@lang('form.contact.surname')</label>
        <input class="flex items-center px-4 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" id="contact-form-surname" name="surname" type="text" placeholder="@lang('form.contact.surname') *" required>
      </p>

      <p>
        <label class="sr-only" for="contact-form-tel">@lang('form.contact.tel')</label>
        <input class="flex items-center px-4 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" id="contact-form-tel" name="tel" type="tel" placeholder="@lang('form.contact.tel') *" required>
      </p>

      <p>
        <label class="sr-only" for="contact-form-email">@lang('form.contact.email')</label>
        <input class="flex items-center px-4 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" id="contact-form-email" name="email" type="email" placeholder="@lang('form.contact.email') *" required>
      </p>

      <div class="bg-platinum/20 border-platinum border-[0.5px] rounded-lg group">
        <p class="flex relative z-0">
          <label class="sr-only" for="contact-form-me">@lang('form.contact.me')</label>
          <select id="contact-form-me" name="me" required>
            <option value="" disabled selected hidden>@lang('form.contact.me')... *</option>
            @foreach (__('form.contact.meOptions') as $option)
              <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
          </select>
          {{-- <input class="flex items-center px-4 cursor-pointer w-full h-12 text-[#333333] bg-transparent border-none text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" name="me" type="text" placeholder="Я... *" readonly required onclick="this.closest('div').classList.toggle('dropdown-shown')"> --}}
          <svg class="absolute right-5 top-1/2 -translate-y-1/2 duration-150 group-[.dropdown-shown]:scale-y-[-1]" width="12" height="7">
            <use href="#caret-down" />
          </svg>
        </p>

        {{-- <ul class="list-none p-0 m-0 flex flex-col overflow-hidden max-h-0 duration-150 group-[.dropdown-shown]:max-h-[147px]" onclick="this.closest('div').classList.toggle('dropdown-shown')">
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
        </ul> --}}
      </div>

      <div class="bg-platinum/20 border-platinum border-[0.5px] rounded-lg group">
        <p class="flex relative z-0">
          <label class="sr-only" for="contact-form-service">@lang('form.contact.service')</label>
          <select id="contact-form-service" name="service" required>
            <option value="" disabled selected hidden>@lang('form.contact.service')... *</option>
            <optgroup label="@lang('nav.renters')">
              @foreach (range(1, 5) as $key)
                <option value="@lang("renters.services.item$key")">@lang("renters.services.item$key")</option>
              @endforeach
            </optgroup>
            <optgroup label="@lang('nav.owners')">
              @foreach (range(1, 5) as $key)
                <option value="@lang("owners.services.item$key")">@lang("owners.services.item$key")</option>
              @endforeach
            </optgroup>
            <optgroup label="@lang('nav.brokers')">
              @foreach (range(1, 5) as $key)
                <option value="@lang("brokers.projects.item$key.title")">@lang("brokers.projects.item$key.title")</option>
              @endforeach
            </optgroup>
          </select>
          {{-- <input class="flex items-center px-4 cursor-pointer w-full h-12 text-[#333333] bg-transparent border-none text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:h-14 md:text-[18px]" name="service" type="text" placeholder="Услуга или проект... *" readonly required onclick="this.closest('div').classList.toggle('dropdown-shown')"> --}}
          <svg class="absolute right-5 top-1/2 -translate-y-1/2 duration-150 group-[.dropdown-shown]:scale-y-[-1]" width="12" height="7">
            <use href="#caret-down" />
          </svg>
        </p>

        {{-- <ul class="list-none p-0 m-0 flex flex-col overflow-hidden max-h-0 duration-150 group-[.dropdown-shown]:max-h-[147px]" onclick="this.closest('div').classList.toggle('dropdown-shown')">
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
        </ul> --}}
      </div>

      <p class="flex">
        <label class="sr-only" for="contact-form-comment">@lang('form.contact.comment')</label>
        <textarea class="flex items-center px-4 py-3 resize-y min-h-12 w-full bg-platinum/20 border-platinum border-[0.5px] rounded-lg h-12 text-[#333333] text-[16px] focus:outline-0 placeholder:text-platinum placeholder:font-light md:min-h-14 md:h-14 md:text-[18px] md:py-[15px]" id="contact-form-comment" name="comment" placeholder="@lang('form.contact.comment')" rows="4" cols="32"></textarea>
      </p>
    </div>

    <button class="flex relative z-0 overflow-hidden items-center px-4 w-full bg-platinum/20 uppercase justify-center mb-6 border-platinum text-inherit border-[0.5px] rounded-lg h-12 text-[16px] cursor-pointer duration-150 hover:border-khaki hover:bg-khaki hover:text-[#333] md:h-14 md:text-[18px]" type="submit">
      @lang('form.contact.submit')
      {{-- <span class="smart-anim smart-left"></span> --}}
    </button>

    <p class="text-xs leading-none m-0 font-light">
      @lang('form.contact.warning')
    </p>

    <button class="absolute right-6 top-6 cursor-pointer flex border-none bg-transparent p-0" type="button" hidden>
      <span class="sr-only">@lang('form.contact.close')</span>
      <svg width="26" height="24">
        <use href="#close" />
      </svg>
    </button>
  </div>
</form>
