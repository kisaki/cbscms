<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/ckeditor/ckeditor.js" type="text/javascript"></script>
<link type="text/css" href="style.css" rel="stylesheet"  />
<link type="text/css" href="js/redmond/jquery-ui-1.8.13.custom.css" rel="stylesheet"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<script type="text/javascript"> 
$(document).ready(function () {	
	
	$('.nav li').hover(
		function () {
			//show its submenu
			$('ul', this).slideDown(100);
		}, 
		function () {
			//hide its submenu
			$('ul', this).slideUp(100);
		}
	);
	$(function(){
		$('.tabs').tabs();
	});
	$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	});
});
</script> 
<style type="text/css">
/* remove the list style */

	.nav {
		margin:0; 
		padding:0; 
		list-style:none;
		background-color:#0072bb;
	}	
	
		/* make the LI display inline */
		/* it's position relative so that position absolute */
		/* can be used in submenu */
		.nav li {
			display:inline;
			position:relative;
			z-index:500; 
			margin:0 1px;
		}
		.nav li img{
			height:18px;
			display:inline;
		}
		
		/* this is the parent menu */
		.nav li a {
			padding:0 5px; 
			text-decoration:none; 
			text-align:center; 
			color:#fff;
		}
 
		.nav li a:hover{
			color:#0072BB;
			background:#fff;
			border-bottom:2px solid #fff;
		}
		.nav li a:active{
			color:#0072BB;
		}
		/* you can make a different style for default selected value */
		.site #site, .articles #articles{
			color:#0072BB;
			background:#fff;
			border-bottom:2px solid #fff;
		}
	
		/* submenu, it's hidden by default */
		.nav ul {
			position:absolute;
			width:140px; 
			display:none; 
			padding:0;
			left:0;
			margin:0 0 0 -1px
			list-style:none;
			background:#fff;
			font-size:12pt;
			border:1px solid #0072BB;
		}
		
		.nav ul li {
			display:block;
		}
		.nav ul li img{
			height:14px;
			display:inline;
		}
		/* display block will make the link fill the whole area of LI */
		.nav ul a {
			display:block;
			padding: 3px;
			text-align:left;
			color:#0072bb;
		}
		
		.nav ul a:hover {
			text-decoration:none;
			background:#0072bb;
			color:#fff;
		}
		
 
</style> 
