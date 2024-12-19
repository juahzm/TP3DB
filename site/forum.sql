
create database forum;

create table forum( 
id_forum int not null auto_increment primary key,
forum_article varchar(1000), 
forum_date date,
forum_titre VARCHAR(100) NOT NULL,
CONSTRAINT forum_titre_length CHECK (CHAR_LENGTH(forum_titre) BETWEEN 5 AND 100),
user_id_user int not null, 
constraint fk_user_id_user foreign key (user_id_user) references user(id_user)); 


create table user ( 
id_user int not null auto_increment primary key, 
name varchar(25) not null,
CONSTRAINT name_length CHECK (CHAR_LENGTH(name) BETWEEN 2 AND 25), 
username varchar(100) not null,
constraint unique_username unique(username), 
password varchar(255) not null, 
birthday date 
); 

select username from user;
select * from user;
select * from forum;
select forum_article, forum_date, forum_titre from forum inner join user on
user_id_user = user.id_user where user.id_user = 10;

sELECT * from forum;

select * from user;

select forum_article, forum_date, forum_titre from forum inner join user on
user_id_user = id_user;



DELETE from forum where user_id_user = 11;

UPDATE forum SET forum_titre='abcdef', forum_article='cdeeeeeee', forum_date='1985-10-12' WHERE user_id_user= 10;


SELECT forum_titre, forum_article, forum_date, user_id_user FROM forum INNER JOIN user ON
user_id_user = id_user where forum.user_id_user = 10;


