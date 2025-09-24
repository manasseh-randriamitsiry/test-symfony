-- Create database if it doesn't exist
CREATE DATABASE IF NOT EXISTS smur_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Create user and grant privileges
CREATE USER IF NOT EXISTS 'smur_user'@'%' IDENTIFIED BY 'smur_password';
GRANT ALL PRIVILEGES ON smur_db.* TO 'smur_user'@'%';
FLUSH PRIVILEGES;

-- Use the database
USE smur_db;