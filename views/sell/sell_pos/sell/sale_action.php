<?php

  include "../../include/class_lib.php";
   
function id_find($pid,$cid){

$ans=0;
     $sql="select * from sell_test";
    $res=$db->select($sql);
    while ($row=mysqli_fetch_array($res)) {
        $id=$row['id'];
        $cid1=$row['cid'];
        $pid1=$row['product_id'];
        if($pid1==$pid && $cid1==$cid){
          $ans=$id;
          
          break;
        }
    }
return $ans;
}


if(isset($_POST['code'])){

$name=$_POST['code'];

$sql="INSERT INTO village (vname) VALUES ('$name')";
$res=$db->select($sql);
if($res){
	echo "sucessfull insert<br/>";
  $sql1="select * from village";
  $res1=$db->select($sql1);
  while ($row=mysqli_fetch_array($res1)) {
  	   $name=$row['vname'];
  	   echo "$name<br/>";
  }

}
else {
	echo "failed";
}


exit();
}

if(isset($_POST['invoice_div_id'])){

  $id=$sale->sale_id();
  echo "$id";

}


if(isset($_POST['tbl_ref'])){
   $cid=$_POST['tbl_ref'];

  $sql="select * from sell_test ORDER BY id ASC";
  $res=$db->select($sql);
  $c=0;
  while($row=mysqli_fetch_array($res)){
    $cid1=$row['cid'];
    $pcode=$row['product_id'];
    $pname=$sale->pcode_to_pname($pcode);
    $image=$sale->pcode_to_image($pcode);
    $image="upload/product/".$image;
    $qun=$row['qun'];
    $price=$row['price'];
    $total=$row['total'];
    if($cid1==$cid){
      $c++;
      ?>


      <tr>         <td><?php echo "$c"; ?></td>
        <td><center><img src="<?php echo "$image"; ?>" height="40px" width="60px"></center></td>
         <td><center><?php echo "$pname"; ?></center></td>
<td><input type="text" name='product[]'  placeholder='Enter Product Name' style="display: none;" value="<?php echo "$pcode"; ?>" class="form-control" id="product" readonly/>
<center><img  src="barcode.php?text=<?php echo "$pcode"; ?>"><br/><?php echo "$pcode"; ?></center>
</td>
                  
                   
                    
                    <td><input type="number" name='qty[]' placeholder='Enter Qty' class="form-control qty" value="<?php echo "$qun"; ?>" step="0" min="0"/></td>
                    <td><input type="number" name='price[]' placeholder='Enter Price' class="form-control qty" value="<?php echo "$price"; ?>" step="0" min="0"/></td>
              <td><input type="number" name='total[]' placeholder='Enter Total' class="form-control total" value="<?php echo "$total"; ?>" step="0" min="0"/></td>

                    <td class="text-right"><input type="submit" value="Delete" class="btn btn-danger btn-xs" name=""></td>
                  </tr>
<?php

}

 }
 exit();
  }

  if(isset($_POST['insert_pro'])){
      $pid=$_POST['insert_pro'];
      $cid=$_POST['insert_pro_cid'];
      $qun=$_POST['insert_pro_qun'];
      $price=$_POST['insert_pro_price'];
      $total=$price*$qun;
      $found=0;
      $valid=$pro->product_code_valid($pid);
    $sql="select * from sell_test";
    $res=$db->select($sql);
    while ($row=mysqli_fetch_array($res)) {
        $id=$row['id'];
        $pid1=$row['product_id'];
        $cid1=$row['cid'];
        $qun1=$row['qun'];
        if($pid1==$pid && $cid1==$cid){
          $qun=$qun1+$qun;
         // $sql1="UPDATE sell_test SET qun='$qun' WHERE id=$id";
          //$res1=$db->select($sql1);
          $found=1;
          break;
        }
    }

  if($found==0 && $valid==1){
             
      $sql="INSERT INTO sell_test (product_id,cid,price,qun,total) VALUES ('$pid','$cid','$price','$qun','$total')";
      $res=$db->select($sql);
  }
  exit();

}

if(isset($_POST['print'])){

   $cid=$_POST['print'];

  $sql="select * from sell_test";
  $res=$db->select($sql);
  echo "<table border='1' cellpadding='2'>
    <tr>
      <th>Name </th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
    <tbody>";
  while($row=mysqli_fetch_array($res)){
    $cid1=$row['cid'];
    $pid=$row['product_id'];
    $qun=$row['qun'];
    if($cid1==$cid)echo "<tr><td>$pid</td><td>550tk</td><td>$qun</td></tr>";
 }
echo "</tbody></table><button>Print</button>";

}

if(isset($_POST['update_price'])){

   $cid=$_POST['update_price_cid'];
   $pid=$_POST['update_price_pid'];
   $price=$_POST['update_price'];
   $qun=$_POST['update_price_qun'];
   $total=$price*$qun;


    $sql="select * from sell_test";
    $res=$db->select($sql);
    while ($row=mysqli_fetch_array($res)) {
        $id=$row['id'];
        $cid1=$row['cid'];
        $pid1=$row['product_id'];
        if($pid1==$pid && $cid1==$cid){
          $sql1="UPDATE sell_test SET price='$price',total='$total' WHERE id=$id";
          $res1=$db->select($sql1);
          break;
        }
    }

}

if(isset($_POST['update_qun'])){

   $cid=$_POST['update_qun_cid'];
   $pid=$_POST['update_qun_pid'];
   $qun=$_POST['update_qun'];
   $price=$_POST['update_qun_price'];
   $total=$price*$qun;

    $sql="select * from sell_test";
    $res=$db->select($sql);
    while ($row=mysqli_fetch_array($res)) {
        $id=$row['id'];
        $cid1=$row['cid'];
        $pid1=$row['product_id'];
        if($pid1==$pid && $cid1==$cid){
          $sql1="UPDATE sell_test SET qun='$qun',total='$total' WHERE id=$id";
          $res1=$db->select($sql1);
          break;
        }
    }
}

if(isset($_POST['update_pro_total'])){

   $cid=$_POST['update_pro_total_cid'];
   $pid=$_POST['update_pro_total_pid'];
   $total=$_POST['update_pro_total'];
   
    $sql="select * from sell_test";
    $res=$db->select($sql);
    while ($row=mysqli_fetch_array($res)) {
        $id=$row['id'];
        $cid1=$row['cid'];
        $pid1=$row['product_id'];
        if($pid1==$pid && $cid1==$cid){
          $sql1="UPDATE sell_test SET total='$total' WHERE id=$id";
          $res1=$db->select($sql1);
          break;
        }
    }

}


if(isset($_POST['pro_delete'])){

   $cid=$_POST['pro_delete_cid'];
   $pid=$_POST['pro_delete'];

    $sql="select * from sell_test";
    $res=$db->select($sql);
    while ($row=mysqli_fetch_array($res)) {
        $id=$row['id'];
        $cid1=$row['cid'];
        $pid1=$row['product_id'];
        if($pid1==$pid && $cid1==$cid){
          $sql1="DELETE FROM sell_test WHERE id = $id";
          echo "<script>alert('sucess')</script>";
          $res1=$db->select($sql1);
          break;
        }
    }

}

if(isset($_POST['sub_total_area'])){

    $cid=$_POST['sub_total_area'];
    $sql="select * from sell_test";
    $res=$db->select($sql);
    $sum=0;
    while ($row=mysqli_fetch_array($res)) {
       $cid1=$row['cid'];
       $total=$row['total'];
       if($cid==$cid1){
        $sum+=$total;
       }
    }

echo "<input type='number' name='sub_total' placeholder='0.00' class='form-control' value='$sum' id='sub_total' />";

}


if(isset($_POST['user_info'])){
$cid=$_POST['user_info'];
$sql="select * from customer";
$res=$sale->select($sql);
while($row=mysqli_fetch_array($res)){
  $cname=$row['cname'];
  $cid1=$row['cid'];
  $photo=$row['photo'];
  $father=$row['cfather'];
  $phone=$row['phone'];
  $path="page/customer/image/";
  $photo="$path$photo";
if($cid==$cid1){

  ?>
 <div class="row">
        <div class="col-sm-12 col-md-12">
          
          <div class="col-md-1"></div>
          <div class="col-sm-6 col-md-6">
            
            <?php echo "Name: <b>$cname</b><br/>Address: Daulatpur Borobari <br>Phone: 0$phone"; ?>
          </div>
          <div class="col-md-4"><img src="<?php echo "$photo"; ?>" height="60px" width="60px"></div>
          <div class="col-md-1"></div>
        </div>
    </div>

  <?php
break;
} //end if statment
}//end while loop



}


if(isset($_POST['select_brand_id'])){
   $bid=$_POST['select_brand_id'];
   $pro->product_list($bid);
}

if(isset($_POST['product_price_pid'])){

$pid=$_POST['product_price_pid'];
$price=$pro->product_price($pid);

echo "<input type='number' class='form-control input-md' onchange='price()' name='price' placeholder='Price' value='$price' id='price'>";

}

if(isset($_POST['product_code_pid'])){

$pid=$_POST['product_code_pid'];
$code=$pro->product_code($pid);


echo "<input type='text' class='form-control input-md'  name='product' placeholder='product Code' value='$code' id='product_code' onchange='pro()' ><center><div id='pcode_valid' style='margin-top:5px'><img src='barcode.php?text=$code' /><br/><font color='#fffff'></font></center></div>";

}


if(isset($_POST['product_code_change'])){

  $pcode=$_POST['product_code_change'];
$price=$pro->p_code_to_price($pcode);
if($price!=-1){
echo "<input type='number' class='form-control input-md' onchange='price()' name='price' placeholder='Price' value='$price' id='price'>";
}
else{
  echo "<input type='number' class='form-control input-md' onchange='price()' name='price' placeholder='Code Is not valid' readonly value='' id='price'>";
}

}

//product save script start

if(isset($_POST['save_product_code'])){

  $pcode=$_POST['save_product_code'];
  $price=$_POST['save_product_price'];
  $qun=$_POST['save_product_qun'];
  $total=$_POST['save_product_total'];
  $sub_total=$_POST['save_product_sub_total'];
  $date=$_POST['save_product_date'];
  $cname=$_POST['save_product_cname'];
  $advanced=$_POST['save_product_advanced'];
  $due=$_POST['save_product_due'];
  $cid=$_POST['save_product_cid'];
  
  $invoice_id=$sale->sale_id();
  $sale_by=5;
//echo "$sale_id<br/>";
  
  for($i=0; $i<sizeof($pcode); $i++){
    
     $pid=$sale->pcode_to_pid($pcode[$i]);
      $sql="INSERT INTO sale_product (invoice_id,pid,price,qun,total) VALUES ('$invoice_id','$pid','$price[$i]','$qun[$i]','$total[$i]')";
      
       $res=$db->select($sql);
      
  }

$sql="INSERT INTO invoice (invoice_id,cid,cname,sub_total,advanced,due,date,sale_by) VALUES ('$invoice_id','$cid','$cname','$sub_total','$advanced','$due','$date','$sale_by')";
      
$res=$db->select($sql);

 $sale->delete_sell_test_data($cid);
 // $invoice_id=10020;
  $sale->invoice_print_small($invoice_id);


}


if(isset($_POST['add_msg_cid'])){
  $cid=$_POST['add_msg_cid'];
  $pid=$_POST['add_msg_pid'];

       $res=$sale->add_pro_msg($pid,$cid);
       if($res==1){
        echo "<font color='#810A0A'>Product Already Added Invoice</font><br />";
       }
       else{
        echo "<font color='#810A0A'></font>";
       }

}

?>