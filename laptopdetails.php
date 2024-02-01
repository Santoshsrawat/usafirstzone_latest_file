<?php 
    include('functions/userFunction.php');

    if(isset($_GET['model'])){
        // $laptop_data = "SELECT * FROM `products` WHERE `model` = '$model' ";
        // $laptop_data_run = mysqli_query($conn, $laptop_data);
        // $laptop = mysqli_fetch_array($laptop_data_run);
        $model = $_GET['model'];
        $laptop_details = "SELECT * FROM `laptop` WHERE `model` = '$model' ";
        $laptop_details_run = mysqli_query($conn, $laptop_details);
        $laptop_details_fetch = mysqli_fetch_array($laptop_details_run);
        
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Laptops</title>

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
    include("include/header.php");
?>

    <main>
        <div class="front-product ">
            <!-- --first row   -->
            <div class="row first-row ">
                <div class="col-lg-9 col-md-6 col-sm-6  col-xs-6 d-flex product-section">
                    <a href=""><span>Mobiles</span><i class="fa-solid fa-chevron-right"></i><span>Mi Mobiles </span><i
                            class="fa-solid fa-chevron-right"></i><span>Poco M3</span></a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  update">
                    <a href="" class="para">Update on : Aug 23, 2023</a>
                </div>
            </div>

            <!-- -- second-row  -->
            <div class="row second-row ">
                <!-- -- -->
                <div class="short-list">
                    <div class="">
                        <a href="" class="big"><?= $laptop_details_fetch['model']; ?></a>
                    </div>
                    <!-------- shortlist and compare --- -->
                    <div class=" button-section">
                        <a href="" class="btn-shortlist btn-item"><i
                                class="fa-regular fa-heart"></i><span>SHORTLIST</span></a>
                        <a id="myCompareModal" class="btn-compare btn-item" onclick="compareModal()"><i
                                class="fa-solid fa-plus"></i><span>Compare</span></a>
                    </div>
                </div>
                <!-- ----  -->
                <div class="col-lg-12">
                    <a href="" class="para">Market status: Available in India </a>
                </div>
            </div>

            <!-- -----  third row   -->
            <div class="row phone-section">
                <div class="col-lg-4 col-md-6 col-sm-6 phone-container">
                  
                    <div class="slideshow-container">
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides ">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                                <img src="laptop_images/<?= $laptop_details_fetch['image']; ?>" alt="" style="width:100%">                              
                        </div>

                        <div class="mySlides">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            <img src="laptop_images/<?= $laptop_details_fetch['image1']; ?>" alt="" style="width:100%">  
                           
                        </div>

                        <div class="mySlides">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            <img src="laptop_images/<?= $laptop_details_fetch['image2']; ?>" alt="" style="width:100%">  
                            
                        </div>
                        <div class="mySlides">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            <img src="laptop_images/<?= $laptop_details_fetch['image3']; ?>" alt="" style="width:100%">  
                            
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <!-- The dots/circles -->
                        <div class="dots-section">
                            <img src="laptop_images/<?= $laptop_details_fetch['image']; ?>" alt="" class="dot" onclick="currentSlide(1)">
                            <img src="laptop_images/<?= $laptop_details_fetch['image1']; ?>" alt="" class="dot" onclick="currentSlide(2)">
                            <img src="laptop_images/<?= $laptop_details_fetch['image2']; ?>" alt="" class="dot" onclick="currentSlide(3)">
                            <img src="laptop_images/<?= $laptop_details_fetch['image3']; ?>" alt="" class="dot" onclick="currentSlide(4)">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6">
                    <div class="web-link">
                        <img src="images/amazon.png" alt="">
                        <div class="content-box">
                            <p><i class="fa-solid fa-dollar-sign"></i>. 11,999</p>
                           
                            <button><a href="<?= $laptop_details_fetch['affiliate_links']; ?>">Go to Store</a></button>
                        </div>
                    </div>
                    <div class="web-link">
                        <img src="images/croma.png" alt="">
                        <div class="content-box">
                            <p><i class="fa-solid fa-dollar-sign"></i>. 11,999</p>
                            <button><a href="">Go to Store</a></button>
                        </div>
                    </div>

                    <div class="discount">
                        <p>1 OFFER</p>
                        <span>10% Instant Discount on ICICI Card.</span>
                    </div>

                    <!-- =====  -->
                    <div class="description-product">
                        <h2><span>Key Specs</span><a href="#front-product-4">See All</a></h2>

                        <div class="row" s>
                            <div class="col-lg-3 col-md-6 col-sm-6 description-box">
                                <h4><span>Performance</span><i class="fa-solid fa-caret-down"></i></h4>
                                <!-- -- line break -- -->
                                <div class="break-line">
                                    <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i>
                                </div> <!-- -- lin ebreak end   -->
                                <ul>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                </ul>
                            </div>
                            <!----   description-box ----->

                            <div class="col-lg-3 col-md-6 col-sm-6 description-box">
                                <h4><span>Display</span><i class="fa-solid fa-caret-down"></i></h4>
                                <!-- -- line break -- -->
                                <div class="break-line">
                                    <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i>
                                </div> <!-- -- lin ebreak end   -->
                                <ul>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                </ul>
                            </div>
                            <!----   description-box ----->

                            <div class="col-lg-3 col-md-6 col-sm-6 description-box">
                                <h4><span>Camera</span><i class="fa-solid fa-caret-down"></i></h4>
                                <!-- -- line break -- -->
                                <div class="break-line">
                                    <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i>
                                </div> <!-- -- lin ebreak end   -->
                                <ul>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                </ul>
                            </div>
                            <!----   description-box ----->

                            <div class="col-lg-3  col-md-6 col-sm-6 description-box">
                                <h4><span>Battery</span><i class="fa-solid fa-caret-down"></i></h4>
                                <!-- -- line break -- -->
                                <div class="break-line">
                                    <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i>
                                </div> <!-- -- lin ebreak end   -->
                                <ul>
                                    <li>Lorem ipsum dolor sit amet.</li>
                                    <li>Lorem, ipsum dolor.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                                </ul>
                            </div>
                            <!----   description-box ----->
                        </div>
                    </div>

                    <!-- =======  about -storage === -->
                    <div class="storage-container ">
                        <div class="storage">
                            <p><i class="fa-solid fa-wifi" style="margin-right:5px;"></i> <span>Wifi</span></p>
                            <p><i class="fa-solid fa-laptop" style="margin-right:5px;"></i><span> Slim 16.8</span></p>
                        </div>
                        <!-- --- -->
                        <div class="storage">
                            <p><i class="fa-brands fa-bluetooth-b" style="margin-right:5px;"></i><span>Bluetooth</span>
                            </p>
                        </div>
                        <!-- --- -->
                        <div class="storage">
                            <p><i class="fa-solid fa-camera" style="margin-right:5px;"></i><span>Web Camera</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!----  phone-section  end  third section------>
        </div>

        <div class="front-product-2 front-product">
            <h2><span>RECENTLY VIEWED & RECOMMENDED PRODUCTS</span><a href="laptopfinder.php">View All</a></h2>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row ">
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="laptopdetails.php">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="laptopdetails.php">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="laptopdetails.php">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="laptopdetails.php">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="laptopdetails.php">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="laptopdetails.php">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
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

        <!-- product-3 -->
        <div class="front-product front-product-3">
            <div class="review-section">
                <h2><span>Custormer's Review</span> <a href="">Read All User Review</a></h2>
                <div class="row review-container">

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 review-rating review-box" style="border-left: 0;">
                        <h4>OverAll Rating</h4>
                        <span>4.5 <sub>/5</sub></span>
                        <p>BASED ON 19,928 RATING(S)</p>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-4  col-xs-6 review-progress-bar review-box">
                        <h4>Overall Rating</h4>
                        <div id="progress-container">
                            <div id="progress-bar">0%</div>
                        </div>
                        <div id="progress-container-1">
                            <div id="progress-bar-1">0%</div>
                        </div>
                        <div id="progress-container-2">
                            <div id="progress-bar-2">0%</div>
                        </div>
                        <div id="progress-container-3">
                            <div id="progress-bar-3">0%</div>
                        </div>
                        <p>763 USER REVIEW(S)</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 share-review review-box">
                        <h4>Share Your Review</h4>
                        <button>Write a review</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- ====  product-4 -->
        <div class="front-product front-product-4" id="front-product-4">
            <h2><span>RECENTLY VIEWED & RECOMMENDED PRODUCTS</span><a href="laptopfinder.php">View All</a></h2>
            <!-- === -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>General Information</span>
                </div>
                <div class="col-lg-9 ">
                    <?php 
                        // $model = $_GET['model'];
                        // $laptop_details = "SELECT * FROM `laptop` WHERE `model` = '$model' ";
                        // $laptop_details_run = mysqli_query($conn, $laptop_details);
                        // $laptop_details_fetch = mysqli_fetch_array($laptop_details_run);
                    ?>

                    <table>
                        <tbody>
                            <tr>
                                <th>Brand</th>
                                <td> <?= $laptop_details_fetch['brand']; ?></td>
                            </tr>
                            <tr>
                                <th>Model</th>
                                <td><?= $laptop_details_fetch['model']; ?></td>
                            </tr>
                            <tr>
                                <th>Weight</th>
                                <td><?= $laptop_details_fetch['weight']; ?></td>
                            </tr>
                            <tr>
                                <th>Colour</th>
                                <td><?= $laptop_details_fetch['colours']; ?></td>
                            </tr>
                            <tr>
                                <th>Opertaing System</th>
                                <td><?= $laptop_details_fetch['operating_system']; ?></td>
                            </tr>
                            <tr>
                                <th>Opertaing System Type</th>
                                <td><?= $laptop_details_fetch['operating_system_type']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Display Details</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Display Size Sstem</th>
                                <td><?= $laptop_details_fetch['display_size']; ?></td>
                            </tr>
                            <tr>
                                <th>Display Resolution </th>
                                <td><?= $laptop_details_fetch['display_resolution']; ?></td>
                            </tr>
                            <tr>
                                <th>Pixel Density </th>
                                <td><?= $laptop_details_fetch['pixel_density']; ?></td>
                            </tr>
                            <tr>
                                <th>Display Features</th>
                                <td><?= $laptop_details_fetch['display_features']; ?></td>
                            </tr>
                            <tr>
                                <th>Touchscreen</th>
                                <td><?= $laptop_details_fetch['touchscreen']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Performance</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Processor</th>
                                <td><?= $laptop_details_fetch['processor']; ?></td>
                            </tr>
                            <tr>
                                <th>Chipset</th>
                                <td><?= $laptop_details_fetch['chipset']; ?></td>
                            </tr>
                            <tr>
                                <th>Clock-speed</th>
                                <td><?= $laptop_details_fetch['clock_speed']; ?></td>
                            </tr>
                            <tr>
                                <th>Number of Cores</th>
                                <td><?= $laptop_details_fetch['no_of_cores']; ?></td>
                            </tr>
                            <tr>
                                <th>Graphic Processor </th>
                                <td><?= $laptop_details_fetch['graphic_processor']; ?></td>
                            </tr>
                            <tr>
                                <th>Battery Cell </th>
                                <td><?= $laptop_details_fetch['battery_cell']; ?></td>
                            </tr>
                            <tr>
                                <th>Battery Type </th>
                                <td><?= $laptop_details_fetch['battery_type']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Memory & Storage</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Capacity </th>
                                <td><?= $laptop_details_fetch['capacity']; ?></td>
                            </tr>
                            <tr>
                                <th>RAM type</th>
                                <td><?= $laptop_details_fetch['ram_type']; ?></td>
                            </tr>
                            <tr>
                                <th>Memory Slots</th>
                                <td><?= $laptop_details_fetch['memory_slots']; ?></td>
                            </tr>
                            <tr>
                                <th>Memory Layout</th>
                                <td><?= $laptop_details_fetch['memory_layout']; ?></td>
                            </tr>
                            <tr>
                                <th>SSD Capacity</th>
                                <td><?= $laptop_details_fetch['ssd_capacity']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Networking</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Wireless LAN</th>
                                <td><?= $laptop_details_fetch['wireless_LAN']; ?></td>
                            </tr>
                            <tr>
                                <th>Wi-Fi Version</th>
                                <td><?= $laptop_details_fetch['wifi_version']; ?></td>
                            </tr>
                            <tr>
                                <th>Bluetooth </th>
                                <td><?= $laptop_details_fetch['bluetooth']; ?></td>
                            </tr>
                            <tr>
                                <th>Bluetooth Version</th>
                                <td><?= $laptop_details_fetch['bluetooth_version']; ?></td>
                            </tr>
                            <tr>
                                <th>USB Type C</th>
                                <td><?= $laptop_details_fetch['usb_type_C']; ?></td>
                            </tr>
                            <tr>
                                <th>Headphone Jack</th>
                                <td><?= $laptop_details_fetch['headphone_jack']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Multimedia</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Webcam</th>
                                <td><?= $laptop_details_fetch['webcam']; ?></td>
                            </tr>
                            <tr>
                                <th>Video Recording</th>
                                <td><?= $laptop_details_fetch['video_recording']; ?></td>
                            </tr>
                            <tr>
                                <th>Speakers</th>
                                <td><?= $laptop_details_fetch['speakers']; ?></td>
                            </tr>
                            <tr>
                                <th>In-built Microphone</th>
                                <td><?= $laptop_details_fetch['inbuilt_microphone']; ?></td>
                            </tr>
                            <tr>
                                <th>Microphone Type</th>
                                <td><?= $laptop_details_fetch['microphone_type']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Others</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Sales Package</th>
                                <td><?= $laptop_details_fetch['sales_package']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ===========   compare -box ======== -->
        <div class="compare-section" id="compare-section">
            <a id="close-compare-section" onclick="compareTab()"><i class="fa-solid fa-xmark"></i></a>
            <div class="row">
                <!-- -- -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="product-compare-2">
                        <!-- ---- prod-section -->
                        <div class="prod-section" id="prod-section-1">
                            <div class="pro-com">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
                                </div>
                            </div>
                            <button onclick="changeProductView(1)">+ Add to compare</button>
                        </div>
                        <!-----  after add compare --- -->
                        <div class="after-add-compare" id="after-add-compare">
                            <a id="remove-compare" onclick="removeCompare(1)"><i
                                    class="fa-solid fa-xmark"></i></a>
                            <div class="compare-details">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <h3>Vivo Y17S</h3>
                                <span><i class="fa-solid fa-dollar-sign"></i>.100</span>
                            </div>
                        </div>
                    </div>
                    <!---  product-compare-2 end -->
                </div>
                <!-- -- -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="product-compare-2">
                        <!-- ---- prod-section -->
                        <div class="prod-section" id="prod-section-2">
                            <div class="pro-com">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
                                </div>
                            </div>
                            <button onclick="changeProductView(2)">+ Add to compare</button>
                        </div>
                        <!-----  after add compare --- -->
                        <div class="after-add-compare" id="after-add-compare">
                            <a id="remove-compare" onclick="removeCompare(2)"><i
                                    class="fa-solid fa-xmark"></i></a>
                            <div class="compare-details">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <h3>Vivo Y17S</h3>
                                <span><i class="fa-solid fa-dollar-sign"></i>.100</span>
                            </div>
                        </div>
                    </div>
                    <!---  product-compare-2 end -->
                </div>
                <!-- -- -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="product-compare-2">
                        <!-- ---- prod-section -->
                        <div class="prod-section" id="prod-section-3">
                            <div class="pro-com">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <div class="proudct-box">
                                    <p>Vivo Y21</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 100</span><br />
                                </div>
                            </div>
                            <button onclick="changeProductView(3)">+ Add to compare</button>
                        </div>
                        <!-----  after add compare --- -->
                        <div class="after-add-compare" id="after-add-compare">
                            <a id="remove-compare" onclick="removeCompare(3)"><i
                                    class="fa-solid fa-xmark"></i></a>
                            <div class="compare-details">
                                <img src="images/laptop/laptopproduct.png" alt="">
                                <h3>Vivo Y17S</h3>
                                <span><i class="fa-solid fa-dollar-sign"></i>.100</span>
                            </div>
                        </div>
                    </div>
                    <!---  product-compare-2 end -->
                </div>
                <!-- -- -->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="compare-button-section">
                        <button>Compare</button>
                        <span href="">Remove All</span>
                    </div>

                </div><!-- -- end col -->

            </div>
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
</body>

</html>

<?php 
     }else{
        echo "Something went wrong!";
    }

?>
