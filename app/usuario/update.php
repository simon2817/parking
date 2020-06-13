<?php

    // check if form was submitted
    if($_POST){
        include '../config/database.php';

        try{
        // write update query
        // in this case, it seemed like we have so many fields to pass and
        // it is better to label them and not use question marks
            $query = "UPDATE usuario 
            SET documento=:documento, tipodocumento=:tipodocumento, nombre=:nombre, apellido=:apellido, estatus=:estatus, email=:email, telefono=:telefono, perfil=:perfil
                            WHERE documento = :documento";

        // prepare query for excecution
        $stmt = $con->prepare($query);

        // posted values
        $documento = $_POST['documento'];
        $tipodocumento = $_POST['tipodocumento'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $estatus = $_POST['estatus'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $perfil = $_POST['perfil'];

        // bind the parameters
        $stmt->bindParam(':documento', $documento);
        $stmt->bindParam(':tipodocumento', $tipodocumento);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':estatus', $estatus);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':perfil', $perfil);
        

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