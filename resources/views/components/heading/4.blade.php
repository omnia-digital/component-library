@props([
    'boldClass' => 'font-medium'
])

@php
    $class = 'text-base leading-6 text-dark-text-color ' . $boldClass;
@endphp

<h3 {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</h3>
