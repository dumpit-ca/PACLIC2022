@extends('template.master')
@section('css', 'main')
@section('content')
<link rel="stylesheet" href="/css/home.css">
@include('template.banner')
{{-- Description and timer --}}
<div class="container-fluid">
    <div class="row mx-5 my-5">
        <div class="col-lg-6 d-flex align-items-center my-0 mr-auto">
            <p class="text-dark font-weight-bold">
                The 36th Pacific Asia Conference on Language, Information and Computation (PACLIC 36) 
                will be held in a fully virtual mode on October 20-22, 2022. 
                This 3-day conference is jointly hosted by the Department of English and 
                Applied Linguistics (DEAL), Br. Andrew Gonzalez FSC College of Education (BAGCED), 
                De La Salle University – Manila, and the College of Computing and 
                Information Technologies (CCIT), National University, Manila, Philippines. 
            </p>
        </div>
        <div class="col-lg-5 col-12">
            @include('template.timer')
        </div>
    </div>
</div>
{{-- Timeline --}}
<section class="bg-green">
    <div class="floating-underline">
        <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
          <span class="font-weight-bold paclic-header-white">IMPORTANT</span>
          <span class="font-weight-bold paclic-header-green">DATES</span>
        </span>
      </div>
    {{-- TIMELINE GOES HERE, CLAIRE --}}
</section>
@endsection

 {{--              タイムラインはここに配置されます。               --}}