<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("../includes/compatibility.php"); ?>
        <title>Home - Creative Logo Makers</title>
        <?php include("../includes/style.php"); ?>
    </head>
   <body>
      
      <?php include("../includes/header.php"); ?>

      <!-- Hero -->
      <style>
         .slider-h-100 {
         width: 100%;
         height: 350px !important;
         }
         .no-slider .inner .left,
         .no-slider.featured .inner .left .title {
         width: 100%;
         max-width: 100%;
         }
         .simple-p {
         margin-bottom: 15px;
         }
         .simple-p + h4 {
         margin-top: 30px;
         }
         .full-slider.featured .inner .left:after,
         .no-slider.featured .inner .left:after {
         display: none;
         }
         .full-slider .slide-content .left .description,
         .no-slider .slide-content .left .description,
         .full-slider .slide-content .right .description,
         .no-slider .slide-content .right .description {
         max-width: 650px;
         margin-top: 0 !important;
         }
         @media (min-width: 1899px) {
         .slider-h-100 {
         height: 500px !important;
         }
         .full-slider .slide-content .left .description,
         .no-slider .slide-content .left .description,
         .full-slider .slide-content .right .description,
         .no-slider .slide-content .right .description {
         max-width: 850px;
         }
         }
         @media (max-width: 768px) {
         .slider-h-100 {
         height: 500px !important;
         }
         }
      </style>
      <section
         id="slider"
         class="hero p-0 featured"
         style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('vyzbqqyztn/creativelogomakers/assets/images/banner/contact.jpg') no-repeat center center; background-size: cover;"
         >
         <div class="swiper-container no-slider featured animation slider-h-100">
            <div class="swiper-wrapper">
               <!-- Item 1 -->
               <div class="swiper-slide slide-center">
                  <div class="container">
                     <div class="slide-content row">
                        <div class="col-md-7 col-sm-7 col-xs-12 contactheadingcol">
                           <div class="left align-self-left text-md-left text-left d-flex flex-wrap">
                              <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Contact Us</h1>
                              <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Our responsive team is always ready to cater your queries. We are also here to have your feedback.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--<div class="slide-content row"> <div class="col-12 d-flex inner text"> <div class="left align-self-center text-md-center text-left d-flex flex-wrap justify-content-center"> <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Contact Us</h1> <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Our responsive team is always ready to cater your queries. We are also here to have your feedback.</p> </div> </div> </div>-->
               </div>
            </div>
            <div class="swiper-pagination"></div>
         </div>
      </section>

        <!-- Contact -->
        <?php include("../includes/contact-sec.php"); ?>

        <?php include("../includes/footer.php"); ?>

        <?php include("../includes/scripts.php"); ?>
   </body>
</html>