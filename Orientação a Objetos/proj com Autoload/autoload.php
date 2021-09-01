<?php
spl_autoload_register(function($class){
    if(file_exists(require "$class.php")){
        require "$class.php";
    }
});

