@php
  $text = (object) [
      'title' => __('form.contact.title'),
      'placeholder' => (object) [
          'name' => __('form.contact.name') . ' *',
          'surname' => __('form.contact.surname') . ' *',
          'tel' => __('form.contact.tel') . ' *',
          'email' => __('form.contact.email') . ' *',
          'me' => __('form.contact.me') . '... *',
          'service' => __('form.contact.service') . '... *',
          'comment' => __('form.contact.comment'),
      ],
      'error' => (object) [
          'name' => (object)[
            'required' => __('form.contact.error.name.required')
          ],
          'surname' => (object)[
            'required' => __('form.contact.error.surname.required')
          ],
          'tel' => (object)[
            'required' => __('form.contact.error.tel.required')
          ],
          'email' => (object)[
            'required' => __('form.contact.error.email.required'),
            'email' => __('form.contact.error.email.email'),
          ],
          'me' => (object)[
            'required' => __('form.contact.error.me.required')
          ],
          'service' => (object)[
            'required' => __('form.contact.error.service.required')
          ],
      ],
      'submit' => __('form.contact.submit'),
      'warning' => __('form.contact.warning'),
      'close' => __('form.contact.close'),
      'options' => (object) [
          'me' => __('form.contact.meOptions'),
          'renters' => (array) [__('renters.services.item1'), __('renters.services.item2'), __('renters.services.item3'), __('renters.services.item4'), __('renters.services.item5')],
          'owners' => (array) [__('owners.services.item1'), __('owners.services.item2'), __('owners.services.item3'), __('owners.services.item4'), __('owners.services.item5')],
          'brokers' => (array) [__('brokers.projects.item1.title'), __('brokers.projects.item2.title'), __('brokers.projects.item3.title'), __('brokers.projects.item4.title'), __('brokers.projects.item5.title')],
      ],
  ];
@endphp

<div id="forms" data-contact-form-text="{{ json_encode($text) }}">
  <form class="hidden" action="{{ route('contact') }}" method="post">
    <h2>@lang('form.contact.title')</h2>

    <p>
      <label for="contact-form-name">@lang('form.contact.name')</label>
      <input id="contact-form-name" name="name" type="text" placeholder="@lang('form.contact.name') *" required>
    </p>

    <p>
      <label for="contact-form-surname">@lang('form.contact.surname')</label>
      <input id="contact-form-surname" name="surname" type="text" placeholder="@lang('form.contact.surname') *" required>
    </p>

    <p>
      <label for="contact-form-tel">@lang('form.contact.tel')</label>
      <input id="contact-form-tel" name="tel" type="tel" placeholder="@lang('form.contact.tel') *" required>
    </p>

    <p>
      <label for="contact-form-email">@lang('form.contact.email')</label>
      <input id="contact-form-email" name="email" type="email" placeholder="@lang('form.contact.email') *" required>
    </p>

    <div>
      <p>
        <label for="contact-form-me">@lang('form.contact.me')</label>
        <select id="contact-form-me" name="me" required>
          <option value="" disabled selected hidden>@lang('form.contact.me')... *</option>
          @foreach (__('form.contact.meOptions') as $option)
            <option value="{{ $option }}">{{ $option }}</option>
          @endforeach
        </select>
      </p>
    </div>

    <div>
      <p>
        <label for="contact-form-service">@lang('form.contact.service')</label>
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
      </p>
    </div>

    <p>
      <label for="contact-form-comment">@lang('form.contact.comment')</label>
      <textarea id="contact-form-comment" name="comment" placeholder="@lang('form.contact.comment')" rows="4" cols="32"></textarea>
    </p>

    <button type="submit">
      @lang('form.contact.submit')
    </button>

    <p>
      @lang('form.contact.warning')
    </p>
  </form>
</div>
