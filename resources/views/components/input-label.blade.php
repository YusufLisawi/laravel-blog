@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-bold mb-2']) }}>
    {{ $value ?? $slot }}
</label>
