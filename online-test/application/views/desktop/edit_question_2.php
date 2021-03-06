<script type="text/javascript" src="<?php echo base_url();?>/js/basic.js"></script>
<?php 
if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
 ?> 

<div class="row" style="margin-top:10px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($title){ echo $title; } ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                
								<form method="post" action="<?php echo site_url('qbank/edit_question/'.$result['0']['qid']).'/2';?>">
								<div class="form-group">
                                            <label>Question Type</label>
		                                        <select class="form-control"  name="qus_type" OnChange="get_ques_type(this.value)">
												<option value="0"> Multiple Choice -single answers</option>
												<option value="1" > Multiple Choice -multiple answers</option>
												<option value="2" selected >Fill in the Blank</option>
												<option value="3">Short Answer</option>
												<option value="4">Essay</option>
												<option value="5">Matching</option>
												</select>

                                         </div>

                                        <div class="form-group">
                                            <label>Select Category</label>
											<select class="form-control"  name="cid">
											<?php foreach($category as $value){ ?>
											<option value="<?php echo $value->cid; ?>" <?php if($result['0']['cid'] == $value->cid){ echo "selected"; }?>  ><?php echo $value->category_name; ?></option>
											<?php } ?></select>
										 </div>

                                         <div class="form-group">
                                            <label>Select Sub Category</label>
                                            <select class="form-control"  name="scid">
                                            <?php foreach($sub_category as $value){ ?>
                                            <option value="<?php echo $value->scid; ?>"  <?php if($result['0']['scid'] == $value->cid){ echo "selected"; }?> ><?php echo $value->category_name; ?></option>
                                            <?php } ?></select>
                                         </div>



                                        <div class="form-group">
                                            <label>Select Difficulty Level</label>
                                         <select class="form-control" name="did">
										<?php foreach($difficult_level as $value){ ?>
										<option value="<?php echo $value->did; ?>" <?php if($result['0']['did'] == $value->did){ echo "selected"; }?>  ><?php echo $value->level_name; ?></option>
										<?php } ?></select> 

                                         </div>
                                        <div class="form-group">
                                            <label>Question</label>
                                            <textarea name="question"><?php echo $result['0']['question'];?></textarea> 
                                            <p class="help-block"> 
                                            Use 5 underscores ( _ ) to replace it with fillups (input field) during quiz<br><br>
Eg. Two + _____ = Four
</p>
										 </div>



                                        <div class="form-group">
                                            <label>Description (Optional)</label>
                                            <textarea name="description"><?php echo $result['0']['description'];?></textarea> 
                                            <p class="help-block">
                                            	Describe how question can be solved. <br>
												User can see description after submitting quiz in view answer section.
                                            </p>
										 </div>
<div class="form-group"><label>Answer</label>

<?php
foreach($result['1'] as $okey => $option_value){
?>
 
<input type="hidden" value="<?php echo $option_value['oid'];?>" name="oids[]"> 

<input class="form-control"  type="text" name="option[]"  value="<?php echo $option_value['option_value'];?>" placeholder="Answer"> 
<p class="help-block">User input will be matched with it. Not case sensitive</p>

<?php
} 
?>



</div>

<div class="form-group">

<input type="submit" value="Submit"  class="btn btn-default">  
</div>




								</form>

								</div>
							</div>
						</div>
					</div>
				</div>
</div>







 

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
