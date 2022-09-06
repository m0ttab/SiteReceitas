<?php
 
    include_once 'Connect.class.php';
    
    class Receita extends Connect {

        private $id;
        private $nome;
        private $nickname;
        private $temp;
        private $tipo;
        private $ingredientes;
        private $modo;
        private $aviso;
        private $pref;
        private $imagem;

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getNickname() {
            return $this->nickname;
        }

        public function getTemp() {
            return $this->temp;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getIngredientes() {
            return $this->ingredientes;
        }

        public function getModo() {
            return $this->modo;
        }

        public function getAviso() {
            return $this->aviso;
        }

        public function getPref() {
            return $this->pref;
        }

        public function getImagem() {
            return $this->imagem;
        }

        public function setId($valor) {
            $this->id = $valor;
        }

        public function setNome($valor) {
            $this->nome = $valor;
        }

        public function setNickname($valor) {
            $this->nickname = $valor;
        }

        public function setTemp($valor) {
            $this->temp = $valor;
        }

        public function setTipo($valor) {
            $this->tipo = $valor;
        }

        public function setIngredientes($valor) {
            $this->ingredientes = $valor;
        }

        public function setModo($valor) {
            $this->modo = $valor;
        }

        public function setAviso($valor) {
            $this->aviso = $valor;
        }

        public function setPref($valor) {
            $this->pref = $valor;
        }
        public function setImagem($valor) {
            $this->imagem = $valor;
        }

        public function delete() {

            $pdo = $this->connect();

            $sql = 'DELETE FROM receita WHERE id = :id';

            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':id', $this->id);        
            $resultado->execute();
                
            $pdo = $this->disconnect();
        }

        public function list($filter) {

            $pdo = $this->connect();

            $sql = 'SELECT * FROM receita';
            if ($filter) $sql .= " WHERE ingredientes = '" . $filter . "'";
            $resultado = $pdo->prepare($sql);
            $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }


        public function getById($id) {
            $pdo = $this->connect();
            
            $sql = 'SELECT * FROM receita WHERE id = ' . $id;

            $resultado = $pdo->prepare($sql);
            $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>