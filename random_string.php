<?php

function RandomStringGenerator($n) 
{ 
    $generated_string = ""; 
 
    $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
    
   
    $len = strlen($domain); 
    
    
    for ($i = 0; $i < $n; $i++) 
    { 
        $index = rand(0, $len - 1); 
        $generated_string = $generated_string . $domain[$index]; 
    } 
    
    return $generated_string; 
}
?>