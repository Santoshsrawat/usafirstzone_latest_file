<?php
include("../admin/connection/config.php");
?>

<?php
if(isset($_POST['upload_blog']))
{
    // Retrieve form data
    $blog_link = mysqli_real_escape_string($conn, $_POST['blog_link']);
    $title_name = mysqli_real_escape_string($conn, $_POST['title_name']);
    $heading_1 = mysqli_real_escape_string($conn, $_POST['heading_1']);
    $description_1 = mysqli_real_escape_string($conn, $_POST['description_1']);
    $heading_2 = mysqli_real_escape_string($conn, $_POST['heading_2']);
    $description_2 = mysqli_real_escape_string($conn, $_POST['description_2']);
    $heading_3 = mysqli_real_escape_string($conn, $_POST['heading_3']);
    $description_3 = mysqli_real_escape_string($conn, $_POST['description_3']);
    $heading_4 = mysqli_real_escape_string($conn, $_POST['heading_4']);
    $description_4 = mysqli_real_escape_string($conn, $_POST['description_4']);

    // ---title_img
    $title_img = $_FILES["title_img"]["name"];
    $tempname = $_FILES["title_img"]["tmp_name"];
    $folder = "../blogs_images/" . $title_img;
    move_uploaded_file($tempname, $folder);

    // ----
    $images_1 = $_FILES["images_1"]["name"];
    $tempname1 = $_FILES["images_1"]["tmp_name"];
    $folder1 = "../blogs_images/" . $images_1;
    move_uploaded_file($tempname1, $folder1);

    // -----
    $images_2 = $_FILES["images_2"]["name"];
    $tempname2 = $_FILES["images_2"]["tmp_name"];
    $folder2 = "../blogs_images/" . $images_2;
    move_uploaded_file($tempname2, $folder2);

    // ---
    $images_3 = $_FILES["images_3"]["name"];
    $tempname3 = $_FILES["images_3"]["tmp_name"];
    $folder3 = "../blogs_images/" . $images_3;
    move_uploaded_file($tempname3, $folder3);

    // ----
    $images_4 = $_FILES["images_4"]["name"];
    $tempname4 = $_FILES["images_4"]["tmp_name"];
    $folder4 = "../blogs_images/" . $images_4;
    move_uploaded_file($tempname4, $folder4);

    // Insert data into the database
    $sql = "INSERT INTO blogs (blog_link, title_img, title_name, heading_1, description_1, images_1, heading_2, description_2, images_2, heading_3, description_3, images_3, heading_4, description_4, images_4) 
    VALUES ('$blog_link', '$title_img', '$title_name', '$heading_1', '$description_1', '$images_1', '$heading_2', '$description_2', '$images_2', '$heading_3', '$description_3', '$images_3', '$heading_4', '$description_4', '$images_4')";

    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        echo "Inserted";
    } else {
        echo "Failed: " . mysqli_error($conn); // Display any error message
    }
}
?>


<?php
   session_start();
//   include('../functions/myFunction.php');

  if(isset($_SESSION['auth'])){
    // if($_SESSION['role_as'] != 1) ************* For multiple users

    if($_SESSION['role_as'] == 0){
      redirect('../index.php', 'You are not authorised to access this page');
    }
  }else{
   //  redirect('../login.php', 'Login to continue');
  }
  
  include('includes/header.php'); 
  // include('../middleware/adminMiddleware.php'); 
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Blogs </h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0">Blog Link Title </label>
                                <input type="text" name="blog_link" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Blog Title Image </label>
                                <input type="file" name="title_img" multiple class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0">Blog Title </label>
                                <input type="text" name="title_name" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                        </div>
                        <h4 style="font-size:16px;font-weight:600;margin:20px 0;">Add Headline and Description to the
                            blog :---</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0"> Headling-1 </label>
                                <input type="text" name="heading_1" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Description-1 </label>
                                <input type="text" name="description_1" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Related Image-1 </label>
                                <input type="file" name="images_1" multiple class="form-control mb-2">
                            </div>
                        </div>

                        <h4 style="font-size:16px;font-weight:600;margin:20px 0;">Add Headline and Description to the
                            blog :---</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0"> Headling-2 </label>
                                <input type="text" name="heading_2" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Description-2 </label>
                                <input type="text" name="description_2" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Related Image-2 </label>
                                <input type="file" name="images_2" multiple class="form-control mb-2">
                            </div>
                        </div>

                        <h4 style="font-size:16px;font-weight:600;margin:20px 0;">Add Headline and Description to the
                            blog :---</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0"> Headling-3 </label>
                                <input type="text" name="heading_3" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Description-3 </label>
                                <input type="text" name="description_3" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Related Image-3 </label>
                                <input type="file" name="images_3" multiple class="form-control mb-2">
                            </div>
                        </div>

                        <h4 style="font-size:16px;font-weight:600;margin:20px 0;">Add Headline and Description to the
                            blog :---</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mb-0"> Headling-4 </label>
                                <input type="text" name="heading_4" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Description-4 </label>
                                <input type="text" name="description_4" placeholder="Enter Sales Package"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Related Image-4 </label>
                                <input type="file" name="images_4" multiple class="form-control mb-2">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="upload_blog"> Save
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('includes/footer.php'); ?>