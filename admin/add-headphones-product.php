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
          <h4> Add Headphones Product </h4>
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
                   <label class="mb-0"> Title </label>
                    <input type="text" name="title" placeholder="Enter title" 
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
                   <label class="mb-0"> Type </label>
                   <input type="text" name="type" placeholder="Enter type"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Design </label>
                   <input type="text" name="design" placeholder="Enter design" 
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Fit </label>
                  <input type="text" name="fit" placeholder="Enter fit" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Detachable Cable </label>
                   <input type="text" name="detachable_cable" placeholder="Enter detachable cable" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Call Control </label>
                    <input type="text" name="call_control" placeholder="Enter call control" 
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Music Control </label>
                   <input type="text" name="music_control" placeholder="Enter music control" class="form-control mb-2">
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
                   <label class="mb-0"> Driver Size </label>
                   <input type="text" name="driver_size" placeholder="Enter driver size" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Impedance </label>
                   <input type="text" name="impedance" placeholder="Enter impedance" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Max Frequency Response </label>
                   <input type="text" name="max_frequency_response" placeholder="Enter max frequency response" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Min Frequency Response </label>
                   <input type="text" name="min_frequency_response" placeholder="Enter min frequency response" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Driver Type </label>
                   <input type="text" name="driver_type" placeholder="Enter driver type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Connector </label>
                   <input type="text" name="connector" placeholder="Enter connector" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth Version </label>
                   <input type="text" name="bluetooth_version" placeholder="Enter bluetooth version" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Bluetooth Features </label>
                   <input type="text" name="bluetooth_features" placeholder="Enter bluetooth features" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Range </label>
                   <input type="text" name="range" placeholder="Enter range" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Microphone </label>
                   <input type="text" name="microphone" placeholder="Enter microphone" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Playback Time </label>
                   <input type="text" name="playback_time" placeholder="Enter playback time" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Battery Capacity </label>
                   <input type="text" name="battery_capacity" placeholder="Enter battery capacity" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Charging Type </label>
                   <input type="text" name="charging_type" placeholder="Enter charging type" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Charging Time </label>
                   <input type="text" name="charging_time" placeholder="Enter charging time" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Compatible Models </label>
                   <input type="text" name="compatible_models" placeholder="Enter compatible_models" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Images </label>
                   <input type="file" name="images[]" multiple class="form-control mb-2">
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="add_headphones_product_btn">  Save 
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