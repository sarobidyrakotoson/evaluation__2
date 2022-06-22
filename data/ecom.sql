create database ecommerce;

create table categorie(
    id int not null auto_increment primary key,
    nom varchar(40)
);
insert into categorie values (null,'Produit laitier'),(null,'Boisson'),(null,'Fruit et legume'),(null,'Matiere grasse'),
(null,'Cereales et derivés-legumineuse') ,(null,'Produit sucre'),(null,'Viande-poisson-oeuf');

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
    quantite int,
    date_entree datetime,
    foreign key (id_produit) references produit(id)
);

create table modepaiement(
    id int not null auto_increment primary key,
    nom varchar(40)
);
insert into modepaiement values (null,'paypal'),(null,'visa');

create table vente(
    id int not null auto_increment primary key,
    date_vente datetime,
    email varchar(50),
    contact varchar(20),
    adresse text,
    id_modepaiement int not null,
    foreign key (id_modepaiement) references modepaiement(id)
);

create table vente_detail(
    id int not null auto_increment primary key,
    id_vente int not null,
    id_produit int not null,
    quantite int,
    prix_unitaire float,
    foreign key (id_vente) references vente(id),
    foreign key (id_produit) references produit(id)
);


select v.id_produit as id,sum(s.quantite) as entree, sum(v.quantite) as sortie from stock as s join vente as v on s.id_produit = v.id_produit;






