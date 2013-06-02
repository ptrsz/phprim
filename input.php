<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!-- Website Title -->
<title>Rímkereső</title>
<!--  Website description - Change the 'content' section to whatever you want -->
<meta name="description" content="Replace this text with a summary of your website. i.e. John Smith - Web Developer and Photographer - Welcome to my portfolio website! Here you will find all of my latest work. Enjoy!">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Cookie' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="wrapper">
	<div class="content">
	
		<div id="top">
	        <div id="logo">
	            <h1 id="logotitle">rímkereső</h1>
	            alfa verzió!
	        </div>
	    </div>      
	    	<div class="form">
	        	Jelenleg az "apacuka" szóval hasonlítja össze a program a beírt szót. 
	    		Hátulról indulva a megegyező magánhagzók számát számolja ki.
	        	<form action="input.php" method="get">
	        		<input name="szo" type="text">
	                <p><input value="keress!" type="submit"></p>
	            </form>
	            	<?php
	            	/**Itt történik a main() lefutása, hívja a funtions.php-ban lévő fgv-ket!**/
						ini_set( 'default_charset', 'UTF-8' );
						ini_set('display_errors', 'On');
						include 'functions.php';
						$szob = $_GET["szo"];
						if(!$szob){
							echo "hiba";
						}
							
						$v = value("apacuka",$szob);
					
						print "A szavak $v magánhangzóban egyeznek <br/>";
				?>
	        </div>
	        <div id="footer">
		        <h3>engine: Szombathelyi Péter</h3>
		    	<h3>www.bisztro.net</h3>
	    	</div>
	</div>
</div>

</body>
</html>

