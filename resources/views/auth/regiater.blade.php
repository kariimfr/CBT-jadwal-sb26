@extends('layouts.app')

@section('content')
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">
        {{-- LEFT --}}
        <div class="bg-[#063b2b] text-white px-8 py-12 lg:px-16 lg:py-16 flex flex-col">

            <div class="flex items-center gap-2 mb-10">
                <span class="text-2xl">⚽</span>

                <h1 class="text-xl font-bold text-lime-300">
                    Wikrama FC
                </h1>
            </div>

            <div class="max-w-xl">

                <h2 class="text-4xl lg:text-5xl font-bold leading-tight">
                    Bergabung bersama.<br>
                    Tumbuh bersama.
                </h2>

                <p class="mt-6 text-gray-300 text-base lg:text-lg leading-relaxed">
                    Buat akun Wikrama FC untuk melihat jadwal latihan
                    dan mengikuti aktivitas tim dengan lebih mudah.
                </p>

            </div>

            <div class="mt-8">

                <img src="{{ asset('images/tim-wikrama.jpg') }}" alt="Tim Wikrama FC"
                    class="w-full max-w-xl h-[360px] object-cover rounded-2xl">

            </div>

        </div>


        {{-- RIGHT --}}
        <div class="bg-white flex items-center justify-center px-8 py-12 lg:px-20">

            <div class="w-full max-w-xl">

                {{-- Heading --}}
                <div class="mb-8">

                    <h2 class="text-3xl lg:text-4xl font-bold text-[#102d24]">
                        Buat akun baru
                    </h2>

                    <p class="mt-2 text-gray-500">
                        Daftar untuk mulai menggunakan Wikrama FC.
                    </p>

                </div>


                {{-- FORM --}}
                <form method="POST" action="{{ route('register.store') }}" class="space-y-5">

                    @csrf


                    {{-- Nama --}}
                    <div>

                        <label for="name" class="block mb-2 text-sm font-semibold text-[#102d24]">
                            Nama lengkap
                        </label>

                        <input id="name" type="text" name="name" value="{{ old('name') }}"
                            placeholder="Masukkan nama lengkap"
                            class="w-full px-4 py-3 border rounded-lg
                    @error('name')
                        border-red-500
                    @else
                        border-gray-300
                    @enderror
                    focus:outline-none focus:ring-2 focus:ring-[#2E7D4F]">

                        @error('name')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Email --}}
                    <div>

                        <label for="email" class="block mb-2 text-sm font-semibold text-[#102d24]">
                            Alamat email
                        </label>

                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                            placeholder="example@gmail.com"
                            class="w-full px-4 py-3 border rounded-lg
                    @error('email')
                        border-red-500
                    @else
                        border-gray-300
                    @enderror
                    focus:outline-none focus:ring-2 focus:ring-[#2E7D4F]">

                        @error('email')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Password --}}
                    <div>

                        <label for="password" class="block mb-2 text-sm font-semibold text-[#102d24]">
                            Kata sandi
                        </label>

                        <input id="password" type="password" name="password" placeholder="Minimal 8 karakter"
                            class="w-full px-4 py-3 border rounded-lg
                    @error('password')
                        border-red-500
                    @else
                        border-gray-300
                    @enderror
                    focus:outline-none focus:ring-2 focus:ring-[#2E7D4F]">

                        @error('password')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    {{-- Konfirmasi Password --}}
                    <div>

                        <label for="password_confirmation" class="block mb-2 text-sm font-semibold text-[#102d24]">
                            Konfirmasi kata sandi
                        </label>

                        <input id="password_confirmation" type="password" name="password_confirmation"
                            placeholder="Ulangi kata sandi"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                    focus:outline-none focus:ring-2 focus:ring-[#2E7D4F]">

                    </div>


                    {{-- Button --}}
                    <button type="submit"
                        class="w-full px-6 py-3 bg-[#2E7D4F] text-white
                font-semibold rounded-lg hover:bg-[#256b42] transition">
                        Daftar
                    </button>

                </form>


                {{-- Login --}}
                <p class="mt-6 text-sm text-gray-500">

                    Sudah punya akun?

                    <a href="{{ route('login') }}" class="font-semibold text-[#2E7D4F] hover:underline">
                        Masuk
                    </a>

                </p>

            </div>

        </div>

    </div>
@endsection
