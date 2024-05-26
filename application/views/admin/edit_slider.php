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
                    <a href="<?= base_url() ?>admincontroller/edit_slider" class="text-white fw-bold">Update Slider</a>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow:0 0 15px #fff">
                    <div class="card-header">
                        <h5 class="card-title lead fw-bold">Update Slider</h5>
                    </div>
                    <!-- create table slider(sli_id integer primary key auto_increment,slider_url text,slider_image text); -->
                    <div class="card-body">
                        <form action="<?= base_url() ?>admincontroller/update_slider" method="post" class="row row-cols-md-auto align-items-center" enctype="multipart/form-data">
                       
                        <input type="hidden" name="sli_id"  id="" value="<?= $slider[0]['sli_id'] ?>">
                            <div class="col-12 col-md-5">
                                <div class="input-group mb-2 me-sm-2">
                                    <div class="input-group-text text-white" style="background-color:black">Slider URL</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Slider URL" name="slider_url" required value="<?= $slider[0]['slider_url'] ?>">
                                </div>

                            </div>
                            <div class="col-12 col-md-3">
                                <div class="input-group mb-2 me-sm-2">
                                    <div class="input-group-text text-white" style="background-color:black">Slider Image</div>
                                    <input type="file" class="form-control" id="inlineFormInputGroupUsername2" name="slider_image" >
                                </div>

                            </div>
                            <div class="col-12 col-md-4">
                                <img src="<?= base_url() ?>public/upload/slider/<?= $slider[0]['slider_image'] ?>" style="height:100px;width:100px" alt="">
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-dark mb-2" style="background-color:black">Update Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>    
</main>