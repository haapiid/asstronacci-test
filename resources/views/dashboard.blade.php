<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h2 class="font-extrabold text-2xl text-slate-900 leading-tight">
                    {{ __('Dashboard Membership') }}
                </h2>
                <p class="text-sm text-slate-500 mt-1">Selamat datang kembali, {{ Auth::user()->name }}!</p>
            </div>

            <div class="flex items-center gap-3 bg-white p-2 pr-4 rounded-2xl shadow-sm border border-slate-100">
                <div
                    class="w-10 h-10 rounded-xl bg-indigo-600 flex items-center justify-center text-white shadow-lg shadow-indigo-100">
                    <span class="font-bold">{{ $type }}</span>
                </div>
                <div>
                    <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Status Akun</p>
                    <p class="text-sm font-bold text-slate-900">Member Tipe {{ $type }}</p>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <section>
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center">
                        <div class="p-3 bg-indigo-50 rounded-2xl mr-4 shadow-sm">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 2v4a2 2 0 002 2h4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-extrabold text-slate-900">Artikel Eksklusif</h3>
                            <p class="text-sm text-slate-500">Tersedia {{ count($articles) }} materi bacaan untuk Anda.
                            </p>
                        </div>
                    </div>
                    @if($type != 'C')
                        <span
                            class="hidden sm:block text-xs font-bold text-indigo-600 bg-indigo-50 px-4 py-2 rounded-full uppercase tracking-wider">
                            Upgrade ke Tipe C untuk akses penuh
                        </span>
                    @endif
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($articles as $article)
                        <div
                            class="group bg-white rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden flex flex-col">
                            <div class="p-8 flex-grow">
                                <div class="flex items-center gap-2 mb-4">
                                    <span
                                        class="px-3 py-1 bg-slate-100 text-[10px] font-bold text-slate-500 rounded-lg uppercase tracking-tight">Materi
                                        #{{ $loop->iteration }}</span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                                </div>
                                <h4
                                    class="text-xl font-bold text-slate-900 mb-4 group-hover:text-indigo-600 transition-colors">
                                    {{ $article->title }}</h4>
                                <p class="text-slate-600 text-sm leading-relaxed mb-6">
                                    {{ Str::limit($article->body, 140) }}
                                </p>
                            </div>
                            <div class="px-8 py-6 bg-slate-50 border-t border-slate-50">
                                <a href="#"
                                    class="inline-flex items-center text-indigo-600 font-bold text-sm group-hover:gap-3 transition-all">
                                    Baca Selengkapnya
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <div class="relative py-4">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-slate-200"></div>
                </div>
            </div>

            <section>
                <div class="flex items-center mb-8">
                    <div class="p-3 bg-rose-50 rounded-2xl mr-4 shadow-sm">
                        <svg class="w-6 h-6 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-extrabold text-slate-900">Video Materi Premium</h3>
                        <p class="text-sm text-slate-500">Pelajari teknik melalui panduan visual eksklusif.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($videos as $video)
                        <div
                            class="bg-white rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 border border-slate-100 overflow-hidden group">
                            <div class="aspect-video relative overflow-hidden bg-slate-900">
                                <iframe class="w-full h-full opacity-90 group-hover:opacity-100 transition-opacity"
                                    src="{{ $video->url }}" title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                                    <span class="text-[10px] font-bold text-rose-500 uppercase tracking-widest">Video
                                        Tutorial</span>
                                </div>
                                <h4 class="font-bold text-slate-900 text-lg mb-1 leading-snug">{{ $video->title }}</h4>
                                <p class="text-xs text-slate-400 font-medium">Akses khusus Member {{ $type }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
</x-app-layout>