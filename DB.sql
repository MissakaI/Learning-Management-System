CREATE TABLE Professor(
  EmpId CHAR(5) NOT NULL,
  Name VARCHAR(255) NOT NULL,
  Office VARCHAR(255) NOT NULL ,
  Phone INT,
  DepartmentCode CHAR(5) NOT NULL,
  CONSTRAINT PRIMARY KEY (EmpId),
  CONSTRAINT FOREIGN KEY (DepartmentCode) REFERENCES Department(DepartmentCode)
);

CREATE TABLE Department(
  DepartmentCode CHAR(5) NOT NULL,
  Name VARCHAR(255) NOT NULL ,
  Location VARCHAR(255) NOT NULL ,
  Phone INT,
  EmpId CHAR(5) NOT NULL,
  CONSTRAINT PRIMARY KEY (DepartmentCode),
  CONSTRAINT FOREIGN KEY (EmpId) REFERENCES Professor(EmpId),
  CONSTRAINT UNIQUE KEY (EmpId),
  CONSTRAINT UNIQUE KEY (Name)
);

CREATE TABLE Course(
  CourseCode CHAR(5) NOT NULL,
  Name VARCHAR(255),
  CreditHours DECIMAL (2,1),
  College VARCHAR(255),
  PreRequisteCourseCode VARCHAR(5),
  DepartmentCode CHAR(5) NOT NULL,
  CONSTRAINT PRIMARY KEY (CourseCode),
  CONSTRAINT FOREIGN KEY (PreRequisteCourseCode) REFERENCES Course(CourseCode),
  CONSTRAINT FOREIGN KEY (DepartmentCode) REFERENCES Department(DepartmentCode)
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
  ON DELETE CASCADE ,
  CONSTRAINT FOREIGN KEY (ProfessorId) REFERENCES Professor(ProfessorId)
  ON DELETE CASCADE,
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
  CONSTRAINT FOREIGN KEY (ProfessorId) REFERENCES Professor(ProfessorID)
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
  CONSTRAINT FOREIGN KEY (ProfessorId) REFERENCES Professor(ProfessorId)
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
  CONSTRAINT PRIMARY KEY (StudentID,CourseCode,SectionNumber,Semester)
  CONSTRAINT FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
  CONSTRAINT FOREIGN KEY (CourseCode,SectionNumber,Semester,Year) REFERENCES CourseSection(CourseCode,SectionNumber,Semester,Year)
);

CREATE TABLE UndergraduateStudent(
  StudentID CHAR(10),
  CONSTRAINT PRIMARY KEY (StudentID),
  CONSTRAINT FOREIGN KEY StudentID REFERENCES Student(StudentID)
  ON DELETE CASCADE
);

CREATE TABLE GraduateStudent(
  StudentID CHAR(10),
  Thesis VARCHAR(255),
  Option VARCHAR(255),
  CONSTRAINT PRIMARY KEY (StudentID),
  CONSTRAINT FOREIGN KEY StudentID REFERENCES Student(StudentID)
  ON DELETE CASCADE
);

CREATE TABLE CompanySessionEnrollment(
  StudentID CHAR (10) NOT NULL ,
  CompanyName VARCHAR (255) NOT NULL ,
  Assesment VARCHAR (255),
  CONSTRAINT PRIMARY KEY (StudentID,CompanyName),
  CONSTRAINT FOREIGN KEY StudentID REFERENCES Student(StudentID),
  CONSTRAINT FOREIGN KEY CompanyName REFERENCES Company(Name)
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