function fun() {
	search_barcode();
		//document.getElementById("product_list").innerHTML = "hey";
}
 
$url1="page/sell/js_script/sell_action.php";

function search_barcode(){

    barcode = document.getElementById("search_barcode").value;
 $.ajax({
        type: 'POST',
        url: "sell_action.php",
        data: {
            barcode: barcode
        },
        success: function(response) {
            //alert("Yay!");
            document.getElementById("product_list").innerHTML = response;
        }
    }); 


}

function select_category(hey){

	alert("hey");
}

function get_radio_val(pid){
     radio_id="radio_"+pid;
    var rates = document.getElementsByName(radio_id);
    var rate_value=0;
    for(var i = 0; i < rates.length; i++){
        if(rates[i].checked){
            rate_value = rates[i].value;
        }
    }
return rate_value;
}

function get_unit_qun(unit_id){
    st="qun_unit_"+unit_id;
    return document.getElementById(st).value;
}

function add_invoice(pid){
    
    id="qun_"+pid;
    rate_value=get_radio_val(pid);
    qun=document.getElementById("qun").value;
    unit_qun=get_unit_qun(rate_value);



    if(rate_value==""){
        alert("Select Any Quntity");
       return;
    }
    else if(qun==0){
        alert("Your Quntity Box Is Empty");
       return;
    }
    
    
    unit_qun=parseInt(unit_qun);
    qun=parseInt(qun);

    if(unit_qun<qun){
        alert("সম্প্রতি মধ্যপ্রদেশ");
        return;
    }
    //if(rate_value!=0) alert(rate_value);
    //else alert("Plese select any Unit");
    $.ajax({
        type: 'POST',
        url: "sell_action.php",
        data: {
            add_invoice: pid,
            unit_id: rate_value,
            unit_qun: qun
        },
        success: function(response) {
            //alert("Yay!");
            document.getElementById("t_body").innerHTML = response;
        }
    }); 
}
function add_invoice_page(pid){
    //alert(pid);
    $.ajax({
        type: 'POST',
        url: "sell_action.php",
        data: {
            add_invoice_page: pid
        },
        success: function(response) {
            //alert("Yay!");
            document.getElementById("add_invoice_body").innerHTML = response;
        }
    }); 
}