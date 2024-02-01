<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Iphone</title>

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
        <div class="breadcrums">
            <span>Mobiles<i class="fa-solid fa-chevron-right" style="margin:0 5px;"></i>
                <a href="">Phone Finder</a> </span>
        </div>
        <!---   breadcrums end   ----->

        <div class="phone-finder  border-2" style="padding:10px 20px;">
            <h2>Phone Finder</h2>
            <p>1mobiles with its Mobile Phone Finder tool lets you explore the specifications and features of each and
                every phone available in India. Our advanced tool covers all the smartphones across all the
                manufacturers. <span id="dots"></span><span id="more">
                    The Phone Finder tool is designed in such a way that even a technically handicapped
                    person would be able to pick the best device by himself and compare mobile phones in
                    India.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat expedita, necessitatibus a dolores
                    non corporis quaerat dolor officiis quas minima ipsum laborum consequuntur quisquam deserunt debitis
                    architecto distinctio, neque enim?<br />
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam sequi quibusdam atque necessitatibus
                    ex cum optio id commodi unde illo eius tenetur cupiditate ipsam vero nulla iusto placeat quas
                    maxime, alias mollitia numquam sunt iste officiis officia. Esse amet veritatis quia sed at autem
                    voluptatem? Velit distinctio excepturi est! Fugit eius temporibus similique distinctio maxime
                    voluptatum saepe autem omnis, corporis molestias! Enim adipisci minima corrupti delectus cupiditate
                    laudantium, natus ducimus explicabo, quos quo modi eaque deleniti facere voluptate fugit officiis.
                    In, non nisi perferendis neque nam impedit sunt laudantium repellat at dignissimos. Delectus dolorem
                    voluptates laudantium velit atque deleniti voluptate!<br />

                </span><button onclick="myFunction()" id="myBtn">Read more</button>
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
                            <button class="accordion">Featured Searches</button>
                            <div class="filter-section">
                                <form action="">
                                    <div>
                                        <input type="checkbox">
                                        <label for="">8 GB & above RAM </label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">128 GB & above Memory</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">5000 mAh & above</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">64 MP & above Camera</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Dual SIM </label>
                                    </div>
                                </form>
                            </div>
                    
                            <!-- ---- -->
                            <button class="accordion">Brands</button>
                            <div class="filter-section">
                                <form action="">
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
                                        <label for="">Oppo</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Realme</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">OnePlus</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Xiaomi</label>
                                    </div>

                                </form>
                            </div>
                            <!-- ---- -->
                            <button class="accordion">Screen Size</button>
                            <div class="filter-section">
                                <form action="">
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Below 5.5 inch</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">5.5 inch - 6.5 inch</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">6.5 inch - 7.5 inch</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-12 phone-details-section">
                    <div class="phone-details-container ">
                        <!-- -- phone image - -->
                        <div class="phone-image ">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  name-box   -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->
                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->
                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->
                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->
                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->
                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->

                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->
                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->
                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
                    </div>
                    <!---  phone-details-container end ----->
                    <div class="phone-details-container ">
                        <!-- -- phone photo - -->
                        <div class="phone-image">
                            <img src="images/mobiles/vivo-3.png" alt="">
                            <div class="compare-btn">
                                <a href=""><i class="fa-solid fa-plus"></i></a>
                                <span>Compare</span>
                            </div>
                            <div class="wishlist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                        </div>
                        <!-- -------  phone details  -->
                        <div class="name-box-container">
                            <!-- ---- -->
                            <div class="name-box">
                                <div class="box-content-left">
                                    <a href="appledetails.php"><h2>Iphone</h2></a>
                                    
                                </div>
                                <div class="box-content-right">
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span>
                                    <p><a href="">See Full Specifications <i class="fa-solid fa-sort-down"></i></a></p>
                                </div>
                            </div>
                            <!---  name box end ----->

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
                                <!-- <div class="see-detail">
                                    <a href="" >See Complete Feature</a> <i
                                        class="fa-solid fa-caret-right"></i>
                                </div> -->
                            </div>
                        </div>
                        <!----name-box-container end  -->
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="appledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Iphone Pro</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="appledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Iphone Pro</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="appledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Iphone Pro</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span><br />
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="appledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Iphone Pro</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="appledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Iphone Pro</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span><br />
                                    <input type="checkbox"><label for="">Add to compare</label>
                                </div>
                                <!-----  offer   ---->
                                <div class="offer">
                                    <h3>96%</h3>
                                    <p>Sale</p>
                                </div>
                            </a>
                            <!-- ---- -->
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="appledetails.php">
                                <img src="images/mobiles/vivo-2.png" alt="">
                                <div class="proudct-box">
                                    <p>Iphone Pro</p>
                                    <span><i class="fa-solid fa-dollar-sign"></i> 200</span><br />
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