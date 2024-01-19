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
    <link href="<?php echo e(asset('vendor/aos/aos.cs')); ?>" rel="stylesheet" type="text/css">
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
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="margin-top: -22px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Vehicle Parking</h1>
                    <h2>We are team to keep your vehicle safe</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/login" class="btn-get-started scrollto">Book Parking</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?php echo e(asset('img/parking.png')); ?>" class="img-fluid animated" alt=""
                        style="margin-top: -15%;">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?php echo e(asset('img/available.png')); ?>" class="img-fluid" style="height : 100% !important"
                            alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Available Parking Ratio at Parking Area</h3>
                        <div class="skills-content">
                            <div class="progress">
                                <span class="skill">4 Wheeler <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">2 Wheeler <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">Big Truck <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Skills Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>WHY US?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Superior Service</a></h4>
                            <p>Our extensive experience and deep insight of car parking dynamics helps us to improve
                                customer experience</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Innovative Technology</a></h4>
                            <p>Secure Parking has established SecureTech, the in-house state-of-art technology division
                                for continuous innovation in products & services</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">End-to-End Solution</a></h4>
                            <p>Secure Parking focuses in providing holistic end-to-end solution for traffic & parking
                                management</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Call To Action</h3>
                        <p>If You Faced any kind of Difficulty then Plaese Contact with our Team</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </section><!-- End Cta Section -->
        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Team</h2>
                    <p>Our Team is always available for any kind of Need for you</p>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="member-info">
                                <h4>Raj Ingale</h4>
                                <span>Chief Executive Officer</span>
                                <p><i class="ri-phone-fill"></i> 9876543211</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="member-info">
                                <h4>Suraj Shinde</h4>
                                <span>Manager</span>
                                <p><i class="ri-phone-fill"></i> 7589654123</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="member d-flex align-items-start">
                            <div class="member-info">
                                <h4>Mushtaq Shaikh</h4>
                                <span>CTO</span>
                                <p><i class="ri-phone-fill"></i> 9955632487</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <div class="member d-flex align-items-start">
                            <div class="member-info">
                                <h4>Narendra Patil</h4>
                                <span>Accountant</span>
                                <p><i class="ri-phone-fill"></i> 9566325478</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pricing</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>2 Wheeler</h3>
                            <h4><sup><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm29.25 64H176a8 8 0 0 1 0 16h-16a48.05 48.05 0 0 1-48 48h-2.71l48 42a8 8 0 0 1-10.54 12l-64-56A8 8 0 0 1 88 136h24a32 32 0 0 0 32-32H88a8 8 0 0 1 0-16h51.69A32 32 0 0 0 112 72H88a8 8 0 0 1 0-16h88a8 8 0 0 1 0 16h-28.26a48.15 48.15 0 0 1 9.51 16Z" />
                                    </svg></sup>20<span>per hour</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> RS 20 for 1 hour</li>
                                <li><i class="bx bx-check"></i> After 1 hour RS 5 per hour</li>
                                <li><i class="bx bx-check"></i> RS 135 for 24 hour</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>4 Wheeler</h3>
                            <h4><sup><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm29.25 64H176a8 8 0 0 1 0 16h-16a48.05 48.05 0 0 1-48 48h-2.71l48 42a8 8 0 0 1-10.54 12l-64-56A8 8 0 0 1 88 136h24a32 32 0 0 0 32-32H88a8 8 0 0 1 0-16h51.69A32 32 0 0 0 112 72H88a8 8 0 0 1 0-16h88a8 8 0 0 1 0 16h-28.26a48.15 48.15 0 0 1 9.51 16Z" />
                                    </svg></sup>50<span>per hour</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> RS 50 for 1 hour</li>
                                <li><i class="bx bx-check"></i> After 1 hour RS 20 per hour</li>
                                <li><i class="bx bx-check"></i> RS 510 for 24 hour</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>Employee Parking</h3>
                            <h4><sup><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm29.25 64H176a8 8 0 0 1 0 16h-16a48.05 48.05 0 0 1-48 48h-2.71l48 42a8 8 0 0 1-10.54 12l-64-56A8 8 0 0 1 88 136h24a32 32 0 0 0 32-32H88a8 8 0 0 1 0-16h51.69A32 32 0 0 0 112 72H88a8 8 0 0 1 0-16h88a8 8 0 0 1 0 16h-28.26a48.15 48.15 0 0 1 9.51 16Z" />
                                    </svg></sup>500<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> RS 500 for 1 month</li>
                                <li><i class="bx bx-check"></i> RS 4000 for 1 Year</li>
                                <li><i class="bx bx-check"></i> No Refundable amount</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Pricing Section -->
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <!-- ======= Footer ======= -->
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
<?php /**PATH C:\xampp\htdocs\park_project\resources\views/index.blade.php ENDPATH**/ ?>