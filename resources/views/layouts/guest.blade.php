<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        
        
        <!-- Styles -->
        @livewireStyles
        @if(Route::has('property-details'))
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        @endif
    </head>
    <body>
        <div class="font-sans bg-gray-100 text-gray-900 antialiased">
            @livewire('navigation-menu')
            {{ $slot }}
        </div>
        
        <!-- Scripts -->
        @livewireScripts
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @if(Route::has('property-details'))
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        <script src="https://kit.fontawesome.com/bade4642b5.js" crossorigin="anonymous"></script>

        @endif
    </body>
</html>