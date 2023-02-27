<?php
function tirnary_Test($n){
$r = $n > 30
? "greater than 30"
: ($n > 20
? "greater than 20"
: ($n >10
? "greater than 10"
: "Input a number atleast greater than 10!")); 
echo $n." : ".$r."\n";
}
tirnary_Test(32);
tirnary_Test(21);
tirnary_Test(12);
tirnary_Test(4);
?>