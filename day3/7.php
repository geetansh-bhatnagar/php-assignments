<?php
    $text="";
    for($i=1;$i<11;$i++){
        if($i%2!=0){
            $text .="$i ";
        }
    }
    echo "All odd numbers from 1 to 10 are:- ".$text;
    ?>