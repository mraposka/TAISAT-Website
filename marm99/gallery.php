<?php include 'header2.php'; ?>
<section class="content_info">
    <!-- Info Resalt-->
    <div class="info_resalt borders">
        <div class="container">

            <!-- Nav Filters -->
            <div class="portfolioFilter">
                <a href="#" data-filter="*" class="current">Tümü</a>
                <a href="#yarisma" data-filter=".yarisma">Yarışma</a>
                <a href="#etkinlik" data-filter=".etkinlik">Etkinlik</a>
                <a href="#atolye" data-filter=".atolye">Atölye</a>
                <a href="#tasarim" data-filter=".tasarim">Tasarım</a>
            </div>
            <!-- End Nav Filters -->

            <!-- Items Works filters-->
            <div class="row portfolioContainer">

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
                        if ($row["image_group"] == "2") //ika
                        {
                            ?>
                            <div class="col-sm-6 col-md-6 <?php echo $row["filter"]; ?>">
                                <div class="item-work">
                                    <div class="hover">
                                        <img src="img/gallery/<?php echo $row["image_url"]; ?>" alt="Image">
                                        <a href="img/gallery/<?php echo $row["image_url"]; ?>" class="ligbox-image" title="Image">
                                            <div class="overlay"></div>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="single-work.html">Mycv - One Resume Page</a>
                                        <i class="fa fa-tablet"></i>
                                        <i class="fa fa-desktop"></i>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>

            </div>
            <!-- End Items Works filters-->
        </div>
    </div>
    <!-- End Info Resalt-->
</section>
<!-- End content info - Grey Section-->

<!-- Info title-->
<div class="row info_title">
    <div class="vertical_line">
        <div class="circle_bottom"></div>
    </div>
    <div class="info_vertical">
        <h2>Sponsorlarımız</h2> 
    </div>
    <div class="vertical_line"></div>

    <i class="fa fa-tablet right"></i>
</div>
<!-- End Info title-->

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
<?php include 'footer.php'; ?>