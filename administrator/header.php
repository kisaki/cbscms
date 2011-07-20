<a href="/administrator/" title="Administration home">
	<h1>CBS Law offices | Administration</h1>
</a>
<?php
	if($_SESSION['user'] != ''){
?>
<div id="current">
	Currently as<br/>
	<b><u><?php echo $_SESSION['user']; ?></u></b><br/>
	<a href="login-form.php?action=logout" title="Logout">Logout</a>
</div>
<?php } ?>
