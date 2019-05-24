<script>
	data_table_display();

	function get(){
		modal("lg","header");
		loader("modal_lg_body");
	}
</script>

<?php
    
   $d=$user_ob->check_login_user("hamza05","123456");
   echo "$d";

?>

<div class="row">
<div class="col-md-12">
            <div class="dashboard_box">
                <div class="box_header">Product List</div>
                <div class="box_body">
                	 <div class="pull-rightt" style="margin-top: -20px;">
						<center><button class="button" onclick="get()">+ Add Income</button></center>
					</div>
                
                	<table id="" class="display" width="100%">
                		<thead class="thead_class" style="width: 100%;">
                		<tr>
                			<td class="td_list1"></td>
                			<td class="td_list1">#</td>
                			<td class="td_list1">Income Name</td>
                			<td class="td_list1">Ammount</td>
                            <td class="td_list1">Notes</td>
                			<td class="td_list1">Date</td>
                            <td class="td_list1">Add By</td>
                			<td class="td_list1">Action</td>
                			
                		</tr>
                	</thead>
                	<tbody>
                		<?php 
						$info=array();
                		for($i=0; $i<500; $i++) {
                            
                		 ?>
 
						<tr>
							<td class="td_list2"></td>
                			<td class="td_list2">
                				<?php echo "helo"; ?> 
                			</td>
                			<td class="td_list2">
                                <?php echo "helo"; ?>    
                            </td>
                			<td class="td_list2">
                                <?php echo "helo"; ?>     
                            </td>
                            <td class="td_list2">
                               <?php echo "helo"; ?>     
                            </td>
                			<td class="td_list2">
                               <?php echo "helo"; ?>     
                            </td>
                			<td class="td_list2">
                                <?php echo "helo"; ?>    
                            </td>
                            <td class="td_list2">
                                <?php echo "helo"; ?>    
                            </td>                                           			
                		</tr>
                		<?php } ?>
                		</tbody>
                	</table>
                </div>
            </div>
        </div>
</div>
