create table final_membre(
    id_membre int primary key auto_increment,
    nom varchar(50),
    date_naissance date,
    genre Char,
    email varchar(50),
    ville varchar(50),
    mdp varchar(50),
    image_profil varchar(50)
);

create table final_categorie_objet(
    id_categorie int primary key auto_increment,
    nom_categorie varchar(50)
);

create table final_objet(
    id_objet int primary key auto_increment,
    nom_objet varchar(50),
    id_categorie int,
    id_membre int,
    FOREIGN KEY (id_membre) REFERENCES final_membre(id_membre),
    FOREIGN KEY (id_categorie) REFERENCES final_categorie_objet(id_categorie)
);

