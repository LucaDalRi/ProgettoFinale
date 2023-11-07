@extends('layouts.app')
@section('content')
    <div class="container pt-4">
        <div class="row justify-content-center mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="fw-medium text-muted">Edit restaurant
                            <span class="fst-italic">{{ $restaurant->id }}</span>:
                            <span class="fst-italic">{{ $restaurant->name }}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('user.restaurants.partials.form', [
                            'method' => 'PUT',
                            'routeForm' => 'restaurants.update',
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
