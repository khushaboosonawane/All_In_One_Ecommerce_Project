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
                    <!-- create table slider(sli_id integer primary key auto_increment,slider_url text,slider_image text); -->
                    <div class="card-body">
                        <form action="<?= base_url() ?>admincontroller/save_slider" method="post" class="row row-cols-md-auto align-items-center" enctype="multipart/form-data">
                            <div class="col-12 col-md-5">
                                <div class="input-group mb-2 me-sm-2">
                                    <div class="input-group-text text-white" style="background-color:black">Slider URL</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Slider URL" name="slider_url" required>
                                </div>

                            </div>
                            <div class="col-12 col-md-5">
                                <div class="input-group mb-2 me-sm-2">
                                    <div class="input-group-text text-white" style="background-color:black">Slider Image</div>
                                    <input type="file" class="form-control" id="inlineFormInputGroupUsername2" name="slider_image" required>
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