<?php
session_start();
include('../functions/myFunction.php');

// Uncomment and modify the following code for authentication and authorization
/*
if(isset($_SESSION['auth'])){
  // Modify the role check logic as needed
  // For example, if($_SESSION['role_as'] != 1) ************* For multiple users

  if($_SESSION['role_as'] == 0){
    redirect('../index.php', 'You are not authorised to access this page');
  }
}else{
  redirect('../login.php', 'Login to continue');
}
*/

include('includes/header.php'); 
?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4> iPhone Products </h4>
        </div>
        <div class="card-body">
          <table class="table bordered striped">
            <thead>
              <tr>
                <th> Id </th>
                <th> Mobile Category </th>
                <th> Brand </th>
                <th> Model </th>
                <th> Internal Memory </th>
                <th> Chipset </th>
                <th> Graphics </th>
                <th> Screen Protection </th>
                <th> Brightness </th>
                <th> Colours </th>
                <th> Images </th>
                <th> Edit </th>
                <th> Delete </th>
              </tr>
            </thead>
            <tbody>
              <?php  
              $iphone_products = getAll("iphone");
              $i = 1;
              if(mysqli_num_rows($iphone_products) > 0){
                foreach($iphone_products as $item){
                  $imageFilenames = explode(', ', $item['images']); // Split image filenames into an array
                  ?>
                  <tr>
                    <td> <?= $i; ?> </td>
                    <td> <?= $item['mobile_category']; ?></td>
                    <td> <?= $item['brand']; ?></td>
                    <td> <?= $item['model']; ?></td>
                    <td> <?= $item['internal_memory']; ?></td>
                    <td> <?= $item['chipset']; ?></td>
                    <td> <?= $item['graphics']; ?></td>
                    <td> <?= $item['screen_protection']; ?></td>
                    <td> <?= $item['brightness']; ?></td>
                    <td> <?= $item['colours']; ?></td>
                    <td>
                      <?php foreach ($imageFilenames as $imageFilename) { ?>
                        <img src="../uploads/<?= $imageFilename; ?>" alt="<?= $item['model']; ?>" width="50px" height="50px">
                      <?php } ?>
                    </td>
                    <td>
                      <a href="edit-iphone-product.php?id=<?= $item['id']; ?>" class="btn btn-primary btn-sm"> Edit </a>
                    </td>
                    <td>
                      <form action="code.php" method="POST">
                        <input type="hidden" value="<?= $item['id']; ?>" name="iphone_product_id">
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

<?php  include('includes/footer.php'); ?>
