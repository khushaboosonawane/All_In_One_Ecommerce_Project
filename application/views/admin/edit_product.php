<?php
defined("BASEPATH") or exit("No direct script is allowed");
?>
 <main class="content">
    <div class="container-fluid">
        <div class="header">
            <h1 class="header-title">
                Update Product
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href='<?= base_url() ?>admincontroller/index'>Dashboard</a></li>
                    &nbsp;&nbsp; <span class="text-white fw-bold">/</span> &nbsp;&nbsp;
                    <a href="<?= base_url() ?>admincontroller/edit_product" class="text-white fw-bold">update Product</a>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow:0 0 15px #fff">
                    <div class="card-header">
                        <h5 class="card-title lead fw-bold">update Product form</h5>
                    </div>
                    
                    <div class="card-body">
                        <form action="<?= base_url() ?>admincontroller/update_product" enctype="multipart/form-data" method="post" class="row row-cols-md-auto align-items-center">
                        <input type="hidden" name="pro_id" value="<?= $product[0]['pro_id'] ?>" id="">
                            <div class="col-12 col-md-3 my-3">
                                <select class="form-select" aria-label="Default select example" name="cat_id" onchange="getsubcategory()" id="cat_id">
                                    <option value="<?= $product[0]['cat_id'] ?>" selected><?= $product[0]['category_name'] ?></option>
                                    <?php
                                    if(count($cat_data)>0){
                                    foreach($cat_data as $key=>$row){
                                    ?>
                                    <option value="<?= $row['cat_id'] ?>"><?= $row['category_name'] ?></option>
                                    <?php
                                    }
                                    }else{
                                    ?>
                                    <option value="no data">No Data Found</option>
                                    <?php
                                    }
                                    ?>
                                   
                                </select>
                            </div>

                            <div class="col-12 col-md-3 my-3">
                                <select class="form-select" aria-label="Default select example" required name="sub_cat_id" id="sub_cat_id">
                                    
                                   <option value="<?= $product[0]['sub_cat_id'] ?>" selected ><?= $product[0]['sub_category_name'] ?></option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3 my-3">
                                <select class="form-select" aria-label="Default select example" name="product_label">
                                   <option value="<?= $product[0]['product_label'] ?>" selected ><?= $product[0]['product_label'] ?></option>
                                   <option>Trending</option>
                                   <option>Up To 10% off</option>
                                   <option>Up To 20% off</option>
                                   <option>Up To 30% off</option>
                                   <option>Up To 40% off</option>
                                   <option>Up To 50% off</option>
                                   <option>Up To 60% off</option>
                                    
                                </select>
                            </div>
                            <div class="col-12 col-md-4 my-3">
                                <div class="input-group mb-2 me-sm-1">
                                    <div class="input-group-text bg-primary text-white">Product Name</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Product Name" name="product_name" required value="<?= $product[0]['product_name'] ?>">
                                </div>

                            </div>
                            <div class="col-12 col-md-4 my-3">
                                <div class="input-group mb-2 me-sm-1">
                                    <div class="input-group-text bg-primary text-white">Product Price</div>
                                    <input type="number" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Product Price" name="product_price" value="<?= $product[0]['product_price'] ?>"  required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 my-3">
                                <div class="input-group mb-2 me-sm-1">
                                    <div class="input-group-text bg-primary text-white">Product Details</div>
                                    <textarea class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Product Details" name="product_details"  required><?= $product[0]['product_details'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 my-3">
                                <div class="input-group mb-2 me-sm-1">
                                    <div class="input-group-text bg-primary text-white">Product Image</div>
                                    <input type="file" class="form-control" id="inlineFormInputGroupUsername2" name="product_image[]" multiple accept="image/*" required>
                                </div>
                            </div>
                            <?php
                            $data=$product[0]['product_image'];
                            $result=explode("&&",$data);
                            for($i=0;$i<count($result);$i++){
                            ?>
                            <img src="<?= base_url() ?>public/upload/product/<?= $result[$i] ?>" style="height:100px;width:100px" alt="">
                            <?php
                            }
                            ?>
                            
                            
                            
                            <div class="col-md-12 text-center my-3">
                                <button type="submit" class="btn btn-dark mb-2" style="background-color:black">Update Information</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
    </div>    
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  function getsubcategory(){
    var cat_id=$("#cat_id").val();
    console.log(cat_id);
    $.ajax({
        url:'<?= base_url() ?>admincontroller/getSubCateUseAjax/'+cat_id,
        dataType:'json'
    }).done(function(res){
        var option="";
        if(res.length>0){
            for(var i=0;i<res.length;i++){
               option += `<option value='${res[i]['sub_cat_id']}'>${res[i]['sub_category_name']}</option>`;
            //    console.log(option);
            }
        }else{
            option += "<option value=''>No Data Found</option>";
        }
        $("#sub_cat_id").html(option);
    })
  }
</script>