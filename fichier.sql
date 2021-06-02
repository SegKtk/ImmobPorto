create table utilisateur(
id_user serial primary key,
nom varchar,
email varchar,
password varchar,
photo varchar);

create table offres(
id_offre serial primary key,
nbr_chambre int,
nbr_salon int,
nbr_douche int,
prix int,
photo1 varchar,
photo2 varchar,
id_user int references utilisateur(id_user));

create table demande(
id_ask serial primary key,
formule varchar,
id_user int references utilisateur(id_user));