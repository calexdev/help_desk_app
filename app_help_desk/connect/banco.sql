create database help_desk
  CHARACTER SET utf8
  COLLATE utf8_general_ci;
  
create table usuario(
    id int auto_increment not null primary key,
    email varchar(50) not null,
    senha varchar(255) not null
);

create table chamado(
    id_chamado_usuario int not null,
    titulo varchar(255) not null ,
    categoria varchar(255) not null,
    descricao varchar(255) not null
);