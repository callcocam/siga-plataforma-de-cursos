<!DOCTYPE html>
<html :class="{ 'theme-dark':dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/init-alpine.js') }}"></script>
        @livewireStyles
    </head>
    <body>
        <div class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{'overflow-hidden': isSideMenuOpen}">
            <!-- Desktop sidebar -->
            <x-admin.sidebar-desktop/>
            <!-- Mobile sidebar -->
            <!-- Backdrop -->           
            <x-admin.backdrop/>
            <x-admin.sidebar-mobile/>
            <!-- Page Content -->
            <div  class="flex flex-col flex-1 w-full">
                <x-admin.header/>
               <main class="h-full overflow-y-auto">
                <div class="container grid px-6 mx-auto">
                   {{ $slot }}
                </div>
               </main>
                <x-admin.footer />
            </div>
        </div>
        @livewireScripts
        @isset($js)
            {{$js}}
        @endisset
        
    </body>
</html>