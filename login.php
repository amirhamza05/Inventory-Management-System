<?php
session_start();
if(isset($_SESSION['login_user'])){
	echo "
		<script>
			window.location.href ='index.php';
		</script>
	";
}
else include "views/login/login.php";

?>