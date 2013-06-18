<html>

<?php
ini_set( 'default_charset', 'UTF-8' );
ini_set('display_errors', 'Off');
/**Ha a kapott érték magánhangzó, TRUE értékkel tér vissza**/

/******************************************************/

class WordClass {
	
	var $word;
	var $value;
	
	function WordClass($word,$value = 0){
		$this->word = $word;
		$this->value = $value;
	}
	
	function setWord($put){
		$this->word = $put;
	}
	
	function setValue($value){
		$this->value = $value;
	}
}

/******************************************************/

function bubbleSort($array)
{
 if (!$length = count($array)) {
  return $array;
 }      
 for ($outer = 0; $outer < $length; $outer++) {
  for ($inner = 0; $inner < $length; $inner++) {
   if ($array[$outer]->value < $array[$inner]->value) {
    $tmp = $array[$outer];
    $array[$outer] = $array[$inner];
    $array[$inner] = $tmp;
   }
  }
 }
}

/******************************************************/


function mgh($char){
	$mgh = "aeuáéoóöőüűúií";
	return (strstr($mgh,$char));
}

/*****************************************************/

function cmp($a,$b){
	$x = 0;
	if((mgh($a) != false) && (mgh($b) != false)){
		if ($a == $b){
			$x= $x + 10;
				//print "  $x  ";
			return $x;
		} 
	}
	if ($a == $b) $x = $x+2.5;
	return $x;
}

/*****************************************************/

function value($a,$b){ 
	$value = 0;
	$mod  = 0;
	$i = strlen($a) -1;
	$j = strlen($b) -1;
	while(($i >= 0) && ($j >= 0)){
		$value = $value + cmp($a[$i],$b[$j]);
		$i--;
		$j--;
		$mod++;
	}
	return $value - $mod;
}
/*****************************************************/


function impvalue($mit,$mivel){
	$value = 0;
	
	$i = strlen($mit) -1;
	$j = strlen($mivel) -1;
	while(($i >= 0) && ($j >= 0)){
		$dec = 0;
		if($mit[$i] == $mivel[$j]){
			if(mgh($mit[$i])){
				$value = $value + 10;
			}
			else{
				$dec++;
				$value = $value + (4 - $dec);
			}
			
		}
		$i--;
		$j--;
	}
	return $value;
}
/*****************************************************/
/*****************************************************/
//ennek a függvények már két, CSAK MGH ból vagy MSH ból álló stringet szabad átadni. Ez optimalizációs szempontból fontos.
// rendesen működik.
//még feladat: kiegészíteni azzal, hogy MSH esetén csak 0.5 el növelje a value értékét
function getValueOnly($mit,$mivel){
	$value = 0;
	$i = strlen($mit) -1;
	$j = strlen($mivel) -1;
	while(($i >= 0) && ($j >= 0)){
		if ($mit[$i] == $mivel[$j]) $value++;
		$i--;
		$j--;
	}
	return $value;
}


function mbStringToArray ($string) { 
	    $array = array();
	    $strlen = mb_strlen($string); 
	    while ($strlen) { 
	        $array[] = mb_substr($string,0,1,"UTF-8"); 
	        $string = mb_substr($string,1,$strlen,"UTF-8"); 
	        $strlen = mb_strlen($string); 
	    } 
	    return $array; 
	} 
function grabMgh ($string){
	$onlyMgh = "";
	$array = mbStringToArray ($string);
	foreach ($array as $iter){
		if (mgh($iter)) $onlyMgh[] = $iter; 
		$vanmgh = true;
	}
	return $onlyMgh; //boolean -ként az üres string értéke FALSE
}


?>
</html>