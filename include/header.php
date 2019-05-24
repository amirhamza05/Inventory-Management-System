<?php

session_start();

if(isset($_SESSION['login_user'])){
	include "include/script/script.php";
	include "include/layout/layout.php";
}
else{
	echo "
		<script>
			window.location.href ='login.php';
		</script>
	";
}

?>