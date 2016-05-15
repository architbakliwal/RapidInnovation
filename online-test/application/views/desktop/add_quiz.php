<head>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/basic.js"></script>
</head>
<div id="content" class="testd"> 
<h1><?php if($title){ echo $title; } ?></h1><br>
<a href="<?php echo site_url('quiz');?>"  class="button-error pure-button">Back </a>
<?php 
if($resultstatus){ echo "<div id='result'>".$resultstatus."</div>"; }
 ?>
<form method="post" action="<?php echo site_url('quiz/add_new');?>">
 
<table id="formdata">
<tr>
	<td>Quiz Name</td>
	<td><input type='text' name='quiz_name' ></td>
</tr>	
<tr>
	<td valign="top">Quiz Description</td>
	<td valign="top">
	<textarea name="description"></textarea> 
	</td>
</tr>
<tr>
	<td>Quiz Time Duration</td>
	<td><input type='text' name='quiz_time_duration' >Minutes</td>
</tr>
<tr>
	<td>Start Time</td>
	<td><input type='text' name='test_start_time' > ( format YYYY/MM/DD HH:MM:SS  )</td>
</tr>	
<tr>
	<td>End Time</td>
	<td><input type='text' name='test_end_time' >( eg. 2014/10/31 23:59:59 )</td>
</tr>	

<tr>
	<td>Percentage required to pass</td>
	<td>
		<div class="styled-select black semi-square"><select name="pass_percentage">
			<?php for($i = 0;$i <= 100;$i++){ ?>
				<option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
			<?php } ?>
		</select></div> %
	</td>
</tr>	
<tr>
	<td valign="top">Assign to Groups</td>
	<td>
		<?php
		$group_counter = 1; 
		foreach($groups as $key => $group){ ?>
			<?php echo $group['group_name']; ?><input type="checkbox" name="assigned_groups[]" value="<?php echo $group['gid']; ?>"> &nbsp;&nbsp;
		<?php if($group_counter%5 == 0){ echo "</br>"; } $group_counter++; }  ?>
	</td>
</tr>	
<tr>
	<td>Test type</td>
	<td>
		<input type='radio' name='test_type' value='0' checked="checked" >Free
		( Credit <input type="text" name="test_charges" value="0" readonly > )
	</td>
</tr>	
<tr>
	<td>Allow to View Answer</td>
	<td>
		<input type='radio' name='view_answer' value='1' >Yes
		<input type='radio' name='view_answer' value='0' >No 
	</td>
</tr>	
<tr>
	<td>Maximum Attempts</td>
	<td>
		<div class="styled-select black semi-square"><select name="max_attemp">
			<?php for($i = 1;$i <= 1000;$i++){ ?>
				<option value="<?php echo $i;  ?>"><?php echo $i;  ?></option>
			<?php } ?>
		</select></div>
	</td>
</tr>	
<tr>
	<td>Correct answer score</td>
	<td><input type='text' name='correct_answer_score' value="1"></td>
</tr>	
<tr>
	<td>Incorrect answer score</td>
	<td><input type='text' name='incorrect_answer_score' value="0"></td>
</tr>	
<tr>
	<td>Accessible to IPs </td>
	<td>
		<input type='text' name='ip_address' value=""> Comma separated,  Leave empty for all IPs
		<?php 
		if($this->config->item('webcam_plugin') == false){
		?><input type="hidden" name="camera_req" value="0"> <?php
		}
		?>
	</td>
</tr>	
<?php
if($this->config->item('webcam_plugin')){
?>
<tr>
	<td>Capture Photo</td>
	<td>
		<input type='radio' name='camera_req' value='1' >Yes
		<input type='radio' name='camera_req' value='0' >No 
	</td>
</tr>	
<?php
}
?>

</table>

<br><br>
Add questions
<br><br>

<div id="qman" style="">
<h1> Click on 'Submit Quiz' button and you will go to question selection module.</h1>
</div>
<br>
<table id="formdata">
<tr>
<td valign="top"></td>
<td valign="top">
<input type="hidden" value="0" name="qselect" id="qselect">
<input type="submit" value="Submit Quiz" name="submit_quiz"   class="button-warning pure-button"> </td></tr>
</form>
</table>

 
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
