@extends('template.master')
@section('css', 'main')

@section('content')
@include('template.banner')
<style>
    .card-bg {
        background-color: #F5F7FF;
    }
    .speaker-name {
        font-size: 2em!important;
    }
    .speaker-hr {
        border: 1px solid #04333B;
    }
    .speaker-info {
        font-size: 15px!important;
    }
    .brief-info {
        text-align: justify;
    }
</style>
<div class="floating-underline alt mt-5">
    <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
        <span class="font-weight-bold text-dark">KEYNOTE</span>
        <span class="font-weight-bold paclic-header-green">SPEAKERS</span>
    </span>
</div>
<div class="container">
    <div class="row mx-auto justify-content-center py-5">
        <div class="col-lg-3">
            <div class="card border-0 card-bg">
                <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                <label class="card-title text-center pt-3 font-weight-bold text-dark speaker-name">Lorem Ipsum</label>
                <div class="card-body">
                    <p class="card-text text-center speaker-info">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 mx-5 brief-info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloribus earum nulla corrupti dolor odio voluptatem expedita deleniti quasi, provident illum tenetur autem perspiciatis esse veniam recusandae? Nostrum voluptas nihil, doloremque tenetur ipsam esse magnam vero, saepe consequuntur officia aliquid enim perferendis repellendus, beatae labore architecto aspernatur! Voluptatibus, odio architecto.
        </div>
    </div>
    <div class="row mx-auto justify-content-center py-5">
        <div class="col-lg-3">
            <div class="card border-0 card-bg">
                <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                <label class="card-title text-center pt-3 font-weight-bold text-dark speaker-name">Lorem Ipsum</label>
                <div class="card-body">
                    <p class="card-text text-center speaker-info">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 mx-5 brief-info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloribus earum nulla corrupti dolor odio voluptatem expedita deleniti quasi, provident illum tenetur autem perspiciatis esse veniam recusandae? Nostrum voluptas nihil, doloremque tenetur ipsam esse magnam vero, saepe consequuntur officia aliquid enim perferendis repellendus, beatae labore architecto aspernatur! Voluptatibus, odio architecto.
        </div>
    </div>
    <hr class="speaker-hr my-5">
</div>
@endsection