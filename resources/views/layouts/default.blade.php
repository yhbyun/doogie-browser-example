<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-blue px-2 lg:px-12 font-mono text-base leading-normal text-white">
        <div class="lg:h-screen py-2 lg:py-12 relative">
            <div class="border-2 mb-8 lg:mb-0 p-1 h-full">
                <article class="border-2 p-4 lg:p-8 h-full overflow-y-scroll" id="app">
                    @yield('content')
                    <footer class="lg:absolute bottom-34 w-full lg:flex items-center justify-center">
                        <link-toolbar links="{{ json_encode(config('site.links')) }}"></link-toolbar>
                    </footer>
                </article>
            </div>
            <a href="javascript:void(0)" class="absolute bottom-0 lg:pb-2 uppercase text-aqua-light hover:text-white right-0">Powered by Rivario</a>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
