<?php 
require "test.php"; 

$text =  "from the consent of the governed.";  
         
$from = 'english';  
$to   = 'vietnamese';  
$result = PIPHP_GoogleTranslate($text, $from, $to);  

if (!$result) echo "Translation failed.";  
else echo "$result"; 

?>