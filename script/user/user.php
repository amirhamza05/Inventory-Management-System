<?php
class user {
 
public $user_list_data;

 public function __construct(){
     
    $this->db=new database();
    $this->conn=$this->db->conn;
 }

 public function user_list(){

 	$sql="select * from user";
 	$info=$this->db->get_sql_array($sql);
 	$data=array();
 	foreach ($info as $key => $value) {
 		$id=$value['id'];
 		$data[$id]=$value;
 	}
 	$this->user_list_data=$data;
 	return $data;
 }

 public function single_user_info($user_id){
 	$data=$this->user_list_data;
 	return (isset($data[$user_id]))?$data[$user_id]['id']:-1;
 }

 public function check_login_user($user_name,$pass){
 	//$pass=hash('sha256', $pass);
 	$sql="select * from user where uname='$user_name' and password='$pass'";
 	$info=$this->db->get_sql_array($sql);
 	return isset($info[0])?$info[0]['id']:-1;
 }
 

}
?>