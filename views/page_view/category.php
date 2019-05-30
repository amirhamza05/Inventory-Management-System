<?php 

    	$col['id']="Id";
    	$col['name']="Name";
    	$col['note']="Note";
    	$col['date']="Date";

    	$table['title']='Category List';
    	$table['col']=$col;
    	$table['data']=$datatable_ob->make_data($col,$category);
    	
        $table['add_btn']="Add Category";
    	$table['function_name']="fun";
    	$table['action']=1;

    	$datatable_ob->genarate_datatable($table);

   ?>