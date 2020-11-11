drop database fazenda;
create database fazenda;

use fazenda;

CREATE TABLE raca(
	codigo int not null auto_increment primary key,
    nome varchar(45)
);

CREATE TABLE criador(
	codigo int not null auto_increment primary key,
    nome varchar(45) not null,
    nomePropriedade varchar(45) not null
);

CREATE TABLE gado(
	codigo int not null auto_increment,
    nome varchar(45) not null,
    idade int not null,
    peso float not null,
    raca_codigo int not null,
    criador_codigo int not null,
    PRIMARY KEY(codigo, raca_codigo, criador_codigo),
    FOREIGN KEY(raca_codigo) REFERENCES raca(codigo),
    FOREIGN KEY(criador_codigo) REFERENCES criador(codigo)
);


create table veterinario(
	codigo int auto_increment primary key,
    nome varchar(45) not null,
    crmv varchar(45) not null,
    telefone varchar(15) not null
);

CREATE TABLE gado_has_vet(
	ultima_consulta DATE not null,
    tratamento varchar(45) not null,
    gado_codigo int not null,
    veterinario_codigo int not null,
    PRIMARY KEY(gado_codigo, veterinario_codigo),
    FOREIGN KEY(gado_codigo) REFERENCES gado(codigo),
    FOREIGN KEY(veterinario_codigo) REFERENCES veterinario(codigo)
);

INSERT INTO veterinario
	   (nome, crmv, telefone) 
VALUES ("HENRIQUE", 123, 1233414);

select * from veterinario;