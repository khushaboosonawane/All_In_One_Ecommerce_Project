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
                        <form action="<?= base_url() ?>admincontroller/save_sub_category" method="post" class="row row-cols-md-auto align-items-center">
                            <div class="col-12 col-md-3">
                                <select class="form-select" aria-label="Default select example" required name="cat_id">
                                    <option value="">Select Category Name</option>
                                    <?php
                                    if(count($cat_data)>0){
                                    foreach($cat_data as $key=>$row){
                                    ?>
                                    <option value="<?= $row['cat_id'] ?>"><?= $row['category_name'] ?></option>
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
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Sub Category Name" name="sub_category_name"   required>
                                </div>

                            </div>
                           
                            <div class="col-12 ">
                                <button type="submit" class="btn btn-dark mb-2">Save Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-ajax" class="table table-striped table-bordered table-sm text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Update</th>
                                    <th>Srno</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($sub_cat_data)>0){
                                    foreach($sub_cat_data as $key=>$row){
                                ?>
                                <tr>
                                    <td>
                                        <a href="<?= base_url() ?>admincontroller/edit_sub_category_data/<?= $row['sub_cat_id'] ?>">
                                            <button class="btn btn-primary btn-sm"><i class="ri-pencil-line"></i></button>
                                        </a>
                                        <a href="<?= base_url() ?>admincontroller/delete_sub_category/<?= $row['sub_cat_id'] ?>">
                                            <button class="btn btn-danger btn-sm" onclick='return confirm("Are You Sure To Remove Record")'>
                                            <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td><?= $key+1 ?></td>
                                    <td><?= $row['category_name'] ?></td>
                                    <td><?= $row['sub_category_name'] ?></td>
                                    <td class="text-center">
                                        <?= $row['sub_cat_status'] ?>
                                    </td>
                                    <td>
                                        <?= $row['sub_cat_date'] ?>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }else{
                                ?>
                                <tr>
                                    <td colspan="20">No Data Found</td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>    
</main>