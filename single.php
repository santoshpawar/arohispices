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
						<li class="wow slideInDown animated" data-wow-delay=".5s"><a class="active" href="index.php">Home</a></li>
						<li class="wow slideInDown" data-wow-delay=".6s"><a href="about.php">About</a></li>					
						<li class="wow slideInDown" data-wow-delay=".7s"><a href="#">Clients</a></li>
						<li class="wow slideInDown" data-wow-delay=".7s"><a href="gallery.php">Services</a></li>
						 
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
			<div class="bnr-text wow slideInLeft animated" data-wow-delay=".9s">
				<h2 class="bnr-title">Traditional baking of food</h2>
			</div>	
		</div>	
	</div>	
	<!--//banner--> 
	<!--single-page-->
	<div class="blog single-page">
		<div class="container">
			<div class="blog-info">
				<div class="blog-left wow slideInLeft animated" data-wow-delay=".5s">
					<h6>25<span>th</span></h6>
					<h5>April</h5>
				</div>
				<div class="blog-right wow slideInRight animated" data-wow-delay=".5s">
					<div class="blog-img">
						<img src="images/img6.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="blog-text">
						<h4 class="w3l wow fadeInDown animated" data-wow-delay=".5s">Integer interdum eros vitae sem ultrices sed eleifend tellus tincidunt</h4>
						<p class="wow fadeInDown animated" data-wow-delay=".5s">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur,Duis aute irure dolor in quis nostrud exercitation ullamco
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur</p>
						<div class="article-links wow fadeInDown animated" data-wow-delay=".7s">
							<ul>
								<li><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span>April 25, 2016</span></li>
								<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i><span>Admin</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><span>No comments</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i><span>View posts</span></a></li>
								<li><a href="#"><i class="glyphicon glyphicon-link" aria-hidden="true"></i><span>Permalink</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> 
			<!--admin-text-->
			<div class="admin-text wthree wow fadeInDown animated" data-wow-delay=".5s">
				<h5>Written By Admin</h5>
				<div class="admin-text-left">
					<a href="#"><img src="images/icon1.png" alt=""/></a>
				</div>
				<div class="admin-text-right">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<span>View all posts by:<a href="#"> Admin </a></span>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!--//admin-text--> 
			<!--related-posts-->
			<div class="row related-posts agile">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Related Posts</h3>
				<div class="col-xs-3 col-md-3 related-grids wow zoomIn animated" data-wow-delay=".5s">
					<a href="single.php" class="thumbnail">
						<img src="images/g7.jpg" alt=""/>
					</a>
					<h5><a href="single.php">Lorem Ipsum is simply</a></h5>
				</div>	
				<div class="col-xs-3 col-md-3 related-grids wow zoomIn animated" data-wow-delay=".5s">
					<a href="single.php" class="thumbnail">
						<img src="images/g3.jpg" alt=""/>
					</a>
					<h5><a href="single.php">Lorem Ipsum is simply</a></h5>
				</div>
				<div class="col-xs-3 col-md-3 related-grids wow zoomIn animated" data-wow-delay=".6s">
					<a href="single.php" class="thumbnail">
						<img src="images/g5.jpg" alt=""/>
					</a>
					<h5><a href="single.php">Lorem Ipsum is simply</a></h5>
				</div>
				<div class="col-xs-3 col-md-3 related-grids agileits wow zoomIn animated" data-wow-delay=".6s">
					<a href="single.php" class="thumbnail">
						<img src="images/g7.jpg" alt=""/>
					</a>
					<h5><a href="single.php">Lorem Ipsum is simply</a></h5>
				</div>					
			</div>				
			<!--//related-posts-->
			<!--comments-->
			<div class="comment-grid-top">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Responses</h3>
				<div class="comments-top-top wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="top-comment-left">
						<a href="#"><img class="img-responsive" src="images/icon1.png" alt=""></a>
					</div>
					<div class="top-comment-right">
						<ul>
							<li><span class="left-at"><a href="#">Admin</a></span></li>
							<li><span class="right-at">April 28, 2016 at 10.30am</span></li>
							<li><a class="reply" href="#">Reply</a></li>
						</ul>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="comments-top-top top-grid-comment wow fadeInRight animated" data-wow-delay=".5s">
					<div class="top-comment-left">
						<a href="#"><img class="img-responsive" src="images/icon1.png" alt=""></a>
					</div>
					<div class="top-comment-right w3">
						<ul>
							<li><span class="left-at"><a href="#">Admin</a></span></li>
							<li><span class="right-at">May 18, 2016 at 10.30am</span></li>
							<li><a class="reply" href="#">Reply</a></li>
						</ul>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less </p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//comments-->
			<div class="artical-commentbox">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">leave a comment</h3>
				<div class="table-form agileinfo">
					<form>
						<input class="wow fadeInDown animated" data-wow-delay=".5s" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						<input class="wow fadeInDown animated" data-wow-delay=".6s" type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						<input class="wow fadeInDown animated" data-wow-delay=".7s" type="text" value="Phone number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone number';}">
						<textarea class="wow fadeInDown animated" data-wow-delay=".7s" value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>	
						<input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="Send">
					</form>
				</div>
			</div>	
		</div>	
	</div>	
	<!--//blog-->	
	<?php
	include_once 'include/footer.php';
	 ?>