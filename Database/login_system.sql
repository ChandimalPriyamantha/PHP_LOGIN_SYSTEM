-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema elpdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema elpdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `elpdb` DEFAULT CHARACTER SET latin1 ;
USE `elpdb` ;

-- -----------------------------------------------------
-- Table `elpdb`.`user_details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `elpdb`.`user_details` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(45) NULL DEFAULT NULL,
  `Password` VARCHAR(150) NULL DEFAULT NULL,
  `Address` VARCHAR(100) NULL DEFAULT NULL,
  `Name` VARCHAR(45) NULL DEFAULT NULL,
  `User_Type` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `elpdb`.`wrtting_task`
-- -----------------------------------------------------



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
