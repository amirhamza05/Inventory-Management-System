var product_id;
var url="";
var action_div="";
var modal_div="";

url = "product_profile_action.php";
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

function product_page_load(pid){
	product_id=pid;
	get_product_info();
}


function get_product_info(){
	get_page("panel_profile_body","get_product_info");
}

function get_product_unit(){
	get_page("panel_profile_body","get_product_unit");
}

function get_stock_info(){
	get_page("panel_profile_body","get_stock_info");
}

function get_sell_info(){
	get_page("panel_profile_body","get_stock_info");
}

 

function get_page(div_name,post_name){
	loader(div_name);
	var data={};
	data[post_name]=product_id;
	get_ajax(get_action_data(div_name),data);
}
