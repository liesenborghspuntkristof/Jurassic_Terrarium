<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/8/2016
 * Time: 12:22 PM
 */
define('APPLICATION_PATH','Business/');
define('SYSTEM_PATH','Business/system/');

function pr($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
foreach(scandir('C:\xampp\htdocs\Jurassic_Terrarium\Entities') as $class){
    if($class == '.' || $class == ".."){
        continue;
    }else{
        include('Entities/' . $class);
    }
}
include ('Business/OO_CoreService.php');