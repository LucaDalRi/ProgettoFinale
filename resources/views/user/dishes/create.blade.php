@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
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