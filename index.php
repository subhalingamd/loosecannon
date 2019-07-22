<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="theme.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ICONS !-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

	<!-- JQUERY !-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>

	<!-- FONTS !-->
	<link href="https://fonts.googleapis.com/css?family=Lato|Coda|Audiowide&display=swap" rel="stylesheet">

	<title>Home | Loose Cannon</title>

	

	<script type="text/javascript">

	$(document).ready(function() {
		$('footer.sticky').load('footer.php footer.sticky');
		$('footer:not(.sticky)').load('footer.php footer:not(.sticky)');
  		$('body').fadeIn();
     });

		
	</script>


</head>
<body>
	<header>
		<div id="toggle"><a onclick="$('ul.nav').slideToggle('slow');"><i class="material-icons" style="font-size:1.5em;color:#fff">menu</i></a></div>
		<div class="heading">
			<div class="logo"><img></div>
			<div class="title">Loose Cannon</div>
		</div>

		<ul class="nav" id="toggmenu">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="projects.php">Projects</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</header>
	<div class="container">
		<h1>Lorem ipsum</h1>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>

	<footer class="sticky"></footer>
	<footer></footer>
	

</body>
</html>
