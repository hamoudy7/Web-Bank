<?php
include 'Connection.php';
if($con){
     #Create User table (Sign up)
    $sql1 = "CREATE table users (user_id INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL, 
    email varchar(255) UNIQUE, 
    phone_number varchar(15) NOT NULL, 
    date_of_birth DATE NOT NULL, 
    hashed_password varchar(255) NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    $QueryResult1=mysqli_query($con,$sql1);

    #Create accounts table 
    $sql2 = "CREATE TABLE ACCOUNT (
    AccountID INT AUTO_INCREMENT PRIMARY KEY, -- Auto-incrementing primary key
    UserID INT NOT NULL,                      -- Foreign key to link to USER table
    AccountType VARCHAR(50) NOT NULL,         -- Type of account (e.g., Savings, Checking)
    InitialDeposit DECIMAL(15, 2) NOT NULL,   -- Initial deposit amount
    CurrencyType VARCHAR(10) NOT NULL,        -- Currency type (e.g., USD, EUR)
    CreatedDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Timestamp of account creation
    FOREIGN KEY (UserID) REFERENCES users(user_id));";
    $QueryResult2=mysqli_query($con,$sql2);
}

?>