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
    $earbuds_product = getById("earbuds", $id);
    if (mysqli_num_rows($earbuds_product) > 0) {

        $data = mysqli_fetch_array($earbuds_product);
        ?>
      <div class="card">
        <div class="card-header">
          <h4> Edit earbuds Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
               <div class="col-md-6">
                  <input type="hidden" value="<?=$data['id'];?>" name="earbuds_product_id">
                   <label class="mb-0"> Affiliate Link </label>
                   <input type="text" name="affiliate_links" value="<?=$data['affiliate_links'];?>"
                   class="form-control mb-2">
                </div>
                  <div class="col-md-6">
                  <label for=""> Upload Image </label>
                     <input type="file" name="images" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image" value="<?=$data['images'];?>" class="form-control">
                  <img src="../earbuds_images/<?=$data['images'];?>" height="50px" width="50px">
                </div>
               <div class="col-md-6">
                  <label for=""> Upload Image1 </label>
                     <input type="file" name="image1" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image1" value="<?=$data['image1'];?>" class="form-control">
               <img src="../earbuds_images/<?=$data['image1'];?>" height="50px" width="50px">
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Image 2 </label>
                     <input type="file" name="image2" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image2" value="<?=$data['image2'];?>" class="form-control">
               <img src="../earbuds_images/<?=$data['image2'];?>" height="50px" width="50px">
                </div>
                <div class="col-md-6">
                  <label for=""> Upload Image 3 </label>
                     <input type="file" name="image3" class="form-control">
                     <label for=""> Current Image </label>
                     <input type="hidden" name="old_image3" value="<?=$data['image3'];?>" class="form-control">
               <img src="../earbuds_images/<?=$data['image3'];?>" height="50px" width="50px">
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
                   <label class="mb-0"> box_contents </label>
                   <input type="text" name="box_contents" value="<?=$data['box_contents'];?>"
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
                   <label class="mb-0"> fit </label>
                   <input type="text" name="fit" value="<?=$data['fit'];?>"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0">  eartip_size </label>
                   <input type="text" name="eartip_size" value="<?=$data['eartip_size'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> replaceable_earbuds </label>
                   <input type="text" name="replaceable_earbuds" value="<?=$data['replaceable_earbuds'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> colors </label>
                   <input type="text" name="colors" value="<?=$data['colors'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> bluetooth_version </label>
                   <input type="text" name="bluetooth_version" value="<?=$data['bluetooth_version'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> range </label>
                    <input type="text" name="range" value="<?=$data['range'];?>"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> weight </label>
                   <input type="text" name="weight" value="<?=$data['weight'];?>" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> playback_time </label>
                   <input type="text" name="playback_time" value="<?=$data['playback_time'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> charging_time </label>
                   <input type="text" name="charging_time"
                   value="<?=$data['charging_time'];?>" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> warranty</label>
                   <input type="text" name="warranty" value="<?=$data['warranty'];?>" class="form-control mb-2">
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
                  <button type="submit" class="btn btn-primary" name="update_earbuds_product_btn"> Save </button>
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
