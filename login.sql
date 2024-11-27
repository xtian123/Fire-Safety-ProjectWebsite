CREATE DATABASE user_registration;

USE user_registration;

CREATE TABLE users (
	id INT (11) AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	email VARCHAR (100) NOT NULL,
	password VARCHAR (255) NOT NULL,
	phonenumber VARCHAR (20) NOT NULL,
	region VARCHAR (50) NOT NULL,
	birthdate DATE NOT NULL
	);
