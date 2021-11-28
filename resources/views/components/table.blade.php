<div class="block w-96 overflow-x-auto">
    @php
        $users = array(
            array(
                'id' => 1,
                'name' => 'Luc Cui',
                'age' => 20,
            ),
            array(
                'id' => 2,
                'name' => 'Admin',
                'age' => 20,
            ),
            array(
                'id' => 3,
                'name' => 'Guest',
                'age' => 20,
            ),
            array(
                'id' => 3,
                'name' => 'Guest',
                'age' => 20,
            ),
            array(
                'id' => 3,
                'name' => 'Guest',
                'age' => 20,
            )
        );
    @endphp
    <table class="items-center bg-transparent w-full border-collapse">
        <thead>
            <tr>
                {{ $heading }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
