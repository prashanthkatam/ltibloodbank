# ltibloodbank

# Setting up Ubuntu Machine

sudo apt-get update

sudo apt-get install apache2

sudo apt-get install php libapache2-mod-php php-mysql php-curl php-gd php-json php-zip php-mbstring

sudo systemctl restart apache2

sudo apt-get install mysql-server

# Important Notes To Remember

Add Endpoint URL of the DB to the congig.php and also for the pages which need the DB Details

If the Database or Table name is changes please change it accordingly.

Example: Donate-blood.php, Find-donor.php, config.php, signup.php, index.php {login}, 

# Connecting to My SQL Database

mysql -h mysqldb2022.cecfz17qugxf.us-west-2.rds.amazonaws.com -u admin -p

# Create Database
Create database customers;

# Create table 
create table donors(id int AUTO_INCREMENT primary key, fname varchar(255) NOT NULL , lname varchar(255) NOT NULL , mobileno BIGINT UNIQUE, city varchar(255) NOT NULL, date date, dob date, bloodgroup varchar(255) NOT NULL);

# Important SQL Commands for use

DELETE FROM Customers;

show columns from donors;

# Create table and assign Values for Signin/Login

CREATE TABLE `users` (
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`username`, `name`, `password`) VALUES
('yssyogesh', 'Yogesh Singh', '12345'),
('bsonarika', 'Sonarika Bhadoria', '12345'),
('vishal', 'Vishal Sahu', '12345'),
('prashanth', 'Prashanth Katkam', '12345'),
('vijay', 'Vijay mourya', '12345');

# Insert Single Values to a Table

INSERT INTO `users` (`username`, `name`, `password`) VALUES
('prashanth', 'Prashanth Katkam', '12345');

# Git Commands

sudo git init

sudo git remote add origin "https://github.com/prashanthkatam/ltibloodbank.git"

sudo git remote -v

sudo git add .

sudo git commit -m "My Session Commit - This is the final code for the website with signup and login session functionality"

git remote set-url origin https://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@github.com/prashanthkatam/ltibloodbank.git

sudo git push origin master

# Upload new files

sudo git init

sudo git add .

sudo git commit -m ""

sudo git push origin master

# Must for using Session Variable

<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Homepage</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form>
    </body>
</html>
