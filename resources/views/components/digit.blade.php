@props([
    'number'
])

@php
   $class = "w-full p-6 m-2 text-white transition duration-150 ease-out rounded-full cursor-pointer place-self-center hover:ease-in bg-apple-black hover:bg-apple-dark-gray";

    $number = $number ?? '';
@endphp

<div {{ $attributes->merge(['class' => $class]) }} wire:click="write({{ $number }})">
    {{ $number }}
</div>
