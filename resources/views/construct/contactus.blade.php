<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Contact Us | rsSolutions</title>
        @include('construct.ecocss')
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
                        <li><a href="{{url('/')}}">HOME</a></li>
                        <li><a href="{{url('/area')}}">AREAS OF EXPERTISE</a></li>
                        <li><a href="{{url('/team')}}">MEET THE TEAM</a></li>
                        <li><a href="{{url('/candidate')}}">CANDIDATES</a></li>
                        <li><a href="{{url('/contact')}}" class="active">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main id="main">
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/projects/construction-1.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                    <h2>CONTACT US</h2>
                    <ol>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>CONTACT US</li>
                    </ol>

                </div>
            </div>
            <section id="contact" class="contact" style="background-color: azure;">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-map"></i>
                                <h3>Our Address</h3>
                                <p>Level 1, 9 Bronte Rd, Bondi Junction, NSW 2022</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <a href="mailto:stuart@ecosearch.io">stuart@ecosearch.io</a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <a href="tel:0451003081">0451003081</a>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-4 mt-1">
                        <div class="col-lg-6 ">
                            <iframe src="https://www.google.com/maps/embed?-33.8930154,151.2470749,17z/data=!3m1!4b1!4m5!3m4!1s0x6b12adf13e02edd3:0x259af2b12d21119f!8m2!3d-33.8930199!4d151.2492636?hl=en-US" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                        </div>
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
                        &copy; <script>document.write(new Date().getFullYear())</script> <strong><span>rsSolutions</span></strong>. All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <div id="preloader"></div>
        @include('construct.ecoScript')
    </body>
</html>
