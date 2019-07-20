
<script type="text/javascript">
	$(document).ready(function(){ 
	// bind and scroll header div
	$(window).bind('resize', function(e){
		$(".affix").css('width',$(".container-fluid" ).width());
	});
	$(window).on("scroll", function() {
		$(".affix").css('width',$(".container-fluid" ).width());
	});
});
</script>
<style type="text/css">
	.affix {
    top:10px;
    position: fixed;
    color: #ffffff;
	z-index:777;
}
.header_filter{
	background-color: #000000;
	font-color: #ffffff;
	padding: 10px;
	font-size: 18px;
	font-weight: bold;
}
.filter_body{
	background-color: #ffffff;
	height: 400px;
}
.search_input{
	padding: 5px;
	width: 75%;
}
.price_input{
	height: 35px;
	width: 70px;
	padding: 5px;
}
.price_select{
	padding: 5px;
	height: 35px;
	width: 110px;
}
.filter_box{
	padding: 5px;
	background-color: #ffffff;
	color: #909090;
	border-radius: 5px;
}
.filter_box_body{
	padding: 15px;
	background-color: #ffffff;
	align-content: center;
}
.filter_box_header{
	padding: 5px 5px 5px 5px;
	background-color: #ffffff;
	border: 2px dashed #DDDDDD;
	border-width: 0px 0px 1px 0px;
	font-weight: bold;
	color: #646464;
}
.btn_filter{
	background-color: #2C293E;
	padding: 6px;
	font-size: 16px;
	border-radius: 3px;
	border-width: 0px;
	color: #ffffff;
}
.select_filter{
	padding: 5px;
	width: 48%;
}
.add_btn{
	background-color: var(--bg-color);
	color: var(--font-color);
}
.add_btn:hover,.add_btn:focus{
	background-color: var(--bg-color);
	color: var(--font-color);
}

</style>
<div class='container-fluid' >
  <div data-spy="affix" data-offset-top="50" style="background-color: #ffffff;color: #ffffff; width: 367px;border-radius: 5px;">
	<div class="filter_box">
		<center>
			<button class="btn add_btn" onclick="add_product_form()">+ Add Product</button><br/>
		</center>
		<div class="filter_box_header">
			Search Product
		</div>
		<div class="filter_box_body">
			<input type="" placeholder="Enter Product Name" class="search_input" name="">
			<button class="btn_filter">Serach</button>
		</div>
		<div class="filter_box_header">
			Select Category and brand
		</div>
		<div class="filter_box_body">
			<select class="select_filter">
				<option>Select Category</option>
			</select>
			<select class="select_filter">
				<option>Select Brand</option>
			</select>
		</div>

		<div class="filter_box_header">
			Order Product
		</div>
		<div class="filter_box_body">
			<select class="select_filter">
				<option>Select Order Type</option>
			</select>
			<select class="select_filter">
				<option>Select Operation</option>
			</select>
			
		</div>

		<div class="filter_box_header">
			Price Filter
		</div>
		<div class="filter_box_body">
			<input type="number" class="price_input" name="">
			<input type="number" class="price_input" name="">
			<select class="price_select">
				<option>Select Unit</option>
				<?php $form_ob->select_option($unit,"name"); ?>
			</select>
			<button class="btn_filter" onclick="btn_filter()">Submit</button>
		</div>

		<div class="filter_box_header">
			Stock Filter
		</div>
		<div class="filter_box_body">
			<input type="number" class="price_input" name="">
			<input type="number" class="price_input" name="">
			<select class="price_select">
				<option>Select Unit</option>
				<?php $form_ob->select_option($unit,"name"); ?>
			</select>
			<button class="btn_filter" onclick="btn_filter()">Submit</button>
		</div>
	</div>



 </div>
</div>
