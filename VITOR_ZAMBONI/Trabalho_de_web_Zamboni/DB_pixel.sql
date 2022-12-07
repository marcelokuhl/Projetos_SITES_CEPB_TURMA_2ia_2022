create database DB_pixel;
use DB_pixel;
create table pixel (
	id_pixel smallint AUTO_INCREMENT PRIMARY KEY,
	agente Varchar(50) NOT NULL,
    mapa Varchar(50) NOT NULL,
    titulo Varchar(50) NOT NULL,
    link Varchar(50) NOT NULL
);
show tables;