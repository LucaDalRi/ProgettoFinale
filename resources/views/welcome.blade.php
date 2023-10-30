@extends('layouts.guest')
@section('content')
    <div class="row justify-content-center mb-3 w-100">
        <div class="col-9">
            <!-- Benvenuti -->
            <section>
                <div class="row align-items-center p-5">
                    <!-- Header text content-->
                    <div class="text-xxl-start">
                        <div class="badge bg-team1 mb-4">
                            <div class="text-uppercase">order &middot; eat &middot; enjoy</div>
                        </div>
                        <div class="fs-3 fw-light text-muted">Get ready</div>
                        <h1 class="display-3 fw-bolder mb-5">
                            <span class="text-gradient">Benvenuto!</span>
                        </h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-md-start mb-3">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="#"
                                type="button">Accedi</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="#"
                                type="button">Registrati</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <div class="row w-100">
        <div class="col-12">
            <!-- About Section-->
            <section>
                <div class="justify-content-center text-center">
                    <h2 class="display-5 fw-bolder mb-3"><span class="text-gradient d-inline">About Us</span>
                    </h2>
                    <p class="fw-light mb-5"><span class="text-muted">Made with &hearts;</span> by da Francesco, Luca,
                        Arianna e Giulia</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
