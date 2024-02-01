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
    $earphones_product = getById("earphones", $id);
    if (mysqli_num_rows($earphones_product) > 0) {

        $data = mysqli_fetch_array($earphones_product);
        ?>
      <div class="card">
        <div class="card-header">
          <h4> Edit earphones Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
               <div class="col-md-6">
                  <input type="hidden" value="<?=$data['id'];?>" name="earphones_product_id">
                   <label class="mb-0"> Affiliate Link </label>
                   <input type="text" name="affiliate_links" value="<?=$data['affiliate_links'];?>"
                   class="form-control mb-2">
                </div>
                  <div class="col-md-6">
                  <label for=""> Upload Image </label>
                     <input type="file" name="image" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image" value="<?=$data['image'];?>" class="form-control">
                  <img src="../earphones_images/<?=$data['image'];?>" height="50px" width="50px">
                </div>
               <div class="col-md-6">
                  <label for=""> Upload Image1 </label>
                     <input type="file" name="image1" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image1" value="<?=$data['image1'];?>" class="form-control">
               <img src="../earphones_images/<?=$data['image1'];?>" height="50px" width="50px">
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Image 2 </label>
                     <input type="file" name="image2" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image2" value="<?=$data['image2'];?>" class="form-control">
               <img src="../earphones_images/<?=$data['image2'];?>" height="50px" width="50px">
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Image 3 </label>
                     <input type="file" name="image3" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image3" value="<?=$data['image3'];?>" class="form-control">
               <img src="../earphones_images/<?=$data['image3'];?>" height="50px" width="50px">
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
                   <label class="mb-0"> title </label>
                   <input type="text" name="title" value="<?=$data['title'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> box_content </label>
                   <input type="text" name="box_content" value="<?=$data['box_content'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> connector </label>
                    <input type="text" name="connector" value="<?=$data['connector'];?>"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> microphone </label>
                   <input type="text" name="microphone" value="<?=$data['microphone'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0">  type  </label>
                   <input type="text" name="type" value="<?=$data['type'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> design </label>
                   <input type="text" name="design" value="<?=$data['design'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> open_or_closed_back  </label>
                   <input type="text" name="open_or_closed_back" value="<?=$data['open_or_closed_back'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> fit </label>
                   <input type="text" name="fit" value="<?=$data['fit'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0">  cable_length </label>
                   <input type="text" name="cable_length" value="<?=$data['cable_length'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> foldable_design </label>
                   <input type="text" name="foldable_design" value="<?=$data['foldable_design'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> colors </label>
                   <input type="text" name="colors" value="<?=$data['colors'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> driver_size </label>
                   <input type="text" name="driver_size" value="<?=$data['driver_size'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> dimensions </label>
                    <input type="text" name="dimensions" value="<?=$data['dimensions'];?>"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> weight </label>
                   <input type="text" name="weight" value="<?=$data['weight'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> impedance </label>
                   <input type="text" name="impedance" value="<?=$data['impedance'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> sensitivity </label>
                   <input type="text" name="sensitivity"
                   value="<?=$data['sensitivity'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> max_frequency_response</label>
                   <input type="text" name="max_frequency_response" value="<?=$data['max_frequency_response'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> min_frequency_response </label>
                   <input type="text" name="min_frequency_response" value="<?=$data['min_frequency_response'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> max_power_input</label>
                   <input type="text" name="max_power_input" value="<?=$data['max_power_input'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> driver_type</label>
                   <input type="text" name="driver_type" value="<?=$data['driver_type'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> magnet_material </label>
                   <input type="text" name="magnet_material" value="<?=$data['magnet_material'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0">noise_cancellation</label>
                   <input type="text" name="noise_cancellation" value="<?=$data['noise_cancellation'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> replaceable_earbuds </label>
                   <input type="text" name="replaceable_earbuds" value="<?=$data['replaceable_earbuds'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0">call_control </label>
                   <input type="text" name="call_control"
                   value="<?=$data['call_control'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> music_control </label>
                   <input type="text" name="music_control" value="<?=$data['music_control'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> compatible_models </label>
                   <input type="text" name="compatible_models" value="<?=$data['compatible_models'];?>" class="form-control mb-2">
                </div>
              

                <div class="col-md-12 mt-3">
                  <button type="submit" class="btn btn-primary" name="update_earphones_product_btn"> Save </button>
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
