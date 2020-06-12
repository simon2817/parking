<?php

    include_once 'database.php';

    class Registro extends conection{

        function obtenerVehiculos(){
            $query = $this->connect()->query('SELECT * FROM consulta');

            return $query;
        }

        function obtenerVehiculo($tarjeta){
            $query = $this->connect()->prepare('SELECT * FROM consulta where tarjeta= :tarjeta');
            $query->execute(['tarjeta'=> $tarjeta]);

            return $query;
        }

        function nuevaRegistro($vehiculo){
            $query = $this->connect()->prepare('INSERT INTO registro(vehiculo, estadovehiculo) VALUES(:vehiculo, :estadovehiculo)');
            $query->execute(['vehiculo' => $vehiculo['vehiculo'], 'estadovehiculo' => $vehiculo['estadovehiculo']]);
    
            return $query;
        }

        function actualizarRegistro($vehiculo){
            $query = $this->connect()->prepare('UPDATE registro SET fecha_salida= :fecha_salida WHERE idregistro = :idregistro');
            $query->execute(['fecha_salida' => $vehiculo['fecha_salida'], 'idregistro' => $vehiculo['idregistro']]);
    
            return $query;
        }
    }

?>