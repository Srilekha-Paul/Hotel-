
<!DOCTYPE HTML>
<html>
<head>
<title>MR Hotel a Hotel Category Flat Bootstrap Responsive  Website Template | Contact :: w3layouts</title>
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
					<li><span class="phone"> </span> <h6>7811054608</h6></li>
					<li><span class="email"> </span><h6><a href="mailto:info@example.com">Srilekhapaul@2003@gmail.com</a></h6></li>
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
		    </div>
	 </div>
</div>
<!--header end here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h2>BOOK NOW</h2>
			</div>
			<div class="contact-bottom">


			<?php
if(isset($_POST['submit'])){




$con=mysqli_connect("localhost","root","","hotel");
$ins="INSERT INTO booking SET name='$n',email='$e',phone_no='$phone', no_of_rooms='$norooms',room_type='$roomtype',address='$address'";
$con->query($ins);
header("location:book_room.php");

}


?> 

			
				<div class="col-md-9 contact-left">
					<form action="ins_book.php" method="post" enctype="multipart/form-data">
						

					
						<input type="text" placeholder="name" name="name">
						
					
						 <input type="text" class="email"  placeholder="email" name="email">                      

						 <input type="text"   placeholder="Phone number" name="phone_no">  
						 
						 <input type="text"   placeholder="No of room" name="no_of_room"> 

						
						
						<p>Room type</p>
						<p>
							<select name="room_type">
								<option value="">-select-</option>
								<option value="Single Room">-Single Room-</option>
								<option value="Double Room">-Double Room-</option>
                            </select>
                        </p>
						<p>ADDRESS</p>
						<p><textarea name="address"></textarea></p>


						<label for="">Entry Date</label>
						<input type="date" placeholder="Entry Date" name="entry_date">

						<label for="">Out Date</label>
						<input type="date" placeholder="Out Date" name="out_date">

						<input type="submit" value="check" name="check">
						<input type="submit" value="submit" name="submit">
					</table>

					</form>

				</div>


		
				<div class="col-md-3 contact-right">
					<h1>CONNECT WITH US</h1>
					<p>Company Office</p>
					<p>Kolkata</p>
					<p>PH NO:7811054608</p>
					<p><a href="mailto:info@example.com">EMAIL:Srilekhapaul@2003@gmail.com</a></p>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->
<!--map start here-->
<div class="map">
  <div class="container">
	<h1>Location</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117952.79827829143!2d88.21202839726561!3d22.503247199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027180f2294f37%3A0xc2412650ad747817!2sWomen&#39;s%20polytechnic%2C%20Kolkata!5e0!3m2!1sen!2sin!4v1681814517287!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>
</div>
<!--map end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-3 ftr-grid wow zoomIn" data-wow-delay="0.3s">
				<div class="ftr-logo">
				<img src="images/ftr-logo.png"  alt="">
				</div>
				<p></p>
				<a href="single.html" class="ftr-btn"></a>
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
    	    <p>MR Hotel. All Rights Reserved | </p>
    	 </div>
    </div>
  
</div>
</form>
</body>
</html>