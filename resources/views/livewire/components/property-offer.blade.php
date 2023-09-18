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

      <x-label for="offer_type_div" value="{{ __('Offer Type') }}" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" />
      
      <div class="flex gap-2" id="offer_type_div">
        @foreach ($offer_type as $type)
        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700 grow">
          <x-radio id="{{ $type->name }}" wire:model="offer_type_id" value="{{ $type->id }}" name="offer_type" />
          <x-label value="{{ $type->name }}" for="{{ $type->name }}" class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" />
         
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
      <x-label for="property_type" value="{{ __('Property Type') }}" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" />
      <div class="flex gap-2">
        @foreach ($property_type as $type)
        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700 grow">
          <x-radio name="property_type" id="{{ $type->name }}" value="{{ $type->id }}" wire:model="property_type_id" wire:click="wirePropertyClick({{ $type->id }})" />
          <x-label value="{{ $type->name }}"  for="{{ $type->name }}"  class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" />         
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

      <x-label for="subtype_id" value="{{ __('Property Type') }}" class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" />
      <div class="flex gap-2">
        @foreach ($subtypes as $type)
        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700 grow">
          <x-radio id="{{ $type->subtype }}" wire:model="subtype_id" value="{{ $type->id }}" name="subtype_id" />
          <x-label value="{{ $type->subtype }}"  for="{{ $type->subtype }}"  class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300" />
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
      <x-label for="title" value="{{ __('Title') }}"  class="block mb-2 mt-2 text-sm font-medium text-gray-900 dark:text-gray-500" />
      <x-input id="title" wire:mode="title" name="title" class="block mt-1 w-full" autofocus placeholder="e.g. 2 Bedroom apartment with seaside" /> 
    </div>

    {{-- Property Description -Input- --}}
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
      <textarea wire:ignore wire:model="description" id="text_area"></textarea> 
    </div>
  </section>
