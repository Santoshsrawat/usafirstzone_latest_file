<?php
$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>
<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="index.php" target="_blank">
            <!-- <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> -->
            <span class="ms-1 font-weight-bold text-white"> PHP Ecommerce </span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'index.php' ? 'active bg-gradient-primary' : '';?> "
                    href="index.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> Dashboard </span>
                </a>
            </li>
            <!--  <li class="nav-item">
          <a class="nav-link text-white <?=$page == 'category.php' ? 'active bg-gradient-primary' : '';?> " href="category.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1"> All Categories </span>
          </a>
        </li> -->
            <!--  <li class="nav-item">
          <a class="nav-link text-white <?=$page == 'add-category.php' ? 'active bg-gradient-primary' : '';?> " href="add-category.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1"> Add Category </span>
          </a>
        </li> -->
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Products </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-android-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-android-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Android Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'android-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="android-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Android Products </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-iphone-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-iphone-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add iPhone Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'iphone-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="iphone-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All iPhone Products </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-laptop-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-laptop-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Laptop Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'laptop-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="laptop-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Laptop Products </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-camera-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-camera-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Camera Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'camera-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="camera-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Camera Products </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-television-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-television-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Television Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'television-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="television-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Television Products </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-smartwatches-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-smartwatches-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Smart Watches Product </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'smartwatch-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="smartwatch-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Smart Watches Products </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-earbud-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-earbud-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Earbuds Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'earbuds-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="earbuds-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Earbuds Products </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-headphones-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-headphones-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Headphones Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'headphone-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="headphone-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Headphone Products </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'add-earphone-product.php' ? 'active bg-gradient-primary' : '';?> "
                    href="add-earphone-product.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1"> Add Earphones Product </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'earphone-products.php' ? 'active bg-gradient-primary' : '';?> "
                    href="earphone-products.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> All Earphone Products </span>
                </a>
            </li>

            <!-- ------ -->
            <li class="nav-item">
                <a class="nav-link text-white <?=$page == 'blogform.php' ? 'active bg-gradient-primary' : '';?> "
                    href="blogform.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1"> Blogs Form </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="../logout.php"> Log Out </a>
        </div>
    </div>
</aside>