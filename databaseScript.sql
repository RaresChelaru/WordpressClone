CREATE DATABASE IF NOT EXISTS WordpressClone ;

USE WordpressClone;

CREATE TABLE IF NOT EXISTS Articoli (
    id INT unsigned auto_increment PRIMARY KEY,
    titolo VARCHAR(50),
    testo VARCHAR(100),
    immagine BLOB
);