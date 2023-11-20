@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center mt-2 mb-2 px-1 py-1 text-md font-medium leading-5 text-gray-800 border-b-2 border-gray-600
    focus:outline-none focus:border-gray-700 transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 py-1 border-b-2 border-transparent text-sm font-medium leading-5 
    text-gray-600 hover:text-gray-800 mt-2 mb-2 hover:border-gray-500 focus:outline-none focus:text-gray-800 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
