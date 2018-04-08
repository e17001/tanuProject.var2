-- userDataテーブル作成
use tourabuDB;
drop table if exists ensei;

create table ensei (
  ensei_ID varchar(10) primary key,
  time_required varchar(15),
  age varchar(10),
  ensei_name varchar(25) unique,
  master_point int,
  token_point int,
  mokutan int,
  tamahagane int,
  water int,
  toishi int,
  other varchar (25),
  total_level int,
  hensei text,
  remakers text,
  keywords text
);
