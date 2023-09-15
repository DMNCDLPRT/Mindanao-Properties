<x-form-section submit="addProperty">
  <x-slot name="title">
      {{ __('Add Property') }}
  </x-slot>

  <x-slot name="description">
      {{ __('Adding a property to our real estate website is a seamless and empowering experience. Whether you\'re a seasoned real estate professional or a homeowner looking to list your property, our user-friendly platform makes it effortless to showcase your real estate asset to potential buyers or renters. With just a few clicks, you can input essential property details, upload high-quality images, and provide comprehensive descriptions to ensure your listing stands out. Our innovative tools also allow you to set pricing, and specify key features, for a truly immersive experience. By choosing to \'Add Property\' with us, you\'re taking the first step towards a successful and efficient real estate journey, connecting with the right audience and maximizing your property\'s visibility in the market.') }}
  </x-slot>
  <x-slot name="form">

    <div class="pb-5">
      <h1 class="text-2xl font-semibold">What type of property do you want to offer?</h1>
      <p class="text-sm pb-4">Let's start with basic "typology" of the listing so that property seekers can find it under the right category on Mindanao Properties.</p>
      {{-- Offer Type --}}
        <div class="pb-4">
          @error('offer_type_id')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
            @enderror
          <x-label for="offer_type_div" value="{{ __('Offer Type') }}" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" />
          
          <div class="flex gap-2" id="offer_type_div">
            @foreach ($offer_type as $type)
                <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700 grow">
                  <input 
                    type="radio" 
                    id="{{ $type->name }}" 
                    wire:model="offer_type_id" 
                    value="{{ $type->id }}" 
                    name="offer_type" 
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                  />
                  <label 
                    for="{{ $type->name }}" 
                    class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >
                    {{ $type->name }}
                  </label>
                </div>
              @endforeach
          </div>
        </div>

        {{-- Property Type --}}
        <div class="pb-4">
          @error('property_type_id')
            <span class="m" role="alert">
              <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
            </span>
          @enderror
    
          <x-label for="property_type" value="{{ __('Property Type') }}" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" />
          <div class="flex gap-2">
            @foreach ($property_type as $type)
                <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700 grow">
                  <input 
                    type="radio" 
                    name="property_type"
                    id="{{ $type->name }}" 
                    value="{{ $type->id }}" 
                    wire:model="property_type_id" 
                    wire:click="wirePropertyClick({{ $type->id }})"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                    />
                  <label 
                    for="{{ $type->name }}" 
                    class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                    >
                    {{ $type->name }}
                  </label>
                </div>
              @endforeach
          </div>
        </div>

        {{-- Property SubType --}}
        @if ($property_type_id)    
        <div class="pb-4">
          @error('subtype_id')
          <span class="m" role="alert">
            <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
          </span>
          @enderror

          <x-label for="subtype_id" value="{{ __('Property Type') }}" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" />
          <div class="flex gap-2">
          
            @foreach ($subtypes as $type)
                  <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700 grow">
                    <input 
                        id="{{ $type->subtype }}" 
                        type="radio" 
                        wire:model="subtype_id" 
                        value="{{ $type->id }}" 
                        name="subtype_id" 
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label 
                        for="{{ $type->subtype }}" 
                        class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                        >
                        {{ $type->subtype }}
                    </label>
                  </div>
                @endforeach
          </div>
        </div>
        @endif

        {{-- Title --}}
        <div class="pb-4">
          @error('title')
          <span class="m" role="alert">
            <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
          </span>
          @enderror
          
          <x-label 
            for="title" 
            value="{{ __('Title') }}" 
            class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" 
          />
          <x-input 
            id="title" 
            wire:mode="title" 
            name="title" 
            class="block mt-1 w-full" 
            autofocus 
            autocomplete="e.g. 2 Bedroom apartment with seaside" />
        </div>

        {{-- Property Description --}}
        
        <div class="pb-4">
          @error('description')
          <span class="m" role="alert">
            <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
          </span>
          @enderror

          <x-label 
            for="text_area" 
            value="{{ __('Description') }}"
            class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" 
          />
          <textarea id="text_area"></textarea>
        </div>
    </div>



    <div class="pb-5">
      <h1 class="text-2xl font-semibold">Add key information</h1>
      <p class="text-sm pb-4">Please provide further key information such as the price, number of rooms or availability. Remember, more precise the information - more qualified leads!</p>
      {{-- Key Infomation --}}
      <div class="pb-4">
        @error('description')
        <span class="m" role="alert">
          <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="pb-5">
      <h1 class="text-2xl font-semibold">Where is your property located?</h1>
      <p class="text-sm pb-4">For house hunters, location is everything! Give us as much information about the location of your property as you can so that users can find property easily.</p>
      {{-- Key Infomation --}}
      <div class="pb-4">
        @error('description')
        <span class="m" role="alert">
          <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
        </span>
        @enderror

        <div class="mt-4">
          <x-label 
            for="region" 
            value="{{ __('Region') }}"
          />
          <input 
            type="hidden" 
            name="region" 
            wire:model="region"
          />
          <select 
            id="region" 
            class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
          >
        </select>
      </div>

      <div class="mt-4">
          <x-label 
            for="province" 
            value="{{ __('Province') }}" 
          />
          <input 
            type="hidden" 
            name="province" 
            wire:model="province" 
          />
          <select  
            id="province" 
            class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
            required 
            autofocus 
            autocomplete="province"
          >
        </select>
      </div>

      <div class="mt-4">
          <x-label 
            for="city" value="{{ __('City') }}" />
          <input 
            type="hidden" name="city" 
            wire:model="city"/>
          <select 
            id="city" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
            required 
            autofocus 
            autocomplete="city"
          >
        </select>
      </div>

      <div class="mt-4">
          <x-label 
            for="barangay" 
            value="{{ __('Barangay') }}" 
          />
          <input 
            type="hidden" 
            name="barangay"
            wire:model="barangay"
          />
          <select 
            id="barangay" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" 
            required 
            autofocus 
            autocomplete="barangay"
          >
        </select>
      </div>
        
        <div class="mt-4">
          <x-label 
            for="address" 
            value="{{ __('Address') }}" 
          />
          <x-input 
            type="text" 
            name="address" 
            id="address" 
            wire:model="address" 
            placeholder="Enter street name and number" 
            class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
          />
        </div>
      
        <div class="flex gap-2">
            <div class="mt-4 grow">
                <x-label 
                  for="latitude" 
                  value="{{ __('Latitude') }}" 
                />
                <x-input 
                  type="text" 
                  name="latitude"
                  id="latitude"
                  wire:model="latitude" 
                  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
            </div>
            <div class="mt-4 grow">
                <x-label 
                  for="longitude" 
                  value="{{ __('Longitude') }}" 
                />
                <x-input 
                  type="text" 
                  name="longitude" 
                  id="longitude"
                  wire:model="longitude" 
                  class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
               />
            </div>
        </div>
  
        <div class="mt-4">
          <div id="map" style="width: 100%; height: 400px;"></div>
        </div>
      </div>
      </div>
    </div>
    
    <script type="text/javascript" charset="utf-8">
     document.addEventListener('DOMContentLoaded', function () {
        var mapContainer = document.getElementById('map');
    
        var platform = new H.service.Platform({
          apikey: '{{ env('HERE_API_KEY') }}'
        });
                      
        var defaultLayers = platform.createDefaultLayers();

        var map = new H.Map(mapContainer, defaultLayers.vector.normal.map, {
            center: { 
              lat:  {{ $latitude }},
              lng: {{ $longitude }} },
            zoom: 10,
        });

        // Add a marker
        var marker = new H.map.Marker({ lat: {{ $latitude }}, lng: {{ $longitude }} });
        map.addObject(marker);

        // Livewire listener to update the map when latitude or longitude changes
        Livewire.on('updateMap', (data) => {
            marker.setGeometry({ lat: data.latitude, lng: data.longitude });
            map.setCenter({ lat: data.latitude, lng: data.longitude });
        });
    });
    </script>


      {{-- Submit Button --}}
      <x-slot name="actions">
        <x-button wire:loading.attr="disabled" onclick="return confirm('Confirm Report Incident?');">
            {{ __('add property') }}
        </x-button>   
      </x-slot>
    </x-slot>
  </x-form-section>

 