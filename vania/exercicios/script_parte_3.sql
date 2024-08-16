create database avaliacao_programador;

drop database avaliacao_programador;

CREATE TABLE CLIENTE (
ID INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY, 
NOME VARCHAR(80) NOT NULL, 
EMAIL VARCHAR(80) NOT NULL, 
POSSUI_PLANO CHAR(1), 
PLANO VARCHAR(80)
);

select * from cliente;

/*
2.a) Inserir dois novos registros na tabela "Produtos" comos seguintes dados:
 ID do produto = 101, Nome = "Laptop", Preço = 1200
 ID do produto = 102, Nome = "Mouse", Preço = 50
 
2.b) Agora, suponha que o preço do produto "Laptop" tenha aumentadopara 1500.
 Escreva um comando SQL para atualizar esse valor na tabela"Produtos
*/

create table Produtos (
ID INTEGER NOT NULL PRIMARY KEY, 
NOME varchar(50) not null,
PRECO decimal(5,2) not null
);

insert INTO Produtos(id, nome, preco)
values (101, 'Laptop', 1.200);

insert INTO Produtos(id, nome, preco)
values (102, 'Mouse', 50);

update Produtos
set preco = 1.500
where id = 101;

select * from Produtos;

/* Exercício 3 */
create table Pedidos (
id INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY, 
produto varchar(50),
quantidade int(10),
foreign key (ID) references Cliente (ID)
);

select nome C, produto P, quantidade P
from Cliente C, Pedidos P
where C.id = P.id;
