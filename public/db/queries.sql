/*Database Structure
        User ->userId,username,password,role
        Vehicle -> vehicleId,regNo,make,model,year,color,costPerDay,costPersWeek,CostPerMonth
        Customer -> customerId,nic,licenseNumber,FName,MName,LName,email,address,telephone,user_id
        Booking -> bookingId,bookingDate,startDate,endDate,isApproved
        VehicleBooking -> vehicleId,customerId,bookingId
        Billing-> billNo,billDate,billAmount,BookingNo
*/

CREATE DATABASE VRS;

/*User Table*/
CREATE TABLE User (userId INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(20),password VARCHAR(100),
role VARCHAR(20), isDeleted BOOLEAN DEFAULT 0);

/*Vehicle Table*/
CREATE TABLE Vehicle (vehicleId INT AUTO_INCREMENT PRIMARY KEY,regNo VARCHAR(20),make VARCHAR(20),
model VARCHAR(20),year INT,color VARCHAR(20),costPerDay INT,costPerWeek INT,costPerMonth INT,
isDeleted BOOLEAN DEFAULT 0);

/*Customer Table*/
CREATE TABLE Customer(customerId INT AUTO_INCREMENT PRIMARY KEY,nic VARCHAR(20) NOT NULL,
licenseNumber VARCHAR(30) NOT NULL,FName VARCHAR(100),MName VARCHAR(100),LName VARCHAR(100),
email VARCHAR(100),address VARCHAR(300),telephone INT, userId INT, 
FOREIGN KEY(userId) REFERENCES User(userId),isDeleted BOOLEAN DEFAULT 0);

/*Booking Table*/
CREATE TABLE Booking(bookingId INT AUTO_INCREMENT PRIMARY KEY,startDate DATE,endDate DATE,
bookingDate DATETIME NOT NULL DEFAULT NOW(),
isApproved BOOLEAN DEFAULT 0,isDeleted BOOLEAN DEFAULT 0);


/*Vehicle Booking Table*/
CREATE TABLE VehicleBooking(vehicleId INT,customerId INT,bookingId INT,isDeleted BOOLEAN DEFAULT 0,
FOREIGN KEY(vehicleId) REFERENCES Vehicle(vehicleId),
FOREIGN KEY(customerId) REFERENCES Customer(customerId),
FOREIGN KEY(bookingId) REFERENCES Booking(bookingId),
PRIMARY KEY(vehicleId,customerId,bookingId));

/*Billing Table*/
CREATE TABLE Billing(
billNo INT AUTO_INCREMENT PRIMARY KEY,
biLlDate DATETIME NOT NULL DEFAULT NOW(),
billAmount INT,
BookingNo INT,
FOREIGN KEY(BookingNo) REFERENCES Booking(bookingId));

/*Sample Data*/
/*
    admin       admin
    customer    customer
    gimantha    gima1234
*/


insert into User('username','password','role') values('admin','21232f297a57a5a743894a0e4a801fc3','admin');
insert into User(username,password,role) values('admin','21232f297a57a5a743894a0e4a801fc3','admin');

insert into User('username','passowrd','role') values('abc','abc','customer');
insert into Customer values('nic','namesda','addressafdad','231241',$mysqli_insert_id($conn),)