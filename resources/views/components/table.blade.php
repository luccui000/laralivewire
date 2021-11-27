<div class="p-4">
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
    <table class="border-2">
        <x-table.thead>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
        </x-table.thead>
        <x-table.tbody>
            @foreach($users as $user)
                <x-table.row isEven="{{ $loop->even }}">
                    <x-table.data>{{ $user['id'] }}</x-table.data>
                    <x-table.data>{{ $user['name'] }}</x-table.data>
                    <x-table.data>{{ $user['age'] }}</x-table.data>
                </x-table.row>
            @endforeach
        </x-table.tbody>
    </table>
</div>
