CREATE DATABASE Basicfit;

USE Basicfit;

CREATE TABLE Inschrijving (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  voornaam VARCHAR(30) NOT NULL,
  achternaam VARCHAR(30) NOT NULL,
  geboortedatum DATE NOT NULL,
  geslacht ENUM('M', 'F', 'O') NOT NULL,
  email VARCHAR(50) NOT NULL,
  telefoon VARCHAR(15) NOT NULL,
  adres VARCHAR(50) NOT NULL,
  postcode VARCHAR(6) NOT NULL,
  woonplaats VARCHAR(30) NOT NULL,
  homeclub INT(6) UNSIGNED,
  inschrijfdatum TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE Vestiging (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  naam VARCHAR(30) NOT NULL,
  straat VARCHAR(50) NOT NULL,
  huisnummer VARCHAR(10) NOT NULL,
  postcode VARCHAR(6) NOT NULL,
  woonplaats VARCHAR(30) NOT NULL
);
