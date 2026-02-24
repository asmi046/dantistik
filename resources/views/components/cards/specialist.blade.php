<a href="{{ route('specialists.show', $item->slug) }}" class="our-specialists__card">
    <div class="our-specialists__photo">
        @if ($item->photo)
            <img src="{{ Storage::url($item->photo) }}" alt="{{ $item->fio }}" />
        @else
            <img src="{{ asset('img/no_photo.webp') }}" alt="{{ $item->fio }}" />
        @endif
    </div>
    <p class="our-specialists__name">{{ $item->fio }}</p>
    <p class="our-specialists__role">{{ $item->position }}</p>
</a>
