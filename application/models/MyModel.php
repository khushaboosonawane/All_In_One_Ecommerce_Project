<?php
defined("BASEPATH") or exit("no direct script is allowed");

class MyModel extends CI_Model{
    public function insert($tablename,$data){
        $this->db->insert($tablename,$data);
        return $this->db->insert_id();
    }
    public function select($tablename){
       return $this->db->get($tablename)->result_array();
    }
    public function edit_data($tablename,$id){
        return $this->db->where($id)->get($tablename)->result_array();
    }
    public function update($tablename,$condi,$data){
        $this->db->where($condi)->update($tablename,$data);
    }
    public function delete($tablename,$condi){
        $this->db->where($condi)->delete($tablename);
    }
    public function select_sub_cat(){
        return $this->db->query("select * from sub_category,category where sub_category.cat_id=category.cat_id")->result_array();
    }
    public function select_where($tablename,$condi){
        return $this->db->where($condi)->get($tablename)->result_array();
    }
    public function select_product(){
        return $this->db->query("select * from category,sub_category,product where category.cat_id=sub_category.cat_id and product.cat_id=category.cat_id and product.sub_cat_id=sub_category.sub_cat_id")->result_array();
    }
    public function edit_product($pro_id){
       return $this->db->query("select * from category,product,sub_category where category.cat_id=sub_category.cat_id and product.cat_id=category.cat_id and product.sub_cat_id=sub_category.sub_cat_id and pro_id='$pro_id'")->result_array();
    }
    public function cartdeatils(){
        if(isset($_SESSION['user_id'])){
            $user_id=$_SESSION['user_id'];
            return $this->db->query("SELECT * FROM user_cart,product WHERE user_cart.pro_id=product.pro_id and user_cart.user_id='$user_id'")->result_array();
        }else{
            $_SESSION['meesage']="Create Your Account";
        }
        
    }
    public function get_order_details($status){
        return $this->db->query("select * from order_tbl,users where order_tbl.user_id=users.user_id and order_tbl.order_status='$status' and status='active'")->result_array();
    }
    public function select_order_data($order_id){
        $user_id=$_SESSION['user_id'];
        return $this->db->query("select * from order_tbl,order_deatils where order_tbl.order_id='$order_id' and order_deatils.order_id='$order_id' and order_tbl.user_id='$user_id'")->result_array();
    }
    public function select_order_details(){
        return $this->db->query("select * from users,order_tbl,order_deatils where users.user_id=order_deatils.user_id and order_tbl.order_id=order_deatils.order_id and order_deatils.status='active'")->result_array();
    }
   
}
?>

