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

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            <!-- Page Content -->
            <main>
                <section class="px-12">
                    <main class="container max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="lg:flex lg:justify-between pt-8">
                            <div class="lg:w-1/6">
                                @include('_sidbar-links')
                            </div>
                            <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">

                                {{ $slot }}
                            </div>
                            <div class="lg:w-1/6">
                                @include('_friends-list')
                            </div>
                        </div>
                    </main>
                </section>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-3xl">
                            <div class="p-6 bg-white border-b border-gray-200">
                                You're logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="https://unpkg.com/turbolinks"></script>
    </body>
</html>
