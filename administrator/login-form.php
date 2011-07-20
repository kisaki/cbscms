<?php
require_once('../include/sessionentry.php');

$sentry = new SessionEntry();
$message = null;
if($_POST['username'] != ''){
	$sentry->checkLogin($_POST['username'],$_POST['password'],4,'index.php','login-form.php');
}

if ($_GET['action'] == 'logout'){
	if ($sentry->logout()){
		$message = '<center>You have been logged out</center><br>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CBS Law offices | Administration</title>
<?php include('scripts.php'); ?>
</head>

<body id="wrapper">

	<div id="header">
		<?php include('header.php'); ?>
	</div>

	<div id="content">
		<center>
			<?php echo $message; ?>
		<div class="ui-widget" style="width:40%">
			<div class="ui-widget-header ui-corner-top">
				<b>Only registered users can login!</b>
			</div>
			<div class="ui-widget-content ui-corner-bottom">
			<form method="POST" action="login-form.php">
				<table>
					<tr><td>username:</td><td><input type="text" name="username" style="width:180px;"/></td></tr>
					<tr><td>password:</td><td><input type="password" name="password" style="width:180px;"/></td></tr>
					<tr><td colspan="2" align="center">
						<input type="submit" value="login" />
						<input type="reset" value="reset" />
				   </td></tr>
				</table>
			</form>
			</div>
		</div>
		</center>
	</div>

	<div id="footer">
		<?php include('footer.php'); ?>
	</div>

</body>
</html>
