<html>
<header>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</header>
<body>
	<div align="center">
	  This is some text!
			<?php
				ini_set( 'default_charset', 'UTF-8' );
				include 'functions.php';
				/*
				class Word{
					var $string;
					var $value;
					function Word($string,$value){
						$this->string = $string;
						$this->value = $value;
					}
				}
				
				$tomb = array();
			
				$fp = fopen("magyar_latin2.txt", 'r');
				
				while ( !feof($fp)){
					$szo = chop(fgets($fp,1024));
					$ertek = value("adam",$szo);
					$ob = new Word($szo,$ertek);
					$tomb[] = $ob;
				}
				
				fclose($fp);
				foreach($tomb as $db){
					print "$db->string ertek: $db->value <br/>";
					
				}
			*/
			$a = "aa";
			$b = "aa";
			$c = "lm";
			$d = "zrm";
			print "value : ".getValueOnly($a,$b);
			print "value: ".getValueOnly($c,$d);			
			?>		
	</div>
</body>
</html>