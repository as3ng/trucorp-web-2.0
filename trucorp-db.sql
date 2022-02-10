CREATE DATABASE Trucorp;

USE Trucorp;

CREATE USER 'aseng'@'%' IDENTIFIED BY 'asengmaupurpleteam1337';

GRANT ALL PRIVILEGES on *.* to 'aseng'@'%';

FLUSH PRIVILEGES;

CREATE TABLE users (
	ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nama varchar(255) NOT NULL,
	alamat varchar(255) NOT NULL,
	jabatan varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO Trucorp.users (ID,nama,alamat,jabatan) VALUES (default,'pakyohan','Jln. Kebon Jeruk no. 7331','CEO Sunibiyans');
INSERT INTO Trucorp.users (ID,nama,alamat,jabatan) VALUES (default,'bunadia','Jln. Kebon Jeruk no. 1337','CTO Sunibiyans');
INSERT INTO Trucorp.users (ID,nama,alamat,jabatan) VALUES (default,'crisandoyeet','Jln. Kebon Jeruk no. 1373','CRTE Sunibiyans');

COMMIT;

SET GLOBAL sql_mode = 'NO_ENGINE_SUBSTITUTION';