@props([
    'number'
])
<x-button text="{{ $number }}" wire:click="write({{ $number }})" />
