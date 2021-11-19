create database clientesnewm;

use clientesnewm;

create table cliente (
-- usei o collate latin1_general_ci para ser indiferente maiusculas e minusculas
nome varchar(150) COLLATE latin1_general_ci ,
nascimento date,
CPF int,
Celular int,
Email varchar (150) COLLATE latin1_general_ci,
Endereço varchar(150),
Observação text
);

-- select limit, limitando a quantidade de registros que aparecem
select nome, nascimento, CPF, celular, email, endereço, observação from cliente limit 10
