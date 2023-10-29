@extends('layouts.app')

@section('content')
    <div class="container pt-4 mt-5 d-flex justify-content-center">
        {{-- <h1>Piatto numero {{$dish->id}}</h1> --}}
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-lg-4">
                    <img src="{{ $dish->photo }}" alt="{{ $dish->name }} photo" class="rounded-start img-fluid h-100 p-2" />
                </div>
                <div class="col-lg-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="head-title mb-4">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="card-title m-0 d-inline-block">{{ $dish->name }}</h3>
                                            <div
                                                class="circle d-none d-sm-block {{ $dish->visible ? 'circle-green' : 'circle-red' }}">
                                                {{ $dish->visible ? 'Disponibile' : 'Esaurito' }}</div>
                                            <div class="circle d-sm-none {{ $dish->visible ? 'circle-green' : 'circle-red' }}"
                                                style="width: 1rem; height:1rem">
                                            </div>
                                        </div>
                                        <small class="text-muted align-top">{{ $dish->ingredients }}</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="py-0 my-0">Descrizione</h5>
                                <p class="card-text text-muted">{{ $dish->description }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h5 class="py-0 my-0">Prezzo</h5>
                                <p class="card-text text-muted">{{ $dish->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
