<x-app-layout>

   <div wire:ignore>
       <script src="https://cdn.tiny.cloud/1/7taqft20xekbbt0bdqt7qhm26xze34gjtwl80qdlhcpd831p/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
       <link rel="stylesheet" href="{{ asset('css/locationiq.css') }}">
    </div>


    <div class="flex overflow-hidden bg-white dark:bg-gray-800">
        <div id="main-content" class="h-full w-full overflow-y-auto lg:ml-64">
            <main>
                <div class="pt-6 px-4">
                    @livewire('user-verified.add-property', ['offer_type' => $offer_type, 'property_type' => $property_type, 'subtypes' => $subtypes])
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
