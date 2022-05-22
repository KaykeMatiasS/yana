<?php

    $print = function($class){
        if(file_exists('classes/'.$class.'.php')){
            include_once('classes/'.$class.'.php');
        }
    };

    spl_autoload_register($print);

    define('HOST', 'us-cdbr-east-05.cleardb.net');
    define('DATABASE', 'heroku_d82daf3248dddee');
    define('USER', 'b29fb938e18320');
    define('PASSWORD', '80c894a9');

?>