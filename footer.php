<!-- footer-->
<footer class="footer_top">
    <div class="container">
        <div class="row">
            <!-- Social Section-->
            <div class="col-md-2">
                <h3>FOLLOW US</h3>
                <ul class="social">
                    <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a></li>
                    <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                    <li class="github"><span><i class="fa fa-github"></i></span><a href="#">Github</a></li>
                    <li class="linkedin"><span><i class="fa fa-linkedin"></i></span><a href="#">Linkedin</a></li>
                </ul>
            </div>
            <!-- End Social Section-->

            <!-- Recent links-->
            <div class="col-md-2">
                <h3>TWITTER FEED</h3>
                <div class="twitts"></div>
            </div>
            <!-- End Recent links-->

            <!-- Recent Links -->
            <div class="col-md-2">
                <h3>RECENT LINKS</h3>
                <ul>
                    <li><i class="fa fa-check"></i><a href="#">Work</a></li>
                    <li><i class="fa fa-check"></i><a href="#">About Us</a></li>
                    <li><i class="fa fa-check"></i><a href="#">Services</a></li>
                    <li><i class="fa fa-check"></i><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <!-- End Recent Links-->

            <!-- Newsletter-->
            <div class="col-md-3">
                <h3>NEWSLETTER SIGN UP</h3>
                <p>Enter your e-mail and subscribe to our newsletter.</p>
                <form id="newsletterForm" class="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <input class="form-control" placeholder="Email Address" name="email" type="email"
                            required="required">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="subscribe">Go!</button>
                        </span>
                    </div>
                </form>
                <div id="result-newsletter"></div>
            </div>
            <!-- end Newsletter-->

            <!-- Contact Us-->
            <div class="col-md-3">
                <h3>CONTACT US</h3>
                <ul class="contact_footer">
                    <li>
                        <i class="fa fa-envelope"></i> <a href="#">example@example.com</a>
                    </li>
                    <li>
                        <i class="fa fa-headphones"></i> <a href="#">55-5698-4589</a>
                    </li>
                    <li class="location">
                        <i class="fa fa-home"></i> <a href="#"> Av new stret - New York</a>
                    </li>
                </ul>
            </div>
            <!-- Contact Us-->
        </div>
    </div>
</footer>
<!-- End footer-->

<!-- footer-->
<footer class="coopring">
    <p>&copy; 2014 Jekas. All Rights Reserved.</p>
</footer>
<!-- End footer-->
</div>
<!-- End layout-->

<!-- ======================= JQuery libs =========================== -->
<!-- jQuery local-->
<script type="text/javascript" src="js/jquery.js"></script>
<!--Nav-->
<script type="text/javascript" src="js/nav/tinynav.js"></script>
<script type="text/javascript" src="js/nav/superfish.js"></script>
<script type="text/javascript" src="js/nav/hoverIntent.js"></script>
<script type="text/javascript" src="js/nav/jquery.sticky.js"></script>
<!--Totop-->
<script type="text/javascript" src="js/totop/jquery.ui.totop.js"></script>
<!--Slide Revolution-->
<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type='text/javascript' src='js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
<!--owl-carousel-->
<script type="text/javascript" src="js/carousel/owl.carousel.js"></script>
<!--Ligbox-->
<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
<!--Gallery Grid-->
<script type="text/javascript" src="js/gallery/modernizr.custom.26633.js"></script>
<script type="text/javascript" src="js/gallery/jquery.gridrotator.js"></script>
<!--Minislider Team-->
<script type="text/javascript" src="js/team/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="js/team/jquery.catslider.js"></script>
<!--Filters-->
<script type="text/javascript" src="js/filters/jquery.isotope.js"></script>
<!--Theme Options-->
<script type="text/javascript" src="js/theme-options/theme-options.js"></script>
<script type="text/javascript" src="js/theme-options/jquery.cookies.js"></script>
<!-- Twitter Feed-->
<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
<!-- WOW-master-->
<script type="text/javascript" src="js/animations/wow.min.js"></script>
<!-- Parallax-->
<script type="text/javascript" src="js/parallax/jquery.inview.js"></script>
<script type="text/javascript" src="js/parallax/nbw-parallax.js"></script>
<!-- Bootstrap.js-->
<script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
<!--fUNCTIONS-->
<script type="text/javascript" src="js/main.js"></script>
<!-- ======================= End JQuery libs =========================== -->

<!--Slider Function-->
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('.tp-banner').revolution(
            {
                delay: 15000,
                startwidth: 1170,
                startheight: 500,
                hideThumbs: 10,
                fullWidth: "on",
                fullScreen: "on",
                fullScreenOffsetContainer: ""
            });
    });
</script>
<!--End Slider Function-->
</body>

</html>