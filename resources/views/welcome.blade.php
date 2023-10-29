@extends('layouts.guest')
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="mt-2 ms-3">
                <!-- Header profile picture-->
                <div class="d-flex mt-5 mt-xxl-0">
                    <div class="profile">
                        <img class="profile-img" src="{{ asset('/icons/deliveboo.svg') }}" style="width: 200px" />
                    </div>
                </div>
            </div>
            <main class="d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <!-- Benvenuti -->
                        <section class="py-5 px-5 bg-light">
                            <div class="container px-5 pb-5">
                                <div class="row gx-5 align-items-center">
                                    <div class="col-xxl-5">
                                        <!-- Header text content-->
                                        <div class="text-center text-xxl-start">
                                            <div class="badge bg-team1  mb-4">
                                                <div class="text-uppercase">order &middot; eat &middot; enjoy</div>
                                            </div>
                                            <div class="fs-3 fw-light text-muted">Get ready</div>
                                            <h1 class="display-3 fw-bolder mb-5"><span
                                                    class="text-gradient d-inline">Benvenuto!</span>
                                            </h1>
                                            <div
                                                class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                                    href="#" type="button">Accedi</a>
                                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                                    href="#" type="button">Registrati</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                        </section>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- About Section-->
                        <section class="bg-light">
                            <div class="row gx-5 justify-content-center text-center">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Us</span>
                                </h2>
                                <p class="lead fw-light mb-4">Questa pagina è stata creata da Francesco, Luca,
                                    Arianna e
                                    Giulia
                                </p>
                                <p class="text-muted">Made with &hearts;</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </main>


        </div>
        <!-- Footer-->
        <footer class="bg-white border-top py-4 mt-auto position-sticky w-100">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0">Copyright &copy; Your Website 2023</div>
                    </div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
