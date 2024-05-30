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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatables-ajax" class="table table-striped table-bordered table-sm text-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Srno</th>
                                    <th>User Name</th>
                                    <th>User Mobile</th>
                                    <th>User Email</th>
                                    <th>User Password</th>
                                    <th>User Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($user_data)>0){
                                    foreach($user_data as $key=>$row){
                                ?>
                                <tr>
                                    
                                    <td><?= $key+1 ?></td>
                                    <td><?= $row['user_name'] ?></td>
                                    <td class="text-center">
                                        <?= $row['user_mobile'] ?>
                                    </td>
                                    <td>
                                        <?= $row['user_email'] ?>
                                    </td>
                                    <td>
                                        <?= $row['user_password'] ?>
                                    </td>
                                    <?php  
                                    if($row['user_img']){
                                        ?>
                                        <td>
                                            <img src="<?= base_url() ?>public/upload/user_login_img/<?= $row['user_img'] ?>" style="height:100px;width:100px" alt="">
                                        </td>
                                        <?php
                                    }
                                    ?>
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
    </div>    
</main>