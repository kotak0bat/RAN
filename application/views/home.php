<?php
$host = "103.7.226.226";
$port = 5001;
$churl = @fsockopen($host, $port, $errno, $errstr, 3);
if (!$churl){
	$statussrv = '<span class="label label-danger">OFF</strong></span>';
}
else {
	$statussrv = '<span class="label label-success"><strong>ON</strong></span>';
}

?> 
 <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner banner-top youplay-banner-parallax">
      <div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/banner-bg.jpg')">
      </div>

      <div class="info">
        <div>
          <div class="container">
		  
            <h1>K.O RAN : <br>INDONESIA</h1>
            <em>"Kalahkan Semua Musuhmu"</em>
            <br>
            <br>
            <br>
            <a class="btn btn-lg" href="<?php echo base_url(); ?>download">Play Now</a>
			
          </div>
        </div>
      </div>
	  
    </section>
    <!-- /Banner -->

<h2>&nbsp; &nbsp; Game Login : <?php echo $statussrv; ?></h2>



      
    </section>