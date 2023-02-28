<?php
function reverse($str){
    $result=" ";
    
    for($i=strlen($str)-1;$i>=0;$i--){
        $result.=$str[$i];
    }
   return $result;
}
$str="acb";
$temp=$str;

$temp=reverse($temp);


if($temp==$str){
    echo "string is palindrome";
}
else echo "string is not palindrome";
?>