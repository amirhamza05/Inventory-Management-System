 

//start save ajax script
function save() {
  invoice_sucess();
    cid = cid_funtion();
    date=document.getElementById("date").value;
    advanced=document.getElementById("advanced").value;
    due=document.getElementById("due").value;
    
    if(cid==0){
    cname=document.getElementById("cname").value;
     }
     else{
    cname="";
    }

    var product_code = [],
        qun = [],
        total = [],
        price = [];

    var c = 0;
    var table = document.getElementById("table_id");

    var n_price=5;
    var n_qun=4;
    var n_pid=3;
    var n_total=6;
    var n_delete=7;

    for (var i = 1; i < table.rows.length; i++) {

        var price1 = table.rows[i].cells[n_price].firstChild.value;
        var qty = table.rows[i].cells[n_qun].firstChild.value;
        var total1 = table.rows[i].cells[n_total].firstChild.value;
        var code = table.rows[i].cells[n_pid].firstChild.value;

        product_code[c] = code;
        qun[c] = qty;
        total[c] = total1;
        price[c] = price1;
        c++;
    }

len=table.rows.length;

   if(len==1){
    alert("Please Select Any Product");
   }
else if(advanced==''){
  alert("fill advanced");
    //tbl_refresh(cid);
}
else{
    
    sub_total=document.getElementById("sub_total").value;
    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            save_product_code:  product_code,
            save_product_qun:   qun,
            save_product_total: total,
            save_product_price: price,
            save_product_cid:   cid,
            save_product_cname: cname,
            save_product_date:  date,
            save_product_advanced: advanced,
            save_product_due: due,
            save_product_sub_total: sub_total

        },

        success: function(response) {
           // alert("Yay!");
            document.getElementById("sub_total").value="";
            close_loader();
            invoice_sucess();
            document.getElementById("printableArea").innerHTML=response;
            clear_advanced_due();
            invoice_id();
            tbl_refresh(cid);

        }
    });


}

}

//end save ajax script


function invoice_sucess(){

    document.getElementById("invoice").innerHTML="";

}

function invoice_id(){

 $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            invoice_div_id: 1
        },
        success: function(response) {
            //alert("Yay!");
            document.getElementById("invoice_div_id").innerHTML = response;
        }
    });

}


function select_brand(sel) {

    bid = sel.options[sel.selectedIndex].value;
    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            select_brand_id: bid
        },
        success: function(response) {
            //alert("Yay!");
            document.getElementById("select_product").innerHTML = response;
        }
    });
}

function select_product(sel) {

    pid = sel.options[sel.selectedIndex].value;

    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            select_product_id: pid
        },

        success: function(response) {
            //alert("Yay!");
            product_price(pid);
            product_code(pid);
            product_unit(pid);
        }
    });

}

function product_code(pid) {

    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            product_code_pid: pid
        },

        success: function(response) {
            //alert("yah");
            document.getElementById("product_code_div").innerHTML = response;
        }
    });
}

function product_unit(pid){
    document.getElementById("select_unit").innerHTML = "<option>Hamza<option>";
}


function product_price(pid) {

    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            product_price_pid: pid
        },

        success: function(response) {
            //alert("yah");
            document.getElementById("product_price_div").innerHTML = response;
        }
    });


}


function cid_val(sel) {
    //alert(sel.options[sel.selectedIndex].value);
    cid_funtion();
    cid = sel.options[sel.selectedIndex].value;

    if (cid == 0) {

        document.getElementById("customer_info_div").innerHTML = "<input type='text' id='cname' placeholder='Customer Name' class='form-control' />";
    } else {
        user_info(cid);
    }
    ref_add_msg();
    tbl_refresh(cid);

}


function cid_funtion() {

    var sel = document.getElementById('cid_select');
    var opt = sel.options[sel.selectedIndex];
    var cid = opt.value;

    return cid;
}

function customer() {
    //alert("customer");
document.getElementById("advanced").value="";
document.getElementById("due").value="";
    cid = cid_funtion();
    ref_add_msg();
    tbl_refresh(cid);
    
}

function pro() {
    pid = document.getElementById("product_code").value;
    cid = cid_funtion();
    product_code_press(pid);

}

function product_code_press(pid) {
    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            product_code_change: pid
        },

        success: function(response) {
            //alert("yah");
            document.getElementById("product_price_div").innerHTML = response;
        }
    });

}


function add_clear() {
    document.getElementById("product_code").value = "";
    document.getElementById("qun").value = "";
    document.getElementById("price").value = "";
    document.getElementById("pcode_valid").innerHTML = "";
    var brand = document.getElementById("brand");
    brand.options[brand.options.selectedIndex].selected = false;
    document.getElementById('select_product').innerHTML = "<option style='display: none'>Select Product</option>";

}

function add_msg(cid,pid){
   
$.ajax({
            type: 'POST',
            url: 'page/sell/sale_action.php',
            data: {
                add_msg_cid: cid,
                add_msg_pid: pid
            },

            success: function(response) {
               document.getElementById("add_msg").innerHTML=response;
            }
        });

}

function ref_add_msg(){
    document.getElementById("add_msg").innerHTML="";
}

function add_btn() {


    cid = cid_funtion();
    pid = document.getElementById("product_code").value;
    qun = document.getElementById("qun").value;
    price = document.getElementById("price").value;

    if (cid == '-1') {
        alert("Select Customer");
    } else if (pid == '') {
        alert("Input Product Code");
    } else if (price == '') {
        alert("Input Product Price");
    }
    else if (qun == '') {
        alert("Input Quantity");
    } 
     else {

              add_msg(cid,pid);

        $.ajax({
            type: 'POST',
            url: 'page/sell/sale_action.php',
            data: {
                insert_pro: pid,
                insert_pro_cid: cid,
                insert_pro_qun: qun,
                insert_pro_price: price
            },
            beforeSend: function() {
               loader();
            },

            success: function(response) {
                tbl_refresh(cid);
                add_clear();

               close_loader();
                
            }
        });

    }
}


function qun() {

}



function tbl_refresh(cid) {
    //alert(cid);
    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            tbl_ref: cid
        },

    beforeSend: function() {
          loader();
        },

        success: function(response) {
            //alert("Yay!");

            document.getElementById("t_body").innerHTML = response;

            tbl_getvalue();
            sub_total2(cid);
            close_loader();      
            
        }
    });
}



function loader(){
    document.getElementById("looding").innerHTML="<div class='loader'></div>";
}
function close_loader(){
    document.getElementById("looding").innerHTML="";
}

function sell() {

    var x = document.getElementById("table_id").rows.length;
    print(cid);
}


function print_option(cid) {

    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            print: cid
        },
        success: function(response) {
            //alert("Yay!");
            document.getElementById("print").innerHTML = response;
        }
    });

}


function advanced_due() {

    //alert("hey");
    var total = document.getElementById("sub_total").value;
    var advanced = document.getElementById("advanced").value;
    //alert(total);
    var due = total - advanced;
    document.getElementById("due").value = parseFloat(due);
}


function clear_advanced_due(){
     document.getElementById("advanced").value="";
     document.getElementById("due").value ="";
}

function tbl_getvalue() {
    var table = document.getElementById("table_id");

    // table rows
    var n_price=5;
    var n_qun=4;
    var n_pid=3;
    var n_total=6;
    var n_delete=7;

    for (var i = 0; i < table.rows.length; i++) {

        //when update price in table row
        table.rows[i].cells[n_price].onchange = function() {
            index = this.parentElement.rowIndex;
            cid = cid_funtion();
            price = table.rows[index].cells[n_price].getElementsByTagName('input')[0].value;
            qun = table.rows[index].cells[n_qun].getElementsByTagName('input')[0].value;
            pid = table.rows[index].cells[n_pid].getElementsByTagName('input')[0].value;
            price_update(cid, pid, price, qun);
        }


//when update qun in table row
        table.rows[i].cells[n_qun].onchange = function() {
            index = this.parentElement.rowIndex;
            cid = cid_funtion();
            price = table.rows[index].cells[n_price].getElementsByTagName('input')[0].value;
            qun = table.rows[index].cells[n_qun].getElementsByTagName('input')[0].value;
            pid = table.rows[index].cells[n_pid].getElementsByTagName('input')[0].value;
            qun_update(cid, pid, price, qun);
        }


//update total in table row
        table.rows[i].cells[n_total].onchange = function() {
            index = this.parentElement.rowIndex;
            cid = cid_funtion();
            total = table.rows[index].cells[n_total].getElementsByTagName('input')[0].value;
            pid = table.rows[index].cells[n_pid].getElementsByTagName('input')[0].value;

            total_pro_update(cid, total, pid)
        }

//press delete button in table row
        table.rows[i].cells[n_delete].onclick = function() {
            index = this.parentElement.rowIndex;
            cid = cid_funtion();
            pid = table.rows[index].cells[n_pid].getElementsByTagName('input')[0].value;
            pro_delete(cid, pid);
        }
//end table row delete

    }
    //end loop
}


function price_update(cid, pid, price, qun) {
    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            update_price: price,
            update_price_cid: cid,
            update_price_pid: pid,
            update_price_qun: qun
        },
        success: function(response) {
            //alert("Yay!");
            tbl_refresh(cid);

        }
    });
}



function qun_update(cid, pid, price, qun) {
    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            update_qun: qun,
            update_qun_cid: cid,
            update_qun_pid: pid,
            update_qun_price: price
        },
        success: function(response) {
            //alert("Yay!");
            tbl_refresh(cid);
        }
    });
}



function total_pro_update(cid, total, pid) {
    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            update_pro_total: total,
            update_pro_total_cid: cid,
            update_pro_total_pid: pid

        },

        success: function(response) {
            //alert("Yay!");
            tbl_refresh(cid);

        }
    });
}


function pro_delete(cid, pid) {
    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            pro_delete: pid,
            pro_delete_cid: cid

        },

        success: function(response) {
            //alert("Yay!");
            tbl_refresh(cid);

        }
    });
}



function sub_total2(cid){

    var table = document.getElementById("table_id");

    var n_total=6;
    var index;
    var sum=0;
    var rCount = table.rows.length;
    advanced=document.getElementById("advanced").value;
    
//alert(table.rows[rCount - 1].cells[n_total].getElementsByTagName("input")[0].value);
//alert(table.rows.length);
    for (var i = 1; i < table.rows.length; i++) {
       total=table.rows[i].cells[n_total].getElementsByTagName("input")[0].value;
       sum+=parseFloat(total);
    }
          
document.getElementById("sub_total").value=sum;
document.getElementById("due").value=sum-advanced;
}

function user_info(cid) {


    $.ajax({
        type: 'POST',
        url: 'page/sell/sale_action.php',
        data: {
            user_info: cid

        },

        success: function(response) {
            //alert("Yay!");

            document.getElementById("customer_info_div").innerHTML = response;
            document.getElementById("advanced").value="";
            document.getElementById("due").value="";
        }
    });


}