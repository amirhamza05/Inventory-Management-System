<?php
class datatable {
   
	public function genarate_datatable($table){
		$title=$table['title'];

		$col=$table['col'];
		$data=$table['data'];
		$action=(isset($table['action']))?1:-1;
		
        $btn=-1;
        $db_table=$table['db_table'];

        if(isset($table['add_btn'])){
            $btn=$table['add_btn'];
            $db_table=$table['db_table'];
            $insert_function=$this->make_js_function($db_table,"insert");
        }

		
?>

		<div class="row" style="">
    	<script type="text/javascript">
    		data_table_display();
    	</script>
    	  
 
        <div class="col-md-12">
            <div class="dashboard_box">
                <div class="box_header"><?php echo "$title"; ?></div>
                <div class="box_body">
                	<?php if($btn!=-1){ ?>
                		 <div class="pull-rightt" style="margin-top: -20px;">
							<center><button class="button" onclick="<?php echo $insert_function; ?>">+ <?php echo $btn; ?></button></center>
						</div>
					<?php } ?>
                
                	<table id="" class="display" width="100%">
                		<thead class="thead_class" style="width: 100%;">
                		<tr>
                			<td class="td_list1"></td>
                		<?php foreach ($col as $key => $value) { ?>	
                			<td class="td_list1"><?php echo "$value"; ?></td>
                		<?php } ?>	
                		
                			<td class="td_list1">Action</td>
                		</tr>
                	</thead>
                	<tbody>
                		<?php
                        
                		foreach ($data as $key => $value) {
                            $id=$value['ID'];
                		 ?>
 
						<tr>
							<td class="td_list2"></td>
                			
                			<?php 
                			foreach ($value as $key => $value1) {
                			?>
                				<td class="td_list2">
                                	<?php echo $value1; ?>    
                            	</td>
                        	<?php } ?>
                			<td  class="td_list2">
                                <button class="btn btn-primary btn-xs" style="margin-right: 4px;" title="Update" data-title="Update" onclick="form_view('<?php echo "$db_table"; ?>','update',<?php echo "$id"; ?>)" >
                                <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                                <button class="btn btn-danger btn-xs" title="Delete" data-title="Delete" onclick="form_view('<?php echo "$db_table"; ?>','delete',<?php echo "$id"; ?>)" ><span class="glyphicon glyphicon-trash"></span></button>
                                
                            </td>
                			
                		</tr>
                		<?php } ?>
                		</tbody>
                	</table>
                </div>
            </div>
        </div>
        
    </div>  


<?php		
	}

	function make_data($col,$data){
		$res_data=array();
		foreach ($data as $key => $value) {
    		$data1=array();
    		foreach ($col as $key1 => $val1) {
    			$data1[$val1]=isset($value[$key1])?$value[$key1]:"";
    		}
    		array_push($res_data, $data1);
    	}

    	return $res_data;

	}

	public function make_js_function($table_name,$operation,$id=0){
		$res="";
		if($operation=="insert")$res="form_view('$table_name','insert')";
		else if($operation=="update")$res="form_view($table_name'insert',$id)";
		else $res="form_view($table_name'delete',$id)";
		return $res;
	}

}
?>

