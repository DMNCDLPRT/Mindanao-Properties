<x-app-layout>
    <div class="flex overflow-hidden bg-white">
        <div id="main-content" class="h-full w-full overflow-y-auto lg:ml-64">
            <main>
                <div class="pt-6 px-4">
                    @livewire('user-verified.add-property', ['offer_type' => $offer_type, 'property_type' => $property_type, 'subtypes' => $subtypes])
                </div>
            </main>
        </div>
    </div>

    <script type="text/javascrip" src="{{ asset('js/here-map-api.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('js/tinymce.js') }}"> </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script type="text/javascript" src=" {{ asset('js/backblazeb2-ph-location.js') }} "></script>
    <script type="text/javascript" src="{{ asset('js/location.js') }}"></script>
</x-app-layout>