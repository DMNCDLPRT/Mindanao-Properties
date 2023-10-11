


@if (!Auth::check())

    <x-guest-layout>
        @livewire('components.property-details', ['property' => $property])
        @livewire('components.footer')
    </x-guest-layout>
    
@else

    <x-app-layout>
        @livewire('components.property-details', ['property' => $property])
        @livewire('components.footer')
    </x-app-layout>
    
@endif



