<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Site')</title>

    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta name="author" content="Coderthemes" />

    <!-- Site favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- Swiper js -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" type="text/css" />

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="60">
<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="navbar-sticky">
    <div class="container">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="index-1.html">
            <img src="images/logo1.svg" alt="" width="120" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Page d'Accueil</a>
                </li>
                <li class="nav-item">
                    <a href="#features" class="nav-link">À propos </a>
                </li>
                <li class="nav-item">
                    <a href="#screenshot" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonial" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-center">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Cree un compte</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-sm nav-btn" data-bs-toggle="modal" data-bs-target="#signupModal">Se connecter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->


    @yield('content')

<!-- contact end -->

<!-- footer & cta start -->
<section class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center text-lg-start">
                <div class="footer-logo mb-4">
                    <a href="#">
                        <img src="images/logo-light.png" alt="" />
                    </a>
                </div>
                <a href="#" class="text-white">Hello@coderthemes.com</a>
                <p class="text-white">+01 ( 1234 567 890 )</p>

                <h5 class="fs-18 mb-3 text-white">Follow Us</h5>
                <ul class="list-inline mt-5">
                    <li class="list-inline-item">
                        <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript:void(0);" class="footer-social-icon"><i class="mdi mdi-skype"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h5 class="fs-22 mb-3 fw-semibold text-white">About Us</h5>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="javascript:void(0);" class="footer-link">Support Center</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Customer Support</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">About Us</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Copyright</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Popular Campaign</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h5 class="fs-22 mb-3 fw-semibold text-white">Our Information</h5>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="javascript:void(0);" class="footer-link">Return Policy</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Terms & Conditions</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Site Map</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Store Hours</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h5 class="fs-22 mb-3 fw-semibold text-white">My Account</h5>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="javascript:void(0);" class="footer-link">Press Inquiries</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Social Media Directories</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Images & B-roll</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Permissions</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Speaker Requests</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h5 class="fs-22 mb-3 fw-semibold text-white">Policy</h5>
                        <ul class="list-unstyled footer-nav">
                            <li><a href="javascript:void(0);" class="footer-link">Application Security</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Softwere Principles</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Unwanted Softwere Policy</a></li>
                            <li><a href="javascript:void(0);" class="footer-link">Risponsible Supply Chain</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="footer-tagline">
    <div class="container">
        <div class="row justify-content-between py-2">
            <div class="col-md-6">
                <p class="text-white opacity-75 mb-0 fs-14"><script>document.write(new Date().getFullYear())</script> © Appexy - <a href="https://coderthemes.com/" class="text-white">Coderthemes.com</a></p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="javascript:void(0);" class="text-white opacity-75 fs-14">Terms Conditions & Policy</a>
            </div>
        </div>
    </div>
</div>
<!-- footer & cta end -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" class="back-to-top-btn btn btn-gradient-primary" id="back-to-top"><i class="mdi mdi-chevron-up"></i></a>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center mb-4">
                    <h4 class="mb-0">Welcome Back</h4>
                    <p class="text-muted fs-15">Welcome back! Please enter your details.</p>
                </div>
                <div class="mb-3">
                    <label for="emailAddress" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress" placeholder="Your email..." />
                </div>
                <div class="mb-2">
                    <label for="inputPasseord" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPasseord" />
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4 pb-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember for 30 days
                        </label>
                    </div>
                    <a href="javascript:void(0);" class="text-secondary fs-13">Forgot Password..?</a>
                </div>

                <a href="javascript:void(0);" class="btn btn-gradient-primary w-100" data-bs-dismiss="modal">Sign up</a>
                <div class="text-center">
                    <div class="position-relative my-4">
                        <span class="bg-soft-secondary w-100 d-inline-block" style="height: 1px;"></span>
                        <p class="text-muted fs-15 mb-0 mt-1 bg-white px-2 position-absolute top-50 start-50 translate-middle">
                            Or continue with
                        </p>
                    </div>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="btn btn-danger">
                                <img src="images/auth-icon/google.png" alt="google" class="img-fluid" width="24" />
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="btn btn-primary">
                                <img src="images/auth-icon/facebook.png" alt="" class="img-fluid" width="24" />
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);" class="btn btn-info">
                                <img src="images/auth-icon/twitter.png" alt="" class="img-fluid" width="24" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center mb-4">
                    <h4 class="">Sign up</h4>
                    <p class="text-muted text-uppercase fs-14">Start For Free</p>
                </div>
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Your first name..." />
                </div>
                <div class="mb-3">
                    <label for="lasttName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lasttName" placeholder="Your last name..." />
                </div>
                <div class="mb-3">
                    <label for="emailAddress1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="emailAddress1" placeholder="Your email..." />
                </div>
                <div class="mb-2">
                    <label for="inputPasseord2" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPasseord2" />
                </div>
                <div class="form-check mb-4 pb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
                    <label class="form-check-label" for="flexCheckDefault1"> I agree to the <a href="javascript:void(0);">Terms of Service</a> and <a href="javascript:void(0);">Privacy Policy</a> </label>
                </div>

                <a href="javascript:void(0);" class="btn btn-gradient-primary w-100" data-bs-dismiss="modal">Create account</a>
            </div>
        </div>
    </div>
</div>


<!-- javascript -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- counter -->
<script src="{{ asset('js/counter.init.js') }}"></script>
<!-- swiper -->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
