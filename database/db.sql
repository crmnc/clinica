-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema clinica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema clinica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clinica` DEFAULT CHARACTER SET utf8mb4 ;
USE `clinica` ;

-- -----------------------------------------------------
-- Table `clinica`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`usuario` (
   `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
   `login` VARCHAR(45) NULL DEFAULT NULL,
   `senha` VARCHAR(45) NULL DEFAULT NULL,
   `nome` VARCHAR(45) NULL DEFAULT NULL,
   `tipoUsuario` INT(11) NULL DEFAULT NULL,
   PRIMARY KEY (`idUsuario`))
    ENGINE = InnoDB
    AUTO_INCREMENT = 4
    DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `clinica`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`paciente` (
    `idpaciente` INT(11) NOT NULL AUTO_INCREMENT,
    `endereco` VARCHAR(45) NULL DEFAULT NULL,
    `dataNascimento` DATETIME NULL DEFAULT NULL,
    `telefone` INT(11) NULL DEFAULT NULL,
    `email` VARCHAR(45) NULL DEFAULT NULL,
    `usuario_idUsuario` INT(11) NOT NULL,
    PRIMARY KEY (`idpaciente`, `usuario_idUsuario`),
    INDEX `fk_paciente_usuario_idx` (`usuario_idUsuario` ASC),
    CONSTRAINT `fk_paciente_usuario`
    FOREIGN KEY (`usuario_idUsuario`)
        REFERENCES `clinica`.`usuario` (`idUsuario`)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION)
    ENGINE = InnoDB
    AUTO_INCREMENT = 2
    DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;