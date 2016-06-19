<br><a href="<?php echo site_url('group/add_new');?>" class="btn btn-success">Add new</a>
 
 	<?php 
$logged_in=$this->session->userdata('logged_in');

if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
 ?> 	
<div class="row" style="margin-top:10px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <?php if($title){ echo $title; } ?>
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <table id="usergroup-list" class="table table-striped table-bordered dt-responsive nowrap">
                                    <thead>
                                   
                               
							   <tr><th>Id</th><th>Group</th><th>Action</th></tr><thead><tbody>
<?php
if($result==false){
?>
<tr>
<td colspan="5">
No record foud!
</td>
</tr>
<?php

}else{
foreach($result as $row){
?>
<tr>
<td data-th="Id"><?php echo $row->gid;?></td>
<td data-th="Group Name"><?php echo $row->group_name;?></td>
<td data-th="Action"><a href="javascript: if(confirm('Do you really want to remove this group?')){ window.location='<?php echo site_url('group/remove_group/'.$row->gid );?>'; }"  class="btn btn-danger btn-xs">Remove</a> 
&nbsp;&nbsp;<a href="<?php echo site_url('group/edit_group/'.$row->gid );?>"  class="btn btn-info btn-xs">Edit</a></td>
</tr>
<?php
}
}
?>
		   
							    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
<script type="text/javascript">
$(document).ready( function () {
  $('#usergroup-list').DataTable({
    responsive: true
  });
});
</script>
