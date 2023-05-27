use bank;
create table customer 
( 
 Cust_ID char(10) not null,
 Cust_name varchar(30),
 Cust_address varchar(50),
 Cust_phoneno bigint,
 Cust_email varchar(30),
 Cust_type varchar(30),
 Locker_no char(10) not null
);
