<?php
include "sellbar.php";
//include "script/sell.php";
//$se=new sell();


?>
<body>

<script type="text/javascript">
  $("button[data-number=1]").click(function(){
    $('#test').modal('hide');
    alert("yes");
});

$("button[data-number=2]").click(function(){
    $('#test2').modal('hide');
});
</script>


<style>

  .bedit{
background-color: #8F8787;

  }

  .bd{
    background-color: #8567D7;
    border-color: #8567D7;
    color: #ffffff;
        font-weight: 900;

  }

</style>


        
<style>
  .bedit{
background-color: #8F8787;

  }
  .product_view .modal-dialog{max-width: 900px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

.sell_view .modal-dialog{max-width: 1200px; width: 100%; }
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

     .modal-backdrop
  {
    opacity:0.8 !important;
      }

      .invoice_view .modal-dialog{max-width: 900px; width: 450px;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

</style>

<script type="text/javascript">
  function cl(){
    $('#test').modal('hide');
    alert("yers");
  }
</script>

<div class="modal fade sell_view" id="test">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header" style="background-color: #16A086">

<a href="#" data-dismiss="modal" aria-label="Close"  class="class pull-right"><span class="glyphicon glyphicon-remove white" style="color: #ffffff"></span></a>

<h3 class="modal-title"><font color="#ffffff">Sell Product</font></h3>
</div>



<div class="modal-body" style="background-color:#D5CFCF;">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
 <script style="display: none" src="page/sell/sale_script.js"></script> 

<?php include "page/sell/sale_by_model.php"; ?>

</div>
</div></div></div>



<div class="list-ggroup">
  <span href="#" class="list-group-item bd"> Sell List</span>
</div>

  <div class="back">
  <div class="row">
  <div class="col-md-12">   
  <center><button class="btn btn-success btn-xs" data-title="Add Product" data-toggle="modal" data-target="#test" ><span class="glyphicon glyphicon-plus"></span>Sell Product</button></center>       
  <center>
  <style>
    .btn-glyphicon { padding:8px; background:#ffffff; margin-right:4px; }
.icon-btn { padding: 1px 15px 3px 2px; border-radius:50px;}

  </style>
 </center><script>
    $(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );

</script>
        
<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th>Sell Id</th>
              <th>Date</th>
              <th>Customer Name</th>
         
              <th>Status</th>
              <th>Total Taka</th>
              <th>Total Advance</th>
              <th>Total Due</th>
              <th>Invoice</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>

          </thead>
          <tfoot></tfoot>
          <tbody>

      <?php
      
            
            $pro=new product();
            $pro->connection();
            $total=$pro->stock(3);
            

            
$sql = "SELECT * FROM invoice";
$result = $pro->select($sql);

    // output data of each row
    while($row = mysqli_fetch_array($result)) {
      $sid=$row['invoice_id'];
      $cid=$row['cid'];//customer id
      $ad=$row['advanced'];
      $due=$row['due'];
      $total=$row['sub_total'];
      $date=$row['date'];
     
      //product name
   
  
    
  ?>
            
            
            
  <tr style="background-color: #ffffff">
     <td><?php  echo "$sid"; ?></td>
     <td><?php  echo $date; ?></td>
     <td><?php  echo "$cid"; ?></td>
     <td> <?php //$se->status_button($due); ?> </td>
     <td><?php echo "$total";  ?></td>
     <td><?php echo "$ad";  ?></td>
     <td><?php echo "$due";  ?></td>

     

    <td>

    <div style="display: none;" id="printableArea<?php echo "$sid";?>">
    
    </div>


    <center><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-success" onclick="window.open('page/sell/invoice_print.php?invoice_id=<?php echo "$sid"; ?>','_blank')" /><span class="glyphicon glyphicon-print"></span></button></p>
    
</center>


  <script>
    function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    }
  </script>

</td>


    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit<?php echo "$sid";?>" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>


    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete<?php echo "$sid";?>" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

  </tr>

           

<!--      starting delete dilog        -->


<div class="modal fade" id="edit<?php echo "$sid";?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title custom_align" id="Heading">Edit this entry</h4>
</div>
<div class="modal-body">



  <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to Edit 
       this Record?</div>
       
    </div>
        <div class="modal-footer ">
        <form action="upsell.php" id="form1" method="POST">
        <button type="submit" name="sid" value="<?php echo "$sid"; ?>" form="form1" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>



           

<!--      starting delete dilog        -->


<div class="modal fade" id="invoice<?php echo "$sid";?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">

<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title custom_align" id="Heading">Invoice System</h4>
</div>
<div class="modal-body">

<?php  ?>
       
    </div>
        <div class="modal-footer ">
        <form action="upsell.php" id="form1" method="POST">
        <button type="submit" name="sid" value="<?php echo "$sid"; ?>" form="form1" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>



<!--      starting delete dilog        -->

<div class="modal fade" id="delete<?php echo "$sid";?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete 


       this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <form action="dsell.php" id="form1" method="POST">
        <button type="submit" name="sid" value="<?php echo "$sid"; ?>" form="form1" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    

     <?php } ?>

        </tbody>
        </table>

</div>
</div>
</div>
</div>
</div>


    <?php

    ?>
    </body>
    <div class="fab"><a href="" data-toggle="modal" data-target="#test"><font color="#ffffff">+</font></a></div>
<style>
.fab {
   width: 70px;
   height: 70px;
   background-color: red;
   border-radius: 50%;
   box-shadow: 0 6px 10px 0 #666;
   transition: all 0.1s ease-in-out;
 
   font-size: 50px;
   color: white;
   text-align: center;
   line-height: 70px;
 
   position: fixed;
   right: 50px;
   bottom: 50px;
}
 
.fab:hover {
   box-shadow: 0 6px 14px 0 #666;
   transform: scale(1.05);
} </style>

      
