CREATE SCHEMA `teste_alphacode` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ;

CREATE TABLE `teste_alphacode`.`contatos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `email` VARCHAR(110) NOT NULL,
  `profissao` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `celular` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id`));