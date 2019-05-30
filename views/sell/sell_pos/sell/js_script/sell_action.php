<?php

include "config/db.php";
include "config/connect.php";

include "include/lib.php";

if(isset($_POST['barcode'])){
   $barcode=$_POST['barcode'];
   $flag=0;
   $all=0;
   if($barcode=='')$all=1;
    foreach ($product_info as $key => $info) {
	$pid=$info['pid'];
	$pname=$info['pname'];
	$image=$info['image'];
	$brand=$info['brand'];
	$p_code=$info['p_code'];
	if($p_code==$barcode || $all==1){
		$flag=1;
	?>

<div class="col-sm-3 col-xs-6 col-md-3">
				<div class="thumbnail"  style="background-color: #dcedc8;border-top-width: 4px; border-radius: 0px; border-color: #FF3600">
					
					<div class="secrow">
						<div style="background-color: #ffffff; margin: -5px;">
						<img src="<?php echo "$image"; ?>" alt="" class="img-responsivee" width="100%"  height="80px"></div>
						
						<div class="caption" style="background-color: #F7F7F7; margin: -5px;"">
							<center>
							<b><?php echo "$pname" ?><br/></b>
							<?php echo "$brand"; ?><br>
							2 Pices Avilabol
							</center>
						</div>
					</div>
					<div class="frow" style="margin: -5px;">
						<center>
						<button class="btn btn-success btn-sm" data-toggle="modal" onclick="add_invoice_page(<?php echo "$pid"; ?>)" data-target="#add_invoice" style="width: 100%; background-color: #094B61; border-width: 0px; border-radius: 0px;"><b>Add Invoice</b></button>
                        </center>
					</div>

		   		</div>
			</div>


			

	<?php

}
	}
	if($flag==0)echo "<center>Soory This Product Is not Found</center";
}

if(isset($_POST['add_invoice_page'])){
	$pid=$_POST['add_invoice_page'];
	?>

<center>
<div style="">

<?php

$stock_qun=$stock->product_stock_qun($pid);
foreach ($unit_info[$pid] as $key => $unit) {
  $unit_id=$unit['unit_id'];
  $unit_name=$unit['unit_name'];
  $unit_qun=$unit['qun'];
  $basic=$unit['basic'];
  echo "";
  print_r($unit);
  echo "<br/>";
  ?>
<input type='text' id='qun_unit_<?php echo "$unit_id"; ?>' value='<?php echo "$unit_qun"; ?>' hidden >	<div class='form-check'>

	<style>
		.l_c{
			padding: 5px;
			background-color: #eeeeee;
			width: 260px;
			text-align: left;
		}
	</style>
					<label class="l_c">

						<input style="height: 20px; width: 40px;" type='radio' id='radio_<?php echo "$pid"; ?>' value='<?php echo "$unit_id"; ?>' name='radio_<?php echo "$pid"; ?>'> <span class='label-text'><?php echo " $unit_name ($unit_qun) "; ?></span>
					</label>
				</div>
  <?php
}
?>

</div>

<style type="text/css">
	.qun_box{
		padding: 5px;
	}
</style>
<div style="margin-left: 30px">
<input type="text" class="qun_box" name="" id="qun" placeholder="enter Quantity">
<input type="submit" onclick="add_invoice(<?php echo "$pid"; ?>)" name="" id="add" value="Add">
</div>
</center>
	<?php
}

if(isset($_POST['add_invoice'])){
	$pid=$_POST['add_invoice'];
	$unit_id=$_POST['unit_id'];
	$unit_qun=$_POST['unit_qun'];
	$unit_name="KG";
	$unit_price=400;
	$total=$unit_qun*$unit_price;
	?>
	 <tr>
              <td style="width: 7%"><center><?php echo "i"; ?></center></td> 
             	<td style="width: 20%"><center><?php echo "$pid"; ?></center></td>
             	<td style="width: 15%"><center>
             		<?php echo "$unit_name"; ?>
             	</center></td>
             	<td style="width: 15%"><center><input type="text" name="" value="<?php echo "$unit_price"; ?>" style="width: 100%"></center></td>
             	<td style="width: 15%"><center><input type="text" name="" readonly="" value="<?php echo "$unit_qun" ?>" style="width: 100%"></center></td>
             	<td style="width: 15%"><center><input type="text" name="" value="<?php echo "$total"; ?>" style="width: 100%"></center></td>
             	<td style="width: 7%"><center>D</center></td>        	
             </tr>
	<?php
}




?>