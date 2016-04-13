<?php 
$this->load->view('layout/head');
?>
<!-- tambahkan css di sini -->

<!-- batas penambahan css -->
<?php
$this->load->view('layout/topbar');
$this->load->view('layout/sidebar');
?>

	<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 		<div class="box-body">
				    <h1>
				    	CONTENT
				    </h1>

		</div>
	
	<!--//faq-->
		<!---->
<div class="copy">
            <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<?php 
$this->load->view('layout/js');
?>
<!--tambahkan custom js disini-->

<!--batas custom js disini-->
<?php
$this->load->view('layout/foot');
?>