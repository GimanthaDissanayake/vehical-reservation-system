CREATE DATABASE VRS;

CREATE TABLE User (userId INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(20),password VARCHAR(100),role VARCHAR(20), isDeleted BOOLEAN DEFAULT 0);

CREATE TABLE Vehicle (vehicleId INT AUTO_INCREMENT PRIMARY KEY,regNo VARCHAR(20),make VARCHAR(20),model VARCHAR(20),year INT,color VARCHAR(20),costPerDay INT,costPerWeek INT,costPerMonth INT,isDeleted BOOLEAN DEFAULT 0);

CREATE TABLE Customer(customerId INT AUTO_INCREMENT PRIMARY KEY,nic VARCHAR(20) NOT NULL,licenseNumber VARCHAR(30) NOT NULL,FName VARCHAR(100),MName VARCHAR(100),LName VARCHAR(100),address VARCHAR(300),telephone INT, userId INT, FOREIGN KEY(userId) REFERENCES User(userId),isDeleted BOOLEAN DEFAULT 0);

CREATE TABLE Booking(bookingId INT AUTO_INCREMENT PRIMARY KEY,startDate DATE,endDate DATE,bookingDate DATE,isApproved BOOLEAN DEFAULT 0,isDeleted BOOLEAN DEFAULT 0);

CREATE TABLE VehicleBooking(vehicleId INT,customerId INT,bookingId INT,isDeleted BOOLEAN DEFAULT 0,FOREIGN KEY(vehicleId) REFERENCES Vehicle(vehicleId),FOREIGN KEY(customerId) REFERENCES Customer(customerId),FOREIGN KEY(bookingId) REFERENCES Booking(bookingId));

insert into User('username','password','role') values('admin','21232f297a57a5a743894a0e4a801fc3','admin');
insert into User(username,password,role) values('admin','21232f297a57a5a743894a0e4a801fc3','admin');

insert into User('username','passowrd','role') values('abc','abc','customer');
insert into Customer values('nic','namesda','addressafdad','231241',$mysqli_insert_id($conn),)

    /*Database Structure
    User ->user_id,username,password,role
    Vehicle -> vehicle_id,veh_reg_no,make,model,year,color
    Customer -> user_id,nic,name,address,telephone

    */
?>