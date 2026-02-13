@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section class="contacts-header" id="contacts-header">
        <div class="container contacts-header__container">
            <x-div-icon icon="map_pin">г. Курск, пр-т Вячеслава Клыкова, д. 16</x-div-icon>
            <x-div-icon icon="cloc">пн-пт: 8:30 - 18:30 сб: 8:30-15:00</x-div-icon>
            <x-a-icon href="#" icon="phone">+7 (4712)310-810</x-a-icon>
        </div>
    </section>

    <section class="logo-menu-header" id="logo-menu-header">
        <div class="container logo-menu-header__container">
            <a class="logo-menu-header__logo" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.svg') }}" alt="Логотип" />
            </a>

            <div class="logo-menu-header__menu">
                <x-menues.puncts></x-menues.puncts>
            </div>

            <a class="button" href="#">Заказать звонок</a>
        </div>
    </section>

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
                    <h2>Стоматологическая клиника
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

@endsection
