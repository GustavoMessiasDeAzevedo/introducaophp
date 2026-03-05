CREATE DATABASE loja;

USE loja;

CREATE TABLE produtos{
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    estoque INT NOT NULL
}

INSERT INTO produtos (nome, preco, estoque) VALUES
('Guitarra', 1483.00, 58),
('Bateria', 576.00, 37),
('Caixa de som', 675.00, 12);

SELECT id , nome, preco, estoque FROM produtos;