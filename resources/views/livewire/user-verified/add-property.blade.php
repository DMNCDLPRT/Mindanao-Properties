<x-form-section submit="addProperty">
  <x-slot name="title">
      {{ __('Add Property') }}
  </x-slot>

  <x-slot name="description">
      {{ __('Adding a property to our real estate website is a seamless and empowering experience. Whether you\'re a seasoned real estate professional or a homeowner looking to list your property, our user-friendly platform makes it effortless to showcase your real estate asset to potential buyers or renters. With just a few clicks, you can input essential property details, upload high-quality images, and provide comprehensive descriptions to ensure your listing stands out. Our innovative tools also allow you to set pricing, and specify key features, for a truly immersive experience. By choosing to \'Add Property\' with us, you\'re taking the first step towards a successful and efficient real estate journey, connecting with the right audience and maximizing your property\'s visibility in the market.') }}
  </x-slot>
  <x-slot name="form">

    {{-- Property Offer -Section- --}}
    {{-- @livewire('components.property-offer', ['offer_type' => $offer_type, 'property_type' => $property_type, 'property_type_id' => $property_type_id]) --}}
    
    <section class="pb-5">
      <x-header-description 
        header="What type of property do you want to offer?" 
        description="Let's start with basic typology of the listing so that property seekers can find it under the right category on Mindanao Properties." 
      />
      
      {{-- Offer Type --}}
      <div class="pb-4">
        @error('offer_type_id')
          <span class="m" role="alert">
            <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
          </span>
        @enderror
  
        <x-header-label value="{{ __('Offer Type') }}" />
        <div class="flex gap-2">
          @foreach ($offer_type as $type)
          <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-gray-700 grow">
            <x-radio id="{{ $type->name }}" wire:model="offer_type_id" value="{{ $type->id }}" name="offer_type" />
            <x-label value="{{ $type->name }}" for="{{ $type->name }}" class="w-full py-3 ml-2 text-sm font-medium dark:text-gray-300 rounded-md" />
           
          </div>
          @endforeach
        </div>
      </div>
  
      {{-- Property Type -Input- --}}
      <div class="pb-4">
        @error('property_type_id')
          <span class="m" role="alert">
            <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
          </span>
        @enderror
        <x-header-label value=" {{ __('Property Type') }} " />
        <div class="flex gap-2">
          @foreach ($property_type as $type)
          <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-gray-700 grow">
            <x-radio name="property_type" id="{{ $type->name }}" value="{{ $type->id }}" wire:model="property_type_id" wire:click="wirePropertyClick({{ $type->id }})" />
            <x-label value="{{ $type->name }}"  for="{{ $type->name }}"  class="w-full py-3 ml-2 text-sm font-medium dark:text-gray-300 rounded-md" />         
          </div>
          @endforeach
        </div>
      </div>
  
      {{-- Property SubType -Input- --}}
      @if ($property_type_id)    
      <div class="pb-4">
        @error('subtype_id')
        <span class="m" role="alert">
          <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
        </span>
        @enderror
        <x-header-label value=" {{ __('Property Sub-type') }} " />

        <div class="flex flex-wrap gap-2">
          @foreach ($subtypes as $type)
          <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-gray-700 grow max-w-[200px]">
            <x-radio id="{{ $type->subtype }}" wire:model="subtype_id" value="{{ $type->id }}" name="subtype_id" />
              <x-label value="{{ $type->subtype }}"  for="{{ $type->subtype }}"  class="w-full py-3 ml-2 text-sm font-medium dark:text-gray-300 rounded-md" />
            </div>
           @endforeach
        </div>
      </div>
      @endif
  
      {{-- Title -Input- --}}
      <div class="pb-4">
        @error('title')
        <span class="m" role="alert">
          <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
        </span>
        @enderror
        <x-label for="title" value="{{ __('Title') }}"  class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
        <x-input id="title" wire:mode="title" name="title" class="block mt-1 w-full" placeholder="e.g. 2 Bedroom apartment with seaside" /> 
      </div>
  
      {{-- Property Description -Input- --}}
      @error('description')
        <span class="m" role="alert">
          <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
        </span>
      @enderror
      <div wire:ignore class="pb-4">
          <x-label 
          for="text_area" 
          value="{{ __('Description') }}"
          class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" 
          />
          <textarea wire:model="description" id="text_area"></textarea> 
      </div>


      {{-- <script>
        
        $(document).ready(function () {
            // Use an event listener to detect changes in the input field
            $('#text_area').on('input', function () {
                var inputValue = $(this).val();
                
                // Use Livewire's JavaScript methods to update the Livewire property
                @this.set('description', inputValue);
                console.log('Script is running');
            });
        });
      </script> --}}
    
    </section>
  
    
    {{-- Property Offer -End Section- --}}

    {{-- Photos, videos and other media -Section- --}}
    <section class="pb-5">

      <x-header-description 
        header="Upload photos, videos and other media" 
        description="Users looking for property ignore properties without photos. Make your property stand out by uploading photos or, even better, a video!" 
      />

     {{-- Images --}}
     <div class="pb-4">
      @error('images')
      <div class="mt-4 ">
        <span class="text-red-100 mt-5" role="alert">
          <strong class="text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
        </span>
      </div>
      @enderror
      <div class="mb-6 pt-4">
        <h3 class="mb-5 block text-m font-semibold text-[#07074D]">
          Upload other media
        </h3>
      
        <div class="mb-8">
          <input type="file" name="images" wire:model="images" id="images" class="sr-only" >
            <label for="images" class="relative flex min-h-[100px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-5 text-center">
              <div>
                <span class="mb-1 block text-m font-semibold text-[#07074D]">
                  Drop your images here
                </span>
                <span class="mb-1 block text-m font-medium text-[#6B7280]">
                  or
                </span>
                <span class="mb-2 inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                  Browse files
                </span>
                <span class="mb-1 block text-sm font-medium text-[#6B7280]">
                  Upload photos as jpg or png.
                </span>
              </div>
            </label>
        </div>
        
        @if ($images)
        <div class="mb-5 rounded-md bg-[#F5F7FB] py-4 px-8">
          @foreach ($images as $imge)
          <div class="flex items-center justify-between">
              <img src="{{ $imge->temporaryUrl() }}" alt="" height="70" class="p-2 rounded-sm">
            </div>
            <div class="flex items-center justify-between bg-[#e7e8ea] p-3 rounded-md">
              <span class="truncate pr-3 text-base font-medium text-[#07074D]">
              {{ $imge->getClientOriginalName() }}
              </span>
              <button class="text-[#07074D]" id="onclickFile" onclick="this.parentNode.parentNode.remove(); return false;">
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z" fill="currentColor"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z" fill="currentColor"/>
                </svg>
              </button> 
            </div>
          @endforeach
        </div>
        @endif{{-- 
        <script>
          $( "#onclickFile" ).click(function() {
            $images = [''];
          });
        </script> --}}
      </div>
     </div>
      {{-- Image Upload -End Imput- --}}

      {{-- Media --}}
     <div class="pb-4">
      @error('media')
      <div class="mt-4 ">
        <span class="text-red-100 mt-5" role="alert">
          <strong class="text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
        </span>
      </div>
      @enderror
      <div class="mb-6">
        <h3 class="mb-5 block text-m font-semibold text-[#07074D]">
          Upload other media
        </h3>
      
        <div class="mb-8">
          <input type="file" name="media" wire:model="media" id="media" class="sr-only" >
            <label for="media" class="relative flex min-h-[100px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-5 text-center">
              <div>
                <span class="mb-1 block text-m font-semibold text-[#07074D]">
                  Drop your files here
                </span>
                <span class="mb-1 block text-m font-medium text-[#6B7280]">
                  or
                </span>
                <span class="mb-2 inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                  Browse files
                </span>
                <span class="mb-1 block text-sm font-medium text-[#6B7280]">
                  Upload pdf files.
                </span>
              </div>
            </label>
        </div>
        
        @if ($media)
        <div class="mb-5 rounded-md bg-[#F5F7FB] py-4 px-8">
          <div class="flex items-center justify-between">
            <img src="{{ $media->temporaryUrl() }}" alt="" height="70" class="p-2 rounded-sm">
          </div>
          <div class="flex items-center justify-between bg-[#e7e8ea] p-3 rounded-md">
            <span class="truncate pr-3 text-base font-medium text-[#07074D]">
              {{ $media->getClientOriginalName() }}
            </span>
            <button class="text-[#07074D]" id="onclickFile" onclick="this.parentNode.parentNode.remove(); return false;">
              <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z" fill="currentColor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z" fill="currentColor"/>
              </svg>
            </button> 
          </div>
        </div>
        @endif{{-- 
        <script>
          $( "#onclickFile" ).click(function() {
            $media = [''];
          });
        </script> --}}
      </div>
      </div>
      {{-- Media Upload -End Imput- --}}

      {{-- YouTube Link --}}
      <div class="pb-4 grow">
        <x-label 
          for="youtube"
          value="{{ __('Paste your YouTube video URL and submit') }}"
          class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" 
        />
        <x-input 
          type="text" 
          name="youtube" 
          id="youtube"
          wire:model="youtube"
          class="block mt-1 w-full"
          placeholder="e.g. https://youtube.com/example-link" 
        />
      </div>

      {{-- Vitual Tour Link --}}
      <div class="pb-4 grow">
        <x-label 
          for="virtual_tour"
          value="{{ __('Paste your Virtual Tour URL and submit') }}"
          class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" 
        />
        <x-input 
          type="text" 
          name="virtual_tour" 
          id="virtual_tour"
          wire:model="virtual_tour"
          class="block mt-1 w-full" 
          placeholder="e.g. https://virtualtour.com/example-link"
        />
      </div>
      </section>
     

    {{-- Key Information -Section- --}}
    <section class="pb-5">

      <x-header-description 
        header="Add key information" 
        description="Please provide further key information such as the price, number of rooms or availability. Remember, more precise the information - more qualified leads!" 
      />
      
      {{-- Key Infomation --}}
      <div class="pb-4">
        {{-- price_availble_ online --}}

        <div class="flex items-middle">
          <div class="flex items-center">
            <x-checkbox id="show_price_online" aria-describedby="show_price_online" wire:model="show_price_online" type="checkbox" value="1" />
          </div>
          <div class="text-sm ml-3">
            <label for="show_price_online" class="font-medium">Show price online</label>
          </div>
        </div>

        {{-- prive_availble_ online --}}

        <div class="pt-4 flex gap-2">
          <div class="pb-4 grow">
            @error('price_php')
            <span class="m" role="alert">
              <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
            </span>
            @enderror
            <x-label 
              for="price_php"
              value="{{ __('Price (₱)') }}"
              class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" 
            />
            <x-input 
              type="text" 
              name="price_php" 
              id="price_php"
              wire:model="price_php"
              class="block mt-1 w-full" 
            />
          </div>
          <div class="pb-4 grow">
            @error('price_usd')
            <span class="m" role="alert">
              <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
            </span>
            @enderror
            <x-label 
              for="price_usd"
              value="{{ __('Price ($)') }}"
              class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" 
            />
            <x-input 
              type="text" 
              name="price_usd" 
              id="price_usd"
              wire:model="price_usd"
              class="block mt-1 w-full" 
            />
          </div>
        </div>

        <div class="pb-4 grow">
          <x-label 
            for="available_from"
            value="{{ __('Available from') }}"
            class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" 
          />
          <x-input 
            type="text" 
            name="available_from" 
            id="available_from"
            wire:model="available_from"
            class="block mt-1 w-full" 
          />
        </div>

        <div class="pb-4 grow">
          <x-label 
            for="object_id"
            value="{{ __('Object ID') }}"
            class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" 
          />
          <x-input 
            type="text" 
            name="object_id" 
            id="object_id"
            wire:model="object_id"
            class="block mt-1 w-full" 
          />
        </div>
      </div>
    </section>
    {{-- Key Information -End Section- --}}

    {{-- Where the property is located -Section- --}}
    <section class="pb-5">
      <x-header-description 
        header="Where is your property located?" 
        description="For house hunters, location is everything! Give us as much information about the location of your property as you can so that users can find property easily." 
      />

      {{-- Key Infomation --}}
      <div wire:ignore class="pb-4">
        @error('region')
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
            autocomplete="region"
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
            autofocus 
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
            autofocus 
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
            autofocus 
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
            class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            placeholder="Enter street name and number" 
            autocomplete="address"
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
  
        <div wire:ignore class="mt-4">
          <div id="map" style="width: 100%; height: 400px;"></div>
        </div>
      </div>
    </section>
    {{-- Location -End Section- --}}

    {{-- Amenities -Section- --}}
    @if ($property_type_id && $features)    
    <section class="pb-5">
      <x-header-description 
        header="Please review your contact details" 
        description="Make sure your details are updated so our users can easily contact you at the right channel." 
      />

      <div class="py-4">
        <h4 class="font-bold text-base">Indoor Features</h4>
        <div class="flex flex-wrap gap-2">
          @foreach ($features as $feat)
              @if ($feat->type == 'indoor')
                  <x-button>{{ $feat->name }}</x-button>
              @endif
          @endforeach
        </div>
      </div>

      <div class="py-4 font-bold  text-base">
        <h4>Outdoor Features</h4>
        <div class="flex flex-wrap gap-2">
          @foreach ($features as $feat)
              @if ($feat->type == 'outdoor')
                  <x-button>{{ $feat->name }}</x-button>
              @endif
          @endforeach
        </div>
      </div>

    </section>
    @endif
    {{-- Amenities -End Section- --}}

    {{-- Contact Details -Section- --}}
      {{-- Key Infomation --}}
      <div class="p-4 border rounded">
        <div class="pb-4 flex items-center border-b">
          <div class="shrink-0  mr-3">
            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
          </div>
          <div class="grow">
            <h2 class="text-xl font-semibold">{{ Auth::user()->name }}</h2>
            <hr>
            <h3 class="text-m gray">{{ Auth::user()->email }}</h3>
          </div>
        </div>
        <div class="text-center">
          <h3 class="text-xl font-bold p-5">Available Subscriptions</h3>
          <div class="flex gap-4 text-center justify-evenly">

            <div class="font-bold p-5">
              <div class="flex align-middle items-center text-orange-500">
                <div class="shrink-0 mr-3">
                  <x-heroicon-s-home class="h-8 w-8 rounded-full object-cover"/>
                </div>
                <div class="pl-3 font-bold text-xl ">
                  0
                </div>
              </div>
              Ads Quota
            </div>

            <div class="font-bold p-5">
              <div class="flex align-middle items-center text-green-500">
                <div class="shrink-0 mr-3">
                  <x-heroicon-s-star class="h-8 w-8 rounded-full object-cover"/>
                </div>
                <div class="pl-3 font-bold text-xl">
                  0
                </div>
              </div>
              Highlights
            </div>  
          </div>

          <div class="bg-gray-300 block rounded justify-center">
            <div class="flex justify-center">
              <x-application-logo />
            </div>
            <hr>
            <div class="flex items-middle justify-center py-5">
              <div class="flex items-center h-5">
                <x-checkbox id="highlight_listing" aria-describedby="highlight_listing" type="checkbox"/>
              </div>
              <div class="text-sm ml-3">
                <label for="highlight_listing" class="font-medium">Highlight this listing</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- HERE map API -script-  --}}
    <div wire:ignore>
      <script type="text/javascript" src="{{ asset('js/here-map.js') }}"> </script>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      {{-- <script>
        $( "#onclickFile" ).click(function() {
          $( "#output" ).slideUp();
        });
      </script> --}}
    </div>
    {{-- HERE map API -script- -End- --}}

    {{-- Submit Button --}}
    <x-slot name="actions">
      <x-button wire:loading.attr="disabled" onclick="return confirm('Confirm Report Incident?');">
        {{ __('add property') }}
      </x-button>   
    </x-slot>
  </x-slot>
</x-form-section>

 