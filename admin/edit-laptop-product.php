<?php
session_start();
include '../functions/myFunction.php';

//   if(isset($_SESSION['auth'])){
//     // if($_SESSION['role_as'] != 1) ************* For multiple users

//     if($_SESSION['role_as'] == 0){
//       redirect('../index.php', 'You are not authorised to access this page');
//     }
//   }else{
//     redirect('../login.php', 'Login to continue');
//   }

include 'includes/header.php';
// include('../middleware/adminMiddleware.php');
?>

<div class="container">
	<div class="row">
    <div class="col-md-12">
      <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $laptop_product = getById("laptop", $id);
    if (mysqli_num_rows($laptop_product) > 0) {

        $data = mysqli_fetch_array($laptop_product);
        ?>
      <div class="card">
        <div class="card-header">
          <h4> Edit Laptop Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
               <div class="col-md-6">
                  <input type="hidden" value="<?=$data['id'];?>" name="laptop_product_id">
                   <label class="mb-0"> Affiliate Link </label>
                   <input type="text" name="affiliate_links" value="<?=$data['affiliate_links'];?>"
                   class="form-control mb-2">
                </div>
                  <div class="col-md-6">
                  <label for=""> Upload Image </label>
                     <input type="file" name="image" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image" value="<?=$data['image'];?>" class="form-control">
                  <img src="../laptop_images/<?=$data['image'];?>" height="50px" width="50px">
                </div>
               <div class="col-md-6">
                  <label for=""> Upload Image1 </label>
                     <input type="file" name="image1" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image1" value="<?=$data['image1'];?>" class="form-control">
               <img src="../laptop_images/<?=$data['image1'];?>" height="50px" width="50px">
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Image 2 </label>
                     <input type="file" name="image2" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image2" value="<?=$data['image2'];?>" class="form-control">
               <img src="../laptop_images/<?=$data['image2'];?>" height="50px" width="50px">
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Image 3 </label>
                     <input type="file" name="image3" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image3" value="<?=$data['image3'];?>" class="form-control">
               <img src="../laptop_images/<?=$data['image3'];?>" height="50px" width="50px">
                </div>
               <div class="col-md-6">
                   <label class="mb-0"> Brand </label>
                   <input type="text" name="brand" value="<?=$data['brand'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Model </label>
                   <input type="text" name="model" value="<?=$data['model'];?>"
                   class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Weight </label>
                   <input type="text" name="weight" value="<?=$data['weight'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Price </label>
                   <input type="text" name="price" value="<?=$data['price'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Colours </label>
                    <input type="text" name="colours" value="<?=$data['colours'];?>"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Operating System </label>
                   <input type="text" name="operating_system" value="<?=$data['operating_system'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Operating System Type </label>
                   <input type="text" name="operating_system_type" value="<?=$data['operating_system_type'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Size </label>
                   <input type="text" name="display_size" value="<?=$data['display_size'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Resolution </label>
                   <input type="text" name="display_resolution" value="<?=$data['display_resolution'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Pixel Density </label>
                   <input type="text" name="pixel_density" value="<?=$data['pixel_density'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Features </label>
                   <input type="text" name="display_features" value="<?=$data['display_features'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Touchscreen </label>
                   <input type="text" name="touchscreen" value="<?=$data['touchscreen'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Processor </label>
                   <input type="text" name="processor" value="<?=$data['processor'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Chipset </label>
                   <input type="text" name="chipset" value="<?=$data['chipset'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Clock-Speed </label>
                    <input type="text" name="clock_speed" value="<?=$data['clock_speed'];?>"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Number of Cores </label>
                   <input type="text" name="no_of_cores" value="<?=$data['no_of_cores'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Graphic Processor </label>
                   <input type="text" name="graphic_processor" value="<?=$data['graphic_processor'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery Cell </label>
                   <input type="text" name="battery_cell"
                   value="<?=$data['battery_cell'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery Type </label>
                   <input type="text" name="battery_type" value="<?=$data['battery_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Capacity </label>
                   <input type="text" name="capacity" value="<?=$data['capacity'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> RAM Type </label>
                   <input type="text" name="ram_type" value="<?=$data['ram_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Memory Slots </label>
                   <input type="text" name="memory_slots" value="<?=$data['memory_slots'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Memory Layout </label>
                   <input type="text" name="memory_layout" value="<?=$data['memory_layout'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SSD Capacity </label>
                   <input type="text" name="ssd_capacity" value="<?=$data['ssd_capacity'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wireless LAN </label>
                   <input type="text" name="wireless_LAN" value="<?=$data['wireless_LAN'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wifi Version </label>
                   <input type="text" name="wifi_version"
                   value="<?=$data['wifi_version'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth </label>
                   <input type="text" name="bluetooth" value="<?=$data['bluetooth'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth Version </label>
                   <input type="text" name="bluetooth_version" value="<?=$data['bluetooth_version'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> USB Type-C </label>
                   <input type="text" name="usb_type_C" value="<?=$data['usb_type_C'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Headphone Jack </label>
                   <input type="text" name="headphone_jack" value="<?=$data['headphone_jack'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Webcam </label>
                   <input type="text" name="webcam" value="<?=$data['webcam'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Video Recording </label>
                   <input type="text" name="video_recording" value="<?=$data['video_recording'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Speakers </label>
                   <input type="text" name="speakers" value="<?=$data['speakers'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> In-built Microphone </label>
                   <input type="text" name="inbuilt_microphone" value="<?=$data['inbuilt_microphone'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Microphone Type </label>
                  <input type="text" name="microphone_type" value="<?=$data['microphone_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Sales Package </label>
                   <input type="text" name="sales_package" value="<?=$data['sales_package'];?>" class="form-control mb-2">
                </div>

                <div class="col-md-12 mt-3">
                  <button type="submit" class="btn btn-primary" name="update_laptop_product_btn"> Save </button>
                </div>
              </div>
          </form>
        </div>
      </div>
       <?php
} else {
        echo "Category not found";
    }
} else {
    echo "Id missing from URL";
}

?>
    </div>
	</div>
</div>

<?php include 'includes/footer.php';?><?php
