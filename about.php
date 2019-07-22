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

	<title>About | Loose Cannon</title>

	

	<script type="text/javascript">

	$(document).ready(function() {
		$('footer.sticky').load('footer.php footer.sticky');
		$('footer:not(.sticky)').load('footer.php footer:not(.sticky)');
  		$('body').fadeIn();
     });

	function ShowProfile(id) {
		$('.team #mem'+id+' .prof').slideToggle("slow");
	}

	function HideProfile(id) {
		$('.team #mem'+id+' .prof').slideToggle("slow");
	}

		
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
			<li><a href="about.php" class="selected">About</a></li>
			<li><a href="projects.php">Projects</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</header>
	<div class="container">
		<div class="box">
			<div class="item-50">
				<h2>Who we are</h2>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
			<div class="item-50">
				<h2>What's this about</h2>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<h2>Our Team</h2>
		<div class="team">
			<!--
				This is the format for TEAM
				Text in between * are placeholders

				<div class="mem" id="mem*number*">
					<img class="mem-dp" src="*image source*"> 
					<div class="mem-name">*Member Name*</div>
					<div class="mem-pos">*Member Role*</div>
					<div class="mem-btn"><a  onClick="ShowProfile('*number*')"><i class="material-icons" style="font-size:2.25em;">arrow_drop_down_circle</i></a></div>
					<div class="prof">
						<div class="header">
							<div class="mem-name">*Member Name*</div>
							<div class="mem-close"><a  onClick="HideProfile('*number*')"><i class="material-icons">arrow_drop_down_circle</i></a></div>
						</div>
						<div class="mem-intro">
							*Brief description*
						</div>
					</div>
				</div>

			See sample below

			-->
			<div class="mem" id="mem1">
				<img class="mem-dp" src="test2.png"> 
				<div class="mem-name">Subhalingam D</div>
				<div class="mem-pos">Website, Programming</div>
				<div class="mem-btn"><a  onClick="ShowProfile('1')"><i class="material-icons" style="font-size:2.25em;">arrow_drop_down_circle</i></a></div>
				<div class="prof">
					<div class="header">
						<div class="mem-name">Subhalingam D</div>
						<div class="mem-close"><a  onClick="HideProfile('1')"><i class="material-icons">arrow_drop_down_circle</i></a></div>
					</div>
					<div class="mem-intro">
						My details?
					</div>
				</div>
			</div>
			<div class="mem" id="mem2">
				<img class="mem-dp" src="test1.png"> 
				<div class="mem-name">Name</div>
				<div class="mem-pos">Title</div>
				<div class="mem-btn"><a  onClick="ShowProfile('2')"><i class="material-icons" style="font-size:2.25em;">arrow_drop_down_circle</i></a></div>
				<div class="prof">
					<div class="header">
						<div class="mem-name">Name</div>
						<div class="mem-close"><a  onClick="HideProfile('2')"><i class="material-icons">arrow_drop_down_circle</i></a></div>
					</div>
					<div class="mem-intro">
						Description
					</div>
				</div>
			</div>
		</div>



	</div>

	<footer class="sticky"></footer>
	<footer></footer>
	

</body>
</html>