<x-app-layout>

    <div wire:ignore>
        <script src="https://cdn.tiny.cloud/1/7taqft20xekbbt0bdqt7qhm26xze34gjtwl80qdlhcpd831p/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        
        <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />

        <script type="text/javascript" src=' {{ asset('js/here-credentials.js') }} '></script>    
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
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

    <div wire:ignore>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
        <script type="text/javascript" src=" {{ asset('js/backblazeb2-ph-location.js') }} "></script>
        <script type="text/javascript" src="{{ asset('js/location.js') }}"></script>

        <script type="text/javascript" src="{{ asset('js/tinymce.js') }}"> </script>     {{-- Tineymce - For Property Description --}} 
    </div>

</x-app-layout>