<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Contact Us</title>

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

    <!-- --- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <!-- --header  -->
    <?php
     include("include/header.php");
    ?>
    <main>
        <div class="contact-page">
            <div class="row contact_us_page">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="images/contact.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="info">
                        <p><strong><i class="fa-regular fa-paper-plane" style="margin-right:10px;"></i>For Promotions:</strong></p>
                        <span><a href="mailto:admin@usafirstzone.com">admin@usafirstzone.com</a></span>
                    </div>
                    <div class="info">
                        <p><strong><i class="fa-regular fa-paper-plane" style="margin-right:10px;"></i>For affiliate/merchant partnerships:</strong></p>
                        <span><a href="mailto:admin@usafirstzone.com">admin@usafirstzone.com</a></span>
                    </div>
                    <div class="info">
                        <p><strong><i class="fa-regular fa-paper-plane" style="margin-right:10px;"></i>For website feedback:</strong></p>
                        <span><a
                                href="mailto:customersupport@usafirstzone.com">customersupport@usafirstzone.com</a></span>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <?php
   include("include/footer.php");
    ?>

</body>

</html>