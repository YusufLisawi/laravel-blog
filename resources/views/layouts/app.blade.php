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

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="text-black dark:text-white">
            {{ $slot }}
        </main>
        <footer class="fixed top-[40vh] text-gray-300 ml-3">
            <div class="flex flex-col gap-3">
                <a href="{{ route('lang-switch', 'ar') }}"
                    class="bg-slate-700/40 p-2 rounded-full w-[40px] text-center text-gray-500 font-bold duration-100 hover:text-red-600">
                    Ar
                </a>
                <a href="{{ route('lang-switch', 'fr') }}"
                    class="bg-slate-700/40 p-2 rounded-full w-[40px] text-center text-gray-500 font-bold duration-100 hover:text-red-600">
                    Fr
                </a>
                <a href="{{ route('lang-switch', 'en') }}"
                    class="bg-slate-700/40 p-2 rounded-full w-[40px] text-center text-gray-500 font-bold duration-100 hover:text-red-600">
                    En
                </a>
                <a href="{{ route('lang-switch', 'es') }}"
                    class="bg-slate-700/40 p-2 rounded-full w-[40px] text-center text-gray-500 font-bold duration-100 hover:text-red-600">
                    Es
                </a>
            </div>
        </footer>
    </div>
</body>

</html>
