create database ecommerce;

create table categorie(
    id int not null auto_increment primary key,
    nom varchar(40)
);

insert into categorie values (null,'vetement'),(null,'chaussure'),(null,'accessoire');

create table photo(
    id int not null auto_increment primary key,
    nom text,
    extension varchar(5),
    last_updated datetime
);

create table produit(
    id int not null auto_increment primary key,
    designation varchar (100),
    prix float,
    descri text,
    id_photo int not null,
    id_categorie int not null,
    foreign key (id_photo) references photo(id),
    foreign key (id_categorie) references categorie(id)
);

create table administrateur(
    id int not null auto_increment primary key,
    nom varchar(40),
    email varchar(50),
    mdp varchar(40)
);

insert into administrateur values(null,'sarobidy rakoto','sarobidy@yahoo.fr','12345678');

create table stock(
    id int not null auto_increment primary key,
    id_produit int not null,
    quantite int
);






