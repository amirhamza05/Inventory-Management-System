<?php
class class_name {
   
//starting connection
 public function __construct(){
     
     $this->db=new database();
     $this->conn=$this->db->conn;
     $this->data=new data();
 }
 
//end dabtabase connection
}
?>