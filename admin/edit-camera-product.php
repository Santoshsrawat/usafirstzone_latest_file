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
    $camera_product = getById("camera", $id);
    if (mysqli_num_rows($camera_product) > 0) {

        $data = mysqli_fetch_array($camera_product);
        ?>
      <div class="card">
        <div class="card-header">
          <h4> Edit Camera Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
               <div class="col-md-6">
                  <input type="hidden" value="<?=$data['id'];?>" name="camera_product_id">
                   <label class="mb-0"> Brand </label>
                   <input type="text" name="brand" value="<?=$data['brand'];?>"
                   class="form-control mb-2">
               </div>


               <div class="col-md-6">
                   <label class="mb-0"> Affiliate LINKS </label>
                   <input type="text" name="affiliate_links" value="<?=$data['affiliate_links'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Price</label>
                   <input type="text" name="price" value="<?=$data['price'];?>"
                   class="form-control mb-2">
                </div>

                <div class="col-md-6">
                   <label class="mb-0"> Model </label>
                   <input type="text" name="model" value="<?=$data['model'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Type </label>
                    <input type="text" name="type"
                    value="<?=$data['type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Series </label>
                   <input type="text" name="series" value="<?=$data['series'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Title </label>
                   <input type="text" name="title" value="<?=$data['title'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Weight </label>
                   <input type="text" name="weight" value="<?=$data['weight'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Available Color Options </label>
                   <input type="text" name="colors" value="<?=$data['colors'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Warranty Period </label>
                   <input type="text" name="warranty_period" value="<?=$data['warranty_period'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Built in Flash </label>
                   <input type="text" name="built_in_flash" value="<?=$data['built_in_flash'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Flash Features </label>
                   <input type="text" name="flash_features" value="<?=$data['flash_features'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Flash Range </label>
                   <input type="text" name="flash_range"
                   value="<?=$data['flash_range'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Direct Print </label>
                    <input type="text" name="direct_print" value="<?=$data['direct_print'];?>"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Memory Card Type </label>
                   <input type="text" name="memory_card_type" value="<?=$data['memory_card_type'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Storage File System </label>
                   <input type="text" name="storage_file_system" value="<?=$data['storage_file_system'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Sensor Type </label>
                   <input type="text" name="sensor_type" value="<?=$data['sensor_type'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Size </label>
                   <input type="text" name="size" value="<?=$data['size'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Processor Model </label>
                   <input type="text" name="processor_model" value="<?=$data['processor_model'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Effective Resolution </label>
                   <input type="text" name="effective_resolution" value="<?=$data['effective_resolution'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Mount </label>
                   <input type="text" name="mount" value="<?=$data['mount'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Resolution Available </label>
                   <input type="text" name="resolution_available" value="<?=$data['resolution_available'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> File Format </label>
                   <input type="text" name="file_format" value="<?=$data['file_format'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> FPS </label>
                   <input type="text" name="fps" value="<?=$data['fps'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Slow Motion Effect </label>
                   <input type="text" name="slow_motion_effect" value="<?=$data['slow_motion_effect'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wifi </label>
                   <input type="text" name="wifi" value="<?=$data['wifi'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> HDMI </label>
                   <input type="text" name="HDMI" value="<?=$data['HDMI'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth </label>
                   <input type="text" name="bluetooth" value="<?=$data['bluetooth'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> NFC </label>
                   <input type="text" name="NFC" value="<?=$data['NFC'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Pictbridge </label>
                   <input type="text" name="pictbridge" value="<?=$data['pictbridge'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> USB </label>
                   <input type="text" name="USB"
                   value="<?=$data['USB'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> View Finder </label>
                   <input type="text" name="view_finder" value="<?=$data['view_finder'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Type </label>
                   <input type="text" name="display_type" value="<?=$data['display_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Size </label>
                   <input type="text" name="display_size" value="<?=$data['display_size'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Resolution </label>
                   <input type="text" name="display_resolution" value="<?=$data['display_resolution'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Moveable Display </label>
                  <input type="text" name="moveable_display" value="<?=$data['moveable_display'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Touchscreen </label>
                   <input type="text" name="touchscreen" value="<?=$data['touchscreen'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> No of Supported Language </label>
                   <input type="text" name="no_of_supported_lang" value="<?=$data['no_of_supported_lang'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Brightness Adjustment </label>
                   <input type="text" name="brightness_adjustment" value="<?=$data['brightness_adjustment'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> ISO </label>
                   <input type="text" name="ISO" value="<?=$data['ISO'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Auto Focus </label>
                   <input type="text" name="auto_focus" value="<?=$data['auto_focus'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> AF Points </label>
                   <input type="text" name="AF_points" value="<?=$data['AF_points'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Touch Focus </label>
                   <input type="text" name="touch_focus" value="<?=$data['touch_focus'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Manual Focus </label>
                   <input type="text" name="manual_focus" value="<?=$data['manual_focus'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Image Stabilization </label>
                   <input type="text" name="image_stabilization" value="<?=$data['image_stabilization'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> In Camera Editing </label>
                   <input type="text" name="in_camera_editing" value="<?=$data['in_camera_editing'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> HDR Shooting Mode </label>
                   <input type="text" name="HDR_shooting_mode" value="<?=$data['HDR_shooting_mode'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Drive Mode </label>
                   <input type="text" name="drive_mode" value="<?=$data['drive_mode'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Burst Mode </label>
                   <input type="text" name="burst_mode" value="<?=$data['burst_mode'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Microphone </label>
                   <input type="text" name="microphone" value="<?=$data['microphone'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> White Balance Type </label>
                   <input type="text" name="white_balance_type" value="<?=$data['white_balance_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Scene Modes </label>
                   <input type="text" name="scene_modes" value="<?=$data['scene_modes'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Iris Control </label>
                   <input type="text" name="iris_control" value="<?=$data['iris_control'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Exposure Modes </label>
                  <input type="text" name="exposure_modes" value="<?=$data['exposure_modes'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Exposure Lock </label>
                   <input type="text" name="exposure_lock" value="<?=$data['exposure_lock'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery Model </label>
                   <input type="text" name="battery_model" value="<?=$data['battery_model'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery </label>
                   <input type="text" name="battery" value="<?=$data['battery'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery Type </label>
                   <input type="text" name="battery_type" value="<?=$data['battery_type'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> No of Shots </label>
                   <input type="text" name="no_of_shots" value="<?=$data['no_of_shots'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Accessories Inbox </label>
                   <input type="text" name="accessories_inbox" value="<?=$data['accessories_inbox'];?>" class="form-control mb-2">
                </div>
                <!-- Additional fields for uploading multiple images -->
                  <div class="col-md-12">
                     <label for=""> Current Images </label>
                  <!-- <input type="hidden" name="old_image[]" value="<?=$data['images'];?>"> -->
                        <?php
$imageFilenames = explode(', ', $data['images']);
        foreach ($imageFilenames as $imageFilename) {
            echo '<img src="../camera_images/' . $imageFilename . '" height="50px" width="50px">';
        }
        ?>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for=""> Upload Images </label>
                     <input type="file" name="images[]" multiple class="form-control">
                  </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="update_camera_product_btn"> Update </button>
                </div>
              </div>
          </form>
        </div>
      </div>
       <?php
} else {
        echo "Product not found";
    }
} else {
    echo "Id missing from URL";
}

?>
    </div>
   </div>
</div>

<?php include 'includes/footer.php';?><?php
