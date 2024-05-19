<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Update <?= $cat_data[0]['category_name'] ?> Category
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href='<?= base_url() ?>admincontroller/index'>Dashboard</a></li>
                    &nbsp;&nbsp; <span class="text-white fw-bold">/</span> &nbsp;&nbsp;
                    <a href="<?= base_url() ?>admincontroller/category" class="text-white fw-bold">Category</a>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow:0 0 15px #fff">
                    <div class="card-header">
                        <h5 class="card-title lead fw-bold">Category form</h5>
                    </div>
                    <!-- create table category(cat_id integer primary key auto_increment,category_name varchar(1000),category_status varchar(2000),entry_date varchar(1000)); -->
                    <div class="card-body">
                        <form action="<?= base_url() ?>admincontroller/update_category" method="post" class="row row-cols-md-auto align-items-center">
                        <input type="hidden" name="cat_id" value="<?= $cat_data[0]['cat_id'] ?>" id="">
                            <div class="col-12 col-md-5">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername2">Category Name</label>
                                <div class="input-group mb-2 me-sm-1">
                                    <div class="input-group-text bg-primary text-white">Category Name</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Category Name" name="category_name" value="<?= $cat_data[0]['category_name'] ?>" required>
                                </div>

                            </div>
                            <div class="col-12 col-md-3">
                                <select class="form-select" aria-label="Default select example" required name="category_status">
                                    <option value="<?= $cat_data[0]['category_status'] ?>"><?= $cat_data[0]['category_status'] ?></option>
                                    <option value="Active">Active</option>
                                    <option value="Disabled">Disabled</option>
                                </select>
                            </div>
                            
                            <div class="col-12 ">
                                <button type="submit" class="btn btn-dark mb-2">Update Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
</main>