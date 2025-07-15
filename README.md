Simple User Form Web Project

This project is a simple full-stack web application using HTML, CSS, JavaScript, PHP, and MySQL.

## ✅ Features
- Submit user name and age through a form.
- Store data in a MySQL database.
- Display all user records in a table.
- Toggle each user's status (0 or 1) with a button using AJAX.
---
## 🛠 Requirements
- [XAMPP](https://www.apachefriends.org/index.html) or any local server with PHP and MySQL.
- Web browser (e.g., Chrome).
- Basic knowledge of how to import databases in phpMyAdmin.
---
## 📁 Files Included
- index.php: Main webpage.
- db.php: Database connection file.
- toggle.php: Handles AJAX status toggle.
- style.css: Page styling.
- users_db.sql: SQL file to create the database and table.
---
## 🚀 How to Run

### 1. Start XAMPP
- Open XAMPP Control Panel.
- Start Apache and MySQL.

### 2. Import Database
- Open your browser and go to: http://localhost/phpmyadmin
- Click on Import.
- Select users_db.sql from the extracted folder.
- Click Go. You should now have a database named mydb with a table users.

### 3. Set Up Project Files
- Copy all extracted files to htdocs folder inside the XAMPP directory.
  For example: C:/xampp/htdocs/web_project
- Open browser and visit: http://localhost/web_project/index.php

### 4. Use the App
- Enter a name and age, then submit.
- Data will appear in the table below.
- Click Toggle to switch the status between 0 and 1.
---
