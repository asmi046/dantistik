    <section class="site-footer" id="site-footer">
        <div class="container">
            <div class="site-footer__top">
                <div class="site-footer__col site-footer__col--logo">
                    <a class="site-footer__logo" href="{{ route('home') }}">
                        <img src="{{ asset('img/logo_white.svg') }}" alt="Логотип" />
                    </a>
                    <x-bvi-btn></x-bvi-btn>
                </div>

                <div class="site-footer__col">
                    <h3>Наши услуги</h3>
                    <x-menues.puncts name="Услуги в подвале"></x-menues.puncts>
                </div>

                <div class="site-footer__col">
                    <h3>Полезная информация</h3>
                    <x-menues.puncts name="Меню в подвале"></x-menues.puncts>
                </div>

                <div class="site-footer__col">
                    <h3>Полезная информация</h3>
                    <a class="site-footer__phone" href="tel:+74712310810">+7 (4712) 310-810</a>
                    <a class="site-footer__email" href="mailto:dantistik46@yandex.ru">dantistik46@yandex.ru</a>
                </div>
            </div>

            <div class="site-footer__bottom">
                <p class="site-footer__disclaimer">Информация, предоставленная на данном сайте не является публичной
                    офертой или коммерческим предложением. Вся информация размещена с ознакомительной целью и не должна
                    использоваться для самостоятельной диагностики либо лечения. Имеются противопоказания, необходима
                    консультация специалиста. Мы используем cookie-файлы для удобства использования данного сайта.
                    Оставаясь
                    на сайте, вы соглашаетесь с использованием файлов cookie.</p>

                <div class="site-footer__links">
                    <a href="#">Согласие на обработку персональных данных</a>
                    <a href="#">Политика в сфере обработки персональных данных</a>
                </div>
            </div>
        </div>
    </section>
