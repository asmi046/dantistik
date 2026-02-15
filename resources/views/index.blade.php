@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="main-banner" id="main-banner">
        <video class="main-banner__video" autoplay muted loop playsinline preload="auto"
            poster="{{ asset('img/main_b.webp') }}">
            <source src="{{ asset('video/main_video.mp4') }}" type="video/mp4" />
        </video>

        <div class="container">
            <div class="main-banner__content">
                <h1>Современная <strong>стоматология в Курске</strong></h1>
                <p>Новейшее оборудование, передовые технологии опытные врачи</p>
                <a class="button" href="#">Заказать звонок</a>
            </div>
        </div>
    </section>

    <section class="about-company" id="about-company">
        <div class="container">
            <div class="about-company__inner">
                <div class="about-company__left">
                    <h2>Стоматологическая клиника<br>
                        <strong>ДАНТИСТиК</strong>
                    </h2>

                    <div class="about-company__text">
                        {!! file_get_contents(public_path('tmp_data/about.html')) !!}
                    </div>
                </div>

                <div class="about-company__right">
                    <div class="about-company__stats">
                        <div class="about-company__stat">
                            <div class="about-company__stat-number">15+</div>
                            <div class="about-company__stat-text">Лет дарим здоровую улыбку нашим пациентам</div>
                        </div>
                        <div class="about-company__stat">
                            <div class="about-company__stat-number">3578</div>
                            <div class="about-company__stat-text">Давольных пациентов за время работы клиники</div>
                        </div>
                        <div class="about-company__stat">
                            <div class="about-company__stat-number">95</div>
                            <div class="about-company__stat-text">Дипломов и сертификатов у наших специалистов</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-specialists" id="our-specialists">
        <div class="container">
            <h2>Наши <strong>Специалисты</strong></h2>

            <div class="our-specialists__grid">
                <div class="our-specialists__card">
                    <div class="our-specialists__photo">
                        <img src="{{ asset('img/tmp_sp.jpg') }}" alt="Иванов Николай Петрович" />
                    </div>
                    <p class="our-specialists__name">Иванов Николай Петрович</p>
                    <p class="our-specialists__role">хирург</p>
                </div>

                <div class="our-specialists__card">
                    <div class="our-specialists__photo">
                        <img src="{{ asset('img/tmp_sp.jpg') }}" alt="Иванов Николай Петрович" />
                    </div>
                    <p class="our-specialists__name">Иванов Николай Петрович</p>
                    <p class="our-specialists__role">хирург</p>
                </div>

                <div class="our-specialists__card">
                    <div class="our-specialists__photo">
                        <img src="{{ asset('img/tmp_sp.jpg') }}" alt="Иванов Николай Петрович" />
                    </div>
                    <p class="our-specialists__name">Иванов Николай Петрович</p>
                    <p class="our-specialists__role">хирург</p>
                </div>

                <div class="our-specialists__card">
                    <div class="our-specialists__photo">
                        <img src="{{ asset('img/tmp_sp.jpg') }}" alt="Иванов Николай Петрович" />
                    </div>
                    <p class="our-specialists__name">Иванов Николай Петрович</p>
                    <p class="our-specialists__role">хирург</p>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services" id="our-services">
        <div class="container">
            <h2>Наши <strong>услуги</strong></h2>

            <div class="our-services__grid">
                <div class="our-services__card">
                    <div class="our-services__photo">
                        <img src="{{ asset('tmp_data/services/service_1.jpg') }}" alt="Терапефтическая стоматология" />
                    </div>
                    <div class="our-services__body">
                        <p class="our-services__title">Терапефтическая стоматология</p>
                        <p class="our-services__text">Диагностика, лечение кариеса, лечение каналов,рестоврация зубов,
                            профилактика</p>
                    </div>
                </div>

                <div class="our-services__card">
                    <div class="our-services__photo">
                        <img src="{{ asset('tmp_data/services/service_2.jpg') }}" alt="Хирургическая стоматология" />
                    </div>
                    <div class="our-services__body">
                        <p class="our-services__title">Хирургическая стоматология</p>
                        <p class="our-services__text">Удаление зубов, имплантация, лечение воспалений</p>
                    </div>
                </div>

                <div class="our-services__card">
                    <div class="our-services__photo">
                        <img src="{{ asset('tmp_data/services/service_3.jpg') }}" alt="Гигиена и профилактика" />
                    </div>
                    <div class="our-services__body">
                        <p class="our-services__title">Гигиена и профилактика</p>
                        <p class="our-services__text">Снятие зубного камня, удаление налета, полировка зубов, вторирование
                        </p>
                    </div>
                </div>

                <div class="our-services__card">
                    <div class="our-services__photo">
                        <img src="{{ asset('tmp_data/services/service_4.jpg') }}" alt="Ортопедическая стоматология" />
                    </div>
                    <div class="our-services__body">
                        <p class="our-services__title">Ортопедическая стоматология</p>
                        <p class="our-services__text">Микропротезирование, коронки, съемное протезирование, имплпнтпты</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-advantages" id="our-advantages">
        <div class="container">
            <h2>Наши <strong>преимущества</strong></h2>

            <div class="our-advantages__grid">
                <div class="our-advantages__card">
                    <img class="our-advantages__icon" src="{{ asset('img/adv/adv_1.svg') }}" alt="" />
                    <h3 class="our-advantages__title">Современные технологии и точная диагностика</h3>
                    <p class="our-advantages__text">Используем цифровые рентген-аппараты,3D-томографию и увеличительную
                        оптику, что позволяет выявлять проблемы на ранней стадии и лечить максимально точно.</p>
                </div>

                <div class="our-advantages__card">
                    <img class="our-advantages__icon" src="{{ asset('img/adv/adv_2.svg') }}" alt="" />
                    <h3 class="our-advantages__title">Опытные врачи с узкой специализацией</h3>
                    <p class="our-advantages__text">Каждый врач занимается своим направлением — от терапии до имплантации и
                        ортодонтии, что гарантирует профессиональный и предсказуемый результат.</p>
                </div>

                <div class="our-advantages__card">
                    <img class="our-advantages__icon" src="{{ asset('img/adv/adv_3.svg') }}" alt="" />
                    <h3 class="our-advantages__title">Комфорт и безопасность пациента</h3>
                    <p class="our-advantages__text">Безболезненное лечение, стерильность по международным стандартам и
                        внимательное отношение к каждому пациенту на всех этапах лечения.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <div class="container">
            <div class="contacts__inner">
                <div class="contacts__left">
                    <div class="contacts__content">
                        <h2>Стоматологическая клиника <strong>ДАНТИСТиК</strong></h2>
                        <p class="contacts__address">г. Курск, пр-т Вячеслава Клыкова, д. 16</p>
                        <a class="contacts__phone" href="tel:+74712310810">+7 (4712) 310-810</a>
                        <a class="contacts__email" href="mailto:dantistik46@yandex.ru">dantistik46@yandex.ru</a>
                        <h4>Время работы:</h4>
                        <p class="contacts__hours">пн-пт: 8:30- 18:30<br>Сб: 8:30-15:00<br>воскресенье - выходной</p>
                    </div>
                </div>

                <div class="contacts__right">
                    <x-map.map-in-page name="Дантистик" geo="51.723762, 36.138110"
                        adres="г. Курск, пр-т Вячеслава Клыкова, д. 16" phone="+7 (4712) 310-810"></x-map.map-in-page>
                </div>
            </div>
        </div>
    </section>



@endsection
