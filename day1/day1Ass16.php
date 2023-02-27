<?php
$num=123;
$sum=0;
while($num>0){
    $sum+=$num%10;
    $num=$num/10;

}
echo $sum
?>