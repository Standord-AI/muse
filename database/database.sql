-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 10:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `child_users` (
  `child_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `child_age` int(11) NOT NULL,
  `child_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `child_users` (`child_id`, `users_id`, `child_name`, `child_age`, `child_password`) VALUES
(2, 1, 'baby', 7, '$2y$10$apLgOb6ZPm4GFH.XvgAfoOOyx4Ssm9/WySQhW92CPh8PQNXDcIuNK');

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Madara', 'madara23@gmail.com', 'Repair', '2024-11-27 13:54:31'),
(2, 'Madara', 'madara23@gmail.com', 'Repair in feedback', '2024-11-27 13:55:54');

CREATE TABLE `display_books` (
  `book_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `genre` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `book_options` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `display_books` (`book_id`, `users_id`, `genre`, `title`, `author`, `description`, `city`, `contact_num`, `book_options`, `price`, `image`) VALUES
(1, 1, 'Non-Fiction', 'Atomic Habits', 'James Clear', 'Motivational, self-love book', 'Colombo', '0719589692', 'sell', 3500.00, '67476f974f7ef_atomicbooks.jpg'),
(2, 1, 'Child', 'Bedtime Bear', 'None', 'Kids book', 'Colombo', '0719589692', 'sell', 1500.00, '67477419cbc32_BedtimeBear.jpg'),
(3, NULL, 'Non-Fiction', 'A Million To One', 'Tony Faggioli', 'There are some demons that you never see coming', 'Colombo', '0719589692', 'sell', 2350.00, '674774a3e3ab5_A million to one.jpg'),
(4, NULL, 'Child', 'A Little Bit of Sunshine', 'None', 'Kids Book', 'Wattala', '0719589692', 'swap', 0.00, '6747751350ba9_ALittleBitofSunshine.jpg'),
(5, NULL, 'Child', 'Big Beautiful Ocean', 'None', 'A photographic exploration', 'Maharagama', '0719589692', 'sell', 2250.00, '674776f615353_BigBeautifulOcean.jpg'),
(6, NULL, 'Child', 'Diary of a Wimpy Kid Rodrick Rules', 'Jeff Kinney', 'Children category book', 'Nugegoda', '0719589692', 'swap', 0.00, '6747775c1b512_Diary of a Wimpy Kid Rodrick Rules.jpg'),
(7, 1, 'Fiction', 'Harry Potter and the Cursed Child', 'J K Rowling', 'World famous fictional story', 'Homagama', '0723295295', 'swap,sell', 3700.00, '67477c84c8eae_Harry Potter And The Cursed Child.jpg'),
(8, NULL, 'Fiction', 'Iron Flame', 'Rebecca Yarros', 'Non-fiction', 'Kandy', '0723295295', 'swap,sell', 3800.00, '67477cc0c289a_iron flame.jpg'),
(9, NULL, 'Non-Fiction', 'It Ends With Us', 'Colleen Hoover', 'New York Times bestselling author', 'Ja Ela', '0723295295', 'swap,sell', 3500.00, '67477d06efb77_itendswithus.jpg'),
(10, NULL, 'Non-Fiction', 'Spare Il Minore', 'Prince Harry', 'Mondadori', 'Colombo', '0723295295', 'swap,sell', 4780.00, '67477d4d5f850_Spare.jpg'),
(11, NULL, 'Other', 'The Last Devil To Die', 'Richard Osman', 'Multi-million copy bestseller', 'Galle', '0723295295', 'swap,sell', 3200.00, '67477d93a50be_The last devil to die.jpg'),
(12, NULL, 'Fiction', 'The Moon and Stars', 'Jenna Warren', 'Fictional book', 'Kalutara', '0723295295', 'swap,sell', 2700.00, '67477e7cbc3da_The moon and stars.jpg'),
(13, NULL, 'Non-Fiction', 'Unsunkable', 'Jenni L. Walsh', 'Voyage of danger', 'Colombo', '0723295295', 'swap,sell', 3100.00, '67477eb590f45_unsinkable.jpg'),
(14, NULL, 'Child', 'A Visit to Grandma\'s House', 'Laura Gates Galvin', 'Kids book', 'Galle', '0723295295', 'swap,sell', 1560.00, '67477eeab084e_VisitGrandmasHouse.jpg'),
(15, NULL, 'Non-Fiction', 'Where the Crawdad Sing', 'Delia Owens', 'Non-fiction', 'Kandy', '0723295295', 'swap,sell', 2450.00, '67477f2758a4a_Where the crawdads sings.jpg');

CREATE TABLE `events` (
  `events_id` int(11) NOT NULL,
  `events_title` varchar(255) NOT NULL,
  `events_description` text NOT NULL,
  `events_location` varchar(255) DEFAULT NULL,
  `events_date` date NOT NULL,
  `events_time` time NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `users_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `events` (`events_id`, `events_title`, `events_description`, `events_location`, `events_date`, `events_time`, `created`, `users_id`) VALUES
(8, 'Supervisor Meeting', 'To discuss about changes', 'Online', '2024-11-16', '10:00:00', '2024-11-15 15:27:37', 1),
(15, 'Birthday party plan', 'Discuss about changes', 'Home', '2024-11-23', '10:30:00', '2024-11-16 03:11:47', 3),
(16, 'Birthday party plan', 'Discussion', 'At home', '2024-11-29', '13:19:00', '2024-11-16 05:49:24', 1),
(17, 'Share book with amasha', 'Sharing at uoc', 'UoC', '2024-12-07', '08:30:00', '2024-11-27 20:01:17', 1),
(18, 'Share book with kaviru', 'Sharing at ucsc', 'UCSC', '2025-01-29', '08:30:00', '2024-11-27 20:04:36', 1);

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`users_id`, `users_email`, `users_name`, `users_password`, `users_address`, `users_contactNumber`, `users_role`) VALUES
(1, 'madarameegama7@gmail.com', 'Madara Meegama', '$2y$10$F38pKMac7eR84azeCXeEiOIZkNgsrIw9l99Td4.oX9ECD/gUaVr7y', '7/7, Pragathi Mawatha,Homagama', '0719589690', 'user'),
(2, 'example@example.com', 'John Doe', 'securepassword', '123 Main St', '1234567890', 'user'),
(3, 'museadmin@gmail.com', 'Admin', '$2y$10$Yk1chs83KqHULsISujSspOPZcrFr0Faz3cs4Vpejgv4CSgUQkFIBS', 'Colombo', '0724188889', 'user'),
(4, 'dinu123@gmail.com', 'Dinu Meegama', '$2y$10$ZdNx2jS5HIlxJbc4bbJeXu6c4qjfgT04qwm7IL6dAsyyK1uEk0Pla', 'Homagama', '0722855658', 'user'),
(5, 'nayana1966@gmail.com', 'Nayana', '$2y$10$EZlNLDeiR84AfNjQbhrf4.awvSa3G3aCKZaI.YUC1iNNwf2TfKp6W', 'Homagama', '0724188888', 'user'),
(6, 'gyashan@gmail.com', 'Gayashan', '$2y$10$TNCt.2nhp2jlXuk1hRYlaesKwI8iAD3A.oy7SXniMtGz5K1Uqcai.', 'Galle', '0719589692', 'user');

CREATE TABLE `wishlist` (
  `wish_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `wishlist` (`wish_id`, `users_id`, `book_id`, `created_at`) VALUES
(1, 3, 2, '2024-11-27 17:17:37'),
(2, 3, 8, '2024-11-27 17:17:44'),
(3, 3, 16, '2024-11-27 17:17:53'),
(4, 1, 13, '2024-11-27 17:18:03'),
(5, 1, 17, '2024-11-27 17:18:15');
-- Commit
COMMIT;