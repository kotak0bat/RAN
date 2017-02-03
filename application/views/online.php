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
	