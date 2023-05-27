use bank;
create table loan
( 
  Loan_Id char(10) not null,
  Loan_amt bigint,
  Loan_ROI int,
  IFSC_code char(10) not null
  );