CREATE DATABASE IF NOT EXISTS crudLogin;

USE crudLogin;

CREATE TABLE IF NOT EXISTS users(
    id int(15) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY username (username)
);

CREATE TABLE IF NOT EXISTS alumnos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(25) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

INSERT INTO users(username, password) VALUES ('ianmadariaga', 'admin1307'); 
INSERT INTO users(username, password) VALUES ('ariwithd', 'admin1112');

INSERT INTO alumnos(nombre, email, telefono) VALUES ('','','','');
