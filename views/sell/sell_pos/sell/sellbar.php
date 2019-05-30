<?php

include "include/nev.php";
include "include/style.php";

?>

<style>
    .pagination>li {
display: inline;
padding:0px !important;
margin:0px !important;
border:none !important;
}
.modal-backdrop {
  
}
/*
Fix to show in full screen demo
*/
iframe
{
    height:700px !important;
}

.btn {
display: inline-block;
padding: 6px 12px !important;
margin-bottom: 0;
font-size: 14px;
font-weight: 400;
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
-ms-touch-action: manipulation;
touch-action: manipulation;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
background-image: none;
border: 1px solid transparent;
border-radius: 4px;
}

.btn-primary {
color: #fff !important;
background: #428bca !important;
border-color: #357ebd !important;
box-shadow:none !important;
}
.btn-danger {
color: #fff !important;
background: #d9534f !important;
border-color: #d9534f !important;
box-shadow:none !important;
}

.back{

    background-color: #ffffff;
    padding: 15px;
}

</style>
<script>
    $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

</script>


<head>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<div class="container">


    <div class="row">
		<div class="col-sm-4 col-md-3 sidebar">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div class="list-group">
        <span href="#" class="list-group-item active">
            Stock
            <span class="pull-right" id="slide-submenu">
                
            </span>
        </span>
        <a href="selllist.php" class="list-group-item">
            <i class="fa fa-comment-o"></i> Sell List
        </a>

        <a href="addsell.php" class="list-group-item">
            <i class="fa fa-search"></i> Sell Product
        </a>
        
    </div>        
</div>
<style>
    
.pad{
    border: 1px solid #DDDDDD;
    background-color: #D5CFCF;
}

</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
