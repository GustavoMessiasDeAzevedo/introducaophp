CREATE DATABASE escola_gustavo;

USE escola_gustavo;

CREATE TABLE alunos (

    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    uf VARCHAR(2) NOT NULL,
    cidade VARCHAR(60) NOT NULL
);

SELECT* FROM alunos;