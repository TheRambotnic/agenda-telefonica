CREATE DATABASE AgendaTelefonica;
USE AgendaTelefonica;

CREATE TABLE Contatos (
	`id_contato`	INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`nome`			VARCHAR(60) NOT NULL,
	`email`			VARCHAR(50) NULL,
	`telefone`		VARCHAR(14) NOT NULL,
	`celular`		VARCHAR(15) NOT NULL,
	`endereco`		VARCHAR(50) NOT NULL,
	`num`			VARCHAR(5) NOT NULL,
	`bairro`		VARCHAR(30) NOT NULL,
	`cidade`		VARCHAR(50) NOT NULL,
	`uf`			CHAR(2) NOT NULL,
	`cep`			VARCHAR(9) NOT NULL,
	`observacoes`	VARCHAR(2000) NULL
);

INSERT INTO Contatos (`nome`, `email`, `telefone`, `celular`, `endereco`, `num`, `bairro`, `cidade`, `uf`, `cep`, `observacoes`)
VALUES	("Lucas Rafael de Oliveira Longuini", "lucasrafaellonguini09@gmail.com", "(14) 3621-4551", "(14) 99814-9936", "Rua Floriano Peixoto", "76", "Vila Carvalho", "Jaú", "SP", "17201-100", "Desenvolvedor Web"),
		("João", "joão@gmail.com", "(14) 3654-5678", "(14) 98765-4321", "Rua Pedro Paes Azevedo", "123", "Bairro Teste", "Aracaju", "SE", "49020-450", "João gosta de surfar na web"),
		("Maria", "maria@gmail.com", "(14) 3612-9826", "(14) 99156-4689", "Rua Pedro Stefanini", "1722", "Bairro Teste 2", "Americana", "SP", "13476-555", "Maria precisa entregar os relatórios até segunda-feira"),
		("Vitor", "vitor@gmail.com", "(35) 3655-8945", "(35) 99514-8956", "Quadra SHCGN 705 Bloco H", "216", "Bairro Teste 3", "Brasília", "DF", "70730-768", "Vitor está com o projeto atrasado!"),
		("Amanda", "amanda@gmail.com", "(01) 2546-4258", "(01) 95482-2458", "Rua Dezoito", "288", "Bairro Teste 4", "Suzano", "SP", "08695-770", "Amanda esqueceu de entregar os papéis na quarta-feira passada"),
		("Matheus", "matheus@gmail.com", "(87) 2436-2015", "(87) 98725-2256", "Travessa Alto da Bela Vista", "510", "Bairro Teste 5", "Salvador", "BA", "41741-395", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Carla", "carla@gmail.com", "(71) 2493-4367", "(71) 99563-4367", "Rua Louveira", "237", "Bairro Teste 6", "Piracicaba", "SP", "13423-484", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Nicole", "nicole@gmail.com", "(18) 6676-4277", "(18) 93562-2462", "Rua Capitão Assis", "928", "Bairro Teste 7", "Assis", "SP", "19800-061", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Giovanna", "nicole@gmail.com", "(11) 9765-3756", "(11) 92465-2511", "Rua Ágata", "1280", "Bairro Teste 8", "Cotia", "SP", "06717-095", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Renan", "renan@gmail.com", "(64) 6660-2764", "(64) 93798-2003", "Rua Artur", "374", "Bairro Teste 9", "São Paulo", "SP", "02467-120", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Martim", "martim@gmail.com", "(19) 5146-5666", "(19) 92012-3232", "Rua Armando Aguiar", "1209", "Bairro Teste 10", "São João da Boa Vista", "SP", "13872-459", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Marisa", "marisa@gmail.com", "(11) 5325-2586", "(11) 92165-0325", "Rua Amaral dos Barretos", "1569", "Bairro Teste 11", "São Paulo", "SP", "05158-040", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Anna", "anna@gmail.com", "(11) 6673-6594", "(11) 90235-2458", "Rua Manoel Saraiva", "790", "Bairro Teste 12", "Osasco", "SP", "06023-060", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Igor", "igor@gmail.com", "(11) 4369-2995", "(11) 94685-2015", "Avenida Senador Flaquer", "248", "Bairro Teste 13", "São Bernardo do Campo", "SP", "09725-443", "Lorem ipsum dolor sit amet, consectetur adipisicing elit"),
		("Paulo", "paulo@gmail.com", "(71) 2805-6386", "(71) 98765-5211", "Rua Clécio Rocha", "777", "Bairro Teste 14", "Salvador", "BA", "41250-240", "Lorem ipsum dolor sit amet, consectetur adipisicing elit");
