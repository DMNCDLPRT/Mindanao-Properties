@if (Route::has('login'))
    @auth
        <x-front.auth-nav />
    @else
        <x-front.guest-nav />
        @if (Route::has('register'))
            <x-front.auth-nav />
        @endif
    @endauth

@endif
