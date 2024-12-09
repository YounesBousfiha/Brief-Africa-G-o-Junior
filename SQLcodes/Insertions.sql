-- SQL Code  pour fait une Operation d'insertion

USE GeoJunior;

INSERT INTO Pays (
    Nom,
    Population,
    Langue,
    Description,
    ImageURL
) 
VALUES
    ('Nigeria', 220000000, 'English', 'The most populous country in Africa, with rich cultural and historical diversity.', 'https://fakeurl.com/nigeria.jpg'), 
    ('Ethiopia', 120000000, 'Amharic', 'One of the oldest countries in the world, known for its history and ancient sites.', 'https://fakeurl.com/ethiopia.jpg'),
    ('Egypt', 105000000, 'Arabic', 'Land of the pyramids and pharaohs, with a rich ancient history.', 'https://fakeurl.com/egypt.jpg'), 
    ('Democratic Republic of the Congo', 85000000, 'French', 'The largest country in Sub-Saharan Africa, rich in natural resources.', 'https://fakeurl.com/drc.jpg'),
    ('Tanzania', 64000000, 'Swahili', 'Known for its wildlife and landscapes, including Mount Kilimanjaro.', 'https://fakeurl.com/tanzania.jpg'),
    ('South Africa', 60000000, 'English/Zulu/Xhosa', 'A country with diverse landscapes and a history marked by apartheid.', 'https://fakeurl.com/southafrica.jpg'),
    ('Kenya', 54000000, 'Swahili/English', 'Famous for its wildlife, safaris, and Mount Kenya.', 'https://fakeurl.com/kenya.jpg'),
    ('Uganda', 45000000, 'English/Swahili', 'A country known for its mountains, lakes, and biodiversity.', 'https://fakeurl.com/uganda.jpg'),
    ('Algeria', 43000000, 'Arabic', 'The largest country in North Africa, with a rich and varied history.', 'https://fakeurl.com/algeria.jpg'),
    ('Sudan', 45000000, 'Arabic', 'A country with a long ancient history and remarkable cultural heritage.', 'https://fakeurl.com/sudan.jpg'),
    ('Morocco', 40000000, 'Arabic', 'A North African country with rich culture and Berber influence.', 'https://fakeurl.com/morocco.jpg'),
    ('Angola', 33000000, 'Portuguese', 'A country in development, rich in natural resources.', 'https://fakeurl.com/angola.jpg'),
    ('Mozambique', 30000000, 'Portuguese', 'A coastal country with beautiful beaches and a marked colonial history.', 'https://fakeurl.com/mozambique.jpg'),
    ('Ghana', 32000000, 'English', 'A dynamic country with rich culture, particularly in music and dance.', 'https://fakeurl.com/ghana.jpg'),
    ('Madagascar', 28000000, 'Malagasy/French', 'A unique island with exceptional biodiversity.', 'https://fakeurl.com/madagascar.jpg'),
    ('Côte d\'Ivoire', 27000000, 'French', 'A West African country famous for its beaches and vibrant culture.', 'https://fakeurl.com/cotedivoire.jpg'),
    ('Niger', 24000000, 'French', 'A Sahelian country known for its desert landscapes and traditional culture.', 'https://fakeurl.com/niger.jpg'),
    ('Mali', 22000000, 'French', 'A West African country with a rich history and culture.', 'https://fakeurl.com/mali.jpg');

INSERT INTO Villes (
    Pays_ID,
    Nom,
    Description,
    Type,
    ImageURL
)
VALUES 
    (1, 'Lagos', 'Largest city in Nigeria, known for its hustle and vibrant culture.', 'Capital', 'https://fakeurl.com/lagos.jpg'),
    (1, 'Abuja', 'The capital city of Nigeria, known for its modern architecture and greenery.', 'Autre', 'https://fakeurl.com/abuja.jpg'),
    (2, 'Addis Ababa', 'The capital of Ethiopia, known for its political and cultural significance.', 'Capital', 'https://fakeurl.com/addisababa.jpg'),
    (2, 'Dire Dawa', 'One of the major cities of Ethiopia, known for its trade and history.', 'Autre', 'https://fakeurl.com/diredawa.jpg'),
    (3, 'Cairo', 'Capital of Egypt, home to the ancient pyramids and rich history.', 'Capital', 'https://fakeurl.com/cairo.jpg'),
    (3, 'Alexandria', 'A historic city located on the Mediterranean coast of Egypt.', 'Autre', 'https://fakeurl.com/alexandria.jpg'),
    (4, 'Kinshasa', 'The capital of the Democratic Republic of the Congo, known for its vibrant music scene.', 'Capital', 'https://fakeurl.com/kinshasa.jpg'),
    (4, 'Lubumbashi', 'The second-largest city in the DRC, known for its mining industry.', 'Autre', 'https://fakeurl.com/lubumbashi.jpg'),
    (5, 'Dar es Salaam', 'The largest city and main port in Tanzania, known for its beaches and culture.', 'Autre', 'https://fakeurl.com/darussalaam.jpg'),
    (5, 'Dodoma', 'The political capital of Tanzania, known for its growing urban development.', 'Capital', 'https://fakeurl.com/dodoma.jpg'),
    (6, 'Cape Town', 'A coastal city in South Africa, known for its natural beauty and cultural heritage.', 'Autre', 'https://fakeurl.com/capetown.jpg'),
    (6, 'Pretoria', 'The administrative capital of South Africa, home to historical monuments.', 'Capital', 'https://fakeurl.com/pretoria.jpg'),
    (7, 'Nairobi', 'The capital of Kenya, a major hub for wildlife conservation and business.', 'Capital', 'https://fakeurl.com/nairobi.jpg'),
    (7, 'Mombasa', 'A coastal city in Kenya, famous for its beaches and historic Old Town.', 'Autre', 'https://fakeurl.com/mombasa.jpg'),
    (8, 'Kampala', 'The capital of Uganda, known for its vibrant culture and city life.', 'Capital', 'https://fakeurl.com/kampala.jpg'),
    (8, 'Entebbe', 'A city in Uganda, known for its international airport and lakeside location.', 'Autre', 'https://fakeurl.com/entebbe.jpg'),
    (9, 'Algiers', 'The capital city of Algeria, rich in history and culture.', 'Capital', 'https://fakeurl.com/algiers.jpg'),
    (9, 'Oran', 'A coastal city in Algeria, known for its music and Mediterranean lifestyle.', 'Autre', 'https://fakeurl.com/oran.jpg'),
    (10, 'Khartoum', 'The capital of Sudan, located at the confluence of the Blue and White Nile rivers.', 'Capital', 'https://fakeurl.com/khartoum.jpg'),
    (10, 'Omdurman', 'A city in Sudan, known for its historical significance and culture.', 'Autre', 'https://fakeurl.com/omdurman.jpg'),
    (11, 'Rabat', 'The capital city of Morocco, known for its historical sites and royal palaces.', 'Capital', 'https://fakeurl.com/rabat.jpg'),
    (11, 'Casablanca', 'A coastal city in Morocco, known for its art deco architecture and business hub.', 'Autre', 'https://fakeurl.com/casablanca.jpg'),
    (12, 'Luanda', 'The capital of Angola, known for its booming economy and coastal views.', 'Capital', 'https://fakeurl.com/luanda.jpg'),
    (12, 'Benguela', 'A coastal city in Angola, known for its beaches and port.', 'Autre', 'https://fakeurl.com/benguela.jpg'),
    (13, 'Maputo', 'The capital city of Mozambique, known for its coastal views and Portuguese colonial architecture.', 'Capital', 'https://fakeurl.com/maputo.jpg'),
    (13, 'Beira', 'A city in Mozambique, known for its port and history as a trading center.', 'Autre', 'https://fakeurl.com/beira.jpg'),
    (14, 'Accra', 'The capital city of Ghana, known for its lively culture and beaches.', 'Capital', 'https://fakeurl.com/accra.jpg'),
    (14, 'Kumasi', 'A city in Ghana, known for its rich Ashanti heritage and culture.', 'Autre', 'https://fakeurl.com/kumasi.jpg'),
    (15, 'Antananarivo', 'The capital of Madagascar, known for its unique culture and biodiversity.', 'Capital', 'https://fakeurl.com/antananarivo.jpg'),
    (15, 'Toamasina', 'A port city in Madagascar, known for its tropical climate and beaches.', 'Autre', 'https://fakeurl.com/toamasina.jpg'),
    (16, 'Abidjan', 'The economic capital of Côte d\'Ivoire, known for its bustling streets and architecture.', 'Capital', 'https://fakeurl.com/abidjan.jpg'),
    (16, 'Bouaké', 'A city in Côte d\'Ivoire, known for its markets and cultural significance.', 'Autre', 'https://fakeurl.com/bouake.jpg'),
    (17, 'Niamey', 'The capital city of Niger, known for its desert landscapes and vibrant culture.', 'Capital', 'https://fakeurl.com/niamey.jpg'),
    (17, 'Zinder', 'A city in Niger, known for its traditional architecture and history.', 'Autre', 'https://fakeurl.com/zinder.jpg'),
    (18, 'Bamako', 'The capital city of Mali, known for its history and vibrant music scene.', 'Capital', 'https://fakeurl.com/bamako.jpg'),
    (18, 'Segou', 'A city in Mali, known for its traditional architecture and cultural festivals.', 'Autre', 'https://fakeurl.com/segou.jpg');
