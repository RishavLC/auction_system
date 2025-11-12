CREATE DATABASE auction_system;
USE auction_system;

CREATE TABLE roles (--roles table
    id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(50) NOT NULL UNIQUE,
    description VARCHAR(255) DEFAULT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

INSERT INTO roles (role_name, description) VALUES
('admin', 'Administrator with full access'),
('user', 'Normal user with limited access');

INSERT INTO users (username, email, password, role_id) VALUES
('admin', 'admin@auction.com', 'admin', 1),
('user1', 'user1@auction.com', 'user1', 2);