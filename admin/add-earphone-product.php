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
          <h4> Add Earphones Product </h4>
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
                   <label class="mb-0"> Box Content </label>
                   <input type="text" name="box_content" placeholder="Enter box content"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Connector </label>
                   <input type="text" name="connector" placeholder="Enter connector"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Microphone </label>
                   <input type="text" name="microphone" placeholder="Enter microphone"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Type </label>
                   <input type="text" name="type" placeholder="Enter type"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Design </label>
                  <input type="text" name="design" placeholder="Enter design" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Open or Closed Back </label>
                   <input type="text" name="open_or_closed_back" placeholder="Enter open or closed back" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Fit </label>
                    <input type="text" name="fit" placeholder="Enter fit"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Cable Length </label>
                   <input type="text" name="cable_length" placeholder="Enter cable length" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Foldable Design </label>
                   <input type="text" name="foldable_design" placeholder="Enter foldable design" class="form-control mb-2">
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
                   <label class="mb-0"> Dimensions </label>
                   <input type="text" name="dimensions" placeholder="Enter dimensions" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Weight </label>
                   <input type="text" name="weight" placeholder="Enter weight" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Impedance </label>
                   <input type="text" name="impedance" placeholder="Enter impedance" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Sensitivity </label>
                   <input type="text" name="sensitivity" placeholder="Enter sensitivity" class="form-control mb-2">
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
                   <label class="mb-0"> Max Power Input </label>
                   <input type="text" name="max_power_input" placeholder="Enter max power input" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Driver Type </label>
                   <input type="text" name="driver_type" placeholder="Enter driver type" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Magnet Material </label>
                   <input type="text" name="magnet_material" placeholder="Enter magnet material" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Noise Cancellation </label>
                   <input type="text" name="noise_cancellation" placeholder="Enter noise cancellation" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Replaceable Earbuds </label>
                   <input type="text" name="replaceable_earbuds" placeholder="Enter replaceable earbuds" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Call Control </label>
                   <input type="text" name="call_control" placeholder="Enter call control" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Music Control </label>
                   <input type="text" name="music_control" placeholder="Enter music control" class="form-control mb-2">
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
                  <button type="submit" class="btn btn-primary" name="add_earphones_product_btn">  Save
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