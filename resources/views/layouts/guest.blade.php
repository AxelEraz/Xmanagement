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
    <body>
        <header>
            
        @livewire('nav-bar-guest')
            <nav class="container mx-auto flex items-center justify-between px-4 py-6">
                <div class="flex items-center">
                    <a href="/">
                    <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>
                <ul class="flex ml-16">
                    <li><a href="/" class="font-semibold text-gray-600 hover:text-blue-400 focus:rounded-sm focus:outline-blue-500 px-5">Features</a></li>
                    
                    <li><a href="/" class="font-semibold text-gray-600 hover:text-blue-400 focus:rounded-sm focus:outline-blue-500 px-5">Seguimiento</a></li>
                    
                    <li><a href="/" class="font-semibold text-gray-600 hover:text-blue-400 focus:rounded-sm focus:outline-blue-500 px-5">Pricing</a></li>
                </ul>
                <div class="relative">

                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-blue-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-blue-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-blue-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-blue-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                </div>
            </nav>
        </header>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @livewire('footer')

    </body>
</html>
