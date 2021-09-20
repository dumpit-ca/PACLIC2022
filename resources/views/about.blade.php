@extends('template.master')
@section('css', 'main')
@section('content')
<link rel="stylesheet" href="/css/about.css">
@include('template.banner')
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
            <div class="floating-underline">
                <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                    <span class="font-weight-bold" id="paclic-header">PACLIC</span>
                    <span class="font-weight-bold" id="paclic-header-conference">CONFERENCES</span>
                </span> 
            </div>                      
        <p class="text-white text-center pb-5">Since the 18th Pacific Asia Conference on Language, Information and
            Computation, each PACLIC conference is organized
            under the auspices of the PACLIC Steering Committee.</p>
        {{-- Past conference card --}}
        @for($i=0;$i<7;$i++)
        <div class="row d-flex justify-content-center">
            @for($j=0;$j<3;$j++)
            <div class="col-lg-3 col-sm-6 mx-3 pt-3">
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
            @endfor
        </div>
        <div class="p-4">
            <hr>
        </div>
        @endfor
    </div>
</section>
<section class="background-page">
    <div class="container-fluid">
        {{-- Organizers --}}
        <div class="floating-underline alt">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold" id="paclic-header-org">PACLIC</span>
                <span class="font-weight-bold" id="paclic-header-organizers">ORGANIZERS</span>
            </span> 
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-4 text-center">
                <img class="img-fluid organizer" src="/img/businessmanV1.png" alt="org1">
            </div>
            <div class="col-lg-6 pt-3">
                <h3 class="font-weight-bold organizer-name">Lorem Ipsum</h3>
                <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eligendi excepturi quidem repellendus tempore ad, obcaecati sint corrupti temporibus dolorem maxime nihil quasi est quam saepe neque libero nostrum tempora!</p>
            </div>
            <div class="col-lg-4 text-center mt-5">
                <img class="img-fluid organizer" src="/img/businessmanV1.png" alt="org1">
            </div>
            <div class="col-lg-6 pt-sm-3">
                <h3 class="font-weight-bold organizer-name mt-5 mt-sm">Lorem Ipsum</h3>
                <p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eligendi excepturi quidem repellendus tempore ad, obcaecati sint corrupti temporibus dolorem maxime nihil quasi est quam saepe neque libero nostrum tempora!</p>
            </div>
        </div> 
    </div>
        
    
</section>
@endsection