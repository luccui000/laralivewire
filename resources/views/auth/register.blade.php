@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="uppercase font-bold text-blue-500">{{ __('Register') }}</div>
                <div class="">
                    <form method="POST" action="{{ route('register') }}">
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
                        <x-button text="{{ __('Register') }}" type="success"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
