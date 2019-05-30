<?php
class data {
   
//starting connection
 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
 }
 
//end dabtabase connection
 public function get_data($sql){
 	$info=$this->db->get_sql_array($sql);
 	$data=array();
 	foreach ($info as $key => $value) {
 		$id=$value['id'];
 		$data[$id]=$value;
 	}
 	return $data;
 }

 public function get_table_data($table_name){
 	$sql=$sql="select * from $table_name";
 	$data=$this->get_data($sql);
 	return $data;
 }

 public function user_list(){
 	return $this->get_table_data("user");
 }

 public function category_list(){
 	return $this->get_table_data("category");
 }

 public function brand_list(){
 	return $this->get_table_data("brand");
 }

 public function unit_list(){
 	return $this->get_table_data("unit");
 }



}
?>