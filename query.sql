CREATE TABLE tarif(
    route varchar(7) PRIMARY KEY,
    weFlights int,
    fareCode char,
    dateToDeparture int,
    fillingRate int,
    fare int
);

CREATE TABLE aeroport(
    AirportCode varchar(3) PRIMARY KEY,
    city text,
    state text,
    latitude float,
    longitude float,
    surcharge float
);

CREATE TABLE vol(
    ID int PRIMARY KEY,
    idFly varchar(10),
    distancekm int,
    dayOfWeek int,
    departureTime varchar(5),
    arrivalTime varchar(5),
    flightSize int,
    reservedPlaces int,
    departureAirportCode varchar(3),
    arrivalAirportCode varchar(3),
    FOREIGN KEY(departureAirportCode) REFERENCES Aeroport(airportCode),
    FOREIGN KEY(arrivalAirportCode) REFERENCES Aeroport(airportCode)
);

CREATE TABLE client(
    ID int PRIMARY KEY,
    nom text,
    prenom text,
    birth date,
    mail text,
    FOREIGN KEY(ID) REFERENCES Vol(ID)
);

insert into tarif (route, weflights, farecode, datetodeparture, fillingrate, fare) values ('YAM-YSJ',0,'Q',21,40,140);
delete from tarif where route = 'YAM-YSJ'