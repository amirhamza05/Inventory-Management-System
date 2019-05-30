<?php
	
	include "header.php";
	
	$page_list=array();
	$page_list['brand']=1;
	$page_list['category']=1;
	$page_list['unit']=1;

	$path="404.php";

	if(isset($_GET['action'])){
		$page=$_GET['action'];
		if(isset($page_list[$page])){
			$path="views/page_view/$page.php";
		}
	}

	include "$path";
	include "footer.php";


?>