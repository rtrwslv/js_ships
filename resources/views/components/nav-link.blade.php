@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-main-blue text-text-cream rounded-lg p-2 mr-4'
            : 'bg-main-blue text-text-cream rounded-lg p-2 mr-4';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
