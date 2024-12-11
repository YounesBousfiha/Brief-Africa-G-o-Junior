-- C'est un Code SQL a utilise pour la Creation de Database, Creation des Tableux
-- Insertion des Données , Update Des Données , Supprimer Des Données, Afficher des Données

CREATE DATABASE IF NOT EXISTS GeoJunior;

USE GeoJunior;

CREATE TABLE IF NOT EXISTS Users(
    ID int NOT NULL AUTO_INCREMENT,
    Nom varchar(100) NOT NULL,
    Email varchar(255) NOT NULL UNIQUE,
    Password varchar(255) NOT NULL,
    Role ENUM('Admin', 'User') DEFAULT 'User',
    PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS Continent(
    ID int NOT NULL AUTO_INCREMENT,
    Nom varchar(255) NOT NULL UNIQUE,
    PRIMARY KEY(ID)
);

CREATE TABLE IF NOT EXISTS Pays(
    ID int NOT NULL AUTO_INCREMENT,
    Nom varchar(100) NOT NULL UNIQUE,
    Population int NOT NULL,
    ImageURL varchar(500),
    Description varchar(2000) NOT NULL,
    Langue varchar(50) NOT NULL,
    Continent_ID int NOT NULL,
    Created_BY int NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY(Continent_ID) REFERENCES Continent(ID) ON DELETE CASCADE,
    FOREIGN KEY(Created_BY) REFERENCES Users(ID)
);

CREATE TABLE IF NOT EXISTS Villes(
    ID int NOT NULL AUTO_INCREMENT,
    Pays_ID INT NOT NULL,
    Nom varchar(100) NOT NULL,
    Description varchar(2000) NOT NULL,
    ImageURL varchar(500),
    Type ENUM ('Capital', 'Autre') DEFAULT 'Autre',
    Created_BY int NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY (Pays_ID) REFERENCES Pays(ID) ON DELETE CASCADE,
    FOREIGN KEY(Created_BY) REFERENCES Users(ID)
);

INSERT INTO Users (Nom, Email, Password, Role) 
VALUES 
('Admin1', 'admin1@example.com', 'hashedpassword123', 'Admin'),
('User1', 'user1@example.com', 'hashedpassword456', 'User'),
('User2', 'user2@example.com', 'hashedpassword789', 'User');


INSERT INTO Continent (Nom) 
VALUES 
('Africa');


INSERT INTO Pays (Nom, Population, ImageURL, Description, Langue, Continent_ID, Created_BY) 
VALUES 
('Senegal', 16743927, 'https://example.com/senegal.jpg', 'Senegal is a country in West Africa known for its rich culture and history.', 'French', 1, 1),
('Nigeria', 223804632, 'https://example.com/nigeria.jpg', 'Nigeria is the most populous country in Africa with diverse cultures and languages.', 'English', 1, 1),
('Kenya', 54754800, 'https://example.com/kenya.jpg', 'Kenya is known for its scenic landscapes, wildlife, and diverse cultures.', 'Swahili', 1, 1),
('South Africa', 59308690, 'https://example.com/southafrica.jpg', 'South Africa is famous for its natural beauty, diverse wildlife, and historical significance.', 'Afrikaans', 1, 1),
('Egypt', 104124000, 'https://example.com/egypt.jpg', 'Egypt is a transcontinental country in North Africa and the Middle East with a rich ancient history.', 'Arabic', 1, 1),
('Ghana', 31398000, 'https://example.com/ghana.jpg', 'Ghana is known for its rich history and vibrant culture, and is located in West Africa.', 'English', 1, 1),
('Morocco', 36910560, 'https://example.com/morocco.jpg', 'Morocco is located in North Africa, known for its diverse culture, ancient cities, and beautiful landscapes.', 'Arabic', 1, 1),
('Uganda', 45741007, 'https://example.com/uganda.jpg', 'Uganda is a landlocked country in East Africa, known for its biodiversity and wildlife.', 'English', 1, 1),
('Tanzania', 59734218, 'https://example.com/tanzania.jpg', 'Tanzania is known for its vast wilderness areas, including the Serengeti National Park.', 'Swahili', 1, 1),
('Zimbabwe', 14862924, 'https://example.com/zimbabwe.jpg', 'Zimbabwe is a landlocked country in Southern Africa, known for its ancient ruins and natural beauty.', 'Shona', 1, 1);


INSERT INTO Villes (Pays_ID, Nom, Description, ImageURL, Type, Created_BY) 
VALUES 
(1, 'Thiès', 'Thiès is a city in Senegal, known for its historical and cultural importance, particularly in the railway sector.', 'https://example.com/thies.jpg', 'Autre', 1),
(1, 'Ziguinchor', 'Ziguinchor is located in southern Senegal, known for its historical significance and role in the Casamance region.', 'https://example.com/ziguinchor.jpg', 'Autre', 1),
(2, 'Port Harcourt', 'Port Harcourt is a city in Nigeria, known as an industrial and cultural hub in the Niger Delta region.', 'https://example.com/portharcourt.jpg', 'Autre', 1),
(2, 'Ibadan', 'Ibadan is one of the largest cities in Nigeria, known for its rich history and significance as a former colonial capital.', 'https://example.com/ibadan.jpg', 'Autre', 1),
(3, 'Nakuru', 'Nakuru is a city in Kenya, known for its proximity to Lake Nakuru National Park, famous for flamingos.', 'https://example.com/nakuru.jpg', 'Autre', 1),
(3, 'Kisumu', 'Kisumu is a city in Kenya, located on the shores of Lake Victoria and known for its fishing industry.', 'https://example.com/kisumu.jpg', 'Autre', 1),
(4, 'Pretoria', 'Pretoria is one of South Africa’s capitals, known for its diplomatic and political significance.', 'https://example.com/pretoria.jpg', 'Autre', 1),
(4, 'Port Elizabeth', 'Port Elizabeth is a coastal city in South Africa, known for its beaches and as a major port.', 'https://example.com/portelizabeth.jpg', 'Autre', 1),
(5, 'Giza', 'Giza is a city in Egypt, famously home to the Great Pyramids and the Sphinx.', 'https://example.com/giza.jpg', 'Autre', 1),
(5, 'Sharm El Sheikh', 'Sharm El Sheikh is a resort city in Egypt, known for its beaches and scuba diving destinations.', 'https://example.com/sharmelsheikh.jpg', 'Autre', 1),
(6, 'Takoradi', 'Takoradi is a city in Ghana, located on the Atlantic coast and known for its oil industry and trade.', 'https://example.com/takoradi.jpg', 'Autre', 1),
(7, 'Fez', 'Fez is a city in Morocco, known for its ancient medina and as a historical center of learning and culture.', 'https://example.com/fez.jpg', 'Autre', 1),
(7, 'Casablanca', 'Casablanca is a city in Morocco, known for its modern architecture and being a major business hub.', 'https://example.com/casablanca.jpg', 'Autre', 1),
(8, 'Jinja', 'Jinja is a city in Uganda, located near the source of the Nile River and known for its tourism industry.', 'https://example.com/jinja.jpg', 'Autre', 1),
(8, 'Gulu', 'Gulu is a city in Uganda, known for its proximity to the Murchison Falls National Park and its role in northern Uganda’s recovery.', 'https://example.com/gulu.jpg', 'Autre', 1),
(9, 'Mbeya', 'Mbeya is a city in Tanzania, located near the border with Malawi, known for its agricultural activities.', 'https://example.com/mbeya.jpg', 'Autre', 1),
(9, 'Mwanza', 'Mwanza is a city in Tanzania, located on the shores of Lake Victoria and known for its fishing industry.', 'https://example.com/mwanza.jpg', 'Autre', 1),
(10, 'Mutare', 'Mutare is a city in Zimbabwe, known for its proximity to the Eastern Highlands and scenic landscapes.', 'https://example.com/mutare.jpg', 'Autre', 1),
(10, 'Chitungwiza', 'Chitungwiza is a city in Zimbabwe, known for its suburban development and being close to Harare.', 'https://example.com/chitungwiza.jpg', 'Autre', 1),
(10, 'Marondera', 'Marondera is a city in Zimbabwe, known for its agricultural industry and being a major regional center.', 'https://example.com/marondera.jpg', 'Autre', 1);


UPDATE Pays
SET Population = 23456789 , Description = 'New Description'
WHERE ID = 1;

UPDATE Villes
SET Nom = 'Tanger', Description = 'Ville de North'
WHERE ID = 13;


DELETE FROM Pays WHERE id = 9;

DELETE FROM Villes WHERE id = 2;


SELECT * FROM Pays;
SELECT Nom, Description, Type FROM Villes;