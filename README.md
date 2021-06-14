Crie uma data base no banco mySqL e após isso execute a query a baixo para criar uma data base:

CREATE TABLE `produtos` (
  `id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(120) NOT NULL,
  `valor` DECIMAL(10,2) NOT NULL,
  `quantidade` BIGINT NOT NULL,
  `slug` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
