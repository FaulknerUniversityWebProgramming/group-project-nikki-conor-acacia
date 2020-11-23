DROP DATABASE IF EXISTS contacts;
CREATE DATABASE IF NOT EXISTS contacts;
USE contacts;

SELECT 'CREATING DATABASE STRUCTURE' as 'INFO';

/* These are the main tables that exist*/
DROP TABLE IF EXISTS contacts;

/*!50503 set default_storage_engine = InnoDB */;
/*!50503 select CONCAT('storage engine: ', @@default_storage_engine) as INFO */;

CREATE TABLE contacts (
    FirstName       VARCHAR(20)     NOT NULL,
    LastName        VARCHAR(45)     NOT NULL,
    Country         VARCHAR(45)     NOT NULL,
    Email_Address   VARCHAR(45)     NOT NULL,
    PRIMARY KEY (FirstName)
);

flush logs;

SELECT 'LOADING departments' as 'INFO';
source load_departments.dump ;

source show_elapsed.sql ;
