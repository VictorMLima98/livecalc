@props([
    'text'
])

@php
    $class = "w-full p-6 m-2 text-white transition duration-150 ease-out rounded-full cursor-pointer place-self-center hover:ease-in bg-apple-black";
    $text = $text ?? '';
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $text }}
</div>
