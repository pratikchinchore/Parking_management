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
    @include('header');
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container mt-5">
                <ol>
                    <li><a href="/home">Home</a></li>
                    <li>Update a Parking</li>
                </ol>
                <h2>Update a Parking</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="contact" class="contact">

            <div class="container">
                <div class="row main-content text-center">

                    {{-- <div class="col-md-4 text-center company__info ">

                        <span class="company__logo">
                            <h2><span class="fa fa-android"></span></h2>
                        </span>
                        <img src="https://cdn.dribbble.com/users/1287580/screenshots/5410442/dribbble_2.gif"
                            alt="">
                    </div> --}}
                    <div class="col-md-4 text-center company__info " style="background-color: #A9C9FF;
                        background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%);">
                        <div class="car-park">
                            <div class="exit exit--front fuselage">

                            </div>
                            {{-- <ol class="cabin fuselage">
                              <li class="row row--1">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="1A" />
                                    <label for="1A">1A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="1B" />
                                    <label for="1B">1B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="1C" />
                                    <label for="1C">1C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" disabled id="1D" />
                                    <label for="1D">Occupied</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--2">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="2A" />
                                    <label for="2A">2A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="2B" />
                                    <label for="2B">2B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="2C" />
                                    <label for="2C">2C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="2D" />
                                    <label for="2D">2D</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--3">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="3A" />
                                    <label for="3A">3A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="3B" />
                                    <label for="3B">3B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="3C" />
                                    <label for="3C">3C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="3D" />
                                    <label for="3D">3D</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--4">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="4A" />
                                    <label for="4A">4A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="4B" />
                                    <label for="4B">4B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="4C" />
                                    <label for="4C">4C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="4D" />
                                    <label for="4D">4D</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--5">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="5A" />
                                    <label for="5A">5A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="5B" />
                                    <label for="5B">5B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="5C" />
                                    <label for="5C">5C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="5D" />
                                    <label for="5D">5D</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--6">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="6A" />
                                    <label for="6A">6A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="6B" />
                                    <label for="6B">6B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="6C" />
                                    <label for="6C">6C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="6D" />
                                    <label for="6D">6D</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--7">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="7A" />
                                    <label for="7A">7A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="7B" />
                                    <label for="7B">7B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="7C" />
                                    <label for="7C">7C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="7D" />
                                    <label for="7D">7D</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--8">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="8A" />
                                    <label for="8A">8A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="8B" />
                                    <label for="8B">8B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="8C" />
                                    <label for="8C">8C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="8D" />
                                    <label for="8D">8D</label>
                                  </li>
                                </ol>
                              </li>
                              <li class="row row--9">
                                <ol class="parks" type="A">
                                  <li class="park">
                                    <input type="checkbox" id="9A" />
                                    <label for="9A">9A</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="9B" />
                                    <label for="9B">9B</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="9C" />
                                    <label for="9C">9C</label>
                                  </li>
                                  <li class="park">
                                    <input type="checkbox" id="9D" />
                                    <label for="9D">9D</label>
                                  </li>
                                </ol>
                              </li>
                            </ol> --}}
                            <div class="exit exit--back fuselage">

                            </div>
                          </div>

                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                        <div class="container">
                            <div class="row mt-3">
                                <h2>Update Your Parking Area</h2>
                            </div>
                            <div class="row">
                                @foreach ($users as $user)

                                <form action="{{ route('book_vehicle') }}" method="post" role="form"
                                    id="book_vehicle_form" class="php-email-form">
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="" style="margin-bottom:-3%;color:darkcyan;">
                                        <b style="margin-left: -40%">Vehicle Number</b>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="vehicle_number" id="vehicle_number"
                                            class="form__input" placeholder="Vehicle Number" value="{{ $user->vehicle_number }}" required>
                                    </div>
                                    <div class="" style="margin-bottom:-3%;color:darkcyan;">
                                        <b style="margin-left: -44%">Vehicle Type</b>
                                    </div>
                                    <div class="row">
                                            <select name="V_type" id="V_type" class="form__input" required>
                                                <option selected="selected" value="">Choose One</option>
                                                <option value="Two Wheeler">Two Wheeler</option>
                                                <option value="Four Wheeler">Four Wheeler</option>
                                                <option value="Big Vehicle">Big Vehicle</option>
                                            </select>
                                    </div>
                                    <div class="" style="margin-bottom:-3%;color:darkcyan;">
                                        <b style="margin-left: -42%">Date of Parking</b>
                                    </div>
                                    <div class="row">
                                        <input type="date" name="p_date" id="p_date" class="form__input"
                                            placeholder="Date" required>
                                    </div>
                                    <div class="" style="margin-bottom:-3%;color:darkcyan;">
                                        <b style="margin-left: -50%">IN TIME</b>
                                    </div>

                                    <div class="row">
                                        <input type="time" name="in_time" id="in_time" class="form__input" required>
                                    </div>
                                    <div class="" style="margin-bottom:-3%;color:darkcyan;">
                                        <b style="margin-left: -48%">OUT TIME</b>
                                    </div>

                                    <div class="row">
                                        <input type="time" name="out_time" id="out_time" class="form__input" required>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" id="book_vehicle">Submit</button>

                                    </div>
                                </form>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- model --}}
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Thanks.......</h5>
                        </div>
                        <div class="modal-body">
                            Your Booking is Updated successfilly
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('footer');
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
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
                $('#book_vehicle').click(function(e) {
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ url('book_vehicle') }}",
                        type: 'post',
                        data: {
                            "_token": $('#token').val(),
                            vehicle_number: $('#vehicle_number').val(),
                            V_type: $('#V_type').val(),
                            p_date: $('#p_date').val(),
                            in_time: $('#in_time').val(),
                            out_time: $('#out_time').val(),
                            slot: 123,
                        },
                        success: function(result) {
                            $("#exampleModalCenter").modal('show');
                            window.location.href = "allotment";
                            //  $("#book_vehicle_form")[0].reset();

                        }
                    });
                });
            });
        }, false);
    </script>
    {{-- <script>
        $('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
});
    </script> --}}
</body>

</html>
