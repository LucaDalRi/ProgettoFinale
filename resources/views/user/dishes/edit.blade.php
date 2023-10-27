@extends('layouts.app')
@section('content')

    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-10">
                <h2>Form edit dish {{$dish->id}}: {{$dish->name}}</h2>
                    @include('user.dishes.partials.form', [
                    'method' => 'PUT',
                    'routeForm' => 'dishes.update',
                ])
            </div>
        </div>
    </div>
@endsection