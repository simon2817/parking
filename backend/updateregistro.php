<?php

    include_once 'apiregistro.php';
    $api = new ApiRegistro();
    $error = '';

    if(isset($_POST['idregistro']) && isset($_POST['fecha_salida'])){
        //insertar datos
        $salida = array(
            'idregistro' => $_POST['idregistro'],
            'fecha_salida' => $_POST['fecha_salida']
        );
        $api->update($salida);

    }else{
        $api->error('Error al llamar a la api');
    }

?>