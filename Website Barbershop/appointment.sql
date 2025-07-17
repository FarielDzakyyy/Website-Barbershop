CREATE DATABASE barber;

USE barber;

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email_address VARCHAR(100),
    phone VARCHAR(20),
    category VARCHAR(50),
    date DATE,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
