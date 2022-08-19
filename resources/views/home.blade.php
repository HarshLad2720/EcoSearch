<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>EcoSearch | Recruitment for Construction, Electrical and Renewables</title>
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
                        <li><a href="{{url('/')}}" class="active">HOME</a></li>
                        <li><a href="{{url('/area')}}">AREAS OF EXPERTISE</a></li>
                        <li><a href="{{url('/team')}}">MEET THE TEAM</a></li>
                        <li><a href="{{url('/candidate')}}">CANDIDATES</a></li>
                        <li><a href="{{url('/contact')}}">CONTACT US</a></li>
                        <li>
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <li>
                                <x-app-layout>

                                </x-app-layout>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                            @endif
                        @endauth
                        </div>
                          @endif
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="hero" class="hero">
            <div class="info d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <p style="font-size: 21px; font-weight: bold; color: white; text-align: start;">EcoSearch specialises in providing labour hire services in <span style="color: #AFFCF9">Construction, Electrical and Renewable industries, Australia wide</span>. We believe success depends on the people around you, we want to help you find and retain the best employees so your organisation can grow, perform and have long-term success.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-item active" style="background-image: url(assets/img/projects/construction-2.jpg)"></div>
            </div>
        </section>

        <main id="main">
            <section id="get-started" class="get-started section-bg">
                <div class="container">
                    <div class="row justify-content-between gy-4">
                        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" style="background-color: #15272F;padding-top: 0%;padding-right: 4%;padding-bottom: 8%;padding-left: 8%;color: white;">
                            <div class="content">
                                <h3 style="color: white;">Why choose EcoSearch ? or What sets us apart? </h3>
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}As specialists in the industry, we have extensive experience in finding the best solution for you. We want the match for both parties to be long-standing and gratifying.
                                    We take the relationship-approach, taking our time to thoroughly get to know both your organisation, and our candidates.
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}Whether you’re looking for a highly skilled worker in a particular area, or access to labourers with a wide variety of tickets, we supply the most suitable individual
                                    years’ experience successfully pairing candidates with the relevant employer
                                    A huge, dedicated and trusted talent database
                                </p>
                            </div>
                        </div>

                            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up" style="background-color: #AFFCF9;padding-top: 4%;padding-right: 8%;padding-bottom: 4%;padding-left: 4%;">
                            <div class="content">
                                <h3 style="color: black;">Our Solutions</h3>
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}We take the time to understand both your immediate, and future needs as a company.
                                    Full job briefing to understand what skills and qualifications are required inline with your workplace needs and the necessary safety requirements, so only the ideal selection is made
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}An in-depth search is carried out using our industry knowledge to filter through our database for suitable candidates
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}We carry out structured screening interviews to ensure the right fit, both culturally and technically. During this process a full clear description of the job role is executed.
                                    Once potential candidates are selected, we carry out checks of references from previous employers
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}When the placement has been confirmed, we maintain our relationship with both the organisation and candidate, providing an exceptional on-boarding experience in the weeks that follow, so any constructive feedback can be exchanged, taken on board, and resolved early on.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section id="alt-services" class="alt-services">
                <div class="container" data-aos="fade-up">

                    <div class="row justify-content-around gy-4">
                        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/features-4.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

                        <div class="col-lg-5 d-flex flex-column justify-content-center">
                            <h3>Areas we service:</h3>
                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-1-circle"></i>
                                <div>
                                    <h4><a href="{{url('/area')}}" class="stretched-link">Construction</a></h4>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-2-circle"></i>
                                <div>
                                    <h4><a href="{{url('/area')}}" class="stretched-link">Electrical</a></h4>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-3-circle"></i>
                                <div>
                                    <h4><a href="{{url('/area')}}" class="stretched-link">Renewables</a></h4>
                                </div>
                            </div><br/><br/>
                            <div class="form-group" style="position: relative;right: -113px;text-transform: uppercase;">
                                <a class="btn btn-secondary btn-change2" href="{{url('/area')}}">AREAS OF EXPERTISE</a>
                            </div><br/>
                            <div class="form-group" style="position: relative;right: -75px;padding-left: 41px; text-transform: uppercase;">
                                <a class="btn btn-secondary btn-change2" href="{{url('/team')}}">MEET THE TEAM</a>
                            </div>

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
                        </div>

                        <div class="col-lg-2 col-md-3 footer-links">
                            <h4 style="color: #affcf9;">Scott Sarson <br>Senior Consultant</h4>
                            <ul>
                                <li><i class="fa fa-phone">{!! "&nbsp;" !!}<a href="tel:0466680416">0466680416</a></i></li>
                                <li style="padding-top: 0px;"><i class="fa fa-mail-bulk" style="font-size: 10px;">{!! "&nbsp;" !!}<a href="mailto:scott@ecosearch.io">scott@ecosearch.io</a></i></li>
                            </ul>
                        </div>

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
        @include('construct.ecoScript')
    </body>
</html>
