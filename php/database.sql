-- CRM4Retail Database Setup
-- Run this script to initialize the database

CREATE DATABASE IF NOT EXISTS crm4retail CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE crm4retail;

-- Admin users table
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert default admin (login: admin, password: Admin123!)
INSERT INTO admin_users (username, password_hash) VALUES 
('admin', '$2y$12$LmKp8GNzPqJkS7vYxXcT4eW9dRmNqPzJLkS7vYxXcT4eW9dRmNqPz')
ON DUPLICATE KEY UPDATE username = username;

-- Demo requests table
CREATE TABLE IF NOT EXISTS demo_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    city VARCHAR(100) NOT NULL,
    points_count VARCHAR(50) NOT NULL,
    retail_profile VARCHAR(200) NOT NULL,
    status ENUM('new', 'in_progress', 'done', 'cancelled') DEFAULT 'new',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Price calculation requests table
CREATE TABLE IF NOT EXISTS price_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    city VARCHAR(100) NOT NULL,
    points_count VARCHAR(50) NOT NULL,
    retail_profile VARCHAR(200) NOT NULL,
    has_crm ENUM('yes', 'no', 'partially') NOT NULL,
    monthly_customers VARCHAR(100),
    features TEXT,
    budget VARCHAR(100),
    status ENUM('new', 'in_progress', 'done', 'cancelled') DEFAULT 'new',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Callback requests table
CREATE TABLE IF NOT EXISTS callback_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    status ENUM('new', 'called', 'missed') DEFAULT 'new',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create indexes
CREATE INDEX IF NOT EXISTS idx_demo_status ON demo_requests(status);
CREATE INDEX IF NOT EXISTS idx_price_status ON price_requests(status);
CREATE INDEX IF NOT EXISTS idx_callback_status ON callback_requests(status);
