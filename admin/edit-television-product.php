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
    $television_product = getById("television", $id);
    if (mysqli_num_rows($television_product) > 0) {
        $data = mysqli_fetch_array($television_product);
        ?>
            <div class="card">
                <div class="card-header">
                    <h4> Edit Television Product </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" value="<?=$data['id'];?>" name="television_product_id">
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
                                <img src="../television_images/<?=$data['image'];?>" height="50px" width="50px">
                            </div>
                            <div class="col-md-6">
                                <label for=""> Upload Image </label>
                                <input type="file" name="image1" class="form-control">
                                <label for=""> Current Image </label>
                                <input type="hidden" name="old_image1" value="<?=$data['image1'];?>"
                                    class="form-control">
                                <img src="../television_images/<?=$data['image1'];?>" height="50px" width="50px">
                            </div>
                            <div class="col-md-6">
                                <label for=""> Upload Image2 </label>
                                <input type="file" name="image2" class="form-control">
                                <label for=""> Current Image </label>
                                <input type="hidden" name="old_image2" value="<?=$data['image2'];?>"
                                    class="form-control">
                                <img src="../television_images/<?=$data['image2'];?>" height="50px" width="50px">
                            </div>
                            <div class="col-md-6">
                                <label for=""> Upload Image3 </label>
                                <input type="file" name="image3" class="form-control">
                                <label for=""> Current Image </label>
                                <input type="hidden" name="old_image3" value="<?=$data['image3'];?>"
                                    class="form-control">
                                <img src="../television_images/<?=$data['image3'];?>" height="50px" width="50px">
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
                                <label class="mb-0"> Warranty </label>
                                <input type="text" name="warranty" value="<?=$data['warranty'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Box Contents </label>
                                <input type="text" name="box_contents" value="<?=$data['box_contents'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Stand Color </label>
                                <input type="text" name="stand_color" value="<?=$data['stand_color'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Remote Type </label>
                                <input type="text" name="remote_type" value="<?=$data['remote_type'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Cell Requirement </label>
                                <input type="text" name="cell_requirement" value="<?=$data['cell_requirement'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Type </label>
                                <input type="text" name="type" value="<?=$data['type'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Size </label>
                                <input type="text" name="size" value="<?=$data['size'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Resolution </label>
                                <input type="text" name="resolution" value="<?=$data['resolution'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> LED Backlight Type </label>
                                <input type="text" name="LED_backlight_type" value="<?=$data['LED_backlight_type'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Refresh Rate </label>
                                <input type="text" name="refresh_rate" value="<?=$data['refresh_rate'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Aspect Ratio </label>
                                <input type="text" name="aspect_ratio" value="<?=$data['aspect_ratio'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Weight With Stand </label>
                                <input type="text" name="weight_with_stand" value="<?=$data['weight_with_stand'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Dimensions With </label>
                                <input type="text" name="dimensions_with" value="<?=$data['dimensions_with'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Stand(W X D X H) </label>
                                <input type="text" name="stand_with" value="<?=$data['stand_with'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Dimensions Without </label>
                                <input type="text" name="dimensions_without" value="<?=$data['dimensions_without'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Stand(W X D X H) </label>
                                <input type="text" name="stand_without" value="<?=$data['stand_without'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Video Formats Supported </label>
                                <input type="text" name="video_formats_supported"
                                    value="<?=$data['video_formats_supported'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Other Video Features </label>
                                <input type="text" name="other_video_features"
                                    value="<?=$data['other_video_features'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Sound Technology </label>
                                <input type="text" name="sound_technology" value="<?=$data['sound_technology'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Total Speaker Output </label>
                                <input type="text" name="total_speaker_output"
                                    value="<?=$data['total_speaker_output'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Speaker Frequency Range </label>
                                <input type="text" name="speaker_frequency_range"
                                    value="<?=$data['speaker_frequency_range'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> USB Ports </label>
                                <input type="text" name="USB_ports" value="<?=$data['USB_ports'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> HDMI Ports </label>
                                <input type="text" name="HDMI_ports" value="<?=$data['HDMI_ports'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Digital/Optical Audio Output Ports </label>
                                <input type="text" name="digital_audio_output"
                                    value="<?=$data['digital_audio_output'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> RF Input(Analog Coaxial) Ports </label>
                                <input type="text" name="RF_input_ports" value="<?=$data['RF_input_ports'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Composite Input(Audio Video Cable) Ports </label>
                                <input type="text" name="composite_input" value="<?=$data['composite_input'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Ethernet Sockets </label>
                                <input type="text" name="ethernet_sockets" value="<?=$data['ethernet_sockets'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Wifi Present </label>
                                <input type="text" name="wifi_present" value="<?=$data['wifi_present'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Miracast/Screen Mirroring Support </label>
                                <input type="text" name="miracast" value="<?=$data['miracast'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Inbuilt Apps </label>
                                <input type="text" name="inbuilt_apps" value="<?=$data['inbuilt_apps'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Voice Recognition </label>
                                <input type="text" name="voice_recognition" value="<?=$data['voice_recognition'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Other Smart Features </label>
                                <input type="text" name="other_smart_features"
                                    value="<?=$data['other_smart_features'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> User Interface </label>
                                <input type="text" name="user_interface" value="<?=$data['user_interface'];?>"
                                    class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Voltage Requirement </label>
                                <input type="text" name="voltage_requirement"
                                    value="<?=$data['voltage_requirement'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Frequency Requirement </label>
                                <input type="text" name="frequency_requirement"
                                    value="<?=$data['frequency_requirement'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Power Consumption Running </label>
                                <input type="text" name="power_consumption_running"
                                    value="<?=$data['power_consumption_running'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0"> Power Consumption Standby </label>
                                <input type="text" name="power_consumption_standby"
                                    value="<?=$data['power_consumption_standby'];?>" class="form-control mb-2">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="update_television_product_btn"> Save
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
