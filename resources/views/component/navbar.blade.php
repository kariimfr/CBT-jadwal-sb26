```blade
<nav class="border-b border-slate-200 bg-white">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-6">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600">
                <span class="text-xl text-white">⚽</span>
            </div>

            <div>
                <h1 class="text-sm font-bold text-slate-900">
                    Football Training
                </h1>
                <p class="text-xs text-slate-500">
                    Jadwal Latihan Sepak Bola
                </p>
            </div>
        </a>

        {{-- Navigation --}}
        <div class="hidden items-center gap-6 md:flex">

            <a href="/" class="text-sm font-medium text-slate-600 hover:text-green-600">
                Home
            </a>

            <a href="/schedules" class="text-sm font-medium text-slate-600 hover:text-green-600">
                Jadwal
            </a>

            <a href="/login"
                class="rounded-lg border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700 hover:border-green-600 hover:text-green-600">
                Login
            </a>

            <a href="/register"
                class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700">
                Buat Akun
            </a>

        </div>

    </div>
</nav>
```
