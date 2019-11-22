<?php
    function set_config($config) {
        $configfile = dirname(__FILE__)."/conf.php";
        $pattern = $replacement = array();
        foreach($config as $k=>$v) {
            $pattern[$k] = "/'".$k."'\s*=>\s*([']?)[^']*([']?)(\s*),/is";
            $replacement[$k] = "'".$k."' => \${1}".$v."\${2}\${3},";					
        }
        $str = file_get_contents($configfile);
        $str = preg_replace($pattern, $replacement, $str);
        return file_put_contents($configfile, $str, LOCK_EX);		
    }

    set_config($_GET['config']);
