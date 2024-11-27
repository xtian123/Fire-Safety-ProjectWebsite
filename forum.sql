CREATE DATABASE data;

USE data;

CREATE TABLE tb_data(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    comment VARCHAR(150),
    date VARCHAR(50),
    reply_id INT
);