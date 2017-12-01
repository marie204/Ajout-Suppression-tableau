ex1
SELECT offers.option_name, hotels.name
FROM offers
INNER JOIN hotels ON hotels.id_hotel = offers.id_hotel

ex2
SELECT offers.option_name, hotels.name, hotels.country, hotels.stars
FROM offers
INNER JOIN hotels ON hotels.id_hotel = offers.id_hotel
WHERE hotels.country NOT LIKE 'FRANCE'
AND hotels.stars < 5

ex3
SELECT offers.option_name as nom_formule, hotels.name as nom_hotel, hotels.country as pays, hotels.stars as nb_etoiles
FROM offers
INNER JOIN hotels ON hotels.id_hotel = offers.id_hotel
WHERE hotels.country NOT LIKE 'FRANCE'
AND hotels.stars < 5

ex4
CREATE TABLE `discount` (
  `id_discount` int(11) NOT NULL,
  `id_offer` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ex5
INSERT INTO `discount` (`id_discount`, `id_offer`, `percentage`) VALUES
(1, 8, 50),
(2,9,50),
(3,10,50);

ex6
SELECT discount.id_offer, discount.percentage, offers.option_description
FROM discount
INNER JOIN offers ON discount.id_offer = offers.id_offer

ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

ex7
SELECT discount.id_offer, discount.percentage, offers.option_description 
FROM discount 
RIGHT JOIN offers ON discount.id_offer = offers.id_offer

ex8
SELECT discount.id_offer, discount.percentage, offers.option_description 
FROM discount 
RIGHT JOIN offers ON discount.id_offer = offers.id_offer
WHERE discount.id_offer IS NULL

ex9
SELECT discount.id_offer, discount.percentage, offers.option_description 
FROM discount 
RIGHT JOIN offers ON discount.id_offer = offers.id_offer
WHERE discount.percentage IS NULL


