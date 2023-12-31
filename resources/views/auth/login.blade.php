@extends('layouts.guest')

@section('content')
    <div id="intro" class="wrapper wrapper-login">
        <div class="d-flex align-items-center">
            {{-- <div class="container p-5"> --}}
            <div class="row p-2 justify-content-center">
                <div class="col-12">
                    <form method="POST" action="{{ route('login') }}" class="bg-white rounded-2 shadow-5-strong p-5">
                        @csrf
                        <div class="text-center mb-4">
                            <img src="{{ asset('icons/deliveboo.svg') }}" height="60" alt="Deliveboo logo"
                                loading="lazy" />
                        </div>
                        <!-- Email input -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="form-outline">
                                    <input class="form-control form-control-lg" id="email" type="email"
                                        class="form-control @error('email') error @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" />
                                    <label class="form-label" for="email">Email address</label>
                                </div>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- Password input -->
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="form-outline">
                                    <input id="password" type="password"
                                        class="form-control form-control-lg @error('password') error @enderror"
                                        name="password">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-3">
                            <div class="col d-flex justify-content-center align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberme"
                                        checked />
                                    <label class="form-check-label fs-small" for="rememberme">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="col text-center">
                                @if (Route::has('password.request'))
                                    <a class="text-deliv fs-small btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
