@extends('template.master')
@section ('css', 'main')
@section('content')
<link rel="stylesheet" href="/css/committee.css">
<section>
    {{-- General Chair --}}
    <div class="floating-underline alt v2 mt-5">
        <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
            <span class="font-weight-bold text-dark">GENERAL</span>
            <span class="font-weight-bold paclic-header-green">CHAIR</span>
        </span>
    </div>
    <div class="container">
        <div class="w-15 py-3 card d-flex mx-auto justify-content-center border-0 committee-card">
            <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
            <div class="card-title font-weight-bold text-center chair-name mt-3">
                Lorem Ipsum
            </div>
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, officiis!.</p>
            </div>
        </div>

        {{-- General Co-Chair --}}
        <div class="floating-underline alt mt-5">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold text-dark">GENERAL</span>
                <span class="font-weight-bold paclic-header-green">CO-CHAIR</span>
            </span>
        </div>
        <div class="row justify-content-center justify-content-around mx-auto">
            <div class="col-lg-3">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="w-15 py-3 card border-0 committee-card w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="w-15 py-3 card border-0 committee-card w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>         
        </div>
        {{-- Conference Program Chair --}}
        <div class="floating-underline conference-line mt-5">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold text-dark">CONFERENCE</span>
                <span class="font-weight-bold paclic-header-green">PROGRAM CHAIR</span>
            </span>
        </div>
        <div class="row mx-auto justify-content-around justify-content-center">
            <div class="col-lg-3">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- International Advisory Board --}}
        <div class="floating-underline alt conference-line mt-5">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold text-dark">INTERNATIONAL</span>
                <span class="font-weight-bold paclic-header-green">ADVISORY BOARD</span>
            </span>
        </div>
        @for($i=0;$i<1;$i++)
        <div class="row mx-auto justify-content-center justify-content-around">
            @for($j=0;$j<4;$j++)
            <div class="col-lg-3">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        @endfor
        {{-- Program Technical Committee --}}
        <div class="floating-underline alt conference-line mt-5">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold text-dark">PROGRAM</span>
                <span class="font-weight-bold paclic-header-green">TECHNICAL COMMITTEE</span>
            </span>
        </div>
        @for($i=0;$i<1;$i++)
        <div class="row mx-auto justify-content-center justify-content-around">
            @for($j=0;$j<4;$j++)
            <div class="col-lg-3">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        @endfor
        {{-- Technical Committee --}}
        <div class="floating-underline alt mt-5">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold text-dark">TECHNICAL</span>
                <span class="font-weight-bold paclic-header-green">COMMITTEE</span>
            </span>
        </div>
        @for($i=0;$i<1;$i++)
        <div class="row mx-auto justify-content-center justify-content-around">
            @for($j=0;$j<4;$j++)
            <div class="col-lg-3">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        @endfor
        {{-- Event Production --}}
        <div class="floating-underline alt conference-line mt-5">
            <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
                <span class="font-weight-bold text-dark">EVENT PRODUCTION AND CREATIVES</span>
                <span class="font-weight-bold paclic-header-green">COMMITTEE</span>
            </span>
        </div>
        @for($i=0;$i<1;$i++)
        <div class="row mx-auto justify-content-center justify-content-around">
            @for($j=0;$j<4;$j++)
            <div class="col-lg-3">
                <div class="w-15 py-3 card border-0 committee-card mx-auto justify-content-center">
                    <img src="/img/businessmanV2.png" class="card-img-top" alt="...">
                    <div class="card-title font-weight-bold text-center chair-name mt-3">
                        Lorem Ipsum
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae,
                            officiis!.</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        @endfor
    </div>
</section>
@endsection