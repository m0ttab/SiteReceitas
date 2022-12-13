<?php
 
    include_once 'Conn.class.php';
    
    session_start();

    class Lista extends Conn {

        private $id;
        private $nome;
        private $receita_id;
        private $cadastro_id;

        public function get_id() {
            return $this->id;
        }

        public function get_nome() {
            return $this->nome;
        }

        public function get_receita_id() {
            return $this->receita_id;
        }

        public function get_cadastro_id() {
            return $this->cadastro_id;
        }


        public function set_id($valor) {
            $this->id = $valor;
        }

        public function set_nome($valor) {
            $this->nome = $valor;
        }

        public function set_receita_id($valor) {
            $this->receita_id = $valor;
        }

        public function set_cadastro_id($valor) {
            $this->cadastro_id = $valor;
        }

        public function update() {

            $pdo = Conn::connect();

            $sql = 'UPDATE lista
                SET nome = :nome
                WHERE id = :id';

            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':nome', $this->nome);
            $resultado->bindValue(':id', $this->id);
            $resultado->execute();

            $pdo = Conn::disconnect();
        }

        public function store() {

            $pdo = Conn::connect();

            $sql = 'INSERT INTO lista
                (nome, receita_id, cadastro_id)
                VALUES(:nome, :receita_id, :cadastro_id)';

            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':nome', $this->nome);
            $resultado->bindValue(':receita_id', $this->receita_id);
            $resultado->bindValue(':cadastro_id', $this->cadastro_id);
            
            $resultado->execute();
            
            $pdo = Conn::disconnect();
        }

        public function delete() {

            $pdo = $this->connect();

            $sql = 'DELETE FROM lista
                WHERE id = :id';

            $resultado = $pdo->prepare($sql);
                        
            $resultado->bindValue(':id', $this->id);        
            $resultado->execute();
                
            $pdo = $this->disconnect();
        }

        public function list() {
            if(!$_SESSION['user_id']) return;

            $pdo = $this->connect();

            $sql = "SELECT * FROM lista WHERE cadastro_id = '" . $_SESSION['user_id'] . "'";
            $resultado = $pdo->prepare($sql);
            $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }


        public function get_by_id($id) {
            $pdo = $this->connect();
            
            $sql = 'SELECT * FROM lista
                WHERE id = ' . $id;

            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':id', $this->id);
            $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>