<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>EcoSearch | Recruitment for Construction, Medical and Logistics</title>
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
                        <li><a href="{{url('/')}}" class="active">Home</a></li>
                        <li><a href="{{url('/area')}}">Specialist Areas</a></li>
                        <li><a href="{{url('/team')}}">The Team</a></li>
                        <li><a href="{{url('/candidate')}}">Candidates</a></li>
                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
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
                            <h1><p style="font-size: 28px; color: white; text-align: start;">EcoSearch are specialists in the sourcing and recruitment of high calibre candidates in commercial roles within <span style="color: #affcf9;">Construction & Engineering, Medical, Supply Chain & Logistics, and Health & Safety</span> industries across Australia.</p></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
            </div>
        </section>

        <main id="main">
            <section id="get-started" class="get-started section-bg">
                <div class="container">

                    <div class="row justify-content-between gy-4">

                        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                            <div class="content">
                                <h3>Why EcoSearch?</h3>
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}We employ a relationship-based approach to recruitment and our focus is on a long term fit for both parties. Feedback from our clients is consistent – they engage us because of our incisive market knowledge and proven ability to discretely execute an efficient and effective search and recruitment process.
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}High quality candidates do not flood the market; the majority of candidates are passive i.e, happy in their roles but open to the right opportunity. We use many proactive tools and techniques to access and influence top candidates, none more so than our existing relationships and networks.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                            <div class="content">
                                <h3>Our Strategies</h3>
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}Full job briefing to understand cultural dynamics and technical requirements.
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}Search is undertaken using our deep knowledge of the marketplace and comprehensive database, networks and other avenues such industry associations.
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}We conduct structured screening interviews with the candidates to explore both technical requirements and cultural fit, and a realistic job preview is provided to ensure candidates fully understand the role.
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}We use a comprehensive and structured approach to check references of the preferred candidate, each of which is summarised in writing.
                                <p><i class="bi bi-arrow-right-short"></i>{!! "&nbsp;" !!}Post placement, we follow up with both the candidate and organisation in the crucial early weeks, to check satisfaction and ensure any teething problems are quickly and appropriately addressed.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section id="alt-services" class="alt-services">
                <div class="container" data-aos="fade-up">

                    <div class="row justify-content-around gy-4">
                        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

                        <div class="col-lg-5 d-flex flex-column justify-content-center">
                            <h3>At EcoSearch our highest priority is to respond quickly with quality to a client request – whether it is for permanent or contract staff</h3>
                            <p>We help companies hire the Top 15% of talent. Reach us today for more information.</p><br/><br/>

                            <h3>Our Specialist Areas:</h3>
                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-1-circle"></i>
                                <div>
                                    <h4><a href="{{url('/area')}}" class="stretched-link">Construction & Engineering</a></h4>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-2-circle"></i>
                                <div>
                                    <h4><a href="{{url('/area')}}" class="stretched-link">Medical</a></h4>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-3-circle"></i>
                                <div>
                                    <h4><a href="{{url('/area')}}" class="stretched-link">Supply Chain & Logistics</a></h4>
                                </div>
                            </div>
                            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-4-circle"></i>
                                <div>
                                    <h4><a href="{{url('/area')}}" class="stretched-link">Health & Safety</a></h4>
                                </div>
                            </div><br/><br/><!-- End Icon Box -->
                            <div class="form-group" style="position: relative;right: -113px;text-transform: uppercase;">
                                <a class="btn btn-info" href="{{url('/area')}}">More About Our Specialist Areas</a>
                            </div><br/>
                            <div class="form-group" style="position: relative;right: -113px;padding-left: 71px; text-transform: uppercase;">
                                <a class="btn btn-info" href="{{url('/team')}}">Learn About Our Team</a>
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
