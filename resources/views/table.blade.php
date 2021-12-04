@extends('layouts.app')

@section('content')
    @php
        $users = array(
            array('id' => 1, 'first_name' => 'First', 'last_name' => 'Name', 'email' => 'admin@gmail.com', 'gender' => 'Male', 'phone' => '03999'),
            array('id' => 2, 'first_name' => 'First', 'last_name' => 'Name', 'email' => 'admin@gmail.com', 'gender' => 'Male', 'phone' => '03999'),
            array('id' => 3, 'first_name' => 'First', 'last_name' => 'Name', 'email' => 'admin@gmail.com', 'gender' => 'Male', 'phone' => '03999'),
            array('id' => 4, 'first_name' => 'First', 'last_name' => 'Name', 'email' => 'admin@gmail.com', 'gender' => 'Male', 'phone' => '03999'),
            array('id' => 5, 'first_name' => 'First', 'last_name' => 'Name', 'email' => 'admin@gmail.com', 'gender' => 'Male', 'phone' => '03999'),
        );
    @endphp
    <div class="container mx-auto px-4">
        <h1 class="text-3xl py-4 border-b mb-4">Datatable</h1>

        <div class="mb-4 flex justify-between items-center">
            <div class="flex-1 pr-4">
                <div class="relative md:w-1/3">
                    <input type="search"
                           class="w-full pl-10 pr-4 py-2 rounded shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                           placeholder="Search...">
                    <div class="absolute top-0 left-0 inline-flex items-center p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                             stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                             stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <circle cx="10" cy="10" r="7" />
                            <line x1="21" y1="21" x2="15" y2="15" />
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <x-select name="user_id" placeholder="Select here" class="w-20" >
                    @foreach($users as $user)
                        <x-select.option
                            value="{{ $user['id'] }}"
                            isFist="{{ $loop->first }}"
                            isLast="{{ $loop->last }}"
                        >
                            {{ $user['first_name'] }} - {{ $user['id'] }}
                        </x-select.option>
                    @endforeach
                </x-select>
            </div>
        </div>
        <x-table>
            <x-slot name="heading">
                <th class="text-center py-2 px-3 sticky top-0 border-b border-gray-200 bg-gray-100">
                    <label class="text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded cursor-pointer">
                        <input type="checkbox" class="form-checkbox focus:outline-none focus:shadow-outline" >
                    </label>
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs" >
                    USER ID
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    First name
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    Last Name
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    Email
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    Gender
                </th>
                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                    Phone
                </th>
            </x-slot>
            @foreach($users as $user)
                <x-table.row isEven="{{ $loop->even }}">
                    <x-table.data class="text-center">
                        <label
                            class=" text-teal-500 inline-flex justify-between items-center hover:bg-gray-200 px-2 py-2 rounded cursor-pointer">
                            <input type="checkbox" class="form-checkbox rowCheckbox focus:outline-none focus:shadow-outline" >
                        </label>
                    </x-table.data>
                    <x-table.data>{{ $user['id'] }}</x-table.data>
                    <x-table.data>{{ $user['first_name'] }}</x-table.data>
                    <x-table.data>{{ $user['last_name'] }}</x-table.data>
                    <x-table.data>{{ $user['email'] }}</x-table.data>
                    <x-table.data>{{ $user['gender'] }}</x-table.data>
                    <x-table.data>{{ $user['phone'] }}</x-table.data>
                </x-table.row>
            @endforeach
        </x-table>
    </div>
@endsection
