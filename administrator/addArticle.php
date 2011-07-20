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

<body id="wrapper" class="articles">
	
	<div id="header">
		<?php include('header.php'); ?>
	</div>

	<div id="top_nav">
			<?php include('navigation.php'); ?>
	</div>

	<div id="content">
			<form method="post"	action="">
			<div class="tabs">
				<h3>New Article</h3>
				<ul>
					<li><a href="#tab1">Common Details</a></li>
					<li><a href="#tab2">Advanced Options</a></li>
				</ul>
				<div id="tab1">				
				<table>
					<tr>
						<td>Name:</td><td><input name="name" type="text" /></td>
						<td>Title:</td><td><input name="title" type="text" /></td>
					</tr>
					<tr>
						<td>Type:</td>
						<td>
							<select name="type">
								<option>--select--</option>
							</select>
						</td>
						<td>Date:</td><td><input name="date" type="text" id="datepicker" /></td>
					</tr>
					<tr>
						<td>Parent:</td>
						<td colspan="3">
							<select name="parent">
								<option>--select--</option>
							</select>
						</td>
					</tr>					
					<tr>
						<td valign="top">Body:</td>
						<td colspan="3">
							<textarea name="body" class="ckeditor" cols="60" rows="20"></textarea>
						</td>
					</tr>
				</table>
				</div>
				<div id="tab2">
				<table style="width:100%">
					<tr style="color:#fff; background:#666;">
						<th colspan="2">Metadata</th><th colspan="2">Other</th>
					</tr>
					<tr>
						<td>Keywords:</td><td><input name="keywords" type="text" /></td>
						<td>Tags:</td><td><input name="tags" type="text" /></td>
					</tr>
					<tr>
						<td>Description:</td><td><input name="description" type="text" /></td>
						<td>&nbsp;</td><td>&nbsp;</td>
					</tr>
				</table>
				</div>
				<span style="float:right;"><input type="submit" value="submit"/><input type="reset" value="clear"/></span>
			</div>
			</form>
	</div>

	<div id="footer">
		<?php include('footer.php'); ?>
	</div>

</body>
</html>
