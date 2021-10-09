<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" sizes="192x192" href="logo.jpg">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <style>
            .post {
                position: relative;
                flex: 1 0 220px;
                color: #fff;
                cursor: pointer;
                width: 293px;
                height: 293px;
            }
            .post:hover .post-info,
            .post:focus .post-info {
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.3);
            }
            .post-info {
                display: none;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
            {{ $header }}
            @endif

            <!-- Page Content -->
            <main class="mt-10 pb-2">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script>

            const img = document.getElementById('postImage');
            const sec1 = document.getElementById('sec1');
            const sec3 = document.getElementById('sec3');
            const sec4 = document.getElementById('sec4');
            const commentArea = document.getElementById('commentArea');

            if (img!=null) {
                var imgHeight = img.offsetHeight;
                var sec1Height = sec1.offsetHeight;
                var sec3Height = sec3.offsetHeight;
                var sec4Height = sec4.offsetHeight;

                var height = imgHeight - (sec1Height + sec3Height + sec4Height);

                commentArea.style.maxHeight = height.toString() + "px";
            }




        </script>
    </body>
</html>
