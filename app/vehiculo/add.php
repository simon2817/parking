<?php
    if($_POST){

    // include database connection
    include '../config/database.php';

    try{

    // insert query
    $query = "INSERT INTO usuario 
    SET idvehiculo=:idvehiculo, usuario=:usuario, vehiculo=:vehiculo, marca=:marca, color=:color, placa=:placa, modelo=:modelo, puertas=:puertas, chasis=:chasis, tarjeta=:tarjeta";
    // prepare query for execution
    $stmt = $con->prepare($query);
    // posted values
    $idvehiculo = $_POST['idvehiculo'];
    $usuario = $_POST['usuario'];
    $vehiculo = $_POST['vehiculo'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $puertas = $_POST['puertas'];
    $chasis = $_POST['chasis'];
    $tarjeta = $_POST['tarjeta'];

    // bind the parameters
    $stmt->bindParam(':idvehiculo', $idvehiculo);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':vehiculo', $vehiculo);
    $stmt->bindParam(':marca', $marca);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':placa', $placa);
    $stmt->bindParam(':modelo', $modelo);
    $stmt->bindParam(':puertas', $puertas);
    $stmt->bindParam(':chasis', $chasis);
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