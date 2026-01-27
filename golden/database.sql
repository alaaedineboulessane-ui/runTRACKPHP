CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    username VARCHAR(50),
    password VARCHAR(255)

);

CREATE TABLE message (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    message text,
    id_user INT,
    date DATETIME
);
