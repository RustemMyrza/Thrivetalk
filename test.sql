-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 19 2023 г., 08:30
-- Версия сервера: 10.2.43-MariaDB
-- Версия PHP: 8.1.5

CREATE DATABASE test;

USE test;

CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `test` (`id`, `text1`) VALUES
(1, 'Helping you thrive in all areas of life'),
(2, 'This is just text');
