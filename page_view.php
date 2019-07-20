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
			echo "
			<script src='views/page_view/js/form_view.js' type='text/javascript'></script>
			<script src='views/page_view/js/save_script.js' type='text/javascript'></script>

			";
			$path="views/page_view/$page.php";
		}
	}

	include "$path";
	include "footer.php";


?>