<?php


if(isset($_POST['save_product'])){
	$info=$_POST['save_product'];
	$data=$info['data'];
	$action=$info['action'];
	$table=$info['table'];

	if($action=="insert"){
		$data['date']=$db->date();
		$data['add_by']=$login_user_id;
		$data['photo']="product.png";
	}

	$db->sql_action($table,$action,$data);
	$id=$data_ob->get_last_id('product');
?>
	<center><b>Product Is Sucessfully Save</b><br/>
		<button><a href="product.php?pid=<?php echo $id; ?>">View Prodcut Profile<?php echo " $id"; ?></a></button>
	</center>
<?php
}

if(isset($_POST['add_product_form'])){
	$form_ob->form_input("Product Name","name","name","text","exclamation-sign","","","yes");
?>
	<b>Select Brand</b><br/>
	<select id="brand_id" class="select_filter" style="width: 100%">
		<option value="">Select Brand</option>
		<?php
			$form_ob->select_option($brand,'name');
		?>
	</select>
	<div style="margin-bottom: 10px;"></div>
	<b>Select Category</b><br/>
	<select id="category_id" class="select_filter" style="width: 100%">
		<option value="">Select Category</option>
		<?php
			$form_ob->select_option($category,'name');
		?>
	</select>

	<div style="margin-bottom: 10px;"></div>
	<b>Description</b><br/>
	<textarea id='description' style="width: 100%; height: 70px"></textarea>
	<center>
		<button onclick="save_product()" class="btn" style="width: 100%">Save Product</button>
	</center>

<?php
	}
?>