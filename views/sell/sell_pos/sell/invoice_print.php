<?php

include "../../config/config.php";
include "../../script/sale_lib.php";
$sale=new sale();
$db=new database();
$uname=$sale->login_user();

function bangla_num($num){

   $len=sizeof($num);
   $st=array();
   $array=array_map('intval', str_split($num));
  for($i=0; $i<sizeof($array); $i++){
        if($array[$i]=='1')$n='১';
        else if($array[$i]=='2')$n='২'; 
        else if($array[$i]=='3')$n='৩'; 
        else if($array[$i]=='4')$n='৪'; 
        else if($array[$i]=='5')$n='৫'; 
        else if($array[$i]=='6')$n='৬'; 
        else if($array[$i]=='7')$n='৭'; 
        else if($array[$i]=='8')$n='৮'; 
        else if($array[$i]=='9')$n='৯'; 
        else if($array[$i]=='0')$n='০'; 
        array_push($st, $n);
  }
  $string = implode('',$st);
  return $string;
}






if($_GET['invoice_id']){

  $invoice_id=$_GET['invoice_id'];
  $sql="select * from invoice";
  $res=$db->select($sql);
  while($row=mysqli_fetch_array($res)){
         $invoice_id1=$row['invoice_id'];
         $sub_total=$row['sub_total'];
         $advance=$row['advanced'];
         $due=$row['due'];
         $cid=$row['cid'];
         $date=$row['date'];
         $cname=$row['cname'];
         if($invoice_id1==$invoice_id){
            break;
         }
  }
  if($cid!=0){
      $cname="hamza";
  }

  $sid=5;

?>

<center>
<div style="margin-top: 15px;"></div>
<div class="bg" style="width: 400px; border-width: 0px; border-style: dotted; padding: 2px;">

<div id="iv"><b>
  Alom Brother<br>
  Daulatpur,Baniachong,Habiganj<br>
  Mobile: 0154154<br></b>
</div>


<div id="dot">
  <script type="text/javascript">
    for(var i=0;i<25;i++)
    {
      document.write("<b>-</b>");
    }
    document.write("<b>RETAIL INVOICE</b>");
    for(var i=0;i<20;i++)
    {
      document.write("<b>-</b>");
    }

  </script>
  
</div>
<div id="possition_sidee" style="text-align: left; margin-left: 15px">
  Cashier : <?php echo "$uname"; ?><br>
 Invoice Number : <?php echo "$invoice_id"; ?> <br>
  Date : <?php echo "$date" ?><br>

</div>

<div id="dot">
  <script type="text/javascript">
    for(var i=0;i<25;i++)
    {
      document.write("<b>-</b>");
    }
    document.write("<b>Customer Info</b>");
    for(var i=0;i<25;i++)
    {
      document.write("<b>-</b>");
    }

  </script>
  
</div>
<div id="possition_sidee" style="text-align: left; margin-left: 15px">
  Customer Id : 01<br>
  Customer Name : thohidul Terminal<br>
  Village Name: 454<br/>
  Mobile: 0415<br>
</div>
<div id="dot">
<script type="text/javascript">
    for(var i=0;i<23;i++)
    {
      document.write("<b>-</b>");
    }
    document.write("<b>Product Summery</b>");
    for(var i=0;i<23;i++)
    {
      document.write("<b>-</b>");
    }

  </script>
  </div>
<style type="text/css">
  .invoice_table{
    padding-right: 30px;

  }
</style>


  <table border="0px" width="100%">
  <tr>
    <th class="invoice_table"><center>No</center></th>
    <th class="invoice_table"><center>Name</center></th>
    <th class="invoice_table"><center>Quntity</center></th>
    <th class="invoice_table"><center>Price</center></th>
  </tr>

  <?php
 
 $sql="select * from sale_product";
 $res=$db->select($sql);
  $i=0;
 while($row=mysqli_fetch_array($res)){
      
      $p_invoice=$row['invoice_id'];
      if($p_invoice==$invoice_id){
        $i++;
        $pid=$row['pid'];
        $qty=$row['qun'];
        $UnitPrice=$row['price'];
        $total=$row['total'];
        $pname=$sale->pname($pid);
        $pcode=$sale->product_varcode($pid);

 ?>      
  <tr>
    <td class="invoice_table"><center><?php echo bangla_num($i); ?></center></td>
    <td class="invoice_table"><center><?php echo "$pname"; ?></center></td>
    <td class="invoice_table"><center><?php echo bangla_num($qty); ?></center></td>
    <td class="invoice_table"><center><?php echo bangla_num($total); ?></center></td>
  </tr>
  
<?php } } ?>

<tr class="line">
  <td class="invoice_table"><center></center></td>
    <td class="invoice_table"><center></center></td>
    <td class="invoice_table"><center><b>Sub Total: </b></center></td>
    <td class="invoice_table"><center><b><?php echo bangla_num($sub_total); ?> taka</b></center></td>

</tr>

<tr>
  <td class="invoice_table"><center></center></td>
    <td class="invoice_table"><center></center></td>
    <td class="invoice_table"><center><b>Advanced: </b></center></td>
    <td class="invoice_table"><center><b><?php echo bangla_num($advance); ?> taka</b></center></td>

</tr>
<tr>
  <td class="invoice_table"><center></center></td>
    <td class="invoice_table"><center></center></td>
    <td class="invoice_table"><center><b>Due: </b></center></td>
    <td class="invoice_table"><center><b><?php echo bangla_num($due); ?> taka</b></center></td>

</tr>

</table>

<br>

<img src="http://localhost/oj/ims/barcode.php?text=<?php echo "$invoice_id" ?>" height="35px;">
<br/>



</div>


<style type="text/css">
    .line{
        border-top-width:  2px; 
        border-bottom-width:  0px;
        border-left-width:  0px;
        border-right-width: 0px;
        border-style: dotted;
        padding: 10px;
        margin-top: 10px;
        margin-left: 10px;
        margin-right: 20px;
        width: 100%;
    }
</style>

</div>


<center>
  <br/>
<button class="btn btn-success" onclick="print_page()" />Print </button>
</center>
<script type="text/javascript">
    window.print();
      function print_page(){
      window.print();
  }

</script>

<?php 
}
else{
  echo "Error";
}

?>


<style type="text/css">
 .bg {
    font-family: 'Arsenal', sans-serif; 
  background:#fff; 
  background: url(https://www.msoutlook.info/pictures/bgconfidential.png)repeat 0px 0px; 
    background-size: 20%;
    
}
</style>

</center>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>