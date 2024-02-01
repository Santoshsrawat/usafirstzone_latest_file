<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Headphones</title>

    <!-- ---css link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- -- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

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
include "include/header.php";
?>
<?php
// Database connection settings
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "usafirstzone"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve the first 6 rows with "model," "affiliate_links," and "image" columns from the "earbuds" table
$sql_earbuds = "SELECT model, affiliate_links, image,price FROM headphones";

// Execute the earbuds query
$result_earbuds = $conn->query($sql_earbuds);
?>
    <main>
        <div class="catagory">
            <div class="catagory-left">
                <!--===============================-->
                <div class="catagory-filter-section">
                    <div class="catagory-filter">
                        <h3>Price Range</h3>
                           <a class="laptop-feature-box" href="headphonefinder.php?brand=fossil">
                            <p>Headphones under $101<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i>
                            </p>
                        </a>
                           <a class="laptop-feature-box" href="headphonefinder.php?brand=fossil">
                            <p>Best Headphones Under $200<i class="fa-solid fa-caret-right"
                                    style="margin-left:10px;"></i>
                            </p>
                        </a>
                           <a class="laptop-feature-box" href="headphonefinder.php?brand=fossil">
                            <p>Best Headphones Under $200<i class="fa-solid fa-caret-right"
                                    style="margin-left:10px;"></i>
                            </p>
                        </a>
                           <a class="laptop-feature-box" href="headphonefinder.php?brand=fossil">
                            <p>Best Headphones Under $200<i class="fa-solid fa-caret-right"
                                    style="margin-left:10px;"></i>
                            </p>
                        </a>
                           <a class="laptop-feature-box" href="headphonefinder.php?brand=fossil">
                            <p>Best Headphones Under $200<i class="fa-solid fa-caret-right"
                                    style="margin-left:10px;"></i>
                            </p>
                        </a>
                           <a class="laptop-feature-box" href="headphonefinder.php?brand=fossil">
                            <p>Best Headphones Under $200<i class="fa-solid fa-caret-right"
                                    style="margin-left:10px;"></i>
                            </p>
                        </a>
                    </div>
                    <!-- ---- -->
                </div>
            </div>
            <!----  laptop-left    ---->
            <!-- --------=====================================- -->
            <div class="catagory-right">
                <div class="hero">
                    <h2>Headphones</h2>
                </div>


                <!-- ==================== Brands ===========================-->
                <div class="catagory-feature-1">
                    <h1><span>Headphones By Popular Brands</span><a href="">View all <i class="fa-solid fa-caret-right"
                                style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme ">
                                <!---   item    ---->
                                <div class="item">
                                       <a class="laptop-feature-box" href="headphonefinder.php?brand=bose">
                                        <div class="catagory-feature-box">
                                            <img src="images/wearables/bose.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                       <a class="laptop-feature-box" href="headphonefinder.php?brand=sony">
                                        <div class="catagory-feature-box">
                                            <img src="images/wearables/sony.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                       <a class="laptop-feature-box" href="headphonefinder.php?brand=jbl">
                                        <div class="catagory-feature-box">
                                            <img src="images/wearables/jbl.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->

                                <div class="item">
                                       <a class="laptop-feature-box" href="headphonefinder.php?brand=skullcandy">
                                        <div class="catagory-feature-box">
                                            <img src="images/wearables/skullcandy.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                       <a class="laptop-feature-box" href="headphonefinder.php?brand=beats">
                                        <div class="catagory-feature-box">
                                            <img src="images/wearables/beats.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a href="">
                                        <div class="catagory-feature-box">
                                            <img src="images/wearables/philips.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->
                </div><!-- ==================== Brands end  ======================= -->

                <!----------------------- latest and popular mobiles --------------------------->
                <div class="catagory-feature-3">
                    <h1><span>Most Popular Headphones</span><a href="headphonefinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl theme laptop-container-3">
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                            </div>
                            <!--- owl carousel end --->
                        </div>
                        <!---   col-end   --->
                    </div> <!-- ==================== size end ======================= -->
                </div>

                <!-- ========== most popular laptop end   =========== -->
                <div class="catagory-feature-4">
                    <h1><span>Upcoming & Recent Headphones</span><a href="">View all <i class="fa-solid fa-caret-right"
                                style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container-4">
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/wearables/headphone-product.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 10,000 <span
                                                class="small">(Available)</span></span>
                                        <a href="headphonedetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                            </div>
                            <!--- owl carousel end --->
                        </div>
                        <!---   col-end   --->
                    </div> <!-- ==================== size end ======================= -->
                </div>

                <!-- ==================== features ======================= -->
                <div class="catagory-feature connected-product">
                    <h1><span>Wearables</span><a href="">View all <i class="fa-solid fa-caret-right"
                                style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12 row">
                            <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12">
                                <a href="earbuds.php">
                                    <div class="catagory-feature-box">
                                        <img src="images/wearables/buds.png" alt="">
                                        <h5>Earbuds</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12">
                                <a href="headphone.php">
                                    <div class="catagory-feature-box">
                                        <img src="images/wearables/watch.png" alt="">
                                        <h5>Smart Watches</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12">
                                <a href="headphone.php">
                                    <div class="catagory-feature-box">
                                        <img src="images/wearables/headphone.png" alt="">
                                        <h5>Headphones</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-3 col-xs-12">
                                <a href="earphone.php">
                                    <div class="catagory-feature-box">
                                        <img src="images/wearables/airpods.png" alt="">
                                        <h5>Earpods</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->

                </div>

            </div>
            <!----  laptop right    ------->
        </div>
    </main>


    <!-- ---  footer  --- -->
    <?php
include "include/footer.php";
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
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 5,
        autoplay: true,
        autoplayTimeout: 8000,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            350: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 5
            }
        }
    })
    </script>
</body>

</html>