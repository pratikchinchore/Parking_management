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
    <style>
        .logoimage {
            /* background-image: url("<?php echo e(asset('img/mesh-679.png')); ?>") !important; */
        }
    </style>
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
                    <li>Login Page</li>
                </ol>
                <h2>Login Page</h2>
            </div>
        </section><!-- End Breadcrumbs -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row main-content text-center">
                    <div class="col-md-8 text-center company__info logoimage">
                        <span class="company__logo">
                            <h2><span class="fa fa-android"></span></h2>
                        </span>
                        <img src="https://cdn.dribbble.com/users/1287580/screenshots/5410442/dribbble_2.gif" alt="">
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-12 login_form ">
                        <div class="container">
                            <div class="row mt-3">
                                <h2>Login</h2>
                            </div>
                            <div class="row">
                                <?php if(session()->has('message')): ?>
                                    <div class="alert alert-danger">
                                        <?php echo e(session('message')); ?>

                                    </div>
                                <?php endif; ?>
                                <form method="POST" action="<?php echo e(route('login.custom')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group mb-3">
                                        <input type="text" placeholder="Email" id="email" class="form-control"
                                            name="email" required autofocus>
                                        <?php if($errors->has('email')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Password" id="password"
                                            class="form-control" name="password" required>
                                        <?php if($errors->has('password')): ?>
                                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-grid mx-auto">
                                        <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <p>Don't have an account? <a href="/registration">Register Here</a></p>
                            </div>
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
    <script src="<?php echo e(asset('vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/waypoints/noframework.waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/php-email-form/validate.js')); ?>"></script>
    <!-- Template Main JS File -->
    <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\park_project\resources\views/auth/login.blade.php ENDPATH**/ ?>