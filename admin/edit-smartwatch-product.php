<?php
session_start();
include '../functions/myFunction.php';

//   if(isset($_SESSION['auth'])){
//     // if($_SESSION['role_as'] != 1) ************* For multiple users

//     if($_SESSION['role_as'] == 0){
//       redirect('../index.php', 'You are not authorised to access this page');
//     }
//   }else{
//     redirect('../login.php', 'Login to continue');
//   }

include 'includes/header.php';
// include('../middleware/adminMiddleware.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $smartwatches_product = getById("smartwatches", $id);
    if (mysqli_num_rows($smartwatches_product) > 0) {

        $data = mysqli_fetch_array($smartwatches_product);
        ?>
            <div class="card">
                <div class="card-header">
                    <h4> Edit smartwatches Product </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">
                                <input type="hidden" value="<?=$data['id'];?>" name="smartwatches_product_id">
                                <label class="mb-0"> Affiliate Link </label>
                                <input type="text" name="affiliate_links" value="<?=$data['affiliate_links'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label for=""> Upload Image </label>
                                <input type="file" name="image" class="form-control">
                                <label for=""> Current Image </label>
                                <input type="hidden" name="old_image" value="<?=$data['image'];?>"
                                    class="form-control">
                                <img src="../smartwatches_images/<?=$data['image'];?>" height="50px" width="50px">
                            </div>
                            <div class="col-md-6">
                                <label for=""> Upload Image1 </label>
                                <input type="file" name="image1" class="form-control">
                                <label for=""> Current Image </label>
                                <input type="hidden" name="old_image1" value="<?=$data['image1'];?>"
                                    class="form-control">
                                <img src="../smartwatches_images/<?=$data['image1'];?>" height="50px" width="50px">
                            </div>
                            <div class="col-md-6">
                                <label for=""> Upload Image 2 </label>
                                <input type="file" name="image2" class="form-control">
                                <label for=""> Current Image </label>
                                <input type="hidden" name="old_image2" value="<?=$data['image2'];?>"
                                    class="form-control">
                                <img src="../smartwatches_images/<?=$data['image2'];?>" height="50px" width="50px">
                            </div>
                            <div class="col-md-6">
                                <label for=""> Upload Image 3 </label>
                                <input type="file" name="image3" class="form-control">
                                <label for=""> Current Image </label>
                                <input type="hidden" name="old_image3" value="<?=$data['image3'];?>"
                                    class="form-control">
                                <img src="../smartwatches_images/<?=$data['image3'];?>" height="50px" width="50px">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Brand </label>
                                <input type="text" name="brand" value="<?=$data['brand'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Model </label>
                                <input type="text" name="model" value="<?=$data['model'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> operating_system </label>
                                <input type="text" name="operating_system" value="<?=$data['operating_system'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Box Content </label>
                                <input type="text" name="box_contents" value="<?=$data['box_contents'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> RAM </label>
                                <input type="text" name="RAM" value="<?=$data['RAM'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> internal_memory </label>
                                <input type="text" name="internal_memory" value="<?=$data['internal_memory'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> compatible_OS </label>
                                <input type="text" name="compatible_OS" value="<?=$data['compatible_OS'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> charging_mode </label>
                                <input type="text" name="charging_mode" value="<?=$data['charging_mode'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> body_material </label>
                                <input type="text" name="body_material" value="<?=$data['body_material'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> strap_material </label>
                                <input type="text" name="strap_material" value="<?=$data['strap_material'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> colours </label>
                                <input type="text" name="colours" value="<?=$data['colours'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> clock_face </label>
                                <input type="text" name="clock_face" value="<?=$data['clock_face'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> speaker </label>
                                <input type="text" name="speaker" value="<?=$data['speaker'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> screen_size </label>
                                <input type="text" name="screen_size" value="<?=$data['screen_size'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> screen_resolution </label>
                                <input type="text" name="screen_resolution" value="<?=$data['screen_resolution'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> pixel_density </label>
                                <input type="text" name="pixel_density" value="<?=$data['pixel_density'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> display_technology </label>
                                <input type="text" name="display_technology" value="<?=$data['display_technology'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> touchscreen </label>
                                <input type="text" name="touchscreen" value="<?=$data['touchscreen'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> bluetooth </label>
                                <input type="text" name="bluetooth" value="<?=$data['bluetooth'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> wirless_protocol </label>
                                <input type="text" name="wirless_protocol" value="<?=$data['wirless_protocol'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> USB_connectivity </label>
                                <input type="text" name="USB_connectivity" value="<?=$data['USB_connectivity'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> NFC </label>
                                <input type="text" name="NFC" value="<?=$data['NFC'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> accelerometer </label>
                                <input type="text" name="accelerometer" value="<?=$data['accelerometer'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> gyro </label>
                                <input type="text" name="gyro" value="<?=$data['gyro'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> light </label>
                                <input type="text" name="light" value="<?=$data['light'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> IR_gesture </label>
                                <input type="text" name="IR_gesture" value="<?=$data['IR_gesture'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> GPS </label>
                                <input type="text" name="GPS" value="<?=$data['GPS'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> email </label>
                                <input type="text" name="email" value="<?=$data['email'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> text_message </label>
                                <input type="text" name="text_message" value="<?=$data['text_message'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> incoming_call </label>
                                <input type="text" name="incoming_call" value="<?=$data['incoming_call'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> alarm </label>
                                <input type="text" name="alarm" value="<?=$data['alarm'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> calendar_reminder </label>
                                <input type="text" name="calendar_reminder" value="<?=$data['calendar_reminder'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> facebook </label>
                                <input type="text" name="facebook" value="<?=$data['facebook'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> google_voice </label>
                                <input type="text" name="google_voice" value="<?=$data['google_voice'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> make_call </label>
                                <input type="text" name="make_call" value="<?=$data['make_call'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> receive_call </label>
                                <input type="text" name="receive_call" value="<?=$data['receive_call'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> voice_control </label>
                                <input type="text" name="voice_control" value="<?=$data['voice_control'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> calories_intake </label>
                                <input type="text" name="calories_intake" value="<?=$data['calories_intake'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> distance </label>
                                <input type="text" name="distance" value="<?=$data['distance'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> steps </label>
                                <input type="text" name="steps" value="<?=$data['steps'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> sleep_quality </label>
                                <input type="text" name="sleep_quality" value="<?=$data['sleep_quality'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> heartrate </label>
                                <input type="text" name="heartrate" value="<?=$data['heartrate'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> activity/inactivity </label>
                                <input type="text" name="activity_inactivity" value="<?=$data['activity/inactivity'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="update_smartwatches_product_btn">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php
} else {
        echo "Category not found";
    }
} else {
    echo "Id missing from URL";
}

?>
        </div>
    </div>
</div>

<?php include 'includes/footer.php';?><?php
