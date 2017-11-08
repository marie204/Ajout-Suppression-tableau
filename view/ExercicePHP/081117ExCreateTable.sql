CREATE TABLE hotels (
    id_hotel int NOT NULL AUTO_INCREMENT, 
    name varchar(255),
    street varchar(255), 
    city varchar(255),
    country varchar(255), 
    star int, 
    email varchar(255),
    PRIMARY KEY(id_hotel)
    );
CREATE TABLE offers (
    id_offer int NOT NULL AUTO_INCREMENT, 
    id_hotel varchar(255),
    option_name varchar(255), 
    option_description varchar(255),
    option_price int, 
    PRIMARY KEY(id_offer)
    );

INSERT INTO hotels (name, street, city, country, star, email)
VALUES ('Le Grand Cerf', 'rue Saint Blaise', 'Alençon', 'France', 5,'danssamaison@ungrandcerf.fr' ), 
('Hôtel Mercure', 'rue de la Paix', 'Paris', 'France', 4, 'mercurehotel@groupe.com'),
 ('Au piment d\' espelette', 'rue de la Paix', 'Saint-Jean de Luz', 'France', 4, 'piment@gmail.com'),
 ('TRUMP Tower', 'tweet Avenue', 'New York', 'USA', 1, 'picsou@donarld.com'),
 ('Elementary hotel', 'Baker street', 'Londres', 'Angleterre',3, 'watson@yahoo.uk'),
 ('viva el papa', 'piazza Navone', 'Rome', 'Italie',3, 'elpapa@gmail.com'),
 ('Pizza Hotel', 'El camino della pasta', 'Milan', 'Italie',2, 'pizza@hut.com'),
 ('El carnavalo', 'Via Triestina', 'Venise', 'Italie',3, 'elcarnavalo@hotmail.it'),
 ('Le petit Vatel', 'place de Lancrel', 'Alençon', 'France',4, 'petitvatel@alençon.fr')

INSERT INTO offers(id_hotel, option_name, option_description, option_price)
VALUES ('1', 'Maison hantée', 'Vivez une expérience mémorable dans un vrai hôtel désaffecté. Les rats et les pigeons sont authentiques !', 500),
('1', 'Maison hantée formule éco', 'Comme la formule "Maison hantée", mais sans les rats.', 100),
('2', 'Vue sur la tour eiffel', 'Clignotement de la tour commandé depuis la chambre', 300),
('3', 'Mer, piscine et piperade', 'Euskal Herrira ongietorria', 80),
('4', 'Pourquoi payer moins cher ? ', 'Le mauvais goût au prix fort', 5000),
('5', 'Sur les pas de Sherlock Holmes', 'Avec déguisements d\'époque. Thé avec la reine tous les jeudi.', 350),
('6', ' Formule pèlerin', 'Vous aurez faim, mais ce sera bien', 40),
('7', 'L\'Italie à petit prix', 'Une pizza offerte à l\'arrivée (sauce pimentée en supplément 50 €)', 200),
('8', 'Formule carnaval', 'Vivez le carnaval de Venise de l\'intérieur. Frissons garantis ', 600),
('9', 'Charme de la province', '10 9 Charme de la province Un séjour au calme dans la plus belle ville de France 150', 150)


