drop database music;

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
song_file varchar(10000),
song_image varchar(100),
genre_id int,
Artists_id int,
FOREIGN KEY (genre_id) REFERENCES genre(id),
FOREIGN KEY (Artists_id) REFERENCES artist(Artist_id)
);

create table video(
video_id int primary key auto_increment,
video_name varchar(100),
video_file BLOB,
genre_id int,
Artists_id int,
FOREIGN KEY (genre_id) REFERENCES genre(id),
FOREIGN KEY (Artists_id) REFERENCES artist(Artist_id)
);

create table roles(
	r_id int primary key auto_increment,
    role_name varchar(50)
);

create table users(
	user_id int primary key auto_increment,
    user_name varchar(20),
    user_email varchar(200),
    user_password varchar(200),
    role_id int,
    foreign key (role_id) references roles(r_id)
);
