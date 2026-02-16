@props([
    'title' => 'Page Title',
])

<section class="page-header">
    <div class="container">
        <x-breadcrumbs.main :title="$title"></x-breadcrumbs.main>
        <h1>{{ $title }}</h1>
    </div>
</section>
