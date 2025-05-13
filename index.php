
<!DOCTYPE HTML>
<html>
<head>
<title>MR HOTEL </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />	
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
<script src="js/modernizr.js"></script>
<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".branch-gd").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".branch-gd").hasClass("hover")) {
                    $(this).closest(".branch-gd").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".branch-gd").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>
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
					<li><span class="email"> </span><h6><a href="mailto:info@example.com">Srilekhapaul2003@gmail.com</a></h6></li>
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
<!--banner  start hwew-->
<div class="banner">
	<div class="container">
		<div class="banner-main wow zoomIn" data-wow-delay="0.3s">
			<h2>MR HOTEL</h2>
			<h6>Welcome To Our Hotels</h6>
			
		</div>
    </div>
</div>
<!--BANNER END HERE-->
<!--information start here-->
<div class="information">
	<div class="container">
		<div class="information-main">
			  <div class="information-grid five-star wow slideInLeft" data-wow-delay="0.3s">
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s1.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>star Hotel</h4>
			  			<p>Located on the south kolkata.It is the largest hotel in south kolkata.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s2.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>services</h4>
			  			<p>24 hours services available</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s4.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Secure</h4>
			  			<p>One of the most important aspect that talks about customer satisfaction in the hospitality industry is security.The guard and keep an eyy over every movement that is happening in and around through these CCTVs.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="clearfix"> </div>
			  </div>
			  <div class="information-grid wow slideInRight" data-wow-delay="0.3s">
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s3.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Food</h4>
			  			<p>Hot & cold dishes available at breakfast.</p>
						<p>Veg & Non veg available</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s5.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Hotel about</h4>
			  			<p>Residences offers an outdoor swimming pool,a fitness centre and a massage and sauna centre.Whether it is a vacation with family or business trip ,everyone looks for safe hotels that have best facilities.Apart from the basic facilities,some of the exclusive places also have a spa ,kids area & it has some of best services,such as cardio equipment,strengh training equipment ,vinyasa yoga to make the stay memorable.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="col-md-4 hotel-info">
			  		<div class="info-left">
			  			<img src="images/s6.png" alt="">
			  		</div>
			  		<div class="info-right">
			  			<h4>Bell</h4>
			  			<p>If you want to eat in your room we wii also provide it.</p>
			  		</div>
			  	  <div class="clearfix"> </div>
			  	</div>
			  	<div class="clearfix"> </div>
			  </div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--information end here-->

<!--home grid end here-->
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
    	    <p>MR HOTEL . All Rights Reserved |   </p>
    	 </div>
    </div>
</div>
</body>
</html>