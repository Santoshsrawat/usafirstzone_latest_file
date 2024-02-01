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
              <h4> Laptop Products </h4>
          </div>
          <div class="card-body">
            <table class="table bordered striped">
              <thead>
                <tr>
                  <th> Id </th>
                  <th> Model </th>
                  <th> Operating System </th>
                  <th> Touchscreen </th>
                  <th> Processor </th>
                  <th> No of Cores </th>
                  <th> Battery Type </th>
                  <th> Webcam </th>
                  <th> Speakers </th>
                  <th> Bluetooth </th>
                  <th> Sales Package </th>

                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>
                  <?php
$laptop_products = getAll("laptop");
$i = 1;
if (mysqli_num_rows($laptop_products) > 0) {
    foreach ($laptop_products as $item) {

        ?>
                      <tr>
                          <td> <?=$i;?> </td>
                          <td> <?=$item['model'];?></td>
                          <td> <?=$item['operating_system'];?></td>
                          <td> <?=$item['touchscreen'];?></td>
                          <td> <?=$item['processor'];?></td>
                          <td> <?=$item['no_of_cores'];?></td>
                          <td> <?=$item['battery_type'];?></td>
                          <td> <?=$item['webcam'];?></td>
                          <td> <?=$item['speakers'];?></td>
                          <td> <?=$item['bluetooth'];?></td>
                          <td> <?=$item['sales_package'];?></td>

                          <td>
                              <a href="edit-laptop-product.php?id=<?=$item['id'];?>" class="btn btn-primary btn-sm"> Edit </a>
                          </td>
                          <td>
                              <form action="code.php" method="POST">
                                <input type="hidden" value="<?=$item['id'];?>" name="laptop_product_id">
                                <button class="btn btn-danger" name="delete_laptop_product_btn"> Delete </button>
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