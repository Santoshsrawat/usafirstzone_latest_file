<?php
   session_start();
  include('../functions/myFunction.php');

  if(isset($_SESSION['auth'])){
    // if($_SESSION['role_as'] != 1) ************* For multiple users

    if($_SESSION['role_as'] == 0){
      redirect('../index.php', 'You are not authorised to access this page');
    }
  }else{
    redirect('../login.php', 'Login to continue');
  }
  
  include('includes/header.php'); 
  // include('../middleware/adminMiddleware.php'); 
?>

<div class="container">
	<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4> Add Television Product </h4>
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
                   <label class="mb-0"> Warranty </label>
                    <input type="text" name="warranty" placeholder="Enter warranty" 
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Box Contents </label>
                   <input type="text" name="box_contents" placeholder="Enter box_contents" 
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Stand Color </label>
                   <input type="text" name="stand_color" placeholder="Enter stand color" 
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Remote Type </label>
                   <input type="text" name="remote_type" placeholder="Enter remote type" 
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Cell Requirement </label>
                   <input type="text" name="cell_requirement" placeholder="Enter cell requirement"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Type </label>
                   <input type="text" name="type" placeholder="Enter type" 
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Size </label>
                   <input type="text" name="size" placeholder="Enter size" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Resolution </label>
                   <input type="text" name="resolution" placeholder="Enter resolution" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> LED Backlight Type </label>
                   <input type="text" name="LED_backlight_type" placeholder="Enter LED Backlight Type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Refresh Rate </label>
                   <input type="text" name="refresh_rate" placeholder="Enter refresh rate" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Aspect Ratio </label>
                    <input type="text" name="aspect_ratio" placeholder="Enter aspect ratio" 
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Weight With Stand </label>
                   <input type="text" name="weight_with_stand" placeholder="Enter weight with stand" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Dimensions With </label>
                   <input type="text" name="dimensions_with" placeholder="Enter dimensions with" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Stand(W X D X H) </label>
                   <input type="text" name="stand_with" placeholder="Enter Stand" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Dimensions Without </label>
                   <input type="text" name="dimensions_without" placeholder="Enter dimensions without" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Stand(W X D X H) </label>
                   <input type="text" name="stand_without" placeholder="Enter Stand" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Video Formats Supported </label>
                   <input type="text" name="video_formats_supported" placeholder="Enter video formats supported" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Other Video Features </label>
                   <input type="text" name="other_video_features" placeholder="Enter other video features" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Sound Technology </label>
                   <input type="text" name="sound_technology" placeholder="Enter sound technology" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Total Speaker Output </label>
                   <input type="text" name="total_speaker_output" placeholder="Enter total speaker output" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Speaker Frequency Range </label>
                   <input type="text" name="speaker_frequency_range" placeholder="Enter speaker_frequency_range" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> USB Ports </label>
                   <input type="text" name="USB_ports" placeholder="Enter USB Ports" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> HDMI Ports </label>
                   <input type="text" name="HDMI_ports" placeholder="Enter HDMI Ports" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Digital/Optical Audio Output Ports </label>
                   <input type="text" name="digital_audio_output" placeholder="Enter Optical Audio Output Ports" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> RF Input(Analog Coaxial) Ports </label>
                   <input type="text" name="RF_input_ports" placeholder="Enter RF Input(Analog Coaxial) Ports" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Composite Input(Audio Video Cable) Ports </label>
                   <input type="text" name="composite_input" placeholder="Enter composite input" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Ethernet Sockets </label>
                   <input type="text" name="ethernet_sockets" placeholder="Enter ethernet sockets" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wifi Present </label>
                   <input type="text" name="wifi_present" placeholder="Enter wifi present" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Miracast/Screen Mirroring Support </label>
                   <input type="text" name="miracast" placeholder="Enter miracast" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Inbuilt Apps </label>
                   <input type="text" name="inbuilt_apps" placeholder="Enter inbuilt apps" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Voice Recognition </label>
                  <input type="text" name="voice_recognition" placeholder="Enter voice recognition" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Other Smart Features </label>
                   <input type="text" name="other_smart_features" placeholder="Enter other smart features" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> User Interface </label>
                   <input type="text" name="user_interface" placeholder="Enter user interface" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Voltage Requirement </label>
                   <input type="text" name="voltage_requirement" placeholder="Enter voltage requirement" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Frequency Requirement </label>
                   <input type="text" name="frequency_requirement" placeholder="Enter frequency requirement" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Power Consumption Running </label>
                   <input type="text" name="power_consumption_running" placeholder="Enter power consumption running" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Power Consumption Standby </label>
                   <input type="text" name="power_consumption_standby" placeholder="Enter power consumption standby" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Images </label>
                   <input type="file" name="images[]" multiple class="form-control mb-2">
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="add_television_product_btn"> Save 
                  </button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
	</div>
</div>

<?php include('includes/footer.php'); ?>