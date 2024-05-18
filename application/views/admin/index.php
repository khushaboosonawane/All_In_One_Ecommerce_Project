<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <!-- main content start here  -->

 <main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Form Layouts
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href='<?= base_url() ?>/admincontroller/index'>Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow:0 0 20px #fff">
                    <div class="card-header">
                        <h5 class="card-title">Inline form</h5>
                        <h6 class="card-subtitle text-muted">Single horizontal row.</h6>
                    </div>
                    <div class="card-body">
                        <form class="row row-cols-md-auto align-items-center">
                            <div class="col-12">
                                <label class="visually-hidden" for="inlineFormInputName2">Name</label>
                                <input type="text" class="form-control mb-2 me-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                            </div>

                            <div class="col-12">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername2">Username</label>
                                <div class="input-group mb-2 me-sm-2">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check mb-1 me-sm-2">
                                    <input type="checkbox" class="form-check-input" id="customControlInline">
                                    <label class="form-check-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</main>

			