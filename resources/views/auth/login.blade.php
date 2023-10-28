@extends('layouts.guest')

@section('content')
    <div>
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container p-5">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            <form method="POST" action="{{ route('login') }}" class="bg-white rounded-2 shadow-5-strong p-5">
                                @csrf
                                <div class="text-center mb-4">
                                    <img src="{{ asset('icons/deliveboo.svg') }}" height="60" alt="Deliveboo logo"
                                        loading="lazy" />
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="email">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center align-items-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="form1Example3" checked />
                                            <label class="form-check-label" for="form1Example3">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col text-center">
                                        @if (Route::has('password.request'))
                                            <a class="text-deliv fs-small btn btn-link"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
