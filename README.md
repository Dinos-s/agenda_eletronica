# Projeto de uma agenda eletrônica

## O que está sendo utilizado:
* PHP
* MySQL
* Bootstrap
* JQuery

Comandos SQL, para criar a tabela eo banco de dados:

CREATE DATABASE agenda;

CREATE TABLE agenda.users (
	id int not null auto_increment primary key,
	nome varchar(255) not null,
	email varchar(255) not null,
	password varchar(255) not null
);

CREATE TABLE agenda.atividades (
	id int not null auto_increment primary key,
	user_id int not null,
	nome varchar(255) not null,
	descricao text,
	createdAt datetime,
	updatedAt datetime,
	status ENUM('pendente', 'concluida', 'cancelada') DEFAULT 'pendente',
    FOREIGN KEY (user_id) REFERENCES agenda.users(id)
);