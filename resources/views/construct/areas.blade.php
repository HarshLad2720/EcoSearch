<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>EcoSearch | AREAS OF EXPERTISE</title>
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
                        <li><a href="{{url('/area')}}" class="active">AREAS OF EXPERTISE</a></li>
                        <li><a href="{{url('/team')}}">MEET THE TEAM</a></li>
                        <li><a href="{{url('/candidate')}}">CANDIDATES</a></li>
                        <li><a href="{{url('/contact')}}">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main id="main">
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/footer-bg.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                    <h2>AREAS OF EXPERTISE</h2>
                    <ol>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>AREAS OF EXPERTISE</li>
                    </ol>

                </div>
            </div>

            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="row position-relative">
                        <div class="col-lg-7 about-img" style="background-image: url(assets/img/about.jpg);"></div>
                        <div class="col-lg-7">
                            <div class="our-story">
                                <h4 style="color: #2FDDF9">Construction</h4>
                                <ul>
                                    <li><span>Sourcing and recruiting future workers you can trust and rely on across the construction industry</span></li>
                                    <li><span>We typically recruit (A list of example roles we recruit here - construction)roles.
                                            With an industry that can be highly saturated, we pride ourselves in providing quality, reliability and trust in our candidates. Our industry awareness means we know what to look out for and can ensure work safe standards are met</span></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="alt-services" class="alt-services">
                <div class="container" data-aos="fade-up">

                    <div class="row justify-content-around gy-4">
                        <div class="col-lg-6 img-bg" style="background-image: url(assets/img/features-1.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

                        <div class="col-lg-5 d-flex flex-column justify-content-center">
                            <h4 style="color: #2FDDF9">Electrical</h4>
                            <p>EcoSearch is an electrical recruitment, placement and services firm based in location of company here. We specialise in placing people in  A list of example roles we recruit here – electrical roles</p>
                            <p>We source qualified and highly trained electricians, with appropriate cards and qualifications, from local and international markets to provide staffing solutions for the electrical sector. Our knowledge helps us to ensure the relevant skilled people are paired with the best suited roles.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="row position-relative">
                        <div class="col-lg-7 about-img" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg);"></div>
                        <div class="col-lg-7">
                            <div class="our-story">
                                <h4 style="color: #2FDDF9">Renewables</h4>
                                <p>Eco Search services the renewable energy sector, we are proud to say this is a rapidly growing industry as more roles present themselves every day. This sector is expanding with a spotlight on sustainability globally.  We work and maintain relationships with several innovative and industry-leading organisations across the renewable industry.
                                    We understand the pace of this growing industry and that having highly skilled and qualified workers can be difficult to find, that’s where we come in and make it simple.</p>
                                <p>We recruit A list of example roles we recruit here – renewables roles, bringing solutions to both our clients and candidates.</p>
                                <p>We can recommend some of the best emerging and established talent in the industry. Over the years we have developed a trusted reputation through recognising our client’s requirements and finding purposeful solutions allowing them to maintain a competitive advantage in a fast-paced, evolving market.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </section><br/><br/>
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
