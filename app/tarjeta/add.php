<?php
    if($_POST){

    // include database connection
    include '../config/database.php';

    try{

    // insert query
    $query = "INSERT INTO tarjeta SET idtarjeta=:idtarjeta, estado=:estado, tarjeta=:tarjeta";
    // prepare query for execution
    $stmt = $con->prepare($query);
    // posted values
    $idtarjeta = $_POST['idtarjeta'];
    $estado = $_POST['estado'];
    $tarjeta = $_POST['tarjeta'];

    // bind the parameters
    $stmt->bindParam(':idtarjeta', $idtarjeta);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':tarjeta', $tarjeta);
    // Execute the query
        if($stmt->execute()){
            echo json_encode(array('result'=>'success'));
        }else{
            echo json_encode(array('result'=>'fail'));
        }
    }
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>