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
	<link rel="stylesheet" type="text/css" href="/style/media-queries.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	
	<script src="/js/slider.js"></script>

	<script>
		function menu_button_action() {
  			var menubar = document.getElementById("mobile_menu");
  			if (menubar.style.display === "block") {
    			menubar.style.display = "none";
  			} else {
    			menubar.style.display = "block";
  			}
		}
	</script>
</head>
<body>
	<div class="header">
		<div class="inner_wrapper">
			<div id="logo_section">
				<div id="logo_text">
					<a href="/">Avada :</a>
				</div>
			</div>

			<nav id="main_menu">
				<a href="/">
					<div class="menu_button">
						Main page
					</div>
				</a>
				<a href="/pages/reason1.php">
					<div class="menu_button">
						Reason 1
					</div>
				</a>
				<a href="/pages/reason2.php">
					<div class="menu_button">
						Reason 2
					</div>
				</a>
				<a href="/pages/reason3.php">
					<div class="menu_button">
						Reason 3
					</div>
				</a>
				<a href="/pages/reason4.php">
					<div class="menu_button">
						Reason 4
					</div>
				</a>
				<a href="/pages/reason5.php">
					<div class="menu_button">
						Reason 5
					</div>
				</a>
			</nav>
		</div>
	</div>

	<nav id="mobile_menu">
		<hr>
		<div id="mobile_links_block">
			<a class="mobile_link" href="/pages/reason1.php">Reason 1</a>
			<a class="mobile_link" href="/pages/reason2.php">Reason 2</a>
			<a class="mobile_link" href="/pages/reason3.php">Reason 3</a>
			<a class="mobile_link" href="/pages/reason4.php">Reason 4</a>
			<a class="mobile_link" href="/pages/reason5.php">Reason 5</a>
		</div>
	</nav>

	<div class="content">
		<div class="inner_wrapper">