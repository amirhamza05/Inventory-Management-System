
function make_post_name(table,action){
	return table+"_"+action;
}

function brand_action(action="insert"){

	var data=[];
	data.push(["name", "1"]);
	data.push(["note", "0"]);


	var data_info={
		action: action,
		table: "brand",
		post_name: "brand_action",
		data: data,
		error_div: "modal_sm_error",
		url: url,
		ref: 1,
		div: "modal_sm_body"
	}

	store_data(data_info);

}

function unit_action(action="insert"){

	var data=[];
	data.push(["name", "1"]);
	data.push(["note", "0"]);


	var data_info={
		action: action,
		table: "unit",
		post_name: "unit_action",
		data: data,
		error_div: "modal_sm_error",
		url: url,
		ref: 1,
		div: "modal_sm_body"
	}

	store_data(data_info);


}

function category_action(action="insert"){

	var data=[];
	data.push(["name", "1"]);
	data.push(["note", "0"]);


	var data_info={
		action: action,
		table: "category",
		post_name: "category_action",
		data: data,
		error_div: "modal_sm_error",
		url: url,
		ref: 1,
		div: "modal_sm_body"
	}

	store_data(data_info);


}