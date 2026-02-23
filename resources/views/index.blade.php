@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <x-main.banner></x-main.banner>

    <x-main.about></x-main.about>

    <x-main.specialist></x-main.specialist>

    <x-main.services></x-main.services>

    <x-main.adv></x-main.adv>

    <x-main.contacts></x-main.contacts>



@endsection
