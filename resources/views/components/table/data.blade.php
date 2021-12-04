<div>
    <td {{ $attributes->merge([
        'class' => 'border-dashed border-t border-gray-200'])
        }}
    >
        <span class="text-gray-700 px-6 py-3 flex items-center">{{ $slot }}</span>
    </td>
</div>
