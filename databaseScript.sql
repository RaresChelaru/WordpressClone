CREATE DATABASE IF NOT EXISTS WordpressClone;

USE WordpressClone;

DROP TABLE IF EXISTS Categorie;

CREATE TABLE IF NOT EXISTS Categorie(
    nomeCategoria VARCHAR(20) PRIMARY KEY UNIQUE,
    Utenteid BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (Utenteid) REFERENCES Users(id)
);

DROP TABLE IF EXISTS Immagini;

CREATE TABLE IF NOT EXISTS Immagini(
    id INT unsigned auto_increment PRIMARY KEY,
    pathImmagini VARCHAR(100),
    Utenteid BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (Utenteid) REFERENCES Users(id)
);

DROP TABLE IF EXISTS Articoli;

CREATE TABLE IF NOT EXISTS Articoli (
    id INT unsigned auto_increment PRIMARY KEY,
    titolo VARCHAR(50),
    testo VARCHAR(100),
    immagine INT UNSIGNED,
    categoria VARCHAR(20),
    Utenteid BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (Utenteid) REFERENCES Users(id),
    /* Tabella users di */
    FOREIGN KEY (immagine) REFERENCES Immagini(id),
    FOREIGN KEY (categoria) REFERENCES Categorie(nomeCategoria)
);