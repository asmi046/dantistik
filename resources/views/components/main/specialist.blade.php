<section class="our-specialists" id="our-specialists">
    <div class="container">
        <h2>Наши <strong>Специалисты</strong></h2>

        <div class="our-specialists__grid">
            @foreach ($specialists as $specialist)
                <div class="our-specialists__card">
                    <div class="our-specialists__photo">
                        @if ($specialist->photo)
                            <img src="{{ Storage::url($specialist->photo) }}" alt="{{ $specialist->fio }}" />
                        @else
                            <img src="{{ asset('img/no_photo.webp') }}" alt="{{ $specialist->fio }}" />
                        @endif
                    </div>
                    <p class="our-specialists__name">{{ $specialist->fio }}</p>
                    <p class="our-specialists__role">{{ $specialist->position }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>
