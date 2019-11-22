<?php
    $pattern = "/(dubhe+)+end/i";
    $content = str_repeat("dubhe",1000000)."end";
    if( !preg_match($pattern,$content) && substr($content,0,5) === "dubhe"){
        echo "Success";
    }