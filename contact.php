<?php include 'header2.php' ?>

<!-- crumbs-->
<div class="crumbs border_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li>Contact Us 02</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End crumbs-->

<!-- End content info - White Section-->
<section class="content_info">
    <!-- Map area-->
    <section class="map_area-02">
        <iframe
            src="https://maps.google.es/maps?f=q&source=s_q&hl=es&geocode=&q=new+york&aq=&sll=40.396764,-3.713379&sspn=9.61761,19.753418&ie=UTF8&hq=&hnear=Nueva+York,+Estados+Unidos&ll=40.614353,-74.005973&spn=0.598524,1.234589&t=m&z=10&output=embed">
        </iframe>
    </section>
    <!-- End Map area-->
</section>
<!-- End content info - White Section-->

<!-- End content info - Grey Section-->
<section class="content_info">
    <!-- Info Resalt-->
    <div class="paddings border-top">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-4">
                     
                    <aside>
                        <h4>TAISAT</h4>
                        <address> 
                            <i class="fa fa-map-marker"></i><strong>Adres: </strong> 3D Yazıcı Ve Bakım Merkezi,
                            Sanayi Mahallesi, Ömer Türkçakal Bulvarı, Vinsan Sosyal Tesisleri, İzmit / Kocaeli -
                            Turkey<br>  
                        </address>

                        <address> 
                            <i class="fa fa-envelope"></i><strong>E-Mail:</strong><a href="mailto:#">
                                info@taisat.com</a><br>
                                <i class="fa fa-envelope"></i><strong>Sponsor:</strong><a href="mailto:#">
                                sponsorship@taisat.com</a><br>
                        </address>
                    </aside>
                </div>

                <div class="col-md-8">
                    <h3>İletişim Formu</h3>
                    <form id="form" action="php/send_mail.php">
                        <input type="text" placeholder="İsim" name="name" required="">
                        <input type="email" placeholder="E-Mail" name="email" required="">
                        <input type="number" placeholder="Konu" name="konu" required="">
                        <textarea placeholder="Mesaj" name="message" required=""></textarea>
                        <input style="background-color:#6797e6;" type="submit" name="Submit" value="Gönder" class="button">
                    </form>
                    <div id="result"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Info Resalt-->
</section>
<!-- End content info - Grey Section-->

<!-- End content info - Grey Section-->
<section class="content_info">
    <!-- Info Resalt-->
    <div class="info_resalt border_top">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <!-- Sponsors Zone-->
                    <ul class="owl-carousel carousel-sponsors tooltip-hover" id="carousel-sponsors">
                        <li data-toggle="tooltip" title="" data-original-title="Name Sponsor">
                            <a href="#" class="tooltip_hover" title="Name Sponsor"><img style="object-fit: contain; max-height: 100px; vertical-align: middle; margin:auto;" src="img/sponsors/kbb.png"
                                    alt="Image"></a>
                        </li>
                        <li data-toggle="tooltip" title="" data-original-title="Name Sponsor">
                            <a href="#" class="tooltip_hover" title="Name Sponsor"><img style="object-fit: contain; max-height: 100px; vertical-align: middle; margin:auto;" src="img/sponsors/kou.png"
                                    alt="Image"></a>
                        </li>
                        <li data-toggle="tooltip" title="" data-original-title="Name Sponsor">
                            <a href="#" class="tooltip_hover" title="Name Sponsor"><img style="object-fit: contain; max-height: 100px; vertical-align: middle; margin:auto;" src="img/sponsors/dk.png"
                                    alt="Image"></a>
                        </li>
                        <li data-toggle="tooltip" title="" data-original-title="Name Sponsor">
                            <a href="#" class="tooltip_hover" title="Name Sponsor"><img style="object-fit: contain; max-height: 100px; vertical-align: middle; margin:auto;" src="img/sponsors/guvendik.png"
                                    alt="Image"></a>
                        </li>
                        <li data-toggle="tooltip" title="" data-original-title="Name Sponsor">
                            <a href="#" class="tooltip_hover" title="Name Sponsor"><img style="object-fit: contain; max-height: 100px; vertical-align: middle; margin:auto;" src="img/sponsors/ozdisan.png"
                                    alt="Image"></a>
                        </li> 
                    </ul>
                    <!-- End Sponsors Zone-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Info Resalt-->
</section>
<!-- End content info - Grey Section-->
 <?php include 'footer.php';?>