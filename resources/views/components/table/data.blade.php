<div>
    <td {{ $attributes->merge([
        'class' => 'border-t-0 py-2 align-middle border-l-0 border-r-0 whitespace-nowrap text-left text-gray-800'])
        }}
    >
        {{ $slot }}
    </td>
</div>
