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
              <h4> Television Products </h4>
          </div>
          <div class="card-body">
            <table class="table bordered striped">
              <thead>
                <tr>
                  <th> Id </th>
                  <th> Brand </th>
                  <th> Model </th>
                  <th> Box Contents </th>
                  <th> Size </th>
                  <th> Refresh Rate </th>
                  <th> Video Formats Supported </th>
                  <th> USB Ports </th>
                  <th> Wifi Present </th>
                  <th> User Interface </th>

                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>

                       <?php
$television_products = getAll("television");
$i = 1;
if (mysqli_num_rows($television_products) > 0) {
    foreach ($television_products as $item) {

        ?>
                      <tr>
                          <td> <?=$i;?> </td>
                          <td> <?=$item['brand'];?></td>
                          <td> <?=$item['model'];?></td>
                          <td> <?=$item['box_contents'];?></td>
                          <td> <?=$item['size'];?></td>
                          <td> <?=$item['refresh_rate'];?></td>
                          <td> <?=$item['video_formats_supported'];?></td>
                          <td> <?=$item['USB_ports'];?></td>
                          <td> <?=$item['wifi_present'];?></td>
                          <td> <?=$item['user_interface'];?></td>


                          <td>
    <a href="edit-television-product.php?id=<?=$item['id'];?>" class="btn btn-primary btn-sm"> Edit </a>
</td>


                          <td>
                              <form action="" method="POST">
                                <input type="hidden" value="<?=$item['id'];?>" name="iphone_product_id">
                                <button class="btn btn-danger" name="delete_iphone_product_btn"> Delete
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