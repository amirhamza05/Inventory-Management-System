<?php

if(isset($_POST['get_product_side_bar'])){
?>



<?php

}
 
if(isset($_POST['get_product_info'])){
  $pid=$_POST['get_product_info'];
  $pinfo=$product[$pid];
	?>

  <style type="text/css">
    .pinfo_td1{
      padding: 10px;
      border: 1px solid #C0C0C0;
      width: 30%;
      background-color: #eeeeee;
      text-align: right;
      font-weight: bold;
    }
    .pinfo_td2{
      padding: 10px;
      border: 1px solid #C0C0C0;
      width: 100%;
    }

  </style>
  <div style="text-align: right;">
    <button onclick="update_info_form()" class="btn_class">Update Product Info</button>
    <div style="margin-bottom: 5px;"></div>
  </div>
  <table style="width: 100%">
      <tr>
        <td class="pinfo_td1">Product Name: </td>
        <td  class="pinfo_td2"><?php echo $pinfo['name']; ?></td>
      </tr>
      <tr>
        <td class="pinfo_td1">Product Serial Code: </td>
        <td  class="pinfo_td2"><?php echo $pinfo['id']; ?></td>
      </tr>
      <tr>
        <td class="pinfo_td1">Product BarCode: </td>
        <td  class="pinfo_td2"><?php echo $pinfo['id']; ?></td>
      </tr>
      <tr>
        <td class="pinfo_td1">Product Category: </td>
        <td  class="pinfo_td2"><?php echo $pinfo['category_name']; ?></td>
      </tr>
      <tr>
        <td class="pinfo_td1">Product Brand: </td>
        <td  class="pinfo_td2"><?php echo $pinfo['brand_name']; ?></td>
      </tr>
      <tr>
        <td class="pinfo_td1">Product Description: </td>
        <td  class="pinfo_td2"><?php echo $pinfo['description']; ?></td>
      </tr>
      <tr>
        <td class="pinfo_td1">Product Add By: </td>
        <td  class="pinfo_td2"><?php echo $pinfo['user_name']; ?></td>
      </tr>
      <tr>
        <td class="pinfo_td1">Product Added Date: </td>
        <td  class="pinfo_td2"><?php echo $pinfo['date']; ?></td>
      </tr>

    
  </table>

<?php

}

?>