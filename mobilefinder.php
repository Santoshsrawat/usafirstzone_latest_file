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

    <main>
        <div class="breadcrums">
            <span>Mobiles<i class="fa-solid fa-chevron-right" style="margin:0 5px;"></i>
                <a href="">Phone Finder</a> </span>
        </div>
        <!---   breadcrums end   ----->

        <div class="phone-finder  border-2" style="padding:10px 20px;">
            <h2>Phone Finder</h2>
            <p>At usafirstzone, our Mobile Phone Finder tool enables you to explore the specifications and features of
                every smartphone. Our advanced tool covers smartphones from various manufacturers. The Phone Finder tool
                is designed to be user-friendly, ensuring that even those with limited technical knowledge can
                confidently select the best device and compare mobile phones. 
                <!-- <span id="dots"></span><span id="more">
                </span><button onclick="myFunction()" id="myBtn">Read more</button> -->
            </p>
        </div>
        <!-----   phone-finder end   ------>

        <div class="phone-finder border-2">
            <div class="row phone-finder-cont">
                <div class="col-lg-3 col-md-6 col-sm-12 phone-filter-left">
                    <h2><span>Refine results</span><a href="">Clear All</a></h2>

                    <div class="product-find-filter">
                        <div class="product-filter">
                            <h3>Price Range</h3>
                            <div class="filter-section-1">
                                <form action="">
                                    <div>
                                        <input type="radio">
                                        <label for="">$ 101 and below</label>
                                    </div>
                                    <div>
                                        <input type="radio">
                                        <label for="">$ 101 and below</label>
                                    </div>
                                    <div>
                                        <input type="radio">
                                        <label for="">$ 101 and below</label>
                                    </div>
                                    <div>
                                        <input type="radio">
                                        <label for="">$ 101 and below</label>
                                    </div>
                                    <div>
                                        <input type="radio">
                                        <label for="">$ 101 and below</label>
                                    </div>
                                    <div>
                                        <input type="radio">
                                        <label for="">$ 101 and below</label>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- =-------  product-filter -- -->
                        <div class="product-filter">
                            <button class="accordion">Feature Search</button>
                            <div class="filter-section">
                                <form action="">
                                    <div>
                                        <input type="checkbox">
                                        <label for="">8 GB & above RAM</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">128 GB & above memory</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">5000 mAh & above</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">64 MP & above</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">5G</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Dual VolTE</label>
                                    </div>
                                </form>
                            </div>
                            <!-- ---- -->
                            <!-- ---- -->
                            <button class="accordion">Brands</button>
                            <div class="filter-section">
                                <form action="">
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Apple</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Mi</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Realme</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Oppo</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Samsung</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Google</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">OnePlus</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Motorola</label>
                                    </div>

                                </form>
                            </div>
                            <!-- ---- -->
                            <button class="accordion">Display</button>
                            <div class="filter-section">
                                <form action="">
                                    <div>
                                        <input type="checkbox">
                                        <label for="">8 GB & above RAM (6)</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">8 GB & above RAM (6)</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">8 GB & above RAM (6)</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">8 GB & above RAM (6)</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">8 GB & above RAM (6)</label>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
// Database connection settings
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "usafirstzone"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['brand'])) {
    $selectedBrand = $_GET['brand'];

    if ($selectedBrand == "Apple") {

        $sql = "SELECT model, images FROM iphone";
    } else {

        $sql = "SELECT model, image FROM android WHERE brand = '$selectedBrand'";
    }

    // Execute the query
    $result = $conn->query($sql);

    ?>

                <div class="col-lg-9 col-md-6 col-sm-12 phone-details-section">
                    <?php
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mobileModel = $row["model"];
            if ($selectedBrand == "Apple") {
                $imageList = explode(',', $row["images"]);

                $mobileImage = './uploads/' . trim($imageList[0]);
            } else {
                $mobileImage = 'android_images/' . $row["image"];
            }
            ?>
                    <div class="phone-details-container">
                        <!-- phone image -->
                        <div class="phone-image">
                            <img src="<?php echo $mobileImage; ?>" alt="<?php echo $mobileModel; ?>"
                                style='width:8vw;height:100px'>
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- name-box -->
                        <div class="name-box-container">
                            <!-- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="mobiledetails.php?model=<?php echo urlencode($mobileModel); ?>"><?php echo $mobileModel; ?>
                                        </h2></a>
                                    <p><span><i class="fa-brands fa-android"></i></span> Android iV</p>
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!--- name box end ----->

                            <div class="description-box">
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- --- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- ---- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!--- description-box end ----->

                            <div class="features-sect">
                                <div class="storage-sect">
                                    <a href=""><i class="fa-solid fa-sd-card"></i></a>
                                    <a href=""><i class="fa-solid fa-sim-card"></i></a>
                                    <a href=""><i class="fa-solid fa-signal"></i></a>
                                    <a href=""><i class="fa-solid fa-phone"></i></a>
                                    <a href=""><i class="fa-solid fa-fingerprint"></i></a>
                                    <a href=""><i class="fa-brands fa-usb"></i></a>
                                </div>
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <?php
}
    } else {
        echo '<p>No mobile phones available for ' . $selectedBrand . '.</p>';
    }
    ?>
                </div>

                <?php
} else {

    $sqlAndroid = "SELECT model, image FROM android ORDER BY internal_memory";
    $sqliPhone = "SELECT model, images FROM iphone ORDER BY internal_memory DESC";

    $resultAndroid = $conn->query($sqlAndroid);
    $resultiPhone = $conn->query($sqliPhone);

    ?>

                <div class="col-lg-9 col-md-6 col-sm-12 phone-details-section">
                    <?php
if ($resultAndroid->num_rows > 0) {
        while ($row = $resultAndroid->fetch_assoc()) {
            $mobileModel = $row["model"];
            $mobileImage = 'android_images/' . $row["image"];
            ?>
                    <div class="phone-details-container">
                        <!-- phone image -->
                        <div class="phone-image">
                            <img src="<?php echo $mobileImage; ?>" alt="<?php echo $mobileModel; ?>"
                                style='width:8vw;height:100px'>
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- name-box -->
                        <div class="name-box-container">
                            <!-- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="mobiledetails.php?model=<?=urlencode($mobileModel)?>">
                                        <h2><?php echo $mobileModel; ?></h2>
                                    </a>
                                    <p><span><i class="fa-brands fa-android"></i></span> Android iV</p>
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!--- name box end ----->

                            <div class="description-box">
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- --- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- ---- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!--- description-box end ----->

                            <div class="features-sect">
                                <div class="storage-sect">
                                    <a href=""><i class="fa-solid fa-sd-card"></i></a>
                                    <a href=""><i class="fa-solid fa-sim-card"></i></a>
                                    <a href=""><i class="fa-solid fa-signal"></i></a>
                                    <a href=""><i class="fa-solid fa-phone"></i></a>
                                    <a href=""><i class="fa-solid fa-fingerprint"></i></a>
                                    <a href=""><i class="fa-brands fa-usb"></i></a>
                                </div>
                            </div>
                        </div>
                        <!----name-box-container end  -->

                    </div>
                    <?php

        }
    } else {
        echo '<p>No Android mobile phones available based on internal memory.</p>';
    }

    if ($resultiPhone->num_rows > 0) {
        while ($row = $resultiPhone->fetch_assoc()) {
            $mobileModel = $row["model"];
            $imageList = explode(',', $row["images"]);

            $mobileImage = './uploads/' . trim($imageList[0]); // Assuming images are in the 'iphone_images' folder
            ?>
                    <div class="phone-details-container">
                        <!-- phone image -->
                        <div class="phone-image">
                            <img src="<?php echo $mobileImage; ?>" alt="<?php echo $mobileModel; ?>"
                                style='width:8vw;height:100px'>
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- name-box -->
                        <div class="name-box-container">
                            <!-- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="mobiledetails.php">
                                        <h2><?php echo $mobileModel; ?></h2>
                                    </a>
                                    <p><span><i class="fa-brands fa-apple"></i></span> Apple iPhone</p>
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 1,000</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!--- name box end ----->

                            <div class="description-box">
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- --- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                                <!-- ---- -->
                                <div class="descript-content">
                                    <h3>Performance<i class="fa-solid fa-sort-down"></i></h3>
                                    <div class="break-line">
                                        <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                            class="fa-solid fa-minus"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                            <!--- description-box end ----->

                            <div class="features-sect">
                                <div class="storage-sect">
                                    <a href=""><i class="fa-solid fa-sd-card"></i></a>
                                    <a href=""><i class="fa-solid fa-sim-card"></i></a>
                                    <a href=""><i class="fa-solid fa-signal"></i></a>
                                    <a href=""><i class="fa-solid fa-phone"></i></a>
                                    <a href=""><i class="fa-solid fa-fingerprint"></i></a>
                                    <a href=""><i class="fa-brands fa-usb"></i></a>
                                </div>
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <?php
}
    } else {
        echo '<p>No iPhone mobile phones available based on internal memory.</p>';
    }
    ?>
                </div>

                <?php
}

// Close the database connection
$conn->close();
?>

            </div>
            <!---  phone-details-container end ----->
        </div>
        </div>
        </div>
        <!-- -----------    recently viewed   --- -->
        <div class="front-product-2 front-product" style="border:2px solid #ccc; margin-bottom:20px;">
            <h2><span>RECENTLY VIEWED & RECOMMENDED PRODUCTS</span><a href="">View All</a></h2>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row ">
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="mobiledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="mobiledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="mobiledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- -------------  -->
                    <div class="carousel-item">
                        <div class="row ">
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="mobiledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="mobiledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="mobiledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
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

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
    </script>






</body>

</html>