-- MySQL Script generated by MySQL Workbench
-- Wed Apr 26 17:47:05 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`fabricante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`fabricante` (
  `idfabricante` INT NOT NULL,
  `nombre` VARCHAR(25) NOT NULL,
  `telefono` VARCHAR(15) NULL,
  PRIMARY KEY (`idfabricante`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`producto` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(200) NULL,
  `foto` VARCHAR(45) NULL,
  `precio` INT NOT NULL,
  `stock` INT NOT NULL,
  `idfab` INT NULL,
  `origen` VARCHAR(45) NULL,
  PRIMARY KEY (`idproducto`),
  INDEX `fkfabricante_idx` (`idfab` ASC),
  CONSTRAINT `fkfabricante`
    FOREIGN KEY (`idfab`)
    REFERENCES `mydb`.`fabricante` (`idfabricante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `contraseña` VARCHAR(45) NULL,
  `fecha` DATE NULL,
  `tarjeta` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`historial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`historial` (
  `idhistorial` INT NOT NULL,
  `idusuario` INT NOT NULL,
  `idproducto` INT NOT NULL,
  PRIMARY KEY (`idhistorial`),
  INDEX `fk_producto_idx` (`idproducto` ASC),
  INDEX `fk_usuario_idx` (`idusuario` ASC),
  CONSTRAINT `fk_producto`
    FOREIGN KEY (`idproducto`)
    REFERENCES `mydb`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario`
    FOREIGN KEY (`idusuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`direccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`direccion` (
  `iddireccion` INT NOT NULL,
  `usuario` INT NOT NULL,
  `calle` VARCHAR(45) NOT NULL,
  `numero` INT NOT NULL,
  `colonia` VARCHAR(20) NULL,
  `cp` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`iddireccion`),
  INDEX `fk_usuario_idx` (`usuario` ASC),
  CONSTRAINT `fk_usuariodirec`
    FOREIGN KEY (`usuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`carrito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`carrito` (
  `idcarrito` INT NOT NULL AUTO_INCREMENT,
  `usuario` INT NULL,
  `producto` INT NULL,
  PRIMARY KEY (`idcarrito`),
  INDEX `fk_usuario_idx` (`usuario` ASC),
  INDEX `fk_producto_idx` (`producto` ASC),
  CONSTRAINT `fk_usuariocar`
    FOREIGN KEY (`usuario`)
    REFERENCES `mydb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_productocar`
    FOREIGN KEY (`producto`)
    REFERENCES `mydb`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
