<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>{pagetitle}</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="/"><img src="images/logo.png" alt="LOGO" height="52" width="362"></a>
			</div>
			<ul class="navigation">
				<li class="<?=($this->uri->segment(1)==='welcome' || $this->uri->segment(1)===null)?'active':''?>">
					<a href="/">Home</a>
				</li>
				<li class="<?=($this->uri->segment(1)==='about')?'active':''?>">
					<a href="/about">About</a>
				</li>
				<li class="<?=($this->uri->segment(1)==='practices')?'active':''?>">
					<a href="/practices">Practices</a>
				</li>
				<li class="<?=($this->uri->segment(1)==='lawyers')?'active':''?>">
					<a href="/lawyers">Our Lawyers</a>
				</li>
				<li class="<?=($this->uri->segment(1)==='news')?'active':''?>">
					<a href="/news">News</a>
					<div>
						<a href="/singlepost">News Single Post</a>
					</div>
				</li>
				<li class="<?=($this->uri->segment(1)==='contact')?'active':''?>">
					<a href="/contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
	{content}
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link.
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> the address city, state 1111
				</p>
				<p>
					<span>Phone:</span> (+20) 000 222 999
				</p>
				<p>
					<span>Email:</span> info@freewebsitetemplates.com
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<a href="http://www.freewebsitetemplates.com/misc/contact/" class="subscribe">Click to send us an email</a>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2023 Manes Winchester. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>