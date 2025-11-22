CREATE DATABASE IF NOT EXISTS crudLogin;
USE crudLogin;

CREATE TABLE IF NOT EXISTS users(
    id int(15) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    UNIQUE KEY username (username)
);

CREATE TABLE IF NOT EXISTS alumnos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellidoPaterno VARCHAR(100) NOT NULL,
    apellidoMaterno VARCHAR(100),
    noCuenta VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    fechaRegistro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users(username, password) VALUES ('ianmadariaga', 'admin424146195'); 
INSERT INTO users(username, password) VALUES ('ariwithd', 'admin321285676');
INSERT INTO users(username, password) VALUES ('admin', '123');

INSERT INTO alumnos(nombre, apellidoPaterno, apellidoMaterno, noCuenta, email, telefono) 
VALUES ('Ian','Tranquis','Maba','123456','ian@aragon.unam.mx','1234567890');