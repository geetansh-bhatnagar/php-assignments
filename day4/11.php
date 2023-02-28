<?php
$text = "pseudofeminism";
$extra ="pseudo";
echo "Original String:- $text <br>";
if (substr($text,0,strlen($extra))==$extra){
    $text=substr($text,strlen($extra));
}
echo "String after change:- $text";
?>