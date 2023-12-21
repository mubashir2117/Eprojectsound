create database music;

use music;

create table genre(
id int primary key auto_increment,
genre_name varchar(100)

);

create table artist(
Artist_id int primary key auto_increment,
artist_name varchar(100),
artist_image varchar(100),
genre_id int,
FOREIGN KEY (genre_id) REFERENCES genre(id)
);


create table song(
song_id int primary key auto_increment,
song_name varchar(100),
song_file varchar(255),
song_image varchar(100),
genre_id int,
Artists_id int,
FOREIGN KEY (genre_id) REFERENCES genre(id),
FOREIGN KEY (Artists_id) REFERENCES artist(Artist_id)
);
