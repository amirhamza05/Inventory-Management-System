<?php 

    	$col['id']="ID";
    	$col['name']="Name";
    	$col['note']="Note";

    	$table['title']='Category List';
    	$table['col']=$col;
    	$table['data']=$datatable_ob->make_data($col,$category);
    	
        $table['add_btn']="Add Category";
    	$table['db_table']="category";
    	$table['action']=1;

    	$datatable_ob->genarate_datatable($table);

   ?>