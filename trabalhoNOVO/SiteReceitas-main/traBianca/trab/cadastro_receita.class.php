<?php

include_once 'Connect.class.php';
    
class Cadastro extends Connect {

private $id;
private $nome;
private $autor;
private $tempo;
private $tipo;
private $ingredientes;
private $modo;
private $aviso;
private $imagem;


public function getIdCadastro(){
    return $this->id;
}

public function getNomeReceita(){
    return $this->nome;
}

public function getAutorReceita(){
    return $this->autor;
}

public function getTempoReceita(){
    return $this->tempo;
}

public function getTipoReceita(){
    return $this->tipo;
}

public function getIngredientesReceita(){
    return $this->ingredientes;
}

public function getModoReceita(){
    return $this->modo;
}

public function getAvisoReceita(){
    return $this->aviso;
}

public function getImagemReceita(){
    return $this->imagem;
}

public function setIdCadastro($valor){
    $this->id = $valor;
}

public function setNomeReceita($valor){
    $this->nome = $valor;
}

public function setAutorReceita($valor){
    $this->autor = $valor;
}

public function setTempoReceita($valor){
    $this->tempo = $valor;
}

public function setTipoReceita($valor){
    $this->tipo = $valor;
}

public function setIngredientesReceita($valor){
    $this->ingredientes = $valor;
}

public function setModoReceita($valor){
    $this->modo = $valor;
}

public function setAvisoReceita($valor){
    $this->aviso = $valor;
}

public function setImagemReceita($valor){
    $this->imagem = $valor;
}

public function incluirNovaReceita(){
    $pdo = Connect::connect();

    $sql = 'INSERT INTO cadastro_receita (id, nome, autor, tempo, tipo, ingredientes, modo, aviso) VALUES(:id, :nome, :autor, :tempo, :tipo, :ingredientes, :modo, :aviso)';

    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(':id', $this->id);
    $resultado->bindValue(':nome', $this->nome);
    $resultado->bindValue(':autor', $this->autor);
    $resultado->bindValue(':tempo', $this->tempo);
    $resultado->bindValue(':tipo', $this->tipo);
    $resultado->bindValue(':ingredientes', $this->ingredientes);
    $resultado->bindValue(':modo', $this->modo);
    $resultado->bindValue(':aviso', $this->aviso);

    $resultado->execute();

    $pdo = Connect::disconnect();
}

public function excluirReceita(){
    $pdo = Connect::connect();

    if($this->id !== null && $this->id != ''){
        $sql = 'DELETE FROM cadastro_receita WHERE id = :id';
    }

    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(':id', $this->id);
    $resultado->execute();

    $pdo = Connect::disconnect();
}

public function getCadastroById($id){
    $pdo = Connect::connect();

    $sql = "SELECT * FROM cadastro_receita WHERE id = '" . $idReceita . "'";

    $resultado = $pdo->prepare($sql);
    $resultado->execute();

    $pdo = Connect::disconnect();

    $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

    if ($result) return $result[0];
}
}

?>