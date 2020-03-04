CREATE DATABASE VRS;
    
CREATE TABLE Vehicle (vehicleId INT AUTO_INCREMENT PRIMARY KEY,regNo VARCHAR(20),make VARCHAR(20),model VARCHAR(20),year INT,color VARCHAR(20));
            
CREATE TABLE User (userId INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(20),password VARCHAR(100),role VARCHAR(20));
            
CREATE Customer cart (user_id INT,nic VARCHAR(20),itemcode INT,sellerid INT);
            


    /*Database Structure
    User ->user_id,username,password,role
    Vehicle -> vehicle_id,veh_reg_no,make,model,year,color
    Customer -> user_id,nic,name,address,telephone
    

    */
?>