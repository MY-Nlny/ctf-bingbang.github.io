CREATE DATABASE ctf;

USE ctf;

CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE secrets (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    secret VARCHAR(100) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', '3171577201');

INSERT INTO secrets (secret) VALUES ('flag{w3lc0me t@_Czxh!}');