<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
</head>

<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <livewire:nav-bar />
        <livewire:side-bar />
        <main class="p-4 md:ml-64 h-auto pt-20">
            @if(isset($title))
                {{ Breadcrumbs::render() }}
                <h2 class="text-3xl mt-5 mb-5"> {{ $title }} </h2>
            @endif
            {{ $slot }}
        </main>
        <footer class="p-4 md:ml-64 h-auto pt-20">
            <x-footer />
        </footer>
    </div>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    
</body>

</html>