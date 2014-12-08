<html>

    <head>
        <meta charset="utf-8">
        <title>So Epic!</title>
        <link href="/assets/stylesheets/application.css" rel="stylesheet">
        <script src="/assets/javascripts/application.js"></script>

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