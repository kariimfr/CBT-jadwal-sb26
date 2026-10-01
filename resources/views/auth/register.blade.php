<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar page</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen bg-white">

    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">

        <!-- BAGIAN KIRI -->
        <div class="bg-[#063b2c] text-white px-10 lg:px-16 py-12">

            <!-- Logo -->
            <div class="flex items-center gap-3 mb-8">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Wikrama" class="w-9 h-9 object-contain">

                <span class="text-[#b7e94b] font-bold text-2xl">
                    Wikrama FC
                </span>
            </div>

            <!-- Judul -->
            <h1 class="text-4xl lg:text-5xl font-bold leading-tight max-w-xl">
                Berlatih bersama.
                <br>
                Bermain cerdas.
            </h1>

            <!-- Deskripsi -->
            <p class="mt-8 text-gray-300 text-lg leading-relaxed max-w-lg">
                Semua rapi dalam satu platform dari jadwal latihan,
                kondisi pemain, serta target tim.
            </p>

            <!-- Foto Tim -->
            <div class="mt-7">
                <img src="{{ asset('images/fotoBersama.jpg') }}" alt="Tim Wikrama FC"
                    class="w-full max-w-[500px] h-[400px] object-cover rounded-2xl">
            </div>

        </div>


        <!-- ========================= -->
        <!-- BAGIAN KANAN -->
        <!-- ========================= -->
        <div class="bg-white flex items-center px-10 lg:px-20 py-12">

            <div class="w-full max-w-xl mx-auto">

                <!-- Judul -->
                <h2 class="text-4xl font-bold text-[#092f25]">
                    Buat akun pemain Anda
                </h2>

                <p class="mt-2 text-gray-500 text-lg">
                    Bergabunglah dengan Wikrama FC dan selalu siap dalam setiap sesi.
                </p>


                <!-- Form -->
                <form action="{{ route('register.store') }}" method="POST" class="mt-8">

                    @csrf


                    <!-- Nama -->
                    <div class="mb-5">

                        <label for="name" class="block text-sm font-semibold text-[#092f25] mb-2">
                            Nama Lengkap
                        </label>

                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Nama lengkap"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3
                                   focus:outline-none focus:ring-2 focus:ring-[#2e7d4f]">

                        @error('name')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Email -->
                    <div class="mb-5">

                        <label for="email" class="block text-sm font-semibold text-[#092f25] mb-2">
                            Alamat email
                        </label>

                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="example@gmail.com"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3
                                   focus:outline-none focus:ring-2 focus:ring-[#2e7d4f]">

                        @error('email')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Password -->
                    <div class="mb-5">

                        <label for="password" class="block text-sm font-semibold text-[#092f25] mb-2">
                            Kata sandi
                        </label>

                        <input type="password" id="password" name="password" placeholder="Minimal 8 karakter"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3
                                   focus:outline-none focus:ring-2 focus:ring-[#2e7d4f]">

                        @error('password')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <!-- Konfirmasi Password -->
                    <div class="mb-6">

                        <label for="password_confirmation" class="block text-sm font-semibold text-[#092f25] mb-2">
                            Konfirmasi kata sandi
                        </label>

                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Ulangi kata sandi anda"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3
                                   focus:outline-none focus:ring-2 focus:ring-[#2e7d4f]">

                    </div>


                    <!-- Button -->
                    <button type="submit"
                        class="bg-[#2e7d4f] hover:bg-[#256b43]
                               text-white font-semibold
                               px-6 py-3 rounded-lg
                               transition">
                        Buat Akun
                    </button>


                    <!-- Login -->
                    <p class="mt-5 text-gray-500">
                        Sudah terdaftar?

                        <a href="{{ route('login') }}" class="text-[#2e7d4f] font-semibold hover:underline">
                            Masuk
                        </a>
                    </p>

                </form>

            </div>

        </div>

    </div>

</body>

</html>
