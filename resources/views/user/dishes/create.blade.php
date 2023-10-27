@extends('layouts.app')
@section('content')
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-10">
                <h2>Form creazione dish</h2>
                    @include('user.dishes.partials.form', [
                        'method' => 'POST',
                        'routeForm' => 'dishes.store',
                    ])
            </div>
        </div>
    </div>
@endsection