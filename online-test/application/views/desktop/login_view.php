









    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Log In</h3>
                    </div>

    <center>
<span>RAPIDOVATIONS</span>
</center>
               


                    <div class="panel-body">
                     <?php if(validation_errors()){ 
                        ?>
                        <div class="alert alert-danger">
                      <?php echo validation_errors(); ?>
                     </div>
                     <?php } ?>
                        <?php echo form_open('verifylogin/'); ?>
                            <fieldset>
                                <div class="form-group">
                               <input class="form-control" placeholder="Username" name="username" type="text" autofocus  AutoComplete=off >
                                </div>
                                <div class="form-group">
                              <input class="form-control" placeholder="Password" name="password" type="password"  autocomplete=off  value="">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
















