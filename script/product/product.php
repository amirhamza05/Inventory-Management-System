<?php
class product {
   
//starting connection
 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->data=new data();
 }

 public function product_list(){

 	$sql="
 	select 
 	product.*,brand.name as brand_name,category.name as category_name,
 	user.uname as user_name
 	from product,brand,category,user
 	where product.brand_id=brand.id and product.category_id=category.id
 	and user.id=product.add_by
 	";
 	$info1=$this->db->get_sql_array($sql);

 	$info=array();
 	foreach ($info1 as $key => $value) {
 		$id=$value['id'];
 		$info[$id]=$value;
 	}

 	foreach ($info as $key => $value) {
 		$id=$value['id'];
 		$info[$id]['photo']="upload/product/".$value['photo'];
 		$info[$id]['date']=$this->db->date_to_string($value['date']);
 	}


 	return $info;
 }
 
//end dabtabase connection
}
?>