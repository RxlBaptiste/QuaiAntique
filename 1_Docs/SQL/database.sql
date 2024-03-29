
--DROP

DROP TABLE IF EXISTS allergies;
DROP TABLE IF EXISTS carte;
DROP TABLE IF EXISTS client;
DROP TABLE IF EXISTS horaires;
DROP TABLE IF EXISTS images;
DROP TABLE IF EXISTS menus;
DROP TABLE IF EXISTS reservation;

--CREATE TABLE

CREATE Table allergies(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(50) NOT NULL,
    etat INTEGER(11) NOT NULL
);

CREATE TABLE carte (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name varchar(250) NOT NULL,
    description TEXT NOT NULL,
    price INTEGER(250) NOT NULL,
    categories VARCHAR(250) NOT NULL
);

CREATE TABLE client (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name VARCHAR(250) NOT NULL,
    firtname VARCHAR(250) NOT NULL,
    mail VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nbPers INTEGER(10) NOT NULL,
    nbEnfant INTEGER(10) NOT NULL,
    allergies text,
    statut VARCHAR(50) NOT NULL
);

CREATE TABLE horaires (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    lundiM TIME NOT NULL,
    lundiS TIME NOT NULL,
    mardiM TIME NOT NULL,
    mardiS TIME NOT NULL,
    mercrediM TIME NOT NULL,
    mercrediS TIME NOT NULL,
    jeudiM TIME NOT NULL,
    jeudiS TIME NOT NULL,
    vendrediM TIME NOT NULL,
    vendrediS TIME NOT NULL,
    samediM TIME NOT NULL,
    samediS TIME NOT NULL,
    dimancheM TIME NOT NULL,
    dimancheS TIME NOT NULL
);

CREATE TABLE images (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name VARCHAR(250) NOT NULL,
    image_path text NOT NULL,
    categorie VARCHAR(50)
);

CREATE TABLE menus (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name VARCHAR(250) NOT NULL,
    entre1 VARCHAR(250) NOT NULL,
    plat1 VARCHAR(250) NOT NULL,
    dessert1 VARCHAR(250) NOT NULL,
    entre2 VARCHAR(250) NOT NULL,
    plat2 VARCHAR(250) NOT NULL,
    dessert2 VARCHAR(250) NOT NULL,
    entre3 VARCHAR(250) NOT NULL,
    plat3 VARCHAR(250) NOT NULL,
    dessert3 VARCHAR(250) NOT NULL,
    price INTEGER(100) NOT NULL
);

CREATE TABLE reservation (
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    name VARCHAR(250) NOT NULL,
    mail TEXT NOT NULL,
    NbPers INTEGER(10) NOT NULL,
    Date DATE NOT NULL,
    Horaires TIME Not NULL,
    Commentaire TEXT NOT NULL,
    Allergies TEXT NOT NULL,
    etat INTEGER(11) DEFAULT 0 NOT NULL
);