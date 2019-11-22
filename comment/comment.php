<?php
    $inj = $_GET['inj'];
    $content = $_GET['content'];
    $pattern = "/(dubhe)$inj(nb)+/";
    if(preg_match($pattern,$content) && strstr($content,"nb") === false){
        echo "Success";
    }