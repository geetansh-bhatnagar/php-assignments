<?php
    $text = "helloworld";
    echo substr(chunk_split($text,1,"."),0,-1);
    ?>