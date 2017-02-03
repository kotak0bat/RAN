<?php
$login_status = $this->session->userdata('logged_in');
$user_level = $this->session->userdata('user_level');
?> 
 <!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="img-responsive">
        </a>
      </div>
	  
	  
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
		
		<?php echo (isset($halaman) && $halaman == 'home') ? '<li>' : '<li>'; ?> 
		<?php echo anchor(base_url(), '<i class="fa fa-home"></i> Home');?></li>

		<?php echo (isset($halaman) && $halaman == 'register') ? '<li>' : '<li>'; ?> 
		<?php echo anchor('register', '<i class="fa fa-pencil"></i> Register');?></li>
		
		<?php echo (isset($halaman) && $halaman == 'ranking') ? '<li>' : '<li>'; ?> 
		<?php echo anchor('rank', '<i class="fa fa-sort-numeric-asc"></i> Ranking');?></li>

		<?php echo (isset($halaman) && $halaman == 'download') ? '<li>' : '<li>'; ?> 
		<?php echo anchor('download', '<i class="fa fa-download"></i> Download');?></li>
		

		
		</ul>
		
        <ul class="nav navbar-nav navbar-right">
		<?php echo (isset($halaman) && $halaman == 'qanda') ? '<li>' : '<li>'; ?> 
		<?php echo anchor('#', '<i class="fa fa-ticket"></i> Guide Menu');?></li>
		
		<?php if ($login_status == true) : ?>

<li class="dropdown  dropdown-hover"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
					<?php echo $this->session->userdata('UserID'); ?> <b class="caret"></b></a>
	<div class="dropdown-menu">
		<ul role="menu">
			<li><a href="<?php echo base_url(); ?>dashboard">Profil</a></li>
			<li><a href="<?php echo base_url(); ?>auth/logout">LogOut</a></li>
			</ul>
	</div>
</li>        
        <?php endif ?>
		
		<?php if ($login_status == false) : ?>
		<li><a href="<?php echo base_url(); ?>auth"><i class="fa fa-sign-in"></i> <span class="hidden-sm">Login</span></a></li>
		<?php endif ?>		
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->

  