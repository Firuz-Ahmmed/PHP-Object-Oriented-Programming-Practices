<?php
$given=["Hello", "World", "PHP", "Programming"];
$a=implode(" ",$given);
$b=count(explode(' ',$a));
$arr=explode(' ',$a);
foreach($arr as $x){
  $length=strlen($x);
  $new_text = preg_replace("/[aeiou]/i", "", $x);
  echo "Original String:".$x.",";
  echo "Vowel Count:" . ($length - strlen($new_text)).",";
  echo " Reversed String: ".strrev($x) ."\n";
}
