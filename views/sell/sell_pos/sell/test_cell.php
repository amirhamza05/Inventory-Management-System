


<script type="text/javascript" src="page/sell/js_script/sell_script.js"></script>

<style type="text/css">
 .loader,
.loader:before,
.loader:after {
  background: #D32831;
  -webkit-animation: load1 1s infinite ease-in-out;
  animation: load1 1s infinite ease-in-out;
  width: 1em;
  height: 2em;
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

.product_filed{
  background-color: #ffffff;
    height: 570px;
    padding: 15px;

     

}
.product_filed1{
  background-color: #78909c;
    height: 100%;
    padding: 15px;
    overflow:scroll; 

}

/* Chrome, Safari */
::-webkit-scrollbar {
width: 3px;
height: 550px;
}

::-webkit-scrollbar-thumb:vertical {
  background-color: #0A4C95;
}

</style>

<script type="text/javascript">
 flag=0;
 function full(){
  command="height: 100%; width: 100%;position: absolute; top: 0; left: 0";
  area=document.getElementById('full_screen');
  if(flag==0){
    area.style=command;
    set_height("product_list_body");
    display("footer","none");
    display("header","none");
    display("top_option_menu","none");
  }
  else{
    area.style="";
    display("footer","block");
    display("header","block");
    display("top_option_menu","block");
  }
  flag=(flag==0)?1:0;
  
}
function display(div_name,per){
  area=document.getElementById(div_name);
  area.style.display=per;
}
function set_height(div_name){
  document.getElementById(div_name).style="height:100%";
}
</script>


<div class="container" id="full_screen" style="">

<div class="row">


<div class="col-md-4 col-sm-4">
    <div class="invoice_filed">
      <?php include "test_invoice.php"; ?> 
    </div>
</div>

<div class="col-md-8 col-sm-8">
	<div class="product_filed">
     		<?php include 'test_product_list.php'; ?>
     </div>
</div>
 
</div>
</div>

 