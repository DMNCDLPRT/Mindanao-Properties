<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div >
        @if (Route::has('login'))
        @auth
           @livewire('home')
        @else
           <welcome />
            @if (Route::has('register'))
                @livewire('home')
            @endif
        @endauth
   
@endif
      
    </div>
</x-app-layout>
