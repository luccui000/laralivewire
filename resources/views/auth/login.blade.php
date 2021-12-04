@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="hover:shadow p-4 transition-shadow duration-300">
                    <div class="uppercase font-bold text-blue-500">{{ __('Login') }}</div>
                    <div class="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <x-form for="email" label="Email">
                                <x-form.input name="email" placeholder="Nhập vào email..." id="email" />
                            </x-form>
                            <x-form label="Password">
                                <x-form.input name="password" placeholder="Nhập vào username..." id="Password" />
                            </x-form>
                            <x-button text="{{ __('Login') }}" type="success"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
