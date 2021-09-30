@extends('template.master')
@section('css','main')
@section('content')
<link rel="stylesheet" href="/css/program.css">
@include('template.banner')
{{-- Navtabs for dates --}}
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-lg-2 py-5 mr-4">
      <select class="form-control text-white font-weight-bold select-dates" id="dates">
        <option value="20" class="font-weight-bold" selected>October 20, 2022</option>
        <option value="21" class="font-weight-bold">October 21, 2022</option>
        <option value="22" class="font-weight-bold">October 22, 2022</option>
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
<div class="container justify-content-center my-5">
  {{-- October 20, 2022 --}}
  <div class="contents active" id="20-contents">
    <section class="bg-green" id="program-radius">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5 justify-content-center">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">October 20, 2022</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
    </section>
  </div>
  {{-- October 21, 2022 --}}
  <div class="contents" id="21-contents">
    <section class="bg-green" id="program-radius">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">October 21, 2022</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
    </section>
  </div>
  {{-- October 22, 2022 --}}
  <div class="contents" id="22-contents">
    <section class="bg-green" id="program-radius">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">October 22, 2022</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
      <hr class="program-hr">
      <div class="row p-4 mx-auto align-items-center">
        <div class="col-lg-7">
          <label class="font-weight-bold text-white px-5">09:00 - 09:10</label>
        </div>
        <div class="col-lg-4 justify-content-end ml-auto">
          <p class="text-white">Program Name</p>
          <p class="text-white">Name of speaker</p>
          <p class="text-white">Title of speaker</p>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(() => {
    $('#dates').on('change', (e) => {
      let obj = $(e.currentTarget);
      console.log(obj)
      $('.contents').removeClass('active');
      $('#' + obj.val() + '-contents').addClass('active');
    });
  });
</script>
@endsection