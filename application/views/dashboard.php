  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <div class="youplay-banner banner-top youplay-banner-parallax small">
      <div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/game-diablo-iii-1400x656.jpg')">
      </div>

      <div class="youplay-user-navigation">
        <div class="container">
<ul class='nav nav-tabs'>
                                <li class='active'><a data-toggle='tab' href='#tab-1'> Data Pribadi</a></li>
                                
								
                                
</ul>
        </div>
      </div>

      <div class="info">
        <div>
          <div class="container youplay-user">
            <div class="container">
            <h1>Member Area </h1>
          </div>
            <!--
                -->

            
          </div>

          
        </div>
      </div>
    </div>
    <!-- /Banner -->

    <div class="container youplay-content">

      <div class="row">

	  
<div class='tab-content'>
<div id='tab-1' class='tab-pane active'>
<div class="col-md-9">
<table class='table' width=95% border=1>
          <tr><td width=200>User ID</td><td><?php echo $this->session->userdata('UserID'); ?></td></tr>
          <tr><td width=200>Email Active</td><td><?php echo obfuscate_email($this->session->userdata('UserEmail')); ?></td></tr>
		  <tr><td width=200>Login Status</td><td><?php echo format_is_blokir($this->session->userdata('UserBlock')); ?></td></tr>
		  <tr><td width=200>Last Login</td><td><?php echo format_hari_tanggal($this->session->userdata('LastLoginDate')); ?></td></tr>
		  <tr><td width=200>Account Created</td><td><?php echo format_hari_tanggal($this->session->userdata('CreateDate')); ?></td></tr>
		  
</table>

<?=form_open(base_url()."dashboard/change_password")?>
<h3>Change Password:</h3>
<?php $error = $this->session->flashdata("error"); ?>
<div class="form-horizontal mt-30 mb-40">
  <div class="form-group">
    <label class="control-label col-sm-2" for="oldPassword">Old Password:</label>
    <div class="col-sm-10">
      <div class="youplay-input">
		<input type="password" placeholder="Old Password" name="cur_pw" value="<?php echo set_value("cur_pw") ?>" class="form-control">
		<font color=red><?=form_error("cur_pw") ?></font>
      </div>
    </div>
  </div>

	
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="pin_code">Pin Code:</label>
    <div class="col-sm-10">
      <div class="youplay-input">
<input type="password" placeholder="Pin Code" name="pin_code" value="<?php echo set_value("pin_code") ?>" class="form-control">
<font color=red><?=form_error("pin_code") ?></font>
      </div>
    </div>
  </div>

	
  <div class="form-group">
    <label class="control-label col-sm-2" for="confirmPassword">New Password:</label>
    <div class="col-sm-10">
      <div class="youplay-input">
<input type="password" placeholder="New Password" name="new_pw" value="<?php echo set_value("new_pw") ?>" class="form-control">
<font color=red><?=form_error("new_pw") ?></font>
      </div>
    </div>
  </div>


	
  <div class="form-group">
    <label class="control-label col-sm-2" for="confirmPassword">Confirm Password:</label>
    <div class="col-sm-10">
      <div class="youplay-input">
		<input type="password" placeholder="Confirm Password" name="conf_pw" value="<?php echo set_value("conf_pw") ?>" class="form-control">
		<font color=red><?=form_error("conf_pw") ?></font>
      </div>
    </div>
  </div> 

 <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-default">Change Password</button>
    </div>
  </div>



<?=form_close()?>


 


	
</div></div>

        <!-- Left Side -->
        <div class="col-md-3">
          <div class="side-block">
            <h4 class="block-title">K.O POINT</h4>
            <div class="block-content">
              <span class='label label-primary'>Reza Darmawan Putra</span><br>
			  BCA : 2280070877 <br>
			  Tlp : 0822.1055.2795<br>
			  IGN : <span class='label label-warning'>[KO|POINT2]</span><hr>
			  <span class='label label-primary'>Frankie Herman</span><br>
			  BCA : 4840250461 <br>
			  LINE: frankie_phang<br>
			  IGN : <span class='label label-warning'>[KO|POINT4]</span><br>
			</div>
          </div>
          <div class="side-block">
            <h4 class="block-title">Detail K.O POINT</h4>
            <div class="block-content pt-5">
              <div class="responsive-embed responsive-embed-16x9">
                <a class="label label-primary" href="https://ran-indo.co.id/shop" target=_blank>K.O RAN ONLINE SHOP</a><br><br>
              </div>
            </div>
          </div>
        </div>
        <!-- Left Side -->

      </div>

    </div>




  </section>
  <!-- /Main Content -->
		



