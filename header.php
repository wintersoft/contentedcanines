<?php if (!isset($prepend_path)) $prepend_path = "" ?>
<?php if (!isset($page_title)) $page_title = "Contented Canines - Christchurch Dog Walking &amp; Pet Care" ?>
<?php 

if(in_array($_SERVER["SERVER_ADDR"], array("127.0.0.1","::1"))) {
	$site_url = "http://localhost/~john/contented-canines/";
} else {
	$site_url = "//contentedcanines.co.nz/";
}

date_default_timezone_set('Pacific/Auckland');

?>
<!DOCTYPE html>
<html>
<head>
<title><?=$page_title ?></title>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="<?=$prepend_path ?>css/main.css" />
<link rel="stylesheet" type="text/css" href="<?=$prepend_path ?>css/base.css" />
<link rel="stylesheet" type="text/css" href="<?=$prepend_path ?>css/tables.css" />
</head>
<body>
    <div id="wrapper">
    	
    	<a href="<?=$site_url ?>"><div id="header"></div></a>
    
    	<div id="navigation">
	    	<ul>
	    		<li<?=($page == "Home" ? " class=active" : "") ?>><a href="<?=$site_url ?>">Home</a></li>
	    		<li<?=($page == "About" ? " class=active" : "") ?>><a href="<?=$prepend_path ?>about.php">About</a></li>
	    		<li<?=($page == "Pricing" ? " class=active" : "") ?> class=""><a href="<?=$prepend_path ?>pricing.php">Pricing</a></li>
	    		<li<?=($page == "Contact" ? " class=active" : "") ?>><a href="<?=$prepend_path ?>contact.php">Contact</a></li>
	    	</ul>
    	</div>
    	