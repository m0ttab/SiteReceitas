<?php

    include_once 'Connect.class.php';

    session_start();
    session_regenerate_id();

    class Login extends Connect{

        private $nickname;
        private $senha;

        public function getNickname(){
            return $this->nickname;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setNickname($valor){
            $this->nickname = $valor;
        }

        public function setSenha($valor){
            $this->senha = $valor;
        }

        public function verificar(){

            $pdo = $this->connect();
            $sql = 'SELECT * FROM cadastro_usuario WHERE nickname = :nickname AND senha = :senha';
            
            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':nickname', $this->nickname);
            $resultado->bindValue(':senha', $this->senha);
            $resultado->execute();

            $pdo = $this->disconnect();
            if($resultado->rowCount() === 0) return false;

            $info = $resultado->fetchAll(PDO::FETCH_ASSOC);

            $_SESSION['logado'] = true;
            $_SESSION['idUsuario'] = $info[0]['id'];
            
            return true;
        }

    }