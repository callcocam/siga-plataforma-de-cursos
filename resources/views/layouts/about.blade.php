<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    </head>
    <body>
        <div class="flex h-screen bg-gray-300">
            <nav class="hidden w-64 bg-red-300 shrink-0 md:block">
                nav
            </nav>
            <main class="flex flex-col flex-1 w-full">
                <header x-data="{open:true}" class="z-10 flex items-center justify-between bg-white">
                    <div class="container justify-end flex-1 items-right" :class="{'flex py-3':!open}">
                       <div class="" x-show="open">
                        <input type="text" class="relative w-full py-4 placeholder-gray-600 border-0 focus:outline-none form-input" placeholder="Digite um termo de busca...">
                        <button class="absolute mt-4 -ml-8" x-on:click="open=false">
                            <x-icons.close />
                        </button>
                       </div>
                       <div x-show="!open">
                          <button class="mt-2 -ml-4" x-on:click="open=true">
                            <x-icons.search />
                          </button>
                       </div>
                    </div>
                    <ul class="mr-5">
                        <li>dsfsf</li>
                    </ul>
                </header>
                {{ $slot }}
                <footer>footer</footer>
            </main>
        </div>
    </body>
</html>