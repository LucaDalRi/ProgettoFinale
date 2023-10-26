@extends('layouts.app')
@section('title') {{'Welcome'}} @endsection

@section('content')
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('/img/logo.png') }}" alt="Logo" height="70"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button class="btn btn-outline-light"><a class="nav-link" href="#">Accedi</a></button>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-outline-light"><a class="nav-link" href="#">Registrati</a></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <div class="row">
           <div class="col-12">
           
           </div>
        </div>
    </main>
     
@endsection