@extends('layouts.all')

@section('main')
    <x-headers.page-header title="Контролирующие организации"></x-headers.page-header>
    <section class="page_section">
        <div class="container">

            @foreach ($organizations as $item)
                <div class="org_item">
                    <h3>{{ $item['name'] }}</h3>
                    <p>Адрес: {{ $item['address'] }}</p>
                    <p>Телефон: {{ $item['phones'] }}</p>
                    <p>e-mail: {{ $item['email'] }}</p>
                </div>
                <br>
            @endforeach

        </div>
    </section>
@endsection
