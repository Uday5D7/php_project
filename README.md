Environment Setup and Database Creation

## Objective
The objective of this task is to set up the PHP development environment using XAMPP, create a MySQL database, and establish a database connection for the PHP CRUD application.

---

# Technologies Used

- PHP
- MySQL
- XAMPP
- VS Code

---

# Software Requirements

## 1. XAMPP
Download and install XAMPP:

https://www.apachefriends.org/

XAMPP includes:
- Apache Server
- MySQL Database
- PHP Interpreter

---

## 2. Visual Studio Code

Download VS Code:

https://code.visualstudio.com/

Recommended Extensions:
- PHP Intelephense
- PHP Server

---

# Project Folder Setup

Go to:

C:\xampp\htdocs\

Create a project folder:

blog

Final path:

C:\xampp\htdocs\blog

---

# Starting the Server

Open XAMPP Control Panel.

Start:
- Apache
- MySQL

Both services should turn green.

---

# Creating the Database

Open browser:

http://localhost/phpmyadmin

Steps:
1. Click "New"
2. Enter database name:
   blog
3. Click "Create"

---

# Creating Tables

Open SQL tab and run the following queries:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    role VARCHAR(20)
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);