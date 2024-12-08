-- SQL Code  pour fait une Operation d'insertion

USE GeoJunior;

INSERT INTO  Pays (
    Nom,
    Population,
    Langue
    ) 
    VALUES
        ('Maroc', 40000000, 'Arabic'), 
        ('France', 67000000, 'French'), 
        ('Japan', 125800000, 'Japanese'), 
        ('Canada', 38000000, 'English/French'), 
        ('Germany', 83000000, 'German'), 
        ('Brazil', 214000000, 'Portuguese'), 
        ('India', 1410000000, 'Hindi/English'), 
        ('China', 1440000000, 'Mandarin'), 
        ('Russia', 146000000, 'Russian'), 
        ('Italy', 59000000, 'Italian'), 
        ('South Africa', 60000000, 'English/Zulu/Xhosa'), 
        ('Spain', 47000000, 'Spanish'), 
        ('Egypt', 105000000, 'Arabic'), 
        ('United States', 331000000, 'English'), 
        ('Mexico', 128000000, 'Spanish'), 
        ('Nigeria', 220000000, 'English'), 
        ('Pakistan', 243000000, 'Urdu/English'), 
        ('Bangladesh', 173000000, 'Bengali'), 
        ('Turkey', 85000000, 'Turkish'), 
        ('Argentina', 46000000, 'Spanish');

INSERT INTO Villes (
    Pays_ID,
    Nom,
    Description,
    Type
)
VALUES 
    (1, 'Rabat', 'Ville capitale du Maroc, connue pour ses monuments historiques.', 'Capital'),
    (1, 'Casablanca', 'Ville du Maroc, connue pour son architecture moderne et son port.', 'Autre'),
    (2, 'Lyon', 'Ville culturelle de France, célèbre pour sa cuisine et son architecture.', 'Autre'),
    (2, 'Paris', 'Capitale de la France, célèbre pour la Tour Eiffel et son histoire riche.', 'Capital'),
    (3, 'Hiroshima', 'Ville du Japon, connue pour son mémorial de la paix et son histoire.', 'Autre'),
    (3, 'Tokyo', 'Capitale du Japon, une métropole moderne et un centre économique mondial.', 'Capital'),
    (4, 'Ottawa', 'Capitale du Canada, avec des bâtiments gouvernementaux et des musées.', 'Capital'),
    (4, 'Toronto', 'Grande ville canadienne, connue pour sa diversité et sa scène culturelle.', 'Autre'),
    (5, 'Berlin', 'Capitale de l\'Allemagne, connue pour son histoire et ses monuments.', 'Capital'),
    (5, 'Munich', 'Ville d\'Allemagne, célèbre pour la bière et ses festivals.', 'Autre'),
    (6, 'Brasilia', 'Capitale du Brésil, reconnue pour son architecture moderne.', 'Capital'),
    (6, 'Rio de Janeiro', 'Ville brésilienne célèbre pour ses plages et le Christ Rédempteur.', 'Autre'),
    (7, 'New Delhi', 'Capitale de l\'Inde, connue pour sa culture et ses monuments historiques.', 'Capital'),
    (7, 'Mumbai', 'Grande ville de l\'Inde, centre économique et cinématographique.', 'Autre'),
    (8, 'Pékin', 'Capitale de la Chine, célèbre pour son histoire et sa croissance moderne.', 'Capital'),
    (8, 'Shanghai', 'Ville chinoise, un centre financier majeur et une métropole moderne.', 'Autre'),
    (9, 'Moscou', 'Capitale de la Russie, connue pour ses monuments historiques et sa culture.', 'Capital'),
    (9, 'Saint-Pétersbourg', 'Ville de Russie, célèbre pour ses musées et son architecture impériale.', 'Autre'),
    (10, 'Rome', 'Capitale de l\'Italie, célèbre pour son histoire ancienne et ses monuments.', 'Capital'),
    (10, 'Milan', 'Ville d\'Italie, centre de la mode et des affaires.', 'Autre'),
    (11, 'Le Cap', 'Ville portuaire en Afrique du Sud, célèbre pour sa beauté naturelle.', 'Autre'),
    (11, 'Johannesburg', 'Ville en Afrique du Sud, un centre économique important et une grande métropole.', 'Autre'),
    (12, 'Madrid', 'Capitale de l\'Espagne, célèbre pour sa culture, son art et sa vie nocturne.', 'Capital'),
    (12, 'Barcelone', 'Ville d\'Espagne, connue pour son architecture moderniste et ses plages.', 'Autre'),
    (13, 'Le Caire', 'Capitale de l\'Égypte, célèbre pour ses pyramides et son histoire antique.', 'Capital'),
    (13, 'Alexandrie', 'Ville égyptienne sur la Méditerranée, avec un riche héritage historique.', 'Autre'),
    (14, 'Washington, D.C.', 'Capitale des États-Unis, avec des institutions gouvernementales emblématiques.', 'Capital'),
    (14, 'New York', 'Ville américaine, célèbre pour son skyline et sa culture dynamique.', 'Autre'),
    (15, 'Mexico', 'Capitale du Mexique, connue pour son histoire et sa culture.', 'Capital'),
    (15, 'Guadalajara', 'Ville du Mexique, célèbre pour sa culture et ses festivités traditionnelles.', 'Autre'),
    (16, 'Abuja', 'Capitale du Nigéria, avec une architecture moderne et des espaces verts.', 'Capital'),
    (16, 'Lagos', 'Grande ville du Nigéria, centre économique et culturel du pays.', 'Autre'),
    (17, 'Islamabad', 'Capitale du Pakistan, connue pour sa beauté et ses espaces verts.', 'Capital'),
    (17, 'Lahore', 'Ville du Pakistan, riche en histoire et en culture.', 'Autre'),
    (18, 'Dacca', 'Capitale du Bangladesh, une ville dynamique et en croissance rapide.', 'Capital'),
    (18, 'Chittagong', 'Ville portuaire du Bangladesh, importante sur le plan économique.', 'Autre'),
    (19, 'Ankara', 'Capitale de la Turquie, avec une riche histoire et des bâtiments gouvernementaux.', 'Capital'),
    (19, 'Istanbul', 'Ville historique de Turquie, célèbre pour son patrimoine culturel et ses mosquées.', 'Autre'),
    (20, 'Buenos Aires', 'Capitale de l\'Argentine, célèbre pour son tango et sa vie nocturne.', 'Capital'),
    (20, 'Córdoba', 'Ville argentine, connue pour son architecture coloniale et son histoire.', 'Autre');