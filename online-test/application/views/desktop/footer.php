<?php
if($this->uri->segment(2) != "access_test"){
?>


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
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; RAPIDOVATIONS 2015</span>
            </div>
        </div>
    </div>
</footer>

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
