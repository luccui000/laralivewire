<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        @stack('styles')
    </head>
    <body>
        <div class="p-10">
            @php
                $users = array(
                    array('id' => 1, 'name' => 'Item 1', 'age' => 21),
                    array('id' => 2, 'name' => 'Item 2', 'age' => 21),
                    array('id' => 3, 'name' => 'Item 3', 'age' => 21),
                    array('id' => 4, 'name' => 'Item 4', 'age' => 21),
                );
            @endphp
            <form action="{{ route('home.store') }}" method="post">
                @csrf
                <x-form for="email" label="Email">
                    <x-form.input name="email" placeholder="Nhập vào email..." id="email" />
                </x-form>
                <x-form label="Username">
                    <x-form.input name="username" placeholder="Nhập vào username..." id="Username" />
                </x-form>
                <x-form label="Password">
                    <x-form.input name="password" placeholder="Nhập vào username..." id="Password" />
                </x-form>
                <x-select name="user_id" placeholder="Select here" >
                    @foreach($users as $user)
                        <x-select.option
                            value="{{ $user['id'] }}"
                            isFist="{{ $loop->first }}"
                            isLast="{{ $loop->last }}"
                        >
                            {{ $user['name'] }}
                        </x-select.option>
                    @endforeach
                </x-select>
                <x-button :text="'Send'" type="success"/>
            </form>
            <x-card>
                <p>Lorem ipsum </p>
                <x-button :text="'Go now'" type="success"/>
            </x-card>
            <x-button :text="'Go now'" type="success"/>
            <x-button :text="'Go now'" type="danger"/>
            <x-button :text="'Go now'" type="warning"/>
            <x-button :text="'Go now'" type="default"/>

            <x-alert :message="'Hello world'" type="success" size="sm" />
            <x-alert :message="'Hello world'" type="danger" />
            <x-alert :message="'Hello world'" type="warning" />
            <x-alert :message="'Hello world'" type="default" />
            <x-table></x-table>
        </div>
        @livewireScripts
            <x-table>
                <x-slot name="heading">
                    <x-table.heading>#</x-table.heading>
                    <x-table.heading>Name</x-table.heading>
                    <x-table.heading>Age</x-table.heading>
                </x-slot>
                @foreach($users as $user)
                    <x-table.row isEven="{{ $loop->even }}">
                        <x-table.data class="text-center">{{ $user['id'] }}</x-table.data>
                        <x-table.data>{{ $user['name'] }}</x-table.data>
                        <x-table.data>{{ $user['age'] }}</x-table.data>
                    </x-table.row>
                @endforeach
            </x-table>
        </div>
    @stack('scripts')
    </body>
</html>
