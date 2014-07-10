create table user_info (id int not null auto_increment,
	   user_name varchar(20) not null ,
	   password varchar(20) not null,
	   primary key(id),
	   unique(user_name));
