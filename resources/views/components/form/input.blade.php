<div class="block w-96 max-w-full">
    <input
        name='{{ $name }}'
        placeholder="{{ $placeholder }}"
        type="text" {{ $attributes->merge(['class' => 'w-full bg-gray-100 text-gray-600 p-2 rounded transition duration-200 focus:outline-none focus:ring-1 focus:border-gray-200']) }}
        {{ $attributes }}
    />
</div>
