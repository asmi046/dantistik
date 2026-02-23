@extends('layouts.all')

@section('main')
    <x-headers.page-header title="Контакты нашей клиники"></x-headers.page-header>
    <section class="page_section">
        <div class="container">
            <section class="price_section">
                <div class="container">
                    <div class="price_section_items">
                        @foreach ($prices as $section => $items)
                            <details id="ps_{{ Str::slug($section) }}" class="price_section_item" open>
                                <summary>{{ $section }}</summary>
                                <div class="response">
                                    @foreach ($items as $item)
                                        <div class="price_item">
                                            <div class="service"><span class="code">{{ $item->service_code }}</span> <span
                                                    class="name">{{ $item->service_name }}</span></div>
                                            <div class="dots"></div>
                                            <div class="price">{{ $item->price }} руб.</div>
                                        </div>
                                    @endforeach
                                </div>
                            </details>
                        @endforeach
                    </div>
                    <br>
                    <br>
                    <p>Оплата медицинских услуг производится наличным и безналичным расчетом в кассу ООО «Эстедент плюс»
                        после
                        каждого приема, согласно действующего прейскуранта.</p>
                </div>
            </section>

        </div>
    </section>
@endsection
