<?php
defined("BASEPATH") or exit("no direct script is allowed");

class MyModel extends CI_Model{
    public function insert($tablename,$data){
        $this->db->insert($tablename,$data);
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
}
?>