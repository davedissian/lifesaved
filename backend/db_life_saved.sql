create database lifesaved;
use lifesaved;

create table if not exists usuario(
	id_usuario int primary key auto_increment NOT null,
    nome varchar(50) not null,
	senha char(40) not null,
	email varchar(50) not null,
    cpf char(14) not null,
    telefone varchar(14) not null,
    sexo char(1) not null
);

create table if not exists clinica(
	id_clinica int primary key auto_increment not null,
    id_usuario int,
    nome varchar(200) not null,
	senha char(40) not null,
    email varchar(50) not null,
    cnpj varchar(20) not null,
    telefone varchar(14) not null,
    descricao text,
    foreign key(id_usuario) references usuario(id_usuario)
);

create table contato (
    id int not null AUTO_INCREMENT PRIMARY KEY,
    email varchar(80) not null,
    telefone varchar(12) not null,
    mensagem varchar(500) not null
    );
