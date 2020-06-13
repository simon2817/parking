<?php
    // get passed parameter value, in this case, the record ID
    // isset() is a PHP function used to verify if a value is there or not
    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

    //include database connection
    include '../config/database.php';

    // read current record's data
    try {
        // prepare select query
        $query = "SELECT documento, tipodocumento, nombre, apellido, estatus, email, telefono, perfil FROM usuario WHERE documento = ? LIMIT 0,1";
        $stmt = $con->prepare( $query );
    
        // this is the first question mark
        $stmt->bindParam(1, $id);
    
        // execute our query
        $stmt->execute();
    
        // store retrieved row to a variable
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $json = json_encode($row);
    echo $json;
    }
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
?>