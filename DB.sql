DROP DATABASE IF EXISTS lms_ucsc_scs1203;
CREATE DATABASE lms_ucsc_scs1203;

USE lms_ucsc_scs1203;

SET @PREV_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS;
SET @@FOREIGN_KEY_CHECKS=0;

INSERT INTO Professor VALUES ('E001','Mr Abc Perera','Office 1',0774343321,'D001')

CREATE TABLE Department(
  DepartmentCode CHAR(5) NOT NULL,
  Name VARCHAR(255) NOT NULL ,
  Location VARCHAR(255) NOT NULL ,
  Phone INT,
  EmpId CHAR(5),
  CONSTRAINT PRIMARY KEY (DepartmentCode),
  CONSTRAINT FOREIGN KEY (EmpId) REFERENCES Professor(EmpId),
  CONSTRAINT UNIQUE KEY (EmpId),
  CONSTRAINT UNIQUE KEY (Name)
);

INSERT INTO Department VALUES('D001','Department 1','location A', 0772343432,null );

SET FOREIGN_KEY_CHECKS=@PREV_FOREIGN_KEY_CHECKS;

CREATE TABLE Professor(
  EmpId CHAR(5) NOT NULL,
  Name VARCHAR(255) NOT NULL,
  Office VARCHAR(255) NOT NULL ,
  Phone INT,
  DepartmentCode CHAR(5) NOT NULL,
  CONSTRAINT PRIMARY KEY (EmpId),
  CONSTRAINT FOREIGN KEY (DepartmentCode) REFERENCES Department(DepartmentCode)
);


SET @@FOREIGN_KEY_CHECKS=@PREV_FOREIGN_KEY_CHECKS;

CREATE TABLE Course(
  CourseCode CHAR(5) NOT NULL,
  Name VARCHAR(255),
  CreditHours DECIMAL (2,1),
  College VARCHAR(255),
  PreRequisteCourseCode VARCHAR(5),
  DepartmentCode CHAR(5) NOT NULL,
  CONSTRAINT PRIMARY KEY (CourseCode),
  CONSTRAINT FOREIGN KEY (PreRequisteCourseCode) REFERENCES Course(CourseCode),
  CONSTRAINT FOREIGN KEY (DepartmentCode) REFERENCES Department(DepartmentCode),
  CONSTRAINT UNIQUE KEY (DepartmentCode)
);

CREATE TABLE Book(
  Title VARCHAR(255) NOT NULL ,
  ISBN CHAR(13) NOT NULL ,
  Publisher VARCHAR(255),
  Year INT(4),
  CONSTRAINT PRIMARY KEY (ISBN)
);


CREATE TABLE Author(
  ISBN CHAR(13) NOT NULL ,
  ProfessorId CHAR(5) NOT NULL ,
  CONSTRAINT PRIMARY KEY(ISBN,ProfessorId),
  CONSTRAINT FOREIGN KEY (ISBN) REFERENCES Book(ISBN)
  ON DELETE CASCADE,
  CONSTRAINT FOREIGN KEY (ProfessorId) REFERENCES Professor(EmpId)
  ON DELETE CASCADE
);

CREATE TABLE CourseSection(
  CourseCode CHAR(5) NOT NULL ,
  SectionNumber CHAR(5) NOT NULL ,
  Semester INT NOT NULL ,
  Year INT NOT NULL,
  Classroom VARCHAR(255) NOT NULL ,
  ClassTime TIME NOT NULL ,
  ClassSize INT NOT NULL ,
  ProfessorId CHAR(5) NOT NULL ,
  CONSTRAINT PRIMARY KEY (CourseCode,SectionNumber,Semester,Year),
  CONSTRAINT FOREIGN KEY (CourseCode) REFERENCES Course(CourseCode),
  CONSTRAINT FOREIGN KEY (ProfessorId) REFERENCES Professor(EmpId)
);

CREATE TABLE Company(
  Name VARCHAR(255) NOT NULL,
  Semester INT NOT NULL ,
  Year INT NOT NULL ,
  CompanyManager VARCHAR(255),
  CONSTRAINT PRIMARY KEY (Name)
);

CREATE TABLE BookUsage(
  ISBN CHAR(13) NOT NULL ,
  CourseCode CHAR(5) NOT NULL ,
  ProfessorId CHAR(5) NOT NULL ,
  CONSTRAINT PRIMARY KEY (ISBN,CourseCode,ProfessorId),
  CONSTRAINT FOREIGN KEY (ISBN) REFERENCES Book(ISBN)
  ON DELETE CASCADE,
  CONSTRAINT FOREIGN KEY (CourseCode) REFERENCES Course(CourseCode)
  ON DELETE CASCADE,
  CONSTRAINT FOREIGN KEY (ProfessorId) REFERENCES Professor(EmpId)
  ON DELETE CASCADE
);

CREATE TABLE Student(
  StudentID CHAR(10) NOT NULL ,
  Name VARCHAR(255) NOT NULL ,
  Address VARCHAR(500),
  Status VARCHAR(255),
  CONSTRAINT PRIMARY KEY (StudentID)
);


CREATE TABLE CourseEnrollment(
  StudentID CHAR(10) NOT NULL ,
  CourseCode CHAR(5) NOT NULL ,
  SectionNumber CHAR(5) NOT NULL ,
  Semester INT NOT NULL ,
  Year INT NOT NULL ,
  Grade INT,
  CONSTRAINT PRIMARY KEY (StudentID,CourseCode,SectionNumber,Semester),
  CONSTRAINT FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
  CONSTRAINT FOREIGN KEY (CourseCode,SectionNumber,Semester,Year) REFERENCES CourseSection(CourseCode,SectionNumber,Semester,Year)
);

CREATE TABLE UndergraduateStudent(
  StudentID CHAR(10),
  CONSTRAINT PRIMARY KEY (StudentID),
  CONSTRAINT FOREIGN KEY (StudentID) REFERENCES Student(StudentID)
  ON DELETE CASCADE
);

CREATE TABLE GraduateStudent(
  StudentID CHAR(10),
  Thesis VARCHAR(255),
  `Option` VARCHAR(255),
  CONSTRAINT PRIMARY KEY (StudentID),
  CONSTRAINT FOREIGN KEY (StudentID) REFERENCES Student(StudentID)
  ON DELETE CASCADE
);

CREATE TABLE CompanySessionEnrollment(
  StudentID CHAR (10) NOT NULL ,
  CompanyName VARCHAR (255) NOT NULL ,
  Assesment VARCHAR (255),
  CONSTRAINT PRIMARY KEY (StudentID,CompanyName),
  CONSTRAINT FOREIGN KEY (StudentID) REFERENCES UndergraduateStudent(StudentID),
  CONSTRAINT FOREIGN KEY (CompanyName) REFERENCES Company(Name)
);

CREATE TABLE LabSession(
  LabSessionNumber CHAR(5) NOT NULL ,
  Lab CHAR(10) NOT NULL ,
  Time TIME NOT NULL ,
  Topic VARCHAR(255) NOT NULL ,
  CourseCode CHAR(5) NOT NULL ,
  SectionNumber CHAR(5) NOT NULL ,
  Semester INT NOT NULL ,
  Year INT NOT NULL ,
  StudentID CHAR(10),
  CONSTRAINT PRIMARY KEY (LabSessionNumber),
  CONSTRAINT FOREIGN KEY (StudentID) REFERENCES GraduateStudent(StudentID),
  CONSTRAINT FOREIGN KEY (CourseCode,SectionNumber,Semester,Year) REFERENCES CourseSection(CourseCode,SectionNumber,Semester,Year)
);

CREATE TABLE BookBorrow(
  ISBN CHAR(13),
  StudentID CHAR(10),
  BorrowDate DATE,
  CONSTRAINT PRIMARY KEY (ISBN,StudentID,BorrowDate),
  CONSTRAINT FOREIGN KEY (ISBN) REFERENCES Book(ISBN)
  ON DELETE CASCADE,
  CONSTRAINT FOREIGN KEY (StudentID) REFERENCES Student(StudentID)
  ON DELETE CASCADE
);

CREATE TABLE ReturnBook(
  ISBN CHAR(13),
  StudentID CHAR(10),
  BorrowDate DATE,
  ReturnDate DATE,
  CONSTRAINT PRIMARY KEY (ISBN,StudentID,BorrowDate,ReturnDate),
  CONSTRAINT FOREIGN KEY (ISBN,StudentID,BorrowDate) REFERENCES BookBorrow(ISBN,StudentID,BorrowDate)
  ON DELETE CASCADE
);


INSERT INTO Department VALUES('D001','Department 1','location A', 0772343432,E001 );
INSERT INTO Department VALUES('D002','Department 2','location B',0775684562,E002 );
INSERT INTO Department VALUES('D003','Department 3','location C',0754568942,E003 );
INSERT INTO Department VALUES('D004','Department 4','location D',0783459876,E004 );
INSERT INTO Department VALUES('D005','Department 5','location E',0727538767,E005 );
INSERT INTO Department VALUES('D006','Department 6','location F',0710875412,E006 );
INSERT INTO Department VALUES('D007','Department 7','location G',0774343431,E007 );
INSERT INTO Department VALUES('D008','Department 8','location H',0710170307,E008 );
INSERT INTO Department VALUES('D009','Department 9','location I',0756501011,E009 );
INSERT INTO Department VALUES('D010','Department 10','location J',0714735767,E010 );

INSERT INTO Professor VALUES ('E001','Mrs Rani Perera','Office 1',0774343321,'D001');
INSERT INTO Professor VALUES ('E002','Mrs Ishani Peiris','Office 2',0774343389,'D002');
INSERT INTO Professor VALUES ('E003','Mr Abhishek Perera','Office 3',0774343334,'D003');
INSERT INTO Professor VALUES ('E004','Mr Sunil Perera','Office 4',0772343321,'D004');
INSERT INTO Professor VALUES ('E005','Mr Kamal Perera','Office 5',0774883321,'D005');
INSERT INTO Professor VALUES ('E006','Mr Nanda Pereda','Office 6',0774773329,'D006');
INSERT INTO Professor VALUES ('E007','Mr Nimal Perera','Office 7',0774345621,'D007');
INSERT INTO Professor VALUES ('E008','Mr Bimal Perera','Office 8',0774343300,'D008');
INSERT INTO Professor VALUES ('E009','Mr Namal Fernando','Office 9',0774343392,'D009');
INSERT INTO Professor VALUES ('E010','Mrs Mohini Peiris','Office 10',0774343311,'D010');

INSERT INTO Book VALUES ('C How to Program',' 978-0-13-612356-9',' Pearson Education',2010);
INSERT INTO Book VALUES ('Database Management System','978-0-37-575154-7','Pearson Education',2012);
INSERT INTO Book VALUES ('Java The Complete Reference, 9th Edition','978-33-75-75154-7','Modern Library',2015);

INSERT INTO Student VALUES ('S001','Missaka Iddamalgoda','Ratnapura','status');
INSERT INTO Student VALUES ('S002','Janitha Dananjaya','Panadura','status');
INSERT INTO Student VALUES ('S003','Denver Simonsz','Panadura','status');
INSERT INTO Student VALUES ('S004','Tharindu Athukorala','Ratnapura','status');
INSERT INTO Student VALUES ('S005','Vidurajith Dharshana','Ratnapura','staus');