<?php

include_once 'apiregistro.php';

$api = new ApiRegistro();

if(isset($_GET['tarjeta'])){
    $tarjeta =  $_GET['tarjeta'];

    if(is_string($tarjeta)){
        $api->getById($tarjeta);
    }else{
        $api->error('Los parametros son incorrectos');
    }
     
}else{
    $api->getAll();
}


?>