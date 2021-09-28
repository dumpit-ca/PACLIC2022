@extends('template.master')
@section('content')
@include('template.banner')
<style>
.text-contact { color: #383030; }
.email-contact { color: #72B045!important;}
.w-10 {
    width: 3.5rem!important;
}
.h-10 {
    height: 1.6rem!important;
}
</style>
<div class="container-fluid py-5 ml-auto my-auto px-5">
    <div class="d-flex align-items-center my-auto mx-auto">   
        <h1 id="copy" class="email-contact font-weight-bold">
            paclic2022@gmail.com 
            <span>
                <i data-toggle="tooltip" title="Copy email" onclick="copyEvent('copy')" class="bi btn bi-clipboard-check"></i>
            </span>  
        </h1>
                  
    </div>
    <br>
    <div class="d-flex align-items-center my-auto">
        <h1 class="font-weight-bold">
            Email for your inquires and additional information
        </h1>
    </div>
</div>
{{-- Javascript --}}
<script>
    function copyEvent(id)
    {
        var str = document.getElementById(id);
        window.getSelection().selectAllChildren(str);
        document.execCommand("Copy")
    }
    $(function() {
        $('[data-toggel="tooltip"]').tooltip();
        
    });
</script>
@endsection

