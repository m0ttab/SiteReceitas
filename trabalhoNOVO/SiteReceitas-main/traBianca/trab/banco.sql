USE sitereceitas;

CREATE TABLE cadastro_receita(
    id INT PRIMARY KEY,
nome VARCHAR(100),
autor VARCHAR(30),
    tempo INT,
    tipo VARCHAR(20),
    ingredientes VARCHAR(400),
    modo VARCHAR(500),
    aviso VARCHAR(200),
    imagem VARCHAR(200)
);

CREATE TABLE cadastro_usuario(
    id INT PRIMARY KEY,
nome VARCHAR(100),
nickname VARCHAR(30),
    email VARCHAR(80),
    senha VARCHAR(20),
    genero VARCHAR(20),
    pais VARCHAR(50),
    pref VARCHAR(100),
    cond VARCHAR(200),
    termo BOOLEAN,
    imagem VARCHAR(200)
);

CREATE TABLE alimentos(
    id INT PRIMARY KEY,
nome VARCHAR(100) PRIMARY KEY,
categoria VARCHAR(100)
);