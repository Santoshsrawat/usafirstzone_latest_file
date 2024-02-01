<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Cameras</title>

    <!-- ---css link -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- -- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- ---- owl carousel --- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
include("include/header.php");
?>

    <main>
        <div class="catagory">
            <div class="catagory-left">
                <!--===============================-->
                <div class="catagory-filter-section">
                    <div class="catagory-filter">
                        <h3>Camera Type</h3>
                        <p>DSLR Cameras<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i></p>
                        <p>Point & Shoot Cameras<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i></p>
                        <p>Camcorders<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i></p>
                        <p>Mirrorless Cameras<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i></p>
                    </div>
                    <!---------->
                    <div class="catagory-filter">
                        <h3>Price Range</h3>
                        <a href="">
                            <p>Camera under $100<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i></p>
                        </a>
                        <a href="">
                            <p>Camera under $200<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i>
                            </p>
                        </a>
                        <a href="">
                            <p>Camera under $300<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i>
                            </p>
                        </a>
                        <a href="">
                            <p>Camera under $300<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i>
                            </p>
                        </a>
                        <a href="">
                            <p>Camera under $400<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i>
                            </p>
                        </a>
                        <a href="">
                            <p>Camera under $500<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i>
                            </p>
                        </a>
                        <a href="">
                            <p>Camera under $600<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i>
                            </p>
                        </a>
                        <a href="">
                            <p>Camera under $700<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i>
                            </p>
                        </a>
                    </div>
                    <!-- ------   -->
                    <div class="catagory-filter">
                        <h3>Explore More</h3>
                        <a href="">
                            <p>Top 10 Cameras<i class="fa-solid fa-caret-right" style="margin-left: 10px"></i></p>
                        </a>
                    </div>
                    <!-- ------   -->
                </div>
            </div>
            <!----  laptop-left    ---->
            <!-- --------=====================================- -->
            <div class="catagory-right">
                <div class="camera-hero">
                    <h2>Camera</h2>
                </div>

                <div class="catagory-feature">
                    <h1><span>Camera By Popular Features</span><a href="camerafinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme ">
                                <!-- --- -->
                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/camera.png" alt="">
                                            <h5>DSLRs around $100</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/resolution.png" alt="">
                                            <h5>Full HD Cameras</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/wifi.png" alt="">
                                            <h5>Wifi</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->
                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/camera.png" alt="">
                                            <h5>Bridge Camera</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/action.png" alt="">
                                            <h5>Sports & Action Cameras</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/hdr.png" alt="">
                                            <h5>HDR Shooting</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->

                </div>

                <!-- ==================== Brands ===========================-->
                <div class="catagory-feature-1">
                    <h1><span>Camera By Popular Brands</span><a href="camerafinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme ">
                                <!---   item    ---->
                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/nikon.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/panasonic.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/fujifill.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->

                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/canon.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/olympus.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a href="camerafinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/camera/sony.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->
                </div><!-- ==================== Brands end  ======================= -->


                <!-- ==================== Feature ===========================-->
                <div class="catagory-feature-2">
                    <h1>
                        <span>Cameras By Resolution</span><a href="camerafinder.php">View all
                            <i class="fa-solid fa-caret-right" style="margin-left: 5px"></i></a>
                    </h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container-1">
                                <a class="item " href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>BELOW 5MP</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>5 MP & ABOVE</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>10 MP & ABOVE</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>16 MP & ABOVE</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>20 MP & ABOVE</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                            </div>
                            <!--- owl carousel end  --->
                        </div>
                        <!---   col-end   --->
                    </div> <!-- ==================== size end ======================= -->
                </div>

                <!-- ==================== resolution ===========================-->
                <div class="catagory-feature-2">
                    <h1>
                        <span>Cameras By Optical Zoom</span><a href="camerafinder.php">View all
                            <i class="fa-solid fa-caret-right" style="margin-left: 5px"></i></a>
                    </h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container-1">
                                <a class="item " href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>BELOW 5X</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>ABOVE 5X</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>10X & ABOVE</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>15X & ABOVE</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>20X & ABOVE</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="camerafinder.php">
                                    <div class="catagory-feature-box">
                                        <h5>30X & ABOVE</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                            </div>
                            <!--- owl carousel end  --->
                        </div>
                        <!---   col-end   --->
                    </div> <!-- ==================== size end ======================= -->
                </div>


                <!----------------------- latest and popular mobiles --------------------------->
                <div class="catagory-feature-3">
                    <h1><span>Most Popular Cameras</span><a href="camerafinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl theme laptop-container-3">
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/camera/camera1.jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="cameradetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/camera/camera1.jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="cameradetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/camera/camera1.jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="cameradetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/camera/camera1.jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="cameradetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/camera/camera1.jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="cameradetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/camera/camera1.jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="cameradetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/camera/camera1.jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="cameradetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                            </div>
                            <!--- owl carousel end --->
                        </div>
                        <!---   col-end   --->
                    </div> <!-- ==================== size end ======================= -->
                </div>

            </div>
            <!----  laptop right    ------->
        </div>
    </main>

    <!-- ---  footer  --- -->
    <?php
     include("include/footer.php");
    ?>

    <!--  js link -->
    <script src="js/main.js"></script>

    <!-- --- bootstrap cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- -- font-awesome cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>

    <!-- ---- owlcarousel --- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 8000,
        // stagePadding: 50,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            350: {
                items: 2,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 5,
            },
        },
    });
    </script>
</body>

</html>