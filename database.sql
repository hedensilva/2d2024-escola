DROP DATABASE IF EXISTS escola;
CREATE DATABASE escola;
USE escola;
CREATE TABLE aluno(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    curso VARCHAR(50) NOT NULL,
    transporte_escolar VARCHAR(4) NOT NULL
);
CREATE TABLE esporte(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL
);
CREATE TABLE aluno_esporte(
	id INT PRIMARY KEY AUTO_INCREMENT,
    ano DATE NOT NULL,
    id_aluno INT NOT NULL,
    id_esporte INT NOT NULL,
    FOREIGN KEY(id_aluno) REFERENCES aluno(id),
    FOREIGN KEY(id_esporte) REFERENCES esporte(id)  
);
