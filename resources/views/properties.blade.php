
@if (!Auth::check())
    <x-guest-layout>
        @livewire('components.search')
        @livewire('components.properties', ['propertieslivewirecontroller' => $allProperties])
        @livewire('components.footer')
    </x-guest-layout>
@else
    <x-app-layout>
        @livewire('components.search')
        @livewire('components.properties', ['propertieslivewirecontroller' => $allProperties])
        @livewire('components.footer')
    </x-app-layout>
@endif