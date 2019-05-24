<div class="row">
  <div class="col-md-3 about_profile">
    <div class="profile_header">Profile</div>
    
  <div class="about_profile_body" style="text-align: center;">
    <img src="<?php echo "photo" ?>" class="img_side">
    <div class="info_side">
      <div style="margin-top: 10px;"></div>
      <table width="100%">
        <tr>
          <td class="td_profile1">Full Name:</td>
          <td class="td_profile2"><?php echo "name" ?><br/></td>
        </tr>
         <tr>
          <td class="td_profile1">Nick:</td>
          <td class="td_profile2"><?php echo "nick" ?></td>
        </tr>
        <tr>
          <td class="td_profile1">ID:</td>
          <td class="td_profile2"><?php echo "id" ?></td>
        </tr>
        <tr>
          <td class="td_profile1">ID Code:</td>
          <td class="td_profile2">
            <img src="barcode.php?text=<?php echo "id" ?>" style="width: 100%" />
          </td>
        </tr>
      </table>
      
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

<div onclick="info()" class="nb-btn-circle">
   <i class="fa fa-home"></i>
   <p>Info</p>
</div>

<div onclick="program()" class="nb-btn-circle">
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

<input type="text" value="<?php echo "$id" ?>" id="student_id" hidden="">
 <?php include "profile_lib.php"; ?>
<script type="text/javascript">
  set_profile_data(<?php echo $id; ?>);
</script>