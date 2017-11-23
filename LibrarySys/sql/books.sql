CREATE TABLE Books (

	ISBN VARCHAR(30) not null Primary Key, 
	BookTitle VARCHAR(256) not null, 
	Author VARCHAR (30) not null, 
	Edition INT (2) not null,
	Printyear int (4) not null, 
	Category int(3) not null,
	Reserved char(1) not null

)