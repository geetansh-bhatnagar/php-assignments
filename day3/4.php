<?php

$text = "techstudy";
for($i=0;$i<=strlen($text);$i++){
    if(substr($text,$i,1)=="t"){
        $count += 1;

    }
    
}
echo "Count of 't' is :- ".$count;
?>