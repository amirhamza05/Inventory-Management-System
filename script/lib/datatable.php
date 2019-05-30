<?php
class datatable {
   
	public function genarate_datatable($table){
		$title=$table['title'];
		$btn=(isset($table['add_btn']))?$table['add_btn']:-1;
		$col=$table['col'];
		$data=$table['data'];
		$action=(isset($table['action']))?1:-1;
		$function_name=(isset($table['function_name']))?$this->make_js_function($table['function_name'],"insert"):"";
		
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
							<center><button class="button" onclick="<?php echo $function_name; ?>">+ <?php echo $btn; ?></button></center>
						</div>
					<?php } ?>
                
                	<table id="" class="display" width="100%">
                		<thead class="thead_class" style="width: 100%;">
                		<tr>
                			<td class="td_list1"></td>
                		<?php foreach ($col as $key => $value) { ?>	
                			<td class="td_list1"><?php echo "$value"; ?></td>
                		<?php } ?>	
                		
                			
                		</tr>
                	</thead>
                	<tbody>
                		<?php 
                		foreach ($data as $key => $value) {
                            
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

	public function make_js_function($function_name,$operation,$id=0){
		$res="hello('insert')";
		if($operation=="insert")$res="$function_name('insert')";
		else if($operation=="update")$res="$function_name('update',$id)";
		else $res="$function_name('delete',$id)";
		return $res;
	}

}
?>

front end: html,css,bootstrap
back end: php,javascript,ajax
database: mysql