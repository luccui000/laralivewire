<div class="overflow-x-auto bg-white rounded shadow overflow-y-auto relative">
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
    <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
        <thead>
            <tr class="text-left">
                {{ $heading ?? '' }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
