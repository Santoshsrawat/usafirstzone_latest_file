<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Televisions</title>

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

// SQL query to retrieve the first 6 rows with "model," "affiliate_links," and "image" columns from the "television" table
$sql_television = "SELECT model, affiliate_links, image,price FROM television";

// Execute the television query
$result_television = $conn->query($sql_television);
?>


    <main>
        <div class="laptop">
            <div class="laptop-left">
                <!--===============================-->
                <div class="laptop-filter-section">
                    <div class="laptop-filter">
                        <h3>Popular Screen Sizes</h3>
                        <a href="televisionfinder.php">
                            <p>24 Inch TVs<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>32 Inch TVs<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>40 Inch TVs<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>42 Inch TVs<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                    </div>
                    <!---------->
                    <div class="laptop-filter">
                        <h3>Price</h3>
                        <a href="televisionfinder.php">
                            <p>TV Under $ 100<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>Best TV Under $100<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>Best TV Under $500<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>Best TV Under $600<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>Best TV Under $1000<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>Best TV Under $1100<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                    </div>
                    <!-- ------   -->
                    <div class="laptop-filter">
                        <h3>Popular Searches</h3>
                        <a href="televisionfinder.php">
                            <p>4K UHD TVs<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>Smart TVs<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>Best TVs<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="televisionfinder.php">
                            <p>TV Price List<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                    </div>
                    <!-- ------   -->
                </div>
            </div>
            <!----  laptop-left    ---->
            <!-- --------=====================================- -->
            <div class="laptop-right">
                <div class="hero">
                    <h2>Television</h2>
                </div>

                <!-- ==================== features ======================= -->
                <div class="laptop-feature">
                    <h1><span>Televisions By Popular Features</span><a href="televisionfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container">
                                <!-- - -->
                                <div class="item ">
                                    <a class="laptop-feature-box" href="televisionfinder.php">
                                        <img src="images/television/resolution.png" alt="">
                                        <h5>Full HD TVs</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-- --- -->
                                <div class="item">
                                    <a class="laptop-feature-box" href="televisionfinder.php">
                                        <img src="images/television/smart-tv.png" alt="">
                                        <h5>Smart TVs</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="televisionfinder.php">
                                        <img src="images/television/led-tv.png" alt="">
                                        <h5>3D TVs</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="televisionfinder.php">
                                        <img src="images/television/monitor.png" alt="">
                                        <h5>LED TVs</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="televisionfinder.php">
                                        <img src="images/television/multimedia.png" alt="">
                                        <h5>Curved TVs</h5>
                                    </a>
                                </div>
                                <!-----   item ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="televisionfinder.php">
                                        <img src="images/television/led-tv.png" alt="">
                                        <h5>4K UHD TVs</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="televisionfinder.php">
                                        <img src="images/television/led-tv.png" alt="">
                                        <h5>television TVs</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="televisionfinder.php">
                                        <img src="images/television/led-tv.png" alt="">
                                        <h5>8K UHD TVs</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->
                </div>

                <!-- ==================== Brands ======================= -->
                <div class="laptop-feature-1">
                    <h1><span>Televisions By Popular Brands</span><a href="televisionfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container-1">
                                <!---   item    ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="televisionfinder.php?brand=sony">
                                        <img src="images/television/amazon.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                <a class="laptop-feature-box" href="televisionfinder.php?brand=hisense">
                                        <img src="images/television/hisense.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                <a class="laptop-feature-box" href="televisionfinder.php?brand=insignia">
                                        <img src="images/television/insignia.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->

                                <div class="item">
                                <a class="laptop-feature-box" href="televisionfinder.php?brand=samsung">
                                        <img src="images/television/samsung.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                <a class="laptop-feature-box" href="televisionfinder.php?brand=sony">
                                        <img src="images/television/sony.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                <a class="laptop-feature-box" href="televisionfinder.php?brand=lg">
                                        <img src="images/television/lg.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->

                </div><!-- ==================== Brands end  ======================= -->

                <!-- ==================== size ======================= -->
                <div class="laptop-feature-2">
                    <h1><span>Televisions By Screen Size</span><a href="televisionfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container-1">
                                <a class="item " href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>22 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>32 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>40 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>42 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>43 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>50 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>55 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>60 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>65 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a> <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>70 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                </a> <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>75 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                </a> <a class="item" href="televisionfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>85 INCH TV</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                            </div>
                            <!--- owl carousel end  --->
                        </div>
                        <!---   col-end   --->
                    </div> <!-- ==================== size end ======================= -->
                </div>

                <!----------------------------- latest and popular mobiles -------------------------------->

                <div class="laptop-feature-3">
                    <h1><span>Most Popular Televisions</span><a href="televisionfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl theme laptop-container-3">
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/television/tv.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="televisiondetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/television/tv.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="televisiondetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/television/tv.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="televisiondetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/television/tv.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="televisiondetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/television/tv.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="televisiondetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/television/tv.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="televisiondetails.php"><button>View Details</button></a>
                                    </div>
                                </div>
                                <!----  item end   ---->
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/television/tv.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="televisiondetails.php"><button>View Details</button></a>
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
        autoplayTimeout: 4000,
        // stagePadding: 50,
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
    });
    </script>

</body>

</html>