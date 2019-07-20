
<div class="container" id='block' style="width: 100%;">
<div class="row">
	<div class="col-md-4 col-sm-4">
    	<div class="invoice_filed">
      		<?php include "views/sell/sell_pos/invoice_area.php"; ?> 
    	</div>
	</div>

	<div class="col-md-8 col-sm-8">
		<div class="product_filed">
     		<?php include 'views/sell/sell_pos/product_list_area.php'; ?>
     	</div>
	</div>
</div>
</div>

<style type="text/css">
	.container {
    height: 100%;
    position: absolute;
}
</style>

<script type="text/javascript">
	document.getElementById('block').style.heigth = window.innerHeight + "px";
</script>