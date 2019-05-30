<!--
===============================
  Navbar
===============================
-->

<style type="text/css">
  .profile_nav{
    background-color: var(--bg-color);
    color: var(--font-color);
    border: 1px solid;
    max-height: 45px;
    overflow: hidden;
    max-width: 100px;
    border-color: var(--font-color); 
    padding: 13px;
    border-radius: 7%;
    margin-right: 5px;
    width: 100px;
    box-shadow: 2px 3px var(--font-color);
  }
</style>

<?php 

$name="hamza";

?>
 <script type="text/javascript" src="layout/js/nav_bar_script.js"></script>
 <div class="navbar navbar-default" role="navigation" style="position: auto; border-width: 0px 0px 1px 0px; border-color: rgba(0,0,0,0.2); padding: 10px;" >

        <div class="navbar-headerr"  style="position: auto; border-width: 0px;">

        <ul class="nav navbar-nav navbar-left">  
          <span onclick="action_side_bar()" class="sidebar-toggle-action">
          <button  class="btn_nav_toggle"><i class="fa fa-bars" id="icon_div"></i></button>
          </span> 
        
        
          <a class="" href="index.php"><span class="navbar-brand"  style="color:var(--font-color)"><font class="logo_title">Alom Brothers</font></span></a>
          <span class="nev_bar_button_area">
             <!-- here button -->
           
           <button onclick="sms_state_nav()" class="btn_tab" style="margin-left: 15px;"><span class="glyphicon glyphicon-envelope"></span> SMS Statistics</button>
           <button onclick="live_chat_nav()" class="btn_tab" style="margin-left: 15px;"><i class="fa fa-comments"></i> Live Chat <b></b></button>
           <button onclick="sql_editor()" class="btn_tab" style="margin-left: 15px;"><span class="fa fa-database"></span> SQL Editor</button>


          </span>
        </ul>
        <ul class="nav navbar-nav navbar-right">
           <?php //include "page/nav_bar_dropdown.php"; ?>        
        </ul> 

         <!--  -->
        </div>
</div>

  
<style type="text/css">
  @media screen and (max-width: 800px) {
  .nev_bar_button_area {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  } 
}
</style>

        
<script type="text/javascript">
  function action_side_bar(){
    div=document.getElementById('content');
    icon_div=document.getElementById('icon_div');
    class_name=div.className;
    if(class_name=='content_with_sidebar'){
      div.className = 'content';
      icon_div.className='fa fa-bars';
    }
    else{
      div.className = 'content_with_sidebar';
      icon_div.className='fa fa-times';
    }
  }
</script>

<link rel="stylesheet" type="text/css" href="style/css/nav_bar.css">
