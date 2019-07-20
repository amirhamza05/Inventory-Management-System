

<?php

  $p_info=$product[$pid];
  $image=$p_info['photo'];
  $name=$p_info['name'];
  $category_name=$p_info['category_name'];
  $brand_name=$p_info['brand_name'];


?>

<div class="row">
  <div class="col-md-3 about_profile">
    <div class="profile_header">Profile</div>
    <div class="about_profile_body" id="about_profile_body" style="text-align: center;">
      <img src="<?php echo $image; ?>" class="img_side">
    <div class="info_side">
      <div style="margin-top: 10px;"></div>
      <b style="font-size: 18px;"><?php echo "$name"; ?></b><br/>
      <font style="color: #A7ADB1"><?php echo "$brand_name | $category_name"; ?></font><br/>
      <img src="" style="height: 45px;width: 90%;"><br/>
      <div style="padding-top: 10px;">
        <button class="btn_class">Update Barcode</button>
        <button class="btn_class">Change Image</button>
      </div>
    </div>

    </div>
  </div>

  <div class="col-md-8 panel_profile">
    
    <div style="position: static;">
<section class="buttons">
<div class="containerr">
<div class="row">
<div class="col-sm-12">
<div class="text-center" style="">

<div onclick="get_product_info()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Info</p>
</div>

<div onclick="get_product_unit()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Unit</p>
</div>

<div onclick="payment()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Stock</p>
</div>

<div onclick="result()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Sell</p>
</div>

<div onclick="message()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Message</p>
</div>

</div>

</div>
</div>
</div>
</section>
</div>

    <div class="profile_header" id="profile_option">
    </div>
    <div class="panel_profile_body" id="panel_profile_body"></div>
  </div>
  
</div>


 <?php include "profile_lib.php"; ?>
<script src="views/product/product_profile/js/product_profile.js" type="text/javascript"></script>
<script src="views/product/product_profile/js/info.js" type="text/javascript"></script>
<script type="text/javascript">
  product_page_load(<?php echo "$pid"; ?>);
</script>