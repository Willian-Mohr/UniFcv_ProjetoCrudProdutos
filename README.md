Crie uma data base no banco mySqL e após isso execute a query a baixo para criar uma data base:

CREATE TABLE `produtos` (
  `id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(120) NOT NULL,
  `valor` DECIMAL(10,2) NOT NULL,
  `quantidade` BIGINT NOT NULL,
  `slug` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB


Para gerar uma massa de dados, execute a query a baixo:

INSERT INTO `produtos` (`id`, `descricao`, `valor`, `quantidade`, `slug`) VALUES (NULL, 'Xiaomi Mi 9', '299.00', '3', 'Celular');
INSERT INTO `produtos` (`id`, `descricao`, `valor`, `quantidade`, `slug`) VALUES (NULL, 'Xiaomi Mi 10', '3950.00', '6', 'Celular');
INSERT INTO `produtos` (`id`, `descricao`, `valor`, `quantidade`, `slug`) VALUES (NULL, 'Xiaomi Mi 11', '4359.90', '9', 'Celular');
INSERT INTO `produtos` (`id`, `descricao`, `valor`, `quantidade`, `slug`) VALUES (NULL, 'Xiaomi RedMi 7', '1999.00', '12', 'Celular');
