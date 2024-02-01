<?php
session_start();
//   include('../functions/myFunction.php');

//   if(isset($_SESSION['auth'])){
//     // if($_SESSION['role_as'] != 1) ************* For multiple users

//     if($_SESSION['role_as'] == 0){
//       redirect('../index.php', 'You are not authorised to access this page');
//     }
//   }else{
//    //  redirect('../login.php', 'Login to continue');
//   }

include 'includes/header.php';
// include('../middleware/adminMiddleware.php');
?>

<div class="container">
	<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4> Add Laptop Products </h4>
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
                   <label class="mb-0"> Weight </label>
                   <input type="text" name="weight" placeholder="Enter weight" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Price </label>
                   <input type="text" name="price" placeholder="Enter price" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Colours </label>
                   <input type="text" name="colours" placeholder="Enter colours" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Operating System </label>
                    <input type="text" name="operating_system" placeholder="Enter operating system"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Operating System Type </label>
                    <input type="text" name="operating_system_type" placeholder="Enter operating system type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Size </label>
                    <input type="text" name="display_size" placeholder="Enter display size"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Resolution </label>
                    <input type="text" name="display_resolution" placeholder="Enter display resolution" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Pixel Density </label>
                   <input type="text" name="pixel_density" placeholder="Enter pixel density" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Display Features </label>
                    <input type="text" name="display_features" placeholder="Enter display features" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Touchscreen </label>
                    <input type="text" name="touchscreen" placeholder="Enter touchscreen" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Processor </label>
                   <input type="text" name="processor" placeholder="Enter processor"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Chipset </label>
                   <input type="text" name="chipset" placeholder="Enter chipset"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Clock-Speed </label>
                   <input type="text" name="clock_speed" placeholder="Enter Clock-Speed"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Number of Cores </label>
                   <input type="text" name="no_of_cores" placeholder="Enter Number of Cores"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Graphic Processor </label>
                  <input type="text" name="graphic_processor" placeholder="Enter Graphic Processor"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery Cell </label>
                   <input type="text" name="battery_cell" placeholder="Enter Batery Cell"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery Type </label>
                   <input type="text" name="battery_type" placeholder="Enter Batery Type"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Capacity </label>
                   <input type="text" name="capacity" placeholder="Enter capacity" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> RAM Type </label>
                   <input type="text" name="ram_type" placeholder="Enter RAM Type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Memory Slots </label>
                   <input type="text" name="memory_slots" placeholder="Enter Memory Slots"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Memory Layout </label>
                   <input type="text" name="memory_layout" placeholder="Enter Memory Layout" class="form-control mb-2">
                </div>

                <div class="col-md-6">
                   <label class="mb-0"> SSD Capacity </label>
                   <input type="text" name="ssd_capacity" placeholder="Enter SSD Capacity" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wireless LAN </label>
                   <input type="text" name="wireless_LAN" placeholder="Enter Wireless LAN" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Wifi Version </label>
                   <input type="text" name="wifi_version" placeholder="Enter Wifi Version" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth </label>
                    <input type="text" name="bluetooth" placeholder="Enter Bluetooth"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth Version </label>
                  <input type="text" name="bluetooth_version" placeholder="Enter Bluetooth Version"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> USB Type-C </label>
                   <input type="text" name="usb_type_C" placeholder="Enter USB type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Headphone Jack </label>
                   <input type="text" name="headphone_jack" placeholder="Enter Headphone Jack" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Webcam </label>
                   <input type="text" name="webcam" placeholder="Enter Webcam" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Video Recording </label>
                   <input type="text" name="video_recording" placeholder="Enter screen protection" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Speakers </label>
                   <input type="text" name="speakers" placeholder="Enter Speakers" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> In-built Microphone </label>
                   <input type="text" name="inbuilt_microphone" placeholder="Enter In-built Microphone" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Microphone Type </label>
                   <input type="text" name="microphone_type" placeholder="Enter Microphone Type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Sales Package </label>
                   <input type="text" name="sales_package" placeholder="Enter Sales Package" class="form-control mb-2">
                </div>
                <!-- <div class="col-md-6">
                   <label class="mb-0"> Upload Images </label>
                   <input type="file" name="images[]" multiple class="form-control mb-2">
                </div> -->
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="add_laptop_product_btn"> Save
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