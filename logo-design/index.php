<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("../includes/compatibility.php"); ?>
        <title>Home - Creative Logo Makers</title>
        <?php include("../includes/style.php"); ?>
    </head>
    <body>
         <style>
            .card div ul.fullpricingul {
                max-height: none;
                min-height: auto;
                overflow: hidden;
            }
            .plans .items .item .bigpricingbtn {
                margin-top: 10px;
            }
            .card.featured::before {
                width: calc(50% + -365px);
            }
            .after-for-big-pricing {
                position: absolute;
                z-index: -1;
                content: "";
                width: calc(50% - 340px);
                height: calc(50% + 10px);
                border: none;
                background-image: -webkit-linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
                background-image: linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
                transition-timing-function: cubic-bezier(0.25, 0.25, 0.75, 0.75);
                transition-duration: 0.4s;
                transition-property: opacity, transform;
                right: -10px;
                bottom: -10px;
                border-radius: 0 6px 6px 6px;
            }
            .card.featured:hover .after-for-big-pricing {
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
            }
            .big-pricing-mob-btn-area {
                display: none;
            }
            @media screen and (min-width: 1900px) {
                .card.featured::before,
                .after-for-big-pricing {
                    width: calc(50% + -482px);
                }
            }
            @media (max-width: 768px) {
                .card div:nth-child(2),
                .card div:nth-child(3) {
                    margin-bottom: 20px !important;
                }
                .fullpricingrow {
                    padding: 35px 0px;
                }
                .fullpricingmobile,
                .fullpricingmobile div {
                    padding-left: 0px !important;
                    padding-right: 0px !important;
                }
                .big-pricing-mob-btn-area {
                    display: block;
                }
                .big-pricing-desktop-btn {
                    display: none;
                }
            }
        </style>


        <?php include("../includes/header.php"); ?>
       

        <!-- Hero -->
        <section id="slider" class="hero p-0 featured">
            <div class="swiper-container no-slider featured animation slider-h-100">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <div class="slide-content row">
                            <div class="col-12 d-flex inner">
                                <div class="align-self-center text-center logodesign-banner logo-bnr">
                                    <h1 class="title effect-static-text heading-glow-anim">
                                        <span>G</span><span>e</span><span>t</span><span> </span><span>C</span><span>u</span><span>s</span><span>t</span><span>o</span><span>m</span><span> </span><span>L</span><span>o</span><span>g</span><span>o</span><span> </span><span>D</span><span>e</span><span>s</span><span>i</span><span>g</span><span>n</span><span>s</span><span> </span><span>M</span><span>a</span><span>d</span><span>e</span>
                                        <span> </span><span>F</span><span>r</span><span>o</span><span>m</span><span> </span><span>S</span><span>c</span><span>r</span><span>a</span><span>t</span><span>c</span><span>h</span>
                                    </h1>
                                    <div class="banner-link">
                                         <!--  <a href="#pricing" data-aos="zoom-out-up" data-aos-delay="1200" class="ml-auto mr-auto ml-md-0 mt-4 mt-md-0 btn primary-button smooth-anchor float-md-left redbgbutton">View Pricing</a> -->
                                          <a
                                             href="javascript:void(0)"
                                             onclick="$zopim.livechat.window.show()"
                                             data-aos="zoom-out-up"
                                             data-aos-delay="1200"
                                             class="ml-auto mr-auto ml-md-2 mt-4 mt-md-0 btn primary-button float-md-left redbgbutton"
                                             >
                                          Discuss Now
                                          </a>
                                   </div>
                                   <!--  <div class="banner-form-area">
                                        <p class="description text-glow-anim">
                                            <span>F</span><span>i</span><span>l</span><span>l</span><span> </span><span>i</span><span>n</span><span> </span><span>y</span><span>o</span><span>u</span><span>r</span><span> </span><span>c</span>
                                            <span>o</span><span>m</span><span>p</span><span>a</span><span>n</span><span>y</span><span> </span><span>d</span><span>e</span><span>t</span><span>a</span><span>i</span><span>l</span><span>s</span>
                                            <span> </span><span>s</span><span>o</span><span> </span><span>w</span><span>e</span><span> </span><span>c</span><span>a</span><span>n</span><span> </span><span>s</span><span>t</span><span>a</span>
                                            <span>r</span><span>t</span><span> </span><span>w</span><span>o</span><span>r</span><span>k</span><span>i</span><span>n</span><span>g</span><span> </span><span>o</span><span>n</span><span> </span>
                                            <br />
                                            <span>t</span><span>h</span><span>e</span><span> </span><span>b</span><span>e</span><span>s</span><span>t</span><span> </span><span>l</span><span>o</span><span>g</span><span>o</span><span> </span>
                                            <span>d</span><span>e</span><span>s</span><span>i</span><span>g</span><span>n</span><span> </span><span>y</span><span>o</span><span>u</span><span> </span><span>h</span><span>a</span><span>v</span>
                                            <span>e</span><span> </span><span>e</span><span>v</span><span>e</span><span>r</span><span> </span><span>h</span><span>a</span><span>d</span>
                                        </p>
                                        <form action="" class="ml-auto mr-auto ml-md-0 mt-4 banner-form">
                                            <input type="text" placeholder="Enter Your Company Name" name="cname" class="home-banner-input" autofocus="" required="" />
                                            <button type="submit" value="Start Now" class="btn primary-button logodesignredbgbutton">Start Now</button>
                                            <input type="submit" value="Start Now" class="btn primary-button">
                                        </form>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <img loading="lazy" src="vyzbqqyztn/creativelogomakers/assets/images/banner/1.png" alt="best logo design company" class="banner-pad-img onload-animate banner-pad-ani" style="animation-delay: 0.8s;" />
                    <img loading="lazy" src="vyzbqqyztn/creativelogomakers/assets/images/banner/2.png" alt="best logo design company" class="banner-pot-img onload-animate banner-pot-ani" style="animation-delay: 1.2s;" />
                    <img loading="lazy" src="vyzbqqyztn/creativelogomakers/assets/images/banner/3.png" alt="best logo design company" class="banner-note-img onload-animate banner-note-ani" style="animation-delay: 0.8s;" />
                    <img loading="lazy" src="vyzbqqyztn/creativelogomakers/assets/images/banner/4.png" alt="best logo design company" class="banner-pens-img onload-animate banner-pens-ani" style="animation-delay: 1.5s;" />
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section id="services" class="section-4 image-right" style="background: #fff;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div id="logo-design-service" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-6 p-0">
                                        <div class="row intro mb-0">
                                            <div class="col-12 p-0" data-aos="fade-in" data-aos-delay="300">
                                                <h2 class="featured alt pb-20">
                                                    Logo Design &amp; Branding <br />
                                                    In Detail
                                                </h2>
                                                <p>
                                                    Your company’s logo design and branding is your identity. At Creative Logo Makers, we understand that well. Our designers make sure to deliver customized, professional logo design as per the
                                                    nature of your business and target audience. Our in-depth process starts from brainstorming, goes through conceptualization &amp; sketching, and concludes with a logo design that you are
                                                    delighted with.
                                                </p>
                                                <div class="link-area">
                                                    <a href="#pricing" class="btn primary-button smooth-anchor bordered-a borderredbutton">See Pricing</a>
                                                    <a href="javascript:void(0)" onclick="$zopim.livechat.window.show()" class="btn primary-button smooth-anchor redbutton">Discuss Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="vyzbqqyztn/creativelogomakers/assets/images/logosideimg.jpg.png" loading="lazy" class="service-img" style="max-width: 93%; margin-bottom: -30px;" data-aos="fade-in" data-aos-delay="600" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="portfolio" class="section-1 portfolio image-right">
            <div class="container">
                <div class="row intro mb-40">
                    <div class="col-12 p-0 text-center" data-aos="fade-in" data-aos-delay="300">
                        <h2 class="featured alt">Portfolio</h2>
                        <p class="text-max-800">Check the level of creativity, Our team has achieved with collaborative teamwork.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="service-tabs portfolio-tabs" data-aos="fade-in" data-aos-delay="300">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#all-design-portfolio"> <p>All</p> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#logo-design-portfolio"> <p>Logo Design</p> </a>
                                </li>
                               <!--  <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#branding-design-portfolio"> <p>Branding</p> </a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#web-design-portfolio"> <p>Web Design</p> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#video-animation-portfolio"> <p>Video Animation</p> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="tab-content">
                            <div id="all-design-portfolio" class="tab-pane fade">
                                <?php include("../includes/portfolio-all-design.php"); ?>
                            </div>
                            <div id="logo-design-portfolio" class="tab-pane active">
                                <?php include("../includes/portfolio-logo.php"); ?>
                            </div>
                            <!-- <div id="branding-design-portfolio" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-3 p-0">
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/1_wreY0dFPT.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/1_wreY0dFPT-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/1.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/2_izsQSJ3V0h.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/2_izsQSJ3V0h-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/2.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/3_wWg1xTrKTE.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/3_wWg1xTrKTE-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/3.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/4_QfxRHOcZLy.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/4_QfxRHOcZLy-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/4.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/5_fhbe1vISLf.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/5_fhbe1vISLf-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/5.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/6_MbUTI8Oxsf.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/6_MbUTI8Oxsf-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/6.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/7_-sPMjIg-o7.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/7_-sPMjIg-o7-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/7.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 p-0">
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/8_d-EOekhP-N.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/8_d-EOekhP-N-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/8.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/9_p3-irLvm2a.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/9_p3-irLvm2a-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/9.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                        <div class="porfolio-item">
                                            <a href="vyzbqqyztn/portfolio/branding-small/10_p9VTVHfGzP.jpg" class="progressive replace">
                                                <img class="preview" src="vyzbqqyztn/portfolio/branding-small/10_p9VTVHfGzP-1.jpg?tr=bl-30,q-35" alt="video animation services" loading="lazy" />
                                            </a>
                                            <div class="porfolio-overlay gallery">
                                                <a href="assets/images/portfolio/branding/10.jpg" class="image-over"> <i class="icon-plus"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div id="web-design-portfolio" class="tab-pane fade">
                                <?php include("../includes/portfolio-web.php"); ?>
                            </div>
                            <div id="video-animation-portfolio" class="tab-pane fade">
                                <?php include("../includes/portfolio-animation.php"); ?>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 text-center p-0" data-aos="fade-in" data-aos-delay="300">
                        <div class="link-area mt-30 d-flex justify-content-center">
                            <a href="portfolio.html" class="btn primary-button bordered-a borderredbutton" style="max-width: auto;"> See More Work <i class="fas fa-arrow-right" style="margin-right: 0; margin-left: 0.5rem;"></i> </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <section id="pricing" class="section-4 plans">
            <div class="container">
                <div class="row intro mb-40">
                    <div class="col-12 p-0 text-center" data-aos="fade-in" data-aos-delay="300">
                        <h2 class="featured alt">Plans and Pricing</h2>
                        <p class="text-max-800">We offer reasonable prices for premium design and development services that will boost your business value.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="service-tabs portfolio-tabs" data-aos="fade-in" data-aos-delay="300">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#logo-design-price"> <p>Logo Design</p> </a>
                                </li>
                               <!--  <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#branding-design-price"> <p>Branding</p> </a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#web-design-price"> <p>Web Design</p> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#video-animation-price"> <p>Video Animation</p> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="tab-content">
                            <div id="logo-design-price" class="tab-pane active no-scroll-price">
                                <?php include("../includes/packages-logo.php"); ?>
                            </div>
                           <!--  <div id="branding-design-price" class="tab-pane fade">
                                <div class="row justify-content-center text-center items pricingdivrow">
                                    <div class="col-12 col-md-6 col-lg-3 align-self-center text-center item">
                                        <div class="card">
                                            <i class="icon icon-layers"></i>
                                            <h4>Basic Plan</h4>
                                            <span class="price"><i>$</i>59</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Business Card Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Letterhead Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Envelope Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>100% Ownership</span></li>
                                            </ul>
                                            <a href="payment/paynow-4.html" class="btn mx-auto primary-button redbgbuttonpricing"><i class="far fa-hand-pointer"></i>Buy Now - Click</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 align-self-center text-center item">
                                        <div class="card">
                                            <i class="icon icon-chart"></i>
                                            <h4>Pro Plan</h4>
                                            <span class="price"><i>$</i>99</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Business Card Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Letterhead Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Envelope Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Email Signature</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>2 Social Covers</span></li>
                                            </ul>
                                            <a href="payment/paynow-5.html" class="btn mx-auto primary-button redbgbuttonpricing"><i class="far fa-hand-pointer"></i>Buy Now - Click</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 align-self-center text-center item">
                                        <div class="card">
                                            <i class="icon icon-fire"></i>
                                            <h4>Premium Plan</h4>
                                            <span class="price"><i>$</i>149</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Business Card Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Letterhead Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Envelope Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Email Signature</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>4 Social Covers</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>T-Shirt Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Web Banner Design</span></li>
                                            </ul>
                                            <a href="payment/paynow-6.html" class="btn mx-auto primary-button redbgbuttonpricing"><i class="far fa-hand-pointer"></i>Buy Now - Click</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 align-self-center text-center item">
                                        <div class="card">
                                            <i class="icon icon-diamond"></i>
                                            <h4>Deluxe Plan</h4>
                                            <span class="price"><i>$</i>199</span>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Business Card Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Letterhead Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Envelope Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Email Signature</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>4 Social Covers</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>T-Shirt Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Web Banner Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Signage Design</span></li>
                                                <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Car Stickers Design</span></li>
                                            </ul>
                                            <a href="payment/paynow-7.html" class="btn mx-auto primary-button redbgbuttonpricing"><i class="far fa-hand-pointer"></i>Buy Now - Click</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div id="web-design-price" class="tab-pane fade">
                                <?php include("../includes/packages-website.php"); ?>
                            </div>
                            <div id="video-animation-price" class="tab-pane fade">
                                <?php include("../includes/packages-animation.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Start of Premium Package Pricing -->
       
        <section id="promotion-pricing" class="section-4 plans pb-60">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 p-0 text-center">
                        <h2 class="featured alt">Premium Logo Package</h2>
                        <p class="text-max-800">Our logos are mixed with next-level creativity, swift edges and colors that are fused rightly to carry your business well.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="tab-content">
                            <div id="video-animation-price" class="tab-pane active">
                                <div class="row justify-content-center text-center items pricingdivrow fullpricingmobile">
                                    <div class="col-12 col-md-12 col-lg-12 align-self-center text-center item">
                                        <div class="row card featured fullpricingrow" style="flex-direction: row; position: relative;">
                                            <span class="after-for-big-pricing"></span>
                                            <img src="vyzbqqyztn/creativelogomakers/assets/images/promotional.png" loading="lazy" width="100%" style="position: absolute; max-width: 100px; top: -3px; right: -4px;" />
                                            <div class="col-md-4 my-auto">
                                                <i class="icon icon-layers"></i>
                                                <h4>Premium Logo</h4>
                                                <span class="price"><i>$</i>349</span>
                                                <a href="javascript:;" class="btn mx-auto primary-button bigpricingbtn big-pricing-desktop-btn redbgbuttonpricing"> <i class="far fa-hand-pointer"></i>Get Started</a>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="list-group-flush">
                                                    <li class="list-group-item text-left list-title-li"><i class="icon-min m-0 icon-check text-right"></i> <span>Logo Design</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Lead by Art Director (15 Years of design experience)</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>100% Ownership</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>UNLIMITED LOGO Concepts & UNLIMITED Revisions</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>All Master Editable Ai File, PDF, EPS, JPG & PNG</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>48 hours Delivery Time</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="list-group-flush">
                                                    <li class="list-group-item text-left list-title-li"><i class="icon-min m-0 icon-check text-right"></i> <span>Free Add on</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Business Card Design & Letterhead Design</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Hat/Cap Design & T shirt Design</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Font names, Color codes</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Black and White version</span></li>
                                                    <li class="list-group-item text-left"><i class="icon-min m-0 icon-check text-right"></i> <span>Social Cover design (FB, Twitter, LinkedIn, e.t.c)</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-12 big-pricing-mob-btn-area">
                                                <a href="payment/paynow-16.html" class="btn mx-auto primary-button bigpricingbtn big-pricing-mob-btn"> <i class="far fa-hand-pointer"></i>Buy Now - Click</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Premium Package Pricing -->

        <?php include("../includes/cta-sec.php"); ?>


        <?php include("../includes/how-it-works.php"); ?>

        
        <?php include("../includes/why-us-sec.php"); ?>

        <?php include("../includes/about-sec.php"); ?>

        <?php include("../includes/testimonials-sec.php"); ?>


        
        <?php include("../includes/contact-sec.php"); ?>

        <?php include("../includes/footer.php"); ?>

        <?php include("../includes/scripts.php"); ?>
    </body>
</html>
