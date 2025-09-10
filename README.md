# Employee Management System (PHP + REST API)

### 📌 Overview

This project is a CRUD-based Employee Management System built using PHP, MySQL, and RESTful APIs.
It provides both:

* A REST API (api.php) to manage employee records.

* A frontend UI (PHP + HTML + CSS) that consumes the API using cURL.

### 🏗️ Features

* Add new employees 📝

* View all employees in a table 👀

* Edit employee details ✏️

* Delete employees ❌

* REST API endpoints for external integrations 🌐

### ⚙️ Technologies Used

1. PHP 7+
2. MySQL (Database: employee_management)
3. HTML5 + CSS3 (custom styling with style.css)
4. cURL (API communication)

### 📂 Project Structure

    project-root/
    │── add.php              # Add new employee form
    │── all_employees.php    # List all employees
    │── edit.php             # Edit employee form
    │── delete.php           # Delete employee by ID
    │── update.php           # Update employee logic
    │── api.php              # REST API (CRUD operations)
    │── Employee.php         # Employee model (DB operations)
    │── config.php           # Database connection
    │── curl_helper.php      # Helper for sending API requests
    │── header.php           # Common header + navigation
    │── style.css            # Styles for UI

### 🗄️ Database Setup

Create a database:

    CREATE DATABASE employee_management;

Create an employee table:

    CREATE TABLE employee (
    id INT AUTO_INCREMENT PRIMARY KEY,
    emp_name VARCHAR(100) NOT NULL,
    emp_code VARCHAR(50) NOT NULL,
    emp_email VARCHAR(100) NOT NULL,
    emp_phone VARCHAR(20),
    emp_address VARCHAR(255),
    emp_designation VARCHAR(100),
    emp_joining_date DATE
    );

### ▶️ Running the Application

Clone or copy this project into your PHP server’s root directory (e.g., htdocs/ for XAMPP or www/ for WAMP).

Import the database (employee_management).

Update config.php with your MySQL credentials:

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'employee_management';

Start Apache & MySQL services.

Open the app in your browser:

    http://localhost/myapi/all_employees.php

### 🌐 REST API Endpoints

| Method | Endpoint                     | Description                  |
| ------ | ----------------------------- | ---------------------------- |
| GET    | `/api.php/employees`          | Fetch all employees          |
| GET    | `/api.php/employees/{id}`     | Fetch single employee by ID  |
| POST   | `/api.php/employees`          | Add new employee             |
| PUT    | `/api.php/employees/{id}`     | Update employee by ID        |
| DELETE | `/api.php/employees/{id}`     | Delete employee by ID        |

### 👩‍💻 Author

Sayantika Kandar