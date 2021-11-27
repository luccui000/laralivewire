<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        @livewireStyles
    </head>
    <body>
        <div class="p-10">
            <x-select name="list" :placeholder="'Select here'" class="">
                <x-select.option value="1" wire:click="setOption" class="rounded-tl rounded-tr">list 1</x-select.option>
                <x-select.option value="2" wire:click="setOption">list 2</x-select.option>
                <x-select.option value="3" wire:click="setOption">list 3</x-select.option>
                <x-select.option value="4" wire:click="setOption">list 4</x-select.option>
                <x-select.option value="5" wire:click="setOption" class="rounded-bl rounded-br">list 5</x-select.option>
            </x-select>
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
    </body>
</html>
