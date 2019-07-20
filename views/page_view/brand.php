

<?php 

    	$col['id']="ID";
    	$col['name']="Name";
    	$col['note']="Note";

        $table['db_table']="brand";
    	$table['title']='Brand List';
    	$table['col']=$col;
    	$table['data']=$datatable_ob->make_data($col,$brand);
    	$table['add_btn']="Add Brand";
    	$table['action']=1;
    	

    	$datatable_ob->genarate_datatable($table);

   ?>

