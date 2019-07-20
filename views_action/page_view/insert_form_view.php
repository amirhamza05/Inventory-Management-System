<?php

if(isset($_POST['brand_action'])){
	$info=$_POST['brand_action'];
	$data=$info['data'];
	$action=$info['action'];
	$table=$info['table'];

	if($action=="insert"){
		$data['date']=$db->date();
		$data['add_by']=$login_user_id;
	}

	$db->sql_action($table,$action,$data);
}

if(isset($_POST['unit_action'])){
	$info=$_POST['unit_action'];
	$data=$info['data'];
	$action=$info['action'];
	$table=$info['table'];

	if($action=="insert"){
		$data['date']=$db->date();
		$data['add_by']=$login_user_id;
		
	}

	$db->sql_action($table,$action,$data);
}


if(isset($_POST['category_action'])){
	$info=$_POST['category_action'];
	$data=$info['data'];
	$action=$info['action'];
	$table=$info['table'];

	if($action=="insert"){
		$data['date']=$db->date();
		$data['add_by']=$login_user_id;
	}

	$db->sql_action($table,$action,$data);
}

if(isset($_POST['brand_action_form'])){

	$info=$_POST['brand_action_form'];
	$action=$info['action'];
	$id=$info['id'];
	if($action=="delete"){
		$form_ob->delete_form("brand_action");
		return 0;
	}
	$name="";
	$note="";
	$data_array=$brand;
	if(isset($data_array[$id])){
		$name=$data_array[$id]['name'];
		$note=$data_array[$id]['note'];
	}
	
	$form_ob->form_input("Brand Name","name","name","text","exclamation-sign","$name","","yes");
?>

<b>Note</b><br/>
	<textarea id='note' style="width: 100%; height: 70px"><?php echo "$note"; ?></textarea>
	<center>
		<button onclick="brand_action('<?php echo "$action"; ?>')" class="btn" style="width: 100%">Save Brand</button>
	</center>
		
<?php
}

else if(isset($_POST['category_action_form'])){
	$info=$_POST['category_action_form'];
	$action=$info['action'];
	$id=$info['id'];
	if($action=="delete"){
		$form_ob->delete_form("category_action");
		return 0;
	}
	$name="";
	$note="";
	$data_array=$category;
	if(isset($data_array[$id])){
		$name=$data_array[$id]['name'];
		$note=$data_array[$id]['note'];
	}
	
	$form_ob->form_input("Category Name","name","name","text","exclamation-sign","$name","","yes");
?>

<b>Note</b><br/>
	<textarea id='note' style="width: 100%; height: 70px"><?php echo "$note"; ?></textarea>
	<center>
		<button onclick="category_action('<?php echo "$action"; ?>')" class="btn" style="width: 100%">Save Category</button>
	</center>

<?php	
	}

else if(isset($_POST['unit_action_form'])){
	$info=$_POST['unit_action_form'];
	$action=$info['action'];
	$id=$info['id'];
	if($action=="delete"){
		$form_ob->delete_form("unit_action");
		return 0;
	}
	$name="";
	$note="";
	$data_array=$unit;
	if(isset($data_array[$id])){
		$name=$data_array[$id]['name'];
		$note=$data_array[$id]['note'];
	}
	
	$form_ob->form_input("Unit Name","name","name","text","exclamation-sign","$name","","yes");
?>

<b>Note</b><br/>
	<textarea id='note' style="width: 100%; height: 70px"><?php echo "$note"; ?></textarea>
	<center>
		<button onclick="unit_action('<?php echo "$action"; ?>')" class="btn" style="width: 100%">Save Unit</button>
	</center>

<?php	
	}

?>

