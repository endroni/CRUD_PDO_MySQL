/* Cria um banco */
CREATE DATABASE db_crud_pdo;

/* Coloca em uso o banco criado acima */
USE db_crud_pdo;

/* Cria a tabela  com suas colunas */
CREATE TABLE tbl_usuario 
	( 
		id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(50),
        sexo CHAR(1),
        cidade VARCHAR(30)
	);

