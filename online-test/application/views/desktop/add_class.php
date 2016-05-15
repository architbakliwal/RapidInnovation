<script type="text/javascript" src="<?php echo base_url();?>/js/basic.js"></script>
<br>
<?php 
if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
 ?> 
<form method="post" action="<?php echo site_url('liveclass/add_new');?>">
<a href="<?php echo site_url('liveclass');?>"    class="btn btn-danger">Back</a>
<div class="row" style="margin-top:10px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($title){ echo $title; } ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                        <div class="form-group">
                                            <label>Class Name</label>
		                                         <input type='text'  class="form-control"  name='class_name' >

                                         </div>
	                                      <div class="form-group">
                                            <label>Start Time ( YYYY/MM/DD HH:MM:SS  )</label>
		                                         <input type='text'  class="form-control"  name='start_time' >

                                         </div>
	                                      <div class="form-group">
                                            <label>Assign to Groups:</label><br>
		                                       	<?php
												$group_counter = 1; 
												foreach($groups as $key => $group){ ?>
													<?php echo $group['group_name']; ?>  &nbsp;<input type="checkbox" name="assigned_groups[]" value="<?php echo $group['gid']; ?>"> &nbsp; &nbsp;&nbsp;
												<?php if($group_counter%5 == 0){ echo "</br>"; } $group_counter++; }  ?>
											
													 </div>
													 
									     <div class="form-group">
                                            
 <input type="submit" value="Submit"  name="submit_class"   class="btn btn-default"> 
                                         </div>
						
										 
										 
										 
								
								</div>
							</div>
						</div>
					</div>
				</div>
</div>

</form>









<script type="text/javascript">
tinymce.init({
    selector: 'textarea',
    theme: 'modern',
    relative_urls: false,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'save table contextmenu directionality emoticons template paste textcolor jbimages'
    ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages | print preview media fullpage | forecolor backcolor emoticons'
});
</script>
