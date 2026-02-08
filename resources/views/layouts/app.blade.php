<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Astronacci Membership') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { 
                font-family: 'Plus Jakarta Sans', sans-serif; 
                -webkit-font-smoothing: antialiased;
            }
        </style>
    </head>
    <body class="antialiased bg-slate-50 text-slate-900">
        <div class="min-h-screen flex flex-col">
            <div class="sticky top-0 z-40">
                @include('layouts.navigation')
            </div>

            @isset($header)
                <header class="bg-white border-b border-slate-200 py-8">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main class="flex-grow">
                {{ $slot }}
            </main>

            <footer class="bg-white border-t border-slate-200 py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <p class="text-center text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em]">
                        Astronacci Membership Platform &bull; Built by RIFKI HAFIDL ALAUDDIN
                    </p>
                </div>
            </footer>
        </div>
    </body>
</html>