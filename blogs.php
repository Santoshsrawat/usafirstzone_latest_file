<?php
include("admin/connection/config.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Blogs</title>

    <!-- ---css link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blogs.css">


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
        <div class="blogs">

            <div class="blog-section row ">

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <?php 
                        $sql = "SELECT * FROM blogs";
                         $data = mysqli_query($conn, $sql);
                        if ($data->num_rows > 0) {
                         // Output data for each row
                         if ($row = $data->fetch_assoc()) {
                     ?>
                    <div class="blog-left">
                        <!-- ---- first section   -->
                        <div class="first-section">
                            <img src="blogs_images/<?php echo $row['title_img']; ?>" alt="">
                            <h3><?php echo $row['title_name']; ?></h3>
                        </div>
                        <!-- --- second section   ---- -->
                        <div class="second-section">
                            <h3><?php echo $row['heading_1']; ?></h3>
                            <p><?php echo $row['description_1']; ?></p>
                            <img src="blogs_images/<?php echo $row['images_1']; ?>" alt="">
                        </div>

                        <!-- --- second section   ---- -->
                        <div class="second-section">
                            <h3><?php echo $row['heading_2']; ?></h3>
                            <p><?php echo $row['description_2']; ?></p>
                            <img src="blogs_images/<?php echo $row['images_2']; ?>" alt="">
                        </div>

                        <!-- --- second section   ---- -->
                        <div class="second-section">
                            <h3><?php echo $row['heading_3']; ?></h3>
                            <p><?php echo $row['description_3']; ?></p>
                            <img src="blogs_images/<?php echo $row['images_3']; ?>" alt="">
                        </div>

                        <!-- --- second section   ---- -->
                        <div class="second-section">
                            <h3><?php echo $row['heading_4']; ?></h3>
                            <p><?php echo $row['description_4']; ?></p>
                            <img src="blogs_images/<?php echo $row['images_4']; ?>" alt="">
                        </div>

                    </div>
                    <?php
                     }
                   }
                  ?>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">

                    <div class="blog-right">
                        <h3>Recent Posts</h3>
                        <div class="blogs-links">
                            <!-- =========== -->
                        <?php 
                         $sql = "SELECT * FROM blogs";
                         $data = mysqli_query($conn, $sql);
                         if ($data->num_rows > 0) {
                          // Output data for each row
                         while($row = $data->fetch_assoc()) {
                         ?>
                            <p><a href="blogs.php"><?php echo $row['blog_link'];?></a>
                            </p>
                        <?php
                             }
                           }
                          ?>
                        </div>
                    </div>
                    <!---- blog right ------->

                </div>

            </div> <!-- row end   --->


        </div>
        <!---- blogs end   ---->
    </main>


    <?php
    include("include/footer.php");
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

</body>

</html>