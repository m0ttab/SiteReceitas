<?php

include_once 'Connect.class.php';
    
class Cadastro extends Connect {

private $nomeReceita;
private $autorReceita;
private $tempoReceita;
private $tipoReceita;
private $ingredientesReceita;
private $modoReceita;
private $avisoReceita;
private $imagemReceita;
private $adminCadastro;


public function getIdCadastro(){
    return $this->idCadastro;
}

public function getNomeReceita(){
    return $this->nomeReceita;
}

public function getAutorReceita(){
    return $this->autorReceita;
}

public function getTempoReceita(){
    return $this->tempoReceita;
}

public function getTipoReceita(){
    return $this->tipoReceita;
}

public function getIngredientesReceita(){
    return $this->autorReceita;
}

public function getModoReceita(){
    return $this->modoReceita;
}

public function getAvisoReceita(){
    return $this->avisoReceita;
}

public function getImagemReceita(){
    return $this->imagemReceita;
}

public function getAdminCadastro(){
    return $this->adminCadastro;
}

public function setIdCadastro($valor){
    $this->idCadastro = $valor;
}

public function setNomeReceita($valor){
    $this->nomeReceita = $valor;
}

public function setAutorReceita($valor){
    $this->autorReceita = $valor;
}

public function setTempoReceita($valor){
    $this->tempoReceita = $valor;
}

public function setTipoReceita($valor){
    $this->tipoReceita = $valor;
}

public function setIngredientesReceita($valor){
    $this->ingredientesReceita = $valor;
}

public function setModoReceita($valor){
    $this->modoReceita = $valor;
}

public function setAvisoReceita($valor){
    $this->avisoReceita = $valor;
}

public function setImagemReceita($valor){
    $this->imagemReceita = $valor;
}

public function setAdminCadastro($valor){
    $this->adminCadastro = $valor;
}

public function incluirNovaReceita(){
    $pdo = Connect::connect();

    $sql = 'INSERT INTO cadastro_receita (nome, autor, tempo, tipo, ingredientes, modo, aviso, admin) VALUES(:nome, :autor, :tempo, :tipo, :ingredientes, :modo, :aviso, :admin)';

    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(':nome', $this->nomeReceita);
    $resultado->bindValue(':autor', $this->autorReceita);
    $resultado->bindValue(':tempo', $this->tempoReceita);
    $resultado->bindValue(':tipo', $this->tipoReceita);
    $resultado->bindValue(':ingredientes', $this->ingredientesReceita);
    $resultado->bindValue(':modo', $this->modoReceita);
    $resultado->bindValue(':aviso', $this->avisoReceita);
    $resultado->bindValue(':admin', $this->adminCadastro);

    $resultado->execute();

    $pdo = Connect::disconnect();
}

public function excluirReceita(){
    $pdo = Connect::connect();

    if($this->idCadastro !== null && $this->idCadastro != ''){
        $sql = 'DELETE FROM cadastro_receita WHERE id = :id';
    }

    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(':id', $this->idCadastro);
    $resultado->execute();

    $pdo = Connect::disconnect();
}

public function getCadastroById($idReceita){
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