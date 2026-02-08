<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Astronacci Membership - Hafid</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-slate-50 text-slate-900">
    <div class="relative min-h-screen flex flex-col">
        <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex justify-end h-16 items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-bold text-slate-700 hover:text-indigo-600 transition">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-sm font-bold text-slate-700 hover:text-indigo-600 transition">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-white bg-indigo-600 rounded-full hover:bg-indigo-500 shadow-md shadow-indigo-200 transition-all">Get
                                    Started</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <main class="flex-grow">
            <div class="relative px-6 py-12 lg:py-20 flex justify-center items-center">
                <div class="max-w-3xl text-center">
                    <h1 class="text-4xl font-extrabold tracking-tight text-slate-900 sm:text-6xl leading-tight">
                        Eksplorasi Konten Edukasi dengan <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">Sistem
                            Membership</span>
                    </h1>
                    <p class="mt-4 text-base sm:text-lg leading-7 text-slate-600 max-w-xl mx-auto">
                        Akses artikel dan video eksklusif sesuai dengan kebutuhan Anda. Login cepat menggunakan Google
                        atau Facebook dan mulai belajar hari ini.
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('register') }}"
                            class="w-full sm:w-auto rounded-full bg-slate-900 px-8 py-3.5 text-sm font-bold text-white shadow-xl hover:bg-slate-800 transition transform hover:-translate-y-0.5">
                            Daftar Sekarang
                        </a>
                        <a href="#features"
                            class="w-full sm:w-auto text-sm font-bold leading-6 text-slate-900 py-3.5 hover:text-indigo-600 transition">Pelajari
                            Tipe Membership <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>

            <div id="features" class="py-16 bg-white border-y border-slate-200">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="text-center mb-12">
                        <h2 class="text-sm font-bold text-indigo-600 uppercase tracking-[0.2em] mb-2">Tiers</h2>
                        <p class="text-3xl font-extrabold text-slate-900 sm:text-4xl">Pilih Akses Anda</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                        <div
                            class="flex flex-col p-8 bg-slate-50 rounded-3xl border border-slate-200 hover:border-indigo-300 transition-all group">
                            <div class="flex-grow">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-bold">Tipe A</h3>
                                    <span
                                        class="px-3 py-1 text-xs font-bold text-indigo-600 bg-indigo-50 rounded-full">Default</span>
                                </div>
                                <p class="text-sm text-slate-600 mb-6">Cocok untuk pemula yang ingin mulai belajar.</p>
                                <div class="mb-6">
                                    <span class="text-3xl font-extrabold">Akses Terbatas</span>
                                </div>
                                <ul class="space-y-3 text-sm font-medium text-slate-600">
                                    <li class="flex items-center gap-3">
                                        <svg class="h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        3 Artikel Pilihan
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg class="h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        3 Video Materi
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div
                            class="flex flex-col p-8 bg-indigo-600 rounded-3xl shadow-2xl shadow-indigo-200 transform md:-translate-y-4 transition-all">
                            <div class="flex-grow">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-bold text-white">Tipe B</h3>
                                    <span
                                        class="px-3 py-1 text-xs font-bold text-white bg-white/20 rounded-full">Populer</span>
                                </div>
                                <p class="text-sm text-indigo-100 mb-6">Untuk pembelajaran yang lebih intensif.</p>
                                <div class="mb-6">
                                    <span class="text-3xl font-extrabold text-white">Menengah</span>
                                </div>
                                <ul class="space-y-3 text-sm font-medium text-indigo-50">
                                    <li class="flex items-center gap-3">
                                        <svg class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        10 Artikel Mendalam
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg class="h-5 w-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        10 Video Tutorial
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div
                            class="flex flex-col p-8 bg-slate-50 rounded-3xl border border-slate-200 hover:border-indigo-300 transition-all">
                            <div class="flex-grow">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-bold">Tipe C</h3>
                                    <span
                                        class="px-3 py-1 text-xs font-bold text-amber-600 bg-amber-50 rounded-full">Ultimate</span>
                                </div>
                                <p class="text-sm text-slate-600 mb-6">Akses tanpa batas untuk profesional.</p>
                                <div class="mb-6">
                                    <span class="text-3xl font-extrabold">Full Access</span>
                                </div>
                                <ul class="space-y-3 text-sm font-medium text-slate-600">
                                    <li class="flex items-center gap-3">
                                        <svg class="h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Semua Artikel
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg class="h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Semua Video Materi
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-white py-8 border-t border-slate-200">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <p class="text-xs font-bold text-slate-500 uppercase tracking-widest leading-loose">
                    &copy; 2026 Astronacci Test Project <br class="sm:hidden">
                    <span class="hidden sm:inline">|</span> Built with Laravel by Rifki Hafidl Alauddin
                </p>
            </div>
        </footer>
    </div>
</body>

</html>