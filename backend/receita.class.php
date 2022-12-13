<?php
 
    include_once 'Conn.class.php';
    
    class Receita extends Conn {

        private $id;
        private $nome;
        private $autor;
        private $tempo;
        private $ingredientes;
        private $modo;
        private $tipo;
        private $aviso;
        private $foto;

        public function get_id() {
            return $this->id;
        }

        public function get_nome() {
            return $this->nome;
        }

        public function get_autor() {
            return $this->autor;
        }

        public function get_tempo() {
            return $this->tempo;
        }

        public function get_ingredientes() {
            return $this->ingredientes;
        }

        public function get_modo() {
            return $this->modo;
        }

        public function get_tipo() {
            return $this->tipo;
        }

        public function get_aviso() {
            return $this->aviso;
        }

        public function get_foto() {
            return $this->foto;
        }

        
        public function set_id($valor) {
            $this->id = $valor;
        }

        public function set_nome($valor) {
            $this->nome = $valor;
        }

        public function set_autor($valor) {
            $this->autor = $valor;
        }

        public function set_tempo($valor) {
            $this->tempo = $valor;
        }

        public function set_ingredientes($valor) {
            $this->ingredientes = $valor;
        }

        public function set_modo($valor) {
            $this->modo = $valor;
        }

        public function set_tipo($valor) {
            $this->tipo = $valor;
        }

        public function set_aviso($valor) {
            $this->aviso = $valor;
        }

        public function set_foto($valor) {
            $this->foto = $valor;
        }

        public function update() {

            $pdo = Conn::connect();

            $sql = 'UPDATE receita
                SET nome = :nome, autor = :autor, tempo = :tempo, ingredientes = :ingredientes, modo = :modo, tipo = :tipo, aviso = :aviso, foto = :foto
                WHERE id = :id';

            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':nome', $this->nome);
            $resultado->bindValue(':autor', $this->autor);
            $resultado->bindValue(':tempo', $this->tempo);
            $resultado->bindValue(':ingredientes', $this->ingredientes);
            $resultado->bindValue(':modo', $this->modo);
            $resultado->bindValue(':tipo', $this->tipo);
            $resultado->bindValue(':aviso', $this->aviso);
            $resultado->bindValue(':foto', $this->foto);

            $resultado->execute();

            $pdo = Conn::disconnect();
        }

        public function store() {

            $pdo = Conn::connect();

            $sql = 'INSERT INTO receita
                (nome, autor, tempo, ingredientes, modo, tipo, aviso, foto)
                VALUES(:nome, :autor, :tempo, :ingredientes, :modo, :tipo, :aviso :foto)';

            $resultado = $pdo->prepare($sql);
            $resultado->bindValue(':nome', $this->nome);
            $resultado->bindValue(':autor', $this->autor);
            $resultado->bindValue(':tempo', $this->tempo);
            $resultado->bindValue(':ingredientes', $this->ingredientes);
            $resultado->bindValue(':modo', $this->modo);
            $resultado->bindValue(':tipo', $this->tipo);
            $resultado->bindValue(':aviso', $this->aviso);
            $resultado->bindValue(':foto', $this->foto);
            
            $resultado->execute();
            
            $pdo = Conn::disconnect();
        }

        public function delete() {

            $pdo = $this->connect();

            $sql = 'DELETE FROM receita
                WHERE id = :id';

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


        public function get_by_id($id) {
            $pdo = $this->connect();
            
            $sql = 'SELECT * FROM receita
                WHERE id = ' . $id;

            $resultado = $pdo->prepare($sql);
            $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>