<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All In One Ecommerce</title>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
	<link href="<?= base_url() ?>public/admin_assets/css/modern.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url() ?>public/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        *{
            margin:0;
            padding:;
            box-sizing:border-box;
        }
    </style>
    <link rel="stylesheet" href="<?= base_url() ?>public/style.css">
    <script></script>
</head>
<body>
    <div class="container-fluid" style="background:black;">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-4 my-2 ml-2">
                        <img src="<?= base_url() ?>public/logo.jpg" style="height:55px;width:59px;border-radius:50%" alt="">
                    </div>
                    <div class="col-md-4" style="text-align:right">
                        <a href="<?= base_url() ?>usercontroller/about" style="text-decoration:none;" class="mr-5 text-white">
                            About US
                        </a> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?= base_url() ?>usercontroller/about" style="text-decoration:none;" class="my-2 text-white">
                            Contact
                        </a>&nbsp;&nbsp;
                        <?php
                        if(isset($_SESSION['user_id'])){
                            ?>
                            <a href="<?= base_url() ?>usercontroller/my_orders" style="text-decoration:none;" class="my-2 text-white lead" >
                            <i class="ri-shopping-cart-line"></i>
                            </a>&nbsp;&nbsp;
                            <?php
                        }
                        ?>
                        <a href="<?= base_url() ?>usercontroller/cart_page" style="text-decoration:none;color:white;font-size:20px" title="added product">
                        <i class="ri-heart-line"></i>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        if(isset($_SESSION['user_id'])){
                        ?>
                        <div style="display:inline-block;text-align:center">
                        <?php
                        if($user_data[0]['user_img']!=""){
                         ?>
                         <a href="<?= base_url() ?>usercontroller/view_profile/<?= $user_data[0]['user_id'] ?>">
                            <img src="<?= base_url() ?>public/upload/user_login_img/<?= $user_data[0]['user_img'] ?>" style="height:40px;width:40px;border-radius:50%">
                         </a>
                         <?php
                            }
                         ?>
                            
                        <!-- <span class="text-white" style="font-size:15px;font-weight:bold;display:block"><?= $user_data[0]['user_name'] ?></span> -->
                        </div>
                        <?php
                        }else{
                        ?>
                        <a href="<?= base_url() ?>usercontroller/user_login" style="text-decoration:none;" class="my-2" title="Create An Account">
                        <i class="ri-user-line text-white lead"></i>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        }
                        ?>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= base_url() ?>usercontroller/">Home</a>
                            </li>
                            <?php
                            if(count($category)>0){
                                foreach($category as $row){
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $row['category_name'] ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    if(count($row['sub_cat_list'])>0){
                                        foreach($row['sub_cat_list'] as $row1){
                                    ?>
                                    <li><a class="dropdown-item" href="<?= base_url() ?>usercontroller/show_product_with_sub_category/<?= $row1['sub_cat_id'] ?>"><?= $row1['sub_category_name'] ?></a></li>
                                    <?php
                                        }
                                    }else{
                                    ?>
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <?php
                                    }
                                    ?>
                                    
                                </ul>
                            </li>
                            <?php
                                }
                            }else{
                                ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Category Empty</a>
                            </li>
                            <?php
                            }
                            ?>
                            
                        </ul>
                        
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


  