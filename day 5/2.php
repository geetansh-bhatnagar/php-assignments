<?php
function sorting($arr){
    echo "unsorted array:";
 print_r($arr);
 echo "<br>";
    $n = sizeof($arr);
    for ($i = 0; $i < $n - 1; $i++){
        for ($j = 0; $j < $n - $i - 1; $j++){
            if ($arr[$j] > $arr[$j + 1]) {
                
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
           
}

}
echo "sorted array:";
 print_r($arr);
}
$arr=array(1,10,5,6,20);
sorting($arr);
?>