
url = "page_view_action.php";
modal_body = "modal_sm_body";
modal = "sm"; 

function get_action_data(_div = modal_body, _load = 0, _url = url) {
    var data = {
        'url': _url,
        'div': _div,
        'load': 0
    }
    return data;
}

function form_view(table,operation,id=0){

	var post_name=table+"_action_form";
	modal_action("sm",post_name);

	action_id=id;
	var data1={};
	data1["action"]=operation;
	data1["id"]=id;

	var data={};
	data[post_name]=data1;

	loader(modal_body);
	get_ajax(get_action_data(),data);
}

function get_table_info(table){

	var info=[];

	if(table=="brand"){
		info.push(["label", "value"]);
		info.push(["label1", "value1"]);
	}

	return info;
}

