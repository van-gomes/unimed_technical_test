create database avaliacao_programador;

drop database avaliacao_programador;

create table cliente (
id integer auto_increment not null primary key, 
nome varchar(80) not null, 
email varchar(80) not null, 
possui_plano char(1), 
plano varchar(80)
);

select * from cliente;

/*
2.a) Inserir dois novos registros na tabela "Produtos" comos seguintes dados:
 ID do produto = 101, Nome = "Laptop", Preço = 1200
 ID do produto = 102, Nome = "Mouse", Preço = 50
 */

create table produtos (
id integer not null primary key, 
nome varchar(50) not null,
preco decimal(5,2) not null
);

insert into produtos(id, nome, preco)
values (101, 'laptop', 1.200);

insert into produtos(id, nome, preco)
values (102, 'mouse', 50);

/* 
2.b) Agora, suponha que o preço do produto "Laptop" tenha aumentadopara 1500.
 Escreva um comando SQL para atualizar esse valor na tabela"Produtos
*/

update produtos
set preco = 1.500
where id = 101;

select * from produtos;

/* exercício 3 */
create table pedidos (
id integer auto_increment not null primary key, 
produto varchar(50),
quantidade int(10),
foreign key (id) references cliente (id)
);

select nome c, produto p, quantidade p
from cliente c, pedidos p
where c.id = p.id;
