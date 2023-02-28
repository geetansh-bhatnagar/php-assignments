<?php
function remove_nonunumeric_char($text){
    $regExp = "/[^0-9,.]/";
    $output = preg_replace($regExp, "", $text);
    return $output;
}

$value = "$123,34.00A";
echo "Original Value : ".$value."<br />";
echo "Expected Value : ";
echo remove_nonunumeric_char($value);
