create database kamiken_portal;
use kamiken_portal;

create table users(
    id int not null primary key auto_increment,
    created_at timestamp,
    updated_at timestamp,
    deleted_at timestamp
) engine=InnoDB default charset=utf8;

create table user_details(
    user_id int not null
    foreign key fk_user_id(user_id)
    references users(id),
    name varchar(128),
    gender tinyint,
    age int,
    position_id int,
    department_id int,
    occupation_id int
) engine=InnoDB default charset=utf8;

create table positions(
    position_id int not null primary key,
    position_name varchar(16)
) engine=InnoDB default charset=utf8;

create table departments(
    department_id int not null primary key,
    department_name varchar(16)
) engine=InnoDB default charset=utf8;

create table occupations(
    occupation_id int not null primary key,
    occupation_name varchar(16)
) engine=InnoDB default charset=utf8;

create table authorization_informations(
    user_id int not null
    foreign key fk_user_id(user_id)
    references users(id),
    password varchar(128),
    salt varchar(128)
) engine=InnoDB default charset=utf8;

create table user_phone_numbers(
    user_id int not null
    foreign key fk_user_id(user_id)
    references users(id),
    number varchar(16)
) engine=InnoDB default charset=utf8;

create table user_email_addresses(
    user_id int not null
    foreign key fk_user_id(user_id)
    references users(id),
    address varchar(255)
) engine=InnoDB default charset=utf8;

create table topics(
    topic_id int not null primary key auto_increment,
    user_id int not null
    foreign key fk_user_id(user_id)
    references users(id),
    title varchar(32) not null,
    body text(1000) not null
) engine=InnoDB default charset=utf8;

create table likes(
    user_id int not null,
    foreign key fk_user_id(user_id)
    references users(id),
    topic_id int not null
) engine=InnoDB default charset=utf8;