<?php 

    	$col['id']="ID";
    	$col['name']="Name";
    	$col['note']="Note";
    	$col['date']="Date";

    	$table['title']='Brand List';
    	$table['col']=$col;
    	$table['data']=$datatable_ob->make_data($col,$brand);
    	$table['add_btn']="Add Brand";
    	$table['action']=1;
    	$table['function_name']="fun";

    	$datatable_ob->genarate_datatable($table);

   ?>
 <script type="text/javascript">
 	function fun(ver){
 			alert(ver);
 	}
 </script>