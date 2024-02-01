<?php 
    include('functions/userFunction.php');
    // include('include/header.php');
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
        <div class="laptop">
            <div class="laptop-left">
                <!--===============================-->
                <div class="laptop-filter-section">
                    <div class="laptop-filter">
                        <h3>Operating System</h3>
                        <a href="laptopfinder.php">
                            <p>Windows Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>DOS Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Mac OS Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                    </div>
                    <!---------->
                    <div class="laptop-filter">
                        <h3>Price Range</h3>
                        <a href="laptopfinder.php">
                            <p>Laptop under $101<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Best Laptops Under $200<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i>
                            </p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Best Laptops Under $200<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i>
                            </p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Best Laptops Under $200<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i>
                            </p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Best Laptops Under $200<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i>
                            </p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Best Laptops Under $200<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i>
                            </p>
                        </a>
                    </div>
                    <!-- ------   -->
                    <div class="laptop-filter">
                        <h3>Popular Searches</h3>
                        <a href="laptopfinder.php">
                            <p>Best Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Upcoming Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>New Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Laptop Finder<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Gaming Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Mini Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>i3 Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>i5 Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>i7 Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Ryzen 5 Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Ryzen 7 Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Ryzen 9 Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>SSD Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>Budget Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                        <a href="laptopfinder.php">
                            <p>16GB RAM Laptops<i class="fa-solid fa-caret-right" style="margin-left:10px;"></i></p>
                        </a>
                    </div>
                    <!-- ------   -->
                </div>
            </div>
            <!----  laptop-left    ---->
            <!-- --------=====================================- -->
            <div class="laptop-right">
                <div class="hero">
                    <h2>laptop</h2>
                </div>

                <!-- ==================== features ======================= -->
                <div class="laptop-feature">
                    <h1><span>Laptops By Popular Features</span><a href="laptopfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container">
                                <!-- - -->
                                <div class="item ">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/laptop.png" alt="">
                                        <h5>Laptops around Rs 30,000</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-- --- -->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/ram.png" alt="">
                                        <h5>8 GB & Above RAM</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/touchscreen.png" alt="">
                                        <h5>Touchscreen Laptops</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/responsive.png" alt="">
                                        <h5>2-in-1 Laptops</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/full-hd.png" alt="">
                                        <h5>Full HD Screen</h5>
                                    </a>
                                </div>
                                <!-----   item ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/operating-system.png" alt="">
                                        <h5>Windows OS Laptops</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/cpu.png" alt="">
                                        <h5>Laptops with Best Graphics Card</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!-----   item ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/hard-disk.png" alt="">
                                        <h5>1 TB & Above Hard Disk</h5>
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->
                </div>

                <!-- ==================== Brands ======================= -->
                <div class="laptop-feature-1">
                    <h1><span>Laptops By Popular Brands</span><a href="laptopfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container-1">
                                <!---   item    ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/dell.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/hp.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/apple.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->

                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/lenovo.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/asus.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/alien.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                                <div class="item">
                                    <a class="laptop-feature-box" href="laptopfinder.php">
                                        <img src="images/laptop/msi.png" alt="">
                                    </a><!-- ---  catagory-feature-box end - -->
                                </div>
                                <!---   item    ---->
                            </div>
                        </div>
                    </div> <!-- ===========   catagory-feature  end   =========== -->

                </div><!-- ==================== Brands end  ======================= -->

                <!-- ==================== size ======================= -->
                <div class="laptop-feature-2">
                    <h1><span>Laptops By Screen Size</span><a href="laptopfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container-1">
                                <a class="item " href="laptopfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>10 INCH LAPTOPS</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="laptopfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>12 INCH LAPTOPS</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="laptopfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>13 INCH LAPTOPS</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="laptopfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>14 INCH LAPTOPS</h5>
                                    </div><!-- ---  catagory-feature-box end - -->
                                </a>
                                <a class="item" href="laptopfinder.php">
                                    <div class="laptop-feature-box">
                                        <h5>15 INCH LAPTOPS</h5>
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
                    <h1><span>Most Popular Laptops</span><a href="laptopfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl theme laptop-container-3">
                                <?php  
                                    $products = getAllActive("laptop");

                                    if(mysqli_num_rows($products) > 0){
                                        foreach($products as $item){
                                ?>
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="laptop_images/<?= $item['image']; ?>" alt="<?= $item['model']; ?>">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3><?= $item['model']; ?></h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="laptopdetails.php?model=<?= $item['model']; ?>"><button>View Details</button></a>
                                    </div>
                                </div>
                            <?php
                                }
                            }else{
                                echo "No data available";
                            }
                            ?>
                                <!----  item end   ---->
                             <!--  <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/laptop/laptopproduct.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="laptopdetails.php"><button>View Details</button></a>
                                    </div>
                                </div> -->
                                <!----  item end   ---->
                               <!--  <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/laptop/laptopproduct.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="laptopdetails.php"><button>View Details</button></a>
                                    </div>
                                </div> -->
                                <!----  item end   ---->
                               <!--  <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/laptop/laptopproduct.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="laptopdetails.php"><button>View Details</button></a>
                                    </div>
                                </div> -->
                                <!----  item end   ---->
                                <!-- <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/laptop/laptopproduct.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="laptopdetails.php"><button>View Details</button></a>
                                    </div>
                                </div> -->
                                <!----  item end   ---->
                               <!--  <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/laptop/laptopproduct.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="laptopdetails.php"><button>View Details</button></a>
                                    </div>
                                </div> -->
                                <!----  item end   ---->
                               <!--  <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="images/laptop/laptopproduct.png" alt="">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3>OPPO Find X6 Pro</h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="laptopdetails.php"><button>View Details</button></a>
                                    </div>
                                </div> --> 
                                <!----  item end   ---->
                            </div>
                            <!--- owl carousel end --->
                        </div>
                        <!---   col-end   --->
                    </div> <!-- ==================== size end ======================= -->
                </div>
                <!-- ========== most popular laptop end   =========== -->
                <div class="laptop-feature-4">
                    <h1><span>Upcoming & Recent Laptops</span><a href="laptopfinder.php">View all <i
                                class="fa-solid fa-caret-right" style="margin-left:5px;"></i></a></h1>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme laptop-container-4">
                              
                            <?php  
                                    $products = getAllActive("laptop");

                                    if(mysqli_num_rows($products) > 0){
                                        foreach($products as $item){
                                ?>
                                <div class="item">
                                    <div class="upcoming-product  text-center">
                                        <img src="laptop_images/<?= $item['image']; ?>" alt="<?= $item['model']; ?>">
                                        <div class="offer">
                                            <h3>96%</h3>
                                            <p>Sale</p>
                                        </div>
                                        <h3><?= $item['model']; ?></h3>
                                        <span><i class="fa-solid fa-dollar-sign"></i> 100 <span
                                                class="small">(Available)</span></span>
                                        <a href="laptopdetails.php?model=<?= $item['model']; ?>"><button>View Details</button></a>
                                    </div>
                                </div>
                                <?php
                                }
                            }else{
                                echo "No data available";
                            }
                            ?>
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