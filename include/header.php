<header>
    <div class="row  header-section d-flex">
        <!-- <div class="col-lg-10 d-flex"> -->
        <div class="col-lg-3  col-md-3 col-sm-3 logo">
            <a href="index.php"><img src="images/logo-1.jpg" alt=""></a>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="top-section">
                <p>Wide-ranging Gadgets Discovery site in the USA</p>
                <div class="top-menu-section">
                    <ul>
                        <li><a href="mobiledetails.php">LATEST MOBILES </a></li>
                        <li><a href="mobiledetails.php">realme C53</a></li>
                        <li><a href="mobiledetails.php">realme 11 Pro</a></li>
                        <li><a href="mobiledetails.php" style="border: none;">Apple iPhone 15</a></li>
                    </ul>
                </div>
            </div>
            <!-- ---  search bar --- -->
            <div class="search-bar">
                <div class="search-menu">
                    <form action="">
                        <input type="text" placeholder="Search...">
                        <select name="" id="">
                            <option value="">All</option>
                            <option value="">Mobiles</option>
                            <option value="">Laptops</option>
                            <option value="">Cameras</option>
                            <option value="">Televisions</option>
                            <option value="">Wearables</option>
                        </select>
                        <button id="search">Search</button>
                    </form>
                </div>
                <div class="language">
                    <form action="">
                        <select name="" id="">
                            <option value="">English</option>
                            <option value="">French</option>
                            <option value="">spanish</option>
                        </select>
                    </form>
                </div>

                <div class="login-section">
                    <p><a href="login.php">Login</a> / <a href="signin.php">Sign up</a></p>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</header>

<!-- ------ mobile responsive header  ---- -->
<div class="header-menu">
    <div class=" header-menu-2">
        <div class="mobile-header">
            <div class=" toggle-button">
                <i class="fa-solid fa-bars" style="color: #fff;font-size: 24px;margin-top:12px;" id="toggle-menu"
                    onclick="sideMenu()"></i>
                <!-- ------- side menu-section -->
                <div class="menu-list-section" id="menu-list-section">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 side-logo">
                            <i class="fa-solid fa-chevron-left" style="font-size: 32px; margin-right: 10px;color: #000;"
                                id="close-menu" onclick="hideMenu()"></i><a href="index.php"><img
                                    src="images/logo-1.jpg" alt=""></a>
                        </div>
                        <!-- -----------  side-section   ---- -->
                        <div class="side-section">
                            <!-- --- mobiles ---- -->
                            <div class="col-lg-12 side-menu">
                                <ul>
                                    <li><a href="mobilefinder.php"><i class="fa-solid fa-mobile-screen-button"
                                                style="margin-right: 10px;"></i> All Phone</a></li>
                                    <li><a href=""><i class="fa-solid fa-scale-unbalanced"
                                                style="margin-right: 0px;"></i>
                                            Compare</a></li>
                                    <li><a href=""><i class="fa-solid fa-mobile-screen-button"
                                                style="margin-right: 10px;"></i> Upcoming</a></li>
                                    <li><a href=""><i class="fa-regular fa-comment" style="margin-right: 10px;"></i>
                                            Reviews</a></li>
                                </ul>
                            </div>
                            <!-- ----   mobiles    -->
                            <div class="col-lg-12 side-menu">
                                <ul>
                                    <li><a href=""><i class="fa-solid fa-mobile-screen-button"
                                                style="margin-right: 10px;"></i> Best Mobile</a></li>
                                    <li><a href=""><i class="fa-solid fa-mobile-screen-button"
                                                style="margin-right: 10px;"></i> Latest Mobile</a></li>
                                    <li><a href=""><i class="fa-solid fa-mobile-screen-button"
                                                style="margin-right: 10px;"></i> Phone Filder</a></li>

                                    <!-- ============  mobile brand ====== -->
                                    <li id="show-dropdown-1"><a href=""><i class="fa-solid fa-mobile-screen-button"
                                                style="margin-right: 10px;"></i> Mobiles by Brand</a>
                                        <i class="fa-solid fa-plus"></i>
                                    </li>
                                    <div class="sider-drop-down-menu  drop-down-1">
                                        <ul>
                                            <li><a href="">Poco</a></li>
                                            <li><a href="">Vivo</a></li>
                                            <li><a href="">Samsung</a></li>
                                            <li><a href="">Realme</a></li>
                                            <li><a href="">Iphone</a></li>
                                            <li><a href="">OnePluse</a></li>
                                            <li><a href="">Google</a></li>
                                            <li><a href="">Xiaomi</a></li>
                                            <li><a href="">Oppo</a></li>
                                            <li><a href="">Motorola</a></li>
                                        </ul>
                                    </div>
                                    <!-- =============mobile price =====   -->
                                    <li id="show-dropdown-2"><a href=""><i class="fa-solid fa-mobile-screen-button"
                                                style="margin-right: 10px;"></i> Mobiles by Price</a>
                                        <i class="fa-solid fa-plus"></i>
                                    </li>
                                    <div class="sider-drop-down-menu drop-down-2">
                                        <ul>
                                            <li><a href="">Under $100</a></li>
                                            <li><a href="">Under $200</a></li>
                                            <li><a href="">Under $300</a></li>
                                            <li><a href="">Under $400</a></li>
                                            <li><a href="">Under $500</a></li>
                                            <li><a href="">Under $600</a></li>
                                            <li><a href="">Between $200 - $250 </a></li>
                                            <li><a href="">Between $300 - $340 </a></li>
                                            <li><a href="">Between 1lakh - 1.5lakh </a></li>
                                            <li><a href="">More then 1.5lakh</a></li>
                                        </ul>
                                    </div>
                                    <!-- =============== Mobiles by Features    === -->
                                    <li id="show-dropdown-3"><a href=""><i class="fa-solid fa-mobile-screen-button"
                                                style="margin-right: 10px;"></i> Mobiles by Features</a>
                                        <i class="fa-solid fa-plus"></i>
                                    </li>
                                    <div class="sider-drop-down-menu  drop-down-3">
                                        <ul>
                                            <li><a href="">5G Mobile</a></li>
                                            <li><a href="">Best Cameras Phones</a></li>
                                            <li><a href="">Best Gaming Phones</a></li>
                                            <li><a href="">Keypad Mobiles</a></li>

                                        </ul>
                                    </div>
                                    <!-- --===== -->
                                </ul>
                            </div>

                            <!-- ---  Laptops  - -->
                            <div class="col-lg-12 side-menu">
                                <ul>
                                    <!-- ============  laptop brand ====== -->
                                    <li id="show-dropdown-4"><a href=""><i class="fa-solid fa-laptop"
                                                style="margin-right: 10px;"></i> Laptops</a>
                                        <i class="fa-solid fa-plus"></i>
                                    </li>
                                    <div class="sider-drop-down-menu  drop-down-4">
                                        <ul>
                                            <li><a href="">Laptop Price List</a></li>
                                            <li><a href="">Best Laptops</a></li>
                                            <li><a href="">Hp Laptops</a></li>
                                            <li><a href="">Dell Laptops</a></li>
                                            <li><a href="">Apple Laptops</a></li>
                                            <li><a href="">Lenovo Laptops</a></li>
                                            <li><a href="">i7 Laptops</a></li>
                                            <li><a href="">i5 Laptops</a></li>
                                            <li><a href="">Gaming Laptops</a></li>
                                            <li><a href="">Best Laptops Under 20,000</a></li>
                                            <li><a href="">Best Laptops Under 30,000</a></li>
                                            <li><a href="">Best Laptops Under 40,000</a></li>
                                            <li><a href="">Best Laptops Under 50,000</a></li>
                                            <li><a href="">View All Laptop</a></li>
                                        </ul>
                                    </div>

                                    <!-- =====  tvs brand    -->
                                    <li id="show-dropdown-5"><a href=""><i class="fa-solid fa-tv"
                                                style="margin-right: 10px;"></i> TVs</a>
                                        <i class="fa-solid fa-plus"></i>
                                    </li>
                                    <div class="sider-drop-down-menu  drop-down-5">
                                        <ul>
                                            <li><a href="">LED TV Price List</a></li>
                                            <li><a href="">Best TVs</a></li>
                                            <li><a href="">Smart TV</a></li>
                                            <li><a href="">OLED TV</a></li>
                                            <li><a href="">MI lED TV</a></li>
                                            <li><a href="">Sony LED TV</a></li>
                                            <li><a href="">Samsung LED V</a></li>
                                            <li><a href="">LG LED TV</a></li>
                                            <li><a href="">24 inch LED TV</a></li>
                                            <li><a href="">32 inch LED TV</a></li>
                                            <li><a href="">42 inch LED TV</a></li>
                                            <li><a href="">55 inch LED TV</a></li>
                                            <li><a href="">LED TV Under 10,000</a></li>
                                            <li><a href="">View All TVs</a></li>
                                        </ul>
                                    </div>

                                    <!-- =====  Wearables    -->
                                    <li id="show-dropdown-6"><a href=""><i class="fa-solid fa-headphones-simple"
                                                style="margin-right: 10px;"></i> Wearables</a>
                                        <i class="fa-solid fa-plus"></i>
                                    </li>
                                    <div class="sider-drop-down-menu  drop-down-6">
                                        <ul>
                                            <li><a href="">Samrt Watches</a></li>
                                            <li><a href="">Headphones</a></li>
                                            <li><a href="">View All Wearables</a></li>
                                        </ul>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <!----  side section  ---->
                    </div>
                </div> <!--  menu -lis-section end   --->
            </div>
            <div class=" logo-2">
                <a href=""><img src="images/logo-1.jpg" alt=""></a>
            </div>
            <div class="">
                <i class="fa-solid fa-magnifying-glass" style="color: #fff;font-size: 24px;margin-top:12px;"
                    id="show-searchbar" onclick="searchbar()"></i>
            </div>
        </div>
        <div class="col-lg-12 header-menu-form" id="header-menu-form">
            <!-- Keep the id="header-menu-form" here -->
            <form action="">
                <input type="text" placeholder="Search ........">
                <input type="button" value="Search">
            </form>
        </div>
    </div>
</div>

<!-- ---- product-menu -section  -->
<div class="product-menu row p-0">
    <div class="container menu-catagory">
        <ul>
            <li><a href="">Mobiles <i class="fa-solid fa-caret-down"></i></a>
                <div class="drop-down ">
                    <div class="row">
                        <div class="col-lg-6  drop-menu">
                            <h2>Mobiles</h2>
                            <p><a href="mobilefinder.php">Phone Finder</a></p>
                            <p><a href="mobilefinder.php">Best Mobiles</a></p>
                            <p><a href="mobilefinder.php">Latest Mobiles</a></p>
                            <p><a href="mobilefinder.php">Upcoming Mobiles</a></p>
                            <p><a href="">Mobile Price List</a></p>
                            <p><a href="">Smartphone Benchmarks</a></p>
                        </div>
                        <div class="col-lg-6 drop-menu">
                            <h2>Brand</h2>
                            <p><a href="">Realme Mobiles</a></p>
                            <p><a href="">Xiaomi Mobiles</a></p>
                            <p><a href="">Samsung Mobiles</a></p>
                            <p><a href="">Vivo Mobiles</a></p>
                            <p><a href="">OnePlus Mobiles</a></p>
                            <p><a href="">Apple Mobiles</a></p>
                        </div>
                    </div>
                </div>
                <div class="shadow"></div>
            </li>
            <li><a href="">Compare <i class="fa-solid fa-caret-down"></i></a>
                <div class="drop-down ">
                    <div class="row">
                        <div class="col-lg-4  drop-menu">
                            <h2>Mobiles</h2>
                            <p><a href="">Phone Finder</a></p>
                            <p><a href="">Best Mobiles</a></p>
                            <p><a href="">Latest Mobiles</a></p>
                            <p><a href="">Upcoming Mobiles</a></p>
                            <p><a href="">Mobile Price List</a></p>
                            <p><a href="">Smartphone Benchmarks</a></p>
                        </div>
                        <div class="col-lg-4 drop-menu">
                            <h2>Mobiles</h2>
                            <p><a href="">Realme Mobiles</a></p>
                            <p><a href="">Xiaomi Mobiles</a></p>
                            <p><a href="">Samsung Mobiles</a></p>
                            <p><a href="">Vivo Mobiles</a></p>
                            <p><a href="">OnePlus Mobiles</a></p>
                            <p><a href="">Apple Mobiles</a></p>

                        </div>
                        <div class="col-lg-4 drop-menu">
                            <h2>Mobiles</h2>
                            <p><a href=""> OPPO Mobiles</a></p>
                            <p><a href=""> IQOO Mobiles</a></p>
                            <p><a href=""> Infinix Mobiles</a></p>
                            <p><a href=""> POCO Mobiles</a></p>
                            <p><a href=""> Tecno Mobiles</a></p>
                        </div>
                    </div>
                </div>
                <div class="shadow"></div>
            </li>
            <li><a href="">Top 10 <i class="fa-solid fa-caret-down"></i></a>
                <div class="drop-down ">
                    <div class="row">
                        <div class="col-lg-12  drop-menu drop-menu-top-10">
                            <h2><a href="">Best Mobiles</a></h2>
                            <h2><a href="">Best Laptop</a></h2>
                            <h2><a href="">Best Cameras</a></h2>
                            <h2><a href="">Best Television</a></h2>
                            <h2><a href="">Best Earbuds</a></h2>
                            <h2><a href="">Best Smartwatches</a></h2>
                            <h2><a href="">Best Earphones</a></h2>
                            <h2><a href="">Best Headphones</a></h2>
                        </div>
                    </div>
                </div>
                <div class="shadow"></div>
            </li>
            <li><a href="mobilefinder.php">Upcoming Mobiles </a></li>
            <li><a href="television.php">Television </a></li>
            <li style="border-right: 0;"><a href="wearables.php">More <i class="fa-solid fa-caret-down"></i></a>
                <div class="drop-down ">
                    <div class="row">
                        <div class="col-lg-4  drop-menu">
                            <p><a href="blogs.php">Blogs</a></p>
                            <p><a href="">Stories</a></p>
                        </div>
                    </div>
                </div>
                <div class="shadow"></div>
            </li>
        </ul>
    </div> <!-- -- product menu end -->
</div>