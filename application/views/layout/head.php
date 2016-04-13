<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<?php
	header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
	header( 'Cache-Control: post-check=0, pre-check=0', false ); 
	header( 'Pragma: no-cache' ); 
?>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Blank :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> 
addEventListener("load", function() {
 setTimeout(hideURLbar, 0); 
 },
  false);
   function hideURLbar(){
    window.scrollTo(0,1); 
    }
  </script>
<link href="<?= base_url('assets/template/minimal/css/bootstrap.min.css') ?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?= base_url('assets/template/minimal/css/style.css') ?>" rel='stylesheet' type='text/css' />
<link href="<?= base_url('assets/template/minimal/css/font-awesome.css')?>" rel="stylesheet"> 
<link href="<?= base_url('assets/plugins/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet"> 
<script src="<?= base_url('assets/template/minimal/js/jquery.min.js')?>"> </script>
<script src="<?= base_url('assets/template/minimal/js/bootstrap.min.js')?>"> </script>
  
<!-- Mainly scripts -->
<script src="<?= base_url('assets/template/minimal/js/jquery.metisMenu.js')?>"></script>
<script src="<?= base_url('assets/template/minimal/js/jquery.slimscroll.min.js')?>"></script>
<!-- Custom and plugin javascript -->
<link href="<?= base_url('assets/template/minimal/css/custom.css')?>" rel="stylesheet">
<link href="<?= base_url('assets/css/custom-template.css')?>" rel="stylesheet">
<script src="<?= base_url('assets/template/minimal/js/custom.js')?>"></script>
<script src="<?= base_url('assets/template/minimal/js/screenfull.js')?>"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>
