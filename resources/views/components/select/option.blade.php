<<<<<<< HEAD
<div>
    <li {{ $attributes->merge(['class' => 'p-2 cursor-pointer hover:bg-gray-200']) }} >{{ $slot }}</li>
</div>
=======
<li value="{{ $value }}" {{ $attributes->merge(['class' => 'p-2 cursor-pointer hover:bg-gray-200 text-gray-700' . $makeBorderOption()]) }} >
    {{ $slot }}
</li>
>>>>>>> master
