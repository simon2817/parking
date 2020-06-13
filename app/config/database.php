<?php
// used to connect to the database
    $host = "35.225.157.42";
    $db_name = "project_access";
    $username = "development";
    $password = "andres";

    try {
        $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    }

    // show error
    catch(PDOException $exception){
        echo "Connection error: " . $exception->getMessage();
    }
?>