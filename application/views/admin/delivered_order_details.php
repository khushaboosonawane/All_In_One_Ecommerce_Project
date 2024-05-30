<?php
defined("BASEPATH") or exit("No direct script is allowed");
?>
 <main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Dispatched Orders
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href='<?= base_url() ?>admincontroller/index'>Dashboard</a></li>
                    &nbsp;&nbsp; <span class="text-white fw-bold">/</span> &nbsp;&nbsp;
                    <a href="<?= base_url() ?>admincontroller/dispatch_order_details" class="text-white fw-bold">Dispatched Order</a>
                </ol>
            </nav>
        </div>
      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="datatables-ajax" class="table table-striped table-bordered table-sm text-center table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>SN</th>
                                    <th>Date</th>
                                    <th>Order From</th>
                                    <th>Address</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($orders)>0){
                                   foreach($orders as $key=>$row){
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="<?= base_url() ?>admincontroller/view_order_details/<?= $row['order_id'] ?>">
                                                <button class="btn btn-primary btn-sm">Order Details</button>
                                            </a>
                                        </td>
                                        <td><?= $key+1 ?></td>
                                        <td><?= date('d-M-Y',strtotime($row['order_date'])) ?></td>
                                        <td><?= $row['user_name'] ?></td>
                                        <td style="white-space:normal"><?= $row['deliver_to'] ?>,<?= $row['deliver_country'] ?>,<?= $row['deliver_state'] ?>,<?= $row['deliver_district'] ?>,<?= $row['deliver_pincode'] ?></td>
                                        <td><?= number_format($row['ttl_amount']) ?>&#8377;</td>
                                    </tr>
                                    <?php
                                   }
                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="20" class="text-center">No Order Avialable</td>
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