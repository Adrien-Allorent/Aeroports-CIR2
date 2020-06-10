CREATE TABLE Customer(
	idCustomer int PRIMARY KEY UNIQUE,
	firstName text,
	lastName text,
	birth date,
	mail text
);
CREATE TABLE Fare(
	idFare int PRIMARY KEY UNIQUE,
	route text,
	weFlight int,
	fareCode text,
	dateToDeparture int,
	filingRate int,
	fare float
);
CREATE TABLE Bill(
	idBill int PRIMARY KEY UNIQUE,
	totalCost float
);
CREATE TABLE Airport(
	idAirport int PRIMARY KEY UNIQUE,
	airportCode text UNIQUE,
	city text,
	state text,
	latitude float,
	longitude float,
	surcharge float
);
CREATE TABLE Travel(
	idTravel int PRIMARY KEY UNIQUE,
	codeTravel text,
	route text,
	distancekm int,
	dayOfWeek int,
	departureTime time,
	arrivalTime time,
	flightSize int,
	departureIdAirport int,
	arrivalIdAirport int,
	FOREIGN KEY(departureIdAirport) REFERENCES Airport(idAirport),
	FOREIGN KEY(arrivalIdAirport) REFERENCES Airport(idAirport)
);
CREATE TABLE Flight(
	idFlight int PRIMARY KEY UNIQUE,
	date date,
	reservedPlaces int,
	idTravel int,
	FOREIGN KEY(idTravel) REFERENCES Travel(idTravel)
);
CREATE TABLE Reservation(
	idReservation int PRIMARY KEY UNIQUE,
	reservationDate date,
	cost float,
	idFare int,
	idCustomer int,
	idBill int,
	idFlight int,
	FOREIGN KEY(idFare) REFERENCES Fare(idFare),
	FOREIGN KEY(idCustomer) REFERENCES Customer(idCustomer),
	FOREIGN KEY(idBill) REFERENCES Bill(idBill),
	FOREIGN KEY(idFlight) REFERENCES Flight(idFlight)
);
