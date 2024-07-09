-- Create Database 
CREATE DATABASE IF NOT EXISTS crud_pf CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Use the database
USE crud_pf;

-- Create Table
CREATE TABLE IF NOT EXISTS users (
	id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS products (
	id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	product_name VARCHAR(50) NOT NULL,
	product_type VARCHAR(10) NOT NULL
);
CREATE TABLE IF NOT EXISTS cart (
    id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    product_name VARCHAR(50) NOT NULL,
    product_img_link VARCHAR(255) NOT NULL,
    quantity INT(9) NOT NULL,
    weight VARCHAR(20) NOT NULL,
    price decimal(10,2) NOT NULL,
    singlePrice decimal(10,2) NOT NULL,
    `type` VARCHAR(255) NOT NULL
    );