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

create table utilisateur(
    id int not null auto_increment primary key,
    nom varchar(40),
    email varchar(50),
    mdp varchar(40),
    idAdmin int
);

insert into utilisateur values(null,'sarobidy rakoto','sarobidy@yahoo.fr','12345678',1),(null,'carol rinah','carol@yahoo.fr','12345678',0);

create table stock(
    id int not null auto_increment primary key,
    id_produit int not null,
    quantite int,
    date_entree datetime,
    foreign key (id_produit) references produit(id)
);


create table vente(
    id int not null auto_increment primary key,
    date_vente datetime,
    id_utilisateur int not null,
    contact varchar(20),
    adresse text,
    foreign key (id_utilisateur) references utilisateur(id)
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

create table portefeuille(
    id  int not null auto_increment primary key,
    id_client int not null,
    data_creation datetime
);

insert into portefeuille values (null,1,'2022-06-22 18:44:31');
create table entree (
    id  int not null auto_increment primary key,
    id_portefeuille int not null,
    valeur float,
    date_entree datetime,
    valide int ,
    foreign key (id_portefeuille) references portefeuille(id)
);

create table paiement(
    id  int not null auto_increment primary key,
    id_portefeuille int not null,
    id_vente int not null,
    valeur float,
    date_paiement datetime,
    foreign key (id_portefeuille) references portefeuille(id),
    foreign key (id_vente) references vente(id)
);
create view validation as select e.id as id,e.valeur as valeur,DATE_FORMAT(e.date_entree, "%e %M %Y at %H:%i") as date,u.nom as nom,u.email as email from entree as e join portefeuille as p on e.id_portefeuille = p.id
 join utilisateur as u on p.id_client = u.id where valide = 0;

select v.id_produit as id,sum(s.quantite) as entree, sum(v.quantite) as sortie from stock as s join vente as v on s.id_produit = v.id_produit;

SELECT sum(e.valeur) as entree,sum(p.valeur),sum(e.valeur)-sum(p.valeur) as valeur from entree as e left join paiement as p on e.id_portefeuille
 = p.id_portefeuille where e.valide = 1 and e.id_portefeuille in (select id from portefeuille where id_client = 2) group by e.id_portefeuille


 create table unite(
     id  int not null auto_increment primary key,
     unite varchar(10)
 );

 insert into unite values (null,'cl'),(null,'g'),(null,'unite');

 create table recette(
      id  int not null auto_increment primary key,
      nom varchar(40)
 );

 create table ingredient(
     id  int not null auto_increment primary key,
     id_recette int not null,
     id_produit int not null,
     pourcentage float,
     foreign key (id_produit) references produit(id),
     foreign key (id_recette) references recette(id)
 );

SELECT * from entree as e left join paiement as p on e.id_portefeuille = p.id_portefeuille

alter table produit add quantite varchar(10),
add id_unite int not null,
add foreign key (id_unite) references unite(id);


select s.id_produit,s.quantite,sum(s.quantite)-sum(v.quantite) as stock from stock as s left join vente_detail as v on s.id_produit=v.id_produit group by s.id_produit