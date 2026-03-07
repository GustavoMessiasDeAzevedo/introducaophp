CREATE DATABASE escola_gustavo;

USE escola_gustavo;

CREATE TABLE alunos (

    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(70) NOT NULL,
    idade TINYINT(256),
    uf CHAR(2),
    cidade VARCHAR(50) 
);

INSERT INTO alunos (nome, idade, uf, cidade)
        VALUES('Gustavo Messias', 21, SP, 'Marília'),
              ('Juliana', 22, SP, 'Marília'),
              ('Bianca', 17, SP, 'Marília'),

SELECT* FROM alunos;