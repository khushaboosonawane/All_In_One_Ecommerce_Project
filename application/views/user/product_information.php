<?php
defined("BASEPATH") or exit("no direct script is allowed");
$images=explode("&&",$product_info[0]['product_image']);
?>

<style>
    body{
        overflow-x:hidden;
    }
    .quantity {
  display: flex;
  border: 2px solid #3498db;
  border-radius: 4px;
  overflow: hidden;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.quantity button {
  background-color: #3498db;
  color: #fff;
  border: none;
  cursor: pointer;
  font-size: 20px;
  width: 30px;
  height: auto;
  text-align: center;
  transition: background-color 0.2s;
}

.quantity button:hover {
  background-color: #2980b9;
}

.input-box {
  width: 40px;
  text-align: center;
  border: none;
  padding: 8px 10px;
  font-size: 16px;
  outline: none;
}

/* Hide the number input spin buttons */
.input-box::-webkit-inner-spin-button,
.input-box::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.input-box[type="number"] {
  -moz-appearance: textfield;
}

</style>

<div class="container my-3">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    foreach($images as $key=>$row){
                    ?>
                    <div>
                        <!-- <img src="<?= base_url() ?>public/upload/product/<?=$row?>" class="my-2 border border-dark p-3" style="height:100px;width:100px" alt="" onclick="openimage('<?= base_url() ?>public/upload/product/<?= $row ?>')"> -->
                        <img src="<?= base_url() ?>public/upload/product/<?=$row?>" class="my-2 border border-dark p-3" style="height:100px;width:100px" alt="" onclick="openimage('<?= $key ?>')">
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-9 my-5">
                    <div>
                        <img src="<?= base_url() ?>public/upload/product/<?= $images[0] ?>" style="height:100%;width:100%" alt="" id="full_image">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-5">
            <?php
            if($product_info[0]['product_label']){
            ?>
            <button type="button" class="btn btn-dark">
            <?= $product_info[0]['product_label'] ?>
            </button>
            <?php
            }
            ?>
            <h4 style="font-weight:bold"><?= $product_info[0]['product_name'] ?></h4>
            <h1 style="font-weight:300">&#8377;<?= number_format($product_info[0]['product_price']) ?>/-</h1>
            <?php
            if(count($cart)==0){
            ?>
            <a href="<?= base_url() ?>usercontroller/add_to_cart/<?= $product_info[0]['pro_id'] ?>">
                <button class="btn btn-sm p-0 m-0 p-2">
                    <i class="ri-heart-line" style="font-size:28px"></i>
                </button>
            </a>
            <?php
            }else{
            ?>
            <div class="row">
                <div class="col-md-4">
                    <i class="ri-heart-fill text-danger" style="font-size:28px"></i>
                </div>
                <div class="col-md-10">
                    <div class="quantity" style="height:100%;width:20%">
                        <button class="minus" aria-label="Decrease" onclick="decreaseValue('<?= $product_info[0]['pro_id'] ?>')">&minus;</button>
                        <input type="number" class="input-box" value="<?= $cart[0]['qty'] ?>" min="1" max="10" id="quantity_value<?= $product_info[0]['pro_id'] ?>">
                        <button class="plus" aria-label="Increase" onclick="increaseValue('<?= $product_info[0]['pro_id'] ?>')">&plus;</button>
                    </div>
                </div>
            </div>
            
            <?php
            }
            ?>
           
            <p>
                <?= nl2br($product_info[0]['product_details']) ?>
            </p>
        </div>
    </div>
</div>
<script>
    var images='<?= $product_info[0]['product_image'] ?>';
    images=images.split("&&");
    var i=0;
    setTimeout(() => {
        i++;
        openimage(i%images.length);
    }, 5000);
    function openimage(index){
        i=index;
        document.getElementById("full_image").src='<?= base_url() ?>public/upload/product/'+images[index];
        setTimeout(() => {
        i++;
        openimage(i%images.length);
    }, 2000);
    }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function increaseValue(pro_id){
        $.ajax({
            url:'<?= base_url() ?>usercontroller/increase_cart_qty/'+pro_id,
            dataType:'json'
        }).done(function(responce){
            $("#quantity_value"+pro_id).val(responce);
        })
    }
    function decreaseValue(pro_id){
        $.ajax({
            url:'<?= base_url() ?>usercontroller/decrease_cart_qty/'+pro_id,
            dataType:'json'
        }).done(function(responce){
            $("#quantity_value"+pro_id).val(responce);
        })
    }
</script>