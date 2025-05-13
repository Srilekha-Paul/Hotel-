<?php include("admin/inc/db.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>MR Hotel </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mr Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!--google fonts-->
<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header-top start here-->
<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-social wow bounceInLeft" data-wow-delay="0.3s">
			   
			</div>
			<div class="col-md-8 header-address wow bounceInRight" data-wow-delay="0.3s">
				<ul>
					<li><span class="phone"> </span> <h6>6289840133</h6></li>
					<li><span class="email"> </span><h6><a href="mailto:info@example.com">twinklesardar7@gmail.com</a></h6></li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-top end here-->
<!--header start here-->
	<!-- NAVBAR
		================================================== -->
<div class="header">
	<div class="fixed-header">	

		    <div class="navbar-wrapper">
		      <div class="container">
			  <?php include("inc/menu.php");?>

		            </div>
		            <div class="clearfix"> </div>
		             </nav>
		          </div>
		           <div class="clearfix"> </div>
		    </div>
	 </div>
</div>
<!--header end here-->
<!--room start here-->
<div class="rooms">
	<div class="container">
		<div class="rooms-main">
			 <div class="room-head">
			 	<h3>Rooms</h3>
			 </div>
			 <div class="rooms-top">
			 <?php
$sel="SELECT * FROM moon";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){
?>

			    <div class="rooms-left wow slideInLeft" data-wow-delay="0.3s">
				 	<div class="col-md-4 rooms-text">
				 		<h2><?php echo $row['name']; ?></h2>
				 		<p><?php echo $row['description']; ?></p>
						 <h3>NO OF ROOMS :<?php echo $row['no_of_rooms']; ?></h3>
						 <h3>AVAILABLE ROOMS :<?php echo $row['available_rooms']; ?></h3>
				 	    <div class="room-btn">
				 	     <h3>Rent: <?php echo $row['rent']; ?> /Day</h3>	
				 	    </div>		 	    
				 	</div>
				 	<div class="col-md-8 rooms-img">
				 		<div class="luxury-block">
				 		 <a href="#"> <img style="width:300px" src="admin/room_pic/<?php echo $row['picture']; ?>" alt="" class="img-responsive"></a>		
						</div>
				 	</div>				 
				  <div class="clearfix"> </div>
			    </div>

				<?php 
} 

?>
			 
			 </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--gallery start here-->

<!--gallery end here-->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>

<!--room end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-3 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<div class="ftr-logo">
				<img src="images/ftr-logo.png"  alt="">
				</div>
				
				
			</div>
			<div class="col-md-3 ftr-grid ftr-mid wow zoomIn" data-wow-delay="0.3s">
				 <h3>Address</h3>
				 <span class="ftr-line flm"> </span>
				 <p>1 1/2 gariahat</p>
				 <p>Road South Jodhpur park</p>
				 <p>700048</p>
				 <p>6289840133</p>
				 <p>MR Hotel</p>
				
			</div>
			<div class="col-md-3 ftr-grid ftr-rit wow zoomIn" data-wow-delay="0.3s">
				 <h3>Contact Us</h3>
				 <form>
				 	<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				 	<input type="submit" value="Send" />
				 </form>
				  
			</div>
			<div class="col-md-3 ftr-grid ftr-last-gd ftr-rit wow zoomIn" data-wow-delay="0.3s">
				 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--footer end here-->
<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main wow zoomIn" data-wow-delay="0.3s">
    	    <p>MR Hotel. All Rights Reserved | Design by Group 6 </p>
    	 </div>
    </div>
</div>
</body>
</html>