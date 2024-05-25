<?php
defined("BASEPATH") or exit("No direct script is allowed");
?>
 <main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Add Category
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href='<?= base_url() ?>admincontroller/index'>Dashboard</a></li>
                    &nbsp;&nbsp; <span class="text-white fw-bold">/</span> &nbsp;&nbsp;
                    <a href="<?= base_url() ?>admincontroller/category" class="text-white fw-bold">Category</a>
                </ol>
            </nav>
        </div>
    <br><br><br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-ajax" class="table table-striped table-bordered table-sm text-center table-responsive" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Update</th>
                                    <th>Category Name</th>
                                    <th>Sub category name</th>
                                    <th>product name</th>
                                    <th>product price</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($product)>0){
                                    foreach($product as $key=>$row){
                                ?>
                                <tr>
                                <td style="display:">
                                    <?php
                                        $data=explode("&&",$row['product_image']);
                                        for($i=0;$i<count($data);$i++){
                                    ?>
                                    <img src="<?= base_url() ?>public/upload/product/<?= $data[$i] ?>" alt="" style="height:100px;width:100px;">
                                    <?php
                                        } 
                                        ?>
                                    </td>
                                    <td style="display:flex;">
                                        <a href="<?= base_url() ?>admincontroller/edit_product/<?= $row['pro_id'] ?>">
                                            <button class="btn btn-primary btn-sm">Edit</button>
                                        </a>&nbsp;&nbsp;
                                        <a href="<?= base_url() ?>admincontroller/delete_product/<?= $row['pro_id'] ?>">
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">Delete</button>
                                        </a>
                                    </td>
                                    <td><?= $row['category_name'] ?></td>
                                    <td><?= $row['sub_category_name'] ?></td>
                                    <td><?= $row['product_name'] ?></td>
                                    <td><?= number_format($row['product_price']) ?>Rs./-</td>
                                   
                                </tr>
                                <?php
                                    }
                                }else{
                                ?>
                                <?php
                                }
                                ?>
                            </tbody>
                           
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</main>