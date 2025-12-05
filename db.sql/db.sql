CREATE DATABASE IF NOT EXISTS gest_semi;

USE DATABASE gest_semi;

CREATE TABLE users ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL, 
    active TINYINT(1) DEFAULT 1 
); 
 
CREATE TABLE tasks ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    title VARCHAR(150) NOT NULL, 
    description TEXT, 
    user_id INT, 
    priority ENUM('baja','media','alta') DEFAULT 'media', 
    status ENUM('pendiente','en_progreso','completada') DEFAULT 'pendiente', 
    deadline DATE, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    assigned_at TIMESTAMP NULL, 
    FOREIGN KEY (user_id) REFERENCES users(id) 
); 
 
INSERT INTO users(name, active) VALUES 
('Carlos Fer', 1), 
('Ana Calderon', 1), 
('Luis Torres', 0);