<?php

session_start();
include "config/config.php";
include "script/data/data.php";
include "script/user/user.php";
$user_ob=new user();

if(isset($_POST['login'])){

	$info=$_POST['login'];
	$user_id=$user_ob->check_login_user($info['uname'],$info['pass']);
	$invalid=1;
	if($user_id!=-1){
		$_SESSION['login_user']=$user_id;
		$invalid=0;
	}
	$data['error']=$invalid;
	$data['error_msg']="Please Fill Up Correct User Name and Password";
	$data=json_encode($data);
	echo "$data";
	
}


?>