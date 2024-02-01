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
              <h4> Products </h4>
          </div>
          <div class="card-body">
            <table class="table bordered striped">
              <thead>
                <tr>
                  <th> Id </th>
                  <th> Brand </th>
                  <th> Model </th>
                  <th> Color </th>
                  <th> Size </th>
                  <th> Style </th>
                  <th> Wireless Carrier </th>
                  <th> Operating System </th>
                  <th> Cellular Technology </th>
                  <th> Memory Storage </th>
                  <th> Connectivity </th>
                  <th> Screen Size </th>
                  <th> Wireless Network Technology </th>
                  <th> Affiliate Link </th>
                  <th> Range </th>
                  <th> Image </th>
                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>
                  <?php
$products = getAll("products");
$i = 1;
if (mysqli_num_rows($products) > 0) {
    foreach ($products as $item) {
        $imageFilenames = explode(', ', $item['image']); // Split image filenames into an array
        ?>
                      <tr>
                          <td> <?=$i;?></td>
                          <td> <?=$item['brand'];?></td>
                          <td> <?=$item['model'];?></td>
                          <td> <?=$item['color'];?></td>
                          <td> <?=$item['size'];?></td>
                          <td> <?=$item['style'];?></td>
                          <td> <?=$item['wireless_carrier'];?></td>
                          <td> <?=$item['operating_system'];?></td>
                          <td> <?=$item['cellular_technology'];?></td>
                          <td> <?=$item['memory_storage'];?></td>
                          <td> <?=$item['connectivity'];?></td>
                          <td> <?=$item['screen_size'];?></td>
                          <td> <?=$item['wireless_network_technology'];?></td>
                          <td> <?=$item['affiliate_link'];?></td>
                          <td> <?=$item['range'];?></td>
                          <td>
                              <?php foreach ($imageFilenames as $imageFilename) {?>
                                  <img src="../uploads/<?=$imageFilename;?>" alt="<?=$item['model'];?>" width="50px" height="50px">
                              <?php }?>
                          </td>
                          <td>
                              <a href="edit-product.php?id=<?=$item['id'];?>" class="btn btn-primary btn-sm"> Edit </a>
                          </td>
                          <td>
                              <form action="code.php" method="POST">
                                <input type="hidden" value="<?=$item['id'];?>" name="product_id">
                                <button class="btn btn-danger" value="<?=$item['id'];?>"
                                  name="delete_product_btn"> Delete </button>
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