create table bak (id int not null auto_increment,
	   user_name varchar(127) not null ,
	   password varchar(255) not null,
	   status tinyint(1) not null default 0,
	   primary key(id),
	   unique(user_name));
