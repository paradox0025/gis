<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name" />
	<link rel="stylesheet" type="text/css" href="css/wstmgt.css" title="m4" media="screen,projection" />
</head>
<body>
<div id="container" >
	<div id="header">
		<h1>WASTE MANAGEMENT SYSTEM</h1>
		<h2>Asystem intended to improve solid waste management activities</h2>
	</div>

	<div id="navigation">
		<ul>
			<li class="selected"><a href="index.php">LOGIN</a></li>
			<li><a href=""></a></li>
			<li><a href=""></a></li>
			<li><a href=""></a></li>
            <li><a href=""></a></li>
			<li><a href=""></a></li>
		</ul>
	</div>

	<div id="content">
				<div class="met_fet">
            <div id="met_fet-header">ADMINISTRATOR LOGIN</div>
            <div id="met_fet-main" class="clearfix">
		<h1>Bye <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<?php 
session_start();
session_destroy();
header("location: index.php");
?>
            	</div>
				</div>
	</div>
  <div id="footer">
  <div id="copyright">
<p>&copy; 2017 | Resilient African Network Hackathon</p>
</div><!--end copyright-->
</div>
	

</div>
</body>
</html>