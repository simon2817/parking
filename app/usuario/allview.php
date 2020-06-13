<?php
    // include database connection
    include '../config/database.php';

    // delete message prompt will be here

    // select all data
    $query = "SELECT documento, tipodocumento, nombre, apellido, estatus, email, telefono, perfil FROM usuario";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($results);
    echo $json;
?>