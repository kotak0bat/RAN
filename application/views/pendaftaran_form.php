<section class="content-wrap">
    
    <!-- Banner -->
    <div class="youplay-banner youplay-banner-parallax banner-top small">
      <div class="image" style="background-image: url('/assets/images/banner-blog-bg.jpg')">
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
				
<form method="post" class="form-signin">                   
<?php if(isset($msg)) echo $msg;  ?>
<fieldset id="ranregister">
<div class="youplay-input">
<input type="email" class="form-control" name="txt_umail" placeholder="Enter E-Mail ID" required="required" value="<?php if(isset($error)){echo $umail;}?>" /></div>
<div class="youplay-input">
<input type="text" class="form-control" name="txt_uname" placeholder="Enter Username" required="required" minlength=6 value="<?php if(isset($error)){echo $uname;}?>" /></div>
<div class="youplay-input">
<input type="password" class="form-control" name="txt_upass" minlength=8 placeholder="Enter Password" required="required"/></div>
<div class="youplay-input">
<input type="password" class="form-control" name="txt_pin" placeholder="Pin Code" required="required" minlength=6 maxlength=6/></div>

<div class="g-recaptcha" data-sitekey="6LfuowwUAAAAADDohxvwYgwa3NNXis1zKfwS3CA5"></div>
<div class="clearfix">
<button type="submit" class="btn btn-primary pull-right" name="btn-signup">Register!</button>
</div>
<!--<div class='alert alert-warning'>Register Close..Waiting CBT</div>-->
</fieldset>                    
</form> 


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