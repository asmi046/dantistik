<section class="our-specialists" id="our-specialists">
    <div class="container">
        <h2>Наши <strong>Специалисты</strong></h2>

        <div class="our-specialists__grid">
            @foreach ($specialists as $specialist)
                <x-cards.specialist :item="$specialist"></x-cards.specialist>
            @endforeach

        </div>
    </div>
</section>
