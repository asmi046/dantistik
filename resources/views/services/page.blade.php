@extends('layouts.all')

@section('main')
    <x-headers.page-header :title="$service->title"></x-headers.page-header>

    <section class="page_content">
        <div class="container">
            {!! $service->description !!}
        </div>
    </section>

    <x-main.adv></x-main.adv>
    <x-main.contacts></x-main.contacts>
@endsection
