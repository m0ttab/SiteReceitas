<?php

include_once 'Conn.class.php';


session_regenerate_id();

class Login extends Conn{

    private $nickname;
    private $senha;

    public function get_nickname(){
        return $this -> nickname;
    }

    public function get_senha(){
        return $this -> senha;
    }

    public function set_nickname($a){
        $this -> nickname = $a;
    }

    public function set_senha($a){
        $this -> senha = $a;
    }

    public function verificar(){ 
        
        $pdo = $this->connect();

        $sql = 'SELECT *
                FROM cadastro
                WHERE nickname = :nickname';
        
        $resultado = $pdo->prepare($sql);

            $resultado->bindValue(':nickname', $this->nickname);

        $resultado->execute();

    $pdo = $this->disconnect();

    if($resultado->rowCount() == 1){

        $info = $resultado->fetchAll(PDO::FETCH_ASSOC);

        if($this->senha == $info[0]['senha']){

            $_SESSION['logado'] = true;

            $_SESSION['nickname'] = $info[0]['nickname'];

            return true;

        }else{

            return false;

        }

    }

}

}