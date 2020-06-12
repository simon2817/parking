<?php

    include_once 'apiregistro.php';
    $api = new ApiRegistro();
    $error = '';

    if(isset($_POST['vehiculo']) && isset($_POST['estadovehiculo'])){
        //insertar datos
        $data = array(
            'vehiculo' => $_POST['vehiculo'],
            'estadovehiculo' => $_POST['estadovehiculo']
        );
        $api->add($data);

    }else{
        $api->error('Error al llamar a la api');
    }

?>