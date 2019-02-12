create database web_bank;
use mundodasvirgulas;

create table usuario (
cod_usuario int auto_increment,
nome varchar(255),
idade int(3),
primary key (cod_usuario)
);

insert into usuarios (nome,idade)
values ('fabio',11),
('Joao', 22),
('Luana',33),
('Fê',44),
('Ailton',55);

select * from usuarios;

drop database mundodasvirgulas;
