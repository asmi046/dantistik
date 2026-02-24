<a href="{{ route('services.show', $item->slug) }}" class="our-services__card">
    <div class="our-services__photo">
        @if ($item->img)
            <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" />
        @else
            <img src="{{ asset('img/no_photo.webp') }}" alt="{{ $item->title }}" />
        @endif
    </div>
    <div class="our-services__body">
        <p class="our-services__title">{{ $item->title }}</p>
        <p class="our-services__text">{{ $item->short_title }}</p>
    </div>
</a>
