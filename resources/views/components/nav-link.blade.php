
@props(['active' => false])

<a {{ $attributes->class([
        'bg-gray-900' => $active,
        'text-gray-300 hover:bg-gray-700 hover:text-white' => !$active,
        'rounded-md px-3 py-2 text-sm font-medium text-white'
    ]) }} aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>