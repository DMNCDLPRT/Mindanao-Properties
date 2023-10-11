<x-form-section submit="addProperty">
  <x-slot name="title">
      {{ __('Add Property') }}
  </x-slot>

  <x-slot name="description">
      {{ __('Adding a property to our real estate website is a seamless and empowering experience. Whether you\'re a seasoned real estate professional or a homeowner looking to list your property, our user-friendly platform makes it effortless to showcase your real estate asset to potential buyers or renters. With just a few clicks, you can input essential property details, upload high-quality images, and provide comprehensive descriptions to ensure your listing stands out. Our innovative tools also allow you to set pricing, and specify key features, for a truly immersive experience. By choosing to \'Add Property\' with us, you\'re taking the first step towards a successful and efficient real estate journey, connecting with the right audience and maximizing your property\'s visibility in the market.') }}
  </x-slot>
  <x-slot name="form">
    <div id="listProperty">
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
            <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-white grow">
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
          <div class="flex flex-wrap gap-2">
            @foreach ($property_type as $type)
            <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-white grow">
              <x-radio name="property_type" id="{{ $type->name }}" value="{{ $type->id }}" wire:model="property_type_id" wire:click="wirePropertyClick('{{ $type->id }}')" />
              <x-label value="{{ $type->name }}"  for="{{ $type->name }}"  class="w-full py-3 mx-2 text-sm font-medium dark:text-gray-300 rounded-md" />         
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
            <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-white grow max-w-[200px]">
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
          <x-input id="title" wire:model="title" name="title" class="block mt-1 w-full" placeholder="e.g. 2 Bedroom apartment with seaside" /> 
        </div>
    
        {{-- Property Description -Input- --}}
        @error('description')
          <span class="m" role="alert">
            <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
          </span>
        @enderror
        <div wire:ignore class="pb-4">
          <x-label for="text_area" value="{{ __('Description') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
          <textarea wire:model="description" id="text_area" class="static text_area"></textarea>
        </div>
      </section>
    
      
      {{-- Property Offer -End Section- --}}

      {{-- Photos, videos and other media -Section- --}}
      <section class="pb-5">
        <x-header-description 
            header="Upload photos, videos and other media" 
            description="Users looking for property ignore properties without photos. Make your property stand out by uploading photos or, even better, a video!" 
        />
          {{-- Images --}}
          <div class="pb-4 static">
            @error('img_file_name')
            <div class="mt-4">
                <span class="text-red-600 mt-5" role="alert">
                    <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                </span>
            </div>
            @enderror
            <x-form.image-form wire:model="img_file_name"
              multiple
              allowImagePreview
              allowFileTypeValidation
              acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
              allowFileSizeValidation
              maxFileSize="4mb"
            />
          </div>
          {{-- Image Upload - End Input - --}}
      
          {{-- Media --}}
          <div class="pb-4 ">
            @error('docs_file_name')
            <div class="mt-4" >
              <span class="text-red-600 mt-5" role="alert">
                  <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
              </span>
            </div>
            @enderror
            <x-form.pdf-form wire:model="docs_file_name"
              multiple
              allowFileTypeValidation
              acceptedFileTypes="['application/pdf']"
              allowFileSizeValidation
              maxFileSize="4mb"
            />
          </div>
          {{-- Media Upload - End Input - --}}
    
        {{-- YouTube Link --}}
        <div class="pb-4 grow">
          <x-label for="yt_link" value="{{ __('Paste your YouTube video URL and submit') }}"
            class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
          <x-input type="text" name="yt_link" id="yt_link" wire:model="yt_link"
            class="block mt-1 w-full" placeholder="e.g. https://youtube.com/example-link" />
        </div>
    
        {{-- Virtual Tour Link --}}
        <div class="pb-4 grow">
          <x-label for="vt_link" value="{{ __('Paste your Virtual Tour URL and submit') }}"
            class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
          <x-input type="text" name="vt_link" id="vt_link" wire:model="vt_link"
            class="block mt-1 w-full" placeholder="e.g. https://virtualtour.com/example-link" />
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
          @if ($propertyType)
          <div class="flex flex-wrap gap-2">
            @if ($propertyType === 'Condominium' || $propertyType === 'Apartment' || $propertyType === 'House')
            {{-- Bathroom --}}
            <div class="pb-4">
              @error('bathrooms')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
              @enderror
              <x-label for="bathrooms" value="{{ __('Bathrooms') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500"/>
              <select name="bathrooms"  id="bathrooms" wire:model="bathrooms" autocomplete="bathrooms" class="block mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option selected disabled>Select No. of Bathrooms</option>
                <?php for ($i=0; $i<=5; $i++) { ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php } ?>
                <option value="more than 20 victims">more than 6 bathrooms</option>
              </select>
            </div>
            
            {{-- Bedroom --}}
            <div class="pb-4 ">
              @error('bedrooms')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
              @enderror
              <x-label for="bedrooms" value="{{ __('Bedrooms') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500"/>
              <select name="bedrooms"  id="bedrooms" wire:model="bedrooms" autocomplete="bedrooms" class="block mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <option selected disabled>Select No. of Bedrooms</option>
                <?php for ($i=0; $i<=5; $i++) { ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php } ?>
                <option value="6">more than 6 Bedrooms</option>
              </select>
            </div>
            @endif

            {{-- Floor Area --}}
            @if ($propertyType === 'Condominium' || $propertyType === 'Apartment' || $propertyType === 'House' || $propertyType === 'Commercial')
            <div class="pb-4">
              @error('floor_area')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
              @enderror
              <x-label  for="floor_area" value="{{ __('Floor Area (m²)') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
              <x-input  type="text"  name="floor_area"  id="floor_area" wire:model="floor_area" class="block mt-1 w-full" />
            </div>
            @endif
          </div>
      
            
          @if ($propertyType === 'Condominium')
          <div class="flex flex-wrap gap-2">
            {{-- Unit/Floor Number --}}
            <div class="pb-4 grow">
              @error('unit_floor_number')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
              @enderror
              <x-label  for="unit_floor_number" value="{{ __('Unit/Floor Number') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
              <x-input  type="text"  name="unit_floor_number"  id="unit_floor_number" wire:model="unit_floor_number" class="block mt-1 w-full" />
            </div>

            {{-- Condominium Name --}}
            <div class="pb-4 grow">
              @error('condominium_name')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
              @enderror
              <x-label  for="condominium_name" value="{{ __('Condominium Name') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
              <x-input  type="text"  name="condominium_name"  id="condominium_name" wire:model="condominium_name" class="block mt-1 w-full" />
            </div>

            {{-- floor  --}}
            <div class="pb-4 grow">
              @error('floor')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
              @enderror
              <x-label  for="floor" value="{{ __('Floor') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
              <x-input  type="text"  name="floor"  id="floor" wire:model="floor" class="block mt-1 w-full" />
            </div>

            {{-- tower_name/number  --}}
            <div class="pb-4 grow">
              @error('tower_name_number')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
              @enderror
              <x-label  for="tower_name_number" value="{{ __('Tower Name/Number') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
              <x-input  type="text"  name="tower_name_number"  id="tower_name_number" wire:model="tower_name_number" class="block mt-1 w-full" />
            </div>
          </div>
          @endif

          {{-- car_spaces --}}
          <div class="pb-4">
            @error('car_spaces')
            <span class="m" role="alert">
              <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
            </span>
            @enderror
            <x-label  for="car_spaces" value="{{ __('Car Spaces') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
            <x-input  type="text"  name="car_spaces"  id="car_spaces" wire:model="car_spaces" class="block mt-1 " />
          </div>

          {{-- Fully Furnished --}}
          @if ($propertyType !== 'Land')
          <div class="pb-4 grow">
            @error('fully_furnished')
            <span class="m" role="alert">
              <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
            </span>
            @enderror
            <x-header-label   value="{{ __('Fully Furnished') }}" />
            <div class="flex flex-wrap gap-4">
              <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-gray-700 grow max-w-[200px]">
                <x-radio id="yes" wire:model="fully_furnished" value="{{ __('Yes')}}" name="fully_furnished" />
                <x-label value="{{ __('Yes')}}"  for="yes"  class="w-full py-2 ml-2 text-sm font-medium dark:text-gray-300 rounded-md" />
              </div>
              <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-gray-700 grow max-w-[200px]">
                <x-radio id="no" wire:model="fully_furnished" value="{{ __('No')}}" name="fully_furnished" />
                <x-label value="{{ __('No')}}"  for="no"  class="w-full py-2 ml-2 text-sm font-medium dark:text-gray-300 rounded-md" />
              </div>
              @if ($propertyType !== 'Apartment')    
              <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-gray-700 grow max-w-[200px]">
                <x-radio id="semi" wire:model="fully_furnished" value="{{ __('Semi')}}" name="fully_furnished" />
                <x-label value="{{ __('Semi')}}"  for="semi"  class="w-full py-2 ml-2 text-sm font-medium dark:text-gray-300 rounded-md" />
              </div>
              @endif
            </div>
          </div>
          @endif
          
          {{-- Classification --}}
          <div class="pb-4 grow">
            @error('classification')
            <span class="m" role="alert">
              <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
            </span>
            @enderror
            <x-header-label value="{{ __('Classification') }}"/>
            <div class="flex flex-wrap gap-4">
              <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-gray-700 grow max-w-[200px]">
                <x-radio id="brand_new" wire:model="classification" value="{{ __('Brand New')}}" name="classification" />
                <x-label value="{{ __('Brand New')}}"  for="brand_new"  class="w-full py-2 ml-2 text-sm font-medium dark:text-gray-300 rounded-md" />
              </div>
              <div class="flex items-center pl-4 border-2 border-gray-400 rounded-md dark:border-gray-700 grow max-w-[200px]">
                <x-radio id="resale" wire:model="classification" value="{{__('Resale')}}" name="classification" />
                <x-label value="{{__('Resale')}}"  for="resale"  class="w-full py-2 ml-2 text-sm font-medium dark:text-gray-300 rounded-md" />
              </div>
            </div>
          </div>

          <div x-data="{ open: false }">
            <button type="button"  @click="open = ! open">
              <div class="flex text-center">
                <x-bx-plus class="text-blue h-5 pr-2"/>
                <span class="text-medium"> Show More Information </span>
              </div>
            </button>

            <div x-show="open" x-transition.duration.500ms>
          
              <div class="flex flex-wrap gap-4">
                {{-- sqm_range --}}
                <div class="pb-4 grow">
                  @error('sqm_range')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="sqm_range" value="{{ __('Sqm Range') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="sqm_range"  id="sqm_range" wire:model="sqm_range" class="block mt-1 w-full" />
                </div>

                @if ($propertyType === 'Condominium' || $propertyType === 'Apartment' || $propertyType === 'Commercial')  
                {{-- Total Floors --}}
                <div class="pb-4 grow">
                  @error('total_floors')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="total_floors" value="{{ __('Total Floors') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="total_floors"  id="total_floors" wire:model="total_floors" class="block mt-1 w-full" />
                </div>
                @endif

                {{-- Price Range --}}
                <div class="pb-4 grow">
                  @error('price_range')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="price_range" value="{{ __('Price Range') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="price_range"  id="price_range" wire:model="price_range" class="block mt-1 w-full" />
                </div>

                {{-- Price Conditions --}}
                <div class="pb-4 grow">
                  @error('price_conditions')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="price_conditions" value="{{ __('Price Conditions') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="price_conditions"  id="price_conditions" wire:model="price_conditions" class="block mt-1 w-full" />
                </div>

                {{-- Build Year --}}
                <div class="pb-4 grow">
                  @error('build_year')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="build_year" value="{{ __('Build Year') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="date"  name="build_year"  id="build_year" wire:model="build_year" class="block mt-1 w-full " />
                </div>

                @if ($propertyType === 'Condominium' || $propertyType === 'Land' || $propertyType === 'House' || $propertyType === 'Commercial')
                {{-- Deposit / Bond --}}
                <div class="pb-4 ">
                  @error('deposit_bond')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="deposit_bond" value="{{ __('Deposit / Bond') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="deposit_bond"  id="deposit_bond" wire:model="deposit_bond" class="block mt-1 " />
                </div> 
                @endif
                
                @if ($propertyType === 'Condominium' || $propertyType === 'Land' || $propertyType === 'House' || $propertyType === 'Commercial')
                {{-- Rooms Total --}}
                <div class="pb-4">
                  @error('rooms_total')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="rooms_total" value="{{ __('Rooms Total') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="rooms_total"  id="rooms_total" wire:model="rooms_total" class="block mt-1 w-full" />
                </div>
                @endif

                @if ($propertyType === 'Commercial' || $propertyType === 'house' || $propertyType === 'Land')
                {{-- Land Size (m²) --}}
                <div class="pb-4">
                  @error('land_size')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="land_size" value="{{ __('Land Size (m²)') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="land_size"  id="land_size" wire:model="deposit_bond" class="block mt-1 w-full" />
                </div>
                @endif

                @if ($propertyType === 'Commercial')  
                {{-- Building name --}}
                <div class="pb-4 grow">
                  @error('building_name')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="building_name" value="{{ __('Building name') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="building_name"  id="building_name" wire:model="deposit_bond" class="block mt-1 w-full" />
                </div>
                @endif

                @if ($propertyType === 'Commercial' || $propertyType === 'Apartment')
                <div class="flex flex-wrap gap-4">
                  {{-- Block and Lot/Unit/Floor Number --}}
                  <div class="pb-4">
                    @error('block_lot_unit_floor')
                    <span class="m" role="alert">
                      <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                    </span>
                    @enderror
                    <x-label  for="block_lot_unit_floor" value="{{ __('Block and Lot/Unit/Floor Number') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                    <x-input  type="text"  name="block_lot_unit_floor"  id="block_lot_unit_floor" wire:model="block_lot_unit_floor" class="block mt-1 w-full" />
                  </div>
                </div>
                @endif
              </div>

              @if ($propertyType === 'Land' || $propertyType === 'House' || $propertyType === 'Apartment')
              <div class="flex flex-wrap gap-4"> 
              {{-- Deposit / Bond --}}
                <div class="pb-4 grow">
                  @error('deposit_bond')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="deposit_bond" value="{{ __('Deposit / Bond') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="deposit_bond"  id="deposit_bond" wire:model="deposit_bond" class="block mt-1 w-full" />
                </div> 

                  {{-- Subdivision Name --}}
                <div class="pb-4 grow">
                  @error('subdivision_name')
                  <span class="m" role="alert">
                    <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                  </span>
                  @enderror
                  <x-label  for="subdivision_name" value="{{ __('Subdivision Name') }}" class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" />
                  <x-input  type="text"  name="subdivision_name"  id="subdivision_name" wire:model="subdivision_name" class="block mt-1 w-full" />
                </div> 
              </div>
              @endif

            </div>
          </div>
        @endif

          {{-- price_availble_ online --}}
          <div class="flex items-middle">
            <div class="flex items-center">
              <x-checkbox id="show_price_online" aria-describedby="show_price_online" wire:model="show_price_online" type="checkbox" />
            </div>
            <div class="text-sm ml-3">
              <label for="show_price_online" class="font-medium">Show price online</label>
            </div>
          </div>

          {{-- price php --}}
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
            <div class="pb-4 grow">
              @error('available_from')
                <span class="m" role="alert">
                  <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                </span>
              @enderror
              <x-label 
                for="available_from"
                value="{{ __('Available from') }}"
                class="block mb-2 mt-2 text-sm font-medium dark:text-gray-500" 
              />
              <x-input 
                type="date" 
                name="available_from" 
                id="available_from"
                wire:model="available_from"
                class="block mt-1 w-full" 
              />
            </div>
          </div>

          <div class="pb-4 grow">
            @error('object_id')
            <span class="m" role="alert">
              <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
            </span>
            @enderror
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

      {{-- Location-Section- --}}
      <section class="pb-5">
        <x-header-description 
          header="Where is your property located?" 
          description="For house hunters, location is everything! Give us as much information about the location of your property as you can so that users can find property easily." 
        />

        <div wire:ignore class="mt-4">
          <div style="height: 400px;" id="map"></div>
          <pre id="coordinates" class="coordinates"></pre>
          <p class="text-sm pb-4 dark:text-white">Start by finding your current location, and then easily move the red marker to your property on the map. This map tool lets you first locate where your property and then adjust the marker to show exactly where your property is</p>

          <div class="flex flex-wrap gap-4">
            <div class="mt-4">
              @error('province')
                <span class="m" role="alert">
                  <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                </span>
              @enderror
              <x-label for="provinceInput" value="{{ __('Province') }}" />
              <h3 id="province"></h3>
              <x-input type="text" id="provinceInput" wire:model="province" class="hidden"/>
            </div>

            <div class="mt-4">
              @error('city')
                <span class="m" role="alert">
                  <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                </span>
              @enderror
              <x-label for="cityInput" value="{{ __('City/Municipality') }}" />
              <h3 id="city"></h3>
              <input type="text" id="cityInput" wire:model="city" class="hidden"/>
            </div>

            <div class="mt-4">
              @error('display_name')
                <span class="m" role="alert">
                  <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                </span>
              @enderror
              <x-label for="display_nameInput" value="{{ __('Addres') }}" />
              <h3 id="display_name"></h3>
              <input type="text"  id="display_nameInput" wire:model="display_name" class="hidden"/>
            </div>

            <div class="flex gap-2">
              {{-- latitude --}}
              <div class="mt-4 grow">
                  @error('latitude')
                      <span class="m" role="alert">
                          <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                      </span>
                  @enderror
                  <x-label for="latitudeInput" value="{{ __('Latitude') }}" />
                  <span id="latSpan"></span>
                  <input type="text"id="latitudeInput" wire:model="latitude" class="mt-1 w-full hidden" />
              </div>
              
              {{-- longitude --}}
              <div class="mt-4 grow">
                  @error('longitude')
                      <span class="m" role="alert">
                          <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
                      </span>
                  @enderror
                  <x-label for="longitudeInput" value="{{ __('Longitude') }}" />
                  <span id="lngSpan"></span>
                  <input type="text" id="longitudeInput" wire:model="longitude" class="mt-1 w-full hidden" />
              </div>
            </div>
          </div>
      
          <div class="mt-4">
            @error('barangay')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
            @enderror
            <x-label for="barangay" value="{{ __('Barangay') }}" />
            <x-input type="text" id="barangay" wire:model="barangay" class="block mt-1 w-full" placeholder="Enter barangay name" />
          </div>
        
          <div class="mt-4">
            @error('address')
              <span class="m" role="alert">
                <strong class="mt-4 text-sm text-red-600"><i class="fa-solid fa-circle-exclamation"></i> {{ $message }}</strong>
              </span>
            @enderror
            <x-label for="addressInput" value="{{ __('Street and number') }}" />
            <x-input type="text" id="addressInput" wire:model="address" class="block mt-1 w-full" placeholder="Enter street name and number" autocomplete="barangay" />
          </div>
        </div>
      </section>
      {{-- Location -End Section- --}}

      {{-- Amenities -Section- --}}
      @if ($hasIndoorOrOutdoorFeature)    
      <section class="pb-5">
        <x-header-description 
          header="Tell users more about your property" 
          description="Why is your property so great? Tell us more about your property so that property seekers can learn even more about your offer." 
        />
        
        @if ($hasIndoor = true)
        <div class="py-4">
          <h4 class="font-bold text-base">Indoor Features</h4>
          <div class="flex flex-wrap gap-2">
            @foreach ($features as $feat)
            @if ($feat->type == 'indoor')
            <div class="flex items-center pl-4 border-2 bg-slate-800 border-gray-800 rounded-md dark:border-gray-700 grow max-w-[180px]">
              <x-checkbox id="{{ $feat->id }}" wire:model="feature_names" value="{{ $feat->name }}" name="offer_type" />
              <x-label value="{{ $feat->name }}" for="{{ $feat->id }}" class="w-full py-2 mx-2 text-sm text-white font-medium dark:text-gray-300 rounded-md" />
            </div>
            @endif
            @endforeach
          </div>
        </div>
        @endif

        @if ($hasOutdoor = true)
        <div class="py-4 font-bold  text-base">
          <h4>Outdoor Features</h4>
          <div class="flex flex-wrap gap-2">
            @foreach ($features as $feat)
            @if ($feat->type == 'outdoor')
            <div class="flex items-center pl-4 border-2 bg-slate-800 border-gray-800 rounded-md dark:border-gray-700 grow max-w-[180px]">
              <x-checkbox id="{{ $feat->id }}" wire:model="feature_names" value="{{ $feat->name }}" name="offer_type" />
              <x-label value="{{ $feat->name }}" for="{{ $feat->id }}" class="w-full py-2 mx-2 text-sm text-white font-medium dark:text-gray-300 rounded-md" />
            </div>
            @endif
            @endforeach
          </div>
        </div>
        @endif

      </section>
      @endif
      {{-- Amenities -End Section- --}}

      {{-- Contact Details -Section- --}}
      {{-- Key Infomation --}}
      <section class="pb-5">
        <x-header-description 
          header="Please review your contact details" 
          description="Make sure your details are updated so our users can easily contact you at the right channel." 
        />
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
                  <span class="pl-3 font-bold text-xl "> 0  </span>
                </div>
                Ads Quota
              </div>

              <div class="font-bold p-5">
                <div class="flex align-middle items-center text-green-500">
                  <div class="shrink-0 mr-3">
                    <x-heroicon-s-star class="h-8 w-8 rounded-full object-cover"/>
                  </div>
                  <span class="pl-3 font-bold text-xl"> 0 </span>
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
      @if(session()->has('message'))
      <div class="bg-gray-800 text-sm text-white rounded-md shadow-lg dark:bg-gray-900 mt-3" id="output" role="alert">
        <div class="flex p-4">
          {{ session()->get('message') }}
          <div class="ml-auto">
            <button type="button" id="onClickOutput" class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-md text-white/[.5] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-gray-600 transition-all text-sm dark:focus:ring-offset-gray-900 dark:focus:ring-gray-800">
              <span class="sr-only">Close</span>
              <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z" fill="currentColor"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
      @endif
      <x-validation-errors />
    </div>

    {{-- Submit Button --}}
    <x-slot name="actions">
      <x-button wire:loading.attr="disabled" onclick="return confirm('Add Property?');" class="w-2/5 justify-center">
        {{ __('add property') }}
      </x-button>   
    </x-slot>

    <div wire:loading wire:target="addProperty">
      <x-loading>
        <x-slot name="slot">{{__('Processing...')}}</x-slot>
      </x-loading>
    </div>

    <div wire:loading   wire:target="property_type_id" wire:target="img_file_name"  wire:target="docs_file_name">
      <x-loading >
        <x-slot name="slot">{{__('Loading Please wait...')}}</x-slot>
      </x-loading>
    </div>

  </x-slot>
</x-form-section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // Initialize TinyMCE
  tinymce.init({
    selector: 'textarea#text_area',
    // Add TinyMCE configuration options as needed
    setup: function (editor) {
      // Listen for changes in the editor content
      editor.on('input', function () {
        // Get the content from TinyMCE
        var content = editor.getContent();
        // Update the Livewire component property
        @this.set('description', content);
      });
    }
  });
</script>

<script src="{{ asset('js/locationiq.js') }}"></script>

<script>
  marker.on('dragend', function (e) {
    @this.set('latitude', e.target._lngLat.lat);
    @this.set('longitude', e.target._lngLat.lng);
  });

  geocoder.on('result', function (e) {
    @this.set('province', e.result.address.state);
    @this.set('city', e.result.address.name);
    @this.set('display_name', e.result.display_name);
  });
</script>