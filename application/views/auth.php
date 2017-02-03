
<section class="content-wrap full youplay-login">
 
<div class="youplay-banner banner-top">
<div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/banner-bg.jpg')"></div>
<div class="info">
<div>
<div class="container align-center">
<div class="youplay-form"><h2>Login</h2>
              <?php $error = $this->session->flashdata("error"); ?>
  						<div class="alert alert-<?php echo $error ? 'warning' : 'info' ?> alert-dismissible" role="alert">
  						  
  						  <?php echo $error ? $error : 'Enter your username and password' ?>
  						</div>

  						<?php echo form_open(); ?>  
                <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>              
  							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
  								
  								<div class="youplay-input"><div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-user"></i>
  									</span>
  									<input type="text" placeholder="Username" name="username" value="<?php echo set_value("username") ?>" id="username" class="form-control">
  								</div></div>  
                  <?php echo $error; ?>
  							</div>
                <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
  							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
  								
  								<div class="youplay-input"><div class="input-group">
  									<span class="input-group-addon">
  										<i class="glyphicon glyphicon-lock"></i>
  									</span>
  									<input type="password" placeholder="Password" name="password" id="password" class="form-control">
  								</div></div> 
                  <?php echo $error; ?>
  							</div>
  							<button type="submit" class="btn btn-large btn-primary">Login</button>
  						<?php echo form_close(); ?>
</div>
 
</div>
</div>

  </div>
</div>
</div>
 
</section>