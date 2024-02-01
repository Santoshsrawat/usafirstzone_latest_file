<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Cameras</title>

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
                    <a href=""><span>Cameras</span><i class="fa-solid fa-chevron-right"></i><span>Canon Digital
                            SLR</span><i class="fa-solid fa-chevron-right"></i><span></span></a>
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
                        <a href="" class="big">Canon Digital SLR</a>
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
                            <img src="images/camera/camera1.jpg" style="width:100%">
                            <!-- <div class="text">Caption Text</div> -->
                        </div>

                        <div class="mySlides">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            <img src="images/camera/camera1.jpg" style="width:100%">
                            <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            <img src="images/camera/camera1.jpg" style="width:100%">
                            <!-- <div class="text">Caption Three</div> -->
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <!-- The dots/circles -->
                        <div class="dots-section">
                            <img src="images/camera/camera1.jpg" alt="" class="dot" onclick="currentSlide(1)">
                            <img src="images/camera/camera1.jpg" alt="" class="dot" onclick="currentSlide(2)">
                            <img src="images/camera/camera1.jpg" alt="" class="dot" onclick="currentSlide(3)">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6">
                    <!-- -------   -->
                    <div class="web-link">
                        <img src="images/amazon.png" alt="">
                        <div class="content-box">
                            <p><i class="fa-solid fa-dollar-sign"></i>. 14,999</p>
                            <button><a href="">Go to Store</a></button>
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
                                <h4><span>Connectivity</span></h4>
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
                                <h4><span>Sensor</span></h4>
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
                                <h4><span>Battery</span></h4>
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
                                <h4><span>Features</span></h4>
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

                </div>
            </div>
            <!----  phone-section  end  third section------>
        </div>

        <div class="front-product-2 front-product">
            <h2><span>RECENTLY VIEWED & RECOMMENDED PRODUCTS</span><a href="">View All</a></h2>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row ">
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="cameradetails.php">
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 14,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="cameradetails.php">
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i>14,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="cameradetails.php">
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i>14,000</span><br />
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="cameradetails.php">
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i>14,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="cameradetails.php">
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i>14,000</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="cameradetails.php">
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i>14,000</span><br />
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
            <h2><span>RECENTLY VIEWED & RECOMMENDED PRODUCTS</span><a href="">View All</a></h2>
            <!-- === -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Item Details</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Model Name</th>
                                <td>Canon</td>
                            </tr>
                            <tr>
                                <th>Brand</th>
                                <td>Digital SLR</td>
                            </tr>
                            <tr>
                                <th>Model Number </th>
                                <td>EOS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Display</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Viewfinder Type</th>
                                <td>CMOS Sensor
                                </td>
                            </tr>
                            <tr>
                                <th>Screen Size </th>
                                <td>22.3 x 14.9 mm, APS-C inch</td>
                            </tr>
                            <tr>
                                <th>Display Type </th>
                                <td>DIGIC 4+ Processor</td>
                            </tr>
                            <tr>
                                <th>Touch Screen Type </th>
                                <td>18 MP Resolution </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Imaging</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Auto Focus Technology</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Display Resolution Maximum</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Photo Sensor Size</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Photo Sensor Technology</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Effective Still Resolution</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Self Timer Duration</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Jpeg Quality Level</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Camera Flash</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Image Stabilization</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Video Capture Format</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Video Capture Resolution</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Lens</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Lens Type</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Optical Zoom </th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Compatible Mounting</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Focus Type</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Maximum Focal Length</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Minimum Focal Length</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Features</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Connectivity Techology </th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Continuous Shooting Speed</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Wireless Communication Technology</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Memory Slots Available</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Special Feature</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Skill Level</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Form Factor</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Audio Output Type</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Photo Sensor Technology </th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Exposure</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Expanded ISO Maximum</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Expanded ISO Minimum</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Max Shutter Speed</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Min Shutter Speed</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Shooting Modes</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Battery</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Battery Description</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Battery Weight</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
            <div class="row specification-section">
                <div class="col-lg-3">
                    <span>Warranty</span>
                </div>
                <div class="col-lg-9 ">
                    <table>
                        <tbody>
                            <tr>
                                <th>Warranty Type </th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>
                            <tr>
                                <th>Mfg Warranty Description Labor</th>
                                <td>Canon EOS EF,Canon EOS EF-S</td>
                            </tr>                     
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ====== -->
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
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                </div>
                            </div>
                            <button onclick="changeProductView(1)">+ Add to compare</button>
                        </div>
                        <!-----  after add compare --- -->
                        <div class="after-add-compare" id="after-add-compare">
                            <a id="remove-compare" onclick="removeCompare(1)"><i class="fa-solid fa-xmark"></i></a>
                            <div class="compare-details">
                                <img src="images/camera/camera1.jpg" alt="">
                                <h3>Vivo Y17S</h3>
                                <span><i class="fa-solid fa-dollar-sign"></i>.11,000</span>
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
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                </div>
                            </div>
                            <button onclick="changeProductView(2)">+ Add to compare</button>
                        </div>
                        <!-----  after add compare --- -->
                        <div class="after-add-compare" id="after-add-compare">
                            <a id="remove-compare" onclick="removeCompare(2)"><i class="fa-solid fa-xmark"></i></a>
                            <div class="compare-details">
                                <img src="images/camera/camera1.jpg" alt="">
                                <h3>Vivo Y17S</h3>
                                <span><i class="fa-solid fa-dollar-sign"></i>.11,000</span>
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
                                <img src="images/camera/camera1.jpg" alt="">
                                <div class="proudct-box">
                                    <p>Canon Digital SLR</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 11,000</span><br />
                                </div>
                            </div>
                            <button onclick="changeProductView(3)">+ Add to compare</button>
                        </div>
                        <!-----  after add compare --- -->
                        <div class="after-add-compare" id="after-add-compare">
                            <a id="remove-compare" onclick="removeCompare(3)"><i class="fa-solid fa-xmark"></i></a>
                            <div class="compare-details">
                                <img src="images/camera/camera1.jpg" alt="">
                                <h3>Vivo Y17S</h3>
                                <span><i class="fa-solid fa-dollar-sign"></i>.11,000</span>
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