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
    <div class="container">
        <div class="timeline">
            <div class="timeline-row">
                <div class="timeline-content">
                    <h4>April 15</h4>
                    <p>Deadline of Paper Submission</p>
                </div>
            </div>
            <div class="timeline-row">
                <div class="timeline-content">
                    <h4>June 15</h4>
                    <p>Notification of Reviews</p>
                </div>
            </div>
            <div class="timeline-row">
                <div class="timeline-content">
                    <h4>July 15</h4>
                    <p>Deadline of camera-ready</p>
                </div>
            </div>
            <div class="timeline-row">
                <div class="timeline-content">
                    <h4>August 15</h4>
                    <p>Deadline of presenter's registration</p>
                </div>
            </div>
            <div class="timeline-row">
                <div class="timeline-content">
                    <h4>September 15</h4>
                    <p>Deadline of participant's registration</p>
                </div>
            </div>
            <div class="timeline-row">
                <div class="timeline-content">
                    <h4>October 20-21</h4>
                    <p>PACLIC 36</p>

                </div>
            </div>
        </div>
    </div>
</section>
{{-- Keynote Speakers --}}
<div class="container-fluid">
    <div class="floating-underline-n">
        <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
            <span class="font-weight-bold paclic-header-black">KEYNOTE</span>
            <span class="font-weight-bold paclic-header-green">SPEAKERS</span>
        </span>
    </div>
    <div class="team-boxed">
        <div class="container">
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="/img/businessmanV2.png">
                        <h3 class="name">Lorem Ipsum</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.
                            Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo
                            suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="/img/businessmanV2.png">
                        <h3 class="name">Lorem Ipsum</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.
                            Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo
                            suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="/img/businessmanV2.png">
                        <h3 class="name">Lorem Ipsum</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.
                            Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo
                            suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Paclic Organizer --}}
<section class="bg-green">
    <div class="floating-underline">
        <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
            <span class="font-weight-bold paclic-header-white">PACLIC</span>
            <span class="font-weight-bold paclic-header-green">ORGANIZER</span>
        </span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pac-org">
                    <div class="pic">
                        <img src="/img/businessmanV2.png" alt="">
                    </div>
                    <div class="pac-org-content">
                        <p class="description">
                            Associate Professor, Dept of English & Applied Linguistics (DEAL), Br. Andrew Gonzalez FSC
                            College of Education (BAGCED)
                        </p>
                        <p class="description">
                            De La Salle University – Manila : shirley.dita@dlsu.edu.ph
                        </p>
                        <h3 class="pac-title">Shirley N. Dita
                            <small class="post">Convenor, PACLIC36</small>
                        </h3>
                    </div>
                </div>
                <div class="pac-org">
                    <div class="pic">
                        <img src="/img/businessmanV2.png" alt="">
                    </div>
                    <div class="pac-org-content">
                        <p class="description">
                            Dean, College of Computing and Information Technologies (CCIT) , National University,
                            Manila, Philippines
                        </p>
                        <p class="description">
                            aotrillanes@national-u.edu.ph
                        </p>
                        <h3 class="pac-title">Arlene O. Trillanes
                            <small class="post">Co-convenor, PACLIC 36</small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection