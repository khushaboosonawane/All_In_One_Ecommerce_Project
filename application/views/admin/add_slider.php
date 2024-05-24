<?php
defined("BASEPATH") or exit("No direct script is allowed");
?>
 <main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Add Slider
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href='<?= base_url() ?>admincontroller/index'>Dashboard</a></li>
                    &nbsp;&nbsp; <span class="text-white fw-bold">/</span> &nbsp;&nbsp;
                    <a href="<?= base_url() ?>admincontroller/add_slider" class="text-white fw-bold">Add Slider</a>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow:0 0 15px #fff">
                    <div class="card-header">
                        <h5 class="card-title lead fw-bold">Manage Slider</h5>
                    </div>
                    <!-- create table category(cat_id integer primary key auto_increment,category_name varchar(1000),category_status varchar(2000),entry_date varchar(1000)); -->
                    <div class="card-body">
                        <form action="<?= base_url() ?>admincontroller/save_slider" method="post" class="row row-cols-md-auto align-items-center" enctype="multipart/form-data">
                            <div class="col-12 col-md-9">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername2">Category Name</label>
                                <div class="input-group mb-2 me-sm-2">
                                    <div class="input-group-text text-white" style="background-color:black">Category Name</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Category Name" name="category_name" required>
                                </div>

                            </div>
                            <div class="col-12 col-md-9">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername2">Category Name</label>
                                <div class="input-group mb-2 me-sm-2">
                                    <div class="input-group-text text-white" style="background-color:black">Category Name</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Category Name" name="category_name" required>
                                </div>

                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark mb-2" style="background-color:black">Save Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>    
</main>