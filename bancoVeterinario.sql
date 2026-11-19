create database if not exists clinicaVeterinaria; -- Criação de banco

use clinicaVeterinaria; -- ultilizar o banco clinica veterinaria

create table if not exists veterinario(
codigo int not null auto_increment primary key,
nome varchar(250) not null,
especialidade varchar(100) not null,
salario decimal(10,2) not null,
endereco varchar(300) not null,
telefone varchar(20) not null


)engine = innoDB; -- Construção do banco tabelas

create table if not exists tutor(
codigo int not null auto_increment primary key,
nome varchar(250) not null,
cpf varchar(14) not null,
telefone varchar(20) not null,
email varchar(150) not null,
endereco varchar(300) not null

)engine = innoDB; -- tutor = dono do animal

create table if not exists animal(
codigo int not null auto_increment primary key,
nome varchar(100) not null,
especie varchar(50) not null,
raca varchar(100) not null,
sexo varchar(10) not null,
idade int not null,
peso decimal(6,2) not null,
codigoTutor int not null,
foreign key (codigoTutor) references tutor(codigo) -- liga o animal ao tutor

)engine = innoDB;

select * from  veterinario; -- visualizar os dados do banco
select * from  tutor;
select * from  animal;
