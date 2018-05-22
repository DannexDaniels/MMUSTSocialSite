<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="module module-login span4 offset4">
                <?php echo form_open('sign_in','class = "form-vertical"');?>
                    <div class="module-head">
                        <h3>Sign In</h3>
                    </div>
                    <div class="module-body">
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input class="span12" type="text" name="user" placeholder="Email/Phone/RegNo/EmpNo">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls row-fluid">
                                <input class="span12" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="module-foot">
                        <div class="control-group">
                            <div class="controls clearfix">
                                <button type="submit" class="btn btn-primary" name="submit" style="width: 100%;">Login</button>
                            </div>
                        </div>
                    </div>
                <?php echo form_close()?>
            </div>
        </div>
    </div>
</div><!--/.wrapper-->
