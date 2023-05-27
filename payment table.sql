use bank;
create table payment
( 
 Pmt_date date,
 Pmt_number char(10)  not null,
 Pmt_amount int,
 Pmt_mode varchar(30)
 );