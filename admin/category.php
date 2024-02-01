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
        <div class="card">
          <div class="card-header">
              <h4> Categories </h4>
          </div>
          <div class="card-body">
            <table class="table bordered striped">
              <thead>
                <tr>
                  <th> Id </th>
                  <th> Name </th>
                  <th> Image </th>
                  <th> Status </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <?php  
                    $category = getAll("categories");
                    $i = 1;
                      if(mysqli_num_rows($category) > 0){
                        foreach($category as $item){
                      ?>
                        <tr>
                            <td> <?= $i; ?></td>
                            <td> <?= $item['name']; ?></td>
                            <td> 
                                <img src="../uploads/<?= $item['image']; ?>" alt="<?= $item['name']; ?>" width="50px" height="50px"> 
                            </td>
                            <td>
                                <?= $item['status'] == '0'? "Visible" : "Hidden"; ?></td>
                            </td>
                            <td> 
                                <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-primary"> Edit </a>
                                <form action="code.php" method="POST">
                                <input type="hidden" value="<?= $item['id']; ?>" name="category_id">
                                  <button class="btn btn-danger" name="delete_category_btn"> Delete </button>
                                </form>
                            </td>
                        </tr>
                      <?php
                        $i++;
                        }
                    }else{
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