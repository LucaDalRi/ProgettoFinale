@extends('layouts.app')
@section('content')
    <div class="container pt-4">
        <div class="row justify-content-center mb-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="fw-medium text-muted">Create new dish</div>
                    </div>
                    <div class="card-body">
                        @include('user.dishes.partials.form', [
                            'method' => 'POST',
                            'routeForm' => 'dishes.store',
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
