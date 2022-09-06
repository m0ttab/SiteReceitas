<?php

    class Connect {

        public static function connect(){

            $usuario = 'root';
            $senha = '';
            $dbname = 'sitereceitas';
            $host = 'localhost';

            $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);

            return $pdo;
        }

        public function disconnect(){
            return null;
        }

    }

?>