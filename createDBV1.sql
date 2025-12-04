drop database if exists student;
create database student;
use student;
create table students (
    id int auto_increment,
    Firstname varchar (30),
    Lastname varchar (30),
    Email varchar (30),
    DateOfBirth date,
    PhoneNumber BIGINT,
    primary key (id)
);

CREATE TABLE lecturers (
    LecturerID int auto_increment,
    Firstname varchar (30),
    Surname varchar (30),
    Email varchar(30),
    primary key (LecturerID)
);