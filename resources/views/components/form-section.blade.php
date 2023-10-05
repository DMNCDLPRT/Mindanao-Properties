@props(['submit'])

<div {{ $attributes->merge(['class' => 'dark:bg-gray-800 p-4 rounded dark:text-white']) }}> 
    
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5 md:mt-0 md:col-span-2 ">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="py-5 dark:bg-slate-700 sm:p-6 {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                @if (Route::has('portal'))
                <div class="grid grid-cols-6 gap-6">
                @else
                <div>
                @endif
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-center px-4 py-3 bg-gray-50 text-center sm:px-6 sm:rounded-bl-md sm:rounded-br-md dark:bg-slate-700">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
