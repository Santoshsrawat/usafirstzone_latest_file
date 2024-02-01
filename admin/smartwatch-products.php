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

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Smart Watches Products </h4>
                </div>
                <div class="card-body">
                    <table class="table bordered striped">

                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> Affiliate Link </th>
                                <th> Brand </th>
                                <th> Model </th>
                                <th>Operating system</th>
                                <th> Box Contents </th>
                                <th>RAM</th>
                                <th> Internal memory </th>
                                <th> Compatible OS </th>
                                <th> Touch Screen </th>
                                <th> USB_connectivity </th>
                                <th> Make call </th>
                                <th> Sleep quality </th>
                                <th>Heartrate</th>


                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>


        <?php
$smartwatches_products = getAll("smartwatches");
$i = 1;
if (mysqli_num_rows($smartwatches_products) > 0) {
    foreach ($smartwatches_products as $item) {

        ?>
                            <tr>
                                <td> <?=$i;?> </td>
                                <td><?=$item['affiliate_links'];?></td>
                                <td> <?=$item['brand'];?></td>
                                <td> <?=$item['model'];?></td>
                                <td> <?=$item['operating_system'];?></td>
                                <td> <?=$item['box_contents'];?></td>
                                <td> <?=$item['RAM'];?></td>
                                <td> <?=$item['internal_memory'];?></td>
                                <td> <?=$item['compatible_OS'];?></td>
                                <td> <?=$item['touchscreen'];?></td>
                                <td> <?=$item['USB_connectivity'];?></td>
                                <td> <?=$item['make_call'];?></td>
                                <td> <?=$item['sleep_quality'];?></td>
                                <td> <?=$item['heartrate'];?></td>

                                <td>
                                    <a href="edit-smartwatch-product.php?id=<?=$item['id'];?>" class="btn btn-primary btn-sm"> Edit </a>
                                </td>
                                <td>
                                    <form action="" method="POST">
                                        <input type="hidden" value="<?=$item['id'];?>" name="iphone_product_id">
                                        <button class="btn btn-danger" name="delete_smartwatch_product_btn"> Delete
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