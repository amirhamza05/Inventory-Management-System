<?php
  
$ok=0;
$pid=0;
if(isset($_GET['pid'])){
  $pid=$_GET['pid'];
  if(isset($product[$pid])){
    $ok=$pid;
  }
}

if($ok!=0)
  include "views/product/product_profile/profile_body.php";
else include "404.php";


?>