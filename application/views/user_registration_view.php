 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?> 

<!-- Main Content -->
<section class="content-wrap">
    
    <!-- Banner -->
    <div class="youplay-banner youplay-banner-parallax banner-top small">
      <div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/banner-blog-bg.jpg')">
      </div>

      <div class="info">
        <div>
          <div class="container">
            <h1>Register</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- /Banner -->    
    
    <div class="container youplay-content">

      <div class="row">
        <div class="col-md-8 col-md-push-4">
          <!-- Contact Form -->
          
          <div class="youplay-form p-0">
          	            <h2 class="mt-0">Create your account in seconds by providing your info below:</h2>

            <div id="registration-form">
                <div id="regdialog"></div>
				
<?php echo form_open('register');?>                  
<?php if(isset($message)) echo $message;  ?>
<fieldset id="ranregister">
<div class="youplay-input">
<input type="text" class="form-control" name="username" placeholder="UserName" required="required" value="<?php echo set_value('username'); ?>" />
<?php echo form_error('username'); ?></div>
<div class="youplay-input">
<input type="email" class="form-control" name="email" placeholder="Email" required="required" value="<?php echo set_value('email'); ?>" />
<?php echo form_error('email'); ?></div>
<div class="youplay-input">
<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password" required="required"/>
<?php echo form_error('password'); ?></div>
<div class="youplay-input">
<input type="password" class="form-control" name="password_conf" value="<?php echo set_value('password_conf'); ?>" placeholder="Confirm Password" required="required"/>
<?php echo form_error('password_conf'); ?></div>
<div class="youplay-input">
<input type="password" class="form-control" name="pincode" placeholder="Pin Code" required="required" value="<?php echo set_value('pincode'); ?>"/>
<?php echo form_error('pincode'); ?></div>


<div class="clearfix">
<button type="submit" class="btn btn-primary pull-right" name="btn-signup">Register!</button>
</div>
<!--<div class='alert alert-warning'>Register Close..Waiting CBT</div>-->
</fieldset>                    
 <?php echo form_close();?>


</div>
</div>
<!-- /Contact Form -->
</div>
        <div class="col-md-4 col-md-pull-8">
          <h2 class="text-center">Guide</h2>
          <ul class=".list-unstyled">
		  <li>
              <div class="small text-justify">
                The <span class="label label-default">Email address</span> should be valid and existing.
                This will be used for any transactions like payment, account confirmation, forgot password retrieval, etc.<br/>.
                Invalid email or inexisting email is still acceptable, but you won't receive any email message coming from the 
                <span class="label label-info">support team</span>.
              </div> 
            </li>
            <li>
              <div class="small text-justify">
                Your <span class="label label-default">Username</span> should be unique and distinct.
                Minimum characters required is <span class="label label-danger">6</span>, so make sure to choose a good one player.
              </div> 
            </li>
            <li>
              <div class="small text-justify">
                Your <span class="label label-default">Password</span> should be equal or more than <span class="label label-danger">8</span> characters for your convenience and security.
              </div> 
            </li>
            <li>
              <div class="small text-justify">
                Your <span class="label label-default">PinCode</span> should be equal or more than <span class="label label-danger">6</span> Security Delete Character.
              </div> 
            </li>
            
          </ul>

        </div>
      </div>

    </div> 

 
  </section>
  <!-- /Main Content --> 
 