<!-- ============================================== Vendor Scripts =============================================== -->
        <script src="assets/js/vendor/jquery.min.js"></script>
        <script src="assets/js/vendor/jquery.easing.min.js" async=""></script>
        <script src="assets/js/vendor/jquery.inview.min.js" async=""></script>
       
        <script src="assets/js/vendor/bootstrap.min.js" defer=""></script>
        <script src="assets/js/vendor/animation.min.js" async=""></script>
        <script src="assets/js/vendor/progress-radial.min.js" async=""></script>
        <script src="assets/js/vendor/bricklayer.min.js"></script>
        <script src="assets/js/vendor/gallery.min.js" async=""></script>
        <script src="assets/js/vendor/shuffle.min.js"></script>
        <script src="assets/js/vendor/cookie-notice.min.js"></script>
        <script src="assets/js/main.js" async=""></script>
        <script src="assets/owl/js/owl.carousel.min.js" defer=""></script>
        <script src="npm/progressive-image.js/dist/progressive-image.js"></script>
        
        <script src="assets/js/vendor/slider.min.js" defer=""></script>
        <script src="assets/js/vendor/ponyfill.min.js" async=""></script>
        <script></script>
        <script>
            $(document).ready(function () {
                $(".home-banner-slider").owlCarousel({
                    items: 1,
                    loop: true,
                    mouseDrag: false,
                    touchDrag: false,
                    pullDrag: false,
                    animateIn: "fadeIn",
                    animateOut: "fadeOut",
                    margin: 0,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false,
                });
            });

            $(document).ready(function () {
                $(".testimonials-carousel").owlCarousel({
                    items: 1,
                    loop: true,
                    mouseDrag: false,
                    touchDrag: false,
                    pullDrag: false,
                    animateIn: "fadeIn",
                    animateOut: "fadeOut",
                    margin: 15,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false,
                });


               $('.popup-click').click(function() {
                    $('.LoginPopup').fadeIn();
                    $('.overlay').fadeIn();
                });

                $('.closePop,.overlay').click(function() {
                    $('.LoginPopup').fadeOut();
                    $('.overlay').fadeOut();
                });



            });
        </script>


        <!--  Start of Zendesk Widget script  -->
            <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=3f306751-2147-4aa9-b9a1-7313ae4cfbea"> </script>
            <script>
                $zopim(function() {
                $zopim.livechat.theme.setColor('#0057e8');
                $zopim.livechat.theme.setColor('#0057e8', 'badge');
              });
              
              function setButtonURL(){ 
                $zopim.livechat.window.show() 
              } 
            </script>  
        <!--   End of Zendesk Widget script  -->

        
       <!--  <script>
            $("#contact_form").on("submit", function (e) {
                e.preventDefault();

                var name = $("#name").val();
                var email = $("#email").val();
                var subject = $("#subject").val();
                var message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "https://www.creativelogomakers.com/home/send_mail",
                    data: { name: name, email: email, subject: subject, message: message },
                    success: function (result) {
                        console.log(result);
                        if (result == "fail") {
                            $(".error-box").css({
                                display: "block",
                                "margin-top": "20px",
                            });
                            $(".error-box").delay(5000).fadeOut(400);
                        } else {
                            $(".success-box").css({ display: "block", "margin-top": "20px" });
                            $(".success-box").delay(5000).fadeOut(400);
                            $("#contact_form")[0].reset();
                        }
                    },
                });
            });
        </script> -->
        <!-- <script>
            function check_storage() {
                if (typeof Storage !== "undefined") {
                    return true;
                } else {
                    throw "Browser Not Supported.";
                }
            }

            function check_storage_key(key) {
                try {
                    check_storage();
                    if (sessionStorage.getItem(key)) {
                        return true;
                    } else {
                        throw "Empty Storage.";
                    }
                } catch (err) {
                    console.log(err);
                }
            }

            function set_session_storage(key, value) {
                try {
                    check_storage();
                    sessionStorage.setItem(key, value);
                } catch (err) {
                    console.log(err);
                }
            }

            function get_session_storage(key) {
                try {
                    check_storage();
                    check_storage_key(key);

                    return sessionStorage.getItem(key);
                } catch (err) {
                    console.log(err);
                }
            }
        </script>
        <script>
            $(document).ready(function () {
                try {
                    var gclid = get_session_storage("gclid");
                    console.log(gclid);

                    $zopim(function () {
                        $zopim.livechat.addTags("SEM Click - GCLID: " + gclid);
                    });
                } catch (err) {
                    console.log("Empty");
                }
            });
        </script> -->