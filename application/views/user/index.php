<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php
                    foreach($slider as $key=>$row){
                    ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $key ?>" class="<?= ($key==0)?'active':'' ?>" aria-current="true" aria-label="Slide <?= $key+1 ?>"></button>
                    <?php
                    }
                    ?>
                    
                </div>
                <div class="carousel-inner">
                    <?php
                    foreach($slider as $key=>$row){
                    ?>
                    <div class="carousel-item  <?= ($key==0)?'active':'' ?>">
                        <img src="<?= base_url() ?>public/upload/slider/<?= $row['slider_image'] ?>" class="d-block w-100" alt="..." style="height:70vh;width:100%;object-fit:cover">
                    </div>
                    <?php
                    }
                    ?>
                   
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<main>
    <div class="container bg-trasparent my-4 p-3" style="position: relative;">
    <div class="row">
        <div class="col col-md-12 my-3">
            <h2 class="text-center">Trending Product</h2>
        </div>
    </div>
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            <?php
            foreach($trending_product as $key=>$row){
            ?>
            <!-- <a href="<?= base_url() ?>usercontroller/product_information/<?= $row['pro_id'] ?>"> -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <a href="<?= base_url() ?>usercontroller/product_information/<?= $row['pro_id'] ?>">
                            <img src="<?= base_url() ?>public/upload/product/<?= explode("&&",$row['product_image'])[0] ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary"><?= $row['product_label'] ?></span><span class="float-end price-hp text-dark"><?= number_format($row['product_price']) ?> <b>Rs./-</b></span>  <br> 
                                <span class="float-start rounded-pill"><?= $row['product_name'] ?></span> 
                            </div>
                            <h4>Details</h4>
                            <h6 class="card-title">
                            <?= nl2br($row['product_details']) ?>
                            </h6>
                            <div class="text-center my-4">
                            <a href="<?= base_url() ?>usercontroller/product_information/<?= $row['pro_id'] ?>" class="btn btn-warning" style="background:black">View More</a> </div>
                        </div>
                    </div>
                </div>
            <!-- </a> -->
            <?php
            }
            ?>
          
        </div>
    </div>
</main>