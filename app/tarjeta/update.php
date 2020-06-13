<?php

    // check if form was submitted
    if($_POST){
        include '../config/database.php';

        try{
        // write update query
        // in this case, it seemed like we have so many fields to pass and
        // it is better to label them and not use question marks
            $query = "UPDATE tarjeta 
            SET idtarjeta=:idtarjeta, estado=:estado, tarjeta=:tarjeta
                            WHERE idtarjeta = :idtarjeta";

        // prepare query for excecution
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

        // show errors
        catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
        }
    }
?>