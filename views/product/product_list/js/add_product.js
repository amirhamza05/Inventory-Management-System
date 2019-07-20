url = "product_list_action.php";
modal_body = "modal_sm_body";
modal = "sm"; 

function add_product_form(){
	

	var data={
		add_product_form: 1
	}
	modal_action("sm","Add Product");
	loader(modal_body);

	get_ajax(get_action_data(modal_body,url),data);
}

function save_product(){
	
	var data=[];
	data.push(["name", "1"]);
	data.push(["brand_id", "1"]);
	data.push(["category_id", "1"]);
	data.push(["description", "0"]);


	var data_info={
		action: "insert",
		table: "product",
		post_name: "save_product",
		data: data,
		error_div: "modal_sm_error",
		url: url,
		ref: 0,
		div: "modal_sm_body"
	}

	store_data(data_info);

}