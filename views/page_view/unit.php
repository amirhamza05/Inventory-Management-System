<?php 

    	$col['id']="ID";
    	$col['name']="Name";
    	$col['note']="Note";

    	$table['title']='Unit List';
    	$table['col']=$col;
    	$table['data']=$datatable_ob->make_data($col,$unit);
    	
        $table['add_btn']="Add Unit";
    	$table['db_table']="unit";
    	$table['action']=1;

    	$datatable_ob->genarate_datatable($table);

   ?>