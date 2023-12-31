@extends('layouts.app')

@section('content')
    <div class="container pt-3">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="fw-medium text-muted">
                            Ciao <span class="fst-italic">{{ Auth::user()->name }}</span>,
                            dashboard del ristorante: <span class="fst-italic">{{ $restaurant->name }}</span>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
