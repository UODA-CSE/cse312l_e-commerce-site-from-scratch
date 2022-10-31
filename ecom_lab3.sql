INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(NULL, 'Bed', 'Bed of different sizes.', current_timestamp(), NULL),
(NULL, 'Sofa', 'Sofa of different shapes.', current_timestamp(), NULL), (NULL, 'Almira', 'Almira of different sizes.', current_timestamp(), NULL), (NULL, 'Table', 'Different types of tables', current_timestamp(), NULL);

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES (NULL, '1', 'Single Bed', current_timestamp(), NULL),
(NULL, '1', 'Double Bed', current_timestamp(), NULL),
(NULL, '2', 'Single Sofa', current_timestamp(), NULL),
(NULL, '2', 'Three-seated Sofa', current_timestamp(), NULL),
(NULL, '3', 'Single Almira', current_timestamp(), NULL),
(NULL, '3', 'Two door Almira', current_timestamp(), NULL),
(NULL, '4', 'Reading table', current_timestamp(), NULL),
(NULL, '4', 'Dressing table', current_timestamp(), NULL);

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`,`productImage`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(NULL, '1', '1', 'Simple Single Bed', 'Hatil', '16000', '18000', NULL, 'b3.jpg', '300', 'In Stock', current_timestamp(), NULL),
(NULL, '1', '2', 'Double Bed', 'Otobi', '32000', '35000', NULL, 'b4.jpg', '400', 'In Stock', current_timestamp(), NULL),
(NULL, '2', '3', 'Single Sofa', NULL, '8000', '10000', NULL, 's1.jpg', '200', 'In Stock', current_timestamp(), NULL),
(NULL, '3', '5', 'Single Almira', 'Brothers', '17000', '18000', NULL, 'a4.jpg', '250', 'In Stock', current_timestamp(), NULL),
(NULL, '3', '6', 'Three door almira', 'Navana', '45000', '50000', NULL, 'a1.jpg', '300', 'In Stock', current_timestamp(), NULL),
(NULL, '4', '8', 'Classic Dressing table', 'Nadia', '15000', '15000', NULL, 'd4.jpg', '200', 'In Stock', current_timestamp(), NULL);