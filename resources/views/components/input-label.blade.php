@props(['value'])

<label {{ $attributes->merge(['class' => 'text-black dark:text-white block text-sm font-bold mb-2']) }}>
    {{ $value ?? $slot }}
</label>
