create table apply(
	num int not null auto_increment,
	id char(15) not null,
	name char(10) not null,
	phone char(20) not null,
	room char(10),
	pay boolean,
	regist_day char(20) not null,
	email char(80) not null,
	primary key(num)
);