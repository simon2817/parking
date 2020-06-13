<?php
// include database connection
    include '../config/database.php';

    try {

        // get record ID
        // isset() is a PHP function used to verify if a value is there or not
        $id=isset($_GET['idvehiculo']) ? $_GET['idvehiculo'] : die('ERROR: Record ID not found.');

        // delete query
        $query = "DELETE FROM vehiculo WHERE idvehiculo = ?";
        $stmt = $con->prepare($query);
        $stmt->bindParam(1, $id);

        if($stmt->execute()){
        // redirect to read records page and
        // tell the user record was deleted
            echo json_encode(array('result'=>'success'));
        }else{
            echo json_encode(array('result'=>'fail'));
        }
        }
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
?>