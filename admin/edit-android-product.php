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
    $android_product = getById("android", $id);
    if (mysqli_num_rows($android_product) > 0) {

        $data = mysqli_fetch_array($android_product);
        ?>
      <div class="card">
        <div class="card-header">
          <h4> Edit Android Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                 <div class="col-md-6">
                  <input type="hidden" value="<?=$data['id'];?>" name="android_product_id">
                   <label class="mb-0"> Affiliate Link </label>
                   <input type="text" name="affiliate_links" value="<?=$data['affiliate_links'];?>"
                   class="form-control mb-2">
                </div>
                  <div class="col-md-6">
                  <label for=""> Upload Image </label>
                     <input type="file" name="image" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image" value="<?=$data['image'];?>" class="form-control">
                  <img src="../android_images/<?=$data['image'];?>" height="50px" width="50px">
                </div>
               <div class="col-md-6">
                  <label for=""> Upload Image1 </label>
                     <input type="file" name="image1" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image1" value="<?=$data['image1'];?>" class="form-control">
               <img src="../android_images/<?=$data['image1'];?>" height="50px" width="50px">
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Image 2 </label>
                     <input type="file" name="image2" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image2" value="<?=$data['image2'];?>" class="form-control">
               <img src="../android_images/<?=$data['image2'];?>" height="50px" width="50px">
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Image 3 </label>
                     <input type="file" name="image3" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image3" value="<?=$data['image3'];?>" class="form-control">
               <img src="../android_images/<?=$data['image3'];?>" height="50px" width="50px">
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
                   <label class="mb-0"> Operating System </label>
                    <input type="text" name="operating_system"
                    value="<?=$data['operating_system'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Custom UI </label>
                   <input type="text" name="custom_ui" value="<?=$data['custom_ui'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Chipset </label>
                   <input type="text" name="chipset" value="<?=$data['chipset'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> CPU </label>
                   <input type="text" name="cpu" value="<?=$data['cpu'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Fabrication </label>
                   <input type="text" name="fabrication" value="<?=$data['fabrication'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Graphics </label>
                   <input type="text" name="graphics" value="<?=$data['graphics'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> RAM </label>
                   <input type="text" name="ram" value="<?=$data['ram'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> RAM Type </label>
                   <input type="text" name="ram_type" value="<?=$data['ram_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Internal Memory </label>
                   <input type="text" name="internal_memory" value="<?=$data['internal_memory'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Storage Type </label>
                   <input type="text" name="storage_type" value="<?=$data['storage_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Type </label>
                    <input type="text" name="display_type" value="<?=$data['display_type'];?>"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Screen Size </label>
                   <input type="text" name="screen_size" value="<?=$data['screen_size'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Resolution </label>
                   <input type="text" name="resolution" value="<?=$data['resolution'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Screen Protection </label>
                   <input type="text" name="screen_protection"
                   value="<?=$data['screen_protection'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Brightness </label>
                   <input type="text" name="brightness" value="<?=$data['brightness'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Refresh Rate </label>
                   <input type="text" name="refresh_rate" value="<?=$data['refresh_rate'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Weight </label>
                   <input type="text" name="weight" value="<?=$data['weight'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Colours </label>
                   <input type="text" name="colours" value="<?=$data['colours'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Fingerprint Sensor Position </label>
                   <input type="text" name="fingerprint_sensor_position"
                   value="<?=$data['fingerprint_sensor_position'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Fingerprint Sensor Type </label>
                   <input type="text" name="fingerprint_sensor_type"
                   value="<?=$data['figerprint_sensor_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Other Sensors </label>
                   <input type="text" name="other_sensors" value="<?=$data['other_sensors'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Main Camera Setup </label>
                   <input type="text" name="main_camera_setup"
                   value="<?=$data['main_camera_setup'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Main Resolution </label>
                   <input type="text" name="main_resolution" value="<?=$data['main_resolution'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> OIS </label>
                   <input type="text" name="ois" value="<?=$data['ois'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Image Resolution </label>
                   <input type="text" name="image_resolution" value="<?=$data['image_resolution'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Main video recording </label>
                   <input type="text" name="main_video_recording"
                   value="<?=$data['main_video_recording'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Front camera setup </label>
                   <input type="text" name="front_camera_setup"
                   value="<?=$data['front_camera_setup'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Front Resolution </label>
                   <input type="text" name="front_resolution" value="<?=$data['front_resolution'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Front Video Recording </label>
                   <input type="text" name="front_video_recording"
                   value="<?=$data['front_video_recording'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Capacity </label>
                   <input type="text" name="capacity" value="<?=$data['capacity'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Type </label>
                  <input type="text" name="type" value="<?=$data['type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Quick Charging </label>
                   <input type="text" name="quick_charging" value="<?=$data['quick_charging'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> USB Type-C </label>
                   <input type="text" name="usb_type_C" value="<?=$data['usb_type_C'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM(slots) </label>
                   <input type="text" name="sim(slots)" value="<?=$data['sim(slots)'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM Size </label>
                   <input type="text" name="sim_size" value="<?=$data['sim_size'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Network Support </label>
                   <input type="text" name="network_support"
                   value="<?=$data['network_support'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM </label>
                   <input type="text" name="sim" value="<?=$data['sim'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wifi </label>
                  <input type="text" name="wifi" value="<?=$data['wifi'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wifi Features </label>
                   <input type="text" name="wifi_features" value="<?=$data['wifi_features'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth </label>
                   <input type="text" name="bluetooth" value="<?=$data['bluetooth'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> GPS </label>
                   <input type="text" name="gps" value="<?=$data['gps'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Audio Jack </label>
                   <input type="text" name="audio_jack" value="<?=$data['audio_jack'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Audio Features </label>
                   <input type="text" name="audio_features" value="<?=$data['audio_features'];?>"
                   class="form-control mb-2">
                </div>
                <!-- Additional fields for uploading multiple images -->

                  <div class="col-md-6">
                   <label class="mb-0"> Connectivity Technology </label>
                   <textarea rows="5" name="connectivity_technology" value="" class="form-control mb-2"> <?=$data['connectivity_technology'];?> </textarea>
                </div>

                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="update_android_product_btn"> Save </button>
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
