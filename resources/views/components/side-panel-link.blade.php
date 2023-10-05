@php
$classes = ($active ?? false)
            ? 'text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $svg }}
    <span class="ml-3 text-white">{{ $name }}</span>
 </a>