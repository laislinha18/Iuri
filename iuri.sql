create database db_iuri;
use db_iuri;

create table tb_usuarios(
	usu_codigo INT AUTO_INCREMENT PRIMARY KEY,
    usu_nome VARCHAR(45) NOT NULL,
    usu_senha VARCHAR(10) NOT NULL
);

INSERT INTO tb_usuarios(usu_nome,usu_senha) VALUES
('Laisla', '123123'),
('Paloma', '321321');