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
    $iphone_product = getById("iphone", $id);
    if (mysqli_num_rows($iphone_product) > 0) {

        $data = mysqli_fetch_array($iphone_product);
        ?>
      <div class="card">
        <div class="card-header">
          <h4> Edit iPhone Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
               <div class="col-md-6">
                   <input type="hidden" value="<?=$data['id'];?>" name="iphone_product_id">
                   <label class="mb-0"> Mobile Category </label>
                   <input type="text" name="mobile_category" value="<?=$data['mobile_category'];
        ?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                  <input type="hidden" value="<?=$data['id'];?>" name="laptop_product_id">
                   <label class="mb-0"> Affiliate Link </label>
                   <input type="text" name="affiliate_links" value="<?=$data['affiliate_links'];?>"
                   class="form-control mb-2">
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
                   <label class="mb-0"> Chipset </label>
                    <input type="text" name="chipset"
                    value="<?=$data['chipset'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> CPU </label>
                   <input type="text" name="cpu" value="<?=$data['cpu'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Architecture </label>
                   <input type="text" name="architecture" value="<?=$data['architecture'];?>"
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
                   <label class="mb-0"> Expandable Memory </label>
                   <input type="text" name="expandable_memory"
                   value="<?=$data['expandable_memory'];?>" class="form-control mb-2">
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
                   <label class="mb-0"> Pixel Density </label>
                   <input type="text" name="pixel_density" value="<?=$data['pixel_density'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Screen to Body Ratio </label>
                   <input type="text" name="screen_body_ratio" value="<?=$data['screen_body_ratio'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Screen Protection </label>
                   <input type="text" name="screen_protection" value="<?=$data['screen_protection'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Brightness </label>
                   <input type="text" name="brightness" value="<?=$data['brightness'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> HDR 10/ HDR+ support </label>
                   <input type="text" name="HDR10/HDR+" value="<?=$data['HDR10/HDR+'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Refresh Rate </label>
                   <input type="text" name="refresh_rate" value="<?=$data['refresh_rate'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Waterproof </label>
                   <input type="text" name="waterproof" value="<?=$data['waterproof'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Ruggedness </label>
                   <input type="text" name="ruggedness" value="<?=$data['ruggedness'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Colours </label>
                   <input type="text" name="colours" value="<?=$data['colours'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Main Camera Setup </label>
                   <input type="text" name="main_camera_setup" value="<?=$data['main_camera_setup'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Main Camera Resolution </label>
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
                   <label class="mb-0"> Camera Features </label>
                   <input type="text" name="camera_features"
                   value="<?=$data['camera_features'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Front camera setup </label>
                   <input type="text" name="front_camera_setup"
                   value="<?=$data['front_camera_setup'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Front Camera Resolution </label>
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
                   <label class="mb-0"> Wireless Charging </label>
                   <input type="text" name="wireless_charging" value="<?=$data['wireless_charging'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Quick Charging </label>
                   <input type="text" name="quick_charging" value="<?=$data['quick_charging'];?>" class="form-control mb-2">
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
                   <label class="mb-0"> SIM 1 (5G Bands) </label>
                   <input type="text" name="sim1_5G_bands" value="<?=$data['sim1_5G_bands'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 1 (4G Bands) </label>
                   <input type="text" name="sim1_4G_bands" value="<?=$data['sim1_4G_bands'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 1 (3G Bands) </label>
                   <input type="text" name="sim1_3G_bands" value="<?=$data['sim1_3G_bands'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 1 (2G Bands) </label>
                   <input type="text" name="sim1_2G_bands" value="<?=$data['sim1_2G_bands'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> SIM 1 GPRS </label>
                   <input type="text" name="sim1_gprs" value="<?=$data['sim1_gprs'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> SIM 1 EDGE </label>
                   <input type="text" name="sim1_edge" value="<?=$data['sim1_edge'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 2 (5G Bands) </label>
                   <input type="text" name="sim2_5G_bands" value="<?=$data['sim2_5G_bands'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 2 (4G Bands) </label>
                   <input type="text" name="sim2_4G_bands" value="<?=$data['sim2_4G_bands'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 2 (3G Bands) </label>
                   <input type="text" name="sim2_3G_bands" value="<?=$data['sim2_3G_bands'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 2 (2G Bands) </label>
                   <input type="text" name="sim2_2G_bands" value="<?=$data['sim2_2G_bands'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 2 GPRS </label>
                   <input type="text" name="sim2_gprs" value="<?=$data['sim2_gprs'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM 2 EDGE </label>
                   <input type="text" name="sim2_edge" value="<?=$data['sim2_edge'];?>" class="form-control mb-2">
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
                  <div class="col-md-12">
                     <label for=""> Current Images </label>
                  <!-- <input type="hidden" name="old_image[]" value="<?=$data['images'];?>"> -->
                        <?php
$imageFilenames = explode(', ', $data['images']);
        foreach ($imageFilenames as $imageFilename) {
            echo '<img src="../uploads/' . $imageFilename . '" height="50px" width="50px">';
        }
        ?>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for=""> Upload Images </label>
                     <input type="file" name="images[]" multiple class="form-control">
                  </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="update_iphone_product_btn"> Update </button>
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
