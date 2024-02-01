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
      <div class="card">
        <div class="card-header">
          <h4> Add Android Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
               <div class="col-md-6">
                   <label class="mb-0"> Affiliate Link </label>
                    <input type="text" name="affiliate_links" placeholder="Enter affiliate link" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Image </label>
                   <input type="file" name="image" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Image 1 </label>
                   <input type="file" name="image1" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Upload Image 2 </label>
                   <input type="file" name="image2" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Upload Image 3 </label>
                   <input type="file" name="image3" class="form-control mb-2">
                </div>
               <div class="col-md-6">
                   <label class="mb-0"> Brand </label>
                   <input type="text" name="brand" placeholder="Enter brand name"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Model </label>
                   <input type="text" name="model" placeholder="Enter model name"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Operating System </label>
                    <input type="text" name="operating_system" placeholder="Enter operating system"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Custom UI </label>
                   <input type="text" name="custom_ui" placeholder="Enter custom UI"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Chipset </label>
                   <input type="text" name="chipset" placeholder="Enter chipset"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> CPU </label>
                   <input type="text" name="cpu" placeholder="Enter CPU"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Fabrication </label>
                   <input type="text" name="fabrication" placeholder="Enter fabrication"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Graphics </label>
                   <input type="text" name="graphics" placeholder="Enter Graphics"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> RAM </label>
                   <input type="text" name="ram" placeholder="Enter RAM" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> RAM Type </label>
                   <input type="text" name="ram_type" placeholder="Enter RAM Type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Internal Memory </label>
                   <input type="text" name="internal_memory" placeholder="Enter internal memory" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Storage Type </label>
                   <input type="text" name="storage_type" placeholder="Enter storage type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Type </label>
                    <input type="text" name="display_type" placeholder="Enter display type"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Screen Size </label>
                   <input type="text" name="screen_size" placeholder="Enter screen size" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Resolution </label>
                   <input type="text" name="resolution" placeholder="Enter resolution" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Screen Protection </label>
                   <input type="text" name="screen_protection" placeholder="Enter screen protection" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Brightness </label>
                   <input type="text" name="brightness" placeholder="Enter brightness" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Refresh Rate </label>
                   <input type="text" name="refresh_rate" placeholder="Enter refresh rate" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Weight </label>
                   <input type="text" name="weight" placeholder="Enter weight" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Colours </label>
                   <input type="text" name="colours" placeholder="Enter colours" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Fingerprint Sensor Position </label>
                   <input type="text" name="fingerprint_sensor_position" placeholder="Enter sensor position" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Fingerprint Sensor Type </label>
                   <input type="text" name="fingerprint_sensor_type" placeholder="Enter sensor type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Other Sensors </label>
                   <input type="text" name="other_sensors" placeholder="Enter other sensors" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Main Camera Setup </label>
                   <input type="text" name="main_camera_setup" placeholder="Enter camera setup" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Main Resolution </label>
                   <input type="text" name="main_resolution" placeholder="Enter resolution" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> OIS </label>
                   <input type="text" name="ois" placeholder="Enter OIS " class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Image Resolution </label>
                   <input type="text" name="image_resolution" placeholder="Enter image resolution" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Main video recording </label>
                   <input type="text" name="main_video_recording" placeholder="Enter video recording" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Front camera setup </label>
                   <input type="text" name="front_camera_setup" placeholder="Enter camera setup" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Front Resolution </label>
                   <input type="text" name="front_resolution" placeholder="Enter front resolution" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Front Video Recording </label>
                   <input type="text" name="front_video_recording" placeholder="Enter video recording" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Capacity </label>
                   <input type="text" name="capacity" placeholder="Enter capacity" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Type </label>
                  <input type="text" name="type" placeholder="Enter type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Quick Charging </label>
                   <input type="text" name="quick_charging" placeholder="Enter quick charging"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> USB Type-C </label>
                   <input type="text" name="usb_type_C" placeholder="Enter USB type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM(slots) </label>
                   <input type="text" name="sim(slots)" placeholder="Enter Slot" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM Size </label>
                   <input type="text" name="sim_size" placeholder="Enter SIM size" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Network Support </label>
                   <input type="text" name="network_support" placeholder="Enter Network Support" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> SIM </label>
                   <input type="text" name="sim" placeholder="Enter SIM size" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Connectivity Technology </label>
                   <input type="text" name="connectivity_technology" placeholder="Enter connectivity technology" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wifi </label>
                  <input type="text" name="wifi" placeholder="Enter Wifi" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wifi Features </label>
                   <input type="text" name="wifi_features" placeholder="Enter wifi features"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth </label>
                   <input type="text" name="bluetooth" placeholder="Enter bluetooth"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> GPS </label>
                   <input type="text" name="gps" placeholder="Enter GPS"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Audio Jack </label>
                   <input type="text" name="audio_jack" placeholder="Enter audio jack"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Audio Features </label>
                   <input type="text" name="audio_features" placeholder="Enter audio features"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Images </label>
                   <input type="file" name="images[]" multiple class="form-control mb-2">
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="add_android_product_btn"> Save
                  </button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</div>

<?php include 'includes/footer.php';?>