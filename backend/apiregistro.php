<?php

    include_once 'registro.php';

    class ApiRegistro{
        private $error;

        //Funcion que lista todos los datos
        function getAll(){
            $registro = new Registro();
            $registros = array();
            $registros["datos"] = array();

            $respuesta = $registro->obtenerVehiculos();

            if($respuesta->rowCount()){
                while($row = $respuesta->fetch(PDO::FETCH_ASSOC)){
                    $datos = array(
                        'usuario' => $row['usuario'],
                        'placa' => $row['placa'],
                        'tarjeta' => $row['tarjeta'],
                        'descripcion' => $row['descripcion']);
                    array_push($registros['datos'], $datos);
                }
                $this->printJSON($registros);

            }else{
                $this->error('El usuario no esta registrado');
            }
        }

        //Funcion que busca el dato
        function getById($tarjeta){
            $registro = new Registro();
            $registros = array();
            $registros["datos"] = array();

            $respuesta = $registro->obtenerVehiculo($tarjeta);

            if($respuesta->rowCount() == 1){
                $row = $respuesta->fetch();

                $datos=array(
                    'usuario' => $row['usuario'],
                    'placa' => $row['placa'],
                    'tarjeta' => $row['tarjeta'],
                    'descripcion' => $row['descripcion']
                );
                array_push($registros["datos"], $datos);
                $this->printJSON($registros);

            }else{
                $this->error('El usuario no esta registrado');
            }
            
        }

        //funcion para buscar en la tabla registro
        function getRegistro($data){
            $registro = new Registro();
            $registros = array();
            $registros['data'] = array();

            $respuesta = $registro->obtenerVehiculo($data);

            if($respuesta->rowCount() == 1){
                $row = $respuesta->fetch();

                $data=array(
                    'vehiculo' => $row['vehiculo'],
                    'estadovehiculo' => $row['estadovehiculo']
                );
                array_push($registros["data"], $data);
                $this->printJSON($registros);

            }else{
                $this->error('El usuario no esta registrado');
            }
        }

        //funcion para registrar salida
        function getSalida($salida){
            $registro = new Registro();
            $registros = array();
            $registros['datac'] = array();

            $respuesta = $registro->obtenerVehiculo($salida);

            if($respuesta->rowCount() == 1){
                $row = $respuesta->fetch();

                $salida=array(
                    'idregistro' => $row['idregistro'],
                    'fecha_salida' => $row['fecha_salida']
                );
                array_push($registros["datac"], $salida);
                $this->printJSON($registros);

            }else{
                $this->error('El usuario no se pudo actualizar');
            }
        }

        //funcion para añadir un dato en registro
        function add($data){
            $registro = new Registro();

            $respuesta = $registro->nuevaRegistro($data);
            $this->exito('Registrado correctamente');
        }

        //funcion para actualizar tabla registro
        function update($salida){
            $registro = new Registro();

            $respuesta = $registro->actualizarRegistro($salida);
            $this->exito('Registrado correctamente'); 
        }

        //Mensajes

        function error($mensaje){
            echo '<code>'. json_encode(array('mensaje' => $mensaje)) . '</code>';
        }

        function exito($mensaje){
            echo '<code>'. json_encode(array('mensaje' => $mensaje)) . '</code>';
        }

        function printJSON($array){
            echo '<code>'. json_encode($array) . '</code>';
        }

        function getError(){
            return $this->error;
        }
    }

?>