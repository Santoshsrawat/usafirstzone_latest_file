<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>UsaFirstZone</title>

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

    <div class="quickly-links">
        <ul>
            <li>Go Quickly to<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></li>
            <li><a href="mobile.php">Mobiles</a></li>
            <li><a href="laptop.php">Laptops</a></li>
            <li><a href="camera.php">Cameras</a></li>
            <li><a href="television.php">Television</a></li>
            <li style="border-right: 0;"><a href="wearables.php">Wearables</a></li>
        </ul>
    </div>

    <main>
        <!-- ------ carousel ------------ -->
        <div class="index-filter">
            <div class="row">
                <!-- --- left side  -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="left-mob">
                        <h2>Let's Get You a Mobile!</h2>
                        <div class="row">
                            <div class="col-lg-7 col-md-6  col-sm-12">
                                <h4>By Price</h4>
                                <!-- ---- -->
                                <div class="slidecontainer">
                                    <input type="range" min="1000" max="65000" value="50" class="slider" id="myRange">
                                    <div class="filter-form d-flex">
                                        <p id="filter-demo"><span>$</span><span id="demo">1000</span></p>
                                    </div>
                                </div>
                                <!-- --- -->

                                <!-- -- -->
                                <div class="button-find">
                                    <button class="btn-find">Find Mobiles</button>
                                </div>
                                <!-- <div class="price-find">
                                    <h5>Price Around</h5>
                                    <div>
                                        <span><a href="">$ 5,000</a></span>
                                        <span><a href="">$ 8,000</a></span>
                                        <span><a href="">$ 10,000</a></span>
                                        <span><a href="">$ 15,000</a></span>
                                        <span><a href="">$ 20,000</a></span>
                                        <span><a href="">$ 25,000</a></span>
                                    </div>
                                </div> -->
                            </div>
                            <!-- --- by brand  -->
                            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 by_brand">
                                <h4>By Brand</h4>
                                <p><a href="mobilefinder.php?brand=Vivo">Vivo</a></p>
                                <p><a href="mobilefinder.php?brand=Samsung">Samsung</a></p>
                                <p><a href="mobilefinder.php?brand=Apple">Apple</a></p>
                                <p><a href="mobilefinder.php?brand=Oneplus">Oneplus</a></p>
                                <p><a href="mobilefinder.php?brand=Google">Google</a></p>
                            </div>
                            <!-- --- by features  -->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 by_features">
                                <h4>By Features</h4>
                                <p><a href="">5G Connectivity</a></p>
                                <p><a href="">8GB RAM</a></p>
                                <p><a href="">5000 mAh+battery</a></p>
                                <p><a href="">64 MP+Camera</a></p>
                                <p><a href="">Android</a></p>

                            </div>
                        </div>
                        <!---- row end  --->
                    </div>
                    <!----  left-mob end----->
                </div>
                <!-- ----  right side  -->
                <div class="col-lg-4 col-md-4 col-sm-12 right-mob-no">
                    <div class="right-mob">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <h3>5G Under 100</h3>

                                <?php
// Fetch seven random Android devices from your database
$random_androids = [];
while ($row = $result_android->fetch_assoc()) {
    $random_androids[] = $row;
}
shuffle($random_androids); // Shuffle the array to get random devices

$active = 'active'; // Set the first item as active
// Display three different Android devices in the carousel
for ($i = 0; $i < min(count($random_androids), 9); $i++) {
    $android = $random_androids[$i];
    $android2 = $random_androids[$i + 1];
    $android3 = $random_androids[$i + 4];
    ?>
                                <div class="carousel-item <?=$active?>">
                                    <div class="mob-iles">
                                        <a class="mob-iles-img" href="<?=$android["affiliate_links"]?>"><img
                                                src="android_images/<?=$android["image"]?>" alt="" target="_blank"></a>
                                        <span class="name">
                                            <h4><a href="mobiledetails.php"><?=$android["model"]?></a></h4>
                                            <a target="_blank" href="<?=$android["affiliate_links"]?>">&nbsp;
                                                <?=$android["price"]?></a>
                                        </span>
                                    </div>
                                    <div class="mob-iles">
                                        <a target="_blank" class="mob-iles-img"
                                            href="<?=$android2["affiliate_links"]?>"><img
                                                src="android_images/<?=$android2["image"]?>" alt=""></a>
                                        <span class="name">
                                            <h4><a href="mobiledetails.php"><?=$android2["model"]?></a></h4>
                                            <a target="_blank" href="<?=$android2["affiliate_links"]?>">&nbsp;
                                                <?=$android2["price"]?></a>
                                        </span>
                                    </div>
                                    <div class="mob-iles" style="border:none;">
                                        <a target="_blank" class="mob-iles-img"
                                            href="<?=$android3["affiliate_links"]?>"><img
                                                src="android_images/<?=$android3["image"]?>" alt=""></a>
                                        <span class="name">
                                            <h4><a href="mobiledetails.php"><?=$android3["model"]?></a></h4>
                                            <a target="_blank" href="<?=$android3["affiliate_links"]?>">&nbsp;
                                                <?=$android3["price"]?></a>
                                        </span>
                                    </div>
                                </div>

                                <?php
$active = ''; // Remove active class for subsequent items
}
?>
                            </div>
                            <button style="margin-left:-40px;" class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span style="background-color:rgba(0,0,0,0.6); width:20px;"
                                    class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button style="margin-right:-40px;" class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span style="background-color:rgba(0,0,0,0.6); width:20px;"
                                    class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        <!-- New Mobiles Section -->

        <!-- ------- right-mob end  -------- -->
        </div>
        </div><!-- ------- row end  -------- -->
        </div><!-- ------- index-filter end  -------- -->
        <!--============   price range filter   ==================-->
        <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
        </script>
        <!-- ------- carousel end  -------- -->

        <!-- --- catagories section  ----------->
        <div class="main-section box-shadow">
            <h2>Top Catagories</h2>
            <div class="catagories ">
                <div>
                    <a href="mobile.php"><img src="images/catagories/mobile.png" alt="">
                        <h4>Mobiles</h4>
                    </a>
                </div>
                <div>
                    <a href="camera.php">
                        <img src="images/catagories/camera.png" alt="">
                        <h4>Camera</h4>
                    </a>
                </div>
                <div>
                    <a href="laptop.php">
                        <img src="images/catagories/laptop.png" alt="">
                        <h4>Laptops</h4>
                    </a>
                </div>
                <div>
                    <a href="television.php">
                        <img src="images/catagories/television.png" alt="">
                        <h4>Television</h4>
                    </a>
                </div>
                <div>
                    <a href="wearables.php">
                        <img src="images/catagories/gadget.png" alt="">
                        <h4>Wearables</h4>
                    </a>
                </div>
            </div>
        </div>
        <!-- -- main -section class  end   -->

        <!-- ---- recent viewed ---- -->
        <div class="main-section box-shadow">
            <!-- ---- latest and popular mobiles -->
            <div class="upcoming-mobiles ">
                <h2><span>Upcoming Mobiles</span><a href="mobiledetails.php">Upcoming</a></h2>
                <div class="row p-0">
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
                    <!-- -- -->
                    <div class="col-lg-4 col-md-6 col-sm-6 mt-2">
                        <div class="upcoming-product text-center ">
                            <a href="<?=$mobile["affiliate_links"]?>" target="_blank"><img
                                    src="android_images/<?php echo $mobile['image']; ?>"
                                    alt="<?php echo $mobile['model']; ?>" class="img-fluid"></a>
                            <h3><?php echo $mobile['model']; ?></h3>
                            <span><i class="fa-solid fa-dollar-sign"></i> <?php echo $mobile['price']; ?> </span>
                            <a href="mobiledetails.php?model=<?=urlencode($mobile['model'])?>"><button>View
                                    Details</button></a>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>
            </div> <!-- ---- latest and popular mobiles  end -->

            <!-- --- recent viewed & Recommended  -->
            <h2 class="mt-5"><span>Recently Viewed & Recommended</span> <a href="">View All</a></h2>
            <div class="row p-0">
                <div class="col-lg-6 col-md-6 col-sm-12 recent-viewed  border">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center">
                                <img src="images/recommend(3).webp">
                                <h4>Apple Watch SE</h4>
                                <span class="orange"><i class="fa-solid fa-dollar-sign"></i><span
                                        class="price">1922</span></span>
                                <a href="smartwatch.php"><button class="view-details">View Details</button></a>
                            </div>
                            <div class="carousel-item text-center">
                                <img src="images/recommend(4).webp">
                                <h4>Latest Products</h4>
                                <span class="orange"><i class="fa-solid fa-dollar-sign"></i> <span
                                        class="price">11,000</span></span>
                                <a href="laptopdetails.php"><button class="view-details">View Details</button></a>
                            </div>
                            <div class="carousel-item text-center">
                                <img src="images/recommend(5).webp">
                                <h4>Laptop</h4>
                                <span class="orange"><i class="fa-solid fa-dollar-sign"></i> <span
                                        class="price">11,000</span></span>
                                <a href="laptop.php"><button class="view-details">View Details</button></a>
                            </div>
                        </div>
                        <button style="display:none;" class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button style="display:none;" class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="recommended">
                        <a href="" class="recmd-img"><img src="android_images/-original-imagbgxffuvx56mm.webp"
                                alt=""></a>
                        <div class="recommended-box">
                            <h5>Oppo Reno 7 Pro</h5>
                            <p>Product Dimensions 16.1 x 7.3 x 0.8 cm; 173 Grams
                                Batteries 1 Lithium Polymer batteries required. (included)
                                Item model number CPH2371</p>
                        </div>
                    </div>
                    <div class="recommended">
                        <a href="" class="recmd-img"><img src="android_images/-original-imagb8g5drhxtxr9.webp"
                                alt=""></a>
                        <div class="recommended-box">
                            <h5>Vivo Y56</h5>
                            <p>Vivo Y56 5G (Black Engine, 8GB RAM, 128GB Storage)</p>
                        </div>
                    </div>
                    <div class="recommended">
                        <a href="" class="recmd-img"><img src="android_images/-original-imagbmf23vfcqmrq.webp"
                                alt=""></a>
                        <div class="recommended-box">
                            <h5>Vivo Y29e</h5>
                            <p>VM - PROTEC Compatible with vivo v29e 5g Back Silicone Soft Mobile Case Dotted Slim-Fit
                                Design TPU Shockproof Cover.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----- latest product details  ---- -->
            <div class="latest-product mt-5">
                <h2><span>Latest Product Reviews</span></h2>
                <div class="row p-0">
                    <div class="col-lg-6 col-md-6 col-sm-12 latest-product-left border">
                        <img src="images/product(5).jpg" alt="">
                        <span>1 hour ago </span>
                        <h3>Mobile Name </h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 latest-product-right">
                        <div class="owl-carousel owl-theme">
                            <div class="item ">
                                <div class="latest-product-box border">
                                    <a href="" class="latest-prod-img"><img
                                            src="android_images/-original-imagb8g5drhxtxr9.webp" alt=""></a>
                                    <div class="product-review-box">
                                        <h5>Mobiles</h5>
                                        <p>Latest Android phones set to launch with cutting-edge features and improved
                                            performance, promising an exciting tech future.</p>
                                    </div>
                                </div>
                                <!-- ---  -->
                                <div class="latest-product-box border">
                                    <a href="" class="latest-prod-img"><img src="laptop_images/41.jpg" alt=""></a>
                                    <div class="product-review-box">
                                        <h5>Laptops</h5>
                                        <p>New laptop models unveiled with sleek designs, powerful processors, and
                                            enhanced battery life, redefining portability and productivity.</p>
                                    </div>
                                </div>

                                <!-- ---  -->
                                <div class="latest-product-box border">
                                    <a href="" class="latest-prod-img"><img src="camera_images/1.webp" alt=""></a>
                                    <div class="product-review-box">
                                        <h5>Cameras</h5>
                                        <p>Photography enthusiasts rejoice as the latest cameras deliver high-resolution
                                            images, AI enhancements, and creative shooting modes.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- -- item end  -->
                            <!-- --- second item start  -->
                            <div class="item ">
                                <div class="latest-product-box border">
                                    <a href="" class="latest-prod-img"><img src="television_images/95.webp" alt=""></a>
                                    <div class="product-review-box">
                                        <h5>Television</h5>
                                        <p>Television industry embraces 8K resolution, OLED displays, and immersive
                                            sound systems for an immersive home entertainment experience.</p>
                                    </div>
                                </div>
                                <!-- ---  -->
                                <div class="latest-product-box border">
                                    <a href="" class="latest-prod-img"><img src="smartwatches_images/898.webp"
                                            alt=""></a>
                                    <div class="product-review-box">
                                        <h5>Smartwatches</h5>
                                        <p>Smartwatches continue to evolve, offering advanced health tracking, stylish
                                            designs, and seamless integration with smart devices.</p>
                                    </div>
                                </div>

                                <!-- ---  -->
                                <div class="latest-product-box border">
                                    <a href="" class="latest-prod-img"><img src="earbuds_images/11.jpg" alt=""></a>
                                    <div class="product-review-box">
                                        <h5>Earbuds</h5>
                                        <p>Wireless earbuds market grows with innovative noise-cancellation technology
                                            and extended battery life, enhancing the audio experience.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- -- second item end ---- -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---- latest product details end --- -->


            <!-- upcoming mobiles   --- -->
            <div class="upcoming-mobiles mt-5">
                <h2><span>Latest & Popular Mobiles</span></h2>
                <div class="row p-0">

                    <?php
$active = 'active'; // Set the first item as active
$count = 0; // Counter to track the number of displayed items
// Display Android devices in a row
$result_android->data_seek(4); // Move the result pointer to the fourth item
for ($i = 50; $i < min(count($random_androids), 54); $i++) {
    $android = $random_androids[$i];
    ?>
                    <!-- -- -->
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                        <div class="upcoming-product text-center ">
                            <a class="up-coming-img" href="<?=$android["affiliate_links"]?>" target="_blank"><img
                                    class="hm_deal_img" src="android_images/<?=$android["image"]?>" alt=""></a>
                            <h3><?=$android["model"]?></h3> <span><i
                                    class="fa-solid fa-dollar-sign"></i><?=$android["price"]?>
                            </span>
                            <a href="mobiledetails.php?model=<?=urlencode($android["model"])?>"><button>View
                                    Details</button></a>
                        </div>
                    </div>
                    <?php
$count++;
}
?>

                    <!-- Compare  mobiles   --- -->
                    <div class="upcoming-mobiles mt-5 compare-section">
                        <h2><span>Compare Mobile Features</span><a href="">View All</a></h2>
                        <div class="row p-0">
                            <div class="col-lg-4 col-md-6 col-sm-6  mt-2">
                                <div class="upcoming-product  text-center">
                                    <div class="compare-mobile d-flex">
                                        <div class="comp">
                                            <div class="left-mobile">
                                                <img src="images/mobiles/vivo-1.png" alt="">
                                                <h3>Samsung</h3>
                                                <span><i class="fa-solid fa-dollar-sign"></i> 100 </span>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="right-mobile">
                                                <img src="images/mobiles/vivo-2.png" alt="">
                                                <h3>Samsung</h3>
                                                <span><i class="fa-solid fa-dollar-sign"></i> 100 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button>Compare</button>
                                </div>
                            </div>
                            <!-- -- -->
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-2 ">
                                <div class="upcoming-product  text-center">
                                    <div class="compare-mobile d-flex">
                                        <div class="comp">
                                            <div class="left-mobile">
                                                <img src="images/mobiles/vivo-3.png" alt="">
                                                <h3>Samsung</h3>
                                                <span><i class="fa-solid fa-dollar-sign"></i> 100</span>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="right-mobile">
                                                <img src="images/mobiles/vivo-4.png" alt="">
                                                <h3>Samsung</h3>
                                                <span><i class="fa-solid fa-dollar-sign"></i> 100</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button>Compare</button>
                                </div>
                            </div>
                            <!-- -- -->
                            <div class="col-lg-4  col-md-6 col-sm-6 mt-2">
                                <div class="upcoming-product  text-center">
                                    <div class="compare-mobile d-flex">
                                        <div class="comp">
                                            <div class="left-mobile">
                                                <img src="images/mobiles/vivo-1.png" alt="">
                                                <h3>Samsung</h3>
                                                <span><i class="fa-solid fa-dollar-sign"></i> 100</span>
                                            </div>
                                            <div class="vs">
                                                <span>VS</span>
                                            </div>
                                            <div class="right-mobile">
                                                <img src="images/mobiles/vivo-2.png" alt="">
                                                <h3>Samsung</h3>
                                                <span><i class="fa-solid fa-dollar-sign"></i> 100</span>

                                            </div>
                                        </div>
                                    </div>
                                    <button>Compare</button>
                                </div>
                            </div>

                        </div>
                    </div> <!-- upcoming mobiles end  --- -->

                </div>
    </main>




    <?php
include "include/footer.php";
?>



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

    <!--  js link -->
    <script src="js/main.js"></script>


    <!-- ---  -->
    <!-- --- recent viewed & recommended  -- -->
    <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2500,
        // stagePadding: 50,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    </script>


</body>

</html>