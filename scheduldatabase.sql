-- CREATE DATABASE scheduldatabase
DROP DATABASE IF EXISTS scheduldatabase;
CREATE DATABASE scheduldatabase;
USE scheduldatabase;


-- CREATE TABLE schedul;
CREATE TABLE schedul (
BusLocation varchar(30) NOT NULL,
LotNumber INT (30) NOT NULL,
DepartureTime varchar(30) NOT NULL,
ArrivalTime varchar(30) NOT NULL
);

-- Populate schedul data

INSERT INTO schedul VALUES 
('Lot 60 - Main Campus', 60, '7:50 AM', '8:10 AM'),
('NJ Transit Garage - Main Campus', 102, '8:10 AM', '8:20 AM'),
('NJ Transit Garage - Main Campus', 102, '9:00 AM', '9:20 AM'),
('Fenwick Hall - Main Campus', 103, '10:00 AM', '10:15 AM'),
('Fenwick Hall - Main Campus', 103, '11:00 AM', '11:15 AM'),
('Lot 60 - Main Campus', 60, '12:00 PM', '12:10 PM'),
('University Hall -NJ Transit Garage', 109, '2:00 PM', '2:15 PM'),
('Montclair Heights - Village', 107, '3:00 PM', '3:15 PM'),
('Basie Hall - lot 60', 104, '5:00 PM', '5:15 PM');

-- create the users and grant priveleges to those users
GRANT SELECT, INSERT, DELETE, UPDATE
ON scheduldatabase.*
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

GRANT SELECT
ON schedul
TO mgs_tester@localhost
IDENTIFIED BY 'pa55word';