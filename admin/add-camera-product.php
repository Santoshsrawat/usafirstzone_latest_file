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
          <h4> Add Camera Products </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6">
                   <label class="mb-0"> Model </label>
                   <input type="text" name="model" placeholder="Enter model name"
                   class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Brand </label>
                   <input type="text" name="brand" placeholder="Enter brand name"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Model Number </label>
                  <input type="text" name="model_number" placeholder="Enter model number" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Viewfinder Type </label>
                   <input type="text" name="viewfinder_type" placeholder="Enter viewfinder type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Screen Size </label>
                   <input type="text" name="screen_size" placeholder="Enter screen size" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Type </label>
                    <input type="text" name="display_type" placeholder="Enter display type"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Touchscreen Type </label>
                    <input type="text" name="touchscreen_type" placeholder="Enter touchscreen type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Autofocus Technology </label>
                    <input type="text" name="autofocus_technology" placeholder="Enter autofocus technology" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Resolution Maximum </label>
                    <input type="text" name="display_resolution_maximum" placeholder="Enter display resolution maximum" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Photo Sensor Size </label>
                   <input type="text" name="photo_sensor_size" placeholder="Enter photo sensor size" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Imaging Photo Sensor Technology </label>
                    <input type="text" name="imaging_photo_sensor_technology" placeholder="Enter imaging photo sensor technology" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Effective Still Resolution </label>
                    <input type="text" name="effective_still_resolution" placeholder="Enter effective still resolution" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Self Timer Duration </label>
                   <input type="text" name="self_timer_duration" placeholder="Enter self timer duration" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> JPEG Quality Level </label>
                   <input type="text" name="jpeg_quality_level" placeholder="Enter jpeg quality level" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Camera Flash </label>
                   <input type="text" name="camera_flash" placeholder="Enter camera flash"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Image Stabilization </label>
                   <input type="text" name="image_stabilization" placeholder="Enter image stabilization" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Video Capture Format </label>
                  <input type="text" name="video_capture_format" placeholder="Enter video capture format" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Video Capture Resolution </label>
                   <input type="text" name="video_capture_resolution" placeholder="Enter video capture resolution" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Lens Type </label>
                   <input type="text" name="lens_type" placeholder="Enter lens type"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Optical Zoom </label>
                   <input type="text" name="optical_zoom" placeholder="Enter optical zoom" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Compatible Mountings </label>
                   <input type="text" name="compatible_mountings" placeholder="Enter compatible mountings" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Focus Type </label>
                   <input type="text" name="focus_type" placeholder="Enter focus type"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Maximum Focal Length </label>
                   <input type="text" name="maximum_focal_length" placeholder="Enter maximum focal length" class="form-control mb-2">
                </div>

                <div class="col-md-6">
                   <label class="mb-0"> Minimum Focal Length </label>
                  <input type="text" name="minimum_focal_length" placeholder="Enter minimum focal length" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Connectivity Technology </label>
                   <input type="text" name="connectivity_technology" placeholder="Enter connectivity technology" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Continuous Shooting Speed </label>
                   <input type="text" name="continuous_shooting_speed" placeholder="Enter continuous shooting speed" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wireless Communication Technology </label>
                    <input type="text" name="wireless_communication_technology" placeholder="Enter wireless communication technology"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Memory Slots Available </label>
                  <input type="text" name="memory_slots_available" placeholder="Enter memory slots available"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Special Features </label>
                   <input type="text" name="special_features" placeholder="Enter special features" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Skill Level </label>
                   <input type="text" name="skill_level" placeholder="Enter skill level" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Form Factor </label>
                   <input type="text" name="form_factor" placeholder="Enter form factor" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Audio Output Type </label>
                   <input type="text" name="audio_output_type" placeholder="Enter audio output type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Features Photo Sensor Technology </label>
                   <input type="text" name="features_photo_sensor_technology" placeholder="Enter features photo sensor technology" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Expanded ISO Maximum </label>
                   <input type="text" name="expanded_ISO_maximum" placeholder="Enter expanded ISO maximum" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Expanded ISO Minimum </label>
                   <input type="text" name="expanded_ISO_minimum" placeholder="Enter expanded ISO minimum" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Max Shutter Speed </label>
                   <input type="text" name="max_shutter_speed" placeholder="Enter max shutter speed" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Min Shutter Speed </label>
                   <input type="text" name="min_shutter_speed" placeholder="Enter min shutter speed" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Shooting Modes </label>
                   <input type="text" name="shooting_modes" placeholder="Enter shooting modes" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery Description </label>
                   <input type="text" name="battery_description" placeholder="Enter battery description" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0">Battery Weight </label>
                   <input type="text" name="battery_weight" placeholder="Enter battery weight" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Warranty Type </label>
                   <input type="text" name="warranty_type" placeholder="Enter warranty type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> MFG Warranty Description Labor </label>
                   <input type="text" name="mfg_warranty_description_labor" placeholder="Enter mfg warranty description labor" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Price </label>
                   <input type="text" name="Price" placeholder="Enter the Price" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Images </label>
                   <input type="file" name="images[]" multiple class="form-control mb-2">
                </div>
                
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="add_camera_product_btn"> Save
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