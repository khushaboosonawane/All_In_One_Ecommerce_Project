<?php
defined("BASEPATH") or exit("no direct script is allowed");
$images=explode("&&",$product_info[0]['product_image']);
?>

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
            <button class="btn btn-dark btn-sm p-0 m-0 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white"><path d="M10 19.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5zm3.5-1.5c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm1.336-5l1.977-7h-16.813l2.938 7h11.898zm4.969-10l-3.432 12h-12.597l.839 2h13.239l3.474-12h1.929l.743-2h-4.195z"/></svg>
            </button>
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