    <section class="contacts" id="contacts">
        <div class="container">
            <div class="contacts__inner">
                <div class="contacts__left">
                    <div class="contacts__content">
                        <h2>{!! $contacts['site_name']->value !!}</h2>
                        <p class="contacts__address">{!! $contacts['adress']->value !!}</p>
                        <a class="contacts__phone"
                            href="tel:+7{{ phone_format($contacts['phone']->value) }}">{!! $contacts['phone']->value !!}</a>
                        <a class="contacts__email" href="mailto:{!! $contacts['email']->value !!}">{!! $contacts['email']->value !!}</a>
                        <h4>Время работы:</h4>
                        <p class="contacts__hours">{!! $contacts['work_time']->value !!}</p>
                    </div>
                </div>

                <div class="contacts__right">
                    <x-map.map-in-page name="{!! $contacts['site_name']->value !!}" geo="{{ $contacts['geo']->value }}"
                        adres="{!! $contacts['adress']->value !!}" phone="+7{{ $contacts['phone']->value }}"></x-map.map-in-page>
                </div>
            </div>
        </div>
    </section>
