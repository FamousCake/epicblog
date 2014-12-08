<html>

    <head>
        <meta charset="utf-8">
        <title>So Epic!</title>

    </head>
    <body>
        @include('element.header')
        @include('element.navbar')

        <div class="container">
            @yield('content')
        </div>

        @include('element.footer')
    </body>
</html>