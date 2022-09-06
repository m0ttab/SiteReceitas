<?php

include_once 'Connect.class.php';

class Cadastro extends Connect {

private $nomeUsuario;
private $nicknameUsuario;
private $emailUsuario;
private $senhaUsuario;
private $generoUsuario;
private $paisUsuario;
private $prefUsuario;
private $condicaoUsuario;
private $imagemUsuario;
private $termoUsuario;
private $adminCadastro;

public function getIdCadastro(){
    return $this->idCadastro;
}

public function getNomeUsuario(){
    return $this->nomeUsuario;
}

public function getNicknameUsuario(){
    return $this->nicknameUsuario;
}

public function getEmailUsuario(){
    return $this->emailUsuario;
}

public function getSenhaUsuario(){
    return $this->senhaUsuario;
}

public function getGeneroUsuario(){
    return $this->generoUsuario;
}

public function getPaisUsuario(){
    return $this->paisUsuario;
}

public function getPrefUsuario(){
    return $this->prefUsuario;
}

public function getImagemUsuario(){
    return $this->imagemUsuario;
}

public function getTermoUsuario(){
    return $this->termoUsuario;
}

public function getAdminCadastro(){
    return $this->adminCadastro;
}

public function setIdCadastro($valor){
    $this->idCadastro = $valor;
}

public function setNomeUsuario($valor){
    $this->nomeUsuario = $valor;
}

public function setNicknameUsuario($valor){
    $this->nicknameUsuario = $valor;
}

public function setEmailUsuario($valor){
    $this->emailUsuario = $valor;
}

public function setSenhaUsuario($valor){
    $this->senhaUsuario = $valor;
}

public function setGeneroUsuario($valor){
    $this->generoUsuario = $valor;
}

public function setPaisUsuario($valor){
    $this->paisUsuario = $valor;
}

public function setPrefUsuario($valor){
    $this->prefUsuario = $valor;
}

public function setImagemUsuario($valor){
    $this->imagemUsuario = $valor;
}

public function setTermoUsuario($valor){
    $this->termoUsuario = $valor;
}

public function setAdminCadastro($valor){
    $this->adminCadastro = $valor;
}

public function incluirNovoUsuario(){
    $pdo = Connect::connect();

    $sql = 'INSERT INTO cadastro_usuario (nome, nickname, email, senha, genero, pais, pref, imagem, termo, admin) VALUES(:nome, :nickname, :email, :senha, :genero, :pais, :pref, :imagem, :termo, :admin)';

    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(':nome', $this->nomeUsuario);
    $resultado->bindValue(':nickname', $this->nicknameUsuario);
    $resultado->bindValue(':email', $this->emailUsuario);
    $resultado->bindValue(':senha', $this->senhaUsuario);
    $resultado->bindValue(':genero', $this->generoUsuario);
    $resultado->bindValue(':pais', $this->paisUsuario);
    $resultado->bindValue(':pref', $this->prefUsuario);
    $resultado->bindValue(':imagem', $this->imagemUsuario);
    $resultado->bindValue(':termo', $this->termoUsuario);
    $resultado->bindValue(':admin', $this->adminCadastro);
    $resultado->execute();

    $pdo = Connect::disconnect();
}

public function excluirReceita(){
    $pdo = Connect::connect();

    if($this->idCadastro !== null && $this->idCadastro != ''){

    $sql = 'DELETE FROM cadastro_usuario WHERE id = :id';
    }

    $resultado = $pdo->prepare($sql);
    $resultado->bindValue(':id', $this->idCadastro);
    $resultado->execute();

    $pdo = Connect::disconnect();
}

public function getCadastroById($idUsuario){
    $pdo = Connect::connect();

    $sql = "SELECT * FROM cadastro_usuario WHERE id = '" . $idUsuario . "'";

    $resultado = $pdo->prepare($sql);
    $resultado->execute();

    $pdo = Connect::disconnect();

    $result = $resultado->fetchAll(PDO::FETCH_ASSOC);

    if ($result) return $result[0];
 }

}

?>