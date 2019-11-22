<?php
    $pattern = "/(dubhe+)+end/i";
    $content = $_GET['content'];
    if( !preg_match($pattern,$content) && substr($content,0,5) === "dubhe"){
        echo "Success";
    }