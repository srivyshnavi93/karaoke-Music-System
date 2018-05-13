drop table if exists account;

drop table if exists accelarated_queue;

drop table if exists queue;
drop table if exists karaoke;
drop table if exists song;
drop table if exists contributer;
create table account(
	id int auto_increment primary key not null,
	name varchar(250),
	amount_paid float
);

create table song(
	id int auto_increment primary key not null ,
	title varchar(250)
);
create table contributer(
	id int auto_increment primary key not null ,
	name varchar(250),
	type varchar(250)
);
create table karaoke(
	id int primary key auto_increment not null,
	name varchar(250),
	song_id int,
	foreign key(song_id) references song(id),
	contrib_id int,
	foreign key(contrib_id) references contributer(id)

);
create table accelarated_queue(
	id int auto_increment primary key not null,
	karaoke_id int,
	foreign key(karaoke_id) references karaoke(id),
	amount float
);
create table queue(
	id  int auto_increment primary key not null,
	karaoke_id int,
	flag  ;
	foreign key(karaoke_id) references karaoke(id)
);


insert into account (name,amount_paid) values 
	("Pruthiv",20),("Nikhil",50),
	("Mallik",5),("Rahul",17.3),
	("Mahesh",47),("ishu",24.1),
	("akhil",18.5);

select * from account;
insert into song (title) values ( "faded");
select * from song;

insert into contributer (name,type)values 
	("Alan Walker","singer"),
	("John","drums"),
	("Max Roach","guitar"),
	("Neil Peart","keyboard"),
	("Phil Collins","keyboard"),
	("Danny Carey","keyboard"),
	("Buddy Rich","drums"),
	("Josh Freese","singer"),
	("patero","guitar");

select * from contributer;
insert into karaoke (name,song_id,contrib_id) values 
	( "slow",1, 1),	("normal",1,1),
	("fast",1,1),	("remix",1,1),
	("re-remix",1,8), 	( "slow",1, 2),
	("normal",1,2),	("fast",1,2),
	("remix",1,7),	("re-remix",1,2),
	( "slow",1, 3), ("normal",1,3),
	("fast",1,3), ("remix",1,9),
	("re-remix",1,3), ( "slow",1, 4),
	("normal",1,5), ("fast",1,6),
	("remix",1,4), ("re-remix",1,4);
select * from karaoke;



/*




faded - slow
	Alan Walker - singer
	John - drums
 	Max Roach - guitar
 	Neil Peart - keyboard
faded - normal
	Alan Walker  - singer
	John - drums
 	Max Roach - guitar
 	Phil Collins - keyboard
faded - fast
	Alan Walker  - singer
	John - drums
 	Max Roach - guitar
 	Danny Carey - keyboard
faded - remix
	Alan Walker  - singer
	Buddy Rich - drums
 	Max Roach - guitar
 	Neil Peart - keyboard
faded - re-remix
	Josh Freese - singer
	John - drums
 	patero - guitar
 	Neil Peart - keyboard






