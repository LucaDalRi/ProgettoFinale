@extends('layouts.guest')

@section('content')
    <div>
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container p-5">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-md-8">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}"
                                class="bg-white  rounded-2 shadow-5-strong p-5">
                                @csrf
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="{{ asset('icons/deliveboo.svg') }}" height="60" alt="Deliveboo logo"
                                        loading="lazy" />
                                </div>
                                <div class="mb-4 row">
                                    <div class="col">
                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                                autocomplete="email" required
                                                class="form-control form-control-lg @error('email') is-invalid @enderror" />
                                            <label class="form-label" for="email">Email address</label>
                                        </div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row mb-0">
                                    <div class="">
                                        <button type="submit" class="w-100 btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
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
