<div class="block relative w-96 max-w-full mb-4 dropdown">
    <input
        placeholder="{{ $placeholder }}" disabled
        {{ $attributes->merge(['class' => 'w-full bg-gray-100 text-gray-600 my-2 p-2 rounded focus:outline-none focus:ring-1 focus:border-gray-200 cursor-pointer']) }}
        id="selector" />
    <div class="absolute z-99 top-4 right-2 transition-all" id="icon-selector">
        <svg xmlns="http://www.w3.org/2000/svg"  style="fill: rgba(59, 130, 246, 0.5);" width="24" height="24" viewBox="0 0 24 24"><path d="m11.998 17 7-8h-14z"></path></svg>
    </div>
    <ul class="shadow bg-gray-100 rounded hidden transition-all" id="dropdown-item">
        {{ $slot }}
    </ul>
</div>

