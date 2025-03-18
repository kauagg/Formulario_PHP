create schema teste;

use teste;

CREATE TABLE usuarios(
	id INT auto_increment primary key,
    nome varchar(100),
    email varchar(100),
    sexo varchar(10),
    telefone varchar(20),
    endereco varchar(255),
    cidade varchar(100),
    estado varchar(50),
    bairro varchar(50),
    pais varchar(50),
    login varchar(50),
    senha varchar(100)
    
);