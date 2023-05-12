<?php include 'header.php';
$page_title = "Greenguard"; ?>

<section class="content_info">
    <!-- Info Resalt-->
    <div class="info_resalt no-bottom border-top">
        <div class="container">
            <div class="row">
                <!-- Simple Title-->
                <div class="col-md-12">
                    <div class="simple-title wow fadeInUp">
                        <h2>MODEL UYDU</h2>
                        <p>Paraşütsüz bir şekilde iniş yapabilen tek uydu</p>
                    </div>
                </div>
                <!-- End Simple Title-->
            </div>

            <!-- hot-features-->
            <div class="row hot-features padding-top">
                <div class="col-sm-6 col-md-4 wow fadeInLeft">
                    <!-- Item Service 02-->
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-certificate"></i>
                            <h3>Uzun Mesafe Haberleşme</h3>
                        </div>
                        <div class="caption-service-02">
                            <p>1Km üzeri mesafelere video transferi (canlı yayın) ve telemetri gönderimi</p>
                        </div>
                    </div>
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-certificate"></i>
                            <h3>Veri Deposu</h3>
                        </div>
                        <div class="caption-service-02">
                            <p>İstenilen verilerin SD kartta saklanılabilmesi</p>
                        </div>
                    </div>
                    <!-- Item Service 02-->

                    <!-- Item Service 02 -->
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-certificate"></i>
                            <h3>Uzun Ömür</h3>
                        </div>
                        <div class="caption-service-02">
                            <p>9 Saat ve üzeri çalışma kapasitesi</p>
                        </div>
                    </div>
                    <!-- Item Service 02-->
                </div>

                <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <img style="width:85%; margin-top:-10%;" class="img-responsive" src="img/gallery/uydu.png" alt="">
                </div>

                <div class="col-sm-6 col-md-4 wow fadeInRight">
                    <!-- Item Service 02-->
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-certificate"></i>
                            <h3>Dayanıklı Tasarım</h3>
                        </div>
                        <div class="caption-service-02">
                            <p>113mm çapında 748gram ağırlığında özgün bal peteği tasarımı ile hasara karşı yüksek
                                mukavemet </p>
                        </div>
                    </div>
                    <!-- Item Service 02-->

                    <!-- Item Service 02--> 
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-certificate"></i>
                            <h3>Yerlilik ve Millilik</h3>
                        </div>
                        <div class="caption-service-02">
                            <p>Özgün yazılım ve gömülü elektronik devre kartı tasarımları</p>
                        </div>
                    </div>
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-certificate"></i>
                            <h3>Dayanıklı Tasarım</h3>
                        </div>
                        <div class="caption-service-02">
                            <p>113mm çapında 748gram ağırlığında özgün bal peteği tasarımı ile hasara karşı yüksek
                                mukavemet</p>
                        </div>
                    </div>
                    <!-- Item Service 02-->
                </div>
            </div>
            <!-- End hot-features-->
        </div>
    </div>
    <!-- End Info Resalt-->
</section>


<section class="content_info">
    <!-- Info Resalt-->
    <!-- Info title Blog-->
    <div class="row info_title wow fadeInUp" style="background-color:#ffffff;">
        <div class="vertical_line">
            <div class="circle_bottom"></div>
        </div>
        <div class="info_vertical">
            <h1><span>Özgün Tasarımlarımız</span></h1>
        </div>
    </div>
    <!-- End Info title Blog-->

    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <!-- Carousel Gallery-->
                <ul class="owl-carousel carousel-portfolio" id="carousel-portfolio">
                    <?php
                    include 'database.php';
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM gallery";
                    $result = $conn->query($sql);
                    $group_id = "-1";
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            if ($row["image_group"] == "2" && $row["filter"]=="tasarim") //uydu
                            {
                                ?>
                                <li>
                                    <div class="hover">
                                        <img src="img/gallery/<?php echo $row["image_url"]; ?>" alt="">
                                        <a href="img/gallery/<?php echo $row["image_url"]; ?>" class="ligbox-image" title="Image">
                                            <div class="overlay"></div>
                                        </a>
                                    </div>
                                    <div class="info">
                                        Responsive Design
                                        <i class="fa fa-tablet"></i>
                                        <i class="fa fa-desktop"></i>
                                    </div>
                                </li>
                                <?php
                            }
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>


                </ul>
                <!--End Carousel Gallery-->
            </div>
        </div>
    </div>
    <!-- End Info Resalt-->
</section>
<section class="content_info">
    <!-- Vide Background -->
    <video class="bg_video" preload="auto" autoplay="autoplay" loop="" muted="" poster='img/slide/slides/4.jpg'
        data-setup="{}">
        <source src="img/video/video.mp4" type="video/mp4">
        <source src="img/video/video-sections.webm" type="video/webm">
    </video>
    <!-- Vide Background -->

    <!-- Content Video-->
    <section class="opacy_bg_02 paddings">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Section with video background</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>
                <div class="col-md-12 text-center padding-top-mini">&nbsp;
                </div>
                <div class="col-md-12 text-center padding-top-mini"> &nbsp;
                </div>
                <div class="col-md-12 text-center padding-top-mini"> &nbsp;
                </div>
                <div class="col-md-12 text-center padding-top-mini"> &nbsp;
                </div>
                <div class="col-md-12 text-center padding-top-mini">&nbsp;
                </div>
                <div class="col-md-12 text-center padding-top-mini"> &nbsp;
                </div>
                <div class="col-md-12 text-center padding-top-mini"> &nbsp;
                </div>
                <div class="col-md-12 text-center padding-top-mini"> &nbsp;
                </div>
            </div>
        </div>
    </section>
    <!-- End Content Video-->
</section>
<!-- Info title Blog-->
<div style="background-color:#f5f5f5;" class="row info_title wow fadeInUp padding borders" id="blog">
    <div class="vertical_line">
        <div class="circle_bottom"></div>
    </div>
    <div class="info_vertical">
        <h1>Son<span> Paylaşımlar</span></h1>
    </div>
</div>
<!-- End Info title Blog-->

<!-- End content info - Blog 01-->
<section class="content_info" style="background-color:#f5f5f5;">
    <!-- Info Resalt-->
    <div class="paddings">
        <div class="container wow fadeInUp">
            <div class="row">
                <!-- Item Post 01-->
                <div class="col-sm-6 col-md-4">
                    <div class="blog-content">
                        <div class="entry-header">
                            <div class="blog-image">
                                <img class="img-responsive" src="img/blog/blog1.png" alt="">
                                <div class="more-link">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="post-date">
                                <h3>27<span>August</span></h3>
                            </div>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title"><a href="#">Adipisicing elit, sed do eiusmod tempor</a></h3>
                            <ul class="entry-meta">
                                <li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
                                <li><a href="#"><i class="fa fa-tags"></i> Desing <span>/</span></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <!-- End Item Post 01-->

                <!-- Item Post 01-->
                <div class="col-sm-6 col-md-4">
                    <div class="blog-content">
                        <div class="entry-header">
                            <div class="blog-image">
                                <img class="img-responsive" src="img/blog/blog3.png" alt="">
                                <div class="more-link">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="post-date">
                                <h3>27<span>August</span></h3>
                            </div>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title"><a href="#">Adipisicing elit, sed do eiusmod tempor</a></h3>
                            <ul class="entry-meta">
                                <li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
                                <li><a href="#"><i class="fa fa-tags"></i> Desing <span>/</span></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <!-- End Item Post 01-->

                <!-- Item Post 01-->
                <div class="col-sm-6 col-md-4">
                    <div class="blog-content">
                        <div class="entry-header">
                            <div class="blog-image">
                                <img class="img-responsive" src="img/blog/blog2.png" alt="">
                                <div class="more-link">
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="post-date">
                                <h3>27<span>August</span></h3>
                            </div>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-title"><a href="#">Adipisicing elit, sed do eiusmod tempor</a></h3>
                            <ul class="entry-meta">
                                <li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
                                <li><a href="#"><i class="fa fa-tags"></i> Desing <span>/</span></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <!-- End Item Post 01-->


            </div>
        </div>
    </div>
    <!-- End Info Resalt-->
</section>
<?php include 'footer.php';