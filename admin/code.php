<?php
session_start();
include '../config/dbcon.php';
include '../functions/myFunction.php';

// ********************* ADD CATEGORY ********************
if (isset($_POST['add_category_btn'])) {
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1' : '0';
    $popular = isset($_POST['popular']) ? '1' : '0';

    $image = $_FILES['image']['name'];
    $path = "../uploads";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $cate_query = "INSERT INTO `categories`(`name`, `slug`, `description`, `status`,	`popular`, `image`,	`meta_title`, `meta_description`, `meta_keywords`)
			VALUES('$name', '$slug', '$description', '$status', '$popular', '$filename',
			'$meta_title', '$meta_description', '$meta_keywords')";

    $cate_query_run = mysqli_query($conn, $cate_query);

    if ($cate_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        redirect("add-category.php", "Category Added Successfully");
    } else {
        redirect("add-category.php", "Something Went Wrong!");
    }
}

// ********************* UPDATE CATEGORY ********************
else if (isset($_POST['update_category_btn'])) {
    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $status = isset($_POST['status']) ? '1' : '0';
    $popular = isset($_POST['popular']) ? '1' : '0';

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    $path = "../uploads";

    if ($new_image != "") {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $update_query = "UPDATE `categories` SET `name`= '$name', `slug` = '$slug',
		`description` = '$description', `status` = '$status', `popular` = '$popular',
		 `image` = '$update_filename', `meta_title` = '$meta_title',
		 `meta_description` = '$meta_description', `meta_keywords` = '$meta_keywords'
		 WHERE `id` = '$category_id' ";
    $update_query_run = mysqli_query($conn, $update_query);

    if ($update_query_run) {
        if ($new_image != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../uploads/" . $old_image)) {
                unlink("../uploads/" . $old_image);
            }
        }
        redirect("edit-category.php?id=$category_id", "Category Updated Successfully");
    } else {
        redirect("edit-category.php?id=$category_id", "Something Went Wrong");
    }
}

// ********************* DELETE CATEGORY ********************
else if (isset($_POST['delete_category_btn'])) {

    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);

    $category_query = "SELECT * FROM `categories` WHERE `id` = '$category_id' ";
    $category_query_run = mysqli_query($conn, $category_query);
    $category_data = mysqli_fetch_array($category_query_run);
    $image = $category_data['image'];

    $delete_query = "DELETE FROM `categories` WHERE `id` = '$category_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);

    if ($delete_query_run) {

        if (file_exists("../uploads/" . $image)) {
            unlink("../uploads/" . $image);
        }
        redirect("category.php", "Category Deleted Successfully.");
    } else {
        redirect("category.php", "Something Went Wrong!");
    }
}

// ********************* ADD PRODUCTS ********************

else if (isset($_POST['add_product_btn'])) {
    $category_id = $_POST['category_id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $range = $_POST['range'];
    $small_description = $_POST['small_description'];
    $description = $_POST['description'];
    $affiliate_links = $_POST['affiliate_links'];
    $status = isset($_POST['status']) ? '1' : '0';
    $trending = isset($_POST['trending']) ? '1' : '0';
    $upcoming = isset($_POST['upcoming']) ? '1' : '0';
    $image = $_FILES['image']['name'];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];

    $path = "../product_images";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = rand(10, 999) . '.' . $image_ext;
    $image_ext1 = pathinfo($image1, PATHINFO_EXTENSION);
    $filename1 = rand(10, 999) . '.' . $image_ext1;
    $image_ext2 = pathinfo($image2, PATHINFO_EXTENSION);
    $filename2 = rand(10, 999) . '.' . $image_ext2;
    $image_ext3 = pathinfo($image3, PATHINFO_EXTENSION);
    $filename3 = rand(10, 999) . '.' . $image_ext3;

    $product_query = "INSERT INTO `products`(`category_id`,	`brand`, `model`,
			`price`, `range`, `small_description`, `description`, `image`, `image1`, `image2`,
			`image3`, `affiliate_links`, `status`, `trending`, `upcoming`) VALUES
			('$category_id', '$brand', '$model', '$price', '$range', '$small_description',
			'$description', '$filename', '$filename1', '$filename2', '$filename3',
			 '$affiliate_links', '$status', '$trending', '$upcoming')";

    $product_query_run = mysqli_query($conn, $product_query);

    if ($product_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $filename1);
        move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $filename2);
        move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $filename3);

        redirect("add-product.php", "Product Added Successfully");
    } else {
        redirect("add-product.php", "Something Went Wrong!");
    }

}

// ********************* ADD ANDROID PRODUCTS  ********************

else if (isset($_POST['add_android_product_btn'])) {
    $affiliate_links = $_POST['affiliate_links'];
    $mobile_category = $_POST['mobile_category'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $operating_system = $_POST['operating_system'];
    $custom_ui = $_POST['custom_ui'];
    $chipset = $_POST['chipset'];
    $cpu = $_POST['cpu'];
    $fabrication = $_POST['fabrication'];
    $graphics = $_POST['graphics'];
    $ram = $_POST['ram'];
    $ram_type = $_POST['ram_type'];
    $internal_memory = $_POST['internal_memory'];
    $storage_type = $_POST['storage_type'];
    $display_type = $_POST['display_type'];
    $screen_size = $_POST['screen_size'];
    $resolution = $_POST['resolution'];
    $screen_protection = $_POST['screen_protection'];
    $brightness = $_POST['brightness'];
    $refresh_rate = $_POST['refresh_rate'];
    $weight = $_POST['weight'];
    $colours = $_POST['colours'];
    $fingerprint_sensor_position = $_POST['fingerprint_sensor_position'];
    $fingerprint_sensor_type = $_POST['fingerprint_sensor_type'];
    $other_sensors = $_POST['other_sensors'];
    $main_camera_setup = $_POST['main_camera_setup'];
    $main_resolution = $_POST['main_resolution'];
    $ois = $_POST['ois'];
    $image_resolution = $_POST['image_resolution'];
    $main_video_recording = $_POST['main_video_recording'];
    $front_camera_setup = $_POST['front_camera_setup'];
    $front_resolution = $_POST['front_resolution'];
    $front_video_recording = $_POST['front_video_recording'];
    $capacity = $_POST['capacity'];
    $type = $_POST['type'];
    $quick_charging = $_POST['quick_charging'];
    $usb_type_C = $_POST['usb_type_C'];
    $sim_slots = $_POST['sim(slots)'];
    $sim_size = $_POST['sim_size'];
    $network_support = $_POST['network_support'];
    $sim = $_POST['sim'];
    $connectivity_technology = $_POST['connectivity_technology'];
    $wifi = $_POST['wifi'];
    $wifi_features = $_POST['wifi_features'];
    $bluetooth = $_POST['bluetooth'];
    $gps = $_POST['gps'];
    $audio_jack = $_POST['audio_jack'];
    $audio_features = $_POST['audio_features'];

    $image = $_FILES['image']['name'];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];

    $path = "../android_images";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = rand(10, 999) . '.' . $image_ext;
    $image_ext1 = pathinfo($image1, PATHINFO_EXTENSION);
    $filename1 = rand(10, 999) . '.' . $image_ext1;
    $image_ext2 = pathinfo($image2, PATHINFO_EXTENSION);
    $filename2 = rand(10, 999) . '.' . $image_ext2;
    $image_ext3 = pathinfo($image3, PATHINFO_EXTENSION);
    $filename3 = rand(10, 999) . '.' . $image_ext3;

    $android_product_query = "INSERT INTO `android`(`affiliate_links`, `image`, `image1`,`image2`, `image3`, `mobile_category`, `brand`, `model`,
	        `operating_system`, `custom_ui`, `chipset`, `cpu`, `fabrication`, `graphics`,
	        `ram`, `ram_type`, `internal_memory`, `storage_type`, `display_type`, `screen_size`,
	        `resolution`, `screen_protection`, `brightness`, `refresh_rate`, `weight`, `colours`
	        , `fingerprint_sensor_position`, `figerprint_sensor_type`, `other_sensors`,
	        `main_camera_setup`, `main_resolution`, `ois`, `image_resolution`,
	        `main_video_recording`, `front_camera_setup`, `front_resolution`,
	        `front_video_recording`, `capacity`, `type`, `quick_charging`, `usb_type_C`,
	        `sim(slots)`, `sim_size`, `network_support`, `sim`, `connectivity_technology`,
	        `wifi`, `wifi_features`, `bluetooth`, `gps`, `audio_jack`, `audio_features`,
	        `images`) VALUES ('$affiliate_links', '$image', '$image1', '$image2', '$image3',
	        '$mobile_category', '$brand', '$model', '$operating_system',
	         '$custom_ui', '$chipset', '$cpu', '$fabrication', '$graphics', '$ram',
	        '$ram_type', '$internal_memory', '$storage_type', '$display_type',
	         '$screen_size', '$resolution', '$screen_protection', '$brightness',
	         '$refresh_rate', '$weight', '$colours', '$fingerprint_sensor_position',
	         '$fingerprint_sensor_type', '$other_sensors', '$main_camera_setup',
	         '$main_resolution', '$ois', '$image_resolution', '$main_video_recording',
	         '$front_camera_setup', '$front_resolution', '$front_video_recording', '$capacity',
	         '$type', '$quick_charging', '$usb_type_C', '$sim_slots', '$sim_size',
	         '$network_support', '$sim', '$connectivity_technology', '$wifi', '$wifi_features',
	         '$bluetooth', '$gps', '$audio_jack', '$audio_features', '$imageString')";

    $android_product_query_run = mysqli_query($conn, $android_product_query);

    if ($android_product_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $filename1);
        move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $filename2);
        move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $filename3);
        redirect("add-android-product.php", "Product Added Successfully");
    } else {
        redirect("add-android-product.php", "Something Went Wrong!");
    }

}

// ********************* UPDATE ANDROID PRODUCTS ********************
else if (isset($_POST['update_android_product_btn'])) {
    $affiliate_links = $_POST['affiliate_links'];
    $android_product_id = $_POST['android_product_id'];
    $mobile_category = $_POST['mobile_category'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $operating_system = $_POST['operating_system'];
    $custom_ui = $_POST['custom_ui'];
    $chipset = $_POST['chipset'];
    $cpu = $_POST['cpu'];
    $fabrication = $_POST['fabrication'];
    $graphics = $_POST['graphics'];
    $ram = $_POST['ram'];
    $ram_type = $_POST['ram_type'];
    $internal_memory = $_POST['internal_memory'];
    $storage_type = $_POST['storage_type'];
    $display_type = $_POST['display_type'];
    $screen_size = $_POST['screen_size'];
    $resolution = $_POST['resolution'];
    $screen_protection = $_POST['screen_protection'];
    $brightness = $_POST['brightness'];
    $refresh_rate = $_POST['refresh_rate'];
    $weight = $_POST['weight'];
    $colours = $_POST['colours'];
    $fingerprint_sensor_position = $_POST['fingerprint_sensor_position'];
    $fingerprint_sensor_type = $_POST['fingerprint_sensor_type'];
    $other_sensors = $_POST['other_sensors'];
    $main_camera_setup = $_POST['main_camera_setup'];
    $main_resolution = $_POST['main_resolution'];
    $ois = $_POST['ois'];
    $image_resolution = $_POST['image_resolution'];
    $main_video_recording = $_POST['main_video_recording'];
    $front_camera_setup = $_POST['front_camera_setup'];
    $front_resolution = $_POST['front_resolution'];
    $front_video_recording = $_POST['front_video_recording'];
    $capacity = $_POST['capacity'];
    $type = $_POST['type'];
    $quick_charging = $_POST['quick_charging'];
    $usb_type_C = $_POST['usb_type_C'];
    $sim_slots = $_POST['sim(slots)'];
    $sim_size = $_POST['sim_size'];
    $network_support = $_POST['network_support'];
    $sim = $_POST['sim'];
    $connectivity_technology = $_POST['connectivity_technology'];
    $wifi = $_POST['wifi'];
    $wifi_features = $_POST['wifi_features'];
    $bluetooth = $_POST['bluetooth'];
    $gps = $_POST['gps'];
    $audio_jack = $_POST['audio_jack'];
    $audio_features = $_POST['audio_features'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    $path = "../android_images";

    if ($new_image != "") {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = rand(10, 999) . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $new_image1 = $_FILES['image1']['name'];
    $old_image1 = $_POST['old_image1'];

    if ($new_image1 != "") {
        // $update_filename = $new_image;
        $image_ext1 = pathinfo($new_image1, PATHINFO_EXTENSION);
        $update_filename1 = rand(10, 999) . '.' . $image_ext1;
    } else {
        $update_filename1 = $old_image1;
    }

    $new_image2 = $_FILES['image2']['name'];
    $old_image2 = $_POST['old_image2'];

    if ($new_image2 != "") {
        // $update_filename = $new_image;
        $image_ext2 = pathinfo($new_image2, PATHINFO_EXTENSION);
        $update_filename2 = rand(10, 999) . '.' . $image_ext2;
    } else {
        $update_filename2 = $old_image2;
    }

    $new_image3 = $_FILES['image3']['name'];
    $old_image3 = $_POST['old_image3'];

    if ($new_image3 != "") {
        // $update_filename = $new_image;
        $image_ext3 = pathinfo($new_image3, PATHINFO_EXTENSION);
        $update_filename3 = rand(10, 999) . '.' . $image_ext3;
    } else {
        $update_filename3 = $old_image3;
    }

    $update_android_query = "UPDATE `android` SET `affiliate_links`= '$affiliate_links',
	        `image`= '$update_filename', `image1`= '$update_filename1',
	         `image2`= '$update_filename2', `image3`= '$update_filename3', `mobile_category` = '$mobile_category'
	        , `brand`= '$brand', `model` = '$model', `operating_system` = '$operating_system',
	        `custom_ui` = '$custom_ui', `chipset` = '$chipset', `cpu` = '$cpu',
	        `fabrication` = '$fabrication', `graphics` = '$graphics',`ram` = '$ram',
	        `ram_type` = '$ram_type', `internal_memory` = '$internal_memory',`storage_type` =
	        '$storage_type', `display_type` = '$display_type',`screen_size` = '$screen_size',
	         `resolution` = '$resolution', `screen_protection` = '$screen_protection',
	         `brightness` = '$brightness', `refresh_rate` = '$refresh_rate', `weight` =
	         '$weight', `colours` = '$colours',
	         `fingerprint_sensor_position` = '$fingerprint_sensor_position',
	         `figerprint_sensor_type` = '$fingerprint_sensor_type',
	         `other_sensors` = '$other_sensors', `main_camera_setup` = '$main_camera_setup',
	         `main_resolution` = '$main_resolution', `ois` = '$ois',
	         `image_resolution` = '$image_resolution', `main_video_recording` =
	         '$main_video_recording', `front_camera_setup` = '$front_camera_setup',
	         `front_resolution` = '$front_resolution', `front_video_recording` =
	         '$front_video_recording', `capacity` = '$capacity', `type` = '$type',
	         `quick_charging` = '$quick_charging', `usb_type_C` = '$usb_type_C',
	         `sim(slots)` = '$sim_slots', `sim_size` = '$sim_size',
	         `network_support` = '$network_support', `sim` = '$sim',
	         `connectivity_technology` = '$connectivity_technology', `wifi` = '$wifi',
	         `wifi_features` = '$wifi_features', `bluetooth` = '$bluetooth',
	         `gps` = '$gps', `audio_jack` = '$audio_jack', `audio_features` = '$audio_features' WHERE `id` = '$android_product_id' ";

    $update_android_query_run = mysqli_query($conn, $update_android_query);

    if ($update_android_query_run) {

        if ($new_image != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../android_images/" . $old_image)) {
                unlink("../android_images/" . $old_image);
            }
        }

        if ($new_image1 != "") {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $update_filename1);
            if (file_exists("../android_images/" . $old_image1)) {
                unlink("../android_images/" . $old_image1);
            }
        }

        if ($new_image2 != "") {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $update_filename2);
            if (file_exists("../android_images/" . $old_image2)) {
                unlink("../android_images/" . $old_image2);
            }
        }

        if ($new_image3 != "") {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $update_filename3);
            if (file_exists("../android_images/" . $old_image3)) {
                unlink("../android_images/" . $old_image3);
            }
        }
        redirect("edit-android-product.php?id=$android_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-android-product.php?id=$android_product_id", "Something Went Wrong");
    }
}

// ********************* DELETE ANDROID PRODUCTS ********************
else if (isset($_POST['delete_android_product_btn'])) {
    $android_product_id = mysqli_real_escape_string($conn, $_POST['android_product_id']);

    $android_query = "SELECT * FROM `android` WHERE `id` = '$android_product_id'";
    $android_query_run = mysqli_query($conn, $android_query);
    $android_data = mysqli_fetch_array($android_query_run);

    // Get an array of image filenames associated with the product
    $images = explode(',', $android_data['images']);

    // Delete each image file
    foreach ($images as $image) {
        $imagePath = "../uploads/" . trim($image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Delete the product from the database
    $delete_query = "DELETE FROM `android` WHERE `id` = '$android_product_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);

    if ($delete_query_run) {
        redirect("android-products.php", "Product Deleted Successfully.");
    } else {
        redirect("android-products.php", "Something Went Wrong!");
    }
}

// ********************* ADD IPHONE PRODUCTS  ********************

else if (isset($_POST['add_iphone_product_btn'])) {

    $mobile_category = $_POST['mobile_category'];
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $chipset = $_POST['chipset'];
    $cpu = $_POST['cpu'];
    $architecture = $_POST['architecture'];
    $fabrication = $_POST['fabrication'];
    $graphics = $_POST['graphics'];
    $ram = $_POST['ram'];
    $ram_type = $_POST['ram_type'];
    $internal_memory = $_POST['internal_memory'];
    $expandable_memory = $_POST['expandable_memory'];
    $display_type = $_POST['display_type'];
    $screen_size = $_POST['screen_size'];
    $resolution = $_POST['resolution'];
    $pixel_density = $_POST['pixel_density'];
    $screen_body_ratio = $_POST['screen_body_ratio'];
    $screen_protection = $_POST['screen_protection'];
    $brightness = $_POST['brightness'];
    $HDR10 = $_POST['HDR10/HDR+'];
    $refresh_rate = $_POST['refresh_rate'];
    $waterproof = $_POST['waterproof'];
    $ruggedness = $_POST['ruggedness'];
    $colours = $_POST['colours'];
    $main_camera_setup = $_POST['main_camera_setup'];
    $main_resolution = $_POST['main_resolution'];
    $ois = $_POST['ois'];
    $image_resolution = $_POST['image_resolution'];
    $main_video_recording = $_POST['main_video_recording'];
    $camera_features = $_POST['camera_features'];
    $front_camera_setup = $_POST['front_camera_setup'];
    $front_resolution = $_POST['front_resolution'];
    $front_video_recording = $_POST['front_video_recording'];
    $capacity = $_POST['capacity'];
    $type = $_POST['type'];
    $wireless_charging = $_POST['wireless_charging'];
    $quick_charging = $_POST['quick_charging'];
    $sim_slots = $_POST['sim(slots)'];
    $sim_size = $_POST['sim_size'];
    $network_support = $_POST['network_support'];
    $sim1_5G_bands = $_POST['sim1_5G_bands'];
    $sim1_4G_bands = $_POST['sim1_4G_bands'];
    $sim1_3G_bands = $_POST['sim1_3G_bands'];
    $sim1_2G_bands = $_POST['sim1_2G_bands'];
    $sim1_gprs = $_POST['sim1_gprs'];
    $sim1_edge = $_POST['sim1_edge'];
    $sim2_5G_bands = $_POST['sim2_5G_bands'];
    $sim2_4G_bands = $_POST['sim2_4G_bands'];
    $sim2_3G_bands = $_POST['sim2_3G_bands'];
    $sim2_2G_bands = $_POST['sim2_2G_bands'];
    $sim2_gprs = $_POST['sim2_gprs'];
    $sim2_edge = $_POST['sim2_edge'];
    $wifi = $_POST['wifi'];
    $wifi_features = $_POST['wifi_features'];
    $bluetooth = $_POST['bluetooth'];
    $gps = $_POST['gps'];
    $audio_jack = $_POST['audio_jack'];
    $audio_features = $_POST['audio_features'];

    $images = array();
    $path = "../uploads"; // Directory where images will be stored

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image = $_FILES['images']['name'][$key];
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = rand(10, 999) . '.' . $image_ext;
        $targetPath = $path . '/' . $filename;

        if (move_uploaded_file($tmp_name, $targetPath)) {
            $images[] = $filename; // Store filenames for database insertion
        }
    }

    if ($brand != "" && $model != "" && !empty($images)) {
        $imageString = implode(', ', $images);

        $iphone_product_query = "INSERT INTO `iphone`(`mobile_category`, `brand`, `model`,
	        `chipset`, `cpu`, `architecture`, `fabrication`, `graphics`, `ram`, `ram_type`,
	        `internal_memory`, `expandable_memory`, `display_type`, `screen_size`, `resolution`,
	        `pixel_density`, `screen_body_ratio`, `screen_protection`, `brightness`,
	        `HDR10/HDR+`, `refresh_rate`, `waterproof`, `ruggedness`, `colours`,
	        `main_camera_setup`, `main_resolution`, `ois`, `image_resolution`,
	        `main_video_recording`, `camera_features`, `front_camera_setup`, `front_resolution`
	        , `front_video_recording`, `capacity`, `type`, `wireless_charging`, `quick_charging`,
	         `sim(slots)`, `sim_size`, `network_support`, `sim1_5G_bands`, `sim1_4G_bands`,
	         `sim1_3G_bands`, `sim1_2G_bands`, `sim1_gprs`, `sim1_edge`, `sim2_5G_bands`,
	         `sim2_4G_bands`, `sim2_3G_bands`, `sim2_2G_bands`, `sim2_gprs`, `sim2_edge`,
	         `wifi`, `wifi_features`, `bluetooth`, `gps`, `audio_jack`, `audio_features`,`affiliate_links`,
	         `images`) VALUES ('$mobile_category',
	   		 '$brand', '$model', '$chipset', '$cpu', '$architecture',
	   		 '$fabrication', '$graphics', '$ram', '$ram_type', '$internal_memory',
	   		 '$expandable_memory', '$display_type', '$screen_size', '$resolution',
	   		 '$pixel_density', '$screen_body_ratio', '$screen_protection', '$brightness',
	   		  '$HDR10', '$refresh_rate', '$waterproof', '$ruggedness', '$colours',
	   		  '$main_camera_setup', '$main_resolution', '$ois', '$image_resolution',
	   		  '$main_video_recording', '$camera_features', '$front_camera_setup',
	   		  '$front_resolution', '$front_video_recording', '$capacity',
	          '$type', '$wireless_charging', '$quick_charging', '$sim_slots', '$sim_size',
	          '$network_support', '$sim1_5G_bands', '$sim1_4G_bands', '$sim1_3G_bands',
	          '$sim1_2G_bands', '$sim1_gprs', '$sim1_edge', '$sim2_5G_bands',
	          '$sim2_4G_bands', '$sim2_3G_bands', '$sim2_2G_bands', '$sim2_gprs', '$sim2_edge',
	          '$wifi', '$wifi_features', '$bluetooth','$affiliate_links'
	         '$gps', '$audio_jack', '$audio_features', '$imageString')";

        $iphone_product_query_run = runQuery($conn, $iphone_product_query);

        if ($iphone_product_query_run) {
            redirect("add-iphone-product.php", "Product Added Successfully");
        } else {
            redirect("add-iphone-product.php", "Something Went Wrong!");
        }

    } else {
        redirect("add-iphone-product.php", "All fields are required");
    }
}

// ********************* UPDATE IPHONE PRODUCTS ********************

else if (isset($_POST['update_iphone_product_btn'])) {
    $iphone_product_id = $_POST['iphone_product_id'];
    $affiliate_links = $_POST['affiliate_links'];
    $mobile_category = $_POST['mobile_category'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $chipset = $_POST['chipset'];
    $cpu = $_POST['cpu'];
    $architecture = $_POST['architecture'];
    $fabrication = $_POST['fabrication'];
    $graphics = $_POST['graphics'];
    $ram = $_POST['ram'];
    $ram_type = $_POST['ram_type'];
    $internal_memory = $_POST['internal_memory'];
    $expandable_memory = $_POST['expandable_memory'];
    $display_type = $_POST['display_type'];
    $screen_size = $_POST['screen_size'];
    $resolution = $_POST['resolution'];
    $pixel_density = $_POST['pixel_density'];
    $screen_body_ratio = $_POST['screen_body_ratio'];
    $screen_protection = $_POST['screen_protection'];
    $brightness = $_POST['brightness'];
    $HDR10 = $_POST['HDR10/HDR+'];
    $refresh_rate = $_POST['refresh_rate'];
    $waterproof = $_POST['waterproof'];
    $ruggedness = $_POST['ruggedness'];
    $colours = $_POST['colours'];
    $main_camera_setup = $_POST['main_camera_setup'];
    $main_resolution = $_POST['main_resolution'];
    $ois = $_POST['ois'];
    $image_resolution = $_POST['image_resolution'];
    $main_video_recording = $_POST['main_video_recording'];
    $camera_features = $_POST['camera_features'];
    $front_camera_setup = $_POST['front_camera_setup'];
    $front_resolution = $_POST['front_resolution'];
    $front_video_recording = $_POST['front_video_recording'];
    $capacity = $_POST['capacity'];
    $type = $_POST['type'];
    $wireless_charging = $_POST['wireless_charging'];
    $quick_charging = $_POST['quick_charging'];
    $sim_slots = $_POST['sim(slots)'];
    $sim_size = $_POST['sim_size'];
    $network_support = $_POST['network_support'];
    $sim1_5G_bands = $_POST['sim1_5G_bands'];
    $sim1_4G_bands = $_POST['sim1_4G_bands'];
    $sim1_3G_bands = $_POST['sim1_3G_bands'];
    $sim1_2G_bands = $_POST['sim1_2G_bands'];
    $sim1_gprs = $_POST['sim1_gprs'];
    $sim1_edge = $_POST['sim1_edge'];
    $sim2_5G_bands = $_POST['sim2_5G_bands'];
    $sim2_4G_bands = $_POST['sim2_4G_bands'];
    $sim2_3G_bands = $_POST['sim2_3G_bands'];
    $sim2_2G_bands = $_POST['sim2_2G_bands'];
    $sim2_gprs = $_POST['sim2_gprs'];
    $sim2_edge = $_POST['sim2_edge'];
    $wifi = $_POST['wifi'];
    $wifi_features = $_POST['wifi_features'];
    $bluetooth = $_POST['bluetooth'];
    $gps = $_POST['gps'];
    $audio_jack = $_POST['audio_jack'];
    $audio_features = $_POST['audio_features'];

    $path = "../uploads"; // Directory where images will be stored

    // Check if new images are selected
    if (isset($_FILES['images']) && !empty(array_filter($_FILES['images']['name']))) {
        $images = array();
        $new_images = $_FILES['images']['name']; // New image filenames
        $update_images = array();

        foreach ($new_images as $key => $new_image) {
            if ($new_image != "") {
                $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
                $update_image_filename = rand(10, 999) . '.' . $image_ext;
                move_uploaded_file($_FILES['images']['tmp_name'][$key], $path . '/' . $update_image_filename);
                $update_images[] = $update_image_filename;
            }
        }

        // Combine old and new image filenames
        $updated_image_filenames = implode(', ', $update_images);

        // Retrieve old image filenames from the database
        $old_image_filenames_query = "SELECT `images` FROM `iphone` WHERE `id` =
		    '$iphone_product_id'";
        $old_image_filenames_result = mysqli_query($conn, $old_image_filenames_query);

        if ($old_image_filenames_result && mysqli_num_rows($old_image_filenames_result) > 0) {
            $row = mysqli_fetch_assoc($old_image_filenames_result);
            $old_image_filenames = explode(', ', $row['images']);

            // Delete old images that are not in the updated list
            foreach ($old_image_filenames as $old_image_filename) {
                if (!in_array($old_image_filename, $update_images) && file_exists($path . '/' . $old_image_filename)) {
                    unlink($path . '/' . $old_image_filename);
                }
            }
        }

        $update_iphone_query = "UPDATE `iphone` SET `mobile_category` = '$mobile_category',
	         `brand`= '$brand', `model` = '$model',`affiliate_links`='$affiliate_links',
	        `chipset` = '$chipset', `cpu` = '$cpu', `architecture` = '$architecture',
	         `fabrication` = '$fabrication', `graphics` = '$graphics', `ram` = '$ram',
	         `ram_type` = '$ram_type', `internal_memory` = '$internal_memory',
	         `expandable_memory` = '$expandable_memory', `display_type` = '$display_type',
	         `screen_size` = '$screen_size', `resolution` = '$resolution', `pixel_density` =
	         '$pixel_density', `screen_body_ratio` = '$screen_body_ratio', `screen_protection` =
	         '$screen_protection', `brightness` = '$brightness', `HDR10/HDR+` = '$HDR10',
	          `refresh_rate` = '$refresh_rate', `waterproof` = '$waterproof', `ruggedness` =
	          '$ruggedness', `colours` = '$colours', `main_camera_setup` = '$main_camera_setup',
	         `main_resolution` = '$main_resolution', `ois` = '$ois',
	         `image_resolution` = '$image_resolution', `main_video_recording` =
	         '$main_video_recording', `camera_features` = '$camera_features',
	         `front_camera_setup` = '$front_camera_setup', `front_resolution` = '$front_resolution',
	          `front_video_recording` = '$front_video_recording', `capacity` = '$capacity',
	          `type` = '$type', `wireless_charging` = '$wireless_charging', `quick_charging` =
	          '$quick_charging', `sim(slots)` = '$sim_slots', `sim_size` = '$sim_size',
	          `network_support` = '$network_support', `sim1_5G_bands` = '$sim1_5G_bands',
	          `sim1_4G_bands` = '$sim1_4G_bands', `sim1_3G_bands` = '$sim1_3G_bands',
	          `sim1_2G_bands` = '$sim1_2G_bands', `sim1_gprs` = '$sim1_gprs', `sim1_edge` =
	          '$sim1_edge', `sim2_5G_bands` = '$sim2_5G_bands', `sim2_4G_bands` =
	         '$sim2_4G_bands', `sim2_3G_bands` = '$sim2_3G_bands', `sim2_2G_bands` =
	         '$sim2_2G_bands', `sim2_gprs` = '$sim2_gprs', `sim2_edge` = '$sim2_edge',
	         `wifi` = '$wifi', `wifi_features` = '$wifi_features', `bluetooth` = '$bluetooth',
	         `gps` = '$gps', `audio_jack` = '$audio_jack', `audio_features` = '$audio_features',
	         `images` = '$updated_image_filenames' WHERE `id` = '$iphone_product_id' ";
    } else {
        // No new images selected, only update other fields
        $update_iphone_query = "UPDATE `iphone` SET `mobile_category` = '$mobile_category',
	         `brand`= '$brand', `model` = '$model',
	        `chipset` = '$chipset', `cpu` = '$cpu', `architecture` = '$architecture',`affiliate_links`='$affiliate_links',
	         `fabrication` = '$fabrication', `graphics` = '$graphics', `ram` = '$ram',
	         `ram_type` = '$ram_type', `internal_memory` = '$internal_memory',
	         `expandable_memory` = '$expandable_memory', `display_type` = '$display_type',
	         `screen_size` = '$screen_size', `resolution` = '$resolution', `pixel_density` =
	         '$pixel_density', `screen_body_ratio` = '$screen_body_ratio', `screen_protection` =
	         '$screen_protection', `brightness` = '$brightness', `HDR10/HDR+` = '$HDR10',
	          `refresh_rate` = '$refresh_rate', `waterproof` = '$waterproof', `ruggedness` =
	          '$ruggedness', `colours` = '$colours', `main_camera_setup` = '$main_camera_setup',
	         `main_resolution` = '$main_resolution', `ois` = '$ois',
	         `image_resolution` = '$image_resolution', `main_video_recording` =
	         '$main_video_recording', `camera_features` = '$camera_features', `front_camera_setup` =
	          '$front_camera_setup', `front_resolution` = '$front_resolution',
	          `front_video_recording` = '$front_video_recording', `capacity` = '$capacity',
	          `type` = '$type', `wireless_charging` = '$wireless_charging', `quick_charging` =
	          '$quick_charging', `sim(slots)` = '$sim_slots', `sim_size` = '$sim_size',
	          `network_support` = '$network_support', `sim1_5G_bands` = '$sim1_5G_bands',
	          `sim1_4G_bands` = '$sim1_4G_bands', `sim1_3G_bands` = '$sim1_3G_bands',
	          `sim1_2G_bands` = '$sim1_2G_bands', `sim1_gprs` = '$sim1_gprs', `sim1_edge` =
	          '$sim1_edge',`sim2_5G_bands` = '$sim2_5G_bands', `sim2_4G_bands` =
	         '$sim2_4G_bands', `sim2_3G_bands` = '$sim2_3G_bands', `sim2_2G_bands` =
	         '$sim2_2G_bands', `sim2_gprs` = '$sim2_gprs', `sim2_edge` = '$sim2_edge',
	         `wifi` = '$wifi', `wifi_features` = '$wifi_features', `bluetooth` = '$bluetooth',
	         `gps` = '$gps', `audio_jack` = '$audio_jack', `audio_features` = '$audio_features'
	         WHERE `id` = '$iphone_product_id' ";
    }

    $update_iphone_query_run = mysqli_query($conn, $update_iphone_query);

    if ($update_iphone_query_run) {
        redirect("edit-iphone-product.php?id=$iphone_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-iphone-product.php?id=$iphone_product_id", "Something Went Wrong");
    }
}

// ********************* DELETE IPHONE PRODUCTS ********************
else if (isset($_POST['delete_iphone_product_btn'])) {
    $iphone_product_id = mysqli_real_escape_string($conn, $_POST['iphone_product_id']);

    $iphone_query = "SELECT * FROM `iphone` WHERE `id` = '$iphone_product_id'";
    $iphone_query_run = mysqli_query($conn, $iphone_query);
    $iphone_data = mysqli_fetch_array($iphone_query_run);

    // Get an array of image filenames associated with the product
    $images = explode(',', $iphone_data['images']);

    // Delete each image file
    foreach ($images as $image) {
        $imagePath = "../uploads/" . trim($image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Delete the product from the database
    $delete_query = "DELETE FROM `iphone` WHERE `id` = '$iphone_product_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);

    if ($delete_query_run) {
        redirect("iphone-products.php", "Product Deleted Successfully.");
    } else {
        redirect("iphone-products.php", "Something Went Wrong!");
    }
}

// ********************* ADD LAPTOP PRODUCTS  ********************

else if (isset($_POST['add_laptop_product_btn'])) {
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $colours = $_POST['colours'];
    $operating_system = $_POST['operating_system'];
    $operating_system_type = $_POST['operating_system_type'];
    $display_size = $_POST['display_size'];
    $display_resolution = $_POST['display_resolution'];
    $pixel_density = $_POST['pixel_density'];
    $display_features = $_POST['display_features'];
    $touchscreen = $_POST['touchscreen'];
    $processor = $_POST['processor'];
    $chipset = $_POST['chipset'];
    $clock_speed = $_POST['clock_speed'];
    $no_of_cores = $_POST['no_of_cores'];
    $graphic_processor = $_POST['graphic_processor'];
    $battery_cell = $_POST['battery_cell'];
    $battery_type = $_POST['battery_type'];
    $capacity = $_POST['capacity'];
    $ram_type = $_POST['ram_type'];
    $memory_slots = $_POST['memory_slots'];
    $memory_layout = $_POST['memory_layout'];
    $ssd_capacity = $_POST['ssd_capacity'];
    $wireless_LAN = $_POST['wireless_LAN'];
    $wifi_version = $_POST['wifi_version'];
    $bluetooth = $_POST['bluetooth'];
    $bluetooth_version = $_POST['bluetooth_version'];
    $usb_type_C = $_POST['usb_type_C'];
    $headphone_jack = $_POST['headphone_jack'];
    $webcam = $_POST['webcam'];
    $video_recording = $_POST['video_recording'];
    $speakers = $_POST['speakers'];
    $inbuilt_microphone = $_POST['inbuilt_microphone'];
    $microphone_type = $_POST['microphone_type'];
    $sales_package = $_POST['sales_package'];
    $image = $_FILES['image']['name'];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];

    $path = "../laptop_images";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = rand(10, 999) . '.' . $image_ext;
    $image_ext1 = pathinfo($image1, PATHINFO_EXTENSION);
    $filename1 = rand(10, 999) . '.' . $image_ext1;
    $image_ext2 = pathinfo($image2, PATHINFO_EXTENSION);
    $filename2 = rand(10, 999) . '.' . $image_ext2;
    $image_ext3 = pathinfo($image3, PATHINFO_EXTENSION);
    $filename3 = rand(10, 999) . '.' . $image_ext3;

    $laptop_product_query = "INSERT INTO `laptop`(`affiliate_links`, `image`, `image1`,
	        `image2`, `image3`, `brand`, `model`, `weight`, `price`, `colours`,
	        `operating_system`, `operating_system_type`, `display_size`, `display_resolution`,
	        `pixel_density`, `display_features`, `touchscreen`, `processor`, `chipset`,
	         `clock_speed`, `no_of_cores`, `graphic_processor`, `battery_cell`, `battery_type`,
	         `capacity`, `ram_type`, `memory_slots`, `memory_layout`, `ssd_capacity`,
	   		 `wireless_LAN`, `wifi_version`, `bluetooth`, `bluetooth_version`,
	   		 `usb_type_C`, `headphone_jack`, `webcam`, `video_recording`,
	   		 `speakers`, `inbuilt_microphone`, `microphone_type`, `sales_package`, `images`)
	        VALUES ('$affiliate_links', '$image', '$image1', '$image2', '$image3', '$brand', '$model', '$weight', '$price', '$colours',
	   		 '$operating_system', '$operating_system_type', '$display_size', '$display_resolution',
	   		 '$pixel_density', '$display_features', '$touchscreen', '$processor', '$chipset',
	   		 '$clock_speed', '$no_of_cores', '$graphic_processor', '$battery_cell',
	   		  '$battery_type', '$capacity', '$ram_type', '$memory_slots', '$memory_layout',
	   		  '$ssd_capacity', '$wireless_LAN', '$wifi_version', '$bluetooth',
	   		  '$bluetooth_version', '$usb_type_C', '$headphone_jack', '$webcam', '$video_recording',
	   		   '$speakers', '$inbuilt_microphone', '$microphone_type', '$sales_package',
	   		   '$imageString')";

    $laptop_product_query_run = mysqli_query($conn, $laptop_product_query);

    if ($laptop_product_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $filename1);
        move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $filename2);
        move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $filename3);
        redirect("add-laptop-product.php", "Product Added Successfully");
    } else {
        redirect("add-laptop-product.php", "Something Went Wrong!");
    }

}

// ********************* UPDATE LAPTOP PRODUCTS ********************
else if (isset($_POST['update_laptop_product_btn'])) {
    $laptop_product_id = $_POST['laptop_product_id'];
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $weight = $_POST['weight'];
    $price = $_POST['price'];
    $colours = $_POST['colours'];
    $operating_system = $_POST['operating_system'];
    $operating_system_type = $_POST['operating_system_type'];
    $display_size = $_POST['display_size'];
    $display_resolution = $_POST['display_resolution'];
    $pixel_density = $_POST['pixel_density'];
    $display_features = $_POST['display_features'];
    $touchscreen = $_POST['touchscreen'];
    $processor = $_POST['processor'];
    $chipset = $_POST['chipset'];
    $clock_speed = $_POST['clock_speed'];
    $no_of_cores = $_POST['no_of_cores'];
    $graphic_processor = $_POST['graphic_processor'];
    $battery_cell = $_POST['battery_cell'];
    $battery_type = $_POST['battery_type'];
    $capacity = $_POST['capacity'];
    $ram_type = $_POST['ram_type'];
    $memory_slots = $_POST['memory_slots'];
    $memory_layout = $_POST['memory_layout'];
    $ssd_capacity = $_POST['ssd_capacity'];
    $wireless_LAN = $_POST['wireless_LAN'];
    $wifi_version = $_POST['wifi_version'];
    $bluetooth = $_POST['bluetooth'];
    $bluetooth_version = $_POST['bluetooth_version'];
    $usb_type_C = $_POST['usb_type_C'];
    $headphone_jack = $_POST['headphone_jack'];
    $webcam = $_POST['webcam'];
    $video_recording = $_POST['video_recording'];
    $speakers = $_POST['speakers'];
    $inbuilt_microphone = $_POST['inbuilt_microphone'];
    $microphone_type = $_POST['microphone_type'];
    $sales_package = $_POST['sales_package'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    $path = "../laptop_images";

    if ($new_image != "") {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = rand(10, 999) . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $new_image1 = $_FILES['image1']['name'];
    $old_image1 = $_POST['old_image1'];

    if ($new_image1 != "") {
        // $update_filename = $new_image;
        $image_ext1 = pathinfo($new_image1, PATHINFO_EXTENSION);
        $update_filename1 = rand(10, 999) . '.' . $image_ext1;
    } else {
        $update_filename1 = $old_image1;
    }

    $new_image2 = $_FILES['image2']['name'];
    $old_image2 = $_POST['old_image2'];

    if ($new_image2 != "") {
        // $update_filename = $new_image;
        $image_ext2 = pathinfo($new_image2, PATHINFO_EXTENSION);
        $update_filename2 = rand(10, 999) . '.' . $image_ext2;
    } else {
        $update_filename2 = $old_image2;
    }

    $new_image3 = $_FILES['image3']['name'];
    $old_image3 = $_POST['old_image3'];

    if ($new_image3 != "") {
        // $update_filename = $new_image;
        $image_ext3 = pathinfo($new_image3, PATHINFO_EXTENSION);
        $update_filename3 = rand(10, 999) . '.' . $image_ext3;
    } else {
        $update_filename3 = $old_image3;
    }
    // Check if new images are selected

    $update_laptop_query = "UPDATE `laptop` SET `affiliate_links`= '$affiliate_links',
			`image`= '$update_filename', `image1`= '$update_filename1', `image2`= '$update_filename2',
			`image3`= '$update_filename3', `model` = '$model',`weight` = '$weight', `price` = '$price',
			`colours` = '$colours', `operating_system` = '$operating_system',
			`operating_system_type` = '$operating_system_type',`display_size` = '$display_size',
			`display_resolution` = '$display_resolution', `pixel_density` = '$pixel_density',
			`display_features` = '$display_features', `touchscreen` = '$touchscreen', `processor` = '$processor',
			`chipset` = '$chipset',`clock_speed` = '$clock_speed', `no_of_cores` = '$no_of_cores',
	        `graphic_processor` = '$graphic_processor', `battery_cell` = '$battery_cell',
	        `battery_type` = '$battery_type', `capacity` = '$capacity', `ram_type` = '$ram_type',
	        `memory_slots` = '$memory_slots', `memory_layout` = '$memory_layout', `ssd_capacity` =
	        '$ssd_capacity', `wireless_LAN` = '$wireless_LAN', `wifi_version` = '$wifi_version',
	        `bluetooth` = '$bluetooth', `bluetooth_version` =  '$bluetooth_version',
	        `usb_type_C` = '$usb_type_C', `headphone_jack` = '$headphone_jack', `webcam` =
	        '$webcam', `video_recording` = '$video_recording', `speakers` = '$speakers',
	        `inbuilt_microphone` = '$inbuilt_microphone', `microphone_type` = '$microphone_type',
	        `sales_package` = '$sales_package' WHERE `id` = '$laptop_product_id' ";

    $update_query_run = mysqli_query($conn, $update_laptop_query);

    if ($update_query_run) {
        if ($new_image != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../laptop_images/" . $old_image)) {
                unlink("../laptop_images/" . $old_image);
            }
        }

        if ($new_image1 != "") {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $update_filename1);
            if (file_exists("../laptop_images/" . $old_image1)) {
                unlink("../laptop_images/" . $old_image1);
            }
        }

        if ($new_image2 != "") {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $update_filename2);
            if (file_exists("../laptop_images/" . $old_image2)) {
                unlink("../laptop_images/" . $old_image2);
            }
        }

        if ($new_image3 != "") {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $update_filename3);
            if (file_exists("../laptop_images/" . $old_image3)) {
                unlink("../laptop_images/" . $old_image3);
            }
        }
        redirect("edit-laptop-product.php?id=$laptop_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-laptop-product.php?id=$laptop_product_id", "Something Went Wrong");
    }
}

// ********************* DELETE LAPTOP PRODUCTS ********************

else if (isset($_POST['delete_laptop_product_btn'])) {
    $laptop_product_id = mysqli_real_escape_string($conn, $_POST['laptop_product_id']);

    $laptop_query = "SELECT * FROM `laptop` WHERE `id` = '$laptop_product_id'";
    $laptop_query_run = mysqli_query($conn, $laptop_query);
    $laptop_data = mysqli_fetch_array($laptop_query_run);

    // Get an array of image filenames associated with the product
    $images = explode(',', $laptop_data['images']);

    // Delete each image file
    foreach ($images as $image) {
        $imagePath = "../laptop_images/" . trim($image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Delete the product from the database
    $delete_query = "DELETE FROM `laptop` WHERE `id` = '$laptop_product_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);

    if ($delete_query_run) {
        redirect("laptop-products.php", "Product Deleted Successfully.");
    } else {
        redirect("laptop-products.php", "Something Went Wrong!");
    }
}

// ********************* ADD CAMERA PRODUCTS  ********************

else if (isset($_POST['add_camera_product_btn'])) {
    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $model_number = $_POST['model_number'];
    $images = $_POST['images'];
    $viewfinder_type = $_POST['viewfinder_type'];
    $screen_size = $_POST['screen_size'];
    $display_type = $_POST['display_type'];
    $touchscreen_type = $_POST['touchscreen_type'];
    $autofocus_technology = $_POST['autofocus_technology'];
    $display_resolution_maximum = $_POST['display_resolution_maximum'];
    $photo_sensor_size = $_POST['photo_sensor_size'];
    $imaging_photo_sensor_technology = $_POST['imaging_photo_sensor_technology'];
    $effective_still_resolution = $_POST['effective_still_resolution'];
    $self_timer_duration = $_POST['self_timer_duration'];
    $jpeg_quality_level = $_POST['jpeg_quality_level'];
    $camera_flash = $_POST['camera_flash'];
    $image_stabilization = $_POST['image_stabilization'];
    $video_capture_format = $_POST['video_capture_format'];
    $video_capture_resolution = $_POST['video_capture_resolution'];
    $lens_type = $_POST['lens_type'];
    $optical_zoom = $_POST['optical_zoom'];
    $compatible_mountings = $_POST['compatible_mountings'];
    $focus_type = $_POST['focus_type'];
    $maximum_focal_length = $_POST['maximum_focal_length'];
    $minimum_focal_length = $_POST['minimum_focal_length'];
    $connectivity_technology = $_POST['connectivity_technology'];
    $continuous_shooting_speed = $_POST['continuous_shooting_speed'];
    $wireless_communication_technology = $_POST['wireless_communication_technology'];
    $memory_slots_available = $_POST['memory_slots_available'];
    $special_features = $_POST['special_features'];
    $skill_level = $_POST['skill_level'];
    $form_factor = $_POST['form_factor'];
    $audio_output_type = $_POST['audio_output_type'];
    $features_photo_sensor_technology = $_POST['features_photo_sensor_technology'];
    $expanded_ISO_maximum = $_POST['expanded_ISO_maximum'];
    $expanded_ISO_minimum = $_POST['expanded_ISO_minimum'];
    $max_shutter_speed = $_POST['max_shutter_speed'];
    $min_shutter_speed = $_POST['min_shutter_speed'];
    $shooting_modes = $_POST['shooting_modes'];
    $battery_description = $_POST['battery_description'];
    $battery_weight = $_POST['battery_weight'];
    $warranty_type = $_POST['warranty_type'];
    $mfg_warranty_description_labor = $_POST['mfg_warranty_description_labor'];
    $price = $_POST['price'];

    $images = array();
    $path = "../camera_images"; // Directory where images will be stored

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image = $_FILES['images']['name'][$key];
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = rand(10, 999) . '.' . $image_ext;
        $targetPath = $path . '/' . $filename;

        if (move_uploaded_file($tmp_name, $targetPath)) {
            $images[] = $filename; // Store filenames for database insertion
        }
    }

    if (!is_numeric($price) || $price <= 0) {
        redirect("add-camera-product.php", "Invalid price. Please enter a valid price.");
        exit();
    }


    if ($brand != "" && $model != "") {
        $imageString = implode(', ', $images);

        $camera_product_query = "INSERT INTO `camera`(`model`, `brand`,
	        `model_number`, `viewfinder_type`, `screen_size`, `display_type`, `touchscreen_type`,
	        `autofocus_technology`, `display_resolution_maximum`, `photo_sensor_size`,
	        `imaging_photo_sensor_technology`, `effective_still_resolution`,
	        `self_timer_duration`, `jpeg_quality_level`, `camera_flash`, `image_stabilization`,
	        `video_capture_format`, `video_capture_resolution`, `lens_type`, `optical_zoom`,
	        `compatible_mountings`, `focus_type`, `maximum_focal_length`, `minimum_focal_length`,
	        `connectivity_technology`, `continuous_shooting_speed`,
	        `wireless_communication_technology`, `memory_slots_available`, `special_features`,
	        `skill_level`, `form_factor`, `audio_output_type`, `features_photo_sensor_technology`
	        , `expanded_ISO_maximum`, `expanded_ISO_minimum`, `max_shutter_speed`,
	   		`min_shutter_speed`, `shooting_modes`, `battery_description`, `battery_weight`,
	   		`warranty_type`, `mfg_warranty_description_labor`, `images`)
	        VALUES ('$brand', '$model', '$model_number', '$viewfinder_type', '$screen_size',
	   		 '$display_type', '$touchscreen_type', '$autofocus_technology',
	   		 '$display_resolution_maximum', '$photo_sensor_size',
	   		 '$imaging_photo_sensor_technology', '$effective_still_resolution',
	   		 '$self_timer_duration', '$jpeg_quality_level', '$camera_flash',
	   		 '$image_stabilization', '$video_capture_format', '$video_capture_resolution',
	   		 '$lens_type', '$optical_zoom', '$compatible_mountings', '$focus_type',
	   		 '$maximum_focal_length', '$minimum_focal_length ', '$connectivity_technology',
	   		 '$continuous_shooting_speed', '$wireless_communication_technology',
	   		 '$memory_slots_available', '$special_features', '$skill_level',
	   		 '$form_factor', '$audio_output_type', '$features_photo_sensor_technology',
	   		 '$expanded_ISO_maximum', '$expanded_ISO_minimum', '$max_shutter_speed',
	   		 '$min_shutter_speed', '$shooting_modes', '$battery_description', '$battery_weight',
	   		 '$warranty_type', '$mfg_warranty_description_labor', '$imageString', '$price')";

        $camera_product_query_run = mysqli_query($conn, $camera_product_query);

        if ($camera_product_query_run) {
            redirect("add-camera-product.php", "Product Added Successfully");
        } else {
            redirect("add-camera-product.php", "Something Went Wrong!");
        }
    }  else {
        redirect("add-camera-product.php", "All fields are required");
    }
}

// ********************* UPDATE CAMERA PRODUCTS ********************

else if (isset($_POST['update_camera_product_btn'])) {
    $camera_product_id = $_POST['camera_product_id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $type = $_POST['type'];
    $series = $_POST['series'];
    $title = $_POST['title'];
    $weight = $_POST['weight'];
    $colors = $_POST['colors'];
    $warranty_period = $_POST['warranty_period'];
    $built_in_flash = $_POST['built_in_flash'];
    $flash_features = $_POST['flash_features'];
    $flash_range = $_POST['flash_range'];
    $direct_print = $_POST['direct_print'];
    $memory_card_type = $_POST['memory_card_type'];
    $storage_file_system = $_POST['storage_file_system'];
    $sensor_type = $_POST['sensor_type'];
    $size = $_POST['size'];
    $processor_model = $_POST['processor_model'];
    $effective_resolution = $_POST['effective_resolution'];
    $mount = $_POST['mount'];
    $resolution_available = $_POST['resolution_available'];
    $file_format = $_POST['file_format'];
    $fps = $_POST['fps'];
    $slow_motion_effect = $_POST['slow_motion_effect'];
    $wifi = $_POST['wifi'];
    $HDMI = $_POST['HDMI'];
    $bluetooth = $_POST['bluetooth'];
    $NFC = $_POST['NFC'];
    $pictbridge = $_POST['pictbridge'];
    $USB = $_POST['USB'];
    $view_finder = $_POST['view_finder'];
    $display_type = $_POST['display_type'];
    $display_size = $_POST['display_size'];
    $display_resolution = $_POST['display_resolution'];
    $moveable_display = $_POST['moveable_display'];
    $touchscreen = $_POST['touchscreen'];
    $no_of_supported_lang = $_POST['no_of_supported_lang'];
    $brightness_adjustment = $_POST['brightness_adjustment'];
    $ISO = $_POST['ISO'];
    $auto_focus = $_POST['auto_focus'];
    $AF_points = $_POST['AF_points'];
    $touch_focus = $_POST['touch_focus'];
    $manual_focus = $_POST['manual_focus'];
    $image_stabilization = $_POST['image_stabilization'];
    $in_camera_editing = $_POST['in_camera_editing'];
    $HDR_shooting_mode = $_POST['HDR_shooting_mode'];
    $drive_mode = $_POST['drive_mode'];
    $burst_mode = $_POST['burst_mode'];
    $microphone = $_POST['microphone'];
    $white_balance_type = $_POST['white_balance_type'];
    $scene_modes = $_POST['scene_modes'];
    $iris_control = $_POST['iris_control'];
    $exposure_modes = $_POST['exposure_modes'];
    $exposure_lock = $_POST['exposure_lock'];
    $battery_model = $_POST['battery_model'];
    $battery = $_POST['battery'];
    $battery_type = $_POST['battery_type'];
    $no_of_shots = $_POST['no_of_shots'];
    $price = $_POST['price'];
    $accessories_inbox = $_POST['accessories_inbox'];
    $
    
    

    $path = "../camera_images"; // Directory where images will be stored
    $model_number = $_POST['model_number'];
    $image = $updated_image_filenames; 

    // Check if new images are selected
    if (isset($_FILES['images']) && !empty(array_filter($_FILES['images']['name']))) {
        $images = array();
        $new_images = $_FILES['images']['name']; // New image filenames
        $update_images = array();

        foreach ($new_images as $key => $new_image) {
            if ($new_image != "") {
                $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
                $update_image_filename = rand(10, 999) . '.' . $image_ext;
                move_uploaded_file($_FILES['images']['tmp_name'][$key], $path . '/' . $update_image_filename);
                $update_images[] = $update_image_filename;
            }
        }

        // Combine old and new image filenames
        $updated_image_filenames = implode(', ', $update_images);

        // Retrieve old image filenames from the database
        $old_image_filenames_query = "SELECT `images` FROM `camera` WHERE `id` =
		    '$camera_product_id'";
        $old_image_filenames_result = mysqli_query($conn, $old_image_filenames_query);

        if ($old_image_filenames_result && mysqli_num_rows($old_image_filenames_result) > 0) {
            $row = mysqli_fetch_assoc($old_image_filenames_result);
            $old_image_filenames = explode(', ', $row['images']);

            // Delete old images that are not in the updated list
            foreach ($old_image_filenames as $old_image_filename) {
                if (!in_array($old_image_filename, $update_images) && file_exists($path . '/' . $old_image_filename)) {
                    unlink($path . '/' . $old_image_filename);
                }
            }
        }

        $update_camera_query = "UPDATE `camera` SET `model`='$model',`brand`='$brand',`model_number`='$model_number',`viewfinder_type`='$viewfinder_type',`screen_size`='$screen_size',`display_type`='$display_type',`touchscreen_type`='[value-8]',`autofocus_technology`='[value-9]',`display_resolution_maximum`='[value-10]',`photo_sensor_size`='[value-11]',`imaging_photo_sensor_technology`='[value-12]',`effective_still_resolution`='[value-13]',`self_timer_duration`='[value-14]',`jpeg_quality_level`='[value-15]',`camera_flash`='[value-16]',`image_stabilization`='[value-17]',`video_capture_format`='[value-18]',`video_capture_resolution`='[value-19]',`lens_type`='[value-20]',`optical_zoom`='[value-21]',`compatible_mountings`='[value-22]',`focus_type`='[value-23]',`maximum_focal_length`='[value-24]',`minimum_focal_length`='[value-25]',`connectivity_technology`='[value-26]',`continuous_shooting_speed`='[value-27]',`wireless_communication_technology`='[value-28]',`memory_slots_available`='[value-29]',`special_features`='[value-30]',`skill_level`='[value-31]',`form_factor`='[value-32]',`audio_output_type`='[value-33]',`features_photo_sensor_technology`='[value-34]',`expanded_ISO_maximum`='[value-35]',`expanded_ISO_minimum`='[value-36]',`max_shutter_speed`='[value-37]',`min_shutter_speed`='[value-38]',`shooting_modes`='[value-39]',`battery_description`='[value-40]',`battery_weight`='[value-41]',`warranty_type`='[value-42]',`mfg_warranty_description_labor`='[value-43]',`images`='$image',`type`='[value-45]',`series`='[value-46]',`title`='[value-47]',`weight`='[value-48]',`colors`='[value-49]',`accessories_inbox`='[value-50]',`no_of_shots`='[value-51]',`battery_type`='[value-52]',`battery`='[value-53]',`battery_model`='[value-54]',`exposure_lock`='[value-55]',`affiliate_links`='[value-56]',`warranty_period`='[value-57]',`built_in_flash`='[value-58]',`flash_features`='[value-59]',`flash_range`='[value-60]',`direct_print`='[value-61]',`memory_card_type`='[value-62]',`sensor_type`='[value-63]',`storage_file_system`='[value-64]',`size`='[value-65]',`processor_model`='[value-66]',`effective_resolution`='[value-67]',`mount`='[value-68]',`resolution_available`='[value-69]',`file_format`='[value-70]',`fps`='[value-71]',`HDMI`='[value-72]',`wifi`='[value-73]',`slow_motion_effect`='[value-74]',`bluetooth`='[value-75]',`NFC`='[value-76]',`pictbridge`='[value-77]',`USB`='[value-78]',`view_finder`='[value-79]',`display_size`='[value-80]',`display_resolution`='[value-81]',`moveable_display`='[value-82]',`touchscreen`='[value-83]',`no_of_supported_lang`='[value-84]',`brightness_adjustment`='[value-85]',`ISO`='[value-86]',`auto_focus`='[value-87]',`AF_points`='[value-88]',`touch_focus`='[value-89]',`manual_focus`='[value-90]',`in_camera_editing`='[value-91]',`HDR_shooting_mode`='[value-92]',`drive_mode`='[value-93]',`burst_mode`='[value-94]',`microphone`='[value-95]',`white_balance_type`='[value-96]',`scene_modes`='[value-97]',`iris_control`='[value-98]',`exposure_modes`='[value-99]'
        `price`='$price' WHERE `id` = '$camera_product_id'";

    } else {
        // No new images selected, only update other fields
       $update_camera_query = "UPDATE `camera` SET `model`='$model',`brand`='$brand',`model_number`='$model_number',`viewfinder_type`='[value-5]',`screen_size`='[value-6]',`display_type`='$display_type',`touchscreen_type`='[value-8]',`autofocus_technology`='[value-9]',`display_resolution_maximum`='[value-10]',`photo_sensor_size`='[value-11]',`imaging_photo_sensor_technology`='[value-12]',`effective_still_resolution`='[value-13]',`self_timer_duration`='[value-14]',`jpeg_quality_level`='[value-15]',`camera_flash`='[value-16]',`image_stabilization`='[value-17]',`video_capture_format`='[value-18]',`video_capture_resolution`='[value-19]',`lens_type`='[value-20]',`optical_zoom`='[value-21]',`compatible_mountings`='[value-22]',`focus_type`='[value-23]',`maximum_focal_length`='[value-24]',`minimum_focal_length`='[value-25]',`connectivity_technology`='[value-26]',`continuous_shooting_speed`='[value-27]',`wireless_communication_technology`='[value-28]',`memory_slots_available`='[value-29]',`special_features`='[value-30]',`skill_level`='[value-31]',`form_factor`='[value-32]',`audio_output_type`='[value-33]',`features_photo_sensor_technology`='[value-34]',`expanded_ISO_maximum`='[value-35]',`expanded_ISO_minimum`='[value-36]',`max_shutter_speed`='[value-37]',`min_shutter_speed`='[value-38]',`shooting_modes`='[value-39]',`battery_description`='[value-40]',`battery_weight`='[value-41]',`warranty_type`='[value-42]',`mfg_warranty_description_labor`='[value-43]',`images`='$image',`type`='[value-45]',`series`='[value-46]',`title`='[value-47]',`weight`='[value-48]',`colors`='[value-49]',`accessories_inbox`='[value-50]',`no_of_shots`='[value-51]',`battery_type`='[value-52]',`battery`='[value-53]',`battery_model`='[value-54]',`exposure_lock`='[value-55]',`affiliate_links`='[value-56]',`warranty_period`='[value-57]',`built_in_flash`='[value-58]',`flash_features`='[value-59]',`flash_range`='[value-60]',`direct_print`='[value-61]',`memory_card_type`='[value-62]',`sensor_type`='[value-63]',`storage_file_system`='[value-64]',`size`='[value-65]',`processor_model`='[value-66]',`effective_resolution`='[value-67]',`mount`='[value-68]',`resolution_available`='[value-69]',`file_format`='[value-70]',`fps`='[value-71]',`HDMI`='[value-72]',`wifi`='[value-73]',`slow_motion_effect`='[value-74]',`bluetooth`='[value-75]',`NFC`='[value-76]',`pictbridge`='[value-77]',`USB`='[value-78]',`view_finder`='[value-79]',`display_size`='[value-80]',`display_resolution`='[value-81]',`moveable_display`='[value-82]',`touchscreen`='[value-83]',`no_of_supported_lang`='[value-84]',`brightness_adjustment`='[value-85]',`ISO`='[value-86]',`auto_focus`='[value-87]',`AF_points`='[value-88]',`touch_focus`='[value-89]',`manual_focus`='[value-90]',`in_camera_editing`='[value-91]',`HDR_shooting_mode`='[value-92]',`drive_mode`='[value-93]',`burst_mode`='[value-94]',`microphone`='[value-95]',`white_balance_type`='[value-96]',`scene_modes`='[value-97]',`iris_control`='[value-98]',`exposure_modes`='[value-99]'
        `price`='$price' WHERE `id` = '$camera_product_id'";

    }

    $update_camera_query_run = mysqli_query($conn, $update_camera_query);

    if ($update_camera_query_run) {
        redirect("edit-camera-product.php?id=$camera_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-camera-product.php?id=$camera_product_id", "Something Went Wrong");
    }
}

// ********************* ADD TELEVISION PRODUCTS  ********************

else if (isset($_POST['add_television_product_btn'])) {
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $warranty = $_POST['warranty'];
    $box_contents = $_POST['box_contents'];
    $stand_color = $_POST['stand_color'];
    $remote_type = $_POST['remote_type'];
    $cell_requirement = $_POST['cell_requirement'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $resolution = $_POST['resolution'];
    $LED_backlight_type = $_POST['LED_backlight_type'];
    $refresh_rate = $_POST['refresh_rate'];
    $aspect_ratio = $_POST['aspect_ratio'];
    $weight_with_stand = $_POST['weight_with_stand'];
    $dimensions_with = $_POST['dimensions_with'];
    $stand_with = $_POST['stand_with'];
    $dimensions_without = $_POST['dimensions_without'];
    $stand_without = $_POST['stand_without'];
    $video_formats_supported = $_POST['video_formats_supported'];
    $other_video_features = $_POST['other_video_features'];
    $sound_technology = $_POST['sound_technology'];
    $total_speaker_output = $_POST['total_speaker_output'];
    $speaker_frequency_range = $_POST['speaker_frequency_range'];
    $USB_ports = $_POST['USB_ports'];
    $HDMI_ports = $_POST['HDMI_ports'];
    $digital_audio_output = $_POST['digital_audio_output'];
    $RF_input_ports = $_POST['RF_input_ports'];
    $composite_input = $_POST['composite_input'];
    $ethernet_sockets = $_POST['ethernet_sockets'];
    $wifi_present = $_POST['wifi_present'];
    $miracast = $_POST['miracast'];
    $inbuilt_apps = $_POST['inbuilt_apps'];
    $voice_recognition = $_POST['voice_recognition'];
    $other_smart_features = $_POST['other_smart_features'];
    $user_interface = $_POST['user_interface'];
    $voltage_requirement = $_POST['voltage_requirement'];
    $frequency_requirement = $_POST['frequency_requirement'];
    $power_consumption_running = $_POST['power_consumption_running'];
    $power_consumption_standby = $_POST['power_consumption_standby'];

    $image = $_FILES['image']['name'];
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];

    $path = "../television_images";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = rand(10, 999) . '.' . $image_ext;
    $image_ext1 = pathinfo($image1, PATHINFO_EXTENSION);
    $filename1 = rand(10, 999) . '.' . $image_ext1;
    $image_ext2 = pathinfo($image2, PATHINFO_EXTENSION);
    $filename2 = rand(10, 999) . '.' . $image_ext2;
    $image_ext3 = pathinfo($image3, PATHINFO_EXTENSION);
    $filename3 = rand(10, 999) . '.' . $image_ext3;

    $television_product_query = "INSERT INTO `television` (`affiliate_links`, `image`, `image1`,
	        `image2`, `image3`,`brand`, `model`, `warranty`,
	        `box_contents`,	`stand_color`, `remote_type`, `cell_requirement`, `type`, `size`,
	        `resolution`, `LED_backlight_type`,	`refresh_rate`,	`aspect_ratio`,
	        `weight_with_stand`, `dimensions_with`,	`stand_with`, `dimensions_without`,
	        `stand_without`, `video_formats_supported`,	`other_video_features`,
	        `sound_technology`,	`total_speaker_output`,	`speaker_frequency_range`, `USB_ports`,
	        `HDMI_ports`,`digital_audio_output`, `RF_input_ports`, `composite_input`,
	        `ethernet_sockets`, `wifi_present`,	`miracast`,	`inbuilt_apps`,	`voice_recognition`,
	        `other_smart_features`,	`user_interface`, `voltage_requirement`,
	        `frequency_requirement`, `power_consumption_running`, `power_consumption_standby`) VALUES ('$affiliate_links', '$image', '$image1',
			'$image2', '$image3','$brand', '$model', '$warranty', '$box_contents', '$stand_color',
	         '$remote_type', '$cell_requirement', '$type', '$size', '$resolution',
	         '$LED_backlight_type', '$refresh_rate', '$aspect_ratio', '$weight_with_stand',
	         '$dimensions_with', '$stand_with', '$dimensions_without', '$stand_without',
	         '$video_formats_supported', '$other_video_features', '$sound_technology',
	         '$total_speaker_output','$speaker_frequency_range', '$USB_ports', '$HDMI_ports',
	         '$digital_audio_output', '$RF_input_ports', '$composite_input', '$ethernet_sockets',
	         '$wifi_present', '$miracast', '$inbuilt_apps', '$voice_recognition',
	         '$other_smart_features', '$user_interface', '$voltage_requirement',
	         '$frequency_requirement', '$power_consumption_running', '$power_consumption_standby')";

    $television_product_query_run = mysqli_query($conn, $television_product_query);

    if ($television_product_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $filename1);
        move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $filename2);
        move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $filename3);
        redirect("add-television-product.php", "Product Added Successfully");
    } else {
        redirect("add-television-product.php", "Something Went Wrong!");

    }
}

// *************************  update television product   ******************

else if (isset($_POST['update_television_product_btn'])) {
    $television_product_id = $_POST['television_product_id'];
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $warranty = $_POST['warranty'];
    $box_contents = $_POST['box_contents'];
    $stand_color = $_POST['stand_color'];
    $remote_type = $_POST['remote_type'];
    $cell_requirement = $_POST['cell_requirement'];
    $type = $_POST['type'];
    $size = $_POST['size'];
    $resolution = $_POST['resolution'];
    $LED_backlight_type = $_POST['LED_backlight_type'];
    $refresh_rate = $_POST['refresh_rate'];
    $aspect_ratio = $_POST['aspect_ratio'];
    $weight_with_stand = $_POST['weight_with_stand'];
    $dimensions_with = $_POST['dimensions_with'];
    $stand_with = $_POST['stand_with'];
    $dimensions_without = $_POST['dimensions_without'];
    $stand_without = $_POST['stand_without'];
    $video_formats_supported = $_POST['video_formats_supported'];
    $other_video_features = $_POST['other_video_features'];
    $sound_technology = $_POST['sound_technology'];
    $total_speaker_output = $_POST['total_speaker_output'];
    $speaker_frequency_range = $_POST['speaker_frequency_range'];
    $USB_ports = $_POST['USB_ports'];
    $HDMI_ports = $_POST['HDMI_ports'];
    $digital_audio_output = $_POST['digital_audio_output'];
    $RF_input_ports = $_POST['RF_input_ports'];
    $composite_input = $_POST['composite_input'];
    $ethernet_sockets = $_POST['ethernet_sockets'];
    $wifi_present = $_POST['wifi_present'];
    $miracast = $_POST['miracast'];
    $inbuilt_apps = $_POST['inbuilt_apps'];
    $voice_recognition = $_POST['voice_recognition'];
    $other_smart_features = $_POST['other_smart_features'];
    $user_interface = $_POST['user_interface'];
    $voltage_requirement = $_POST['voltage_requirement'];
    $frequency_requirement = $_POST['frequency_requirement'];
    $power_consumption_running = $_POST['power_consumption_running'];
    $power_consumption_standby = $_POST['power_consumption_standby'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    $path = "../television_images";

    if ($new_image != "") {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = rand(10, 999) . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    // ----
    $new_image1 = $_FILES['image1']['name'];
    $old_image1 = $_POST['old_image1'];

    if ($new_image1 != "") {
        // $update_filename = $new_image;
        $image_ext1 = pathinfo($new_image1, PATHINFO_EXTENSION);
        $update_filename1 = rand(10, 999) . '.' . $image_ext1;
    } else {
        $update_filename1 = $old_image1;
    }

    // -----

    $new_image2 = $_FILES['image2']['name'];
    $old_image2 = $_POST['old_image2'];

    if ($new_image2 != "") {
        // $update_filename = $new_image;
        $image_ext2 = pathinfo($new_image2, PATHINFO_EXTENSION);
        $update_filename2 = rand(10, 999) . '.' . $image_ext2;
    } else {
        $update_filename2 = $old_image2;
    }

    // -----
    $new_image3 = $_FILES['image3']['name'];
    $old_image3 = $_POST['old_image3'];

    if ($new_image3 != "") {
        // $update_filename = $new_image;
        $image_ext3 = pathinfo($new_image3, PATHINFO_EXTENSION);
        $update_filename3 = rand(10, 999) . '.' . $image_ext3;
    } else {
        $update_filename3 = $old_image3;
    }

    // --
    $update_television_query = "UPDATE `television` SET `affiliate_links`='$affiliate_links',
    `image`= '$update_filename', `image1`= '$update_filename1',
    `image2`= '$update_filename2', `image3`= '$update_filename3',
    `brand`='$brand',`model`='$model',`warranty`='$warranty',
    `box_contents`='$box_contents',`stand_color`='$stand_color',`remote_type`='$remote_type',
    `cell_requirement`='$cell_requirement',`type`='$type',`size`='$size',
    `resolution`='$resolution',`LED_backlight_type`='$LED_backlight_type',
    `refresh_rate`='$refresh_rate',`aspect_ratio`='$aspect_ratio',`weight_with_stand`='$weight_with_stand',
    `dimensions_with`='$dimensions_with',`stand_with`='$stand_with',
    `dimensions_without`='$dimensions_without',`stand_without`='$stand_without',`video_formats_supported`='$video_formats_supported',
    `other_video_features`='$other_video_features',`sound_technology`='$sound_technology',
    `total_speaker_output`='$total_speaker_output',`speaker_frequency_range`='$speaker_frequency_range',
    `USB_ports`='$USB_ports',`HDMI_ports`='$HDMI_ports',`digital_audio_output`='$digital_audio_output',
    `RF_input_ports`='$RF_input_ports',`composite_input`='$composite_input',
    `ethernet_sockets`='$ethernet_sockets',`wifi_present`='$wifi_present',`miracast`='$miracast',
    `inbuilt_apps`='$inbuilt_apps',`voice_recognition`='$voice_recognition',
    `other_smart_features`='$other_smart_features',`user_interface`='$user_interface',
    `voltage_requirement`='$voltage_requirement',`frequency_requirement`='$frequency_requirement',
    `power_consumption_running`='$power_consumption_running',`power_consumption_standby`='$power_consumption_standby' WHERE `id` = '$television_product_id' ";

    $update_query_run = mysqli_query($conn, $update_television_query);

    if ($update_query_run) {
        if ($new_image != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../television_images/" . $old_image)) {
                unlink("../television_images/" . $old_image);
            }
        }

        if ($new_image1 != "") {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $update_filename1);
            if (file_exists("../television_images/" . $old_image1)) {
                unlink("../television_images/" . $old_image1);
            }
        }

        if ($new_image2 != "") {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $update_filename2);
            if (file_exists("../television_images/" . $old_image2)) {
                unlink("../television_images/" . $old_image2);
            }
        }

        if ($new_image3 != "") {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $update_filename3);
            if (file_exists("../television_images/" . $old_image3)) {
                unlink("../television_images/" . $old_image3);
            }
        }
        redirect("edit-television-product.php?id=$television_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-television-product.php?id=$television_product_id", "Something Went Wrong");
    }
}

// ********************* ADD EARBUDS PRODUCTS  ********************

else if (isset($_POST['add_earbuds_product_btn'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $title = $_POST['title'];
    $warranty = $_POST['warranty'];
    $box_contents = $_POST['box_contents'];
    $colors = $_POST['colors'];
    $type = $_POST['type'];
    $design = $_POST['design'];
    $fit = $_POST['fit'];
    $eartip_size = $_POST['eartip_size'];
    $weight = $_POST['weight'];
    $replaceable_earbuds = $_POST['replaceable_earbuds'];
    $call_control = $_POST['call_control'];
    $music_control = $_POST['music_control'];
    $connector = $_POST['connector'];
    $bluetooth_version = $_POST['bluetooth_version'];
    $range = $_POST['range'];
    $microphone = $_POST['microphone'];
    $playback_time = $_POST['playback_time'];
    $charging_time = $_POST['charging_time'];
    $compatible_models = $_POST['compatible_models'];

    $images = array();
    $path = "../earbuds_images"; // Directory where images will be stored

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image = $_FILES['images']['name'][$key];
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = rand(10, 999) . '.' . $image_ext;
        $targetPath = $path . '/' . $filename;

        if (move_uploaded_file($tmp_name, $targetPath)) {
            $images[] = $filename; // Store filenames for database insertion
        }
    }

    if ($brand != "" && $model != "" && !empty($images)) {
        $imageString = implode(', ', $images);

        $earbuds_product_query = "INSERT INTO `earbuds` (`brand`, `model`, `title`,
	        `warranty`,	`box_contents`, `colors`, `type`, `design`, `fit`, `eartip_size`,
	        `weight`, `replaceable_earbuds`, `call_control`, `music_control`, `connector`,
	        `bluetooth_version`, `range`, `microphone`, `playback_time`, `charging_time`,
	        `compatible_models`, `images`) VALUES ('$brand', '$model', '$title',
	        '$warranty', '$box_contents', '$colors', '$type', '$design', '$fit', '$eartip_size',
	        '$weight', '$replaceable_earbuds', '$call_control', '$music_control', '$connector',
	        '$bluetooth_version', '$range', '$microphone', '$playback_time', '$charging_time',
	        '$compatible_models', '$imageString')";

        $earbuds_product_query_run = mysqli_query($conn, $earbuds_product_query);

        if ($earbuds_product_query_run) {
            redirect("add-earbud-product.php", "Product Added Successfully");
        } else {
            redirect("add-earbud-product.php", "Something Went Wrong!");
        }
    } else {
        redirect("add-earbud-product.php", "All fields are required");
    }
}

// ********************* Update Earbuds PRODUCTS  ********************

else if (isset($_POST['update_earbuds_product_btn'])) {

    $earbuds_product_id = $_POST['earbuds_product_id'];
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $title = $_POST['title'];
    $box_contents = $_POST['box_contents'];
    $warranty = $_POST['warranty'];
    $colors = $_POST['colors'];
    $type = $_POST['type'];
    $design = $_POST['design'];

    $fit = $_POST['fit'];

    $weight = $_POST['weight'];

    $replaceable_earbuds = $_POST['replaceable_earbuds'];
    $call_control = $_POST['call_control'];
    $music_control = $_POST['music_control'];
    $compatible_models = $_POST['compatible_models'];
    $new_image = $_FILES['images']['name'];
    $old_image = $_POST['old_image'];
    $path = "../earbuds_images";

    if ($new_image != "") {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = rand(10, 999) . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $new_image1 = $_FILES['image1']['name'];
    $old_image1 = $_POST['old_image1'];

    if ($new_image1 != "") {
        // $update_filename = $new_image;
        $image_ext1 = pathinfo($new_image1, PATHINFO_EXTENSION);
        $update_filename1 = rand(10, 999) . '.' . $image_ext1;
    } else {
        $update_filename1 = $old_image1;
    }

    $new_image2 = $_FILES['image2']['name'];
    $old_image2 = $_POST['old_image2'];

    if ($new_image2 != "") {
        // $update_filename = $new_image;
        $image_ext2 = pathinfo($new_image2, PATHINFO_EXTENSION);
        $update_filename2 = rand(10, 999) . '.' . $image_ext2;
    } else {
        $update_filename2 = $old_image2;
    }

    $new_image3 = $_FILES['image3']['name'];
    $old_image3 = $_POST['old_image3'];

    if ($new_image3 != "") {
        // $update_filename = $new_image;
        $image_ext3 = pathinfo($new_image3, PATHINFO_EXTENSION);
        $update_filename3 = rand(10, 999) . '.' . $image_ext3;
    } else {
        $update_filename3 = $old_image3;
    }

    $update_earbuds_query = "UPDATE `earbuds` SET
    `affiliate_links`='$affiliate_links',
    `images`='$update_filename',
    `image1`='$update_filename1',
    `image2`='$update_filename2',
    `image3`='$update_filename3',
    `brand`='$brand',
    `model`='$model',
    `title`='$title',



    `type`='$type',
    `design`='$design',

    `fit`='$fit',


    `colors`='$colors',


    `weight`='$weight',



    `replaceable_earbuds`='$replaceable_earbuds',
    `call_control`='$call_control',
    `music_control`='$music_control',
    `compatible_models`='$compatible_models'
    WHERE `id`='$earbuds_product_id'";

    $update_query_run = mysqli_query($conn, $update_earbuds_query);

    if ($update_query_run) {
        if ($new_image != "") {
            move_uploaded_file($_FILES['images']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../earbuds_images/" . $old_image)) {
                unlink("../earbuds_images/" . $old_image);
            }
        }

        if ($new_image1 != "") {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $update_filename1);
            if (file_exists("../earbuds_images/" . $old_image1)) {
                unlink("../earbuds_images/" . $old_image1);
            }
        }

        if ($new_image2 != "") {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $update_filename2);
            if (file_exists("../earbuds_images/" . $old_image2)) {
                unlink("../earbuds_images/" . $old_image2);
            }
        }

        if ($new_image3 != "") {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $update_filename3);
            if (file_exists("../earbuds_images/" . $old_image3)) {
                unlink("../earbuds_images/" . $old_image3);
            }
        }
        redirect("edit-earbuds-product.php?id=$earbuds_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-earbuds-product.php?id=$earbuds_product_id", "Something Went Wrong");
    }

}

// ********************* ADD HEADPHONES PRODUCTS  ********************

else if (isset($_POST['add_headphones_product_btn'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $title = $_POST['title'];
    $warranty = $_POST['warranty'];
    $box_contents = $_POST['box_contents'];
    $type = $_POST['type'];
    $design = $_POST['design'];
    $fit = $_POST['fit'];
    $detachable_cable = $_POST['detachable_cable'];
    $call_control = $_POST['call_control'];
    $music_control = $_POST['music_control'];
    $weight = $_POST['weight'];
    $colours = $_POST['colours'];
    $driver_size = $_POST['driver_size'];
    $impedance = $_POST['impedance'];
    $max_frequency_response = $_POST['max_frequency_response'];
    $min_frequency_response = $_POST['min_frequency_response'];
    $driver_type = $_POST['driver_type'];
    $connector = $_POST['connector'];
    $bluetooth_version = $_POST['bluetooth_version'];
    $bluetooth_features = $_POST['bluetooth_features'];
    $range = $_POST['range'];
    $microphone = $_POST['microphone'];
    $playback_time = $_POST['playback_time'];
    $battery_capacity = $_POST['battery_capacity'];
    $charging_type = $_POST['charging_type'];
    $charging_time = $_POST['charging_time'];
    $compatible_models = $_POST['compatible_models'];

    $images = array();
    $path = "../headphone_images"; // Directory where images will be stored

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image = $_FILES['images']['name'][$key];
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = rand(10, 999) . '.' . $image_ext;
        $targetPath = $path . '/' . $filename;

        if (move_uploaded_file($tmp_name, $targetPath)) {
            $images[] = $filename; // Store filenames for database insertion
        }
    }

    if ($brand != "" && $model != "" && !empty($images)) {
        $imageString = implode(', ', $images);

        $headphones_product_query = "INSERT INTO `headphones` (`brand`, `model`, `title`,
	        `warranty`, `box_contents`, `type`, `design`, `fit`, `detachable_cable`,
	        `call_control`, `music_control`, `weight`, `colours`, `driver_size`, `impedance`,
	        `max_frequency_response`, `min_frequency_response`, `driver_type`, `connector`,
	        `bluetooth_version`, `bluetooth_features`, `range`, `microphone`, `playback_time`,
	        `battery_capacity`, `charging_type`, `charging_time`, `compatible_models`, `images`)
	        VALUES ('$brand', '$model', '$title', '$warranty', '$box_contents', '$type',
	        '$design', '$fit', '$detachable_cable', '$call_control', '$music_control', '$weight',
	        '$colours', '$driver_size', '$impedance', '$max_frequency_response',
	        '$min_frequency_response', '$driver_type', '$connector', '$bluetooth_version',
	        '$bluetooth_features', '$range', '$microphone', '$playback_time', '$battery_capacity'
	        , '$charging_type', '$charging_time', '$compatible_models', '$imageString')";

        $headphones_product_query_run = mysqli_query($conn, $headphones_product_query);

        if ($headphones_product_query_run) {
            redirect("add-headphones-product.php", "Product Added Successfully");
        } else {
            redirect("add-headphones-product.php", "Something Went Wrong!");
        }
    } else {
        redirect("add-headphones-product.php", "All fields are required");
    }
}
// update Headphones

else if (isset($_POST['update_headphones_product_btn'])) {

    $headphones_product_id = $_POST['headphones_product_id'];
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $title = $_POST['title'];
    $box_contents = $_POST['box_contents'];
    $connector = $_POST['connector'];
    $microphone = $_POST['microphone'];
    $type = $_POST['type'];
    $design = $_POST['design'];

    $fit = $_POST['fit'];

    $colors = $_POST['colors'];
    $driver_size = $_POST['driver_size'];

    $weight = $_POST['weight'];
    $impedance = $_POST['impedance'];

    $max_frequency_response = $_POST['max_frequency_response'];
    $min_frequency_response = $_POST['min_frequency_response'];

    $driver_type = $_POST['driver_type'];

    $call_control = $_POST['call_control'];
    $music_control = $_POST['music_control'];
    $compatible_models = $_POST['compatible_models'];
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    $path = "../headphones_images";

    if ($new_image != "") {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = rand(10, 999) . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $new_image1 = $_FILES['image1']['name'];
    $old_image1 = $_POST['old_image1'];

    if ($new_image1 != "") {
        // $update_filename = $new_image;
        $image_ext1 = pathinfo($new_image1, PATHINFO_EXTENSION);
        $update_filename1 = rand(10, 999) . '.' . $image_ext1;
    } else {
        $update_filename1 = $old_image1;
    }

    $new_image2 = $_FILES['image2']['name'];
    $old_image2 = $_POST['old_image2'];

    if ($new_image2 != "") {
        // $update_filename = $new_image;
        $image_ext2 = pathinfo($new_image2, PATHINFO_EXTENSION);
        $update_filename2 = rand(10, 999) . '.' . $image_ext2;
    } else {
        $update_filename2 = $old_image2;
    }

    $new_image3 = $_FILES['image3']['name'];
    $old_image3 = $_POST['old_image3'];

    if ($new_image3 != "") {
        // $update_filename = $new_image;
        $image_ext3 = pathinfo($new_image3, PATHINFO_EXTENSION);
        $update_filename3 = rand(10, 999) . '.' . $image_ext3;
    } else {
        $update_filename3 = $old_image3;
    }

    $update_headphones_query = "UPDATE `headphones` SET
    `affiliate_links`='$affiliate_links',
    `image`='$update_filename',
    `image1`='$update_filename1',
    `image2`='$update_filename2',
    `image3`='$update_filename3',
    `brand`='$brand',
    `model`='$model',
    `title`='$title',
    `box_contents`='$box_contents',
    `connector`='$connector',
    `microphone`='$microphone',
    `type`='$type',
    `design`='$design',

    `fit`='$fit',


    `colors`='$colors',
    `driver_size`='$driver_size',

    `weight`='$weight',
    `impedance`='$impedance',

    `max_frequency_response`='$max_frequency_response',
    `min_frequency_response`='$min_frequency_response',

    `driver_type`='$driver_type',



    `call_control`='$call_control',
    `music_control`='$music_control',
    `compatible_models`='$compatible_models'
    WHERE `id`='$headphones_product_id'";

    $update_query_run = mysqli_query($conn, $update_headphones_query);

    if ($update_query_run) {
        if ($new_image != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../headphones_images/" . $old_image)) {
                unlink("../headphones_images/" . $old_image);
            }
        }

        if ($new_image1 != "") {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $update_filename1);
            if (file_exists("../headphones_images/" . $old_image1)) {
                unlink("../headphones_images/" . $old_image1);
            }
        }

        if ($new_image2 != "") {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $update_filename2);
            if (file_exists("../headphones_images/" . $old_image2)) {
                unlink("../headphones_images/" . $old_image2);
            }
        }

        if ($new_image3 != "") {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $update_filename3);
            if (file_exists("../headphones_images/" . $old_image3)) {
                unlink("../headphones_images/" . $old_image3);
            }
        }
        redirect("edit-headphones-product.php?id=$headphones_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-headphones-product.php?id=$headphones_product_id", "Something Went Wrong");
    }

}

// ********************* ADD EARPHONES PRODUCTS  ********************

else if (isset($_POST['add_earphones_product_btn'])) {
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $title = $_POST['title'];
    $box_content = $_POST['box_content'];
    $connector = $_POST['connector'];
    $microphone = $_POST['microphone'];
    $type = $_POST['type'];
    $design = $_POST['design'];
    $open_or_closed_back = $_POST['open_or_closed_back'];
    $fit = $_POST['fit'];
    $cable_length = $_POST['cable_length'];
    $foldable_design = $_POST['foldable_design'];
    $colours = $_POST['colours'];
    $driver_size = $_POST['driver_size'];
    $dimensions = $_POST['dimensions'];
    $weight = $_POST['weight'];
    $impedance = $_POST['impedance'];
    $sensitivity = $_POST['sensitivity'];
    $max_frequency_response = $_POST['max_frequency_response'];
    $min_frequency_response = $_POST['min_frequency_response'];
    $max_power_input = $_POST['max_power_input'];
    $driver_type = $_POST['driver_type'];
    $magnet_material = $_POST['magnet_material'];
    $noise_cancellation = $_POST['noise_cancellation'];
    $replaceable_earbuds = $_POST['replaceable_earbuds'];
    $call_control = $_POST['call_control'];
    $music_control = $_POST['music_control'];
    $compatible_models = $_POST['compatible_models'];

    $images = array();
    $path = "../earphone_images"; // Directory where images will be stored

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image = $_FILES['images']['name'][$key];
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = rand(10, 999) . '.' . $image_ext;
        $targetPath = $path . '/' . $filename;

        if (move_uploaded_file($tmp_name, $targetPath)) {
            $images[] = $filename; // Store filenames for database insertion
        }
    }

    if ($brand != "" && $model != "" && !empty($images)) {
        $imageString = implode(', ', $images);

        $earphones_product_query = "INSERT INTO `earphones`(`brand`, `model`, `title`, `box_content`, `connector`, `microphone`, `type`, `design`, `open_or_closed_back`, `fit`, `cable_length`, `foldable_design`, `colours`, `driver_size`, `dimensions`, `weight`, `impedance`, `sensitivity`, `max_frequency_response`, `min_frequency_response`, `max_power_input`, `driver_type`, `magnet_material`, `noise_cancellation`, `replaceable_earbuds`, `call_control`, `music_control`, `compatible_models`, `images`, `affiliate_links`) VALUES ('$brand', '$model', '$title', '$box_content',
	        '$connector', '$microphone', '$type', '$design', '$open_or_closed_back', '$fit',
	        '$cable_length', '$foldable_design', '$colours', '$driver_size', '$dimensions',
	        '$weight', '$impedance', '$sensitivity', '$max_frequency_response',
	        '$min_frequency_response', '$max_power_input', '$driver_type', '$magnet_material',
	        '$noise_cancellation', '$replaceable_earbuds', '$call_control', '$music_control',
	        '$compatible_models', '$imageString','$affiliate_links')";

        $earphones_product_query_run = mysqli_query($conn, $earphones_product_query);

        if ($earphones_product_query_run) {
            redirect("add-earphone-product.php", "Product Added Successfully");
        } else {
            redirect("add-earphone-product.php", "Something Went Wrong!");
        }
    } else {
        redirect("add-earphone-product.php", "All fields are required");
    }
}

// ********************* update Earphones PRODUCTS  ********************

else if (isset($_POST['update_earphones_product_btn'])) {

    $earphones_product_id = $_POST['earphones_product_id'];
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $title = $_POST['title'];
    $box_content = $_POST['box_content'];
    $connector = $_POST['connector'];
    $microphone = $_POST['microphone'];
    $type = $_POST['type'];
    $design = $_POST['design'];
    $open_or_closed_back = $_POST['open_or_closed_back'];
    $fit = $_POST['fit'];
    $cable_length = $_POST['cable_length'];
    $foldable_design = $_POST['foldable_design'];
    $colors = $_POST['colors'];
    $driver_size = $_POST['driver_size'];
    $dimensions = $_POST['dimensions'];
    $weight = $_POST['weight'];
    $impedance = $_POST['impedance'];
    $sensitivity = $_POST['sensitivity'];
    $max_frequency_response = $_POST['max_frequency_response'];
    $min_frequency_response = $_POST['min_frequency_response'];
    $max_power_input = $_POST['max_power_input'];
    $driver_type = $_POST['driver_type'];
    $magnet_material = $_POST['magnet_material'];
    $noise_cancellation = $_POST['noise_cancellation'];
    $replaceable_earbuds = $_POST['replaceable_earbuds'];
    $call_control = $_POST['call_control'];
    $music_control = $_POST['music_control'];
    $compatible_models = $_POST['compatible_models'];
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    $path = "../earphones_images";

    if ($new_image != "") {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = rand(10, 999) . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $new_image1 = $_FILES['image1']['name'];
    $old_image1 = $_POST['old_image1'];

    if ($new_image1 != "") {
        // $update_filename = $new_image;
        $image_ext1 = pathinfo($new_image1, PATHINFO_EXTENSION);
        $update_filename1 = rand(10, 999) . '.' . $image_ext1;
    } else {
        $update_filename1 = $old_image1;
    }

    $new_image2 = $_FILES['image2']['name'];
    $old_image2 = $_POST['old_image2'];

    if ($new_image2 != "") {
        // $update_filename = $new_image;
        $image_ext2 = pathinfo($new_image2, PATHINFO_EXTENSION);
        $update_filename2 = rand(10, 999) . '.' . $image_ext2;
    } else {
        $update_filename2 = $old_image2;
    }

    $new_image3 = $_FILES['image3']['name'];
    $old_image3 = $_POST['old_image3'];

    if ($new_image3 != "") {
        // $update_filename = $new_image;
        $image_ext3 = pathinfo($new_image3, PATHINFO_EXTENSION);
        $update_filename3 = rand(10, 999) . '.' . $image_ext3;
    } else {
        $update_filename3 = $old_image3;
    }

    $update_earphones_query = "UPDATE `earphones` SET
    `affiliate_links`='$affiliate_links',
    `image`='$update_filename',
    `image1`='$update_filename1',
    `image2`='$update_filename2',
    `image3`='$update_filename3',
    `brand`='$brand',
    `model`='$model',
    `title`='$title',
    `box_content`='$box_content',
    `connector`='$connector',
    `microphone`='$microphone',
    `type`='$type',
    `design`='$design',
    `open_or_closed_back`='$open_or_closed_back',
    `fit`='$fit',
    `cable_length`='$cable_length',
    `foldable_design`='$foldable_design',
    `colors`='$colors',
    `driver_size`='$driver_size',
    `dimensions`='$dimensions',
    `weight`='$weight',
    `impedance`='$impedance',
    `sensitivity`='$sensitivity',
    `max_frequency_response`='$max_frequency_response',
    `min_frequency_response`='$min_frequency_response',
    `max_power_input`='$max_power_input',
    `driver_type`='$driver_type',
    `magnet_material`='$magnet_material',
    `noise_cancellation`='$noise_cancellation',
    `replaceable_earbuds`='$replaceable_earbuds',
    `call_control`='$call_control',
    `music_control`='$music_control',
    `compatible_models`='$compatible_models'
    WHERE `id`='$earphones_product_id'";

    $update_query_run = mysqli_query($conn, $update_earphones_query);

    if ($update_query_run) {
        if ($new_image != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../earphones_images/" . $old_image)) {
                unlink("../earphones_images/" . $old_image);
            }
        }

        if ($new_image1 != "") {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $update_filename1);
            if (file_exists("../earphones_images/" . $old_image1)) {
                unlink("../earphones_images/" . $old_image1);
            }
        }

        if ($new_image2 != "") {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $update_filename2);
            if (file_exists("../earphones_images/" . $old_image2)) {
                unlink("../earphones_images/" . $old_image2);
            }
        }

        if ($new_image3 != "") {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $update_filename3);
            if (file_exists("../earphones_images/" . $old_image3)) {
                unlink("../earphones_images/" . $old_image3);
            }
        }
        redirect("edit-earphones-product.php?id=$earphones_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-earphones-product.php?id=$earphones_product_id", "Something Went Wrong");
    }

}

// ********************* ADD SMARTWATCHES PRODUCTS  ********************

else if (isset($_POST['add_smartwatches_product_btn'])) {
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $operating_system = $_POST['operating_system'];
    $box_contents = $_POST['box_contents'];
    $RAM = $_POST['RAM'];
    $internal_memory = $_POST['internal_memory'];
    $compatible_OS = $_POST['compatible_OS'];
    $charging_mode = $_POST['charging_mode'];
    $body_material = $_POST['body_material'];
    $strap_material = $_POST['strap_material'];
    $colours = $_POST['colours'];
    $clock_face = $_POST['clock_face'];
    $speaker = $_POST['speaker'];
    $screen_size = $_POST['screen_size'];
    $screen_resolution = $_POST['screen_resolution'];
    $pixel_density = $_POST['pixel_density'];
    $display_technology = $_POST['display_technology'];
    $touchscreen = $_POST['touchscreen'];
    $bluetooth = $_POST['bluetooth'];
    $wirless_protocol = $_POST['wirless_protocol'];
    $USB_connectivity = $_POST['USB_connectivity'];
    $NFC = $_POST['NFC'];
    $accelerometer = isset($_POST['accelerometer']) ? $_POST['accelerometer'] : '';
    $gyro = $_POST['gyro'];
    $light = $_POST['light'];
    $IR_gesture = $_POST['IR_gesture'];
    $GPS = $_POST['GPS'];
    $email = $_POST['email'];
    $text_message = $_POST['text_message'];
    $incoming_call = $_POST['incoming_call'];
    $alarm = $_POST['alarm'];
    $calendar_reminder = $_POST['calendar_reminder'];
    $facebook = $_POST['facebook'];
    $google_voice = $_POST['google_voice'];
    $make_call = $_POST['make_call'];
    $receive_call = $_POST['receive_call'];
    $voice_control = $_POST['voice_control'];
    $calories_intake = $_POST['calories_intake'];
    $distance = $_POST['distance'];
    $steps = $_POST['steps'];
    $sleep_quality = $_POST['sleep_quality'];
    $heartrate = $_POST['heartrate'];
    $activity_inactivity = $_POST['activity_inactivity'];

    $images = array();
    $path = "../smartwatches_images"; // Directory where images will be stored

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image = $_FILES['images']['name'][$key];
        $image_ext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = rand(10, 999) . '.' . $image_ext;
        $targetPath = $path . '/' . $filename;

        if (move_uploaded_file($tmp_name, $targetPath)) {
            $images[] = $filename; // Store filenames for database insertion
        }
    }

    if ($brand != "" && $model != "" && !empty($images)) {
        $imageString = implode(', ', $images);

        $smartwatches_product_query = "INSERT INTO `smartwatches`(`brand`, `model`,
	        `operating_system`, `box_contents`, `RAM`, `internal_memory`, `compatible_OS`,
	        `charging_mode`, `body_material`, `strap_material`, `colours`, `clock_face`,
	        `speaker`, `screen_size`, `screen_resolution`, `pixel_density`, `display_technology`,
	        `touchscreen`, `bluetooth`, `wirless_protocol`, `USB_connectivity`, `NFC`,
	        `accelerometer`, `gyro`, `light`, `IR_gesture`, `GPS`, `email`, `text_message`,
	        `incoming_call`, `alarm`, `calendar_reminder`, `facebook`, `google_voice`,
	        `make_call`, `receive_call`, `voice_control`, `calories_intake`, `distance`,
	        `steps`, `sleep_quality`, `heartrate`, `activity/inactivity`, `images`, `affiliate_links`, `image1`, `image2`, `image3`)
	        VALUES ('$brand', '$model', '$operating_system', '$box_contents', '$RAM',
	        '$internal_memory', '$compatible_OS', '$charging_mode', '$body_material',
	        '$strap_material', '$colours', '$clock_face', '$speaker',
	        '$screen_size', '$screen_resolution', '$pixel_density', '$display_technology',
	        '$touchscreen', '$bluetooth', '$wirless_protocol', '$USB_connectivity', '$NFC',
	        '$accelerometer', '$gyro', '$light', '$IR_gesture', '$GPS', '$email',
	        '$text_message', '$incoming_call', '$alarm', '$calendar_reminder', '$facebook',
	         '$google_voice', '$make_call', '$receive_call', '$voice_control',
	        '$calories_intake', '$distance', '$steps', '$sleep_quality', '$heartrate',
	        '$activity_inactivity', '$imageString')";

        $smartwatches_product_query_run = mysqli_query($conn, $smartwatches_product_query);

        if ($smartwatches_product_query_run) {
            redirect("add-smartwatches-product.php", "Product Added Successfully");
        } else {
            redirect("add-smartwatches-product.php", "Something Went Wrong!");
        }
    } else {
        redirect("add-smartwatches-product.php", "All fields are required");
    }
}

// *******************   update smartwatches products   ******************

else if (isset($_POST['update_smartwatches_product_btn'])) {

    $smartwatches_product_id = $_POST['smartwatches_product_id'];
    $affiliate_links = $_POST['affiliate_links'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $operating_system = $_POST['operating_system'];
    $box_contents = $_POST['box_contents'];
    $RAM = $_POST['RAM'];
    $internal_memory = $_POST['internal_memory'];
    $compatible_OS = $_POST['compatible_OS'];
    $charging_mode = $_POST['charging_mode'];
    $body_material = $_POST['body_material'];
    $strap_material = $_POST['strap_material'];
    $colours = $_POST['colours'];
    $clock_face = $_POST['clock_face'];
    $speaker = $_POST['speaker'];
    $screen_size = $_POST['screen_size'];
    $screen_resolution = $_POST['screen_resolution'];
    $pixel_density = $_POST['pixel_density'];
    $display_technology = $_POST['display_technology'];
    $touchscreen = $_POST['touchscreen'];
    $bluetooth = $_POST['bluetooth'];
    $wirless_protocol = $_POST['wirless_protocol'];
    $USB_connectivity = $_POST['USB_connectivity'];
    $NFC = $_POST['NFC'];
    $accelerometer = isset($_POST['accelerometer']) ? $_POST['accelerometer'] : '';
    $gyro = $_POST['gyro'];
    $light = $_POST['light'];
    $IR_gesture = $_POST['IR_gesture'];
    $GPS = $_POST['GPS'];
    $email = $_POST['email'];
    $text_message = $_POST['text_message'];
    $incoming_call = $_POST['incoming_call'];
    $alarm = $_POST['alarm'];
    $calendar_reminder = $_POST['calendar_reminder'];
    $facebook = $_POST['facebook'];
    $google_voice = $_POST['google_voice'];
    $make_call = $_POST['make_call'];
    $receive_call = $_POST['receive_call'];
    $voice_control = $_POST['voice_control'];
    $calories_intake = $_POST['calories_intake'];
    $distance = $_POST['distance'];
    $steps = $_POST['steps'];
    $sleep_quality = $_POST['sleep_quality'];
    $heartrate = $_POST['heartrate'];
    $activity_inactivity = $_POST['activity_inactivity'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    $path = "../smartwatches_images";

    if ($new_image != "") {
        // $update_filename = $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = rand(10, 999) . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $new_image1 = $_FILES['image1']['name'];
    $old_image1 = $_POST['old_image1'];

    if ($new_image1 != "") {
        // $update_filename = $new_image;
        $image_ext1 = pathinfo($new_image1, PATHINFO_EXTENSION);
        $update_filename1 = rand(10, 999) . '.' . $image_ext1;
    } else {
        $update_filename1 = $old_image1;
    }

    $new_image2 = $_FILES['image2']['name'];
    $old_image2 = $_POST['old_image2'];

    if ($new_image2 != "") {
        // $update_filename = $new_image;
        $image_ext2 = pathinfo($new_image2, PATHINFO_EXTENSION);
        $update_filename2 = rand(10, 999) . '.' . $image_ext2;
    } else {
        $update_filename2 = $old_image2;
    }

    $new_image3 = $_FILES['image3']['name'];
    $old_image3 = $_POST['old_image3'];

    if ($new_image3 != "") {
        // $update_filename = $new_image;
        $image_ext3 = pathinfo($new_image3, PATHINFO_EXTENSION);
        $update_filename3 = rand(10, 999) . '.' . $image_ext3;
    } else {
        $update_filename3 = $old_image3;
    }

    $update_smartwatches_query = "UPDATE `smartwatches` SET `affiliate_links`='$affiliate_links',
   `image`= '$update_filename', `image1`= '$update_filename1', `image2`= '$update_filename2',
   `image3`= '$update_filename3',`brand`='$brand',`model`='$model',`operating_system`='$operating_system',
   `box_contents`='$box_contents',`RAM`='$RAM',`internal_memory`='$internal_memory',
   `compatible_OS`='$compatible_OS',`charging_mode`='$charging_mode',`body_material`='$body_material',
   `strap_material`='$strap_material',`colours`='$colours',`clock_face`='$clock_face',
   `speaker`='$speaker',`screen_size`='$screen_size',`screen_resolution`='$screen_resolution',
   `pixel_density`='$pixel_density',`display_technology`='$display_technology',`touchscreen`='$touchscreen',
   `bluetooth`='$bluetooth',`wirless_protocol`='$wirless_protocol',`USB_connectivity`='$USB_connectivity',
   `NFC`='$NFC',`accelerometer`='$accelerometer',`gyro`='$gyro',`light`='$light',
   `IR_gesture`='$IR_gesture',`GPS`='$GPS',`email`='$email',`text_message`='$text_message',
   `incoming_call`='$incoming_call',`alarm`='$alarm',`calendar_reminder`='$calendar_reminder',
   `facebook`='$facebook',`google_voice`='$google_voice',`make_call`='$make_call',
   `receive_call`='$receive_call',`voice_control`='$voice_control',`calories_intake`='$calories_intake',
   `distance`='$distance',`steps`='$steps',`sleep_quality`='$sleep_quality',
   `heartrate`='$heartrate',`activity/inactivity`='$activity_inactivity' WHERE `id` = '$smartwatches_product_id' ";

    $update_query_run = mysqli_query($conn, $update_smartwatches_query);

    if ($update_query_run) {
        if ($new_image != "") {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $update_filename);
            if (file_exists("../smartwatches_images/" . $old_image)) {
                unlink("../smartwatches_images/" . $old_image);
            }
        }

        if ($new_image1 != "") {
            move_uploaded_file($_FILES['image1']['tmp_name'], $path . '/' . $update_filename1);
            if (file_exists("../smartwatches_images/" . $old_image1)) {
                unlink("../smartwatches_images/" . $old_image1);
            }
        }

        if ($new_image2 != "") {
            move_uploaded_file($_FILES['image2']['tmp_name'], $path . '/' . $update_filename2);
            if (file_exists("../smartwatches_images/" . $old_image2)) {
                unlink("../smartwatches_images/" . $old_image2);
            }
        }

        if ($new_image3 != "") {
            move_uploaded_file($_FILES['image3']['tmp_name'], $path . '/' . $update_filename3);
            if (file_exists("../smartwatches_images/" . $old_image3)) {
                unlink("../smartwatches_images/" . $old_image3);
            }
        }
        redirect("edit-smartwatch-product.php?id=$smartwatches_product_id", "Product Updated Successfully");
    } else {
        redirect("edit-smartwatch-product.php?id=$smartwatches_product_id", "Something Went Wrong");
    }

}

// ********************* UPDATE PRODUCT ********************
else if (isset($_POST['update_product_btn'])) {
    $product_id = $_POST['product_id'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $affiliate_link = $_POST['affiliate_link'];
    $range = $_POST['range'];
    $small_description = $_POST['small_description'];
    $description = $_POST['description'];
    $qty = $_POST['qty'];
    $status = isset($_POST['status']) ? '1' : '0';
    $trending = isset($_POST['trending']) ? '1' : '0';

    $path = "../uploads"; // Directory where images will be stored

    // Check if new images are selected
    if (isset($_FILES['image']) && !empty(array_filter($_FILES['image']['name']))) {
        $images = array();
        $new_images = $_FILES['image']['name']; // New image filenames
        $update_images = array();

        foreach ($new_images as $key => $new_image) {
            if ($new_image != "") {
                $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
                $update_image_filename = time() . '_' . $key . '.' . $image_ext;
                move_uploaded_file($_FILES['image']['tmp_name'][$key], $path . '/' . $update_image_filename);
                $update_images[] = $update_image_filename;
            }
        }

        // Combine old and new image filenames
        $updated_image_filenames = implode(', ', $update_images);

        $update_query = "UPDATE `products` SET `brand`= '$brand', `model` = '$model',
	        `affiliate_link` = '$affiliate_link', `range` = '$range',
	        `small_description` = '$small_description', `description` = '$description',
	         `image` = '$updated_image_filenames', `qty` = '$qty', `status` = '$status',
	         `trending` = '$trending' WHERE `id` = '$product_id' ";
    } else {
        // No new images selected, only update other fields
        $update_query = "UPDATE `products` SET `brand`= '$brand', `model` = '$model',
	        `affiliate_link` = '$affiliate_link', `range` = '$range',
	        `small_description` = '$small_description', `description` = '$description',
	        `qty` = '$qty', `status` = '$status', `trending` = '$trending'
	        WHERE `id` = '$product_id' ";
    }

    $update_query_run = mysqli_query($conn, $update_query);

    if ($update_query_run) {
        redirect("edit-product.php?id=$product_id", "Product Updated Successfully");
    } else {
        redirect("edit-product.php?id=$product_id", "Something Went Wrong");
    }
}

// ********************* DELETE PRODUCTS ********************
else if (isset($_POST['delete_product_btn'])) {
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);

    // Fetch product data including image filenames
    $product_query = "SELECT * FROM `products` WHERE `id` = '$product_id'";
    $product_query_run = mysqli_query($conn, $product_query);
    $product_data = mysqli_fetch_array($product_query_run);

    // Extract image filenames
    $image_filenames = explode(', ', $product_data['image']);

    // Delete images from the "uploads" directory
    foreach ($image_filenames as $image) {
        if (file_exists("../uploads/" . $image)) {
            unlink("../uploads/" . $image);
        }
    }

    // Delete the product from the database
    $delete_query = "DELETE FROM `products` WHERE `id` = '$product_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);

    if ($delete_query_run) {
        redirect("products.php", "Product and Images Deleted Successfully.");
    } else {
        redirect("products.php", "Something Went Wrong!");
    }
}
