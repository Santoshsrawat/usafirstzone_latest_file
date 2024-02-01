<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Earphones</title>

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
            <span>Earphones<i class="fa-solid fa-chevron-right" style="margin:0 5px;"></i>
                <a href="">Earphone Finder</a> </span>
        </div>
        <!---   breadcrums end   ----->

        <div class="phone-finder  border-2" style="padding:10px 20px;">
            <h2>Earphone Finder</h2>
            <p>Confused about which Earphone to buy? Just feed in your requirements to our Earphone Finder and you will
                get best recommendations. Start your search now.</p>
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
                            <!-- ---- -->
                            <button class="accordion">Brands</button>
                            <div class="filter-section">
                                <form action="">
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Sony</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">JBL</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Apple</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Samsung</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Phillips</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">LG</label>
                                    </div>
                                    <div>
                                        <input type="checkbox">
                                        <label for="">Skullcandy</label>
                                    </div>

                                </form>
                            </div>
                            <!-- ---- -->

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

// Check if a brand is selected
if (isset($_GET['brand'])) {
    $selectedBrand = $_GET['brand'];

    $sql = "SELECT * FROM earphones WHERE brand = '$selectedBrand'";
} else {
    // If no brand is selected, fetch all earphones models
    $sql = "SELECT * FROM earphones";
}

// Execute the query
$result = $conn->query($sql);
?>


                <div class="col-lg-9 col-md-6 col-sm-12 phone-details-section">
                    <?php if ($result->num_rows > 0) {?>
                    <?php while ($row = $result->fetch_assoc()) {?>
                    <?php
$earphonesModel = $row["model"];
    $earphonesImage = 'earphones_images/' . $row["image"];
    ?>
                   <div class="phone-details-container">
            <!-- -- phone image - -->
            <div class="phone-image">
              <img src="<?php echo $earphonesImage; ?>" alt="<?php echo $earphonesModel; ?>" />
              <div class="compare-btn">
                <a href=""><i class="fa-solid fa-plus"></i></a>
                <span>Compare</span>
              </div>
              <div class="wishlist">
                <a href=""><i class="fa-regular fa-heart"></i></a>
              </div>
            </div>
            <!-- -------  name-box   -->
            <div class="name-box-container">
              <!-- ---- -->
              <div class="name-box">
                <div class="box-content-left">
                  <a href="earphonedetails.php?model=<?php echo urlencode($earphonesModel); ?>">
                    <h2>
                      <?php echo $earphonesModel; ?>
                    </h2>
                </div>
                <div class="box-content-right">
                  <span><i class="fa-solid fa-dollar-sign"></i>
                    <?php echo $row["price"] ?>
                  </span>
                  <p>
                    <a href="">See Full Specifications
                      <i class="fa-solid fa-sort-down"></i></a>
                  </p>
                </div>
              </div>
              <!---  name box end ----->

              <div class="description-box">
                <div class="descript-content">

                  <p>
                    <?php echo $row["design"] . "<br>";
    echo $row["type"] . "<br>"; ?>
                  </p>
                </div>
                <!-- ---- -->
                <div class="descript-content">

                  <p>
                    <?php echo $row["impedance"]; ?>
                  </p>
                </div>
                <!-- --- -->
                <div class="descript-content">

                  <p>
                    <?php echo $row["driver_type"]; ?>
                  </p>
                </div>
                <!-- ---- -->
                <div class="descript-content">

                  <p>
                    <?php echo $row["max_frequency_response"]; ?>
                  </p>
                </div>
              </div>
              <!--- description-box end ----->
            </div>
            <!----name-box-container end  -->
          </div>

                            <?php }?>
                            <?php } else {?>
                            <p>No earphoness found
                                <?php echo isset($selectedBrand) ? " for the selected brand." : "."; ?>
                            </p>
                            <?php }?>
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
                                    <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="earphonedetails.php">
                                        <img src="images/wearables/earphone.png" alt="">
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
                                    <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="earphonedetails.php">
                                        <img src="images/wearables/earphone.png" alt="">
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
                                    <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="earphonedetails.php">
                                        <img src="images/wearables/earphone.png" alt="">
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
                                    <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="earphonedetails.php">
                                        <img src="images/wearables/earphone.png" alt="">
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
                                    <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="earphonedetails.php">
                                        <img src="images/wearables/earphone.png" alt="">
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
                                    <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="earphonedetails.php">
                                        <img src="images/wearables/earphone.png" alt="">
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
            acc[i].addEventListener("click", function () {
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