<?php
$sum=0;

for($num=2; $num<=200;$num++){
    $isprime=false;
for($num2=2; $num2<$num; $num2++){
 if($num%$num2==0){
   $isprime=true;
}

}
if($isprime==false){
    $sum=$sum+$num;
}
}
echo $sum;
?>