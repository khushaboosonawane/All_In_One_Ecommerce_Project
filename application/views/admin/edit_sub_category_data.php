<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Add SubCategory
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href='<?= base_url() ?>admincontroller/index'>Dashboard</a></li>
                    &nbsp;&nbsp; <span class="text-white fw-bold">/</span> &nbsp;&nbsp;
                    <a href="<?= base_url() ?>admincontroller/subcategory" class="text-white fw-bold">Sub Category</a>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow:0 0 15px #fff">
                    <div class="card-header">
                        <h5 class="card-title lead fw-bold">Category form</h5>
                    </div>
                    <!-- create table sub_category(sub_cat_id integer primary key auto_increment,sub_category_name varchar(2000),cat_id integer,sub_cat_date varchar(2000),sub_cat_status varchar(1000)) -->
                    <div class="card-body">
                        <form action="<?= base_url() ?>admincontroller/update_sub_category" method="post" class="row row-cols-md-auto align-items-center">
                        <input type="hidden" name="sub_cat_id" value="<?= $sub_cat_data[0]['sub_cat_id'] ?>" id="">
                            <div class="col-12 col-md-3">
                                <select class="form-select" aria-label="Default select example" required name="cat_id">
                                    <option value="" selected disabled>Select Category</option>
                                    <?php
                                    if(count($cat_data)>0){
                                    foreach($cat_data as $key=>$row){
                                    ?>
                                    <option value="<?= $row['cat_id'] ?>" <?=  ($sub_cat_data[0]['cat_id']==$row['cat_id'])?'selected':'' ?> ><?= $row['category_name'] ?></option>
                                    <?php
                                    }
                                    }else{
                                    ?>
                                    <option value="no data">No Data Found</option>
                                    <?php
                                    }
                                    ?>
                                   
                                </select>
                            </div>
                            
                            <div class="col-12 col-md-5">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername2">Sub Category Name</label>
                                <div class="input-group mb-2 me-sm-1">
                                    <div class="input-group-text bg-primary text-white">Sub Category Name</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Sub Category Name" name="sub_category_name"  value="<?= $sub_cat_data[0]['sub_category_name'] ?>" required>
                                </div>

                            </div>
                            <div class="col-12 col-md-3">
                                <select class="form-select" aria-label="Default select example" required name="sub_cat_status">
                                    <option value="<?= $sub_cat_data[0]['sub_cat_status'] ?>"><?= $sub_cat_data[0]['sub_cat_status'] ?></option>
                                    <option value="Active">Active</option>
                                    <option value="Disabled">Disabled</option>
                                </select>
                            </div>
                           
                            <div class="col-12 my-3 text-center ">
                                <button type="submit" class="btn btn-dark mb-2">Update Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>