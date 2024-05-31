<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <form action="<?= base_url() ?>usercontroller/cancel_order_data" method="post">
            <table class="table">
                <?php
                if(count($cancel_order)>0){
                    foreach($cancel_order as $key=>$row){
                        ?>
                       <tr>
                       <td>
                            #12AB<?= $row['order_id'] ?>
                        </td>
                        <td>
                            <img src="<?= base_url() ?>public/upload/product/<?= explode('&&',$row['product_image'])[0] ?>" style="height:100px;width:100px" alt="">
                        </td>
                        <td>
                            <?= $row['product_name'] ?>
                        </td>
                        <td>
                            <?= number_format($row['product_price']) ?>&#8377;
                        </td>
                        <td>
                            <?= $row['qty'] ?>
                        </td>
                        <td style="height:100%;width:20%">
                            <?= $row['product_details'] ?>
                        </td>
                        <td>
                        
                            <div class="form-check">
                            <input class="chk_box form-check-input" type="checkbox" value="<?= $row['order_det_id'] ?>"name="order_det_id[]" id="flexCheckChecked">
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
                        <td>
                            <a href="">
                                <button class="btn btn-primary">Cancel Order</button>
                            </a>
                        </td>
                    </tr>
                    <?php
                }else{
                    ?>
                    <tr>
                        <td class="text-center" colspan="20">No Order Found</td>
                    </tr>
                    <?php

                }
                ?>
            </table>
            </form>
            
        </div>
    </div>
</div>