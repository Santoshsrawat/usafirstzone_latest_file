<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Smart Watches</title>

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
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usafirstzone";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the model name from the URL parameter
$model = $_GET['model'];

if (empty($model)) {
    die("Model parameter is missing in the URL.");
}

// Prepare the SQL statement to retrieve details for the selected model
$sql = "SELECT * FROM smartwatches WHERE model = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Query preparation error: " . $conn->error);
}

// Bind the model parameter
$stmt->bind_param("s", $model);

// After executing the query, check if it's successful
if ($stmt->execute()) {
    // Get the result
    $result = $stmt->get_result();

    // Check if there are results
    if ($result->num_rows > 0) {
        // Fetch the data
        $row = $result->fetch_assoc();

        // Display the image without any surrounding text or border
        ?>
    <main>
        <div class="front-product ">
            <!-- --first row   -->
            <div class="row first-row ">
                <div class="col-lg-9 col-md-6 col-sm-6  col-xs-6 d-flex product-section">
                    <a href=""><span>Watch</span><i class="fa-solid fa-chevron-right"></i><span><?php echo $row["brand"]; ?> Smart Watch </span><i
                            class="fa-solid fa-chevron-right"></i><span><?php echo $row["model"]; ?></span></a>
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
                        <a href="" class="big">Smart Watch</a>
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
            <!-- -----  third row   -->
            <div class="row phone-section">
                <div class="col-lg-4 col-md-6 col-sm-6 phone-container">
                    <div class="slideshow-container">
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides ">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            <img src="./smartwatches_images/<?php echo $row['image']; ?>" alt="<?php echo $row['model']; ?>" class="slideshow-image">
                            <!-- <div class="text">Caption Text</div> -->
                        </div>

                        <div class="mySlides">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            <img src="./smartwatches_images/<?php echo $row['image1']; ?>" alt="<?php echo $row['model']; ?>" class="slideshow-image">
                            <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides">
                            <div class="whislist"><a href=""><i class="fa-regular fa-heart"></i></a></div>
                            <img src="./smartwatches_images/<?php echo $row['image2']; ?>" alt="<?php echo $row['model']; ?>" class="slideshow-image">
                            <!-- <div class="text">Caption Three</div> -->
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <!-- The dots/circles -->
                        <div class="dots-section">
                            <img src="./smartwatches_images/<?php echo $row['image']; ?>"  alt="" class="dot" onclick="currentSlide(1)">
                            <img src="./smartwatches_images/<?php echo $row['image1']; ?>"  alt="" class="dot" onclick="currentSlide(2)">
                            <img src="./smartwatches_images/<?php echo $row['image2']; ?>"  alt="" class="dot" onclick="currentSlide(3)">
                        </div>
                    </div>
                </div>
                <style>
    .slideshow-image {
        max-width: 100%; /* Set the maximum width to 100% */
        max-height: 600px; /* Set the desired height */
        width: auto; /* Allow the width to adjust to the aspect ratio */
        height: auto; /* Allow the height to adjust to the aspect ratio */
        object-fit: contain; /* This property preserves aspect ratio and fits the image inside its container */
    }
</style>
                <div class="col-lg-8 col-md-6 col-sm-6">
                <div class="web-link">
                        <img src="images/amazon.png" alt="">
                        <div class="content-box">
                            <p><i class="fa-solid fa-dollar-sign"></i><?php echo $row["price"] ?></p>
                            <button><a href="<?php echo $row["affiliate_links"] ?>">Go to Store</a></button>
                        </div>
                    </div>
                    <div class="web-link">
                        <img src="images/croma.png" alt="">
                        <div class="content-box">
                        <p><i class="fa-solid fa-dollar-sign"></i><?php echo $row["price"] ?></p>
                            <button><a href="<?php echo $row["affiliate_links"] ?>">Go to Store</a></button>
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
                                <h4><span>Design</span></h4>
                                 <!-- -- line break -- -->
                                 <div class="break-line">
                                    <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i>
                                </div> <!-- -- lin ebreak end   -->
                                <ul>
                                <?php echo $row["body_material"] . "<br>" ?>
                                </ul>
                            </div>
                            <!----   description-box ----->

                            <div class="col-lg-3 col-md-6 col-sm-6 description-box">
                                <h4><span>Connection</span></h4>
                                 <!-- -- line break -- -->
                                 <div class="break-line">
                                    <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i>
                                </div> <!-- -- lin ebreak end   -->
                                <ul>
                                <?php echo $row["wirless_protocol"] . "<br>" ?>
                                </ul>
                            </div>
                            <!----   description-box ----->

                            <div class="col-lg-3 col-md-6 col-sm-6 description-box">
                                <h4><span>Speaker</span></h4>
                                 <!-- -- line break -- -->
                                 <div class="break-line">
                                    <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i
                                        class="fa-solid fa-minus"></i>
                                </div> <!-- -- lin ebreak end   -->
                                <ul>
                                <?php echo $row["speaker"] . "<br>" ?>
                                </ul>
                            </div>
                            <!----   description-box ----->
                            <!----   description-box ----->
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="smartwatchdetails.php">
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="smartwatchdetails.php">
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="smartwatchdetails.php">
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="smartwatchdetails.php">
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="smartwatchdetails.php">
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
                            <a class="col-lg-4 col-md-4 col-sm-12 product-compare" href="smartwatchdetails.php">
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
            <h2><span>Details</span><a href="earbudsfinder.php">View All</a></h2>
            <!-- === -->
            <?php
// Initialize variables to build the HTML structure
        $tableHTML = '<table class="table">';
        $affiliateLinkHTML = '';

        foreach ($row as $key => $value) {
            // Exclude displaying the "id" column and fields already displayed
            if ($key === "id" || $key === "price" || strpos($key, 'image') !== false || $key === "affiliate_links") {
                continue;
            }

            $columnLabel = str_replace("_", " ", strtoupper($key)); // Convert to uppercase and replace underscores with spaces

            // Build the table rows
            $tableHTML .= '<tr><th>' . $columnLabel . '</th><td>' . $value . '</td></tr>';
        }

        // Close the table
        $tableHTML .= '</table>';

        // Build the affiliate link section
        $affiliateLinkHTML .= '<div class="border-box table">';
        $affiliateLinkHTML .= '</div>';

        // Output the HTML
        echo $tableHTML;

        ?>
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
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
                                <img src="images/wearables/smartwatch.png" alt="">
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
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
                                <img src="images/wearables/smartwatch.png" alt="">
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
                                <img src="images/wearables/smartwatch.png" alt="">
                                <div class="proudct-box">
                                    <p>Smart Watch</p>
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
                                <img src="images/wearables/smartwatch.png" alt="">
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
                        <span >Remove All</span>
                    </div>

                </div><!-- -- end col -->

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
</body>

</html>
<?php
} else {
        echo "earbuds not found"; // This means no results were found
    }
} else {
    die("Query execution error: " . $stmt->error);
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>