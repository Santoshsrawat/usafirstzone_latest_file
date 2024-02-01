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
              <h4> Earbuds Products </h4>
          </div>
          <div class="card-body">
            <table class="table bordered striped">
              <thead>
                <tr>
                  <th> Id </th>
                  <th> Brand </th>
                  <th> Model </th>
                  <th> Colours </th>
                  <th> Design </th>
                  <th> Weight </th>
                  <th> Call Control </th>
                  <th> Bluetooth Version </th>
                  <th> Range </th>
                  <th> Playback Time </th>
                  <th> Compatible Models </th>
                  <th> Images </th>
                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>
                  <?php
$earbuds_products = getAll("earbuds");
$i = 1;
if (mysqli_num_rows($earbuds_products) > 0) {
    foreach ($earbuds_products as $item) {
        $imageFilenames = explode(', ', $item['images']); // Split image filenames into an array
        ?>
                      <tr>
                          <td> <?=$i;?> </td>
                          <td> <?=$item['brand'];?></td>
                          <td> <?=$item['model'];?></td>
                          <td> <?=$item['colors'];?></td>
                          <td> <?=$item['design'];?></td>
                          <td> <?=$item['weight'];?></td>
                          <td> <?=$item['call_control'];?></td>
                          <td> <?=$item['bluetooth_version'];?></td>
                          <td> <?=$item['range'];?></td>
                          <td> <?=$item['playback_time'];?></td>
                          <td> <?=$item['compatible_models'];?></td>
                          <td>
                              <?php foreach ($imageFilenames as $imageFilename) {?>
                                  <img src="../earbuds_images/<?=$imageFilename;?>" alt="<?=$item['model'];?>" width="50px" height="50px">
                              <?php }?>
                          </td>
                          <td>
                              <a href="edit-earbuds-product.php?id=<?=$item['id'];?>" class="btn btn-primary btn-sm"> Edit </a>
                          </td>
                          <td>
                              <form action="" method="POST">
                                <input type="hidden" value="<?=$item['id'];?>" name="android_product_id">
                                <button class="btn btn-danger" name="delete_android_product_btn"> Delete </button>
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