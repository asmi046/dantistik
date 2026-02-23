<section class="main-banner" id="main-banner">
    <video class="main-banner__video" autoplay muted loop playsinline preload="auto"
        poster="{{ asset('img/main_b.webp') }}">
        <source src="{{ asset('video/main_video.mp4') }}" type="video/mp4" />
    </video>
    <div class="container">
        <div class="main-banner__content">
            <h1>{!! $banners['main_1']->title ?? '' !!}</h1>
            <p>{!! $banners['main_1']->value ?? '' !!}</p>
            <a class="button" href="#showModal">Заказать звонок</a>
        </div>
    </div>
</section>
