@extends('template.master')
@section('css', 'main')

@section('content')
    <link rel="stylesheet" href="/css/registration.css">
@include('template.banner')
    <section>
        <div class="floating-underline alt mt-5">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold text-dark">REGISTRATION</span>
                <span class="font-weight-bold paclic-header-green">FEES</span>
            </span>
        </div>
        <div class="container">
            <div class="text-center d-flex flex-row justify-content-center align-items-center mx-auto px-2 pt-5">
                <label class="display-5 font-weight-bold mx-auto">Type </label>
                <label class=" display-5 font-weight-bold mx-auto">Local</label>
                <label class="display-5 font-weight-bold mx-auto">Non-Local</label>
            </div>
            <hr>
            <div class="text-center d-flex flex-row justify-content-center align-items-center mx-auto px-2">
                <label class="display-5 lead mx-auto">Regular</label>
                <label class=" display-5 lead  mx-auto">PHP 2,500</label>
                <label class="display-5 lead mx-auto">USD 60</label>
            </div>
            <hr>
            <div class="text-center d-flex flex-row justify-content-center align-items-center mx-auto px-2 pb-5">
                <label class="display-5 lead mx-auto">Student</label>
                <label class=" display-5 lead  mx-auto">PHP 1,500</label>
                <label class="display-5 lead mx-auto">USD 40</label>
            </div>          
        </div>
    </section>
    <section class="bg-green">
        <div class="floating-underline mt-5">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold paclic-header-white">PAYMENT</span>
                <span class="font-weight-bold paclic-header-green">METHOD</span>
            </span>
        </div>
        <div class="container">
            <div class="pt-5 d-flex flex-row justify-content-center justify-content-around">
                <div class="col-lg-6">
                    <label class="font-weight-bold text-white payment-header text-center">Account Name</label>
                </div>
                <div class="col-lg-3">
                    <label class="text-white text-center">De La Salle University</label>
                </div>
            </div>
            <hr class="payment-hr">
            <div class="pt-4 d-flex flex-row justify-content-center justify-content-around">
                <div class="col-lg-6">
                    <label class="font-weight-bold text-white payment-header text-center">Bank and Branch</label>
                </div>
                <div class="col-lg-3">
                    <label class="text-white text-center">UCPB Vito Cruz Branch</label>
                </div>
            </div>
            <hr class="payment-hr">
            <div class="pt-4 d-flex flex-row justify-content-center justify-content-around pb-5">
                <div class="col-lg-6">
                    <label class="font-weight-bold text-white payment-header text-center">Account Number</label>
                </div>
                <div class="col-lg-3">
                    <label class="text-white text-center">0-120-114-711-9</label>
                </div>
            </div>
        </div>
    </section>   
@endsection
