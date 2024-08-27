# Travclan Trip Planner Form

This project is a simple PHP-based web application that allows users to submit their details for planning a trip. The form collects user information such as name, age, gender, email, phone number, and additional trip-related details and stores it in a MySQL database.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Database Structure](#database-structure)
- [Customization](#customization)
- [Troubleshooting](#troubleshooting)
- [License](#license)

## Features

- Collects user information via a web form.
- Stores the information in a MySQL database.
- Displays a success message upon successful submission.

## Prerequisites

Before you begin, ensure you have the following:

- A web server with PHP support (e.g., Apache, Nginx).
- MySQL or MariaDB database.
- Basic knowledge of PHP and MySQL.

## Installation

1. **Clone the repository or download the files** to your local machine:

   ```bash
   git clone <repository-url>
Set up the MySQL database:

Create a new database named TRAVCLAN.

Create a table named trip using the following SQL query:CREATE TABLE `trip` (
  `sno` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `age` INT NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `other` TEXT NOT NULL,
  `dt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
);
Configure the PHP script:

Update the database connection details in the index.php file:
$server = "localhost";
$username = "root";
$password = "";

Ensure that these details match your local MySQL setup.

Deploy the application:

Place the files in the root directory of your web server (e.g., htdocs for XAMPP or www for WAMP).
Usage
Access the application by navigating to the URL where your server is running. For example:


http://localhost/index.php

Fill out the form with the required details and click the "Submit" button.

Verify the submission:

After submitting the form, a success message should appear.
The submitted details will be stored in the trip table in your MySQL database.
Database Structure
The application uses a single table trip with the following columns:

sno (INT): Auto-incremented primary key.
name (VARCHAR): Name of the user.
age (INT): Age of the user.
gender (VARCHAR): Gender of the user.
email (VARCHAR): Email address of the user.
phone (VARCHAR): Phone number of the user.
other (TEXT): Additional trip-related information.
dt (DATETIME): Timestamp of the submission.
Customization
Styling: Customize the appearance by modifying the index.css file.
Form Fields: Add or remove form fields by editing the HTML in the index.php file.
Database Columns: Modify the database structure as needed to match your form fields.
Troubleshooting
Database Connection Error: Ensure your MySQL server is running and the credentials in index.php are correct.
Form Submission Error: Check for SQL syntax errors or ensure that the database and table exist.


This README provides an overview of the project, setup instructions, and guidance on using and customizing the application.





