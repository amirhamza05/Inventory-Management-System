

function update_info_form(){
    modal_action("sm", "Payment");
    loader("modal_sm_body");
    get_page("modal_sm_body","get_product_update_form");
}

function update_product_info(){
  
  var data=[];
  data.push(["name", "1"]);
  data.push(["brand_id", "1"]);
  data.push(["category_id", "1"]);
  data.push(["description", "0"]);

  action_id=product_id;

  var data_info={
    action: "update",
    table: "product",
    post_name: "update_product_info",
    data: data,
    error_div: "modal_sm_error",
    url: url,
    ref: 0,
    div: "modal_sm_msg"
  }

  $.when(store_data(data_info)).then(
      setTimeout(function(){ get_product_info(); }, 500)
  );




}