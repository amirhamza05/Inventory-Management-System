<?php
	
	
	include "config/config.php";
	$db=new database();

	include "script/data/data.php";
	include "script/user/user.php";
	include "script/lib/datatable.php";
	include "script/lib/form.php";
	include "script/product/product.php";

	$data_ob=new data();
	$user=$data_ob->user_list();
	$brand=$data_ob->brand_list();
	$category=$data_ob->category_list();
	$unit=$data_ob->unit_list();

	$login_user_id=$_SESSION['login_user'];
	$login_user=$user[$login_user_id];

	$product_ob=new product();
	$product=$product_ob->product_list();

	$user_ob=new user();
	$datatable_ob=new datatable();
	$form_ob=new form();


?>

