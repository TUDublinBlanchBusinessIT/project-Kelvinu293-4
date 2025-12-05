drop database if exists student;
create database student;
use student;
create table students (
    StudentID int auto_increment,
    Firstname varchar (30),
    Lastname varchar (30),
    Email varchar (30),
    DateOfBirth date,
    PhoneNumber bigint,
    primary key (StudentID)
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
    Credits tinyint,
    Semester varchar(20),      
    ProgrammeID  int,             
    primary key (ModuleID),
    FOREIGN KEY (ProgrammeID) REFERENCES programmes(ProgrammeID)
);

create table payments (
    PaymentID int auto_increment,
    StudentID int,
    Amount decimal(10,2),
    PaymentDate DATETIME,
    Information varchar(1000),
    Methods varchar(50),
    primary key (PaymentID),
    FOREIGN KEY (StudentID) REFERENCES students(StudentID)
);