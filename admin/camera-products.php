<?php
session_start();
include '../functions/myFunction.php';

// if(isset($_SESSION['auth'])){
//   // if($_SESSION['role_as'] != 1) ************* For multiple users

//   if($_SESSION['role_as'] == 0){
//     redirect('../index.php', 'You are not authorised to access this page');
//   }
// }else{
//   redirect('../login.php', 'Login to continue');
// }

include 'includes/header.php';

?>

<div class="container">
	<div class="row">
		 <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <h4> Camera Products </h4>
          </div>
          <div class="card-body">
            <table class="table bordered striped">
              <thead>
                <tr>
                  <th> Id </th>
                  <th> Brand </th>
                  <th> Model </th>
                  <th> Screen Size </th>
                  <th> Photo Sensor Size </th>
                  <th> JPEG Quality Level </th>
                  <th> Lens Type </th>
                  <th> Focus Type </th>
                  <th> Memory Slots Available </th>
                  <th> Skill Level </th>
                  <th> Images </th>
                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>
                  <?php
$camera_products = getAll("camera");
$i = 1;
if (mysqli_num_rows($camera_products) > 0) {
    foreach ($camera_products as $item) {
        $imageFilenames = explode(', ', $item['images']); // Split image filenames into an array
        ?>
                      <tr>
                          <td> <?=$i;?> </td>
                          <td> <?=$item['brand'];?></td>
                          <td> <?=$item['model'];?></td>
                          <td> <?=$item['screen_size'];?></td>
                          <td> <?=$item['photo_sensor_size'];?></td>
                          <td> <?=$item['jpeg_quality_level'];?></td>
                          <td> <?=$item['lens_type'];?></td>
                          <td> <?=$item['focus_type'];?></td>
                          <td> <?=$item['memory_slots_available'];?></td>
                          <td> <?=$item['skill_level'];?></td>
                          <td>
                              <?php foreach ($imageFilenames as $imageFilename) {?>
                                  <img src="../camera_images/<?=$imageFilename;?>" alt="<?=$item['model'];?>" width="50px" height="50px">
                              <?php }?>
                          </td>
                          <td>
                              <a href="edit-camera-product.php?id=<?=$item['id'];?>"  class="btn btn-primary btn-sm"> Edit </a>
                          </td>
                          <td>
                              <form action="" method="POST">
                                <input type="hidden" value="<?=$item['id'];?>" name="iphone_product_id">
                                <button class="btn btn-danger" name="delete_camera_product_btn"> Delete
                                </button>
                              </form>
                          </td>
                      </tr>
                  <?php
$i++;
    }
} else {
    echo "No record found";
}
?>
            </tbody>
            </table>
          </div>
        </div>
     </div>
	</div>
</div>


<?php include 'includes/footer.php';?>