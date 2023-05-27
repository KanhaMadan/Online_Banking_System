use bank;
create table recurring_deposit_acc
(
 Acc_no char(10) not null,
 Acc_balance bigint,
 Maturity_period int
 );