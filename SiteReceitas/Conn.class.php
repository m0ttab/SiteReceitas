<?php

    class Conn {

        public static function connect(){

            $usuario = 'root';
            $senha = '';
            $dbname = 'siteReceitas';
            $host = 'localhost';

            $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);

            return $pdo;
        }

        public function disconnect(){
            return null;
        }

    }

?>
