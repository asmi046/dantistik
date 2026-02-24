@extends('layouts.all')

@php
    $title = 'Услуги нашей клиники';
@endphp


@section('main')
    <x-headers.page-header title="Услуги нашей клиники"></x-headers.page-header>

    <section class="services_in_page">
        <div class="container">
            <div class="our-services__grid">
                @foreach ($services as $service)
                    <x-cards.service :item="$service" />
                @endforeach
            </div>
        </div>
    </section>

    <x-main.adv></x-main.adv>
    <x-main.contacts></x-main.contacts>
@endsection
