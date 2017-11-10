/*Afficher la liste de tous les noms d'hôtels*/
SELECT hotels.name 
FROM hotels
 /*Afficher la liste de tous les noms d'hôtels en France*/
 SELECT hotels.name 
FROM hotels
WHERE hotels.country like 'France'
/*R3*/
SELECT hotels.name, hotels.street, hotels.city, hotels.email
FROM hotels
where hotels.country LIKE 'ITALIE'
/*R4*/
SELECT hotels.city
FROM hotels
ORDER BY hotels.city ASC
/*R5*/
SELECT DISTINCT(hotels.city)
FROM hotels
/*R6*/
SELECT hotels.id_hotel, hotels.country
FROM hotels
ORDER BY hotels.country DESC
/*R7*/
SELECT hotels.name, hotels.country
FROM hotels
WHERE hotels.country NOT LIKE 'Angleterre'
/*R8*/
SELECT name
from hotels
where country <> "USA"
AND country <> "Italie"
/*R9*/
SELECT hotels.name, hotels.stars
FROM hotels
WHERE hotels.stars > 3 
/*R10*/
UPDATE offers SET option_name = 'formule hantee formule luxe'
where id_offer = 1;
/*R11*/
delete from offers
  where option_price > 600
/*R12*/
SELECT AVG(offers.option_price), offers.option_name
FROM offers
SELECT offers.option_name
 FROM offers
 ORDER BY offers.option_price
LIMIT 1
select option_name, option_description
from offers
where (option_price = (select min(option_price) from offers)
/*R13*/
SELECT COUNT(offers.id_offer)
FROM offers
WHERE offers.option_description LIKE '%formule%'
OR offers.option_name LIKE '%formule%'
/*R14*/
SELECT hotels.name
FROM hotels
Where stars  <> 5
/*NOT LIKE /*\
/*R15*/
SELECT offers.option_name, offers.option_price
FROM offers
WHERE offers.option_price BETWEEN 10 AND 500
/*R16*/
SELECT offers.option_name, offers.option_price
FROM offers
WHERE offers.option_price BETWEEN 10 AND 500
ORDER BY offers.option_price DESC
LIMIT 5



