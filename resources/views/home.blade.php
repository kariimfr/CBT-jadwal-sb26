@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="min-h-screen bg-[#f5f7f4]">

        {{-- NAVBAR --}}
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-6 lg:px-10 py-4">

                <div class="flex items-center justify-between">

                    {{-- Logo --}}
                    <a href="/" class="flex items-center gap-2">
                        <img src="{{ asset('images/logoWK.jpg') }}" alt="Wikrama FC" class="w-8 h-8 object-contain">

                        <span class="text-lg font-bold text-[#073b2a]">
                            Wikrama FC
                        </span>
                    </a>

                    {{-- Navigation --}}
                    <div class="flex items-center gap-3">

                        <a href="auth.login"
                            class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-[#063b2b] transition">
                            Masuk
                        </a>

                        <a href="#"
                            class="px-5 py-2.5 bg-[#2E7D4F] text-white text-sm font-semibold rounded-lg hover:bg-[#24663f] transition">
                            Daftar
                        </a>

                    </div>

                </div>

            </div>
        </nav>


        {{-- HERO --}}
        <section class="bg-[#063b2b]">

            <div class="max-w-7xl mx-auto px-6 lg:px-10 py-16 lg:py-20">

                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                    {{-- Hero Text --}}
                    <div class="max-w-xl">

                        <p class="text-sm font-bold tracking-wide text-lime-300 mb-4">
                            FOOTBALL TRAINING, ORGANISED
                        </p>

                        <h1 class="text-3xl sm:text-5xl lg:text-5xl font-bold leading-tight text-white">
                            Satu sesi. Satu fokus.
                            <br>
                            Satu kemenangan.
                        </h1>

                        <p class="mt-6 text-base lg:text-lg leading-relaxed text-gray-200 max-w-lg">
                            Lihat jadwal latihan lebih rapih dan simpel lewat web yang dapat diakses diperangkat mana aja.
                        </p>

                        <div class="mt-8 flex flex-wrap gap-3">

                            <a href="#"
                                class="px-6 py-3 bg-[#2E7D4F] text-white font-semibold rounded-lg hover:bg-[#3a9360] transition">
                                Buat akun gratis
                            </a>

                            <a href="#"
                                class="px-6 py-3 border border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition">
                                Lihat jadwal
                            </a>

                        </div>

                    </div>


                    {{-- Schedule Preview --}}
                    <div id="jadwal" class="bg-[#14543e] border border-[#548a72] rounded-[28px] p-6 lg:p-8">

                        <div class="flex items-center justify-between mb-7">

                            <div>
                                <p class="text-xs font-semibold text-lime-300 uppercase tracking-wide">
                                    Minggu ini
                                </p>

                                <h2 class="mt-1 text-xl font-bold text-white">
                                    Tim Utama
                                </h2>
                            </div>

                            <span class="text-xs text-gray-200">
                                3 sesi
                            </span>

                        </div>


                        <div class="space-y-4">

                            {{-- Schedule 1 --}}
                            <div class="bg-[#28654f] rounded-xl p-5">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <h3 class="text-base lg:text-lg font-bold text-white">
                                            Tactical shape & pressing
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-200">
                                            Latihan taktik dan pressing
                                        </p>
                                    </div>

                                    <span class="text-lg font-semibold text-lime-300 whitespace-nowrap">
                                        07:00
                                    </span>
                                </div>
                            </div>


                            {{-- Schedule 2 --}}
                            <div class="bg-[#28654f] rounded-xl p-5">

                                <div class="flex items-start justify-between gap-4">

                                    <div>
                                        <h3 class="text-base lg:text-lg font-bold text-white">
                                            Finishing under pressure
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-200">
                                            Latihan penyelesaian akhir
                                        </p>
                                    </div>

                                    <span class="text-lg font-semibold text-lime-300 whitespace-nowrap">
                                        08:00
                                    </span>
                                </div>
                            </div>


                            {{-- Schedule 3 --}}
                            <div class="bg-[#28654f] rounded-xl p-5">

                                <div class="flex items-start justify-between gap-4">

                                    <div>
                                        <h3 class="text-base lg:text-lg font-bold text-white">
                                            Game & finishing
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-200">
                                            Simulasi pertandingan dan finishing
                                        </p>
                                    </div>

                                    <span class="text-lg font-semibold text-lime-300 whitespace-nowrap">
                                        08:30 - 10:00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        {{-- FEATURES --}}
        <section class="bg-white">

            <div class="max-w-7xl mx-auto px-6 lg:px-12 py-12 lg:py-14">

                {{-- Heading --}}
                <div class="text-center mb-10">

                    <h2 class="text-2xl md:text-3xl font-bold text-[#102b21]">
                        Hadir dalam mendukung kebutuhan sepak bola.
                    </h2>

                    <p class="mt-2 text-sm text-gray-500">
                        Pelatih menyiapkan rencana, pemain selalu aktif,
                        semua datang dalam kondisi siap.
                    </p>

                </div>


                {{-- Feature Cards --}}
                <div class="space-y-4">

                    {{-- Feature 1 --}}
                    <div class="border border-gray-200 rounded-xl p-5 hover:shadow-md transition">

                        <div class="w-8 h-8 flex items-center justify-center mb-4 text-[#2E7D4F]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-cancel">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12.5 21h-6.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5" />
                                <path d="M16 3v4" />
                                <path d="M8 3v4" />
                                <path d="M4 11h16" />
                                <path d="M16 19a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M17 21l4 -4" />
                            </svg>
                        </div>

                        <h3 class="text-sm font-bold text-[#102b21]">
                            Rencanakan minggu ini
                        </h3>

                        <p class="mt-2 text-xs text-gray-500">
                            Atur jadwal latihan tim dengan rapi, cepat, dan terstruktur.
                        </p>

                    </div>


                    {{-- Feature 2 --}}
                    <div class="border border-gray-200 rounded-xl p-5 hover:shadow-md transition">

                        <div class="w-8 h-8 flex items-center justify-center mb-4 text-[#2E7D4F]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                        </div>

                        <h3 class="text-sm font-bold text-[#102b21]">
                            Pastikan semua terstruktur
                        </h3>

                        <p class="mt-2 text-xs text-gray-500">
                            Update otomatis untuk memastikan seluruh tim selalu aktif.
                        </p>

                    </div>


                    {{-- Feature 3 --}}
                    <div class="border border-gray-200 rounded-xl p-5 hover:shadow-md transition">

                        <div class="w-8 h-8 flex items-center justify-center mb-4 text-[#2E7D4F]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-report-analytics">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                <path d="M9 5a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2" />
                                <path d="M9 17v-5" />
                                <path d="M12 17v-1" />
                                <path d="M15 17v-3" />
                            </svg>
                        </div>

                        <h3 class="text-sm font-bold text-[#102b21]">
                            Lacak aktivitas
                        </h3>

                        <p class="mt-2 text-xs text-gray-500">
                            Pantau kehadiran, progres latihan, dan performa tim melalui data
                            yang rapi dan terstruktur.
                        </p>

                    </div>

                </div>

            </div>

        </section>
    </div>

@endsection
