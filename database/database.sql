-- Création de la base de données
CREATE DATABASE IF NOT EXISTS mini_facebook;
USE mini_facebook;

-- Suppression de la table si elle existe déjà
DROP TABLE IF EXISTS users;

-- Création de la table des utilisateurs
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    profile_pic VARCHAR(255) DEFAULT 'default.png',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
