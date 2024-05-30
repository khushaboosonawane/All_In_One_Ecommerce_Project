
<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<style>
    @media print {
  /* CSS rules specific to printing */
  .hideinprint{
        display:none;
  }
  .printimg{
    height:100px !important;
    width:100px !important;
  }
  .desc{
    font-size:10px;
    width:20%;
  }
}
</style>

<?php
defined("BASEPATH") or exit("No direct script is allowed");
?>
 <main class="content">
    <div class="container-fluid">
        
        <div class="row my-4 d-flex justify-content-between" style="z-index:999;position:relative;color:red">
            <div class="col-md-6">
                <h3 style="text-transform:capitalize;color:white"><?= $order_det[0]['deliver_to'] ?></h3>
                <span><b>Invoice Date</b> : <?= date("Y-M-d",strtotime($order_det[0]['order_date'])) ?></span> <br>
                <span><b>Invoice Order Id </b> : #0012<?= $order_det[0]['order_id'] ?></span>
            </div>
        <div class="col-md-6" style="text-align:right">
            
            <span><b><?= $order_det[0]['deliver_country'] ?> , </b></span> <br>
            <span><b><?= $order_det[0]['deliver_state'] ?></b> , </span> <br>
            <span><b><?= $order_det[0]['deliver_district'] ?></b> , </span> <br>
            <span><b><?= $order_det[0]['deliver_area'] ?></b> , </span> <br>
            <span><b><?= $order_det[0]['deliver_pincode'] ?></b></span> <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive text-center">
                <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(count($order_products)>0){
                        $ttl=0;
                        foreach($order_products as $key=>$row){
                            $ttl+=$row['product_price']*$row['qty'];
                     ?>
                      <tr>
                        <td><?= $row['qty'] ?></td>
                        <td>
                            <img src="<?= base_url() ?>public/upload/product/<?= explode("&&",$row['product_image'])[1] ?>" alt="" style="height:150px;width:150px" class="printimg">
                        </td>
                        <td class="desc"><?= $row['product_name'] ?></td>
                        <td><?= number_format($row['product_price']) ?>&#8377;</td>
                        <td><?= number_format($row['product_price'] * $row['qty'])?>&#8377;</td>
                        
                        </tr>
                     <?php
                        }
                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub Total</td>
                            <th><?= number_format($ttl) ?>&#8377;</th>
                        </tr>
                        <?php
                    }else{
                        ?>
                        <tr>
                            <td class="text-center" colspan="20">No Order</td>
                        </tr>
                        <?php

                    }
                    ?>
                   
                </tbody>
            </table>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
            <?php
            if($order_det[0]['order_status']=="pending"){
                ?>
                <div class="text-center">
                <a href="<?= base_url() ?>admincontroller/dispatch_order/<?= $order_det[0]['order_id'] ?>">
                    <button class="btn btn-primary hideinprint">Dispatch Order</button>
                </a>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="text-center">
                <a href="<?= base_url() ?>admincontroller/reject_order/<?= $order_det[0]['order_id'] ?>">
                    <button class="btn btn-primary hideinprint">Reject Order</button>
                </a>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="text-center">
                <a href="<?= base_url() ?>admincontroller/deliver_order/<?= $order_det[0]['order_id'] ?>">
                    <button class="btn btn-primary hideinprint">Deliver Order</button>
                </a>
            </div>
                <?php
            }if($order_det[0]['order_status']=="dispatched"){
                ?>
                <div class="text-center">
                    <a href="<?= base_url() ?>admincontroller/deliver_order/<?= $order_det[0]['order_id'] ?>">
                        <button class="btn btn-primary hideinprint">Deliver Order</button>
                    </a>
                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="text-center">
                    <a href="<?= base_url() ?>admincontroller/deliver_order/<?= $order_det[0]['order_id'] ?>">
                        <button class="btn btn-primary hideinprint">Unable To Deliver</button>
                    </a>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
      
    </div>    
</main>
<br><br><br><br><br>
