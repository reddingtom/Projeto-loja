create database boom;

use boom;

create table cargo (
    idcargo int primary key auto_increment,
    nomedocargo varchar(20)
);


create table conta (
    idconta int primary key auto_increment,
    nome varchar(50),
    email varchar(100),
    senha varchar(20),
    sexo char(9),
    endereco varchar(200),
    endereco2 varchar(200),
    cidade varchar(50),
    estado varchar(50),
    cep varchar(9),
    idcargo int,
    foreign key (idcargo) references cargo (idcargo)
);

create table itens (
    idprod int primary key auto_increment,
    nome varchar(30),
    quantidade char(4),
    preco char(6),
    descricao varchar(200),
    tipo varchar(40),
    imagem longblob not null
    
);

create table carrinho (
    idcarrinho int primary key auto_increment,
    idprod int,
    foreign key (idprod) references itens (idprod),
    idconta int,
    foreign key (idconta) references conta (idconta)
);


insert into cargo values (null, 'Adm');

insert into conta values (null, 'Ababoi', 'aa', '1234', 'Masculino', '1', '2', 'b', 'c', 'lol', 1);

