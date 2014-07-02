<?php 
require "test.php"; 

$text = "Hello World";  
         
$from = 'english';  
$to   = 'vietnamese';  
$result = PIPHP_GoogleTranslate($text, $from, $to);  

if (!$result) echo "Translation failed.";  
else echo "$result"; 

?>
