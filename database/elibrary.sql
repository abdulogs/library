-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 05:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;
/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
    `id` int(11) NOT NULL, `name` varchar(255) DEFAULT NULL, `edition` varchar(255) DEFAULT NULL, `author` varchar(255) DEFAULT NULL, `description` text DEFAULT NULL, `copies` int(10) DEFAULT NULL, `image` text DEFAULT NULL, `is_active` tinyint(1) DEFAULT NULL, `created_by` int(100) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO
    `books` (
        `id`, `name`, `edition`, `author`, `description`, `copies`, `image`, `is_active`, `created_by`, `created_at`, `updated_at`
    )
VALUES (
        13, 'A Clergyman\'s Daughter (Penguin Modern Classics) - (PB)', '2000', 'George Orwell', 'Intimidated by her father, the rector of Knype Hill, Dorothy performs her submissive roles of dutiful daughter and bullied housekeeper. Her thoughts are taken up with the costumes she is making for the church school play, by the hopelessness of preaching to the poor and by debts she cannot pay in 1930s Depression England. Suddenly her routine shatters and Dorothy finds herself down and out in London. She is wearing silk stockings, has money in her pocket and cannot remember her name. Orwell leads us through a landscape of unemployment, poverty and hunger, where Dorothy\'s faith is challenged by a social reality that changes her life.', 50, '17013607763023111.jpg', 1, 1, '2023-11-30 12:12:56', '2023-11-30 12:12:56'
    ),
    (
        14, 'A Game Of Thrones: Graphic Novel, Volume Three', '2001', 'George R.R Maryin', 'A Game Of Thrones: Graphic Novel, Volume Three', 50, '1701362182302311GoT-comic-3.png', 1, 1, '2023-11-30 12:14:51', '2023-11-30 12:36:37'
    );

-- --------------------------------------------------------

--
-- Table structure for table `borrow_books`
--

CREATE TABLE `borrow_books` (
    `id` int(100) NOT NULL, `student_id` int(100) DEFAULT NULL, `book_id` int(100) DEFAULT NULL, `returning_date` date DEFAULT NULL, `returned_date` date DEFAULT NULL, `is_returned` tinyint(1) DEFAULT NULL, `is_agreed` tinyint(1) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `borrow_books`
--

INSERT INTO
    `borrow_books` (
        `id`, `student_id`, `book_id`, `returning_date`, `returned_date`, `is_returned`, `is_agreed`, `created_at`, `updated_at`
    )
VALUES (
        5, 4, 13, '2023-12-02', '2023-11-30', 1, 1, '2023-11-30 12:17:15', '2023-11-30 12:17:18'
    );

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
    `id` int(100) NOT NULL, `first_name` varchar(255) DEFAULT NULL, `last_name` varchar(255) DEFAULT NULL, `email` varchar(255) DEFAULT NULL, `phone` varchar(255) DEFAULT NULL, `password` varchar(500) DEFAULT NULL, `country` varchar(255) DEFAULT NULL, `state` varchar(255) DEFAULT NULL, `city` varchar(255) DEFAULT NULL, `address` varchar(255) DEFAULT NULL, `postal_code` varchar(10) DEFAULT NULL, `is_role` int(1) DEFAULT NULL, `is_active` tinyint(1) DEFAULT NULL, `created_at` timestamp NULL DEFAULT NULL, `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO
    `users` (
        `id`, `first_name`, `last_name`, `email`, `phone`, `password`, `country`, `state`, `city`, `address`, `postal_code`, `is_role`, `is_active`, `created_at`, `updated_at`
    )
VALUES (
        1, 'Aqsa', 'Sheikh', 'aqsasheikh@gmail.com', 'fds', '8504605', 'njkjn', 'rttgfdg', 'dfgsd', 'dsfg', 'dfgs', 0, 1, '2023-11-12 13:35:33', '2023-11-29 13:28:26'
    );

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_books`
--
ALTER TABLE `borrow_books` ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 15;

--
-- AUTO_INCREMENT for table `borrow_books`
--
ALTER TABLE `borrow_books`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;