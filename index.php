<?php
// common variables and functions
include_once('include/commuter.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?> - CBS Law Offices</title>
	<link type="text/css" href="theme/ocean/style.css" rel="stylesheet" />
</head>
<body class="<?php echo $page_type; ?>">
	<div id="pics"><img src="/images/now.jpg"/><img src="/images/now1.jpg" /></div>
	<div id="header">
		<a href="/"><img src="images/logo.jpg" /></a>
		<div id="nav">
			<ul>
				<li><a href="#" id="home">Home</a></li>
				<li><a href="#" id="profile">Profiles</a></li>
				<li><a href="#" id="about">About us</a></li>
				<li><a href="#" id="contact">Contact us</a></li>
			</ul>
		</div>
	</div>
	
	<div id="content">
		<?php
			echo $page_body;
		?>
	</div>

	<div id="extra">
		<h3>Some other news summaries in here..</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pharetra pharetra sapien, ut volutpat massa luctus in. Nulla semper nibh non erat tempus sit amet vestibulum elit iaculis. Suspendisse aliquam tellus erat, ut tempus massa. Pellentesque imperdiet metus ut augue fermentum commodo nec sed enim. Fusce accumsan aliquam justo in ultricies. Donec at erat libero. Praesent gravida, enim a luctus posuere, tortor tortor molestie felis, eget euismod metus nulla quis lectus.

		</p>
		<br/><br/>
		<h3>Ads can also go here..</h3>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pharetra pharetra sapien, ut volutpat massa luctus in. Nulla semper nibh non erat tempus sit amet vestibulum elit iaculis. Suspendisse aliquam tellus erat, ut tempus massa. Pellentesque imperdiet metus ut augue fermentum commodo nec sed enim. Fusce accumsan aliquam justo in ultricies. Donec at erat libero. Praesent gravida, enim a luctus posuere, tortor tortor molestie felis, eget euismod metus nulla quis lectus.

		</p>
	</div>

	<div id="footer">
		<a href="#">Home</a> | 
		<a href="#">Profiles</a> | 
		<a href="#">About us</a> | 
		<a href="#">Contact us</a>
		<br/><br />
		&copy; cbs law offices. All rights reserved
	</div>
</body>
</html>

