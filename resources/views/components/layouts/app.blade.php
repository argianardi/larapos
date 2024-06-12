<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Larapos' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-base-200">
    @auth
        <div class="drawer lg:drawer-open">
            <input id="drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                @livewire('partial.navbar')

                {{ $slot }}
            </div>
            <div class="drawer-side">
                <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                @livewire('partial.sidebar')
            </div>
        </div>
    @endauth

    @guest
        <div class="flex flex-col items-center justify-center h-screen gap-8">
            <h1 class="text-4xl font-bold capitalize ">{{ config('app.name') }}
            </h1>
            {{ $slot }}
        </div>
    @endguest


</body>

</html>
