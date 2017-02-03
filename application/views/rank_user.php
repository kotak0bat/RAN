
<!DOCTYPE html>
<!--
  Name: Youplay - Game Template based on Bootstrap
  Version: 3.1.1
  Author: nK
  Website: https://nkdev.info
  Support: https://nk.ticksy.com
  Purchase: http://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK
  License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
  Copyright 2016.
-->
<html>

<head>

  <title>K.O RAN INDONESIA</title>

	<meta name="keywords" content="RAN;RAN ONLINE;K.O RAN;K.O RAN INDONESIA">
    <meta name="description" content="K.O RAN INDONESIA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
	<meta charset="utf-8">


  <!-- Icon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ranonline.ico">
  
  <!-- CSS -->
    <!-- Google Fonts -->
  <link href='<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" />

  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" />

  <!-- Owl Carousel -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />

  <!-- Youplay -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/youplay/css/youplay.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css" />

  <!-- RTL (uncomment this to enable RTL support) -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/youplay/css/youplay-rtl.css" /> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datatables.min.css" />
	
	<script src="<?php echo base_url(); ?>datatables/media/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/youplay/js/datatables.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
          table = $('#table').DataTable({ 
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
			"pageLength": 25,

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('rank/ajax_list')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
            { 
              "targets": [ -1 ], //last column
              "orderable": false, //set not orderable
            },
            ],

          });
        });

     </script>
</head>
<body>
<!-- Menu -->
  <!-- Navbar -->
    <?php
        $login_status = $this->session->userdata('login_status');
        $user_level = $this->session->userdata('user_level');
        if ($login_status === true) {
            $this->load->view('navbar');
        } else {
            $this->load->view('navbar');
        }
    ?>
  <!-- /Navbar -->
  <!-- Main Content -->
<section class="content-wrap">

<div class="youplay-banner banner-top youplay-banner-parallax small">
  <div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/game-kingdoms-of-amalur-reckoning-3-1920x1080.jpg')">
  </div>

  <div class="info">
    <div>
      <div class="container">
        <h1>Ranking</h1>
      </div>
    </div>
  </div>
</div>


<div class="container youplay-content">
    
    <div class="container">
        <div class="box col-sm-12">
            <h2 class="mt-0">Players Ranking</h2>

<table id="table" class="ranking-table data-table table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>

                <th>No</th>
				<th>Name</th>
                <th>Level</th>
				<th>Class</th>
				<th>School</th>
				<th>Win</th>
				<th>Loss</th>

            </tr>
        </thead>
        <tfoot>
            <tr>

                <th>No</th>
				<th>Name</th>
                <th>Level</th>
				<th>Class</th>
				<th>School</th>
				<th>Win</th>
				<th>Loss</th>
				

            </tr>
        </tfoot>
		
    </table>
 
        </div>
        <!-- /.col-sm-6 -->
    </div>
    <!-- /.container -->

</div>


  </section>
  <!-- /Main Content -->

  

   <!-- Footer -->
    <!-- Footer -->
    <footer class="youplay-footer-parallax">
      <div class="wrapper" style="background-image: url('<?php echo base_url(); ?>assets/images/footer-bg.jpg')">

        <!-- Social Buttons -->
        <div class="social">
          <div class="container">
            <h3>Connect socially with <strong>K.O RAN INDONESIA</strong></h3>

            <div class="social-icons">
              <div class="social-icon">
                <a href="https://www.facebook.com/RanOnlineKO/">
                  <i class="fa fa-facebook-square"></i>
                  <span>We Now on Facebook</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-twitter-square"></i>
                  <span>Follow on Twitter</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-twitch"></i>
                  <span>Watch on Twitch</span>
                </a>
              </div>
              <div class="social-icon">
                <a href="#!">
                  <i class="fa fa-youtube-square"></i>
                  <span>Watch on Youtube</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
          <div class="container">
            <strong>K.O RAN INDONESIA</strong> &copy; 2016. All rights reserved<br>
			Support <a href="https://swatcommunity.com" target=_blank>swatcommunity</a>
          </div>
        </div>
        <!-- /Copyright -->

      </div>
    </footer>
    <!-- /Footer -->    <!-- Preloader -->
  <div class="page-preloader preloader-wrapp">
    <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
    <div class="preloader"></div>
  </div>
  <!-- /Preloader -->
  


  <!-- Hexagon Progress -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/HexagonProgress/jquery.hexagonprogress.min.js"></script>


  <!-- Bootstrap -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- Jarallax -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/jarallax/dist/jarallax.min.js"></script>

  <!-- Smooth Scroll -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/smoothscroll-for-websites/SmoothScroll.js"></script>

  <!-- Owl Carousel -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

  <!-- Countdown -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js"></script>

  <!-- Moment.js -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
  
  <!-- Youplay -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/youplay/js/youplay.min.js"></script>

  <!-- init youplay -->
  <script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            // enable parallax
            parallax:         true,
    
            // set small navbar on load
            navbarSmall:      false,
    
            // enable fade effect between pages
            fadeBetweenPages: true,
    
            
            
        });
    }
  </script>


  <script type="text/javascript">
    $(".countdown").each(function() {
        var tz = $(this).attr('data-timezone');
        var end = $(this).attr('data-end');
            end = moment.tz(end, tz).toDate();
        $(this).countdown(end, function(event) {
          $(this).text(
            event.strftime('%D days %H:%M:%S')
          );
        });
    })
  </script>    <!-- /Footer -->
</body>

</html>