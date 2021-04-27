CREATE DATABASE geotraveler;
USING geotraveler;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE feedback (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fullname VARCHAR(500) NOT NULL,
    mail VARCHAR(500) NOT NULL,
    message VARCHAR(2056) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);




