<?php
class user {
 

 public function __construct(){
     
    $this->db=new database();
    $this->conn=$this->db->conn;
    $this->data=new data();
 }


 public function single_user_info($user_id){
 	$data=$this->data->user_list();
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