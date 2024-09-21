create database pw2;
use pw2;

CREATE TABLE  tb_aluno (
  id int (5),
  nome varchar(50) ,
  email varchar(50) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_aluno (id,nome,email) values (1,"israel","israel@lucania.com.br");
insert into tb_aluno (id,nome,email) values (2,"nuncio","nuncio@lucania.com.br");
insert into tb_aluno (id,nome,email) values (3,"dias","dias@lucania.com.br");
insert into tb_aluno (id,nome,email) values (4,"lucania","lucania@lucania.com.br");



select * from tb_aluno;

drop table tb_aluno;