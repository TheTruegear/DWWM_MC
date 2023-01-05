CREATE TABLE Employe(
    idEmp Int Auto_increment NOT NULL,
    lname Varchar(50) NOT NULL,
    fname Varchar(50) NOT NULL,
    sex Varchar(50) NOT NULL,
    department Varchar(50) NOT NULL,
    salary Int NOT NULL,
    contractdate Varchar(50) NOT NULL
    ,CONSTRAINT EMPLOYE_PK PRIMARY KEY (idEmp)
)ENGINE=InnoDB;