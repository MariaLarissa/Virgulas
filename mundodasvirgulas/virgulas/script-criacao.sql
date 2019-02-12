create database web_bank;
use mundodasvirgulas;

create table usuario (
cod_usuario int auto_increment,
nome varchar(255),
idade int(3),
primary key (cod_usuario)
);
create table questoes (
  cod_questao int auto_increment,
  questao varchar(200),
  primary key (cod_questao)
  );
  

insert into usuarios (nome,idade)
values ('fabio',11),
('Joao', 22),
('Luana',33),
('Fê',44),
('Ailton',55);

insert into questoes (questao)
valeus ('“Guri que finta banco, escritório, repartição, fila, balcão, pedido de certidão, imposto a pagar.”

(Lourenço Diaféria)

a) Separar o aposto.

b) Separar o vocativo.

c) Separar orações coordenadas assindéticas.

d) Separar oração subordinada adverbial da oração principal.

e) Separar palavras com a mesma função sintática.');

select * from usuarios;
select * from questoes;

drop database mundodasvirgulas;
