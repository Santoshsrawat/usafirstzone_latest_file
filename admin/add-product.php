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
// include('../middleware/adminMiddleware.php');
?>

<div class="container">
	<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4> Add Product </h4>
        </div>
        <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                   <label class="mb-0"> Select Category </label>
                   <select name="category_id" class="form-select mb-2">
                     <option selected> Select Category </option>
                    <?php
$categories = getAll('categories');
if (mysqli_num_rows($categories)) {
    foreach ($categories as $item) {
        ?>
                      <option value="<?=$item['id'];?>"> <?=$item['name'];?> </option>
                    <?php
}
} else {
    echo "No category available";
}
?>
                   </select>
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Brand </label>
                    <input type="text" name="brand" placeholder="Enter brand"
                    class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Model </label>
                   <input type="text" name="model" placeholder="Enter model name"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Price </label>
                   <input type="text" name="price" placeholder="Enter price name"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Range </label>
                   <input type="text" name="range" placeholder="Enter range"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Small Description </label>
                   <input type="text" name="small_description" placeholder="Enter small description" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Description </label>
                   <input type="text" name="description" placeholder="Enter description"
                   class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Affiliate Link </label>
                    <input type="text" name="affiliate_links" placeholder="Enter affiliate link" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Image </label>
                   <input type="file" name="image" class="form-control mb-2">
                </div>
                <div class="col-md-6">
                   <label class="mb-0"> Upload Image 1 </label>
                   <input type="file" name="image1" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Upload Image 2 </label>
                   <input type="file" name="image2" class="form-control mb-2">
                </div>
                 <div class="col-md-6">
                   <label class="mb-0"> Upload Image 3 </label>
                   <input type="file" name="image3" class="form-control mb-2">
                </div>
                <div class="row">
                  <div class="col-md-3">
                     <label class="mb-0"> Status </label> <br>
                     <input type="checkbox" name="status">
                  </div>
                  <div class="col-md-3">
                     <label class="mb-0"> Trending </label> <br>
                     <input type="checkbox" name="trending">
                  </div>
                  <div class="col-md-3">
                     <label class="mb-0"> Upcoming </label> <br>
                     <input type="checkbox" name="upcoming">
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="add_product_btn"> Save
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