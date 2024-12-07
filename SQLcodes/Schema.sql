-- C'est un Code SQL a utilise pour la Creation de Database, 
-- Tablaux et pour la etablir les relation entre les tablaux

CREATE DATABASE IF NOT EXISTS GeoJunior;
USE GeoJunior;

CREATE TABLE IF NOT EXISTS Pays(
    ID int NOT NULL AUTO_INCREMENT,
    Nom varchar(100) NOT NULL UNIQUE,
    Population int NOT NULL,
    Langue varchar(50) NOT NULL,
    PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS Villes(
    ID int NOT NULL AUTO_INCREMENT,
    Pays_ID INT NOT NULL,
    Nom varchar(100) NOT NULL UNIQUE,
    Description varchar(2000) NOT NULL,
    Type ENUM ('Capital', 'Autre'),
    PRIMARY KEY(ID),
    FOREIGN KEY (Pays_ID) REFERENCES Pays(ID) ON DELETE CASCADE
);