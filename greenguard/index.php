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
                        <h2>İNSANSIZ KARA ARACI</h2>
                        <p>lorem ipsum.</p>
                    </div>
                </div>
                <!-- End Simple Title-->
            </div>

            <!-- hot-features-->
            <div class="row hot-features">
                <div class="col-md-4 wow fadeInLeft">
                    <!-- Item Service 02-->
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-cogs"></i>
                            <h3>
                                Paletli Yürüyüş Sistemi
                            </h3>
                        </div>
                        <div class="caption-service-02">
                            <p>Zorlu konuşullarda bile hareket kabiliyeti</p>
                        </div>
                    </div>
                    <!-- Item Service 02-->
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-life-ring "></i>
                            <h3>
                                Dayanıklı Tasarım
                            </h3>
                        </div>
                        <div class="caption-service-02">
                            <p>Çift iç ve dış olarak 4mm sac ile güçlendirilmiş ABS gövde ve şase</p>
                        </div>
                    </div>
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa-solid fa-dumbbell"></i>
                            <h3>
                                Motor Gücü
                            </h3>
                        </div>
                        <div class="caption-service-02">
                            <p>Redüktörlü DC motor ile tork ve hız dengesi</p>
                        </div>
                    </div>
                    <!-- Item Service 02-->
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa-solid fa-earth-americas"></i> 
                            <h3>
                                Yerli ve Millilik
                            </h3>
                        </div>
                        <div class="caption-service-02">
                            <p>Mühendislerimiz tarafından tasarlanmış 8 adet özgün elektronik donanımlardan tüm tasarıma
                            </p>
                        </div>
                    </div>
                    <!-- Item Service 02-->
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <img class="img-responsive" src="img/gallery/ika.png" alt="">
                </div>

                <div class="col-md-4 wow fadeInRight">
                    <!-- Item Service 02-->
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa-solid fa-car-battery"></i>
                            <h3>
                                Uzun Ömür
                            </h3>
                        </div>
                        <div class="caption-service-02">
                            <p>Sahip olduğu 4s 10p bağlanmış Li-on batarya teknolojisi ile hem daha yüksek yaşam döngüsü
                                hemde daha yüksek pil kapsitesi</p>
                        </div>
                    </div>
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa-solid fa-eye"></i>
                            <h3>
                                Görüntü İşleme
                            </h3>
                        </div>
                        <div class="caption-service-02">
                            <p>Anlık olarak HD fotoğraf ve video kaydedebilme ve çift kamera ile yörünge takibi</p>
                        </div>
                    </div>
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa fa-arrows"></i>
                            <h3>
                                Eğim
                            </h3>
                        </div>
                        <div class="caption-service-02">
                            <p>%40 eğime kadar aktif bir şekilde çalışabilme</p>
                        </div>
                    </div>
                    <!-- Item Service 02-->

                    <!-- Item Service 02-->
                    <div class="service-02">
                        <div class="head-service-02">
                            <i style="background-color:black;" class="fa-solid fa-gauge-high"></i>
                            <h3>
                                Hız
                            </h3>
                        </div>
                        <div class="caption-service-02">
                            <p>Aracın hızı eğim ve engebeye bağlı olarak 2 m/s kadar çıkabilmektedir</p>
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
            <h1><span>Galeri</span></h1>
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

                    $sql = "SELECT * FROM gallery WHERE image_group='1' ORDER BY image_id DESC LIMIT 10;";
                    $result = $conn->query($sql);
                    $group_id = "-1";
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            if ($row["image_group"] == "1") //ika
                            {
                                ?>
                                <li>
                                    <div class="hover">
                                        <img src="img/gallery/<?php echo $row["image_url"]; ?>" alt="">
                                        <a href="img/gallery/<?php echo $row["image_url"]; ?>" class="ligbox-image">
                                            <div class="overlay"></div>
                                        </a>
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