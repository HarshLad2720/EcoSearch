<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>EcoSearch | Contact Us</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
    </head>
    <body>
        <header id="header" class="header d-flex align-items-center">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="{{url('/')}}" class="logo d-flex align-items-center">
                    <img src="assets/image/ecosearch-logo@2x.png" alt="EcoSearch" id="logo" data-height-percentage="80" data-actual-width="390" data-actual-height="170">
                </a>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/area')}}">Specialist Areas</a></li>
                        <li><a href="{{url('/team')}}">The Team</a></li>
                        <li><a href="{{url('/candidate')}}">Candidates</a></li>
                        <li><a href="{{url('/contact')}}" class="active">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main id="main">
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/projects/construction-1.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                    <h2>Contact Us</h2>
                    <ol>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Contact Us</li>
                    </ol>

                </div>
            </div>
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-map"></i>
                                <h3>Our Address</h3>
                                <p>Level 1, 9 Bronte Rd, Bondi Junction, NSW 2022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <a href="mailto:stuart@ecosearch.io">stuart@ecosearch.io</a>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <a href="tel:0451003081">0451003081</a>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="row gy-4 mt-1">

                        <div class="col-lg-6 ">
                            <iframe src="https://www.google.com/maps/embed?-33.8930154,151.2470749,17z/data=!3m1!4b1!4m5!3m4!1s0x6b12adf13e02edd3:0x259af2b12d21119f!8m2!3d-33.8930199!4d151.2492636?hl=en-US" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                        </div><!-- End Google Maps -->

                        <div class="col-lg-6">
                            <form action="{{route('contactus.store')}}" method="post" class="php-email-form">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="contact_email" id="contact_email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="contact_subject" id="contact_subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="contact_message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="sent-message"></div>
                                    <div class="error-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button style="text-transform: uppercase;" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer id="footer" class="footer">
            <div class="footer-content position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4 style="color: #affcf9;">Stuart Travis<br>Director</h4>
                            <ul>
                                <li><i class="fa fa-phone">{!! "&nbsp;" !!}<a href="tel:0451003081" >0451003081</a></i></li>
                                <li style="padding-top: 0px;"><i class="fa fa-mail-bulk" style="font-size: 10px;">{!! "&nbsp;" !!}<a href="mailto:stuart@ecosearch.io" >stuart@ecosearch.io</a></i></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4 style="color: #affcf9;">Veronica Twinnings <br>Senior Consultant</h4>
                            <ul>
                                <li><i class="fa fa-phone">{!! "&nbsp;" !!}<a href="tel:0467338007">0467338007</a></i></li>
                                <li style="padding-top: 0px;"><i class="fa fa-mail-bulk" style="font-size: 10px;">{!! "&nbsp;" !!}<a href="mailto:veronica@ecosearch.io">veronica@ecosearch.io</a></i></li>
                            </ul>
                        </div><!-- End footer links column-->

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4 style="color: #affcf9;">Scott Sarson <br>Senior Consultant</h4>
                            <ul>
                                <li><i class="fa fa-phone">{!! "&nbsp;" !!}<a href="tel:0466680416">0466680416</a></i></li>
                                <li style="padding-top: 0px;"><i class="fa fa-mail-bulk" style="font-size: 10px;">{!! "&nbsp;" !!}<a href="mailto:scott@ecosearch.io">scott@ecosearch.io</a></i></li>
                            </ul>
                        </div><!-- End footer links column-->

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4 style="color: #affcf9;">Our Address</h4>
                            <ul>
                                <li><i style="font-size: 12px;" class="fa fa-location-pin">{!! "&nbsp;" !!} Level 1, 9 Bronte Rd, Bondi Junction, NSW 2022</i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-legal text-center position-relative">
                <div class="container">
                    <div class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script> <strong><span>EcoSearch</span></strong>. All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <div id="preloader"></div>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
