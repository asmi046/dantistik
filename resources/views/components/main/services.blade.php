    <section class="our-services" id="our-services">
        <div class="container">
            <h2>Наши <strong>услуги</strong></h2>

            <div class="our-services__grid">
                @foreach ($services as $service)
                    <x-cards.service :item="$service" />
                @endforeach
            </div>
        </div>
    </section>
