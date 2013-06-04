<?php


$file = fopen("magyar_latin2.txt","rb");
$tarolo[] = array();
while (!feof($file) ){
	$line_of_text = fgets($file);
	$tarolo[]["szo"] = $line_of_text;
	$tarolo[]["ertek"] = 0;
	
}

foreach($tarolo as $tmp){
	print "$tmp <br/>";
	
}
	
?>