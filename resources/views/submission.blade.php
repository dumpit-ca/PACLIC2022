@extends('template.master')
@section('css', 'main')
@section('content')
<link rel="stylesheet" href="/css/submission.css">
@include('template.banner')
<div class="floating-underline alt mt-5">
    <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
        <span class="font-weight-bold text-dark">PAPER</span>
        <span class="font-weight-bold paclic-header-green">SUBMISSION</span>
    </span>
</div>
<div class="container">
    <div class="d-flex justify-content-center mb-5">
        <p class="text-dark font-weight-bold">Papers may consist of up to ten (10) pages of content, including
            references and appendices.
            Submissions will be judged based on relevance, technical strength, significance and opportunities,
            and interest to the attendees. As the review process will be blind, authors must not indicate their
            names and affiliations in the papers. Papers must be submitted through
            <a class="p-link" href="https://easychair.org/">the Easy Chair Conference System.</a>
        </p>
    </div>
</div>
<section class="bg-green">
    <div class="floating-underline">
        <span class="h4 text-center px-4 pt-4 pb-0 mb-0">
            <span class="font-weight-bold paclic-header-white">PAPER</span>
            <span class="font-weight-bold paclic-header-green">SCOPE</span>
        </span>
    </div>
    <p class="text-center text-white pb-5">(Topics include but are not limited to [in alphabetical order]):</p>
    <div class="container">
        <div class="row d-flex justify-content-center justify-content-around p-5">
            <div class="col-lg-4">
                <div class="clip-art-holder bg-white-scope d-flex align-items-center justify-content-center">
                    <h1 class="text-dark">CLIP ART</h1>
                </div>
                <label class="d-flex justify-content-center p-4 font-weight-bold text-white">Language Studies</label>
                <ul class="text-white">
                    <li>Corpus Linguistics</li>
                    <li>Computer-mediated communication</li>
                    <li>Discourse analysis</li>
                    <li>Language acquisition</li>
                    <li>Language documentation</li>
                    <li>Language learning</li>
                    <li>Language, mind, and culture</li>
                    <li>Language theory</li>
                    <li>Phonology</li>
                    <li>Pragmatics</li>
                    <li>Semantics</li>
                    <li>Sociolinguistics</li>
                    <li>Spoken language processing</li>
                    <li>Syntax</li>
                    <li>Typology</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="clip-art-holder bg-white-scope d-flex align-items-center justify-content-center">
                    <h1 class="text-dark">CLIP ART</h1>
                </div>
                <label class="d-flex justify-content-center text-center p-4 font-weight-bold text-white">Information Processing & Computation Applications</label>
                <ul class="text-white">
                    <li>Cognitive modeling of language</li>
                    <li>Dialogue and interactive systems</li>
                    <li>Digital humanities</li>
                    <li>Information retrieval/extraction</li>
                    <li>Language resources</li>
                    <li>Machine learning/Data Mining</li>
                    <li>Machine Translation</li>
                    <li>Multilinguality in NLP</li>
                    <li>NLP applications</li>
                    <li>Sentiment analysis and opinion mining</li>
                    <li>Social media</li>
                    <li>Text classification/Summarization</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection