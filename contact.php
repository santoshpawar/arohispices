<?php  include_once 'include/head.php';  ?>
<body>
	<!--banner-->
	<div class="banner about-banner">
		<div class="container">
			<!--header-->
			<div class="header">
				<div class="logo">
					<h1 class="wow zoomIn animated" data-wow-delay=".5s"><a href="index.php"><img src="images/logo.png"   class="logo" alt=""></a></h1>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul>
					<li class="wow slideInDown animated" data-wow-delay=".5s"><a  href="index.php">Home</a></li>
						<li class="wow slideInDown" data-wow-delay=".6s"><a  href="about.php">About</a></li>					
					<!-- 	<li class="wow slideInDown" data-wow-delay=".7s"><a href="#">Clients</a></li>
					  -->
						<li class="wow slideInDown" data-wow-delay=".7s"><a  href="products.php">Products</a></li>
						<li class="wow slideInDown" data-wow-delay=".7s"><a   href="distributer.php">Distributer</a></li>
						<li class="wow slideInDown" data-wow-delay=".9s"><a  class="active" href="contact.php">Contact</a></li>
					</ul>
					<!-- script-for-menu -->
					<script>					
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle("slow" , function(){
							});
						});
					</script>
					<!-- script-for-menu -->
				</div>
				<div class="clearfix"> </div>
			</div>	
			<!--//header-->
			<div class="bnr-text wow slideInLeft animated" data-wow-delay=".9s">
					<h3 class="bnr-title agileinfo">आरोही मसाल्याची चव लय भारी</h3>
			</div>	
		</div>	
	</div>	
	<!--//banner--> 
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">How To Find Us</h3>
			<iframe class="wow zoomIn animated animated" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d884.3576836973272!2d78.94945534075201!3d20.059767065636553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1517309551064" allowfullscreen=""></iframe>

		</div>	
	</div> 
	<div class="address"><!--address-->
		<div class="container">
		
			<div class="address-row">
				<div class="col-md-6 address-left wow agile fadeInLeft animated" data-wow-delay=".5s">
					<div class="address-grid">
						<h4 class="wow fadeIndown animated" data-wow-delay=".5s">DROP US A LINE </h4>
						<form>
							<input class="wow fadeIndown animated" data-wow-delay=".6s" type="text" placeholder="Name" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".7s" type="text" placeholder="Email" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".8s" type="text" placeholder="Subject" required="">
							<textarea class="wow fadeIndown animated" data-wow-delay=".8s" placeholder="Message" required=""></textarea>
							<input class="wow fadeIndown animated" data-wow-delay=".9s" type="submit" value="SEND">
						</form>
					</div>
				</div>
				<div class="col-md-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4>ADDRESS</h4>
						<p>Arohi enterprises Opp-lodha hospital, shetkari mandir road, Tal- Wani Dist -Yavatmal, 445304</p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
						<h4>Mobile </h4>
						<p>72640 15828, 7264015828, 7360109256, 7517901508</p>
					 
					</div>
					<div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
						<h4>MAIL</h4>
						<p><a href="mailto:sales@arohispices.com"> sales@arohispices.com</a></p>
						 
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<!--//contact--> 
	<!--footer-->
<?php
	include_once 'include/footer.php';
	 ?>