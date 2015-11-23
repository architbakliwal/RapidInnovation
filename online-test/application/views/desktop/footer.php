<?php
if($this->uri->segment(2) != "access_test"){
?>

<div style='padding:20px;border-top:1px solid #dddddd;text-align:right;'>Copyright © <a href='<?php echo $config["base_url"] ?>'>RAPIDOVATIONS</a> 2015</div>


<?php
}
?>


    <?php
 if($this->session->userdata('logged_in'))
   {
   $logged_in=$this->session->userdata('logged_in');
   ?>
 	</div>
	</div>
	</div>

</div>

<?php 
}
?>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>bootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>bootstrap/dist/js/sb-admin-2.js"></script>


 </body>
</html>
