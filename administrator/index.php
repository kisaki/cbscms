<?php
require_once('../include/sessionentry.php');
$sentry = new SessionEntry();
if(!$sentry->checkLogin(2)){
	 header('Location: login-form.php');
	 die();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CBS Law offices | Administration</title>
<?php include('scripts.php'); ?>
</head>

<body id="wrapper" class="site">
	
	<div id="header">
		<?php include('header.php'); ?>
	</div>

	<div id="top_nav">
			<?php include('navigation.php'); ?>
	</div>

	<div id="content">
		<h2>Welcome!..</h2>
		<p>
			This is home page of the mariedo website, visitors are incouraged to take a look of new products
			available in our shop by either clicking on the top navigation panel specific category or by selecting
			one of the thumbnails listed below which displays recents products in our store.
		</p>
		<p>
			You can also register or login to view your account status, making new orders, tracking your orders as well
			as manage them to make a merchandize etc...
		</p>
	</div>

	<div id="footer">
		<?php include('footer.php'); ?>
	</div>

</body>
</html>
