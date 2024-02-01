<?php
   session_start();
  include('../functions/myFunction.php');

  if(isset($_SESSION['auth'])){
    // if($_SESSION['role_as'] != 1) ************* For multiple users

    if($_SESSION['role_as'] == 0){
      redirect('../index.php', 'You are not authorised to access this page');
    }
  }else{
    redirect('../login.php', 'Login to continue');
  }
  
  include('includes/header.php'); 
  // include('../middleware/adminMiddleware.php'); 
?>

<div class="container">
	<div class="row">
    <div class="col-md-12">
      <?php  
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $product = getById("products", $id);
          if(mysqli_num_rows($product) > 0){

            $data = mysqli_fetch_array($product);
        ?>
            <div class="card">
              <div class="card-header">
                <h4> Edit Product </h4>
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
                            if(mysqli_num_rows($categories) > 0){
                              foreach($categories as $item){
                          ?>
                            <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id'] ? 'selected': '' ?>> <?= $item['name']; ?> </option>
                          <?php 
                            }                       
                          }
                          else{
                              echo "No category available";
                            }
                          ?>
                         </select>
                      </div>
                      <div class="col-md-6">
                        <input type="hidden" value="<?= $data['id']; ?>" name="product_id">
                         <label for=""> Brand </label>
                         <input type="text" name="brand" value="<?= $data['brand']; ?>" placeholder="Enter category name" class="form-control">
                      </div>
                      <div class="col-md-6">
                         <label for=""> Model </label>
                         <input type="text" name="model" value="<?= $data['model']; ?>"
                         placeholder="Enter slug" class="form-control">
                      </div>
                      <div class="col-md-6">
                         <label for=""> Color </label>
                         <input type="text" name="color" value="<?= $data['color']; ?>"
                          class="form-control">
                      </div>
                      <div class="col-md-6">
                         <label for=""> Size </label>
                         <input type="text" name="size" value="<?= $data['size']; ?>"
                          class="form-control">
                      </div>
                      <div class="col-md-6">
                         <label for=""> Style </label>
                         <input type="text" name="style" value="<?= $data['style']; ?>"
                          class="form-control">
                      </div>
                      <div class="col-md-6">
                         <label for=""> Wireless Carrier </label>
                         <input type="text" name="wireless_carrier" value="<?= $data['wireless_carrier']; ?>" class="form-control">
                      </div>
                      <div class="col-md-6">
                         <label for=""> Operating System </label>
                         <input type="text" name="operating_system" value="<?= $data['operating_system']; ?>" class="form-control">
                      </div>
                      <div class="col-md-6">
                         <label for=""> Cellular Technology </label>
                         <input type="text" name="cellular_technology" value="<?= $data['cellular_technology']; ?>" class="form-control">
                      </div>
                      
                      <div class="col-md-12">
                       <label class="mb-0"> Affiliate Link </label>
                        <input type="text" name="affiliate_link" value="<?= $data['affiliate_link']; ?>" placeholder="Enter brand" class="form-control mb-2">
                      </div>
                      <div class="col-md-6">
                         <label class="mb-0"> Range </label>
                         <input type="text" name="range" value="<?= $data['range']; ?>" placeholder="Enter original price" class="form-control mb-2">
                      </div>
                      <div class="col-md-12">
                         <label for=""> Small Description </label>
                         <textarea rows="3" name="small_description" placeholder="Enter small description" class="form-control"> <?= $data['small_description']; ?> </textarea>
                      </div>
                      <div class="col-md-12">
                         <label for=""> Description </label>
                         <textarea rows="3" name="description" placeholder="Enter description" class="form-control"> <?= $data['description']; ?> </textarea>
                      </div>
                       <!-- Additional fields for uploading multiple images -->
                        <div class="col-md-12">
                            <label for=""> Upload Images </label>
                            <input type="file" name="image[]" multiple class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for=""> Current Images </label>
                              <?php
                                $imageFilenames = explode(', ', $data['image']);
                                  foreach ($imageFilenames as $imageFilename) {
                                    echo '<img src="../uploads/' . $imageFilename . '" height="50px" width="50px">';
                                }
                              ?>
                        </div>
                      <div class="row">
                        <div class="col-md-6">
                          <label class="mb-0"> Quantity </label>
                          <input type="number" name="qty" value="<?= $data['qty']; ?>"
                           placeholder="Enter quantity" class="form-control mb-2">
                        </div>
                        <div class="col-md-3">
                           <label class="mb-0"> Status </label> <br>
                           <input type="checkbox" <?= $data['status'] ? "checked": ""; ?> 
                           name="status">
                        </div>
                        <div class="col-md-3">
                           <label class="mb-0"> Trending </label> <br>
                           <input type="checkbox" <?= $data['trending'] ? "checked": ""; ?> 
                           name="trending">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" name="update_product_btn"> Update </button>
                      </div>
                    </div>
                </form>
              </div>
            </div>
        <?php
          }else{
              echo "Product not found";
          }
        }else{
              echo "Id missing from URL";
          }
        
      ?>
    </div>
	</div>
</div>

<?php include('includes/footer.php'); ?>