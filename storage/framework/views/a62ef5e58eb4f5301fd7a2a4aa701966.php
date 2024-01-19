<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>XDBS Parking</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('img/logo.png')); ?>" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/remixicon/remixicon.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- ======= Header ======= -->
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
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

                    
                    <div class="col-md-4 text-center company__info " style="background-color: #A9C9FF;
                        background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%);">
                        <div class="car-park">
                            <div class="exit exit--front fuselage">

                            </div>
                            
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
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <form action="<?php echo e(route('book_vehicle')); ?>" method="post" role="form"
                                    id="book_vehicle_form" class="php-email-form">
                                    <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                                    <div class="" style="margin-bottom:-3%;color:darkcyan;">
                                        <b style="margin-left: -40%">Vehicle Number</b>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="vehicle_number" id="vehicle_number"
                                            class="form__input" placeholder="Vehicle Number" value="<?php echo e($user->vehicle_number); ?>" required>
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
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
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <!-- End Footer -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/waypoints/noframework.waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
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
                        url: "<?php echo e(url('book_vehicle')); ?>",
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
    
</body>

</html>
<?php /**PATH C:\xampp\htdocs\park_project\resources\views/booking_update.blade.php ENDPATH**/ ?>