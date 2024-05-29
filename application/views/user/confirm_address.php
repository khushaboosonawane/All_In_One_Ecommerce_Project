<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>


<div class="container">
    <div class="row d-flex justify-content-center">
        <h4 class="text-center my-3">Confirm Address</h4>
        <div class="col-md-5 p-5 shadow">
            <form action="<?= base_url() ?>usercontroller/place_order" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Deliver To</span>
                    <input type="text" class="form-control" value="<?= $user_data[0]['user_name'] ?>" aria-label="Username" aria-describedby="basic-addon1" name="deliver_to" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Country</span>
                    <input type="text" class="form-control" placeholder="Enter Country Name" aria-label="Username" aria-describedby="basic-addon1" name="deliver_country">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">State</span>
                    <input type="text" class="form-control" placeholder="Enter State Name" aria-label="Username" aria-describedby="basic-addon1" name="deliver_state">
                </div>  
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">District</span>
                    <input type="text" class="form-control" placeholder="Enter District Name" aria-label="Username" aria-describedby="basic-addon1" name="deliver_district">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Area</span>
                    <input type="text" class="form-control" placeholder="Enter Area Name" aria-label="Username" aria-describedby="basic-addon1" name="deliver_area">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Pincode</span>
                    <input type="number" class="form-control" placeholder="Enter Pincode" aria-label="Username" aria-describedby="basic-addon1" name="deliver_pincode">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary">Confirm Address</button>
                </div>
            </form>
        </div>
    </div>
</div>