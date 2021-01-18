CREATE DATABASE AgendaTelefonica;
USE AgendaTelefonica;

CREATE TABLE Contatos (
	`id_contato`	INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`nome`			VARCHAR(60) NOT NULL,
	`email`			VARCHAR(50) NULL,
	`telefone`		VARCHAR(15) NOT NULL,
	`celular`		VARCHAR(15) NOT NULL,
	`endereco`		VARCHAR(50) NOT NULL,
	`num`			VARCHAR(5) NOT NULL,
	`bairro`		VARCHAR(30) NOT NULL,
	`cidade`		VARCHAR(50) NOT NULL,
	`uf`			CHAR(2) NOT NULL,
	`cep`			VARCHAR(10) NOT NULL,
	`observacoes`	VARCHAR(2000) NULL
);

INSERT INTO Contatos (`nome`, `email`, `telefone`, `celular`, `endereco`, `num`, `bairro`, `cidade`, `uf`, `cep`, `observacoes`)
VALUES	("Lucas Rafael de Oliveira Longuini", "lucasrafaellonguini09@gmail.com", "(14) 3621-4551", "(14) 99814-9936", "Rua Floriano Peixoto", "76", "Vila Carvalho", "Jaú", "SP", "17201-100", "Desenvolvedor Web"),
		("João", "joão@gmail.com", "(14) 36534-5678", "(14) 98765-4321", "Rua Teste", "123", "Bairro Teste", "Bauru", "SP", "12345-678", "João gosta de surfar na web"),
		("Maria", "maria@gmail.com", "(14) 3612-9826", "(14) 99156-4689", "Rua Teste 2", "456", "Bairro Teste 2", "Campinas", "SP", "53269-123", "Maria precisa entregar os relatórios até segunda-feira");
