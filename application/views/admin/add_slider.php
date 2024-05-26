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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-ajax" class="table table-striped table-bordered table-sm text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Update</th>
                                    <th>Srno</th>
                                    <th>Slider URL</th>
                                    <th>Slider Image</th>
                                </tr>
                            </thead>
                           <tbody>
                            <?php
                            if(count($slider_data)>0){
                               foreach($slider_data as $key=>$row){
                            ?>
                            <tr>
                                <td>
                                    <a href="<?= base_url() ?>admincontroller/edit_slider/<?= $row['sli_id'] ?>">
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                    </a>
                                    <a href="<?= base_url() ?>admincontroller/delete_slider/<?= $row['sli_id'] ?>">
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">Delete</button>
                                    </a>
                                </td>
                                <td><?= $key+1 ?></td>
                                <td><?= $row['slider_url'] ?></td>
                                <td>
                                    <img src="<?= base_url() ?>public/upload/slider/<?= $row['slider_image'] ?>" style="height:100px;width:100px;padding:20px" alt="">
                                </td>
                            </tr>
                            <?php
                               }
                            }else{
                            ?>
                            <tr>
                                <td colspan="20" class="text-center">No Data Found</td>
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
    </div>    
</main>