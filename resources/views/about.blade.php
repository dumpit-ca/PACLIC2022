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
<section id="conference">
    <div class="container-fluid">
        <h4>
            <span class="font-weight-bold" id="paclic-header">PACLIC</span>
            <span class="font-weight-bold" id="paclic-header-conference">CONFERENCES</span>
        </h4>

    </div>
</section>

@endsection