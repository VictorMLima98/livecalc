@props([
    'text'
])

@php
    $class = "p-8 transition duration-150 ease-out hover:ease-in cursor-pointer hover:text-gray-500";

    $text = $text ?? '';
@endphp

<div {{ $attributes->merge(['class' => $class]) }}>
    {{ $text }}
</div>
