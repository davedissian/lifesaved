create database lifesaved;
use lifesaved;

create table if not exists usuario(
	id_usuario int primary key auto_increment NOT null,
    nome varchar(50) not null,
	senha char(40) not null,
	email varchar(50) not null,
    cpf char(11) not null,
    telefone varchar(14) not null,
    sexo char(1) not null
);

create table if not exists clinica(
	id_clinica int primary key auto_increment not null,
    id_usuario int,
    nome varchar(200) not null,
	senha char(40) not null,
    email varchar(50) not null,
    cnpj char(14) not null,
    telefone varchar(11) not null,
    descricao text,
    foreign key(id_usuario) references usuario(id_usuario)
);

create table contato (
    id int not null AUTO_INCREMENT PRIMARY KEY,
    email varchar(80) not null,
    telefone varchar(12) not null,
    mensagem varchar(500) not null
    );

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nome` varchar(19) DEFAULT NULL,
  `sigla` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `estados` (`id_estado`, `nome`, `sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');