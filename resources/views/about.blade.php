@extends('template.master')
@section('css', 'main')
@section('content')
<link rel="stylesheet" href="/css/about.css">
@include('template.about-banner')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 pt-3 col-sm d-flex align-items-center ml-auto my-auto">
            <p class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quam vitae
                quod voluptatum quibusdam fugiat, esse voluptatibus corporis dolorum adipisci neque obcaecati blanditiis
                optio praesentium tempore in reiciendis facilis. Facere ipsam itaque non fugit quibusdam eius totam
                earum sint expedita.</p>
        </div>
        <div class="col-lg-3 pt-3 my-auto d-flex flex-row-reverse mx-auto">
            <img class="img-fluid img-logo" src="/img/sample_logo.png" alt="logo">
        </div>
    </div>
</div>
{{-- Past conference --}}
<section class="mt-2" id="conference">
    <div class="container-fluid">
        {{-- Header --}}
        <h4 class="text-center p-4">
            <span class="font-weight-bold" id="paclic-header">PACLIC</span>
            <span class="font-weight-bold" id="paclic-header-conference">CONFERENCES</span>
        </h4>
        <p class="text-white text-center pb-5">Since the 18th Pacific Asia Conference on Language, Information and
            Computation, each PACLIC conference is organized
            under the auspices of the PACLIC Steering Committee.</p>
        {{-- Past conference card --}}
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <hr>
        </div>
        {{-- Second row --}}
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <hr>
        </div>
        {{-- Third Row --}}
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mx-3">
                <div class="card p-2">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">PACLIC 34 (2020)</h5>
                        <p class="card-text mb-1">
                            <span>Dates:</span>
                            <span>October 24-26, 2020</span>
                        </p>
                        <p class="card-text">
                            <span>Venue:</span>
                            <span>Vietnam National University, Hanoi, Vietnam (Online) </span>
                        </p>               
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <hr>
        </div>
    </div>
</section>

@endsection