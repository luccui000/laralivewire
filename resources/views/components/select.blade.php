<div class="block relative w-96 max-w-full dropdown">
    <input
        placeholder="{{ $placeholder }}" disabled
        type="text"
        {{ $attributes->merge(['class' => 'w-full bg-gray-100 text-gray-600 my-2 p-2 rounded focus:outline-none focus:ring-1 focus:border-gray-200 cursor-pointer']) }}
        id="selector"
    />
    <div class="absolute z-99 top-4 right-2 transition-all" id="icon-selector">
        <svg xmlns="http://www.w3.org/2000/svg"
             style="fill: rgba(59, 130, 246, 0.5);"
             width="24" height="24"
             viewBox="0 0 24 24"
        >
            <path d="m11.998 17 7-8h-14z"></path>
        </svg>
    </div>
    <input type="hidden" name="{{ $name }}" >
    <ul class="shadow bg-gray-50 rounded hidden" id="dropdown-item">
        {{ $slot }}
    </ul>
</div>
@push('scripts')
    <script>
        const dropdownItem = document.getElementById("dropdown-item");
        const selectInput = document.getElementById("selector")
        const selector = document.querySelector(`input[name={{ $name }}]`)

        Array.from(dropdownItem.children).forEach(option => {
            option.addEventListener("click", function () {
                const value = this.getAttribute('value');
                selector.value = value;
                selectInput.value = this.textContent.trim();
            })
        })
    </script>
@endpush
