
<style>
a
{
    text-decoration: none;
}
.product-card {
    width: 330px;
    position: relative;
    box-shadow: 0 2px 7px #dfdfdf;
    margin: 50px auto;
    background: #fafafa;
}

.badge {
    position: absolute;
    left: 0;
    top: 20px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 10px;
}

.product-tumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 300px;
    padding: 50px;
    background: #f0f0f0;
}

.product-tumb img {
    max-width: 100%;
    max-height: 100%;
}

.product-details {
    padding: 30px;
}

.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: black;
    margin-bottom: 18px;
}

.product-details h4 a {
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: #363636;
    text-decoration: none;
    transition: 0.3s;
}

.product-details h4 a:hover {
    color: #fbb72c;
}

.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 18px;
    color: #999;
}

.product-bottom-details {
    overflow: hidden;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.product-bottom-details div {
    float: left;
    width: 50%;
}

.product-price {
    font-size: 18px;
    color: #000;
    font-weight: 600;
}

.product-price small {
    font-size: 80%;
    font-weight: 400;
    text-decoration: line-through;
    display: inline-block;
    margin-right: 5px;
}

.product-links {
    text-align: right;
}

.product-links a {
    display: inline-block;
    margin-left: 5px;
    color: #e1e1e1;
    transition: 0.3s;
    font-size: 17px;
}

.product-links a:hover {
    color: red;
}

</style>

<div class="container">
    <div class="row">
        <?php
        if(count($sub_cat_data)>0){
            foreach($sub_cat_data as $key=>$row){
        ?>
        <div class="col-md-4">
            <div class="product-card">
                <div class="badge"><?= $row['product_label'] ?></div>
                <div class="product-tumb">
                    <img src="<?= base_url() ?>public/upload/product/<?= explode("&&",$row['product_image'])[0] ?>" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory"><?= $row['product_name'] ?></span>
                    <p><?= nl2br($row['product_details']) ?></p>
                    <div class="product-bottom-details">
                        <div class="product-price">&#8377;<?= $row['product_price'] ?>/-</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product-bottom-details text-center">
                        <a href="<?= base_url() ?>usercontroller/product_information/<?= $row['pro_id'] ?>">
                            <button class="btn btn-dark">View More</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php
            }
        }else{
        ?>
                <div class="col-md-4">
            <div class="product-card">
                <div class="badge">Hot</div>
                <div class="product-tumb">
                    <img src="https://i.imgur.com/xdbHo4E.png" alt="">
                </div>
                <div class="product-details">
                    <span class="product-catagory">Women,bag</span>
                    <h4><a href="">Women leather bag</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                    <div class="product-bottom-details">
                        <div class="product-price"><small>$96.00</small>$230.99</div>
                        <div class="product-links">
                            <a href=""><i class="fa fa-heart"></i></a>
                            <a href=""><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

        }
        ?>

    </div>
</div>

