
-- إنشاء قاعدة البيانات
CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;

-- إنشاء جدول المستخدمين
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    status TINYINT(1) DEFAULT 0
);
