<?php

include_once 'Connect.class.php';

class Cadastro extends Connect {

private $id;
private $nome;
private $nickname;
private $email;
private $senha;
private $genero;
private $pais;
private $pref;
private $cond;
private $imagem;

public function getIdCadastro(){
    return $this->id;
}

public function getNomeUsuario(){
    return $this->nome;
}

public function getNicknameUsuario(){
    return $this->nickname;
}

public function getEmailUsuario(){
    return $this->email;
}

public function getSenhaUsuario(){
    return $this->senha;
}

public function getGeneroUsuario(){
    return $this->genero;
}

public function getPaisUsuario(){
    return $this->pais;
}

public function getPrefUsuario(){
    return $this->pref;
}

public function getCondUsuario(){
    return $this->cond;
}

public function getImagemUsuario(){
    return $this->imagem;
}

public function setIdCadastro($valor){
    $this->id = $valor;
}

public function setNomeUsuario($valor){
    $this->nome = $valor;
}

public function setNicknameUsuario($valor){
    $this->nickname = $valor;
}

public function setEmailUsuario($valor){
    $this->email = $valor;
}

public function setSenhaUsuario($valor){
    $this->senha = $valor;
}

public function setGeneroUsuario($valor){
    $this->genero = $valor;
}

public function setPaisUsuario($valor){
    $this->pais = $valor;
}

public function setPrefUsuario($valor){
    $this->pref = $valor;
}

public function setCondUsuario($valor){
    $this->cond = $valor;
}

public function setImagemUsuario($valor){
    $this->imagem = $valor;
}

public function incluirNovoUsuario(){
    $pdo = Connect::connect();

    $sql = 'INSERT INTO cadastro_usuario (id, nome, nickname, email, senha, genero, pais, pref, cond, imagem) VALUES(:id, :nome, :nickname, :email, :senha, :genero, :pais, :pref, :cond, :imagem)';

    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(':id', $this->id);
    $resultado->bindValue(':nome', $this->nome);
    $resultado->bindValue(':nickname', $this->nickname);
    $resultado->bindValue(':email', $this->email);
    $resultado->bindValue(':senha', $this->senha);
    $resultado->bindValue(':genero', $this->genero);
    $resultado->bindValue(':pais', $this->pais);
    $resultado->bindValue(':pref', $this->pref);
    $resultado->bindValue(':cond', $this->cond);
    $resultado->bindValue(':imagem', $this->imagem);
    $resultado->execute();

    $pdo = Connect::disconnect();
}

public function excluirUsuario(){
    $pdo = Connect::connect();

    if($this->id !== null && $this->is != ''){

    $sql = 'DELETE FROM cadastro_usuario WHERE id = :id';
    }

    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(':id', $this->id);
    $resultado->execute();

    $pdo = Connect::disconnect();
}

public function getCadastroById($id){
    $pdo = Connect::connect();

    $sql = "SELECT * FROM cadastro_usuario WHERE id = '" . $id . "'";

    $resultado = $pdo->prepare($sql);
    $resultado->execute();

    $pdo = Connect::disconnect();

    $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

    if ($result) return $result[0];
 }

}

?>