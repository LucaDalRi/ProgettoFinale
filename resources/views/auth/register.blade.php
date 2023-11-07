@extends('layouts.guest')

@section('content')
    <div id="intro" class="wrapper h-100">
        <div class="d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <form method="POST" action="{{ route('register') }}" class="bg-white rounded-2 shadow-5-strong p-5">
                            @csrf
                            {{-- logo --}}
                            <div class="text-center mb-4">
                                <img src="{{ asset('icons/deliveboo.svg') }}" height="60" alt="Deliveboo logo"
                                    loading="lazy" />
                            </div>
                            <div class="row g-2">
                                {{-- user name --}}
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input id="name" type="text"
                                                class="form-control form-control-lg @error('name') error @enderror"
                                                name="name" value="{{ old('name') }}">
                                            <label for="name" class="form-label">{{ __('User name') }}</label>
                                        </div>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                {{-- restaurant name --}}
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input id="restaurant_name" type="text"
                                                class="form-control form-control-lg @error('restaurant_name') error @enderror"
                                                name="restaurant_name" value="{{ old('restaurant_name') }}">
                                            <label for="restaurant_name"
                                                class="form-label">{{ __('Restaurant name') }}</label>
                                        </div>
                                        @error('restaurant_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                {{-- VAT --}}
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input id="piva" type="text"
                                                class="form-control form-control-lg @error('piva') error @enderror"
                                                name="piva" value="{{ old('piva') }}">
                                            <label for="piva" class="form-label">{{ __('Partita iva') }}</label>
                                        </div>
                                        @error('piva')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    {{-- email --}}
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input id="email" type="email"
                                                class="form-control form-control-lg @error('email') error @enderror"
                                                name="email" value="{{ old('email') }}" autocomplete="email">
                                            <label for="email" class="form-label">{{ __('E-Mail') }}</label>
                                        </div>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                {{-- password --}}
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input id="password" type="password"
                                                class="form-control form-control-lg @error('password') error @enderror"
                                                name="password">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                        </div>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                {{-- confirm password --}}
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input id="password-confirm" type="password"
                                                class="form-control form-control-lg" name="password_confirmation">
                                            <label for="password-confirm"
                                                class="form-label">{{ __('Confirm Password') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    {{-- address --}}
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input id="address" type="text"
                                                class="form-control form-control-lg @error('address') error @enderror"
                                                name="address" value="{{ old('address') }}">
                                            <label for="address" class="form-label">{{ __('Address') }}</label>
                                        </div>
                                        @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="shadow-none mb-3">
                                    <p class="m-1" style="color: var(--bs-secondary-color);">Typologies</p>
                                    <div class="row border rounded-2 m-0" style="color: var(--bs-secondary-color);">
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
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
