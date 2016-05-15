<head>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/basic.js"></script>
</head>
<div id="content" class="testd">
<h1><?php if($title){ echo $title; } ?></h1><br>

<div class="class_text_board">
	<div class="class_heading">
		Notes  <div id="page_res" ></div>
	</div>
	<div id="page" >
		<?php echo $result['content'];?>
	</div>
	
</div>
<div class="class_comment_board">
Comements<br>
<div id="comment_box"></div>
</div>

<div style="clear:both;"></div>

</div>

<script>
get_liveclass_content_2('<?php echo $class_id;?>');
get_ques_content_2('<?php echo $class_id;?>');
</script>



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
