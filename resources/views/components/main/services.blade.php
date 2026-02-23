    <section class="our-services" id="our-services">
        <div class="container">
            <h2>Наши <strong>услуги</strong></h2>

            <div class="our-services__grid">
                @foreach ($services as $service)
                    <div class="our-services__card">
                        <div class="our-services__photo">
                            @if ($service->img)
                                <img src="{{ Storage::url($service->img) }}" alt="{{ $service->title }}" />
                            @else
                                <img src="{{ asset('img/no_photo.webp') }}" alt="{{ $service->title }}" />
                            @endif
                        </div>
                        <div class="our-services__body">
                            <p class="our-services__title">{{ $service->title }}</p>
                            <p class="our-services__text">{{ $service->short_title }}</p>
                        </div>
                    </div>
                @endforeach


                {{-- <div class="our-services__card">
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
                        <p class="our-services__text">Снятие зубного камня, удаление налета, полировка зубов,
                            вторирование
                        </p>
                    </div>
                </div>

                <div class="our-services__card">
                    <div class="our-services__photo">
                        <img src="{{ asset('tmp_data/services/service_4.jpg') }}" alt="Ортопедическая стоматология" />
                    </div>
                    <div class="our-services__body">
                        <p class="our-services__title">Ортопедическая стоматология</p>
                        <p class="our-services__text">Микропротезирование, коронки, съемное протезирование, имплпнтпты
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
