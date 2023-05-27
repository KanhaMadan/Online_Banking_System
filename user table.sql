use bank;

create table user
(
 User_ID char(10) not null,
 User_name char(30) not null unique,
 User_phoneno bigint,
 User_address varchar(50),
 User_email varchar(30)
);

select * from user;