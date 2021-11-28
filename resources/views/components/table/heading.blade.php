<div>
    <th {{ $attributes->merge([
            'class' => 'bg-gray-50 text-gray-500 align-middle border border-gray-400 py-2 border-l-0 border-r-0 uppercase whitespace-nowrap text-left pl-2'])
            }}>
        <span>{{ $slot }}</span>
    </th>
</div>
