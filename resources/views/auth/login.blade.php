@extends('layouts.app')
@section('content')
    @if (session('success'))
        <div class="mb-5 rounded-lg bg-green-100 border border-green-300 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif
    @if (@session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">

        {{-- LEFT : BRANDING --}}
        <div class="bg-[#063b2b] text-white px-8 py-12 lg:px-16 lg:py-16 flex flex-col">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" alt="Wikrama FC" class="w-8 h-8 object-contain">

                <span class="text-lg font-bold text-[#2E7D4F]">
                    Wikrama FC
                </span>
            </a>
            {{-- Heading --}}
            <div class="max-w-xl">

                <h2 class="text-4xl lg:text-5xl font-bold leading-tight">
                    Berlatih bersama.<br>
                    Bermain cerdas.
                </h2>

                <p class="mt-6 text-gray-300 text-base lg:text-lg leading-relaxed">
                    Semua rapi dalam satu platform dari jadwal latihan,
                    kondisi pemain, dan target tim.
                </p>

            </div>

            {{-- Team Image --}}
            <div class="mt-8">

                <img src="{{ asset('images/fotoBersama.jpg') }}" alt="Tim Wikrama FC"
                    class="w-full max-w-xl h-[360px] object-cover rounded-2xl">

            </div>

        </div>


        {{-- RIGHT : LOGIN --}}
        <div class="bg-white flex items-center justify-center px-8 py-12 lg:px-20">

            <div class="w-full max-w-xl">

                {{-- Heading --}}
                <div class="mb-8">

                    <h2 class="text-3xl lg:text-4xl font-bold text-[#102d24]">
                        Selamat datang kembali..
                    </h2>

                    <p class="mt-2 text-gray-500">
                        Masuk untuk melihat sesi pelatihan Anda berikutnya.
                    </p>

                </div>


                {{-- Login Form --}}
                <form method="POST" action="{{ route('login.process') }}">
                    @csrf

                    {{-- Email --}}
                    <div>
                        <label for="email" class="block mb-2 text-sm font-semibold text-[#102d24]">
                            Alamat email
                        </label>

                        <input id="email" type="email" name="email" value="{{ old('email') }}"
                            placeholder="example@gmail.com" required autofocus
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-[#2E7D4F]
                               focus:border-[#2E7D4F]">

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

                        <input id="password" type="password" name="password" placeholder="Masukkan kata sandi anda"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-[#2E7D4F]
                               focus:border-[#2E7D4F]">

                        @error('password')
                            <p class="mt-1 text-sm text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>


                    {{-- Remember + Forgot --}}
                    <div class="flex flex-col gap-1">

                        <label class="flex items-center gap-2 text-sm text-gray-600">
                            <input type="checkbox" name="remember"
                                class="rounded border-gray-300 text-[#2E7D4F] focus:ring-[#2E7D4F]">

                            Ingat saya
                        </label>

                        <a href="#" class="text-sm font-semibold text-[#2E7D4F] hover:underline">
                            Lupa kata sandi?
                        </a>

                    </div>


                    {{-- Button --}}
                    <button type="submit"
                        class="px-6 py-3 bg-[#2E7D4F] text-white font-semibold
                           rounded-lg hover:bg-[#256b42] transition">
                        Masuk
                    </button>

                </form>


                {{-- Register --}}
                <p class="mt-6 text-sm text-gray-500">
                    Baru di Wikrama FC?

                    <a href="{{ route('register') }}" class="font-semibold text-[#2E7D4F] hover:underline">
                        Daftar
                    </a>
                </p>

            </div>

        </div>

    </div>
@endsection
