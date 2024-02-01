<?php
include 'functions/userFunction.php';
// include('include/header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Mobiles</title>

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

// SQL query to retrieve the first 6 rows with "model," "affiliate_links," and "image" columns from the "android" table
$sql_android = "SELECT model, affiliate_links, image,price FROM android";

// Execute the Android query
$result_android = $conn->query($sql_android);
?>

    <main>
        <div class="catagory">
            <div class="catagory-left">
                <!--===============================-->
                <div class="catagory-filter-section">
                    <div class="catagory-filter">
                        <h3>Operating System</h3>
                        <a href="mobilefinder.php">
                            <p>Android Mobiles<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="applefinder.php">
                            <p>iOS Mobiles<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                    </div>
                    <!---------->
                    <div class="catagory-filter">
                        <h3>Price Range</h3>
                        <a href="mobilefinder.php">
                            <p>All Prices<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                            <a href="mobilefinder.php">
                                <p>Best Mobile under $100 -$200<i class="fa-solid fa-caret-right"
                                        style="margin-left:10px;"></i></p>
                            </a>
                            <a href="mobilefinder.php">
                                <p>Best Mobile under $100 -$200<i class="fa-solid fa-caret-right"
                                        style="margin-left:10px;"></i></p>
                            </a>
                            <a href="mobilefinder.php">
                                <p>Best Mobile under $100 -$200<i class="fa-solid fa-caret-right"
                                        style="margin-left:10px;"></i></p>
                            </a>
                            <a href="mobilefinder.php">
                                <p>Best Mobile under $100 -$200<i class="fa-solid fa-caret-right"
                                        style="margin-left:10px;"></i></p>
                            </a>
                            <a href="mobilefinder.php">
                                <p>Best Mobile under $100 -$200<i class="fa-solid fa-caret-right"
                                        style="margin-left:10px;"></i></p>
                            </a>
                            <a href="mobilefinder.php">
                                <p>Best Mobile under $100 -$200<i class="fa-solid fa-caret-right"
                                        style="margin-left:10px;"></i></p>
                            </a>

                    </div>
                    <!-- ------   -->
                    <div class="catagory-filter">
                        <h3>Popular Features</h3>
                        <a href="mobilefinder.php">
                            <p>5G Mobiles<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="mobilefinder.php">
                            <p>Best Camera Phones<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="mobilefinder.php">
                            <p>Best Gaming Phones<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="mobilefinder.php">
                            <p>Keypads Mobiles<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="mobilefinder.php">
                            <p>Slimmest Phones<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="mobilefinder.php">
                            <p>Wireless Charging Phones<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i>
                            </p>
                        </a>
                        <a href="mobilefinder.php">
                            <p>Lightest Phones<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                    </div>
                    <!-- ------   -->
                </div>
            </div>
            <!----  laptop-left    ---->
            <!-- --------=====================================- -->
            <div class="catagory-right">
                <div class="hero">
                    <h2>Mobile</h2>
                </div>

                <!-- ==================== features ======================= -->
                <div class="catagory-feature">
                    <h1><span>Mobile By Popular Features</span><a href="mobilefinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme ">
                                <!-- - -->

                                <!-- --- -->
                                <div class="item">
                                    <a href="mobilefinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/search/ram.png" alt="">
                                            <h5>8 GB & Above RAM</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a href="mobilefinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/search/technology.png" alt="">
                                            <h5>Touchscreen Laptops</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a href="mobilefinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/search/wireless.png" alt="">
                                            <h5>Wireless Charging</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a href="mobilefinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/search/signal.png" alt="">
                                            <h5>Volte</h5>
                                        </div>
                                    </a>
                                </div>
                                <!-----   item ---->
                                <div class="item">
                                    <a href="mobilefinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/search/dual.png" alt="">
                                            <h5>Dual Sim</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->
                                <div class="item">
                                    <a href="mobilefinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/search/smartphone.png" alt="">
                                            <h5>5G</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a href="mobilefinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/search/low-battery.png" alt="">
                                            <h5>Battery Backup</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="mobilefinder.php">
                                        <div class="catagory-feature-box">
                                            <img src="images/search/camera-quality.png" alt="">
                                            <h5>Camera Quality</h5>
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->

                </div>

                <!-- ==================== Brands ===========================-->
                <div class="catagory-feature-1">
                    <h1><span>Mobiles By Popular Brands</span><a href="mobilefinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme ">
                                <!---   item    ---->
                                <div class="item">
                                <a href="mobilefinder.php?brand=Xiaomi">
                                        <div class="catagory-feature-box">
                                            <img src="images/mi.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                <a href="mobilefinder.php?brand=realme">
                                        <div class="catagory-feature-box">
                                            <img src="images/realme.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                <a href="mobilefinder.php?brand=OPPO">
                                        <div class="catagory-feature-box">
                                            <img src="images/oppo.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->

                                <div class="item">
                                <a href="mobilefinder.php?brand=samsung">
                                        <div class="catagory-feature-box">
                                            <img src="images/samsung.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a href="mobilefinder.php?brand=Google">
                                        <div class="catagory-feature-box">
                                            <img src="images/google.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a href="">
                                        <div class="catagory-feature-box">
                                            <img src="images/plus.png" alt="">
                                        </div><!-- ---  catagory-feature-box end - -->
                                    </a>
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                <a href="mobilefinder.php?brand=moto">
                                        <div class="catagory-feature-box">
                                            <img src="images/moto.png" alt="">
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
                    <h1><span>Most Popular Mobiles</span><a href="mobilefinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="owl-carousel owl theme laptop-container-3">
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/product(5).jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 230 <span
                                                class="small">(Available)</span></span>
                                        <a href="mobiledetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/product(5).jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 230 <span
                                                class="small">(Available)</span></span>
                                        <a href="mobiledetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/product(5).jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 230 <span
                                                class="small">(Available)</span></span>
                                        <a href="mobiledetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/product(5).jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 230 <span
                                                class="small">(Available)</span></span>
                                        <a href="mobiledetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/product(5).jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 230 <span
                                                class="small">(Available)</span></span>
                                        <a href="mobiledetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/product(5).jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 230 <span
                                                class="small">(Available)</span></span>
                                        <a href="mobiledetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/product(5).jpg" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 230 <span
                                                class="small">(Available)</span></span>
                                        <a href="mobiledetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                            </div>
                            <!--- owl carousel end --->
                        </div>
                        <!---   col-end   --->
                    </div> <!-- ==================== size end ======================= -->
                </div>
                <div class="catagory-feature-4">
                    <h1><span>Upcoming & Recent Mobiles</span><a href="mobilefinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>

                    <div class="row">
                <?php

// Query to fetch upcoming mobiles
$sql = "SELECT * FROM android WHERE model LIKE '%Upcoming%'";

// Execute the query
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    $mobiles = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $mobiles = [];
}

?>
  <?php foreach ($mobiles as $mobile): ?>
                <!-- ========== most popular laptop end   =========== -->


                        <div class="col-lg-4 col-md-6 col-sm-6 mt-2">
                        <div class="upcoming-product text-center ">
                        <a href="<?=$mobile["affiliate_links"]?>" target="_blank"><img src="android_images/<?php echo $mobile['image']; ?>" alt="<?php echo $mobile['model']; ?>" class="img-fluid"></a>
                            <h3><?php echo $mobile['model']; ?></h3>
                            <span><i class="fa-solid fa-dollar-sign"></i> <?php echo $mobile['price']; ?> </span>
                          <a href="mobiledetails.php?model=<?=urlencode($mobile['model'])?>"><button>View Details</button></a>
                        </div>
                    </div>
                    <?php endforeach;?>

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