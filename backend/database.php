<?php

    class conection{
        private $host;
        private $database;
        private $username;
        private $password;
        private $charset;

        public function __construct(){
            $this->host = '35.225.157.42';
            $this->database = 'project_access';
            $this->username = 'development';
            $this->password = 'andres';
            $this->charset = 'utf8mb4';
        }

        function connect(){

            try {
                
                $connection = "mysql:host=".$this->host.";dbname=".$this->database.";charset=".$this->charset;

                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                //$pdo = new PDO($connection, $this->user, $this->password, $options);
                $pdo = new PDO($connection,$this->username,$this->password);
            
                return $pdo;
            } catch (PDOException $e) {
                print_r('Error connection: ' . $e->getMessage());
            }
        }

    }
