create table members(
	num int not null auto_increment, 
	id char(15) not null,
	pass char(15) not null,
	name char(10) not null,
	phone char(20) not null,
	email char(80) not null,
	regist_day char(20),
	admin boolean,
	room char(10),
	primary key(num)
);