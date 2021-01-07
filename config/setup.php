<?php

require_once 'database.php';

try {
    $pdo = new PDO(DB_DSN_SETUP, DB_USER, DB_PASSWD, DB_OPTIONS);
    $pdo->exec('CREATE DATABASE IF NOT EXISTS ' . DB_NAME);
    $pdo->exec('USE ' . DB_NAME);


    $pdo->exec('CREATE TABLE IF NOT EXISTS users(
    `uid` int(11) NOT NULL,
    `login` varchar(50) CHARACTER SET utf8 NOT NULL,
    `email` varchar(50) CHARACTER SET utf8 NOT NULL,
    `password` varchar(50) CHARACTER SET utf8 NOT NULL,
    `authorized` tinyint(1) NOT NULL DEFAULT 1,
    `notification` tinyint(1) NOT NULL DEFAULT 1,
    `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP)');
    $pdo->exec('CREATE TABLE IF NOT EXISTS `gallery` (
  	`pid` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  	`login` VARCHAR(30) NOT NULL,
  	`date` DATETIME NOT NULL,
  	`image` LONGBLOB NOT NULL)');
    $pdo->exec('CREATE TABLE IF NOT EXISTS `comments` (
  	`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  	`pid` INT UNSIGNED NOT NULL,
  	`login` VARCHAR(30) NOT NULL,
  	`date` DATETIME NOT NULL,
  	`comment` TEXT NOT NULL)');
    $pdo->exec('CREATE TABLE IF NOT EXISTS `likes` (
  	`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  	`pid` INT UNSIGNED NOT NULL,
  	`login` VARCHAR(30) NOT NULL)');
} catch (PDOException $e) {
    die ('Database error: ' . $e->getMessage());
}