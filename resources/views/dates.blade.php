@extends('template.master')
@section('content')
@section('css','main')
@include('template.banner')
    {{-- Description and timer --}}
<div class="container-fluid">
    <div class="row mx-5 my-5">
        <div class="col-lg-6 d-flex align-items-center my-0 mr-auto">
            <p class="text-dark font-weight-bold">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem sapiente corporis ipsam minima nostrum dolor numquam exercitationem laborum doloremque harum, natus explicabo voluptas magnam distinctio consequatur quisquam odio reprehenderit eius facere mollitia quis quaerat odit illo! Quae, id dicta maxime est voluptas accusamus dolorum voluptatibus ipsa reiciendis nisi, unde tempora eveniet, odit sint culpa. Maiores quaerat sequi eligendi dicta esse beatae voluptates magnam adipisci officia sapiente, illo, architecto assumenda saepe incidunt amet cum quasi doloremque! Numquam odio porro tenetur non.
            </p>
        </div>
        <div class="col-lg-5 col-12">
            @include('template.timer')
        </div>
    </div>
</div>
{{-- Timeline --}}
@include('template.timeline')   
@endsection

