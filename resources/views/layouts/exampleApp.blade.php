<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Jonathan Lilly | Web Developer</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        
    </head>

    <body>

        <div id="app">

            @include('nav')

            <section class="section">
                <div class="container">
                    <router-view></router-view>
                </div>
            </section>
            

        </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
