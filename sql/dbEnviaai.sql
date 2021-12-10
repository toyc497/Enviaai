CREATE DATABASE IF NOT EXISTS dbEnviaai;

USE dbEnviaai;

CREATE TABLE IF NOT EXISTS dbEnviaai.vendedor(
    idVend INTEGER(5) NOT NULL AUTO_INCREMENT,
    nomeVend VARCHAR(50) NOT NULL,
    emailVend VARCHAR(50) NOT NULL,
    telefoneVend BIGINT NOT NULL,
    cnpjVend BIGINT NOT NULL,
    estadoVend VARCHAR(2) NOT NULL,
    cepVend INTEGER(8) NOT NULL,
    enderecoVend VARCHAR(40) NOT NULL,
    senhaVend INTEGER(8) NOT NULL,
    PRIMARY KEY(idVend)
);

CREATE TABLE IF NOT EXISTS dbEnviaai.produto(
    idProduto INTEGER(5) NOT NULL AUTO_INCREMENT,
    nomeProd VARCHAR(30) NOT NULL,
    peso DECIMAL(5,2) NOT NULL,
    altura INTEGER(3) NOT NULL,
    largura INTEGER(3) NOT NULL,
    profundidade INTEGER(3) NOT NULL,
    codVend INTEGER(5) NOT NULL,
    PRIMARY KEY(idProduto),
    FOREIGN KEY(codVend) REFERENCES vendedor(idVend)
);

CREATE TABLE IF NOT EXISTS dbEnviaai.destinatario(
    idDestin INTEGER(5) NOT NULL AUTO_INCREMENT,
    nomeDestin VARCHAR(50) NOT NULL,
    cpfDestin BIGINT NOT NULL,
    telefoneDestin BIGINT NOT NULL,
    cepDestin INTEGER(8) NOT NULL,
    enderecoDestin VARCHAR(40) NOT NULL,
    codVend INTEGER(5) NOT NULL,
    PRIMARY KEY(idDestin),
    FOREIGN KEY(codVend) REFERENCES vendedor(idVend)
);

CREATE TABLE IF NOT EXISTS dbEnviaai.envio(
    idEnvio INTEGER(5) NOT NULL AUTO_INCREMENT,
    codProd INTEGER(5) NOT NULL,
    codDestin INTEGER(5) NOT NULL,
    codVend INTEGER(5) NOT NULL,
    statusEnvio TINYINT NOT NULL,
    PRIMARY KEY(idEnvio),
    FOREIGN KEY(codProd) REFERENCES produto(idProduto),
    FOREIGN KEY(codDestin) REFERENCES destinatario(idDestin),
    FOREIGN KEY(codVend) REFERENCES vendedor(idVend)
);

/*...........................................................*/

/* STATUS DO ENVIO
    1 = Buscar produto no ecommerce;
    2 = Saindo da transportadora;
    3 = Produto em transporte;
    4 = Entregue a distribuidora;
    5 = Saindo para entrega;
    6 = Produto entregue;
*/

/* INSERT PARA TESTE */

INSERT INTO vendedor
(nomeVend,emailVend,telefoneVend,cnpjVend,estadoVend,cepVend,enderecoVend,senhaVend)
VALUES
('Francisco Costa','francisco@gmail.com',61955554444,42425656323215,'DF',52312678,'Quadra 19',22225555),
('Emilia Santiago','emilia@outlook.com',54911113333,12125656898902,'GO',72760192,'Quadra 15',44445555),
('Pedro Silva','pedro4silva@yahoo.com',63966661111,33556699887715,'MG',25310465,'Quadra 22',31310506),
('Joao Brito','joao.brito@gmail.com',61933330088,20136564785213,'AM',22116534,'Quadra 03',77779999),
('Josué da Cunha','josue@chimp.com',61977774455,34345656121203,'RJ',84563321,'Quadra 17',14142233);

INSERT INTO produto 
(nomeProd,peso,altura,largura,profundidade,codVend)
VALUES
('TV',15.32,52,130,10,3),
('Bicicleta',13,52,150,15,5),
('Tênis',0.80,10,30,20,4),
('Bola',0.35,20,20,20,1),
('Notebook',3.20,5,30,20,2);

INSERT INTO destinatario
(nomeDestin,cpfDestin,telefoneDestin,cepDestin,enderecoDestin,codVend)
VALUES
('Matheus Velasques',88879794545,61954546666,72760192,'Quadra 25 Lote 15',3),
('Fillipe Luíz',11233455678,63944441111,72555444,'Quadra 11 Lote 03',2),
('Lucas Santos',22233355561,6122228888,73666333,'Quadra 19 Lote 14',5),
('Joao Gabriel',11122256432,64910102233,71111555,'Quadra 22 Lote 11',4),
('Antonio José',55544455510,65977775858,73222111,'Quadra 06 Lote 05',1);

INSERT INTO envio
(codProd,codDestin,codVend,statusEnvio)
VALUES 
(6,3,4,1),
(4,2,5,1),
(5,1,1,1);