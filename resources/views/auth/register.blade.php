@extends('layouts.guest')

@section('content')
    <div id="intro" class="wrapper h-100">
        <div class="d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('register') }}" class="bg-white rounded-2 shadow-5-strong p-5">
                            @csrf
                            {{-- logo --}}
                            <div class="text-center mb-4">
                                <img src="{{ asset('icons/deliveboo.svg') }}" height="60" alt="Deliveboo logo"
                                    loading="lazy" />
                            </div>
                            <div class="row g-2">
                                <div class="col-lg-12">
                                    {{-- user name --}}
                                    <div class="form-outline mb-4">
                                        <input id="name" type="text"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="name" class="form-label">{{ __('User name') }}</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    {{-- restaurant name --}}
                                    <div class="form-outline mb-4">
                                        <input id="restaurant_name" type="text"
                                            class="form-control form-control-lg @error('restaurant_name') is-invalid @enderror"
                                            name="restaurant_name" value="{{ old('restaurant_name') }}">

                                        @error('restaurant_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="restaurant_name" class="form-label">{{ __('Restaurant name') }}</label>
                                    </div>
                                    {{-- address --}}
                                    <div class="form-outline mb-4">
                                        <input id="address" type="text"
                                            class="form-control form-control-lg @error('address') is-invalid @enderror"
                                            name="address" value="{{ old('address') }}">

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="address" class="form-label">{{ __('Address') }}</label>
                                    </div>

                                    {{-- VAT --}}
                                    <div class="form-outline mb-4">
                                        <input id="piva" type="text"
                                            class="form-control form-control-lg @error('piva') is-invalid @enderror"
                                            name="piva" value="{{ old('piva') }}">

                                        @error('piva')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="piva" class="form-label">{{ __('Partita iva') }}</label>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    {{-- email --}}
                                    <div class="form-outline mb-4">
                                        <input id="email" type="email"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="email" class="form-label">{{ __('E-Mail') }}</label>
                                    </div>

                                    {{-- password --}}
                                    <div class="form-outline mb-4">
                                        <input id="password" type="password"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                                            name="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                    </div>

                                    {{-- confirm password --}}
                                    <div class="form-outline mb-4">
                                        <input id="password-confirm" type="password" class="form-control form-control-lg"
                                            name="password_confirmation">
                                        <label for="password-confirm"
                                            class="form-label">{{ __('Confirm Password') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow-none mb-3">
                                <p class="m-1">Typologies</p>
                                <div class="row border rounded-2 m-0">
                                    @foreach ($typologies as $typology)
                                        <div class="col-6 p-2">
                                            <input id="{{ $typology->id }}" type="checkbox" class="form-check-input"
                                                name="typologies[]" value="{{ $typology->id }}">
                                            <label class="form-check-label ms-1"
                                                for="typologies">{{ $typology->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
