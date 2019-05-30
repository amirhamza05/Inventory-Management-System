
<style type="text/css">
  
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
  height: 570px;
  padding-top: 0px;

}

tr {
width: auto;
width: 100%;
display: inline-table;
table-layout: fixed;
}
thead{
  width: 100%;
}

table{
 height:300px;
 width: 100%;              // <-- Select the height of the table
 display: -moz-groupbox;
 border-width: 0px;    // Firefox Bad Effect
}
tbody{
  overflow-y: scroll;      
  height: 300px;              
  <-- Select the height of the body
  width: 100%;
  position: absolute;
}

.select_customer{
  width: 90%;
  height: 30px;
}

.btn_left{
  width: 100%; margin-right: -5px;
  padding: 8px;
  background-color: #dd2c00; 
  border-width: 0px; 
  color: #ffffff;
  font-weight: bold;

}
.btn_right{
     width: 50%
     
}

.customer_info{
  padding: 10px;
}

.message{
  padding: 5px;
}

</style>



<div style="background-color: #45AD80; padding-top: 10px;">
 <div style="padding: 5px;">
    <center>
   <select class="select_customer">
    <option>Select Customer</option>
   	<option>KG</option>
   	<option>Pices</option>
   </select>
 </center>
   </div>




   <div class="customer_info">
     <input type="" name="" placeholder="Customer Name" style="padding: 4px; width: 49%">
     <input type="" name="" placeholder="Mobile Number" style="padding: 4px; width: 49%">
   </div>


<div class="message">
  <center>
    <div class="loader_msg"></div>
  </center>
</div>

</div>
   <table class="table table-bordered" id="table_id">
   <thead style="background-color: #45AD80; color: #ffffff; width: 100%">
          <tr>
            <th class="text-center" style="width: 7%"> #</th>
            <th class="text-center" style="width: 20%"> Product</th>
            <th class="text-center" style="width: 15%"> Unit</th>
            <th class="text-center" style="width: 15%"> Price </th>
            <th class="text-center" style="width: 15%">Qun </th>
            <th class="text-center" style="width: 15%"> Total </th>
            
          </tr>
        </thead>
        <tbody id="t_body" style="background-color: #BDC8C4">
            
         <?php for($i=1; $i<3; $i++){ ?>
             <tr onclick="" style="cursor: pointer; padding: 5px;">
              <td style="width: 7%"><center><?php echo "$i"; ?></center></td> 
             	<td style="width: 20%"><center>Anc psdaf</center></td>
             	<td style="width: 15%"><center>
             		KG
             	</center></td>
             	<td style="width: 15%"><center>400</center></td>
             	<td style="width: 15%"><center>400</center></td>
             	<td style="width: 15%"><center>400</center></td>
             	       	
             </tr>
<?php } ?>
        </tbody>
    </table>

<div style="margin-top: 40px; width: 100%">


<div style="background-color: #560027; color: #ffffff;  text-orientation: upright; text-align: right; padding: 5px">
<b>

<table style="height: 15px;">
  <thead>
  <tr>
    <th>Total Product: 15</th>
    <th></th>
    <th>Sub Total: 17</th>
  </tr>
  
  </thead>
 

</table>

  </b>
</div>
	
<button class="btn_left" style="">Save Invoice</button>
</div> 