<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<div class="container">
  <div class="row">
    <div class="col-md-8 my-5">
            <?php
        if(isset($_SESSION['user_id'])){
          ?>
          <form action="<?= base_url() ?>usercontroller/removefromcart" method="post">
              <table class="text-center table table-responsive ">
                <tr>
                  <th>Product List</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <?php
                  if(count($cart_data)>0){
                    ?>
                    <th>Total Price</th>
                    <th>Select All</th>
                  <th>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" onclick="select_all(this)">
                  </div>
                  </th>
                    <?php
                  }
                  ?>
                </tr>
                <?php
                if(count($cart_data)>0){
                  $ttl=0;
                  foreach($cart_data as $key=>$row){
                    $ttl+=($row['product_price']*$row['qty']);
                ?>

                <tr style="padding:20px">
                  <td style="margin:30px 0px">
                    <img src="<?= base_url() ?>public/upload/product/<?= explode("&&",$row['product_image'])[1] ?>" style="height:100px;width:100px" alt="" style="padding:20px">
                    <a href="<?= base_url() ?>usercontroller/show_product_with_sub_category/<?= $row['sub_cat_id'] ?>">
                      <button class="btn-warning" type="button">Product Details</button>
                    </a>
                  </td>
                  <td style="height:50px;width:30%">
                  <b><?= $row['product_price'] ?> &#8377;</b> <br>
                    <?= $row['product_name'] ?>
                  </td>
                  <td></td>
                  <td></td>
                  <td >
                    <div class="quantity" style="height:100%;width:20%;display:flex;text-align:center">
                        <button class="minus btn-primary" aria-label="Decrease" onclick="decreaseValue('<?= $row['pro_id'] ?>')" type="button">&minus;</button>
                        <input type="number" class="input-box " value="<?= $row['qty'] ?>" min="1" max="10" id="quantity_value<?= $row['pro_id'] ?>" style="text-align:center" disabled>
                        <button class="plus btn-primary" aria-label="Increase" onclick="increaseValue('<?= $row['pro_id'] ?>')" type="button">&plus;</button>
                    </div>
                  </td>
                  
                  <td>
                    <?= number_format($row['product_price']*$row['qty']) ?> &#8377;
                  </td>
                  <td></td>
                  <td>
                    <div class="form-check">
                      <input class="chk_box form-check-input" type="checkbox" value="<?= $row['pro_id'] ?> "name="pro_id[]" id="flexCheckChecked">
                    </div>
                  </td>
                </tr>
                <?php
                  }
                  ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td>
                      <div class="form-group">
                        <button class=" btn-danger btn-sm" type="submit" style="display:" id="button">Remove</button>
                      </div>
                    </td>
                  </tr>
                  <?php
                }else{
                  ?>
                  <tr>
                    <td colspan="100" class="text-center">No Product Added In Cart</td>
                  </tr>
                  <?php
                }
                ?>
              </table>
          </form>
        </div>
        <div class="col-md-4 my-5">
          <h1>Total Amount</h1>
          <?php
          if(count($cart_data)>0){
            ?>
            <table class="table">
              <tr>
                 <td>SubTotal</td>
                 <td><?= number_format($ttl) ?> &#8377;</td>
              </tr>
              <tr>
                  <td>Charges</td>
                  <td>0</td>
              </tr>
              <tr>
                <th>Total</th>
                <th><?= number_format($ttl) ?> &#8377;</th>
              </tr>
              <tr>
                <td>
                  <a href="<?= base_url() ?>usercontroller/confirm_address">
                    <button class="btn btn-success">Checkout</button>
                  </a>
                </td>
              </tr>
            </table>
            <?php
          }
          ?>

        </div>
        
          <?php

        }else{
          ?>
          <!-- <div class="row"> -->
            <div class="col-md-12 p-5">
              <h1 class="">Create Your Account</h1>
              <a href="<?= base_url() ?>usercontroller/user_login">
                <button class="btn btn-primary">Login ..</button>
              </a>
            </div>
          <!-- </div> -->
          <?php
        }
        ?>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function increaseValue(pro_id){
        $.ajax({
            url:'<?= base_url() ?>usercontroller/increase_cart_qty/'+pro_id,
            dataType:'json'
        }).done(function(responce){
            $("#quantity_value"+pro_id).val(responce);
        })
        location.reload();

        
    }
    function decreaseValue(pro_id){
        $.ajax({
            url:'<?= base_url() ?>usercontroller/decrease_cart_qty/'+pro_id,
            dataType:'json'
        }).done(function(responce){
            $("#quantity_value"+pro_id).val(responce);
        })
        location.reload();
    }
</script>


<script>
  function select_all(elem){
    var data=document.getElementsByClassName("chk_box");
    for(i=0;i<data.length;i++){
      data[i].checked=elem.checked;
    }
    if(elem.checked){
      // document.getElementById("button").style.display="block";
      
    }
  }
</script>
