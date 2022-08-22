<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title> Teams | rsSolutions</title>
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
                        <li><a href="{{url('/team')}}" class="active">MEET THE TEAM</a></li>
                        <li><a href="{{url('/candidate')}}">CANDIDATES</a></li>
                        <li><a href="{{url('/contact')}}">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main id="main">
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog/blog-recent-5.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                    <h2>MEET THE TEAM</h2>
                    <ol>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>MEET THE TEAM</li>
                    </ol>
                </div>
            </div>

            <section id="team" class="team">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Our Team</h2>
                    </div>

                    <div class="row gy-5">
                        @foreach($teamMembers as $teams)

                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/icon-replacement-whitebg.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info text-center">
                                <h4>{{$teams->member_name}}</h4>
                                <span>{{$teams->member_designation}}</span>
                                <a href="mailto:stuart@ecosearch.io">{{$teams->member_email}}</a>
                            </div>
                        </div><!-- End Team Member -->
                        @endforeach
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
                        </div><!-- End footer links column-->

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
