    <section class="our-advantages" id="our-advantages">
        <div class="container">
            <h2>Наши <strong>преимущества</strong></h2>

            <div class="our-advantages__grid">
                @foreach ($adv as $item)
                    <div class="our-advantages__card">
                        <img class="our-advantages__icon" src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" />
                        <h3 class="our-advantages__title">{!! $item->title !!}</h3>
                        <p class="our-advantages__text">{!! $item->value !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
