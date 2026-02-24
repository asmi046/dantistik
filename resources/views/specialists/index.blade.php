@extends('layouts.all')

@section('main')
    <x-headers.page-header title="Специалисты"></x-headers.page-header>
    <section class="specialists_section">
        <div class="container">
            <div class="our-specialists__grid ">
                @foreach ($specialists as $item)
                    <x-cards.specialist :item="$item"></x-cards.specialist>
                @endforeach
            </div>
        </div>
    </section>

    <x-main.adv></x-main.adv>
    <x-main.contacts></x-main.contacts>
@endsection
