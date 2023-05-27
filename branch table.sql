use bank;
create table branch
(
  Brn_name varchar(20),
  IFSC_code char(10) not null,
  Brn_location varchar(50)
);