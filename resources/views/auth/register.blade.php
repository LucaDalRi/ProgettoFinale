@extends('layouts.guest')

@section('content')
    <div>
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container p-5">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form method="POST" action="{{ route('register') }}"
                                class="bg-white rounded-2 shadow-5-strong p-5">
                                @csrf
                                {{-- logo --}}
                                <div class="text-center mb-4">
                                    <img src="{{ asset('icons/deliveboo.svg') }}" height="60" alt="Deliveboo logo"
                                        loading="lazy" />
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- user name --}}
                                        <div class="form-outline mb-4">
                                            <input id="name" type="text"
                                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                name="name" value="{{ old('name') }}" required>

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
                                                name="restaurant_name" value="{{ old('restaurant_name') }}" required>

                                            @error('restaurant_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="restaurant_name"
                                                class="form-label">{{ __('Restaurant name') }}</label>
                                        </div>
                                        {{-- address --}}
                                        <div class="form-outline mb-4">
                                            <input id="address" type="text"
                                                class="form-control form-control-lg @error('address') is-invalid @enderror"
                                                name="address" value="{{ old('address') }}" required>

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
                                                name="piva" value="{{ old('piva') }}" required>

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
                                                name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                                name="password" required>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                        </div>

                                        {{-- confirm password --}}
                                        <div class="form-outline mb-4">
                                            <input id="password-confirm" type="password"
                                                class="form-control form-control-lg" name="password_confirmation" required>
                                            <label for="password-confirm"
                                                class="form-label">{{ __('Confirm Password') }}</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">
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
    </div>
@endsection
