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
              <h4> Android Products </h4>
          </div>
          <div class="card-body">
            <table class="table bordered striped">
              <thead>
                <tr>
                  <th> Id </th>
                  <th> Model </th>
                  <th> Operating System </th>
                  <th> RAM </th>
                  <th> Internal Memory </th>
                  <th> Chipset </th>
                  <th> Storage Type </th>
                  <th> Screen Protection </th>
                  <th> Brightness </th>
                  <th> Weight </th>
                  <th> Colours </th>
                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>
                  <?php
$android_products = getAll("android");
$i = 1;
if (mysqli_num_rows($android_products) > 0) {
    foreach ($android_products as $item) {

        ?>
                      <tr>
                          <td> <?=$i;?> </td>
                          <td> <?=$item['model'];?></td>
                          <td> <?=$item['operating_system'];?></td>
                          <td> <?=$item['ram'];?></td>
                          <td> <?=$item['internal_memory'];?></td>
                          <td> <?=$item['chipset'];?></td>
                          <td> <?=$item['storage_type'];?></td>
                          <td> <?=$item['screen_protection'];?></td>
                          <td> <?=$item['brightness'];?></td>
                          <td> <?=$item['weight'];?></td>
                          <td> <?=$item['colours'];?></td>
                          <td>
                              <a href="edit-android-product.php?id=<?=$item['id'];?>" class="btn btn-primary btn-sm"> Edit </a>
                          </td>
                          <td>
                              <form action="code.php" method="POST">
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