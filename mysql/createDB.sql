-- データベース作成
create database tourabuDB charset utf8;

-- librarianという名前でユーザー作成
create user dbuser@localhost identified by 'pass';

-- 権限付与
grant all on tourabuDB.* to dbuser@localhost;
