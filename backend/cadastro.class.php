<?php
 
    include_once 'Conn.class.php';
    
    class Cadastro extends Conn {

        private $id;
        private $nome;
        private $nickname;
        private $email;
        private $senha;
        private $pais;
        private $cond;
        private $pref;
        private $cadastro_admin;

        public function get_id(){
            return $this->id;
        }

        public function get_nome(){
            return $this->nome;
        }

        public function get_nickname(){
            return $this->nickname;
        }

        public function get_email(){
            return $this->email;
        }

        public function get_senha(){
            return $this->senha;
        }

        public function get_pais(){
            return $this->pais;
        }

        public function get_cond(){
            return $this->cond;
        }

        public function get_pref(){
            return $this->pref;
        }

        public function get_cadastro_admin(){
            return $this->cadastro_admin;
        }


        public function set_id($valor){
            $this->id = $valor;
        }

        public function set_nome($valor){
            $this->nome = $valor;
        }

        public function set_nickname($valor){
            $this->nickname = $valor;
        }

        public function set_email($valor){
            $this->email = $valor;
        }

        public function set_senha($valor){
            $this->senha = $valor;
        }

        public function set_pais($valor){
            $this->pais = $valor;
        }

        public function set_cond($valor){
            $this->cond = $valor;
        }

        public function set_pref($valor){
            $this->pref = $valor;
        }

        public function set_cadastro_admin($valor){
            $this->cadastro_admin = $valor;
        }

        public function inserir_cadastro(){

            $pdo = Conn::connect();

            $sql = 'INSERT INTO cadastro
                (nome, nickname, email, senha, pais, cond, pref, admin)
                VALUES(:nome, :nickname, :email, :senha, :pais, :cond, :pref, :admin)';
                    
            $resultado = $pdo->prepare($sql);

            $resultado->bindValue(':nome', $this->nome);
            $resultado->bindValue(':nickname', $this->nickname);
            $resultado->bindValue(':email', $this->email);
            $resultado->bindValue(':senha', $this->senha);
            $resultado->bindValue(':pais', $this->pais);
            $resultado->bindValue(':cond', $this->cond);
            $resultado->bindValue(':pref', $this->pref);
            $resultado->bindValue(':admin', $this->cadastro_admin);
            $resultado->execute();
                
            $pdo = Conn::disconnect();
        }

        public function excluir_cadastro(){

            $pdo = Conn::connect();

            if($this->id !== null && $this->id != ''){
                $sql = 'DELETE FROM cadastro
                    WHERE id = :id';
            }

            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':id', $this->id);
            $resultado->execute();
            
            $pdo = Conn::disconnect();
        }

        public function listar_cadastro(){

            $pdo = Conn::connect();
            $sql = 'SELECT * FROM cadastro';
            $resultado = $pdo->prepare($sql);
            $resultado->execute();
            
            $pdo = Conn::disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_cadastro_by_id($userId){

            $pdo = Conn::connect();
            $sql = "SELECT * FROM cadastro WHERE id = '" . $userId . "'";
            $resultado = $pdo->prepare($sql);
            $resultado->execute();
            $pdo = Conn::disconnect();
            
            $result = $resultado->fetchAll(PDO::FETCH_ASSOC);
            if ($result) return $result[0];
        }

        public function validar($nickname){

            $pdo = $this->connect();
            $sql = 'SELECT *
                    FROM cadastro
                    WHERE nickname = :nickname';
            
            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':nickname', $nickname);
            $resultado->execute();

            $pdo = $this->disconnect();

            if($resultado->rowCount() >= 1){
                return false;
            }else{
                return true;
            }

            
        } 
    }
?>