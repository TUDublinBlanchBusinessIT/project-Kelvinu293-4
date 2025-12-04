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

create table programmes (
    ProgrammeID int auto_increment,
    ProgrammeCode varchar(20), 
    ProgrammeName varchar(200),    
    Campus varchar(80),   
    Mode varchar(20),     
    PRIMARY KEY (ProgrammeID)
);