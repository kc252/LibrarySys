CREATE TABLE users (
    
	Username VARCHAR(30) NOT NULL PRIMARY KEY,
    Password VARCHAR (30) NOT NULL,
    FirstName VARCHAR(30) NOT NULL,
    Surname VARCHAR(30) NOT NULL,
    AddressLine1 VARCHAR(256) NOT NULL,
    AddressLine2 VARCHAR(256) NOT NULL,
    City VARCHAR(30) NOT NULL,
    Telephone INT(15),
    Mobile INT(15)
    
);