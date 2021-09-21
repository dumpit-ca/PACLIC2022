<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
    <link rel="icon" type="image/png" href="/img/sample_logo.png">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    {{-- Custom css --}}
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
</head>

<body>
    {{-- Submission Header --}}
    <div class="container-fluid submission-header">
        <div class="row">
            <div class="col-12 d-flex flex-row justify-content-center align-items-center my-2">
                <h5 class="lead my-auto mr-4">Submission Deadline: September 15, 2021</h5>
                <a class="btn border-rounded btn-submit my-auto font-weight-bold display-4 px-3" href="{{ url('submission') }}"
                    type="button">SUBMIT
                    NOW!</a>
            </div>
        </div>
    </div>
    {{-- Main Navbar --}}
    <div class="container-fluid bg-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark text-white">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mx-2">
                        <a class="nav-link" href="{{ url('') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Author's Guide
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item text-white" href="#">Important Dates</a>
                            <a class="dropdown-item text-white" href="{{ url('submission') }}">Submission</a>
                            <a class="dropdown-item text-white" href="{{ url('registration') }}">Registration</a>
                        </div>
                    </li>
                    <li class="nav-item active mx-2">
                        <a class="nav-link" href="#">Program</a>
                    </li>
                    <li class="nav-item active mx-2">
                        <a class="nav-link" href="#">Speakers</a>
                    </li>
                    <li class="nav-item active mx-2">
                        <a class="nav-link" href="#">Committee</a>
                    </li>
                    <li class="nav-item active mx-2">
                        <a class="nav-link" href="{{ url('about') }}">About Us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active mx-2 mr-2">
                        <a class="nav-link" href="{{ url('contact') }}">Contact Us<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <div class="input-group mb-3 w-lg-15 w-sm-50 w-md-75 my-auto">
                    <input type="text" class="form-control border-left-rounded border-right-0 border-left-0"
                        placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text border-right-rounded bg-white" id="basic-addon2"><i
                                class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    {{-- Main content --}}
    <div id="content">
        @yield ('content')
    </div>
    {{-- Footer --}}
    <footer class="pt-5 pb-5 footer-border">
        <div class="container">
            <div class="row">
                {{-- Home --}}
                <div class="col-lg-3 footer-home d-flex flex-column">
                    <label class="font-weight-bold footer-title mb-4">HOME</label>
                    <a href="#" class=" footer-link ml-4 mb-2">Landing</a>
                    <a href="#" class=" footer-link ml-4 mb-2">Important Dates</a>
                    <a href="#" class=" footer-link ml-4 mb-2">Keynote Speakers</a>
                    <a href="#" class=" footer-link ml-4 mb-2">Organizers</a>
                </div>
                {{-- Author's Guide --}}
                <div class="col-lg-3 footer-home d-flex flex-column pl-5">
                    <label class="font-weight-bold footer-title mb-4 mr-2">AUTHOR'S GUIDE</label>
                    <a href="#" class=" footer-link ml-4 mb-2">Important Dates</a>
                    <a href="#" class=" footer-link ml-4 mb-2">Submission</a>
                    <a href="#" class=" footer-link ml-4 mb-2">Registration</a>
                </div>
                {{-- Program --}}
                <div class="col-lg-3 footer-home d-flex flex-column pl-5">
                    <label class="font-weight-bold footer-title mb-2">PROGRAM</label>
                    <a href="#" class=" footer-link ml-4 mb-2">Program</a>
                    {{-- Speakers --}}
                    <label class="font-weight-bold footer-title mb-2">SPEAKERS</label>
                    <a href="#" class=" footer-link ml-4 mb-2">Speakers</a>
                    {{-- Committee --}}
                    <label class="font-weight-bold footer-title mb-2">COMMITTEE</label>
                    <a href="#" class=" footer-link ml-4 mb-2">Committee</a>
                </div>
                {{-- About Us --}}
                <div class="col-lg-3 d-flex flex-column pl-5">
                    <label class="font-weight-bold footer-title mb-2">ABOUT US</label>
                    <a href="#" class=" footer-link ml-4 mb-2">About Us</a>
                    {{-- Contact Us --}}
                    <label class="font-weight-bold footer-title mb-2">CONTACT US</label>
                    <a href="#" class=" footer-link ml-4 mb-2">Contact Us</a>
                    {{-- Social Networks --}}
                    <label class="font-weight-bold footer-title mb-2">SOCIAL NETWORKS</label>
                    <div class="d-flex flex-row">
                        <a href="#" class="social-icons"><i class="fab fa-facebook mr-2"></i></a>
                        <a href="#" class="social-icons"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section id="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center pt-3">
                    <p class="muted">© 2022 National University Manila, Philippines. All Rights Reserved.</p>
                </div>
                <div class="col-lg-5 pt-3 ml-auto">
                    <p class="muted">Developed by JPCS - NU Chapter
                        <br>
                        Cassandra Maria Heyu Dumpit | Claire Francisco | John Vernard Canlas
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>