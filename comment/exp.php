<?php
    $inj = "\x00";
    $content = "dubhe";
    $pattern = "/(dubhe)$inj(nb)+/";
    if(preg_match($pattern,$content) && strstr($content,"nb") === false){
        echo "Success";
    }