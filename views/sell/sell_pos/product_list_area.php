
<style type="text/css">
	.select_header{
		height: 79px;
		margin-left:-15px;
		margin-top:-15px;
		margin-right:-15px; 
		padding: 15px;
		padding-bottom: 15px;
		background-color: #45AD80;
	}

	.card_product{
		overflow-y: scroll; 
		height:560px;
		background-color: #BABABA;
		padding-top: 10px
	}
	.product_list{
		height:538px;
	}

</style>
	
<div id="product_list_body" style="height: 100%">

<div class="select_header">
	<div style="margin-top: 12px;"></div>
	<div class="row">
	<center>
		<div class="col-md-4">
		
			<select style="padding: 9px; width: 150px" onChange="select_brand(this);" id="select_brand">
			<option value="all">All Product</option>
			</select>

		</div>
		<div class="col-md-3">
			<div style="font-size: 30px">Product List</div>
		</div>
		<div class="col-md-5">
			<span class="glyphicon glyphicon-barcode fa-lg" style="padding: 5px; color: #ffffff; margin-left: 120px;"></span>
			<input type="" name="" id="search_barcode" onkeyup="fun()" placeholder="Enter Product BarCode" style="padding: 7px">
		</div>
		</center>
	</div>
	
	
</div>



<div class="product_list">
<div class="row">
<div class="card_product" id="">
<div id="product_list">
	<?php 
for($i=0; $i<50; $i++) {
	$pid=1;
	$pname="product";
	$image="https://media.allure.com/photos/577179d02554df47220a17ef/master/w_636,h_424,c_limit/beauty-products-hair-2013-06-curly-hair-product-regimen.jpg";
	$brand="smssung";
 ?>

			<div class="col-md-3">
				<div class="thumbnail"  style="background-color: #dcedc8;border-top-width: 4px; border-radius: 0px; border-color: #FF3600">
					
					<div class="secrow">
						<div style="background-color: #ffffff; margin: -5px;">
						<img src="<?php echo "$image"; ?>" alt="" class="img-responsivee" width="100%"  height="80px"></div>
						
						<div class="caption" style="background-color: #F7F7F7; margin: -5px;">
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

</div>	