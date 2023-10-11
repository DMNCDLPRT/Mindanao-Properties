<x-app-layout>

        @if (Route::has('login'))
            @auth
                @livewire('home')
            @else
                @livewire('welcome')
                @if (Route::has('register'))
                    @livewire('home')
                @endif
            @endauth

        @endif

 
</x-app-layout>
