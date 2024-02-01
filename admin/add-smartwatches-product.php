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
          <h4> Add Smartwatches Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
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
                   <label class="mb-0"> operating_system </label>
                  <input type="text" name="operating_system" placeholder="Enter operating_system" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Box Content </label>
                   <input type="text" name="box_contents" placeholder="Enter box content"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> RAM </label>
                   <input type="text" name="RAM" placeholder="Enter RAM"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> internal_memory </label>
                   <input type="text" name="internal_memory" placeholder="Enter internal_memory"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> compatible_OS  </label>
                   <input type="text" name="compatible_OS" placeholder="Enter compatible_OS"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> charging_mode </label>
                  <input type="text" name="charging_mode" placeholder="Enter charging_mode" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> body_material </label>
                   <input type="text" name="body_material" placeholder="Enter body_material" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> strap_material </label>
                    <input type="text" name="strap_material" placeholder="Enter strap_material"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> colours </label>
                   <input type="text" name="colours" placeholder="Enter colours" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> clock_face </label>
                   <input type="text" name="clock_face" placeholder="Enter clock_face" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> speaker </label>
                   <input type="text" name="speaker" placeholder="Enter speaker" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> screen_size </label>
                   <input type="text" name="screen_size" placeholder="Enter screen_size" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> screen_resolution </label>
                   <input type="text" name="screen_resolution" placeholder="Enter screen_resolution" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> pixel_density </label>
                   <input type="text" name="pixel_density" placeholder="Enter pixel_density" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> display_technology </label>
                   <input type="text" name="display_technology" placeholder="Enter display_technology" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> touchscreen </label>
                   <input type="text" name="touchscreen" placeholder="Enter touchscreen" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> bluetooth </label>
                   <input type="text" name="bluetooth" placeholder="Enter bluetooth" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> wirless_protocol </label>
                   <input type="text" name="wirless_protocol" placeholder="Enter wirless_protocol" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> USB_connectivity </label>
                   <input type="text" name="USB_connectivity" placeholder="Enter USB_connectivity" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> NFC </label>
                  <input type="text" name="NFC" placeholder="Enter NFC" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> accelerometer </label>
                   <input type="text" name="accelerometer" placeholder="Enter accelerometer" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> gyro </label>
                   <input type="text" name="gyro" placeholder="Enter gyro" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> light </label>
                   <input type="text" name="light" placeholder="Enter light" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> IR_gesture </label>
                   <input type="text" name="IR_gesture" placeholder="Enter IR_gesture" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> GPS </label>
                   <input type="text" name="GPS" placeholder="Enter GPS" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> email </label>
                   <input type="text" name="email" placeholder="Enter email" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> text_message </label>
                   <input type="text" name="text_message" placeholder="Enter text_message" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> incoming_call </label>
                   <input type="text" name="incoming_call" placeholder="Enter incoming_call" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> alarm </label>
                   <input type="text" name="alarm" placeholder="Enter alarm" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> calendar_reminder </label>
                   <input type="text" name="calendar_reminder" placeholder="Enter calendar_reminder" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> facebook </label>
                   <input type="text" name="facebook" placeholder="Enter facebook" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> google_voice </label>
                   <input type="text" name="google_voice" placeholder="Enter google_voice" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> make_call </label>
                   <input type="text" name="make_call" placeholder="Enter make_call" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> receive_call </label>
                   <input type="text" name="receive_call" placeholder="Enter receive_call" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> voice_control </label>
                   <input type="text" name="voice_control" placeholder="Enter voice_control" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> calories_intake </label>
                   <input type="text" name="calories_intake" placeholder="Enter calories_intake" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> distance </label>
                   <input type="text" name="distance" placeholder="Enter distance" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> steps </label>
                  <input type="text" name="steps" placeholder="Enter steps" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> sleep_quality </label>
                   <input type="text" name="sleep_quality" placeholder="Enter sleep_quality" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> heartrate </label>
                   <input type="text" name="heartrate" placeholder="Enter heartrate" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> activity/inactivity </label>
                   <input type="text" name="activity_inactivity" placeholder="Enter activity/inactivity" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Images </label>
                   <input type="file" name="images[]" multiple class="form-control mb-2">
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="add_smartwatches_product_btn">  Save
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