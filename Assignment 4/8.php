<?php
    $text = "the great khali";
    $p="|the|";
    echo "Original String :- $text <br>";
    echo "After change:- ".preg_replace($p,"best",$text);
    ?>