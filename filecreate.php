<?php

/**
purpose: Fájl létrehozása a script gyorsítása miatt.
**/
include 'functions.php';
$infile  = fopen("magyar_latin2.txt", 'r');

$outfile = fopen("magyar_latin2magan.txt",'a');
$massal=array("p","t","k","b","d","g","gy","ty","f","v","sz","z","s","zs","h","j","cs","dzs","c","dz","l","r","m","n","ny");
while (!feof($infile)){
		$tmp = fgets($infile,1024);
		$tmp = str_replace($massal,'',$tmp);
		fwrite($outfile,"$tmp");	
		
	}

rewind($infile);
$outMsh = fopen("magyar_latin2msh.txt",'a');
$mgh = array("a","e","u","á","é","o","ó","ö","ő","ü","ű","ú","i","í");
while (!feof($infile)){
		$tmp = fgets($infile,1024);
		print "debug <br/>";
		$tmp = str_replace($mgh,'',$tmp);
		echo "debgu <br/>";
		fwrite($outMsh,"$tmp");	
		echo "debug <br/>";
	}
fwrite($outMsh,"csa");
fclose($outMsh);
fclose($infile);
fclose($outfile);
echo "kesz";
?>