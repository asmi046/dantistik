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

        <a class="button" href="#showModal">Заказать звонок</a>
    </div>
</section>
