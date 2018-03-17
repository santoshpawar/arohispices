<?php  include_once 'include/head.php';  ?>
<body>
	<!--banner-->
	<div class="banner">
		<div class="container">
			<!--header-->
			<div class="header">
				<div class="logo">
					<h1 class="wow zoomIn animated" data-wow-delay=".5s"><a href="index.php"><img src="images/logo.png"   class="logo" alt=""> 
						<!-- <span class="logotext">चवदार चविष्ट </span> --></a></h1>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
					<ul>
						<li class="wow slideInDown animated" data-wow-delay=".5s"><a class="active" href="index.php">Home</a></li>
						<li class="wow slideInDown" data-wow-delay=".6s"><a href="about.php">About</a></li>					
					 
						<li class="wow slideInDown" data-wow-delay=".7s"><a href="products.php">Products</a></li>
						 <li class="wow slideInDown" data-wow-delay=".7s"><a   href="distributer.php">Distributer</a></li>
						<li class="wow slideInDown" data-wow-delay=".9s"><a href="contact.php">Contact</a></li>
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
			<div class="bnr-text wow slideInUp animated" data-wow-delay=".5s">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<h2 class="bnr-title">Arohi Spices चवदार - चवीष्ट</h2>
							<p>One of the things that people find intimidating about cooking Indian food is the vast array of spices used </p>								
						</li>
						<li>								
							<h3 class="bnr-title">Garam Masala - The Magic Spice</h3>
							<p>Indian cuisine encompasses a wide variety of regional cuisines. Indian food is influenced by religious and cultural choices,hence considered as an art.</p>
						</li>
						<li>
							<h3 class="bnr-title">One popular spice mix is garam masalas</h3>
							<p>The traditional food of India has been widely appreciated for its best use of herbs and spices</p>
						</li>
					</ul>
					<div class="clearfix"></div>
					<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
					<!--End-slider-script-->
				</div>
				<a href="#" class="more more-right">More About</a>
				<a href="#" class="more more-left">Learn More</a>
			</div>
		</div>	
	</div>	
	<!--//banner--> 
	<!--welcome-->
	<div class="welcome">
		<div class="container">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">What About us </h3>
			<div class="welcome-info">
				<div class="col-md-4 welcome-left w3l wow slideInLeft animated" data-wow-delay=".5s">
					
				</div>
				<div class="col-md-8 welcome-right w3l">
					<div class="welcome-text wow fadeInDown animated" data-wow-delay=".5s">
						 
						<div class="col-md-10 wtext-right">
							<h4>Cardamom</h4>
							<p>here are two kinds of cardamom used in Indian cooking: green and black</p>
						</div>
						<div class="clearfix"> </div>
						<div class="welcome-bars">
						<!-- 	<label>60%</label> -->
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
								</div>
							</div>
						</div>
					</div>
					<div class="welcome-text wow fadeInDown animated" data-wow-delay=".7s">
						 
						<div class="col-md-10 wtext-right">
							<h4>Clove</h4>
							<p>Clove is a common spice in Indian cooking and its anise notes are easily recognizable in many Indian preparations</p>
						</div>
						<div class="clearfix"> </div>
						<div class="welcome-bars">
							<!-- <label class="bar2">82%</label> -->
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
								</div>
							</div>
						</div>
					</div>	
					<div class="welcome-text w3l wow fadeInDown animated" data-wow-delay=".9s">
						 
						<div class="col-md-10 wtext-right">
							<h4>Cassia bark</h4>
							<p>Cassia bark is an interesting spice. Also known as Chinese cinnamon, it is a genus of the cinnamon tree</p>
						</div>
						<div class="clearfix"> </div>
						<div class="welcome-bars agile">
						<!-- 	<label class="bar3">45%</label> -->
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="clearfix"> </div>
			</div>	
		</div>	
	</div>	
	<!--//welcome--> 
	<!--menu-form-->
	<div class="menu-form">
		<div class="menu-info">
			<h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Our Products</h3>
			<div class="scrollbar scrollbar1">
				<div class="menu-grids agile wow fadeInDown animated" data-wow-delay=".5s">
					<div class="menu-left">
						<h4>Arohi red chilli powder</h4>
						<p>आरोही लाल मिरची पावडर( Arohi red chilli powder) Chili powder is the dried, pulverized fruit of one or more varieties of chili pepper</p>
					</div>
					<div class="menu-right">
						<h5>Rs.120</h5>
					</div>
					<div class="clearfix"> </div>
				</div>	
				<div class="menu-grids menu-grids-mdl wow fadeInDown animated" data-wow-delay=".6s">
					<div class="menu-left">
						<h4>Arohi banana chips</h4>
						<p>Arohi banana chips made out of yellow bananas with salted,masala,tomato,ginger,kalimiri,ani mix masala falvours are an all-time favourite all over the country</p>
					</div>
					<div class="menu-right">
						<h5>Rs.200</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids wow fadeInDown animated" data-wow-delay=".7s">
					<div class="menu-left">
						<h4>आरोही आंबा लोणचे</h4>
						<p>Buy pickles in India like Mango pickle, garlic pickle and homemade pickles </p>
					</div>
					<div class="menu-right">
						<h5>Rs.150</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- <div class="menu-grids menu-grids-mdl">
					<div class="menu-left">
						<h4>arohi sabudana mix papad</h4>
						<p> </p>
					</div>
					<div class="menu-right">
						<h5>Rs.20</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids">
					<div class="menu-left">
						<h4> Calamari </h4>
						<p>Vestibulum porttitor eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
					</div>
					<div class="menu-right">
						<h5>Rs.25</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids menu-grids-mdl">
					<div class="menu-left">
						<h4> Twinkies </h4>
						<p>Dignissimos porttitor vestibulum eu nisl ducimus qui blanditiis praesentium voluptatum</p>
					</div>
					<div class="menu-right">
						<h5>Rs.20</h5>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="menu-grids">
					<div class="menu-left">
						<h4> Beignets </h4>
						<p>Porttitor vestibulum eu nisl dignissimos ducimus qui blanditiis praesentium voluptatum</p>
					</div>
					<div class="menu-right">
						<h5>Rs.11</h5>
					</div>
					<div class="clearfix"> </div>
				</div> -->
			</div>
		</div>
	</div>	
	<!--//menu-form--> 
	<!--reservation-->
	<div class="reservation">
		<div class="container">
			<h3 class="title w3agile wow fadeInDown animated" data-wow-delay=".5s">Order in bulk</h3>
			<div class="book-info">
				<div class="col-md-5 book-left wow fadeInLeft animated" data-wow-delay=".5s">
					<h4 class="wow fadeInDown animated" data-wow-delay=".5s">Working Hours:</h4>
					<h5 class="wow fadeInDown animated" data-wow-delay=".6s">Monday – Sunday 8:00 a.m – 11:00 p.m <br>
						Sunday 10 a.m – 9 p.m <br>
						<span class="glyphicon glyphicon-earphone"></span>7264015828, 7264015828, 7360109256, 7517901508</h5>
					<span class="burger wow zoomIn animated" data-wow-delay=".7s"> </span>
				</div>
				<div class="col-md-7 book-right agileinfo wow fadeInRight animated" data-wow-delay=".5s">
					<form>
						<label class="wow fadeInDown animated" data-wow-delay=".5s">Date :</label>
						<input class="wow fadeInDown animated" data-wow-delay=".5s"type="date">
						<div class="form-left wow fadeInDown animated" data-wow-delay=".7s">
							<label>Products :</label>
							<select class="form-control">
								<option>Arohi red chilli powder</option>
								<option>Arohi banana chips</option>
								 
							</select>
						</div>
						<div class="form-right wow fadeInDown animated" data-wow-delay=".7s">
							<label>Quantity :</label>
							<input type="time">
						</div>
						<div class="clearfix"> </div>
						<label class="wow fadeInDown animated" data-wow-delay=".9s">Contact Info :</label>
						<input class="wow fadeInDown animated" data-wow-delay=".9s" type="text" value="Contact Info" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact';}" required="">
						<input type="submit" value="Order">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--//reservation-->
	<?php
	include_once 'include/footer.php';
	 ?>