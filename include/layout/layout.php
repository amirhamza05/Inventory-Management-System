

<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="" type="image/gif" sizes="16x16">
    <title><?php "Alom Brother"; ?></title>

    <?php
		include "include/layout/lib.php";

	?>

	<div id="theme_color">
    	<style type="text/css">
        	:root {
            	--bg-color: #2C293E;
            	--font-color: #ffffff;
        } 
    	</style>
	</div>

    <link rel="stylesheet" type="text/css" href="style/stylesheets/theme.css">

	<body class="theme-blue">

		<?php
            
			include "include/layout/nav_bar.php";
            include "include/layout/modal_lib.php";
			include "include/layout/side_bar.php";
            
            
		?>

		<div id="content" class="content">  
			<div class="main-content" style="padding-bottom: 30px;margin-top: 15px;" >
                <?php 
                    include "include/layout/loader.php";
                    include "include/layout/bubble.php";

                ?>
