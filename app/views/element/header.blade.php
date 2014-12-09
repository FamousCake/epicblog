<header class="header container">
    @if (Auth::check())
        <p> {{ 'Hello'.' '.Auth::user()->email }} </p>
    @else
        <p> {{ 'Hello'.' '.'whoever you are...' }} </p>
    @endif

</header>