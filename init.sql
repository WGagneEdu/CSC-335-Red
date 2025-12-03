drop table if exists event_attendances;
drop table if exists event_features;
drop table if exists reviews;
drop table if exists art_items;
drop table if exists users;
drop table if exists events;

create table art_items (
	id int unique,
	value decimal,
	description varchar(512) not null,
	image_url varchar(128),
	acquired_date date,
	acquired_source varchar(64) not null,
	location varchar(64) not null,
	primary key(id)
);

create table users (
	name varchar(128) not null,
	email varchar(64) unique,
	primary key(email)
);

create table reviews (
	id int unique,
	user_email varchar(64),
	item_id int,
	rating int,
	review_text varchar(512) not null,
	primary key(id),
	foreign key(user_email) references users(email),
	foreign key(item_id) references art_items(id)
);

create table events (
	event_date date,
	event_location varchar(64),
	description varchar(512),
	primary key(event_date, event_location)
);

create table event_attendances (
	event_date date,
	event_location varchar(64),
	user_email varchar(64),
	foreign key(event_date, event_location) references events(event_date, event_location),
	foreign key(user_email) references users(email)
);

create table event_features (
	item_id int,
	event_date date,
	event_location varchar(64),
	user_email int,
	foreign key(item_id) references art_items(id),
	foreign key(user_email) references users(email)
);