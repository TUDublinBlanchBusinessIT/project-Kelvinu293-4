drop database if exists student;
create database student;
use student;
create table students (
    id int auto_increment,
    Firstname varchar (30),
    Lastname varchar (30),
    Email varchar (30),
    DateOfBirth date,
    PhoneNumber bigint,
    primary key (id)
);

create table programmes (
    ProgrammeID int auto_increment,
    ProgrammeCode varchar (20), 
    ProgrammeName varchar (200),    
    Campus varchar (80),   
    Mode varchar (20),     
    primary key (ProgrammeID)
);

create table modules (
    ModuleID int auto_increment,
    ModuleCode varchar(20),     
    ModuleName varchar(300),     
    Credits int,
    Semester varchar(20),      
    ProgrammeID  int,             
    primary key (ModuleID),
    FOREIGN KEY (ProgrammeID) REFERENCES programmes(ProgrammeID)
);