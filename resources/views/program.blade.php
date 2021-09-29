@extends('template.master')
@section('css','main')
@section('content')
<link rel="stylesheet" href="/css/program.css">
@include('template.banner')
{{-- Navtabs for dates --}}
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-2 py-5 mr-4">
      <select class="form-control text-white font-weight-bold select-dates">
        <option class="font-weight-bold">October 20, 2022</option>
        <option class="font-weight-bold">October 21, 2022</option>
        <option class="font-weight-bold">October 22, 2022</option>
      </select>
    </div>    
    <div class="col-lg-2 py-5">
      <button class="btn-green font-weight-bold border-0 p-2">
        Manila Time - 09:00 AM (9:00)
      </button>
    </div>
    <div class="col-lg-2 py-5">
      <button class="btn-green font-weight-bold border-0 p-2">
        UTC - 01:00 AM (1:00)
      </button>
    </div>
  </div>
</div>
@endsection