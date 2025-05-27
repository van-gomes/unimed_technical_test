CREATE DATABASE sistema_clientes;
GO

USE sistema_clientes;
GO

CREATE TABLE clientes (
    id INT IDENTITY(1,1) PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    possui_plano TINYINT NOT NULL,
    nome_plano VARCHAR(255) DEFAULT NULL
);

SELECT * FROM clientes;
delete from clientes WHERE id = 2;
