
<style type="text/css">
	.select_header{
		height: 60px;
		margin-left:-15px;
		margin-top:-15px;
		margin-right:-15px; 
		padding: 15px;
		padding-bottom: 15px;
		background-color: #45AD80;
	}

	.card_product{
		overflow-y: scroll; 
		height:538px;
		background-color: #BABABA;
		padding-top: 10px
	}
	.product_list{
		height:538px;
	}


input[type="checkbox"], input[type="radio"]{
	position: absolute;
	right: 9000px;
}

/*Check box*/
input[type="checkbox"] + .label-text:before{
	content: "\f096";
	font-family: "FontAwesome";
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 5px;
}

input[type="checkbox"]:checked + .label-text:before{
	content: "\f14a";
	color: #2980b9;
	animation: effect 250ms ease-in;
}

input[type="checkbox"]:disabled + .label-text{
	color: #aaa;
}

input[type="checkbox"]:disabled + .label-text:before{
	content: "\f0c8";
	color: #ccc;
}

/*Radio box*/

input[type="radio"] + .label-text:before{
	content: "\f10c";
	font-family: "FontAwesome";
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 5px;
}

input[type="radio"]:checked + .label-text:before{
	content: "\f192";
	color: #8e44ad;
	animation: effect 250ms ease-in;
}

input[type="radio"]:disabled + .label-text{
	color: #aaa;
}

input[type="radio"]:disabled + .label-text:before{
	content: "\f111";
	color: #ccc;
}

/*Radio Toggle*/

.toggle input[type="radio"] + .label-text:before{
	content: "\f204";
	font-family: "FontAwesome";
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing:antialiased;
	width: 1em;
	display: inline-block;
	margin-right: 10px;
}

.toggle input[type="radio"]:checked + .label-text:before{
	content: "\f205";
	color: #16a085;
	animation: effect 250ms ease-in;
}

.toggle input[type="radio"]:disabled + .label-text{
	color: #aaa;
}

.toggle input[type="radio"]:disabled + .label-text:before{
	content: "\f204";
	color: #ccc;
}


@keyframes effect{
	0%{transform: scale(0);}
	25%{transform: scale(1.3);}
	75%{transform: scale(1.4);}
	100%{transform: scale(1);}
}

.sell_view .modal-dialog{max-width: 400px; width: 100%;}
.modal-backdrop
{
    opacity:0.9 !important;
}
</style>
	
<div id="product_list_body" style="height: 100%">

<div class="select_header">
<select style="padding: 9px; width: 150px" onChange="select_brand(this);" id="select_brand">
	<option value="all">All Product</option>
</select>


<span class="glyphicon glyphicon-barcode fa-lg" style="padding: 5px; color: #ffffff; margin-left: 120px;"></span>
<input type="" name="" id="search_barcode" onkeyup="fun()" placeholder="Enter Product BarCode" style="padding: 7px">
<button onclick="full()">Full Screen</button>
</div>



<div class="product_list">
 <div class="row">
<div class="card_product" id="">
<div id="product_list">
	<?php 
foreach ($product_info as $key => $info) {
	$pid=$info['pid'];
	$pname=$info['pname'];
	$image=$info['image'];
	$brand=$info['brand'];
 ?>

			<div class="col-sm-3 col-xs-6 col-md-3">
				<div class="thumbnail"  style="background-color: #dcedc8;border-top-width: 4px; border-radius: 0px; border-color: #FF3600">
					
					<div class="secrow">
						<div style="background-color: #ffffff; margin: -5px;">
						<img src="<?php echo "$image"; ?>" alt="" class="img-responsivee" width="100%"  height="80px"></div>
						
						<div class="caption" style="background-color: #F7F7F7; margin: -5px;"">
							<center>
							<b><?php echo "$pname" ?><br/></b>
							<?php echo "$brand"; ?><br>
							2 Pices Avilabol
							</center>
						</div>
					</div>
					<div class="frow" style="margin: -5px;">
						<center>
		<button class="btn btn-success btn-sm" data-toggle="modal" onclick="add_invoice_page(<?php echo "$pid"; ?>)" data-target="#add_invoice" style="width: 100%; background-color: #094B61; border-width: 0px; border-radius: 0px;"><b>Add Invoice</b></button>
                        </center>
					</div>

		   		</div>
			</div>
		
<?php } ?>
</div>
</div>
</div>

</div>


<div class="modal fade sell_view" id="add_invoice">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background-color: #16A086">
<a href="#" data-dismiss="modal" aria-label="Close"  class="class pull-right"><span class="glyphicon glyphicon-remove white" style="color: #ffffff"></span></a>

<h3 class="modal-title"><font color="#ffffff"><?php echo"$pname"; ?></font></h3>
</div>

<div id="add_invoice_body" class="modal-body" style="background-color:#D5CFCF;">



</div>
</div></div></div>
</div>	