INSERT INTO `subsubcategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Groen', NULL, NULL),
(2, 'Rood', NULL, NULL),
(3, 'Wit', NULL, NULL),
(4, 'Geel', NULL, NULL);

INSERT INTO `subcategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nederland', NULL, NULL),
(2, 'Duitsland', NULL, NULL),
(3, 'Polen', NULL, NULL),
(4, 'Denemarken', NULL, NULL);

INSERT INTO `categories` (`id`, `slug`, `name`, `image`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'groenten', 'Groenten', 'broccoli_s.png', 'banner_food.jpeg', NULL, NULL),
(2, 'broden', 'Broden', 'brood_s.png', 'banner_food.jpeg', NULL, NULL),
(3, 'fruit', 'Fruit', 'bananen_s.png', 'banner_food.jpeg', NULL, NULL),
(4, 'frisdrank', 'Frisdrank', 'frisdrank_s.png', 'banner_food.jpeg', NULL, NULL),
(5, 'koffie-en-thee', 'Koffie en Thee', 'senseo_s.png', 'banner_food.jpeg', NULL, NULL),
(6, 'vleeswaren', 'Vleeswaren', 'vlees_s.png', 'banner_food.jpeg', NULL, NULL),
(7, 'maaltijden', 'Maaltijden', 'maaltijd_s.png', 'banner_food.jpeg', NULL, NULL),
(8, 'snoep-koek-chocola-chips', 'Snoep, Koek, Chocola, Chips', 'kitkat_s.png', 'banner_food.jpeg', NULL, NULL),
(9, 'zuivel', 'Zuivel', 'zuivel_s.png', 'banner_food.jpeg', NULL, NULL),
(10, 'drogisterij', 'Drogisterij', 'axe_s.png', 'banner_food.jpeg', NULL, NULL),
(11, 'baby-en-kind', 'Baby en Kind', 'pampers_s.png', 'banner_food.jpeg', NULL, NULL),
(12, 'huisdieren', 'Huisdieren', 'whiskas_s.png', 'banner_food.jpeg', NULL, NULL);

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `EAN`, `slug`, `Title`, `Brand`, `Shortdescription`, `Fulldescription`, `Image`, `Weight`, `Price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '1234', 'broccoli', 'Broccoli', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'broccoli_s.png', '500', 1.50, NULL, NULL),
(2, 1, 1, 2, '1111', 'bloemkool', 'Bloemkool', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'bloemkool_s.png', '350', 1.25, NULL, NULL),
(3, 3, 2, 3, '2222', 'banaan', 'Bananen', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'bananen_s.png', '1000', 1.75, NULL, NULL),
(4, 3, 3, 4, '3333', 'appel', 'Appels', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'appels_s.png', '1250', 0.90, NULL, NULL),
(5, 1, 4, 1, '4356', 'spinazie', 'Spinazie', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'bloemkool_s.png', '350', 1.25, NULL, NULL),
(6, 1, 4, 1, '1341', 'tuinbonen', 'Tuinbonen', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'bloemkool_s.png', '350', 1.25, NULL, NULL),
(7, 1, 4, 4, '6545', 'tomaten', 'Tomaten', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'tomaten_s.png', '350', 1.25, NULL, NULL),
(8, 1, 4, 4, '6545', 'tomaten', 'Tomaten', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'tomaten_s.png', '350', 1.25, NULL, NULL),
(9, 1, 4, 4, '6545', 'tomaten', 'Tomaten', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'tomaten_s.png', '350', 1.25, NULL, NULL),
(10, 1, 4, 4, '6545', 'tomaten', 'Tomaten', 'Masen', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto aspernatur doloremque dolores excepturi illo in iure modi, natus non nostrum odit perferendis perspiciatis placeat, suscipit temporibus. Maxime, voluptate?', 'tomaten_s.png', '350', 1.25, NULL, NULL);

INSERT INTO `promotions` (`id`, `product_id`, `Title`, `DiscountPrice`, `ValidUntil`, `created_at`, `updated_at`) VALUES
(1, 1, 'Week 22', 1.00, '26-06-2023', NULL, NULL),
(2, 2, 'Week 22', 1.00, '26-06-2023', NULL, NULL),
(3, 3, 'Week 22', 1.00, '26-06-2023', NULL, NULL),
(4, 4, 'Week 22', 1.00, '26-06-2023', NULL, NULL),
(5, 1, 'Week 23', 1.00, '31-06-2023', NULL, NULL),
(6, 2, 'Week 23', 1.00, '31-06-2023', NULL, NULL),
(7, 3, 'Week 23', 1.00, '31-06-2023', NULL, NULL);

