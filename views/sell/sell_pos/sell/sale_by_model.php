


<?php
$date1=date('Y-m-d');
$date2=date('H:i');
$date = $date1."T".$date2;
 

?>
<script>
function myFunction() {
    location.reload();
}


</script>

<style media="print" type="text/css">


@media print
{
body * { visibility: hidden; }
#printableArea * { visibility: visible; }
#printableArea { position: absolute; top: 40px; left: 30px; }

}

@media print {  
  @page {

    size: auto;
    padding: 50mm; /* landscape */
    /* you can also specify margins here: */
      margin: 0mm; /* for compatibility with both A4 and Letter */
  }
}
</style>

<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<div style="display: none;"></div>

<?php 
 
include "include/style.php";
 include "script/sale_lib.php";
 
  $sale=new sale();
  $invoice_id=$sale->sale_id();

 ?>


<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


<style type="text/css">
  @import url(http://fonts.googleapis.com/css?family=Roboto:400);

.wrapper {
    background-color: #45AD80
}

h4 {
    text-align: center;
    padding-top: 15px;
    padding-bottom: 15px;
    color: #ffffff;
}

.wrapper1 {
    
    background-color: #45AD80;
}

.col-md-1 {
    color: #45AD80;
    padding-top: 12.5px;
}

.well {
    border-color:#d2d2d2;
    box-shadow:0 1px 0 #cfcfcf;
    border-radius:3px;
}
</style>



<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



<div id="printableArea"></div>

<div id="invoice">

</div>
<div>
<div style="background-color:; padding: 0px; margin-left: 0px;margin-right: 0px;" id="">

<!-- start heaer menu -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-0 col-md-4 col-sm-4">

            <img src="http://localhost/oj/ims/upload/logo/logo1.png" height="50px" height="50px">
          <div class="col-md-offset-2">
              <address>
                <strong>Iron Admin, Inc.</strong>
                <br>795 Freedom Ave, Suite 600
                <br>New York, CA 94107
                <br>Phone: 1 (804) 123-9876
                 <br>Email: ironadmin.com
              </address> 
          </div>

        </div>


        <div class="col-md-5 col-sm-5">
            <div class="wrapper1">
            <span class="group1">     
                <h4><i class="fa fa-user"></i> Customer</h4>
            </span>
            </div>
         <div class="well">

          <select class="form-control input-md" id="cid_select" onChange="cid_val(this);">
                    <option style="display: none;" value="-1">Select Customer</option>
                    <option value="0">Normal Customer</option>

<?php $pro->customer_list(); ?>
</select>
                <br />
<div id="customer_info_div">


</div>
          

         
         </div>
        </div>

        <div class="col-md-3 col-sm-3">
            <div class="wrapper1">
            <span class="group1">     
                <h4><i class="fa fa-user"></i> Invoice Detail</h4>
            </span>
            </div>
         <div class="well">
          <b>Invoice No: <p id="invoice_div_id"><?php echo "$invoice_id"; ?></p></b>
                        
                          <b>Date:</b>
                          
        <input type="datetime-local" value="<?php echo "$date"; ?>" id="date" name="">
                                 </div>
        </div>
        
    </div>
</div>



<!-- startig add product -->
<div style="margin-top: 15px; margin-bottom: 15px;  background-color: #E26A6A; padding: 15px">
<div class="container" >

     <div class="col-md-2 col-sm-2">
      <div style="color: #ffffff;"><center><b>Select Brand</b></center></div>
      <select class="form-control input-md" onChange="select_brand(this);" id="brand">
        <option style="">Select Brand</option>
            <?php $pro->brand_list(); ?>
        </select>
    </div>

    <div class="col-md-2 col-sm-2" >
      <div style="color: #ffffff;"><center><b>Select Product</b></center></div>
      <select class="form-control input-md" id="select_product" onChange="select_product(this);">
            <option style="">Select Product</option>
            
        </select>
    </div>

  <div class="col-md-2 col-sm-2" >
    <div style="color: #ffffff;"><center><b>Product Code</b></center></div>
    <div id="product_code_div">
        <input type="text" class="form-control input-md" onchange="pro()" name="product" placeholder="product Code" id="product_code">
      <div id="pcode_valid"></div>
      </div>
  </div>

<div class="col-md-2 col-sm-2" >
      <div style="color: #ffffff;"><center><b>Select Unit</b></center></div>
      <select class="form-control input-md" id="select_unit" onChange="select_unit(this);">
        </select>
    </div>

  <div class="col-md-2 col-sm-2" id="">
    <div style="color: #ffffff;"><center><b>Product Price</b></center></div>
    <div id="product_price_div">
      <input type="number" class="form-control input-md" onchange="price()" name="price" placeholder="Price" id="price">
    </div>
  </div>

  <div class="col-md-2 col-sm-2">
    <div style="color: #ffffff;"><center><b>Quantity</b></center></div>
      <input type="number" class="form-control input-md" onchange="qun()" name="qun" placeholder="Quantity" id="qun">
  </div>

</div>
<center>
  
    <br/>
    <input type="submit" value="Add Product" onclick="add_btn()" style="padding: 5px; width: 200px; background-color: #45AD80; border-radius: 4px;  font-weight: bold; " name="add" id="pro_add" class="btn btn-success">
  
</center>

</div>


<center><div id="add_msg"></div>
<div style="margin-bottom: 25px" id="looding"></div>
<style type="text/css">
 .loader,
.loader:before,
.loader:after {
  background: #D32831;
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: 1em;
  height: 3em;
}
.loader {
  color: #D32831;
  text-indent: -9999em;
  margin: 0px auto;
  position: relative;
  font-size: 10px;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}
.loader:before,
.loader:after {
  position: absolute;
  top: 0;
  content: '';
}
.loader:before {
  left: -1.5em;
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.loader:after {
  left: 1.5em;
}
@-webkit-keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em;
    height: 5em;
  }
}
@keyframes load1 {
  0%,
  80%,
  100% {
    box-shadow: 0 0;
    height: 4em;
  }
  40% {
    box-shadow: 0 -2em;
    height: 5em;
  }
}
</style>

</center>

<!-- end add product menu -->

<style type="text/css">
  
  .table_hover{
    color: #000000;
  }

</style>


    <div class="container">
  <div class="row clearfix">
    <div class="col-md-12 col-sm-12">
      <table class="table table-bordered" id="table_id">
        <thead style="background-color: #45AD80; color: #ffffff">
          <tr>
            <th class="text-center"> # </th>
            <th class="text-center"> Product Image </th>
            <th class="text-center"> Product Name</th>
            <th class="text-center"> Product Code</th>
            <th class="text-center"> Qty </th>
            <th class="text-center">Unit Price </th>
            <th class="text-center"> Total </th>
            <th class="text-center">  </th>
          </tr>
        </thead>
        <tbody id="t_body" style="background-color: #BDC8C4">
        
          
        </tbody>
      </table>
    </div>
  </div>
  

<style type="text/css">
  .text-center{
    
  }
</style>
  <div class="row clearfix" style="margin-top:20px">
    <div class="pull-right col-md-5 col-sm-5">
      <table class="table table-bordered" style="padding: 50px" id="tab_logic_total">
        <tbody>
          <tr>

            <th class="text-center" style="background-color: #45AD80; color: #ffffff">Sub Total</th>
        
            <td id="sub_total_area" style="background-color: #45AD80; color: #ffffff" class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" /></td>

          </tr>
          
          <tr>
            <th class="text-center" style="background-color: #45AD80; color: #ffffff">Advanced</th>
            <td class="text-center" style="background-color: #45AD80; color: #ffffff"><input type="number" name='advanced'  id="advanced" onclick="advanced_due(this)" onchange="advanced_due(this)" placeholder='0.00' class="form-control" /></td>
          </tr>
          <tr>
            <th class="text-center" style="background-color: #45AD80; color: #ffffff">Due</th>
            <td class="text-center" style="background-color: #45AD80; color: #ffffff"><input type="number" name='due' id="due" readonly="" placeholder='0.00' class="form-control" /></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<div class="container">
<div style="margin-bottom: 50px;">
<div class="col-md-5 col-sm-5"></div>
<center><input type="submit" onclick="save()" class="col-md-2 col-sm-2" style="padding: 12px; background-color: #D24D57; color: #ffffff; border-width: 0px;" value="Save Invoice" name="save" id="save"></center>
<div class="col-md-5 col-sm-5"></div>
</div>
</div>


<div id="arr_res"></div>
</div>
</div>




