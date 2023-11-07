@extends('layouts.app')

@section('content')
    <div class="container pt-4 mt-5 d-flex justify-content-center">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-lg-4">
                    <img src="{{ $restaurant->photo }}" alt="{{ $restaurant->name }} photo" class="rounded-start img-fluid h-100 p-2" />
                </div>
                <div class="col-lg-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="head-title mb-4">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="card-title m-0 d-inline-block">{{ $restaurant->name }}</h3>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="py-0 my-0">Indirizzo</h5>
                                <p class="card-text text-muted">{{ $restaurant->address }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h5 class="py-0 my-0">P.iva</h5>
                                <p class="card-text text-muted">{{ $restaurant->piva }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
