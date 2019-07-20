
<style type="text/css">
  
body{
  background-color: #BABABA;
}

.select_header_invoice{
    height: 50px;
    margin-bottom: 7px;
    padding: 15px;
    padding-bottom: 15px;
    background-color: #45AD80;
  }

.invoice_filed{
 background-color: #BABABA;
 width: 104%;
  height: 100%;
  padding-top: 0px;

}


.td_product_list{
  background-color: #ffffff;
}

.select_customer{
  width: 90%;
  height: 30px;
}

.btn_sell{
  width: 100%; margin-right: -5px;
  padding: 10px;
  background-color: #10C47A; 
  border-width: 0px; 
  color: #ffffff;
  border-radius: 5px;
  font-weight: bold;
  font-size: 20px;

}

.customer_info{
  padding: 10px;
}

.message{
  padding: 5px;
}
.h_inv{
  width: 100%;
}
.h_inv_div{
  padding: 10px;
  border: 1px #ffffff solid;
  background-color: #000000;
  color: #ffffff;
  float: left;
}
.inv_des_div{
  padding: 8px;
  border: 1px #EFF0F1 solid;
  background-color: #ffffff;
  color: #000000;
  overflow: hidden;
  float: left;
}
.inv_des{
  height: 100%;
  background-color: #ffffff;
  overflow-y: scroll;
}
.h_inv::after {
  content: "";
  clear: both;
  display: table;
}
.hov_div{
  cursor: pointer;
  padding: 10px;
  font-size: 16px;
}
.hov_div:hover{
  background-color: #000000!important;
  color: red!important;
}
.inv_des_body::after {
  content: "";
  clear: both;
  display: table;
}
#inv_des::-webkit-scrollbar {
  width: 3px;
}

/* Track */
#inv_des::-webkit-scrollbar-track {
  background: #f1f1f1; 
}

/* Handle */
#inv_des::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
#inv_des::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>

<div style="margin-left: -15px;">

<div style="background-color: #192a56;">
 <div style="padding: 12px;color: #ffffff; font-size: 28px;">
    Alom Enterprice (Hamza05)  
</div>

</div>

<div style="height: 400px">
  <div class="h_inv">
    <div class="h_inv_div" style="width: 10%">#</div>
    <div class="h_inv_div" style="width: 30%">Name</div>
    <div class="h_inv_div" style="width: 17%">Unit</div>
    <div class="h_inv_div" style="width: 17%">Qun</div>
    <div class="h_inv_div" style="width: 17%">Total</div>
    <div class="h_inv_div" style="width: 9%">.</div>
  </div>
  <div id="inv_des" class="inv_des">
    <?php for($i=0; $i<5; $i++){ ?>
    <div class="inv_des_body">
      <div class="inv_des_div" style="width: 10%">#</div>
      <div class="inv_des_div" style="width: 30%">Name</div>
      <div class="inv_des_div" style="width: 17%">500 Pic.</div>
      <div class="inv_des_div" style="width: 17%">Qun</div>
      <div class="inv_des_div" style="width: 17%">Qun</div>
      <div class="inv_des_div hov_div" style="width: 9%">
        <span class="glyphicon">&#xe105;</span>
      </div>
      
    </div>
    <?php } ?>
  </div>
</div>

<div style="margin-top: 60px; width: 100%; height: 100px; background-color: #D1ECF5;">
<b>
  <div class="row">
    <div class="col-md-5">
     <div style="padding: 15px;">
        Total Product: 18<br/>
        Total Quantity: 170<br/>
        Total Price: 158
      </div>
    </div>
    <div class="col-md-7">
      <div style="padding: 15px;">
        <button class="btn_sell">Save Invoice</button>
      </div>
    </div>
  </div>
  

</b>

</div> 
</div>