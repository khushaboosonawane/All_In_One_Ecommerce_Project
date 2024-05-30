<div class="main">
			
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Analytics Overview
						</h1>
						<p class="header-subtitle">Dashboard</p>
					</div>

                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Users</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-dark-dark">
                                                    <i class="align-middle" data-feather="users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $data=$this->db->query("select count(*) as user_count from users")->result_array();
                                    if(count($data)>0){
                                ?>
                                <h1 class="display-5 mt-2 mb-4"><?= $data[0]['user_count'] ?></h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                        Less visitors than usual
                                        <br>
                                        <a href="<?= base_url() ?>admincontroller/user_data">
                                            <button class="btn btn-dark">View Users</button>
                                        </a>
                                    </div>
                                <?php
                                    }else{
                                        ?>
                                        <h1 class="display-5 mt-2 mb-4">2.562</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                        Less visitors than usual
                                    </div>
                                        <?php

                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Category</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-dark-dark">
                                                    <!-- <i class="align-middle" data-feather="users"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="category"><path fill="white" d="M16.9651972,10.7910943 C18.6355551,10.7962613 19.9898225,12.1745282 20,13.8796779 L20,13.8796779 L20,16.9019422 C19.9898672,18.6086493 18.6370574,19.989656 16.9651972,20 L16.9651972,20 L14.0046404,20 C12.3343058,19.9896104 10.9841799,18.6071157 10.9791183,16.9019422 L10.9791183,16.9019422 L10.9791183,13.8796779 C10.9791183,12.1739003 12.3336907,10.7910943 14.0046404,10.7910943 L14.0046404,10.7910943 Z M4.25058005,10.7911094 C4.56143174,10.7571369 4.86400582,10.9072962 5.02984404,11.1778368 C5.19568227,11.4483775 5.19568227,11.7918234 5.02984404,12.0623641 C4.86400582,12.3329047 4.56143174,12.483064 4.25058005,12.4490914 L4.25058005,12.4490914 L3.03480278,12.4490914 C2.25931969,12.4490743 1.62923179,13.0880635 1.62412993,13.879693 L1.62412993,13.879693 L1.62412993,16.8640606 C1.64384865,17.6493393 2.26544423,18.2797163 3.03480278,18.2946623 L3.03480278,18.2946623 L6.01392111,18.2946623 C6.38719882,18.2971859 6.74603726,18.147577 7.01085993,17.8790132 C7.27568261,17.6104493 7.42460215,17.245127 7.42459397,16.8640606 L7.42459397,16.8640606 L7.42459397,12.3827722 L7.4119274,12.2712944 C7.39792632,11.9748017 7.54013038,11.6892532 7.790386,11.527269 C8.07192357,11.3450368 8.43369689,11.3557726 8.70438922,11.5543927 C8.97508155,11.7530127 9.10035302,12.0996451 9.02088167,12.4301431 L9.02088167,12.4301431 L9.02088167,16.8924832 C9.02088167,18.6034933 7.66215418,19.990541 5.98607889,19.990541 L5.98607889,19.990541 L3.03480278,19.990541 C1.37321638,19.9553489 0.0344735814,18.5887024 -1.15463195e-14,16.8924832 L-1.15463195e-14,16.8924832 L-1.15463195e-14,13.879693 C-1.15463195e-14,13.0589056 0.320029324,12.2718731 0.889433607,11.6923782 C1.45883789,11.1128833 2.23077765,10.7885917 3.03480278,10.7911094 L3.03480278,10.7911094 Z M16.9651972,12.4490763 L14.0046404,12.4490763 C13.2306729,12.4490763 12.6032171,13.0895784 12.6032171,13.8796779 L12.6032171,13.8796779 L12.6032171,16.9019422 C12.600757,17.2821353 12.7476031,17.6474939 13.0109571,17.916337 C13.2743111,18.1851801 13.6322099,18.335087 14.0046404,18.3325757 L14.0046404,18.3325757 L16.9651972,18.3325757 C17.3376276,18.335087 17.6955265,18.1851801 17.9588805,17.916337 C18.2222345,17.6474939 18.3690806,17.2821353 18.3666205,16.9019422 L18.3666205,16.9019422 L18.3666205,13.8796779 C18.3666205,13.5002587 18.2189431,13.1363796 17.9561311,12.8680898 C17.6933191,12.5997999 17.3368695,12.4490763 16.9651972,12.4490763 L16.9651972,12.4490763 Z M16.9651972,1.42108547e-14 C18.6231586,0.0401888697 19.9564291,1.40542407 19.9907193,3.09805779 L19.9907193,3.09805779 L19.9907193,6.11084794 C20.0006255,6.93000939 19.6913283,7.71963098 19.1308818,8.30597331 C18.5704353,8.89231564 17.8047578,9.22733887 17.0023202,9.23732828 L17.0023202,9.23732828 L15.7772622,9.23732828 C15.3622318,9.19197022 15.0474942,8.83443927 15.0474942,8.40833728 C15.0474942,7.98223529 15.3622318,7.62470434 15.7772622,7.57934628 L15.7772622,7.57934628 L16.9651972,7.57934628 C17.3409577,7.57685591 17.7002159,7.42142485 17.963298,7.14752348 C18.2263802,6.87362212 18.3715416,6.50388945 18.3665893,6.12032212 L18.3665893,6.12032212 L18.3665893,3.09805779 C18.3565908,2.31222501 17.7349852,1.67766309 16.9651972,1.66745618 L16.9651972,1.66745618 L14.0046404,1.66745618 C13.2306729,1.66745618 12.6032483,2.30795834 12.6032483,3.09805779 L12.6032483,3.09805779 L12.6032483,7.61724301 L12.5935698,7.72116039 C12.5305946,8.1290042 12.1825523,8.43701778 11.7679814,8.43202274 C11.5521645,8.42708972 11.3472696,8.33413973 11.1990474,8.1739275 C11.0508253,8.01371527 10.9716204,7.79958378 10.9791183,7.57934628 L10.9791183,7.57934628 L10.9791183,3.09805779 C10.976652,2.2772742 11.2943223,1.48924474 11.8619853,0.907972252 C12.4296483,0.32669976 13.2006115,1.42108547e-14 14.0046404,1.42108547e-14 L14.0046404,1.42108547e-14 Z M5.99535968,9.32587341e-14 C7.66931968,0.00520201691 9.02506666,1.3892071 9.03016246,3.09805779 L9.03016246,3.09805779 L9.03016246,6.12032212 C9.03016246,6.94110958 8.71013314,7.7281421 8.14072886,8.307637 C7.57132457,8.8871319 6.79938482,9.21142348 5.99535968,9.20892028 L5.99535968,9.20892028 L3.03480284,9.20892028 C1.36444497,9.20373866 0.0101775379,7.82547177 5.10440676e-08,6.12032212 L5.10440676e-08,6.12032212 L5.10440676e-08,3.09805779 C0.0101328156,1.39135069 1.36294265,0.0103439638 3.03480284,9.32587341e-14 L3.03480284,9.32587341e-14 Z M5.99535968,1.66745618 L3.03480284,1.66745618 C2.6583302,1.65981918 2.29468591,1.80716464 2.02582107,2.07628669 C1.75695622,2.34540874 1.60549417,2.7136624 1.6055685,3.09805779 L1.6055685,3.09805779 L1.6055685,6.12032212 C1.59791363,6.50962241 1.74603381,6.88528857 2.0157445,7.1606209 C2.28545519,7.43595322 2.65345114,7.5871607 3.03480284,7.57934628 L3.03480284,7.57934628 L5.99535968,7.57934628 C6.37112019,7.57685591 6.73037836,7.42142485 6.99346051,7.14752348 C7.25654266,6.87362212 7.40170403,6.50388945 7.39675179,6.12032212 L7.39675179,6.12032212 L7.39675179,3.09805779 C7.39169024,2.31010852 6.76722089,1.67262323 5.99535968,1.66745618 L5.99535968,1.66745618 Z" transform="translate(2 2)"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $data=$this->db->query("select count(*) as cat_data from category")->result_array();
                                    if(count($data)>0){
                                ?>
                                <h1 class="display-5 mt-2 mb-4"><?= $data[0]['cat_data'] ?></h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> <?= $data[0]['cat_data'] ?> Category Avialable </span>
                                        
                                        <a href="<?= base_url() ?>admincontroller/category">
                                            <button class="btn btn-dark">View Category</button>
                                        </a>
                                    </div>
                                <?php
                                    }else{
                                        ?>
                                        <h1 class="display-5 mt-2 mb-4">2.562</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                        Less visitors than usual
                                    </div>
                                        <?php

                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Sub-Category</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-dark-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="category"><path fill="white" d="M0 0h24v24H0V0z"></path><path d="M12 2l-5.5 9h11L12 2zm0 3.84L13.93 9h-3.87L12 5.84zM17.5 13c-2.49 0-4.5 2.01-4.5 4.5s2.01 4.5 4.5 4.5 4.5-2.01 4.5-4.5-2.01-4.5-4.5-4.5zm0 7c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM3 21.5h8v-8H3v8zm2-6h4v4H5v-4z"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $data=$this->db->query("select count(*) as sub_data from sub_category")->result_array();
                                    if(count($data)>0){
                                ?>
                                <h1 class="display-5 mt-2 mb-4"><?= $data[0]['sub_data'] ?></h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> <?= $data[0]['sub_data'] ?>Sub Category Avialable </span>
                                        
                                        <a href="<?= base_url() ?>admincontroller/subcategory">
                                            <button class="btn btn-dark">View Sub-Category</button>
                                        </a>
                                    </div>
                                <?php
                                    }else{
                                        ?>
                                        <h1 class="display-5 mt-2 mb-4">2.562</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                        Less visitors than usual
                                    </div>
                                        <?php

                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Total Order</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-dark-dark">
                                                <i class="ri-shopping-cart-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $data=$this->db->query("select count(*) as order_data from order_tbl")->result_array();
                                    if(count($data)>0){
                                ?>
                                <h1 class="display-5 mt-2 mb-4"><?= $data[0]['order_data'] ?></h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> <?= $data[0]['order_data'] ?> Total Order</span>
                                        
                                        <a href="<?= base_url() ?>admincontroller/pending_order">
                                            <button class="btn btn-dark">View Total Order</button>
                                        </a>
                                    </div>
                                <?php
                                    }else{
                                        ?>
                                        <h1 class="display-5 mt-2 mb-4">2.562</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                        Less visitors than usual
                                    </div>
                                        <?php

                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Total Delivered Order</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-dark-dark">
                                                <i class="ri-shopping-cart-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $data=$this->db->query("select count(*) as deliver_order from order_tbl where order_status='deliver'")->result_array();
                                    if(count($data)>0){
                                ?>
                                <h1 class="display-5 mt-2 mb-4"><?= $data[0]['deliver_order'] ?></h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> <?= $data[0]['deliver_order'] ?> Delivered Order</span>
                                        
                                        <a href="<?= base_url() ?>admincontroller/delivered_order_details">
                                            <button class="btn btn-dark">View Delivered Order</button>
                                        </a>
                                    </div>
                                <?php
                                    }else{
                                        ?>
                                        <h1 class="display-5 mt-2 mb-4">2.562</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                        Less visitors than usual
                                    </div>
                                        <?php

                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Total Rejected Order</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-dark-dark">
                                                <i class="ri-shopping-cart-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $data=$this->db->query("select count(*) as rejected_order from order_tbl where order_status='rejected'")->result_array();
                                    if(count($data)>0){
                                ?>
                                <h1 class="display-5 mt-2 mb-4"><?= $data[0]['rejected_order'] ?></h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> <?= $data[0]['rejected_order'] ?> Rejected Order</span>
                                        
                                        <a href="<?= base_url() ?>admincontroller/rejected_order_details">
                                            <button class="btn btn-dark">View Rejected Order</button>
                                        </a>
                                    </div>
                                <?php
                                    }else{
                                        ?>
                                        <h1 class="display-5 mt-2 mb-4">2.562</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
                                        Less visitors than usual
                                    </div>
                                        <?php

                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</main>
		</div>