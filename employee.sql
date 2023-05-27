use bank;
create table employee
(
   Emp_ID char(10) not null,
   Emp_name char(30),
   Emp_address varchar(50),
   Emp_phoneno bigint,
   Emp_email varchar(30),
   Mgr_SSN char(10) not null   
);
   