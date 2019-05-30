<?php

	include "include/layout/lib.php";
	if(isset($_GET['page'])){
		$page=$_GET['page'];
		if($page=="pos"){
			include "views/sell/sell_pos/sell_pos.php";
		}

	}


?>