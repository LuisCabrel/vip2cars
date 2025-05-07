
CREATE TABLE `vip2cars` (
   `id` INT NOT NULL AUTO_INCREMENT,
   `placa` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_spanish2_ci',
   `marca` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_spanish2_ci',
   `modelo` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_spanish2_ci',
   `fabricacion` INT NULL DEFAULT NULL,
   `nombrecliente` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8_spanish2_ci',
   `apellidocliente` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8_spanish2_ci',
   `correo` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8_spanish2_ci',
   `telefono` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_spanish2_ci',
   PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8_spanish2_ci'
ENGINE=InnoDB
;
