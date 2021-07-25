CREATE DATABASE bancoprova;
USE bancoprova;

CREATE TABLE `usuario`(
	`nome` VARCHAR(200),
    `nomeusuario` VARCHAR(200),
    `email` VARCHAR(200),
    `senha` VARCHAR(32), 
    CONSTRAINT PRIMARY KEY(nomeusuario)
);