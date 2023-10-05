<x-app-layout>

   <div wire:ignore>
       <script src="https://cdn.tiny.cloud/1/7taqft20xekbbt0bdqt7qhm26xze34gjtwl80qdlhcpd831p/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
       <link rel="stylesheet" href="{{ asset('css/locationiq.css') }}">
    </div>


    <div class="flex gap-4 overflow-hidde bg-white">
        <div class="col-md-6 bg-gray-800">
            <x-side-panel />
        </div>
        <div class="h-full w-full flex justify-center">
            <div class="pt-6 px-4 overflow-y-auto lg:max-w-5xl">
                @livewire('user-verified.add-property', ['offer_type' => $offer_type, 'property_type' => $property_type, 'subtypes' => $subtypes])
            </div>
        </div>
    </div>
</x-app-layout>
