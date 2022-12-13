CREATE DATABASE siteReceitas;
use siteReceitas;

create table receita (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
   	autor varchar(200) NOT NULL,
    tempo varchar(20) NOT NULL,
    ingredientes varchar(600) NOT NULL,
    modo varchar(600) NOT NULL,
    tipo varchar(50) NOT NULL,
    aviso varchar(100) NOT NULL,
    foto varchar(600) NOT NULL,
    primary key(id)
);

create table contato (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
   	email varchar(200) NOT NULL,
    mensagem varchar(500) NOT NULL,
    primary key(id)
);

create table cadastro (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
   	nickname varchar(200) NOT NULL,
    email varchar(200) NOT NULL,
    senha varchar(20) NOT NULL,
    pais varchar(100) NOT NULL,
    pref varchar(100) NOT NULL,
    cond varchar(200) NOT NULL,
    admin boolean NOT NULL,
    primary key(id)
);

create table lista (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
    receita_id int NOT NULL,
    cadastro_id int NOT NULL,
    FOREIGN KEY (receita_id) REFERENCES receita(id),
    FOREIGN KEY (cadastro_id) REFERENCES cadastro(id),
    primary key(id)
);