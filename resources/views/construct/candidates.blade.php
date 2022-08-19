<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>EcoSearch | CANDIDATES</title>
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
                        <li><a href="{{url('/candidate')}}" class="active">CANDIDATES</a></li>
                        <li><a href="{{url('/contact')}}">CONTACT US</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main id="main">
            <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog/blog-inside-post.jpg');">
                <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                    <h2>CANDIDATES</h2>
                    <ol>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>CANDIDATES</li>
                    </ol>

                </div>
            </div>
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <h4>Please complete the following form if you’re interested. We will come back to you as soon as possible</h4>
                    <div class="row gy-4 mt-1">
                        <div class="col-md-12">
                            <form action="{{route('candidates.store')}}" method="post" class="php-email-form">
                                @csrf
                                <h4>Candidate Registration Form</h4><br/><br/>
                                <h4 style="color: #2FDDF9">PERSONAL DETAILS</h4>
                                <div class="form-group">
                                    <input type="text" name="candidate_name" class="form-control" id="candidate_name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Street Address" required>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="state" id="state" placeholder="State/Province" required>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="zip_code" class="form-control" maxlength="6" id="zip_code" placeholder="ZIP / Postal Code" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="country" id="country" placeholder="Country" required>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-lg-6 form-group">
                                        <input type="tel" name="mobile_no" class="form-control" id="mobile_no" placeholder="Telephone" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="email" class="form-control" name="candidate_email" id="candidate_email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="tax_file_number" class="form-control" id="tax_file_number" placeholder="Tax File Number" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="abn_number" id="abn_number" placeholder="A.B.N (if Applicable)" required>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="own_vehicle" class="form-control" id="own_vehicle" placeholder="Do you drive" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" class="form-control" name="visa_status" id="visa_status" placeholder="Visa Status" required>
                                    </div>
                                </div>
                                <legend></legend>

                                <h4 style="color: #2FDDF9">EMERGENCY CONTACT</h4>

                                <div class="row gy-4">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="fin_name" class="form-control" id="fin_name" placeholder="Name" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="tel" class="form-control" name="fin_mobile" id="fin_mobile" placeholder="Contact Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="relationship_name" class="form-control" id="relationship_name" placeholder="Relationship" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="fin_address" rows="5" placeholder="Address" required></textarea>
                                </div>

                                <legend></legend>

                                <h4 style="color: #2FDDF9">BANK ACCOUNT DETAILS</h4>
                                <div class="form-group">
                                    <input type="text" name="account_name" class="form-control" id="account_name" placeholder="Account Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="institution" class="form-control" id="institution" placeholder="Institution" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="account_number" class="form-control" id="account_number" maxlength="16" placeholder="Account Number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="account_bsb" class="form-control" id="account_bsb" placeholder="Account BSB" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="fund_details" class="form-control" id="fund_details" placeholder="Superannuation Fund Details" required>
                                </div>

                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="sent-message"></div>
                                    <div class="error-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button style="text-transform: uppercase;" type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div> <br/><br/>
                <div class="text-center" style="text-transform: uppercase;">
                    <a class="btn btn-info" href="http://www.eco-search.com.au/wp-content/uploads/2021/04/Timesheet-EcoSearch-Consulting.pdf" target="_blank">Download TimeSheet Here</a>
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
