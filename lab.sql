CREATE DATABASE `lab`;
USE `lab`;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT,
  `username` varchar(255),
  `password` varchar(255),
  PRIMARY KEY(`id`)
);

CREATE TABLE `posts` (
  `id` int(11) AUTO_INCREMENT,
  `title` varchar(255),
  `text` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'dan', '$2y$10$jhSIk2N5BnkEEzgEBWQDw.AUQIEcrH8V0AcNLfW2nkjTAH2WgAAlW');
