create table products (
	id serial primary key,
	product_name VARCHAR(50),
	articul VARCHAR(50),
	category VARCHAR(50),
	weight INT,
	price INT,
	status VARCHAR(50),
	created_at DATE
);
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (1, 'Lobster - Baby, Boiled', '68788-9956', 'Ham - Cooked Bayonne Tinned', 26, 74, true, '2020-09-22 08:45:52');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (2, 'Sage - Ground', '0781-5381', 'Coffee - Decafenated', 62, 67, false, '2020-07-18 02:20:50');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (3, 'Mushroom - White Button', '61957-0117', 'Vector Energy Bar', 34, 55, true, '2020-08-05 05:48:46');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (4, 'Syrup - Golden, Lyles', '0781-2193', 'Fib N9 - Prague Powder', 99, 48, false, '2021-03-03 17:53:01');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (5, 'Pork - Bones', '54569-3121', 'Oxtail - Cut', 55, 80, true, '2020-10-07 15:35:35');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (6, 'Bar Energy Chocchip', '0517-6610', 'Oil - Sunflower', 30, 63, true, '2020-11-24 05:35:19');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (7, 'Nut - Hazelnut, Whole', '60781-1003', 'Quinoa', 47, 87, false, '2020-05-19 17:59:02');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (8, 'Blouse / Shirt / Sweater', '58118-0458', 'Yoplait Drink', 33, 15, false, '2020-11-01 07:07:26');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (9, 'Cookies - Englishbay Oatmeal', '68180-193', 'Bagelers', 14, 16, true, '2021-04-21 12:47:51');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (10, 'Drambuie', '41520-519', 'Blackberries', 4, 100, false, '2020-06-02 12:42:00');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (11, 'Pears - Bosc', '51079-131', 'Coffee - Beans, Whole', 1, 92, true, '2021-04-22 20:19:04');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (12, 'Lettuce - Iceberg', '21220-124', 'Flax Seed', 34, 27, false, '2020-11-03 02:19:44');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (13, 'Salad Dressing', '11084-534', 'Fruit Salad Deluxe', 48, 57, false, '2020-06-06 04:27:02');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (14, 'Coffee - Flavoured', '68788-9001', 'Foil Wrap', 2, 78, true, '2020-07-04 20:10:35');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (15, 'Juice - Ocean Spray Cranberry', '43353-340', 'Gooseberry', 8, 1, true, '2020-12-24 08:31:08');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (16, 'Pastry - Carrot Muffin - Mini', '0187-0844', 'Yoghurt Tubes', 82, 55, false, '2021-01-27 22:31:43');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (17, 'Wine - Prosecco Valdobienne', '56062-090', 'True - Vue Containers', 92, 97, true, '2020-11-05 18:51:05');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (18, 'Pork - Back, Short Cut, Boneless', '61957-2040', 'Nantucket Cranberry Juice', 96, 79, true, '2021-02-20 07:34:09');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (19, 'Salmon - Canned', '68745-1052', 'Carroway Seed', 1, 92, false, '2020-07-22 19:04:20');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (20, 'Carbonated Water - White Grape', '33261-100', 'Muffin Puck Ww Carrot', 6, 64, true, '2020-04-28 19:53:35');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (21, 'Cheese - Parmesan Grated', '42311-003', 'Soup - Knorr, Veg / Beef', 83, 98, true, '2020-04-30 00:16:12');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (22, 'Wine - White, French Cross', '0555-0572', 'Tumeric', 31, 46, true, '2021-03-05 03:43:37');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (23, 'Flour - Masa De Harina Mexican', '0004-0360', 'Foam Tray S2', 76, 35, true, '2020-05-21 00:49:19');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (24, 'Cognac - Courvaisier', '0006-3917', 'Dill Weed - Fresh', 84, 36, true, '2020-09-27 02:23:57');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (25, 'Bread - Sour Sticks With Onion', '49999-048', 'Glass - Juice Clear 5oz 55005', 40, 25, true, '2020-05-05 19:00:14');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (26, 'Soup - Campbells Pasta Fagioli', '51079-147', 'Apples - Spartan', 12, 33, false, '2020-04-14 21:20:48');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (27, 'Wine - Red Oakridge Merlot', '36987-3446', 'Juice - Orange 1.89l', 60, 15, false, '2020-08-24 18:50:05');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (28, 'Rum - Coconut, Malibu', '63187-130', 'Lobak', 4, 83, false, '2021-02-24 08:38:30');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (29, 'Longos - Chicken Wings', '0378-1101', 'Chicken Breast Wing On', 86, 79, false, '2020-10-05 15:55:22');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (30, 'Beans - Black Bean, Dry', '0472-0082', 'Appetizer - Tarragon Chicken', 77, 51, false, '2020-08-12 13:04:45');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (31, 'Shiratamako - Rice Flour', '0409-5758', 'Pastry - Chocolate Marble Tea', 50, 92, true, '2020-08-30 04:35:53');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (32, 'Ecolab - Hobart Upr Prewash Arm', '24987-087', 'Salt And Pepper Mix - White', 49, 21, true, '2020-11-04 23:35:15');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (33, 'Cheese - Brie Roitelet', '53145-019', 'Nori Sea Weed - Gold Label', 9, 45, false, '2020-04-02 18:29:03');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (34, 'Yogurt - Peach, 175 Gr', '65643-334', 'Broom - Angled', 5, 50, false, '2020-07-10 13:58:59');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (35, 'V8 Pet', '50436-3995', 'Wine - Pinot Grigio Collavini', 14, 15, true, '2020-04-12 20:57:32');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (36, 'Honey - Liquid', '76420-782', 'Compound - Passion Fruit', 17, 85, true, '2020-10-27 06:24:32');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (37, 'Wakami Seaweed', '60429-371', 'Lettuce - Lolla Rosa', 10, 13, false, '2021-03-06 17:50:39');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (38, 'Wine - Winzer Krems Gruner', '41250-650', 'Rum - Light, Captain Morgan', 100, 79, false, '2020-10-30 13:44:22');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (39, 'Cookie Dough - Oatmeal Rasin', '10370-175', 'Bagel - Ched Chs Presliced', 22, 35, false, '2020-08-02 19:32:55');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (40, 'Sugar - Icing', '61096-0034', 'The Pop Shoppe - Cream Soda', 76, 73, true, '2020-04-14 14:49:30');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (41, 'Chips Potato Salt Vinegar 43g', '76485-1008', 'Potatoes - Pei 10 Oz', 66, 36, false, '2020-04-12 18:55:14');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (42, 'Nut - Cashews, Whole, Raw', '0904-6352', 'Puree - Pear', 64, 17, true, '2021-03-08 13:16:40');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (43, 'Cheese - Victor Et Berthold', '0093-7325', 'Island Oasis - Strawberry', 38, 73, true, '2020-08-13 16:36:05');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (44, 'Smirnoff Green Apple Twist', '11084-266', 'Truffle Paste', 59, 8, false, '2020-04-19 07:11:23');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (45, 'Soup - Campbellschix Stew', '49999-367', 'Beef Flat Iron Steak', 58, 64, false, '2021-04-07 10:21:26');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (46, 'Sauce - Thousand Island', '44523-602', 'Juice - Pineapple, 341 Ml', 21, 41, false, '2021-03-08 13:14:39');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (47, 'Parsley - Dried', '36987-3308', 'Goat - Whole Cut', 96, 48, false, '2020-12-29 06:09:13');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (48, 'Fib N9 - Prague Powder', '68387-531', 'Chef Hat 20cm', 7, 90, false, '2020-10-11 16:40:53');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (49, 'Port - 74 Brights', '57955-6206', 'Shrimp - 31/40', 67, 31, true, '2020-10-21 12:10:46');
insert into products (id, product_name, articul, category, weight, price, status, created_at) values (50, 'Tea - Apple Green Tea', '25336-5563', 'Eggplant - Baby', 19, 37, false, '2020-08-02 12:27:11');