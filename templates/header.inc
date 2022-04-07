<?php 
	require_once($_SERVER["DOCUMENT_ROOT"]."/inc/vars.inc");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $browser_title." "; ?> HOME</title>
	
	<link rel="stylesheet" type="text/css" href="/style/style.css">
	<link rel="stylesheet" type="text/css" href="/style/slider.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	
	<script src="/js/slider.js"></script>
</head>
<body>
	<div class="header">
		<div class="inner_wrapper">
			<div id="logo_section">
				<div id="logo_text">
					<a href="/">Avada :</a>
				</div>
			</div>
			<naw id="main_menu">
				<a href="/">
					<div class="menu_button">
						Main page
					</div>
				</a>
				<a href="#">
					<div class="menu_button">
						page 2
					</div>
				</a>
				<a href="/pages/about.php">
					<div class="menu_button">
						About
					</div>
				</a>
			</naw>
		</div>
	</div>
	<div class="content">
		<div class="inner_wrapper">