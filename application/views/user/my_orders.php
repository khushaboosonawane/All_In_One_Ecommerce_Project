<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<?php
if(isset($_SESSION['user_id'])){
    ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h2>Order Details</h2>
                <hr>
            </div>
        </div>
    <div class="row">
        <div class="col-dm-12">
            <table class="table table-bordered table-responsive text-center">
                <?php
                if(count($orders)>0){
                    ?>
                     <tr>
                        <th>Order Date</th>
                        <th>Order Price</th>
                        <th>Order Status</th>
                        <th>Address</th>
                        <th></th>
                        <th>Cancel Order</th>
                    </tr>
                    <?php
                  foreach($orders as $key=>$row){
                    ?>
                        <tr>
                            <a href="<?= base_url() ?>usercontroller/open_invoice/<?= $row['order_id'] ?>">
                            <td><?= date('d-M-Y',strtotime($row['order_date']))?></td>
                            <td><?= number_format($row['ttl_amount']) ?> &#8377;</td>
                            <?php
                            $color="black";
                            if($row['order_status']=='pending'){
                                $color="red";
                            }
                            ?>
                            <td style="color:<?= $color ?>;font-weight:bold;text-transform:capitalize">
                            <?= $row['order_status'] ?> Order </td>
                            <td><?= $row['deliver_country'] ?> , <?= $row['deliver_state'] ?> , <?= $row['deliver_district'] ?> , <?= $row['deliver_area'] ?> , <?= $row['deliver_pincode'] ?></td>
                            <td>
                                <a href="<?= base_url() ?>usercontroller/open_invoice/<?= $row['order_id'] ?>">
                                    <buttton class=" btn-primary btn-sm">Invoice</buttton>
                                </a>
                            </td>
                            <?php
                            if($row['order_status']=="pending"){
                                ?>
                                <!-- echo 1; -->
                                <td>
                                    <a href="<?= base_url() ?>usercontroller/cancel_order/<?= $row['order_id'] ?>" style="text-decoration:none">
                                        <buttton class="btn-danger btn-sm">Cancel Order</buttton>
                                    </a>
                                </td>
                                <?php
                            }else if($row['order_status']=="dispatched"){
                                // echo 2;
                                ?>
                                 <td>
                                    <a href="<?= base_url() ?>usercontroller/cancel_order/<?= $row['order_id'] ?>" style="text-decoration:none">
                                        <buttton class="btn-danger btn-sm">Cancel Order</buttton>
                                    </a>
                                </td>
                                <?php
                            }else{
                                // echo 3;
                            }
                            ?>
                            
                           
                          
                        </a>
                        </tr>
                    
                    <?php
                  }
                }else{
                    ?>
                    <tr>
                        <td>No Product Avilable</td>
                    </tr>
                    <?php

                }
                ?>
            </table>
        </div>
    </div>
</div>
    <?php 
}else{
    ?>
    <div class="text-center my-4">
        <h1>Create Your Account</h1>
        <a href="<?= base_url() ?>usercontroller/user_login">
            <button class="btn btn-primary">Login</button>
        </a>
    </div>
    <?php
}
?>