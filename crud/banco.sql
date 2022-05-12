CREATE DATABASE crud;

USE crud;

CREATE TABLE cliente(
    cod int primary key auto_increment,
    nome varchar(60) not null,
    email varchar(60) not null,
    cpf char(11) not null,
    estadocivil varchar(15) not null
);

