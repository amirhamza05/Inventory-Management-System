<?php

if(isset($_POST['get_product_update_form'])){
	
	$pid=$_POST['get_product_update_form'];
	$pinfo=$product[$pid];
	$name=$pinfo['name'];
	$category_id=$pinfo['category_id'];
	$brand_id=$pinfo['brand_id'];
	$description=$pinfo['description'];
	$form_ob->form_input("Product Name","name","name","text","exclamation-sign","$name","","yes");
?>

	<b>Select Brand</b><br/>
	<select id="brand_id" class="select_class" style="width: 100%">
		<option value="">Select Brand</option>
		<?php
			$form_ob->select_option($brand,'name',$brand_id);
		?>
	</select>
	<div style="margin-bottom: 10px;"></div>
	<b>Select Category</b><br/>
	<select id="category_id" class="select_class" style="width: 100%">
		<option value="">Select Category</option>
		<?php
			$form_ob->select_option($category,'name',$category_id);
		?>
	</select>

	<div style="margin-bottom: 10px;"></div>
	<b>Description</b><br/>
	<textarea id='description' style="width: 100%; height: 70px"><?php echo "$description"; ?></textarea>
	<center>
		<button onclick="update_product_info()" class="btn_class" style="width: 100%">Save Update</button>
	</center>
<?php
}

if(isset($_POST['update_product_info'])){
	
	$info=$_POST['update_product_info'];
	$data=$info['data'];
	$action=$info['action'];
	$table=$info['table'];
	$db->sql_action($table,$action,$data);
	echo "Sucessfully Update Data";
}


?>