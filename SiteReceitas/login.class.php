<?php

    include_once 'Conn.class.php';

    session_start();
    session_regenerate_id();

    class Login extends conn{

        private $nickname;
        private $senha;

        public function get_nickname(){
            return $this->nickname;
        }

        public function get_senha(){
            return $this->senha;
        }

        public function set_nickname($valor){
            $this->nickname = $valor;
        }

        public function set_senha($valor){
            $this->senha = $valor;
        }

        public function verificar(){

            $pdo = $this->connect();
            $sql = 'SELECT *
                    FROM cadastro
                    WHERE nickname = :nickname
                    AND senha = :senha';
            
            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':nickname', $this->nickname);
            $resultado->bindValue(':senha', $this->senha);
            $resultado->execute();

            $pdo = $this->disconnect();
            if($resultado->rowCount() === 0) return false;

            $info = $resultado->fetchAll(PDO::FETCH_ASSOC);

            $_SESSION['logado'] = true;
            $_SESSION['user_id'] = $info[0]['id'];
            return true;
        }
    }
?>