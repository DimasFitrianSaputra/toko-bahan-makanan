<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-100 antialiased">
        <div class="relative min-h-screen overflow-hidden bg-slate-950 text-slate-100">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-emerald-950"></div>
            <div class="pointer-events-none absolute -top-20 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-emerald-500/10 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-24 right-0 h-72 w-72 rounded-full bg-white/5 blur-3xl"></div>
            <div class="relative z-10 flex min-h-screen items-center justify-center px-4 py-10">
                <div class="w-full max-w-md">
                    <div class="text-center mb-8">
                        <a href="/" class="inline-flex items-center justify-center gap-3 text-white">
                            <x-application-logo class="h-11 w-11 text-emerald-400" />
                            <span class="text-2xl font-semibold tracking-tight">Toko Bahan</span>
                        </a>
                        <p class="mt-3 text-sm text-slate-400">Masuk atau daftar untuk menggunakan dashboard kasir modern.</p>
                    </div>

                    <div class="rounded-[32px] border border-white/10 bg-slate-900/80 p-8 md:p-10 shadow-2xl shadow-slate-950/40 backdrop-blur-xl">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
