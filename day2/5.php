<!-- Write a PHP script which displays all the numbers between 50 and 150
that are divisible by 4 -->
<?php
for($i=50; $i<=150;$i++){
    if($i%4==0){
        echo $i."<br>";
    }
}
?>
