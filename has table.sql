use bank;
create table has
( 
	User_name char(30) not null unique,
	User_ID char(10) not null,
	Role_ID  char(10) not null,
	Per_ID  char(10) not null
);
  