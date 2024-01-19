<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>XDBS Parking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- ======= Header ======= -->
    @include("header");
    <!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container mt-5">
                <ol>
                    <li><a href="/home">Home</a></li>
                    <li>Registration Page</li>
                </ol>
                <h2>Registration Page</h2>
            </div>
        </section><!-- End Breadcrumbs -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row main-content text-center">
                    <div class="col-md-4 text-center company__info logoimage">
                        <span class="company__logo">
                            <h2><span class="fa fa-android"></span></h2>
                        </span>
                        <img src="{{ asset('img/logo.png') }}" alt="">
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                        <div class="container">
                            <div class="row mt-3">
                                <h2>Registration Form</h2>
                            </div>
                            <div class="row">
                                <form action="{{ route('account') }}" method="post" role="form" id="reg_form"
                                    class="php-email-form">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <input type="text" name="name" id="name" class="form__input"
                                            placeholder="Name" required>
                                    </div>
                                    <div class="row">
                                        <input type="mobile" name="mobile" id="mobile" class="form__input"
                                            placeholder="Mobile" required>
                                    </div>
                                    <div class="row">
                                        <input type="company" name="company" id="company" class="form__input"
                                            placeholder="Company Name (Optional)" required>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="email" id="email" class="form__input"
                                            placeholder="E-mail" required>
                                    </div>
                                    <div class="row">
                                        <input type="password" name="password" id="password" class="form__input"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn" id="registrationsubmit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="registration_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Submitted</h5>
                    </div>
                    <div class="modal-body">
                      Your Registration is Successfully Done.
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    @include("footer");
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $(document).ready(function() {
                $('#registrationsubmit').click(function(e) {
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    console.log("df");
                    $.ajax({
                        url: "{{ url('account') }}",
                        type: 'post',
                        data: {
                            "_token": $('#token').val(),
                            name: $('#name').val(),
                            mobile: $('#mobile').val(),
                            company: $('#company').val(),
                            email: $('#email').val(),
                            password: $('#password').val(),
                        },
                        success: function(result) {
                            $("#registration_modal").modal('show');
                            $("#reg_form")[0].reset();
                        }
                    });
                });
            });
        }, false);
    </script>
</body>
</html>
